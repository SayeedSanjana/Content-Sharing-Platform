<?php

include 'includes/header.php';



?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h3 class="page-header p-3" style="border:1px solid grey">
                     Administrative and Mangement Web Panel
                    </h3>
                    <hr>
                    <div class="col-sm-6 col-md-6">
                        <?php

                        

                        ?>
                        

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?php

                        
                        ?>
                        <?php
                       
                        ?>
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                      
                                         <th>Date Of Birth</th>
                                          <th>Phone</th>
                                          <th>Gender</th>
                                          <th>Unlisted</th>
                                           <th>Blocked</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php show_users() ?>
                                </tbody>
                            </table>

                                
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    try {
        let msg = document.getElementById('msg');
        setTimeout(() => {
            msg.style.display = "none";
        }, 5000);
    } catch (error) {
        console.log(error);
    }
</script>
</body>

</html>