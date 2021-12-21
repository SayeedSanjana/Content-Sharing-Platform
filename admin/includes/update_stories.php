<?php

$query="SELECT * FROM tags";
$result=mysqli_query($connection,$query);
?>

<?php 

if(isset($_GET['id'])){

    $post_id=$_GET['id'];
    $query1="SELECT * FROM stories WHERE story_id='$post_id'";
                   $result1=mysqli_query($connection,$query1);
            

    while($row=mysqli_fetch_assoc($result1)){

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

?>

<div class="col-lg-8">
    <hr>
    <h3 class="text-left p-3" style="border:1px solid #eee;background-color:lightblue; ">Edit/Update Your Story!</h3>
    <br>
    <hr>
    
    
    <form action="update_story.php" method="post" enctype="multipart/form-data" autocomplete="off">
    	 <div class="container">

        <div class="form-group">
            <label for=""><b>Post Title</b></label>
            <input type="text" name="title" id="" value="<?php echo $post_title?>" class="form-control" placeholder="Post Title">
        </div>
        <div class="form-group">
            <label for=""><b>Post Author</b></label>
            <input type="text" name="author" id="" value="<?php 
            echo $_SESSION['user_username']; ?>"class="form-control" placeholder="Post Author" >
        </div>

        <!--<div class="form-group">
            <label for=""><b>Post Image</b></label>
            <input type="file" name="image" value="<?php echo $post_image?>" class="form-control" placeholder="Post Image">
        </div>-->
        <br>
        <input type="text" name="image" value="<?php echo $post_image ;?>" style="display:none">
         <input type="text" name="editid" value="<?php echo $post_id ;?>" style="display:none">
        <img src="images/<?php echo $post_image ?>" style="width:150px;height:150px;border-radius:10px">

        <div class="form-group">
            <label for=""><b>Post Categories</b></label>
            <input type="text" name="categories" id="" value="<?php echo $post_categories?>" class="form-control" placeholder="Separate tags by comma (,)">
        </div>

        <div class="form-group">
            <label for=""><b>Post Tags ID</b></label>
            <select name="tags_id" class="form-control">
                <option value="<?php echo $post_tags?>"><?php echo $post_tags?></option>
            	<?php

            	while($row=mysqli_fetch_array($result)){
                    $tags_title=$row['tags_title'];
            		$tags_id=$row['tags_id'];
            		echo "<option value='$tags_id - $tags_title'>$tags_id-$tags_title</option>";
            	}

            	?>
            </select>
        </div>
        <div class="form-group">
            <label for=""><b>Post Tags</b></label>
            <select name="tags" class="form-control">
            	<?php

            	$query="SELECT * FROM tags";
                $result=mysqli_query($connection,$query);

            	while($row=mysqli_fetch_array($result)){

            		$tags_title=$row['tags_title'];
            		echo "<option value='$tags_title'>{$tags_title}</option>";
            	}

            	?>
            </select>
        </div>

        <div class="form-group">
            <label for=""><b>Post Content</b></label>
            <textarea type="text"name="content" value="" rows="5"id="" cols="5" rows="5" class="form-control"><?php echo $post_content ?></textarea>
        </div>

        <div class="form-group">
       
            <label for=""><b>Post Status</b></label>
           
             <select class="form-control" name="status">
             <option value="draft">Draft</option>
            <option value="published">Published</option>
            </select>
        </div>

</div>  

        <div class="col-lg-12">
           

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="submit" name="edit-user" value="Edit" class="btn btn-success btn-block btn-md">
                </div>
            </div>
        </div>
    </form>
</div> <?php }}?>
<?php 
//update

if(isset($_POST['edit-user'])){
$eid=$_POST['editid'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $categories=$_POST['categories'];
    $tags_id=$_POST['tags_id'];
    $tags=$_POST['tags'];
    $content=mysqli_real_escape_string($connection,$_POST['content']);
    $status=$_POST['status'];
    //$img=$_POST['image'];
    //$posted_image=$_FILES['post_image']['name'];
    //$image="";
//get post category id

   //$sql=mysqli_query($connection,"SELECT tags_id FROM tags WHERE tags_title=$tags");
    //$record=mysqli_fetch_array($sql);
    //$post_cat_id=$record['tags_id'];

 //check if user uploading a new image
 
 //if(isset($_FILES['post_image']) && $post_image !=""){
 //$dir="images/";
   // $fileName=$_FILES['post_image']['name'];
     //$fileSize=$_FILES['post_image']['size'];
      //$fileTmpName=$_FILES['post_image']['tmp'];
      //$allowed=['png','jpg','jpeg','gif','webp'];
      //$FileExt=explode('.' , $fileName);
      //$fileActExt=strtolower(end($FileExt));
      //if(!in_array('fileActExt',$allowed)){
        //echo "<script>alert('File type not allowed')</script>";
      //}else if($fileSize>1000000){
        //    echo "<script>alert('File is too large')</script>";
     // }else{
       // $newImage=uniqid("SanjanaBoo",true) . "-" . $fileActExt;
       // $target_file=$dir.basename($newImage);
        //move_uploaded_file($fileTmpName,$target_file);
        //$iamge=$target_file;
      //}

 //} else{
//$image=$img;
 //}  
    $date=date("l d F Y");

 $query=mysqli_query($connection,"UPDATE stories SET story_title='$title',story_tag='$tags', story_tag_id='$tags_id',story_author='$author',story_content='$content',story_date='$date',
    story_category='$categories',story_status='$status' WHERE story_id='$eid' 
");
 if($query){
    echo "<div class='alert alert-success'>Story has been updated!!  Click Home to view the home page.
    </div>";
 }

}



?>