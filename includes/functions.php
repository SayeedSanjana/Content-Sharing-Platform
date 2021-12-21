<?php
include "admin/includes/db.php";


function show_tags(){
	global $connection;
	$query="SELECT * FROM tags";
	$result=mysqli_query($connection,$query);

	while($row = mysqli_fetch_array($result)){
		$tags_id=$row['tags_id'];
		$tags_title=$row['tags_title'];

		echo " <li id='li2' class='nav-item active'>
              <a class='nav-link' href='category-search.php?tagid=$tags_id'>{$tags_title}<span class='sr-only'>(current)</span></a>
            </li>
		";

			}
}


function add_story(){
	global $connection;
	
	if(isset($_POST['save'])){
		$post_title=$_POST['title'];
		$post_author=$_POST['author'];
		$post_categories=$_POST['categories'];
		$post_tags_id=$_POST['tags_id'];
		$post_tags=$_POST['tags'];
		$post_content=mysqli_real_escape_string($connection,$_POST['content']);
		$post_status=$_POST['status'];

		$date=date("l d F Y");
		$post_views=0;
		$post_comments_count=0;

		if(isset($_FILES['image'])){
			$dir="../images/";
			$target_file=$dir.basename($_FILES['image']['name']);
			if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
				echo"Image was uploaded";
			}
			else{
				echo"Something Went Wrong";
			}


		}

		$query="INSERT INTO stories(story_title, story_tag, story_tag_id, story_author, story_content,
		story_date, story_image, story_comment_count, story_views, story_category, story_status) VALUES ('$post_title','$post_tags','$post_tags_id','$post_author','$post_content','$date','$target_file',
		  '$post_comments_count', '$post_views','$post_categories','$post_status')";

		$result=mysqli_query($connection,$query);
		 if(! $result){
			die("Couldnot save data".mysqli_error($connection));
			header("Location:stories.php?source=add_new");
		}else{
			header("Location: ../index.php? Added Suceesfully");
		}


		
	}

}
add_story();


function logout_user(){
	if(isset($_POST['logout'])){
   session_start();


    unset($_SESSION['user_Logged_in']);
    unset($_SESSION['user_pic']);
    unset($_SESSION['user_Log']);
    unset($_SESSION['user_username']);
     session_destroy();
    header("Location: index.php");
}
}









?>