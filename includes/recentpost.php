<div class="p-3 "style="border:1px solid lightgrey; margin-left: 10px;">
<div class=" panel sidebar-box ">
  <h3 style="font-size:20px;" class="heading" >Recent Posts</h3>
  <hr>
  <div class=" panel sidebar-box ">
  <div class="post-entry-sidebar">
    <ul>

<?php 
$query="SELECT * FROM stories WHERE approval='approved' ORDER BY story_id DESC LIMIT 4 ";


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


      <li>
        <a href="story-single.php?post=<?php echo $post_id ?>">
          <img width="30%" height="50px"src="admin/images/<?php echo $post_image ?>" alt="Image placeholder" class="mr-4">
          <div class="text">
            <div style="padding-bottom:10px;">
            <h4 style="font-size: 12px"><b><?php echo $post_title ?></b></h4>
              <span class="mr-2" style="font-size:10px;color:grey"><?php echo $post_date ?></span>
              </div>
          </div>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
</div>
</div>