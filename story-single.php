
<?php include 'includes/header.php'; ?>

    <div class="wrap">

<?php include 'includes/navbar.php'; ?>
      <!-- END header -->


  <!--- END CAROUSEL-->
<?php include 'includes/carousel.php'; ?>
      <!-- END section -->
<br>
<hr>
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
             
            </div>
          </div>

          
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">

                <?php 
                if (isset($_GET['post'])){
                	$post_id=$_GET['post'];
                  $stories=$post_id;
                	 $query="SELECT * FROM stories WHERE story_id=$post_id";
                	 $result=mysqli_query($connection,$query);
                      }else{
                      	header("Location: index.php");
                      }

                ?>

                  <?php 
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

                  	 <h2 class="mb-4"><?php echo $post_tags ?></h2>
                <div class="col-md-12 p-3">
  
    <div class="">
    <div class="">
    <img width="100%" src="admin/images/<?php echo $post_image ?>" alt="Image placeholder">
    <hr>
  </div>
  <div class="">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="author mr-2"><img src="images/person_1.jpg" alt=""><?php echo $post_author ?></span>&bullet;
        <span  class="mr-2"> <?php echo $post_date ?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment ?> </span>
        <br>
        <hr>
        <p><b><?php echo $post_title ?> </b></p>
        <div>
          <hr>
          <p><?php echo $post_content ;?></p>
          
          <?php 

          if(isset($_GET['post'])){
            $id=$_GET['post'];

            if(isset($_POST['comment'])){
              $name=$_POST['title'];
              $author=$_POST['author'];
              $content=$_POST['content'];

              $comment->add_comments($id,$author,$content,$name);
                 $post_comment=$post_comment+1;

              //echo $post_comment; 




            }
          }

          ?>


           
            <div class="row">

              
              <div class="col-md-6 col-sm-6 col-lg-6 p-3" style="border:1px solid grey;background-color: lightgrey;">
                <?php  if(isset($_SESSION['user_Logged_in'])) {?>
                <h5 class="p-3">Leave Comments</h5>


                <form action="story-single.php?post=<?php echo $post_id ?>" method="post" enctype="multipart/form-data" autocomplete="off">
       <div class="container">

        <div class="form-group">
            <label for=""><b>Name</b></label>
            <input type="text" name="title" value="<?php echo $_SESSION['user_username']?>" id="" class="form-control" placeholder="name">
        </div>
        <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="text" name="author" value="<?php echo $_SESSION['user_Logged_in']?>"id="" class="form-control" placeholder="email">
        </div>

        <div class="form-group">
            <label for=""><b>Comments</b></label>
            <textarea type="text" name="content"  class="form-control" placeholder="content"></textarea>
        </div>
        <div class="form-group">
                    <input type="submit" name="comment" value="Save" class="btn btn-success btn-block btn-md">
                </div>
              </div>
            </form>
          <?php } ?>  <?php if(!isset($_SESSION['user_Logged_in'])){
          echo "<div class='alert alert-danger'>Sign Up To Comment!</div>";
        }?>

  </div>

  <?php 
             

              $query1="UPDATE stories SET story_comment_count=$post_comment
              WHERE story_id=$stories ;";

              $result=mysqli_query($connection,$query1);
  ?>

<div class="class=col-sm-6 col-md-6 col-lg-6 p-4 " style="border:1px solid grey;">
  <?php if(isset($_SESSION['user_Logged_in'])){ ?>

  <h6><i class="fas fa-comment"><b> Comments: </b></i><hr></h6> <?php }?>
  <?php
  $query="SELECT * FROM comments WHERE post_id=$stories AND comment_status='Approved';";
  $result=mysqli_query($connection,$query);
 
  while($row=mysqli_fetch_assoc($result)){
    $email=$row['comment_email'];
    $name=$row['comment_name'];
    $contents=$row['comment_content'];
    if(isset($_SESSION['user_Logged_in'])){
     echo "
    
    <div class='p-4'>

      <h6><b>$name</b>
      <span>$email</span></h6>
      <p>$contents</p>
     
      <hr>
    </div>

    ";}
    
    }

  
  ?>
</div>



</div>
<!--- end row-->

        </div>
      </div>
      <br>
      <div class="card-footer">
        <br>
        <hr>
      <p><b> Category: <?php echo $post_tags ;?>  Tags: <?php echo $post_categories ;?> </b></p>
    </div>
    </div>

  </div>
</div>

</div>
<?php } ?>

</div>
</div>







            

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="search.php" class="search-form" method="post">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" name="search"id="s" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->

              <?php include 'includes/recentpost.php'; ?>
              <!-- END sidebar-box -->
             <?php include 'includes/category.php'; ?>

              <!-- END sidebar-box -->

              <?php include 'includes/tags.php'; ?>
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>

 </div>






    <!-- loader -->
    <!--<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>-->

<div>

<?php include 'includes/footer.php'; ?>

</div>
    


<!--END Footer-->




    <!--<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!--<script src="js/main.js"></script>-->
  </body>
</html>