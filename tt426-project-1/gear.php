<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = 'Gear';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?> - Sports at Cornell</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
   <?php include("includes/header.php"); ?>

  <div class = "row">
    <div class = "column1">
      <h1 class = "center">Cornell Store</h1>
      <figure>
        <img class = "picture" src = "images/cornellStore.jpg" alt = "Cornell Store">
        <figcaption>Photo taken from <a href = "https://commons.wikimedia.org/wiki/File:Cornell_Store,_Cornell_University.jpg">Cornell Store Wikipedia Page</a></figcaption>
        <!-- Image taken from https://commons.wikimedia.org/wiki/File:Cornell_Store,_Cornell_University.jpg -->
      </figure>
      <p class = "grey center">Gear: Sports clothes for soccer, baskeball, baseball, American football, and etc</p>
      <p class = "grey center">Direction: Accross Williard Straight Hall</p>
      <p class = "grey center">For more information visit the <a href = "https://www.cornellstore.com/">Official Cornell Store Webpage</a></p>
    </div>

    <div class = "column1">
      <h1>Eastern Mountain Sports</h1>
      <figure>
        <img class = "picture" src = "images/shop2.jpg" alt = "Eastern Mountain Sports">
        <figcaption>Photo taken from <a href = "https://www.ems.com/store-details?StoreID=129">Eastern Mountain Sports</a></figcaption>
        <!-- Image taken from https://www.ems.com/store-details?StoreID=129 -->
      </figure>
      <p class = "grey center">Gear: Hiking Equipments, backpacks, climbing equipment, shoes</p>
      <p class = "grey center">Address: Threshold Plaza, 722 South Meadow Street #1100</p>
      <p class = "grey center">For more information visit <a href = "https://www.ems.com/">Eastern Mountain Sport Webpage</a></p>
    </div>

    <div class = "column1">
      <h1 class = "center">Old Goat Gear Exchange</h1>
      <figure>
        <img class = "picture" src = "images/shop3.jpg" alt = "old Goat Gear Exchange">
        <figcaption>Photo taken from <a href = "https://pocketsights.com/tours/place/Old-Goat-Gear-Exchange-2926">Old Goat Gear Exchange</a></figcaption>
        <!-- Image taken from https://pocketsights.com/tours/place/Old-Goat-Gear-Exchange-2926 -->
      </figure>
      <p class = "grey center">Gear: Cycling gear, climbing gear</p>
      <p class = "grey center">Address: 318E State St</p>
      <p class = "grey center">For more information visit <a href = "https://oldgoatgearexchange.com/">Old Gear Exchange Webpage</a></p>
    </div>
  </div>

   <?php include("includes/footer.php"); ?>
</body>


</html>
