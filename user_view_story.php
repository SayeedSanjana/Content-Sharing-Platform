<?php

(isset($_SESSION['user_Logged_in'])) ? $user=$_SESSION['user_Logged_in']:
header("Location ../index.php");


?>
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
              <h2 class="mb-4">My Stories</h2>
            </div>
          </div>

          
    

          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">


                <?php
                
                if(isset($_GET['delete'])){
    

    $post_id=$_GET['delete'];

    

    $query="DELETE FROM stories WHERE story_id='$post_id'";

    

    $result=mysqli_query($connection,$query);
     

    
  }


                include 'includes/view_story.php';


         

          
                 
                ?>

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