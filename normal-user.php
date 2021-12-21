<?php 
include 'includes/header.php';
$query=mysqli_query($connection,"SELECT * FROM users WHERE role='Normal' ");

if(mysqli_num_rows($query)===0){
	include 'create_user.php';
}else{
	include 'login.php';
}