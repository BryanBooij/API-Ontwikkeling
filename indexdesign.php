<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>IMDB Movie Watchlist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<h1>Movies</h1>
<!-- Search form -->
<form class="form-search navbar-search pull-left" action="" method="Post">
    <div class="input-append">
        <input type="text" class="appendedInputButton input-medium" name="title" id="search_term" placeholder="Movie/Show Title">
               <input type="submit" class="btn" name="sb" value="Zoek op film" />
    </div>
</form>


<?php


include('index.php');

$title = $_POST['title'];


$jsonConvert = new JsonConversie($title);


$jsonConvert->setAPIUrl("http://www.omdbapi.com/?apikey=186be766&t=");


$jsonConvert->Conversie($jsonConvert->url, $jsonConvert->title);


$movieInfo = $jsonConvert->getMovieInfo("Poster"); //verander hier je argumenten om de juiste film data op te halen



echo '<img src="'.$movieInfo.'" /><br />';


?>

</body>
</html>