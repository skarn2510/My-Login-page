<?php
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$enc_password = md5($password);
$Incorrect = false;
$logedin = false;
$select_password = "SELECT password FROM users WHERE username = '".$username."' AND password = '".$enc_password."'";
$select_password_qry = mysqli_query($conn,$select_password);
	
if($select_password_qry->num_rows > 0){
	$logedin = true;
	include "profile.php";
	header("location:template/index.php");
	//echo $Incorrect;
	// echo "success";
}else{
	$Incorrect = true;
	// header("location:template/loginpage.php");
	// echo $Incorrect;
}

// exit();
?>
<script type="text/javascript">
	<?php if($Incorrect){ ?>
	// console.log($Incorrect);
    alert("Invalid credential");
    window.location.href = "/demo/template/loginpage.php";
<?php } ?>
</script>