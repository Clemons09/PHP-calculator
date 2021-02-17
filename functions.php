<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
</head>
<body>

<?php

  if(isset($_POST['submit'])) {

    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {

      if($_POST['op'] == 'add') {
        $prod = $_POST['num1'] + $_POST['num2'];
      }
      if($_POST['op'] == 'sub') {
        $prod = $_POST['num1'] - $_POST['num2'];
      }
      if($_POST['op'] == 'divd') {
        $prod = $_POST['num1'] / $_POST['num2'];
      }
      if($_POST['op'] == 'mult') {
        $prod = $_POST['num1'] * $_POST['num2'];
      }

      echo $prod;
    } else {
      echo "Please enter numeric values";
    }
  }
?>
<br><br>
  <a href="practice.php">Home</a>
</body>
</html>