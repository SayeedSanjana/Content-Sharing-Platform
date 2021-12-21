<?php include "db.php";


function add_tags(){
	global $connection;

	if (isset($_POST['tags_add'])){
		if (empty($_POST['tags'])){
         header("Location: ../tags.php?Fields cannot be empty!");
		}
		else{
			$tags=$_POST['tags'];
			$query="INSERT INTO tags(tags_title)VALUES('$tags')";
			$result=mysqli_query($connection,$query);

		}
		if(! $result){
			die("Couldnot sent data".mysqli_error($connection));
		}else{
			header("Location: ../tags.php?tags added");
		}
	}
}



function show_tags(){
	global $connection;

	$query="SELECT * FROM tags";
	$result=mysqli_query($connection,$query);

	while($row=mysqli_fetch_assoc($result)){

		$tags_id=$row['tags_id'];
		$tags_title=$row['tags_title'];

		echo "<tr>";
		echo "<td>{$tags_id}</td>";
		echo "<td>{$tags_title}</td>";
		echo "<td><a class='btn btn-danger btn-sm'href='tags.php?delete_tags={$tags_id}'>Delete</a></td>";
		echo "</tr>";

	}
}

function delete_tags(){
	global $connection;

	if(isset($_GET['delete_tags'])){
		$tag_id=$_GET['delete_tags'];
        $query="DELETE FROM tags WHERE tags_id = $tag_id";
        $result=mysqli_query($connection,$query);
        if(! $result){
			die("Couldnot delete tag".mysqli_error($connection));
		}else{
			header("Location:tags.php?tag removed");
		}
    }
}
add_tags();
delete_tags();

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
		$approve=$_POST['approval'];

		

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

function edit_story(){
	global $connection;
	
	if(isset($_POST['edit-user'])){
		

		$post_id=$_GET['id'];

		$post_title=$_POST['title'];
		$post_author=$_POST['author'];
		$post_categories=$_POST['categories'];
		$post_tags_id=$_POST['tags_id'];
		$post_tags=$_POST['tags'];
		$post_content=mysqli_real_escape_string($connection,$_POST['content']);
		$post_status=$_POST['status'];

		$date=date("l d F Y");
		//$post_views=0;
		//$post_comments_count=0;

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

		$query="UPDATE stories SET story_title='$post_title',story_tag='$post_tags', story_tag_id='$post_tags_id',story_author='$post_author',story_content='$post_content',story_date='$date',
		story_category='$post_categories',story_status='$post_status' WHERE story_id='$post_id' ";

		

		$result=mysqli_query($connection,$query);
		 if(! $result){
			die("Couldnot save data".mysqli_error($connection));
			header("Location:update_story.php");
		}else{
			header("Location: ../../index.php? Updated Suceesfully");
		}


		
	}

}
edit_story();

function show_stories(){
	global $connection;

	$query="SELECT * FROM stories";
	$result=mysqli_query($connection,$query);

	while($row=mysqli_fetch_assoc($result)){

        $post_id=$row['story_id'];
		$post_title=$row['story_title'];
		$post_author=$row['story_author'];
		$post_tags=$row['story_tag'];
		$post_tags_id=$row['story_tag_id'];
		$post_categories=$row['story_category'];
		$post_content=$row['story_content'];
		$post_status=$row['story_status'];
		$post_comment=$row['story_comment_count'];
		$post_views=$row['story_views'];
		$post_date=$row['story_date'];
		$post_image=$row['story_image'];
		$approval=$row['approval'];


		echo "<tr>";
		echo "<td>{$post_id}</td>";
		echo "<td>{$post_title}</td>";
		echo "<td>{$post_tags}</td>";
		//echo "<td>{$post_tags_id}</td>";
		echo "<td>{$post_author}</td>";
		echo "<td>{$post_content}</td>";
		echo "<td>{$post_status}</td>";
		echo "<td><img width='100%' src='images/{$post_image}'></td>";
		echo "<td>{$post_comment}</td>";
		echo "<td>{$post_views}</td>";
		echo "<td>{$post_date}</td>";
		echo "<td>$approval<a class='btn btn-success btn-sm' href='post.php?unapprove_posts={$post_id}'>Unapproved</a></td>";
		echo "<td><a class='btn btn-danger btn-sm'href='post.php?delete_stories={$post_id}'>Delete</a></td>";
		echo "</tr>";
		

	}
}

function unapprove_posts(){
	global $connection;

	if(isset($_GET['unapprove_posts'])){
		$post_id=$_GET['unapprove_posts'];
				$query= "UPDATE stories SET approval='unapproved'
              WHERE story_id=$post_id;";
              $result=mysqli_query($connection,$query);
        if(! $result){
			die("Couldnot approved".mysqli_error($connection));
		}else{
			header("Location:post.php?comments approved");
		}
    }

}
unapprove_posts();



function delete_stories(){
	global $connection;

	if(isset($_GET['delete_stories'])){
		$post_id=$_GET['delete_stories'];
        $query="DELETE FROM stories WHERE story_id = $post_id";
        $result=mysqli_query($connection,$query);
        if(! $result){
			die("Couldnot delete story".mysqli_error($connection));
		}else{
			header("Location:post.php?stories removed");
		}
    }
}

delete_stories();


function show_comments(){
	global $connection;

	$query="SELECT * FROM comments";
	$result=mysqli_query($connection,$query);

	while($row=mysqli_fetch_assoc($result)){

        $post_id=$row['post_id'];
        $comment_id=$row['comment_id'];
		$post_title=$row['comment_name'];
		$post_author=$row['comment_email'];
		$post_content=$row['comment_content'];
		$post_status=$row['comment_status'];
		


		echo "<tr>";
		echo "<td>{$post_id}</td>";
		echo "<td>{$comment_id}</td>";
		echo "<td>{$post_title}</td>";
		echo "<td>{$post_author}</td>";
		echo "<td>{$post_content}</td>";
		echo "<td>{$post_status}</td>";
		echo "<td><a class='btn btn-success btn-sm'href='comment.php?unapprove_comments={$comment_id}'>Unapprove</a></td>";
		echo "<td><a class='btn btn-danger btn-sm'href='comment.php?delete_comments={$comment_id}'>Delete</a></td>";
		echo "</tr>";
		

	}
}


function unapprove_comments(){
	global $connection;

	if(isset($_GET['unapprove_comments'])){
		$post_id=$_GET['unapprove_comments'];
				$query= "UPDATE comments SET comment_status='UnApproved'
              WHERE comment_id=$post_id;";
              $result=mysqli_query($connection,$query);
        if(! $result){
			die("Couldnot approved".mysqli_error($connection));
		}else{
			header("Location:comment.php?comments approved");
		}
    }

}
unapprove_comments();



function delete_comments(){
	global $connection;

	if(isset($_GET['delete_comments'])){

		$post_id=$_GET['delete_comments'];
        $query="DELETE FROM comments WHERE comment_id = $post_id";
        $result=mysqli_query($connection,$query);
        
        if(! $result){
			die("Couldnot delete story".mysqli_error($connection));
		}else{

			header("Location:comment.php?stories removed");
		}
    }
}

delete_comments();


function count_decrease(){
	$query1="SELECT post_id from comments WHERE comment_id=$post_id";
		$result1=mysqli_query($connection,$query1);
		while($row=mysqli_fetch_assoc($result1)){
			$row1=$row['post_id'];
		
		
	}
	

}

function count_decrease1(){
	 $query1="UPDATE stories SET story_comment_count=story_comment_count-1
              WHERE story_id=$row1 ;";

              $result=mysqli_query($connection,$query1);
}



function add_story_user(){
	global $connection;
	
	if(isset($_POST['save-user'])){
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
			header("Location:../../index.php?Failed To Share Stories");
		}else{
			header("Location:../../index.php?$post_author");
		}


		
	}

}
add_story_user();

function show_users(){
	global $connection;

	$query="SELECT * FROM users WHERE role='Normal'";
	$result=mysqli_query($connection,$query);

	while($row=mysqli_fetch_assoc($result)){

        $user_id=$row['user_id'];
		$user_name=$row['username'];
		$user_email=$row['email'];
		
		$dob=$row['date_of_birth'];
		$phone=$row['phone'];
		$gender=$row['gender'];
		$block=$row['is_banned'];
		
		


		echo "<tr>";
		echo "<td>{$user_id}</td>";
		echo "<td>{$user_name}</td>";
		echo "<td>{$user_email}</td>";
	
		echo "<td>{$dob}</td>";
		echo "<td>{$phone}</td>";
		echo "<td>{$gender}</td>";
		echo "<td>{$block}</td>";

		echo "<td><a class='btn btn-warning btn-sm'href='users.php?block_users={$user_id}'>Blocked</a></td>";
		echo "<td><a class='btn btn-danger btn-sm'href='users.php?delete_users={$user_id}'>Delete</a></td>";
		echo "</tr>";
		

	}
}
function delete_users(){
	global $connection;

	if(isset($_GET['delete_users'])){

		$user_id=$_GET['delete_users'];
        $query="DELETE FROM users WHERE user_id = $user_id";
        $result=mysqli_query($connection,$query);
        
        if(! $result){
			die("Couldnot delete user".mysqli_error($connection));
		}else{

			header("Location: users.php?user removed");
		}
    }
}

delete_users();

function block_users(){
	global $connection;

	if(isset($_GET['block_users'])){
		$user_id=$_GET['block_users'];
				$query= "UPDATE users SET is_banned='yes'
              WHERE user_id=$user_id;";
              $result=mysqli_query($connection,$query);
        if(! $result){
			die("Couldnot block".mysqli_error($connection));
		}else{
			header("Location:users.php?user blocked");
		}
    }

}
block_users();

?>