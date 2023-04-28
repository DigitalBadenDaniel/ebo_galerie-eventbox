<section class="block quote">
    <div class="container">
        <div class="row flex-row align-items-center">
            <div class="col-lg-2 offset-lg-2" data-aos="fade-up" data-aos-duration="1500">
                <div class="text-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-duration="1500">
                <div class="text-center text-lg-left">
                    <h3 class="color-4 mb-lg-0 mb-3"><?php the_sub_field( 'headline' ); ?></h3>
                </div>
            </div>
        </div>
        <div class="row mt-lg-6 mt-4">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                <?php echo apply_shortcodes('[trustindex no-registration=google]'); ?>
                <div class="text-center my-4"><span><strong>Google</strong> Gesamtbewertung <strong>5 von 5</strong></span></div> 
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
<div class="my-4 text-center">
                    <!-- ProvenExpert Bewertungssiegel -->
<span  id="provenexpert_circle_widget_mzkta" style="text-decoration:none;"></span><script type="text/javascript" async src="https://www.provenexpert.com/widget/circlewidget.js?s=135&id=mzkta&u=14Jp3NwZjymZiEQA5VGBkEwZ48TA1LmA"></script>
<!-- ProvenExpert Bewertungssiegel -->
                </div>
                <div class="text-center">
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
                </div>
                

            </div>
        </div>
        <div class="row block">
            <div class="col-lg-6 offset-lg-3" data-aos="fade-up" data-aos-duration="1500">
                <div class="text-center">
                    <h3 class="small-underline-center"><?php the_sub_field( 'headline_2' ); ?></h3>
                    <p><?php the_sub_field( 'text' ); ?></p>
                    <?php $button = get_sub_field( 'button' ); ?>
			<?php if ( $button ) : ?>
				<a class="btn btn-eb" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
			<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>