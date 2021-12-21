
<?php

 include 'includes/header.php'; ?>
 

<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row p-4">
                <div class="col-lg-12">
                </div>


                <h3 class="page-header p-3" style="border: 1px solid grey">
                    Administrative and Management Web Panel 
                    
                </h3>
                <hr>
                
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 ">
                <div class="panel panel-green" style="border:2px solid green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3 col-md-6 col-lg-3 col-sm-3">
                            
                    <i class="fa fa-file-text fa-4x p-3" ></i>


                            </div>
                            <div class="col-xs-9 col-md-6 col-lg-3 col-sm-9 text-right p-2">

                                <div>Stories</div>
                            </div>
                        </div>
                    </div>
                    <a href="post.php">
                        <div class="panel-footer">
                            <span class="pull-left p-2">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="panel panel-default"style="border:2px solid #0d47a1;">
                    <div class="panel-heading" style="background:#4285F4">
                        <div class="row">
                            <div class="col-xs-3 col-md-6 col-lg-3 col-sm-3">
                                <i class="fa fa-comments fa-4x p-3" style="color:white"></i>
                            </div>
                            <div class="col-xs-9 col-md-6 col-lg-3 col-sm-9 text-right p-2">

                                <div style="color:white">Comments</div>
                            </div>
                        </div>
                    </div>
                    <a href="comment.php">
                        <div class="panel-footer">
                            <span class="pull-left p-2">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" >
                <div class="panel panel-yellow" style="border:2px solid orange">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3 col-md-6 col-lg-3 col-sm-3">
                                <i class="fa fa-user fa-4x p-3"></i>
                            </div>
                            <div class="col-xs-9 col-md-6 col-lg-3 col-sm-9 text-right p-2">

                                <div> Users</div>
                            </div>
                        </div>
                    </div>
                    <a href="users.php">
                        <div class="panel-footer">
                            <span class="pull-left p-2">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" >
                <div class="panel panel-red" style="border:2px solid red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3 col-md-6 col-lg-3 col-sm-3">
                                <i class="fa fa-list fa-4x p-3"></i>
                            </div>
                            <div class="col-xs-9 col-md-6 col-lg-3 col-sm-9 text-right p-2">

                                <div>Tags</div>
                            </div>
                        </div>
                    </div>
                    <a href="tags.php">
                        <div class="panel-footer">
                            <span class="pull-left p-2">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


</body>

</html>