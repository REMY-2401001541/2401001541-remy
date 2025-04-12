post
<!-- save this as post_password.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Password using POST</title>
</head>
<body>

<h2>Enter Password (POST method)</h2>

<form method="post" action="post_password.php">
  <label>Password:</label>
  <input type="password" name="password">
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    echo "<p>You entered (POST): <strong>$password</strong></p>";
}
?>
</body>
</html>
