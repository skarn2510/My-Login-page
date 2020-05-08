<?php
session_start();
include "config.php";

// declare variables for input

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$logedin = false;

$profile_pic = $_FILES['profile_pic']['name'];
$tmp_name = $_FILES['profile_pic']['tmp_name'];
$enc_password = md5($password);
$target_dir = 'assets/images/uploads/';
// validation
	$select_email = "SELECT email FROM users WHERE email = '".$email."' OR `username`='{$username}'";
	
	
	$select_qry = mysqli_query($conn,$select_email);
   
	
// check If email exists
   $alreadyExist = false;

if($select_qry->num_rows > 0){
	$alreadyExist = true;

}
else{

	if($name !='' && $username !='' && $email !='' && $password !=''){
	// move the uploaded file to your local folder
	move_uploaded_file($tmp_name , $target_dir.$profile_pic);
	
	// Query to insert data into database
	$insert = "INSERT INTO users(name,username,email,password,contact,address,profile_pic) values('{$name}','{$username}','{$email}','{$enc_password}','{$contact}','{$address}','{$profile_pic}')";
	$insert_qry = mysqli_query($conn,$insert);
	$logedin = true;
	
	include "profile.php";
	header("location:template/index.php");
	}
	else{
		echo "Failed to register";
	}
}


mysqli_close($conn);
?>
<script>
<?php if($alreadyExist){ ?>
    alert("User alreadyExist");
    window.location.href = "template/registerpage.php";
<?php } ?>

</script>