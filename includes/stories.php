 
<?php
$query="SELECT * FROM stories WHERE approval='approved'";


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
<div class="col-md-6 p-3">
  <a  style="color:#424242" href="story-single.php?post=<?php echo $post_id ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
    <div class="card" style="height: 400px;">
    <div class="card-image">
    <img width="100%" height="180px" src="admin/images/<?php echo $post_image ?>" alt="Image placeholder">
    <hr>
  </div>
  <div class="card-body">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="author mr-2"><img src="images/person_1.jpg" alt=""><?php echo $post_author ?></span>&bullet;
        <span  class="mr-2"> <?php echo $post_date ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment ?> </span>
      </div>
      <div class="card-footer">
      <h2 style="font-size: 20px"><b><?php echo $post_title ?></b></h2>
    </div>
    </div>

  </div>
</div>
  </a>
</div>
<?php } ?>


