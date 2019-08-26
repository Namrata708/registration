<?php
$username="";
$email="";
$password="";
$confirmpassword="";
$firstname="";
$lastname=""; 
$gender="";
$dob="";
$country="";
$address="";
$phoneno="";
$status="";
$hobby="";
$aboutus="";
$skills="";




$db=mysqli_connect('localhost','root','','register');

//if save button is clicked
if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	    $confirmpassword = $_POST['confirmpassword'];
	    $firstname = $_POST['firstname'];
	    $lastname = $_POST['lastname'];
	    $gender = $_POST['gender'];
	    $dob = $_POST['dob'];
	    $country = $_POST['country'];
		$address = $_POST['address'];
		$phoneno = $_POST['phoneno'];
		$status = $_POST['status'];
		$hobby = $_POST['hobby'];
		$aboutus = $_POST['aboutus'];
		$skills = $_POST['skills'];



 $query = "INSERT INTO reg_info (username,email,password,confirmpassword,firstname,lastname,gender,dob,country,address,phoneno,status,hobby,aboutus,skills)VALUES('$username','$email','$password','$confirmpassword','$firstname','$lastname','$gender','$dob','$country','$address','$phoneno','$status','$hobby' ,'$aboutus','$skills')";	

 mysqli_query($db,$query);

 if ($db->connect_error) {
 		die("Connection failed:" .$db->connect_error);
 	}	
 	else{
 		echo "Connection successfully";
 	}
 	//header('Location:index.php');
 }
 ?>