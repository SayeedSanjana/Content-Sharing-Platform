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

				<h3 class="page-header">
					Administrative and Management Web Panel
					
</h3>
				

				<?php
				if(isset($_GET['source'])){
					$source=$_GET['source'];
				}
				
				switch($source){
					case "add_new":
					include "includes/add_stories.php";
					break;
					case 'view':
					include "";
					break;
					default:
					header("Location: ../stories.php");
					break;
				
			}
				
				?>
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

<!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>