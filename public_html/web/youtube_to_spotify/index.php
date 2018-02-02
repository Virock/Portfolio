<?php

//require_once ($_SERVER['DOCUMENT_ROOT'].'/methods.php');
$rootFolderHere = "../..";
require_once ("$rootFolderHere/methods.php");
topOfPage("Youtube to Spotify - Export youtube playlists to spotify", "Youtube to spotify, Export songs from youtube to spotify, Move songs from youtube to spotify, Export playlist from youtube to spotify");
pageHeader("Youtube to Spotify", "images/export_big.png");
navLinks();
?>
<p class="col-md-offset-2 col-md-8 col-md-offset-2 well-lg">This web app converts youtube playlists to spotify. You simply enter the url of the public youtube playlist (will not work with private playlists) and enter the name to give the new playlist on spotify and wait a while. It'll be done before you know it. Here is the link to the website <a target='_blank' href='https://virock.net/tools/youtube-to-spotify/'>Youtube to Spotify</a>.<br>You will need to give the app permission to access your spotify account. The only permission it requests is to manage your playlists.</p>
<?php

$images = ["images/export_img3.png", "images/export_img4.png"];
$features[] = ["Exports youtube playlists to Spotify", "Have 500+ songs in a youtube playlists and don't feel up to searching for and adding each one of the songs on spotify? It's too dangerous to go alone. Take this!"];
$features[] = ["Doesn't require installation", "It's online so you don't have to bother about storage space"];
$features[] = ["Efficient algorithm", "The algorithm used is super fast. It'll be done before you know it."];
$features[] = ["Very accurate", "This application will copy the right songs into your spotify account."];
about($images, $features);
require_once ("$rootFolderHere/bottomOfPage.php");
