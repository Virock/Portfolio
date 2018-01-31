<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Assetget - Get your dream home and vehicles", "Find your dream home, Purchase vehicles, Buy property, Purchase properties");
pageHeader("Assetget", "images/image-top.png");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">I built this website after i heard the plight of a newly wedded couple who had difficulty finding a house to live in. Its basically a crowd sourced property listing website that helps people buy and sell properties. Here is the link to the website <a target='_blank' href='https://assetget.com'>Assetget</a>.</p>
<?php

$images = ["images/image-1.png", "images/image-2.png"];
$features[] = ["Ease of access", "Find your dream home or vehicle with ease."];
$features[] = ["Crowed sourced", "The community provides details of properties to sell or rent"];
$features[] = ["Tailored to your needs", "The filtering system can be used to find exactly what you are looking for."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
