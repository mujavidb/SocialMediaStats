<?php 

#Find the total number of likes, shares and comments for a page
$pageURL = "http://www.example.com";
$format = "&format=json";
$facebookURL = "https://api.facebook.com/method/links.getStats?urls=" . $pageURL . $format;
$facebookResponse = file_get_contents($facebookURL);
$jsonResponse = json_decode($facebookResponse);

/* Example output
[

    {
        "url": "http://www.example.com/",
        "normalized_url": "http://www.example.com/",
        "share_count": ​391,
        "like_count": ​18563,
        "comment_count": ​427,
        "total_count": ​19381,
        "click_count": ​10,
        "comments_fbid": "802957006431274",
        "commentsbox_count": ​320
    }

]
*/

?>