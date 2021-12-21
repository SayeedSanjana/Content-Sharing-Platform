<?php
$mysqli=new mysqli("localhost","root","","ContentSharingPlatform") or die("Could not connect");
$error=[];

if(isset($_POST['submit-login'])){


	$email=$_POST['email'];
	$password=$_POST['password'];


	$query=mysqli_query($mysqli,"SELECT * FROM users WHERE email = '$email';");
	$row=mysqli_fetch_assoc($query);

	$db_email=$row['email'];
	$db_password=$row['password'];
	$profile_pic=$row['profile_pic'];
	$db_id=$row['user_id'];
	$db_username=$row['username'];
	$db_role=$row['role'];


	$rehashed=md5($password);

	print_r($db_email);

	if($email===$db_email && $db_password===$rehashed && $db_role==='Admin'){
		session_start();
		$_SESSION['admin_Logged_in']=$email;
		$_SESSION['profile_pic']=$profile_pic;
		$_SESSION['admin_id']=$db_id;
		$_SESSION['admin_username']=$db_username;

		header("Location: ../../admin");
		
	}
	elseif($email===$db_email && $db_password===$rehashed && $db_role==='Normal'){
		session_start();
		$_SESSION['user_Logged_in']=$email;
		$_SESSION['user_pic']=$profile_pic;
		$_SESSION['user_id']=$db_id;
		$_SESSION['user_username']=$db_username;

		header("Location: ../../index.php");
		
	}else{
		$_SESSION['admin_log_email']=$email;
		header("Location: ../../cms-admin.php?wrong_entries");
	}
	}

	