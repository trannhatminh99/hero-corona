<?php
 require_once('./WebClient.php');
$targetUrl = 'https://www.worldometers.info/coronavirus/';
$webClient = new WebClient();

$filenameBk = "get-data.txt";
if ( file_exists($filenameBk) && ( filemtime($filenameBk) + (60 * 60)) < time() ) {
    $getData = file_get_contents($filenameBk);
} else {
    if( !($getData = $webClient->Navigate( $targetUrl )) ) {
        trigger_error( "Could not load the index page.", E_USER_ERROR );  
    }
  
    
    $myfile  = fopen($filenameBk, "w+") or die("Unable to open file!");
    fwrite($myfile, $getData);
    fclose($myfile);
}
  $output = array();
  preg_match("'<div class=\"container\"> (.*?)</div>'si", $getData, $getDataOutput);
  
  $dom = new DOMDocument();

    $dom->loadHTML($getDataOutput[1]);

    $xpath = new DOMXPath($dom);

    $matches = $xpath->query('//div[@class="maincounter-number"]');
   
      $div = $div->item(0);

echo $dom->saveXML($div);

 print_r($matches);exit;
 
  $getDataOutput = array();
  preg_match_all('@<(div|em) class=\"maincounter-number\" (style=\"(.+?)\")>(.+?)</\1>@is', $getData, $matches);
 
  print_r($matches);exit;
  $output['total']  = $getDataTotal[1];
  
  
  $output['table']  = $getDataOutput[1];
  
  print_r($getDataOutput[0]);exit;
  
?>