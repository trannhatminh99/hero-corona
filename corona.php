<?php
require_once('./WebClient.php');
$targetUrl = 'https://www.worldometers.info/coronavirus/';
$webClient = new WebClient();

$filenameBk = "get-data.txt";
if (file_exists($filenameBk) && (filemtime($filenameBk) + (60 * 60)) < time()) {
    $getData = file_get_contents($filenameBk);
} else {
    if (!($getData = $webClient->Navigate($targetUrl))) {
        trigger_error("Could not load the index page.", E_USER_ERROR);
    }


    $myfile = fopen($filenameBk, "w+") or die("Unable to open file!");
    fwrite($myfile, $getData);
    fclose($myfile);
}
$output = array();
preg_match_all("'<div class=\"tab-content\" [^>]+>(.*?)</div>'si", $getData, $getDataOutputTable);

$filenameTable = "data-table.txt";

if(file_exists($filenameTable) && (filemtime($filenameBk) + (60 * 60)) < time())
{
    
} else {
    $myfileTable = fopen($filenameTable, "w+") or die("Unable to open file!");
    fwrite($myfileTable, $getDataOutputTable[0][0]);
    fclose($myfileTable);
}


$dom = new DOMDocument();

$dom->loadHTML();

$xpath = new DOMXPath($dom);

preg_match('@<(div|em) class=\"maincounter-number\" (style=\"(.+?)\")>(.+?)</\1>@is', $getData, $recovered);
preg_match_all('@<(div|em) class=\"maincounter-number\">(.+?)</\1>@is', $getData, $matches);



$output['total_cases'] = $matches[0][1];
$output['total_deaths'] = $matches[0][0];
$output['total_recovered'] = $recovered[0];
$output = json_encode($output);
$filenametotal = "total.txt";
if(file_exists($filenametotal) && (filemtime($filenametotal) + (60 * 60)) < time())
{
    
} else {
    $myfileTotal = fopen($filenametotal, "w+") or die("Unable to open file!");
    fwrite($myfileTotal, $output);
    fclose($myfileTotal);
}
?>
