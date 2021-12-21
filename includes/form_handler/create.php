<?php
$mysqli=new mysqli("localhost","root","","ContentSharingPlatform") or die("Could not connect");
$error=[];
if(isset($_POST['submit-admin'])){
	$username=clean($_POST['username']);
	$email=clean($_POST['email']);
	$password=$_POST['password'];

	


	if (empty($username)){
       array_push($error,"<p class='alert atert-danger'>Username is required</p>");
       header("Location: ../../cms-admin.php?Username_Required");
	} elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		array_push($error,"<p class='alert atert-danger'>Email is invalid</p>");
       header("Location: ../../cms-admin.php?Email_Invalid");
   }elseif (empty($email)){
       array_push($error,"<p class='alert atert-danger'>Email is required</p>");
       header("Location: ../../cms-admin.php?Email_Required");
   }elseif (empty($password)){
       array_push($error,"<p class='alert atert-danger'>Password is required</p>");
       header("Location: ../../cms-admin.php?Password_Required");

   }elseif (strlen($password)<=5){
   	array_push($error,"<p class='alert atert-danger'>Password is too short</p>");
       header("Location: ../../cms-admin.php?Password_Short");

   }else{
   	if(empty($error)){
   	//$rand=rand(1,3);
   	//switch($rand):{
   	//	case "1":
   		$profile_pic="users/profile_pics/defaults/image1.webp";

   	$hashedPassword=md5($password);
   	$sql=mysqli_query($mysqli,"INSERT INTO users(username,email,password,profile_pic,is_active,post_id,comment_id,role) VALUES ('$username','$email','$hashedPassword','$profile_pic','yes','0', '0','Admin');");
   		header("Location: ../../cms-admin.php");
   	}
   }
}

   


	function clean($data){
		global $mysqli;
		$data=htmlspecialchars($data);
		$data=mysqli_real_escape_string($mysqli,$data);
		$data=stripslashes($data);
		$data=strip_tags($data);
		return $data;

	}
	print_r($error);