<?php 
$GLOBALS["HTTP_GET_VARS"] = $_GET; 
$GLOBALS["HTTP_POST_VARS"] = $_POST; 
$GLOBALS["HTTP_FILES_VARS"] = $_FILES;
$GLOBALS["HTTP_POST_FILES"] = $_FILES;	
	ob_start();

	include('class/collector.php');
	include('config.php');

	$env 		= new Environment();
	$session 	= new Session();

	$lang	 		= $session->getValue('lang');
	if(empty($lang))
	{
		$lang	 	= 'en';
	}
	if(empty($env->get['file'])){$file = 'main.php';}
	else{$file = $env->get['file'];}
	if(empty($env->get['folder'])){$folder = $cfg['startfolder'];}
	else{$folder = $env->get['folder'];}
	if(isset($env->get['lang'])){$session->setValue('lang',$env->get['lang']);}


	$xmlcms = new xmlCMS;
	$xmlcms->ReadFolder('plugins');
	$Tree = $xmlcms->getList();

	$currentid = $xmlcms->getCurrentID($Tree,$folder);

	$menue = $xmlcms->getMenue($currentid);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENTA-ELECTRIC AG </title>
<link rel='shortcut icon' href='http://www.miggweb.de/penta/penta-electric.ico'>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-vertical.css" />
<style type="text/css">
<!--
body {
	margin-top: 30px;
}
-->
</style></head>

<body>

<table width="1116" height="782" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/schatten_oben.jpg" width="1116" height="13" /></td>
  </tr>
  <tr>
    <td height="750"><img src="images/schatten_links.jpg" width="19" height="750" /></td>
    <td width="1076" valign="top"><table width="1076" height="750"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" rowspan="2"><img src="images/Penta-electric_logo.gif" width="231" height="81" /></td>
        <td width="615">&nbsp;</td>
        <td width="24">&nbsp;</td>
        <td width="172" class="suchetext">&nbsp;</td>
        <td width="24">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="bottom" class="suchetext"><a href="#" class="suchetext">Search: <img src="images/suche-kasten.gif" width="99" height="16" border="0"/> <img src="images/detail.gif" width="16" height="16" border="0" /></a><br />
          <a href="#" class="suchetext">Print &nbsp; <img src="images/drucken.gif" width="26" height="15" border="0"/></a></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td width="25">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td colspan="2"><table width="610" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td><div align="left"><?php
          $i = 0;	
          	foreach($menue[1] as $key)
            {
			$style = 'menue';
				if($currentid == $key)
				{
					$style = 'menueaktiv';
				}
				$item = $Tree[$key];
               	print("	
<td><div style=\"position:relative;\" ");
if(count($item['childs']) > 0)
print ("onmouseover=\"document.getElementById('nav$i').style.visibility = 'visible';\" 
onmouseout=\"document.getElementById('nav$i').style.visibility = 'hidden';\"");
print (">
<a class=\"$style\"href=\"?folder=$item[path]\">".($i==0?"&nbsp;":"&nbsp;&nbsp;|&nbsp;&nbsp;").$item["titel_$lang"]." </a>
<div id=\"nav$i\" style=\"position:absolute; left:2px; top:15px; width:230px; visibility:hidden; background-color:#FFFFFF; border: 1px solid #FFFFFF;\">");


					foreach($item['childs'] as $key2)
					{
					$style = 'menue2';
					if($currentid == $key)
				{
					$style = 'menueaktiv2';
				}
						$item = $Tree[$key2];
					   	print("<a class=\"$style\" style=\"display:block;\" href=\"?folder=$item[path]\">&nbsp;&nbsp;&nbsp;&nbsp;".$item["titel_$lang"]."</a>");
					}	
				print "</div></td>";
				$i++;
				
           
			foreach($item['childs'] as $key3)
					{
						$item = $Tree[$key3];
					   	print("<a class=\"menue2\" style=\"display:block;\" href=\"?folder=$item[path]\">&nbsp;&nbsp;&nbsp;".$item["titel_$lang"]."</a>");
					}	
				print "</div></td>";
				$i++;
            }
	?>
              </div>          
            </div></td>
        </tr>
            </table></td>
        <td>&nbsp;</td>
        <td class="suchetext"><a href="index.php">Deutsch</a>&nbsp; |&nbsp; <a href="index_en.php">English</a>&nbsp; | <a href="index_fr.php">&nbsp;France </a></td>
        <td width="24">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="7" valign="top"><img src="<?php echo $folder; ?>/title_penta.jpg" alt="Titel" width="1076" height="203"/></td>
        </tr>
      <tr>
        <td><img src="images/pix_weiss.gif" width="24" height="1" /></td>
        <td rowspan="2"><img src="images/automatisch_besser_en.gif" width="182" height="38" /></td>
        <td width="25"><img src="images/pix_weiss.gif" width="24" height="8" /></td>
        <td><img src="images/pix_weiss.gif" width="580" height="1" /></td>
        <td><img src="images/pix_weiss.gif" width="24" height="1" /></td>
        <td><img src="images/pix_weiss.gif" width="180" height="1" /></td>
        <td><img src="images/pix_weiss.gif" width="24" height="8" /></td>
        </tr>
      <tr>
        <td height="19"></td>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="1" valign="bottom" ><span class="Newstext">News:</span></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td>&nbsp;</td>
        <td width="180" rowspan="2" valign="top" class="Newstextinhalt"><p><strong><a href="index.php?folder=plugins/news">Wir sind auf der ILMAC in<br /> 
          Basel.</a></strong></p>
          <p>ILMAC – das ist die in der Schweiz führende Industriemesse für   Forschung und Entwicklung, Umwelt- und Verfahrenstechnik in Pharma,   Chemie und Biotechnologie. </p>          <p><strong>21. bis 24. September 2010 Halle 1.0, Stand D24 </strong></p></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="330" colspan="3" valign="top"><div align="left" style="width:820px; height:325px; overflow-y:auto; overflow-x:hidden;  scrollbar-base-color: #8A96A1; scrollbar-arrow-color:#004C99; scrollbar-face-color:#D9E4EE; scrollbar-shadow-color:#FFFFFF;">
          <?php


          			if($file == 'main.php')
          			{
          				if(file_exists("$folder/main_$lang.php"))
          				{
          					$file = "main_$lang.php";
          				}
          				else
          				{
          					$file = "main.php";
          				}
          			}

					$hf = strpos($folder,'plugins/');
					if($hf === false)
					{
          				mail('info@migg.de','Hackversuch auf penta-electric.ch',$folder);				
					}
					else
					{
						if($hf == 0) include($folder . "/" . $file);
						else mail('info@migg.de','Hackversuch auf penta-electric.ch',$folder);	
					}

                  ?>
        </div></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td height="3" colspan="7"></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5" class="Fusstext">Penta Electric AG  •  Frankfurtstrasse 78 A  •  CH-4142 Münchenstein  •  Tel: + 41(0)61 416 36 36  •  Fax: + 41(0)61 416 36 66  •  info@penta-electric.ch •  www.penta-electric.ch</td>
        <td>&nbsp;</td>
        </tr>
    </table>
    </td>
    <td><div align="right"><img src="images/schatten_rechts.jpg" width="21" height="750" /></div></td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/schatten_unten.jpg" width="1116" height="19" /></td>
  </tr>
</table>

