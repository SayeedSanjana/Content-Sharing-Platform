<?php session_start();?>
<?php include "admin/includes/db.php" ;?>
<?php include "functions.php"; ?>
<?php include "classes/Comment.php";?>
<?php $comment= new Comment($connection);



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
   <title>ContentSharingPlatform</title>
	<style>
  footer {
    background: #b2dfdb  !important;
}
#footer h5{
  padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}

#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}

#card1{
      height:350px;

    }
    .card:hover{
    box-shadow: 5px 10px 20px 1px black;
}


        .card-product:after{
          content:"";
          display: table;
          clear:both;
          visibility: hidden;

        }

        .card-product .price-new .card-product .price{
              margin:5px;

        }

        .card-product .price-old{
          color:#999;
        }

        .card-product .img-wrap{
          border-radius: : 3px 3px 0 0;
          overflow: hidden;
          position: relative;
          height: 220px;
          text-align: center


        }

        .card-product .img-wrap img{
          max-width: 100%;
          max-height: 100%;
        }

        .card-product .info-wrap{
          overflow:hidden;
          padding:15px;
          border-top:1px solid #eee ;

        }

        .card-product .action-wrap{
          padding-top:4px;
          margin-top: 4px;
          object-fit: cover;

        }
         
         .card-product .bottom-wrap{
          padding:15px;
          border-top:1px solid #eee;
         }

         .card-product .title{
          margin-top:0px;
         }
     </style>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	

</style>
 </body>
</html>
</html>