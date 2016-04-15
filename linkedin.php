<?php 

$pageURL = "http://www.example.com";
$format = "&format=json";
$linkedInURL = "https://www.linkedin.com/countserv/count/share?url=" . $pageURL . $format;
$linkedInResponse = file_get_contents($linkedInURL);
$jsonResponse = json_decode($linkedInResponse);

/* Example output

{

    "count": ​0,
    "fCnt": "0",
    "fCntPlusOne": "1",
    "url": "http://www.example.com"

}

*/

?>