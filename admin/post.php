<?php

include 'includes/header.php';



?>

<div class="wrapper">

	<!-- Navigation -->
	<?php include 'includes/navbar.php'; ?>
 <div class="p-4 wrapper" style="background-color: white;margin-left:150px;">

	

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">

				<h3 class="page-header">
					Administrative and Management Web Panel
				</h3>
                <hr>
				<div class="container-fluid">

					<table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                    
                                        <th>Author</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Com-ments</th>
                                        <th>Vie-ws</th>
                                        <th>Posted On</th>
                                        <th >Un-approved </th>
                                        <th >Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php show_stories() ?>
                                </tbody>
                            </table>

				</div>



				<?php
				
				
				?>
			</div>



	</div>

	<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<div>

<!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>