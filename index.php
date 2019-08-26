<?php
include ('register.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

<center> <form method="post" action="register.php">
        <center><h1>Registration Form</h1></center>
        

        <div><label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"  size=70 required><br><br>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" size=70 required><br><br>

         <label><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" size=70 required><br><br>

        <label><b>Confirmpassword</b></label>
        <input type="password" placeholder="Enter password" name="confirmpassword" size=70 required><br><br>

         <label><b>Firstname</b></label>
        <input type="text" placeholder="Enter Firstname" name="firstname" size=70 required><br><br>

        <label><b>Lastname</b></label>
        <input type="text" placeholder="Enter Lastname" name="lastname" size=70 required><br><br>

        <label><b>Gender</b></label>
        <input type="radio"  name="gender" value="Female" size=70 required>Female
        <input type="radio"  name="gender" value="Male"   size=70 required>Male
        <input type="radio"  name="gender" value="Other"  size=70 required>Other<br><br>

        <label><b>DOB</b></label>
        <input type="date" placeholder="Enter dob" name="dob" size=70 required><br><br>

        <label><b>Country</b></label>
        <select name="country">
        	<option>India</option>
        	<option>Australia</option>
        	<option>Bangladesh</option>
        	<option>Canda</option>
        	<option>Denmark</option>
        	<option>France</option>
        	<option>Iran</option>
        	<option>Japan</option>
        	<option>Nepal</option>
        	<option>Korea</option></select><br><br>

        <label><b>Address</b></label>
        <textarea type="text" placeholder="Enter Address" name="address" size=70 required></textarea><br><br>

        <label><b>Phoneno</b></label>
        <input type="number" placeholder="Enter Phoneno" name="phoneno" size=70 required><br><br>

        <label><b>Status</b></label>
        <input type="radio"  name="status" value="married" required>Married
        <input type="radio"  name="status" value="unmarried" required>Unmarried<br><br>

        <label><b>Hobby</b></label>
        <input type="text" placeholder="Enter Hobby" name="hobby" size=70 required></input><br><br>

        <label><b>Aboutus</b></label>
        <textarea type="text" placeholder="Aboutus" name="aboutus" size=70 required></textarea><br><br>

        <label><b>Skills</b></label>
        <input type="text" placeholder="Enter Skills" name="skills" size=70 required></input><br><br>



      <button type="submit" name="submit" value="submit" class="registerbtn">Submit</button>

</form></center>  
</body>
</html>