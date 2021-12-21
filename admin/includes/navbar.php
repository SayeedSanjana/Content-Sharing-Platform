<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Saira Stencil One' rel='stylesheet'>

<!--<link href="carousel.css" rel="stylesheet">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Saira Stencil One' rel='stylesheet'>


 <link rel="stylesheet" href="/static/css/home.css">
 <style>


.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
font-family:'Saira Stencil One';
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light float-right">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">View Site<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php 
        
        if(isset($_SESSION['admin_Logged_in'])){
            echo $_SESSION['admin_Logged_in'];
          }
        ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="includes/logout_admin.php" name="logout-admin">Logout</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
    </ul>
    
  </div>
</nav>














<div class="sidenav">
  <a href="index.php"><i class="fa fa-tachometer"></i> DashBoard</a>
  <a href="post.php"><i class="fas fa-list-alt"></i> Stories</a>
  <a href="stories.php?source=add_new"><i class="fas fa-plus"></i> Add Stories</a>
  <a href="tags.php"><i class="fa fa-tag" aria-hidden="true"></i> Tags</a>
  <a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
  <a href="comment.php"><i class="fa fa-comments" aria-hidden="true"></i> Comments</a>
  <!--<a href=""><i class="fa fa-user" aria-hidden="true"></i> Profile</a>-->
</div>
</body>
</html>