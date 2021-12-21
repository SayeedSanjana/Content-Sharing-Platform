<div class="p-3 "style="border:1px solid lightgrey; margin-left: 10px;">
<div class="sidebar-box">
  <h3 style="font-size:20px"class="heading">Categories</h3>
  <hr>
  <ul class="categories">
  	


  		
<?php 
$query="SELECT * FROM tags ORDER BY tags_id DESC LIMIT 6";


$result=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($result)){

    $tag_id=$row['tags_id'];
    $tag_title=$row['tags_title'];
    ?>
   

    <li class="list-group-item"><a class="btn btn-sm btn-secondary" style="border-bottom-left-radius: 30%;border:1px solid #424242;color:white"><b> <?php echo $tag_title ?></span></b></a></li>
 
    <?php } ?>
  </ul>
</div>
</div>
