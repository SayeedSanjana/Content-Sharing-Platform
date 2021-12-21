<?php
$query="SELECT * FROM tags";
$result=mysqli_query($connection,$query);
?>
<div class="col-lg-8">
    <hr>
    <h3 class="text-left p-3" style="border:1px solid #eee;background-color:lightblue; ">Add Post</h3>
    <br>
    <hr>
    <?php

     ?>
    
    <form action="includes/function.php" method="post" enctype="multipart/form-data" autocomplete="off">
    	 <div class="container">

        <div class="form-group">
            <label for=""><b>Post Title</b></label>
            <input type="text" name="title" id="" class="form-control" placeholder="Post Title">
        </div>
        <div class="form-group">
            <label for=""><b>Post Author</b></label>
            <input type="text" name="author" id="" value="<?php echo $_SESSION['admin_username']; ?>"class="form-control" placeholder="Post Author" >
        </div>

        <div class="form-group">
            <label for=""><b>Post Image</b></label>
            <input type="file" name="image"  class="form-control" placeholder="Post Image">
        </div>

        <div class="form-group">
            <label for=""><b>Post Categories</b></label>
            <input type="text" name="categories" id="" class="form-control" placeholder="Separate tags by comma (,)">
        </div>

        <div class="form-group">
            <label for=""><b>Post Tags ID</b></label>
            <select name="tags_id" class="form-control">
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
            <textarea name="content" id="" cols="5" rows="5" class="form-control"></textarea>
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
                    <input type="submit" name="save" value="Save" class="btn btn-success btn-block btn-md">
                </div>
            </div>
        </div>
    </form>
</div>