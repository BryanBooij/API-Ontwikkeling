<?php


include('index.php');

$title = $_GET['title'];


$jsonConvert = new JsonConversie($title);


$jsonConvert->setAPIUrl("http://www.omdbapi.com/?apikey=186be766");


$jsonConvert->Conversie($jsonConvert->url, $jsonConvert->title);


$movieInfo = $jsonConvert->getMovieInfo("Poster");

var_dump($movieInfo);



echo '<img src="'.$movieInfo.'" /><br />';
echo"<button>toevoegen</button>";

?>