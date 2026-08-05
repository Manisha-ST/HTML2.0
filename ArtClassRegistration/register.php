<?php

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$course = $_POST["course"];
$batch = $_POST["batch"];
$experience = $_POST["experience"];

?>

<!DOCTYPE html>
<html>

<head>

<title>Registration Details</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

<div class="logo">
<h2>🎨 Creative Canvas</h2>
</div>

<nav>

<ul>

<li><a href="index.html">Home</a></li>

<li><a href="about.html">About</a></li>

<li><a href="gallery.html">Gallery</a></li>

<li><a href="register.html">Register</a></li>

<li><a href="contact.html">Contact</a></li>

</ul>

</nav>

</header>

<section class="success-box">

<h1>🎉 Registration Successful</h1>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Age</th>
<td><?php echo $age; ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

<tr>
<th>Course</th>
<td><?php echo $course; ?></td>
</tr>

<tr>
<th>Batch</th>
<td><?php echo $batch; ?></td>
</tr>

<tr>
<th>Experience</th>
<td><?php echo $experience; ?></td>
</tr>

</table>

<br><br>

<a href="success.php" class="btn">Continue</a>

</section>

<footer>

<p>© 2026 Creative Canvas Art Academy</p>

</footer>

</body>

</html>