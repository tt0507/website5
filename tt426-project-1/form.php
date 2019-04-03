<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = 'Form';
$show_error_email = FALSE;
$show_error_sports = FALSE;
$show_error_page = FALSE;
$show_error_comment = FALSE;
$email = "";
$sports = [];
// $sports_check = ["soccer", "basketball", "tennis", "aFootball", "baseball", "iHockey"];
$page = "";
$comment = "";
$checkbox = true;
$radiob = true;

if (isset($_POST['submit'])) {
  $valid_form = TRUE;

  $email = $_POST['email'];
  $comment = $_POST['comment'];

  if($email == ''){
    $valid_form = FALSE;
    $show_error_email = TRUE;
  }

  if (isset($_POST['sports'])) {
    foreach($_POST['sports'] as $sport){
      array_push($sports, $sport);
      // echo $sports;
    }
    // $sports = $_POST['sports']
  } else {
    $checkbox = false;
  }

  if (!$checkbox){
    $valid_form = FALSE;
    $show_error_sports = TRUE;
  }

  if (isset($_POST['page'])) {
    $page = $_POST['page'];
  } else {
    $radiob = false;
  }

  if (!$radiob){
    $valid_form = FALSE;
    $show_error_page = TRUE;
  }

  if ($comment == ''){
    $valid_form = FALSE;
    $show_error_comment = TRUE;
  }

} else {
    // $sports = $_POST['sports'];
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?>- Sports at Ithaca</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <h2 class = "grey">Please give us feedback!</h2>

  <?php if (isset($valid_form) && $valid_form) {?>
    <fieldset class = "grey">
      <h1>Thank you for Submitted the form</h1>
      <p>Your opinions are greatly appreciated</p>
      <p>Please check whether the input is correct</p>

      <p class = "right grey">Email: <?php echo $email?></p>
      <p class = "right grey">Favorite sports: <?php foreach($sports as $element){echo "<li class = rightmost grey>".$element."</li>";}?></p>
      <p class = "right grey">Most helpful page: <?php echo $page?></p>
      <p class = "right grey">Improvments/Comment: <?php echo $comment ?></p>

    </fieldset>

  <?php } else { ?>
  <form id = "" method = "post" action = "form.php" novalidate>
    <fieldset class = "space grey">
      <legend>Fill Email Address</legend>
      <label class = "grey">Email:</label>
      <input class = "email_right" type = "email" name = "email" value = "<?php echo ($email); ?>">
     <p class="formError" <?php if (!$show_error_email) {echo "hidden";} ?>> Please do not leave blank.</p>
    </fieldset>

    <fieldset class = "space grey">
      <legend>What sports do you enjoy playing?</legend>
      <label class = "grey">Sports:</label>
      <input class = "email_right" type = "checkbox" name  = "sports[]" value = "Soccer" <?php if (in_array("Soccer", $sports)) {echo "checked";} ?>> Soccer
      <input class = "email_right" type = "checkbox" name = "sports[]" value = "Basketball" <?php if (in_array("Basketball", $sports)) {echo "checked";} ?> > Basketball
      <input class = "email_right" type = "checkbox" name = "sports[]" value = "Tennis" <?php if (in_array("Tennis", $sports)) { echo "checked";} ?>> Tennis
      <input class = "email_right" type = "checkbox" name = "sports[]" value = "American Football" <?php if (in_array("American Football", $sports)) { echo "checked";} ?>> American Football
      <input class = "email_right" type = "checkbox" name = "sports[]" value = "Baseball" <?php if (in_array("Baseball", $sports)) {echo "checked";} ?>> baseball
      <input class = "email_right" type = "checkbox" name = "sports[]" value = "Ice Hockey" <?php if (in_array("Ice Hockey", $sports)) {echo "checked";} ?>> Ice Hockey
      <p class="formError" <?php if (!$show_error_sports) {echo "hidden";} ?>> Please select at least one input.</p>
    </fieldset>

    <fieldset class = "space grey">
      <legend>Which page was the most helpful?</legend>
      <label class = "grey">Page:</label>
      <input class = "email_right" type = "radio" name = "page" value = "sports" <?php if ($page == "sports") {echo "checked";} ?>> Sports
      <input class = "email_right" type = "radio" name = "page" value = "gear" <?php if ($page == "gear") {echo "checked";} ?>> Gear
      <p class="formError" <?php if (!$show_error_page) {echo "hidden";} ?>> Please select at least one input.</p>
    </fieldset>

    <fieldset class = "space">
      <legend class = "grey">Improvements for the Website</legend>
      <label class = "grey">Comments:</label>
      <textarea class = "email_right" name = "comment" value = "<?php echo ($comment); ?>"></textarea>
      <p class="formError" <?php if (!$show_error_comment) {echo "hidden";} ?>> Please do not leave blank.</p>
    </fieldset>

    <input class = "space email_right" name = "submit" type="submit" value="submit"/>
  </form>

  <?php }?>

   <?php include("includes/footer.php"); ?>
</body>


</html>
