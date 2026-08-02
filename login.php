<?php

if(isset($_GET['login']))
{

$email=$_GET['email'];
$password=$_GET['password'];

if($email=="admin@gmail.com" && $password=="Admin123")
{
header("Location: main.php");
exit();
}
else
{
echo "<script>alert('Invalid Email or Password');</script>";
}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Language Club Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2> Language Club Login</h2>

<img src="club.jpg" width="250" height="150">

<form method="get">

<label>Email</label>

<input type="email"
name="email"
required>

<label>Password</label>

<input type="password"
name="password"
required>

<br><br>

<center>

<input type="submit"
name="login"
value="Login">

<input type="reset"
value="Reset">

</center>

</form>

<br>

<center>

<a href="register.php">

<button type="button">New Member? Register</button>

</a>

</center>

</div>

</body>

</html>