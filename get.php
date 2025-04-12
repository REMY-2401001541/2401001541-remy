<!DOCTYPE html>
<html>
<head>
    <title>Password Form (GET Method)</title>
</head>
<body>

<h2>Enter Your Password</h2>

<form method="get" action="">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['password'])) {
    $password = $_GET['password'];
    echo "<p>You entered: <strong>$password</strong></p>";
}
?>

</body>
</html>
