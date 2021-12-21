<?php
$mysqli=new mysqli("localhost","root","","ContentSharingPlatform") or die("Could not connect");
$error=[];
if(isset($_POST['submit-user'])){
	$username=clean($_POST['username']);
	$email=clean($_POST['email']);
	$password=$_POST['password'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $phone=$_POST['phone'];
  //$image=$_FILES['image']['name'];
      

$profile_image=time().'-'. $_FILES['image-user']['name'];




      $dir='profile_pic/';
      $target_file=$dir.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'],$target_file);


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

   }

   elseif (empty($gender)){
       array_push($error,"<p class='alert atert-danger'>Gender is required</p>");
       header("Location: ../../cms-admin.php?Gender_Required");

   }

   elseif (empty($dob)){
       array_push($error,"<p class='alert atert-danger'>Date of Birth is required</p>");
       header("Location: ../../cms-admin.php?DOB_Required");

   }
   elseif (empty($phone)){
       array_push($error,"<p class='alert atert-danger'>Phone number is required</p>");
       header("Location: ../../cms-admin.php?Phone_No_Required");

   }
   else{
   	if(empty($error)){
   	//$rand=rand(1,3);
   	//switch($rand):{
   	//	case "1":
   		//$profile_pic="users/profile_pics/defaults/image1.webp


   	$hashedPassword=md5($password);
   	$sql=mysqli_query($mysqli,"INSERT INTO users(username,email,password,profile_pic,is_active,post_id,comment_id,role,is_banned,date_of_birth,gender,phone) VALUES ('$username','$email','$hashedPassword','$profile_image','yes','0', '0','Normal','no','$dob','$gender','$phone');");
   		header("Location: ../../normal-user.php");


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