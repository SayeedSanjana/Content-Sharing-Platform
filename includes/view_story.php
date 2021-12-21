
 

          
              

                <?php 
              
                  $author=$_SESSION['user_username'];
                
                   $query="SELECT * FROM stories WHERE story_author='$author'";
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
                    

                    ?>
                    <div class="col-md-12 p-3">
         <div>
          <h2><?php echo $post_tags ?></h2>
         </div>
    
    <div class="card-image">
    <img style="border:4px solid black;"width="100%" height="100%"src="admin/images/<?php echo $post_image ?>" alt="Image placeholder">
    <hr>
  </div>
  <div>

  </div>
  <div class="card-body">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="author mr-2"><img src="images/person_1.jpg" alt=""><?php echo $post_author ?></span>&bullet;
        <span  class="mr-2"> <?php echo $post_date ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment ?> </span>
      </div>
      <div>
        <hr>
        <h3 style="font:18px;"><b><?php echo $post_title ?> </b></h3>
      </div>
      <div class="container-fluid">
        <p><?php echo $post_content?></p>
      </div>
      <div class="card-footer">
     <p><b> Category: <?php echo $post_tags ;?>  Tags: <?php echo $post_categories ;?> </b></p>
     
    </div>

     <div class="p-3">
      <a style="border:2px solid #ffab00" class="btn btn-warning btn-md" href="update_story.php?id=<?php echo $post_id  ?>">Edit</a>
      <a  name="delete-story" style="border:2px solid red"class="btn btn-danger btn-md" href="user_view_story.php?delete= <?php echo $post_id ?>">Delete</a>
     </div>

    </div>


  </div>



<hr>
<hr>
<hr>
<hr>
<br>
</div>
  

         <?php  }  ?>



       
     
