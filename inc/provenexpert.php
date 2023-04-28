<?php
/**
 * ProvenExpert (https://www.provenexpert.com)
 *
 * for PHP 5.3 and newer versions
 *
 * Contact : support@provenexpert.com
 */

// API authentication
$yourApiId = '14Jp3NwZjymZiEQA5VGBkEwZ48TA1LmA';
$yourAPIKey = 'NjA1NWFkM2YyMWUwODRkMzM1NGJkZjUyYzJhMzdlYTE';

$apiUrl = 'https://www.provenexpert.com/api_rating_v2.json';

// cache options
$errorFile = '/provenexpert_error.txt';
$cacheFile = '/provenexpert_4b6d0e0c02c2f75f2a17c5f76c338b9a.json';
$cachePath = dirname($_SERVER['SCRIPT_FILENAME']) . $cacheFile;
$cachingTime = 3600; // in seconds
$scriptVersion = '1.8';


if (! file_exists($cachePath)) {
    @touch($cachePath, $cachingTime);
    @chmod($cachePath, 0666);
}

// check if user ca write the cache file, otherwise use the system temp directory
if (! is_writable($cachePath)) {
    $cachePath = sys_get_temp_dir() . $cacheFile;

    if (! file_exists($cachePath)) {
        @touch($cachePath, $cachingTime);
        @chmod($cachePath, 0666);
    }
}

if (function_exists('curl_init')) {
    try {
        // check if a cache file exists and its age inside the caching time range
        if (! file_exists($cachePath) || (time() - filemtime($cachePath)) > $cachingTime) {
            // init curl handler
            $curlHandler = curl_init();

            // set curl options
            curl_setopt($curlHandler, CURLOPT_TIMEOUT, 3);
            curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curlHandler, CURLOPT_URL, $apiUrl . '?v=' . $scriptVersion);
            curl_setopt($curlHandler, CURLOPT_USERPWD, $yourApiId . ':' . $yourAPIKey);
            if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {
                curl_setopt($curlHandler, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
            }

            // send call to api
            $json = curl_exec($curlHandler);

            if ($json === false) {
                // curl error
                $errorMessage = 'curl error (' . date('c') . ')';
                if (file_exists($cachePath)) {
                    $errorMessage .= PHP_EOL . PHP_EOL . 'last call: ' . date('c', filemtime($cachePath));
                }
                $errorMessage .= PHP_EOL . PHP_EOL . curl_error($curlHandler);
                $errorMessage .= PHP_EOL . PHP_EOL . print_r(curl_version(), true);
                @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
                $json = json_encode(array('status' => 'error', 'errors' => array('curl error')));
            }
            curl_close($curlHandler);

            // convert json to array
            $data = json_decode($json, true);

            if (! is_array($data)) {
                // json format is wrong
                $errorMessage = 'json error (' . date('c') . ')' . PHP_EOL . PHP_EOL . $json;
                if (file_exists($cachePath)) {
                    $errorMessage .= PHP_EOL . PHP_EOL . 'last call: ' . date('c', filemtime($cachePath));
                }
                @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
                $data = array('status' => 'error', 'errors' => array('json error'));
                $json = json_encode($data);
            }

            if ($data['status'] == 'success') {
                if (is_writable($cachePath)) {
                    // save data in cache file
                    @file_put_contents($cachePath, $json);
                } else {
                    echo('<!-- file access error [v' . $scriptVersion . '] -->');
                }
            } elseif(! in_array('wrongPlan', $data['errors'])) {

                if (file_exists($cachePath)) {
                    // it used the old data
                    $tmp = json_decode(file_get_contents($cachePath), true);

                    if (is_array($tmp)) {
                        $data = $tmp;
                        touch($cachePath, time() - round($cachingTime / 10));
                        echo('<!-- from cache because errors [v' . $scriptVersion . '] -->');
                    }
                } else {
                    echo('<!-- no caching -->');
                }
            }
        } else {
            // get data from cache file
            $infoTime = $cachingTime;
            if (file_exists($cachePath)) {
                $infoTime = ($cachingTime - (time() - filemtime($cachePath))) . '/' . $infoTime;
            }
            echo('<!-- from cache (' . $infoTime . ') -->');
            $data = json_decode(file_get_contents($cachePath), true);
        }

        // print aggregate rating html
        if ($data['status'] == 'success') {
            echo($data['aggregateRating']);
        } else {
            // sets the file as outdated
            @touch($cachePath, $cachingTime);

            $errorMessage = 'response error';
            if (isset($data['errors']) && is_array($data['errors'])) {
                $errorMessage .= ' (' . implode(', ', $data['errors']) . ')';
            }
            $errorMessage .= ' [v' . $scriptVersion . ']';

            echo('<!-- ' . $errorMessage . ' -->');
        }
    } catch (Exception $e) {
        $errorMessage = 'exception' . PHP_EOL . PHP_EOL . $e->__toString();
        @file_put_contents(dirname($cachePath) . $errorFile, $errorMessage);
        echo('<!-- exception error [v' . $scriptVersion . '] -->');
    }
} else {
    echo('<!-- no curl package installed [v' . $scriptVersion . '] -->');
}

?>