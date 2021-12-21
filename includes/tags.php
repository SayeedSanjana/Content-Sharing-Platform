<div class="p-3 "style="border:1px solid lightgrey; margin-left: 10px;">
<div class="sidebar-box">
  <h3 style="font-size:20px" class="heading">Tags</h3>
  <hr>
  <ul class="categories">
  	


  		
<?php 
$query="SELECT * FROM stories ORDER BY story_category DESC LIMIT 4";


$result=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($result)){

    $tag_id=$row['story_category'];
   
    
   $str_arr = explode (",", $tag_id);

      foreach($str_arr as $x => $x_value) {
        
      ?>

   
      <a class="btn btn-sm btn-light" style="border-bottom-left-radius: 30% ;border-top-right-radius: 30%;color:grey ; border:1px solid lightblue;"> <b> #<?php echo $x_value ?></b></span></a>
 
    <?php }} ?>
  </ul>
</div>
</div>
