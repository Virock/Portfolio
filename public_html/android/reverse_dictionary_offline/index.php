<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Reverse Dictionary (Offline)", "Reverse dictionary, Offline reverse dictionary, Android reverse dictionary, Free android reverse offline dictionary");
pageHeader("REVERSE DICTIONARY (OFFLINE)", "$rootFolderHere/images/reverse-dictionary-bg.jpg");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">As the name suggests, this android application collects a sentence or statement from the user and returns words that best fit the description. It makes use of a database constructed from <a target='_blank' href="http://www.mso.anu.edu.au/~ralph/OPTED/">The Online Plain Text English Dictionary</a> so it doesn't need an internet connection. The application can be gotten from this link <a href='Reverse_Dictionary_(Offline).apk'>Reverse Dictionary (Offline)</a></p>
<?php

$images = ["$rootFolderHere/images/reverse_dictionary_img1.png", "$rootFolderHere/images/reverse_dictionary_img2.png"];
$features[] = ["Reverse dictionary", "Have an idea or concept in your head but can't find the right word? This app gets that word for you. Simply enter what you remember, the app does the rest."];
$features[] = ["Works offline", "Don't have internet connection? No problem."];
$features[] = ["Fast results", "Hate waiting? Your results will be out before you know it."];
$features[] = ["Learn new words", "The statement you enter might have a word that more specifically describes it."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
