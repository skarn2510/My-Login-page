<?php
session_start();
	$target_dir = "assets/images/uploads/";
	$_SESSION['user'] = [
					'name'=>$name,
					'username'=> $username,
					'email'=> $email,
					'pic_name'=> $profile_pic,
					'profile_pic'=>$target_dir.$profile_pic,
					'address'=>$address,
					'contact'=>$contact,
					'logedin'=>$logedin
				];
?>