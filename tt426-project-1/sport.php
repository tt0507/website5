<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = 'Sport';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?>- Sports at Cornell</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
   <?php include("includes/header.php"); ?>

   <div class = "row">
     <div class = "column">
        <h1>Soccer</h1>
        <div class = "container">
          <figure>
            <img class = "picture" alt = "Jessup Field" src = "images/jessupField.jpg">
            <!-- Picture taken from https://en.wikipedia.org/wiki/Cornell_North_Campus#/media/File:CornellNorth1.JPG -->
            <figcaption> Photo taken from <a href = "https://en.wikipedia.org/wiki/Cornell_North_Campus#/media/File:CornellNorth1.JPG">Cornell North Campus Wikipedia Page</a>
          </figure>
          <div class = "soccer">
            <p>Place: Jessep Field<p>
            <p>Avaliable Season: Spring, Summer, Autumn</p>
            <p>Closest Building: RPCC</p>
          </div>
        </div>
      </div>

      <div class = "column">
        <h1>Basketball</h1>
        <div class = "container">
          <figure>
            <img class = "picture" alt = "Appel Basketball Court" src = "images/appelCourt.jpg">
            <!-- Picture taken from https://en.wikipedia.org/wiki/Cornell_North_Campus#/media/File:CornellNorth1.JPG -->
            <figcaption> Photo taken from <a href = "https://en.wikipedia.org/wiki/Cornell_North_Campus#/media/File:CornellNorth1.JPG">Cornell North Campus Wikipedia Page</a>
          </figure>
          <div class = "basketball">
            <p>Place: Appel Basketball Court<p>
            <p>Avaliable Season: Spring, Summer, Autumn</p>
            <p>Closest Building: RPCC</p>
          </div>
        </div>
      </div>

      <div class = "column">
        <h1>Tennis</h1>
        <div class = "container">
          <figure>
            <img class = "picture" alt = "Reis Tennis Center" src = "images/tennis.jpg">
            <!-- Picture taken from http://reistenniscenter.com/event/magic/ -->
            <figcaption> Photo taken from <a href = "http://reistenniscenter.com/event/magic/">Reis Tennis Center</a>
          </figure>
          <div class = "tennis">
            <p>Place: Reis Tennis Center<p>
            <p>Avaliable Season: Spring, Summer, Autumn, Winter</p>
            <p>Address: 230 Pine Tree Rd, Ithaca, NY 14850</p>
          </div>
        </div>
      </div>
  </div>

  <div class = "row">
    <div class = "column">
      <h1>American Football</h1>
      <div class = "container">
          <figure>
            <img class = "picture" alt = "Schoellkopf Field" src = "images/aFootball.jpg">
            <!-- Picture taken from https://cornellbigred.com/sports/2007/7/30/SchoellkopfField.aspx?path=football -->
            <figcaption> Photo taken from <a href = "https://cornellbigred.com/sports/2007/7/30/SchoellkopfField.aspx?path=football">Cornell Sports</a>
          </figure>
          <div class = "aFootball">
            <p>Place: Schoellkopf Field<p>
            <p>Avaliable Season: Spring, Summer, Autumn</p>
            <p>Closest Building: Teagle Hall</p>
          </div>
        </div>
    </div>

    <div class = "column">
      <h1>Baseball</h1>
      <div class = "container">
          <figure>
            <img class = "picture" alt = "Roy Field" src = "images/baseball.png">
            <!-- Picture taken from http://ithacabaseball.com/site/ClientSite/article/3017923 -->
            <figcaption> Photo taken from <a href = "http://ithacabaseball.com/site/ClientSite/article/3017923">Ithaca Babe Ruth League</a>
          </figure>
          <div class = "baseball">
            <p>Place: Roy Field<p>
            <p>Avaliable Season: Spring, Summer, Autumn</p>
            <p>Closest Building: Gates Hall</p>
          </div>
        </div>
    </div>

    <div class = "column">
      <h1>Ice Hockey</h1>
      <div class = "container">
          <figure>
            <img class = "picture" alt = "Lynah Rink" src = "images/iceHockey.jpg">
            <!-- Picture taken from http://events.cornell.edu/event/public_skating_at_lynah_rink -->
            <figcaption> Photo taken from <a href = "http://events.cornell.edu/event/public_skating_at_lynah_rink">Cornell Event</a>
          </figure>
          <div class = "iceHockey">
            <p>Place: Lynah Rink<p>
            <p>Avaliable Season: Autumn, Winter</p>
            <p>Closest Building: Teagle Hall</p>
          </div>
        </div>
    </div>
  </div>

   <?php include("includes/footer.php"); ?>
</body>


</html>
