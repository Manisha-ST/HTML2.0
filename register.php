<?php
if(isset($_POST['submit']))
{
?>
<script>
alert("Registration Successful!");
window.location="main.php";
</script>
<?php
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Language Club Registration</title>

<link rel="stylesheet" href="style.css">

<script>

function validateForm()
{
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirm").value;

    if(password != confirm)
    {
        alert("Password and Confirm Password do not match.");
        document.getElementById("confirm").focus();
        return false;
    }

    return true;
}

</script>

</head>

<body>

<div class="container">

<h2> Language Club Registration</h2>

<form method="post" onsubmit="return validateForm()">

<label>Full Name</label>

<input type="text"
name="name"
required
pattern="[A-Za-z ]{3,30}"
title="Enter only letters (3 to 30 characters)">

<label>Email Address</label>

<input type="email"
name="email"
required>

<label>Password</label>

<input type="password"
id="password"
name="password"
required
pattern="^(?=.*[A-Za-z])(?=.*[0-9]).{6,12}$"
title="Password must be 6-12 characters and contain at least one letter and one number">

<label>Confirm Password</label>

<input type="password"
id="confirm"
name="confirm"
required>

<label>Age</label>

<input type="number"
name="age"
min="18"
max="40"
required>

<label>Date of Birth</label>

<input type="date"
name="dob"
required>

<label>Gender</label>

<input type="radio" name="gender" value="Male" required> Male

<input type="radio" name="gender" value="Female"> Female

<input type="radio" name="gender" value="Other"> Other

<br><br>

<label>Languages Interested</label>

<input type="checkbox" name="language[]" value="English"> English

<input type="checkbox" name="language[]" value="French"> French

<input type="checkbox" name="language[]" value="German"> German

<input type="checkbox" name="language[]" value="Japanese"> Japanese

<br><br>

<label>Learning Mode</label>

<select name="mode" required>

<option value="">Select</option>

<option>Online</option>

<option>Offline</option>

<option>Hybrid</option>

</select>

<label>Phone Number</label>

<input type="text"
name="phone"
required
pattern="[0-9]{10}"
title="Enter exactly 10 digits">

<label>Upload ID Card</label>

<input type="file"
name="photo">

<label>Reason for Joining</label>

<textarea
name="reason"
rows="4"
required></textarea>

<br><br>

<center>

<input type="submit"
name="submit"
value="Register">

<input type="reset"
value="Reset">

</center>

</form>

</div>

</body>
</html>