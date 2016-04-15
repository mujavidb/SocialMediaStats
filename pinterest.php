<?php


$pageURL = "http://www.example.com";
$pinterestURL = "https://api.pinterest.com/v1/urls/count.json?&url=" . $pageURL;
$pinterestResponse = file_get_contents($pinterestURL);
$cleanResponse = preg_replace( '/^receiveCount\((.*)\)$/', '\\1', $pinterestResponse);
$jsonResponse = json_decode($cleanResponse);


/* Example output
{
	"url": "https://www.example.com",
	"count": 1546
}
*/

?>