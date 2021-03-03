<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' href='styles.css' />
  <link rel='stylesheet' type='text/css' href='styles.php' />
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="number" name="num1" placeholder="Enter a number"><br><br>
      <select name="op">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="divd">Divide</option>
        <option value="mult">Multiply</option>
      </select><br><br>
    <input type="number" name="num2" placeholder="Enter a number"><br><br><br>
      <input class="submitbtn" type="submit" name="submit">
      <input class="clearbtn" type="reset" name="Clear">
      <br><br><br>
  </form>

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
      
      echo "<p style='border: 1px solid green; color:red; position:absolute; left: 45%; top: 42%; padding: 10px;'> Answer: " . $prod . "</p>";
    } else {
      echo "Please enter numeric values";
    }
  }
?>
<script type="text/javascript" src="app.js"></script>
</body>
</html>