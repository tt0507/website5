<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = 'Home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title;?> - Sports at Cornell</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <figure>
    <img class = "pic" alt = "Schoellkopf Field" src = "images/schoellkopf.jpg">
    <figcaption>Image taken from <a href = "http://www.insidecornellfootball.com/website/?page_id=40?d=1">Cornell Football</a><figcaption>
    <!-- Photo taken from http://www.insidecornellfootball.com/website/?page_id=40?d=1 -->
  </figure>

  <div class = "title-text">
    <h1 class = "black">Discover Cornell Thorough Sports</h1>
    <p>Find out what kind of sports there are to enjoy at Cornell whether you're new or want to continue.</p>
  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>
