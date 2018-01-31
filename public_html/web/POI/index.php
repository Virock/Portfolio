<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Points of Interest - Find the nearest point of interest in Calstatela.", "Calstatela points of interest, Locations in California State University Los Angeles");
pageHeader("Points of Interest", "images/image-top.png");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">This website was our group project for CS3220 (Web development) at Calstate la. It's basically a crowd sourced website for locating and getting directions to the nearest point of interest at Calstate la (there are different types of points of interests). We wrote it in JSP, Javascript and PHP. I don't have a server that supports JSP, so this is the link to the source code on github <a target='_blank' href='https://github.com/Virock/Points-of-Interests'>Points of interests</a>.</p>
<?php

$images = ["images/image-1.png", "images/image-2.png"];
$features[] = ["Crowd sourced information", "The community helps to add points of interests to the database"];
$features[] = ["Uses Google API", "Their API detects the closest point of interest to you and directs you to it"];
$features[] = ["Efficient and fast", "Thanks to the great work of our team, the system is extremely smooth and efficient. You'll be amazed"];
$features[] = ["Administration panel", "A section of the system can only be assessed by the admin to remove the work of trolls from the system."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
