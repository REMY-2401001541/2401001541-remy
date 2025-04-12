<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Color Guessing Game</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color:rgb(58, 41, 3);
    }

    h2 {
      color: #333;
    }

    .box {
      width: 200px;
      height: 200px;
      margin-top: 20px;
      border: 3px solid #000;
    }

    .message {
      margin-top: 20px;
      font-weight: bold;
      font-size: 18px;
    }

    select, button {
      padding: 10px;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<h2>Choose the Correct Color!</h2>

<form method="post">
  <label for="color">Select a color:</label><br>
  <select name="color" id="color">
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
    <option value="yellow">Yellow</option>
  </select><br>
  <button type="submit">Submit</button>
</form>

<?php
// Define the correct color
$correct_color = "green";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_color = $_POST["color"];

    echo "<div class='box' style='background-color: $selected_color;'></div>";

    if ($selected_color == $correct_color) {
        echo "<p class='message' style='color: green;'>Congratulations! You picked the correct color: $selected_color 🎉</p>";
    } else {
        echo "<p class='message' style='color: red;'>Oops! You picked: $selected_color. Try again!</p>";
    }
}
?>

</body>
</html>
