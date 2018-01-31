<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Reverse Dictionary (Online)", "Reverse dictionary, Online reverse dictionary, Android reverse dictionary, Free android reverse online dictionary");
pageHeader("REVERSE DICTIONARY (Online)", "images/reverse-dictionary-online-bg1.jpg");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">As the name suggests, this android application collects a sentence or statement from the user and returns words that best fit the description. It makes use the <a target='_blank' href="http://www.datamuse.com/api/">Datamuse api</a> and the <a target='_blank' href="https://developer.oxforddictionaries.com/documentation">Oxford Dictionaries api</a> so it needs an internet connection. The application can be gotten from this link <a href='Reverse_Dictionary_(Online).apk'>Reverse Dictionary (Online)</a></p>
<?php

$images = ["images/reverse_dictionary_online.png", "images/reverse_dictionary_online1.png"];
$features[] = ["Reverse dictionary", "Have an idea or concept in your head but can't find the right word? This app gets that word for you. Simply enter what you remember, the app does the rest."];
$features[] = ["Works online", "This application requires an internet connection"];
$features[] = ["Fast results", "Hate waiting? Your results will be out before you know it."];
$features[] = ["Very accurate", "The results gotten are extremely accurate."];
$features[] = ["Learn new words", "The statement you enter might have a word that more specifically describes it."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
