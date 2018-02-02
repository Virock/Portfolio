<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Crossroads - Life is short. Let's explore it together", "The truth, Jesus, Jesus Christ, Almighty, The gospel, Salvation, The only true God");
pageHeader("Crossroads", "images/image-top.png");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">I built this website for Crossroads. They are a group of volunteers who teach the international students at my school (California State University, Los Angeles) about American culture, norms and things we should avoid. I made great friends at their gatherings. Here is the link to the website <a target='_blank' href='https://virock.net/crossroads/'>Crossroads</a>.</p>
<?php

$images = ["images/image-1.png", "images/image-2.png"];
$features[] = ["Great company", "Make new friends in the gatherings"];
$features[] = ["Learn about American culture", "Learn the American way from Americans"];
$features[] = ["Great food", "Tasty cooking for your enjoyment."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
