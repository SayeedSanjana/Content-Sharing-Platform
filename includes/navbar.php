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
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>

 <link rel="stylesheet" href="/static/css/home.css">


<style>
  body {
  padding-bottom: 20px;
}

.navbar {
  margin-bottom:5px;
}
#li1{
	 font-family: 'Saira Stencil One'; font-style: normal;
	 font-size: 18px;
   padding-left: 5px;
	
}
#li1 a{
	color:#00838f;

}

#li1 a:hover {
  background-color: #b3e5fc;
  border-radius: 30%
}
#li2 a{
  color:#00838f;
   font-family: 'Saira Stencil One'; font-style: normal;
}

#li2 a:hover {
  background-color: #b3e5fc;
  border-radius: 30%
}

#button1 {
  background-color:#e1f5fe; 
  border: none;
  color: white;
  padding: 2px 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border:1px solid #81d4fa ;
  border-radius: 30%;
}


  </style>
  </head>   
<body>
<div  style="background-color:#80cbc4 ">
      <nav class="navbar navbar-expand-lg navbar-light  rounded" style="background-color:#b2dfdb ;">
      	<h3 class="m-3" style="font-family: Bungee Shade;font-size:20px;border:1px solid grey;background-color:#fffde7;border-bottom-left-radius: 30%;border-bottom-right-radius: 30%;border-top-left-radius: 30%;border-top-right-radius: 30%;border-top-color:#1a237e; box-shadow: 5px 8px #fff59d">Content Sharing Paltform  </h3>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li id="li1"class="nav-item active">
              <button id="button1"><a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
              Home <span class="sr-only">(current)</span></a></button>
            </li>
            <li id="li1" class="nav-item">
              <button id="button1"><a class="nav-link" href="cms-admin.php"><img height="20px"src="https://img.icons8.com/metro/26/000000/restriction-shield.png"/>Admin Panel</a></button>
            </li>

            
          <?php 
           


          ?>
            
            
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <?php
            

            if(isset($_SESSION['user_Logged_in'])){
          
              echo "

              <li id='li1' class='nav-item'>
              <button id='button1'><a class='nav-link' href='add_stories.php'>
              <i class='fa fa-plus' aria-hidden='true'></i> Share Story</a></button>
            </li>";
        
        }

            if(isset($_SESSION['user_Logged_in'])){
              echo"
            <li id='li1' class='nav-item'>
              <button id='button1'><a name='logout'class='nav-link' href='includes/logout.php'>
              <i class='fa fa-power-off' aria-hidden='true'></i>Logout</a></button>
            </li>";
          }else{
            echo "
            <li id='li1' class='nav-item'>
              <button id='button1'><a class='nav-link' href='login.php'>
              <i class='fas fa-sign-in-alt' aria-hidden='true'></i> Sign In</a></button>
            </li>
            <li id='li1' class='nav-item'>
              <button id='button1'><a class='nav-link' href='create_user.php'>
              <i class='fa fa-registered aria-hidden='true'></i> Register</a></button>
            </li>
          ";}
          ?>
          </ul>
          
        </div>
      </nav>

      <nav class="navbar navbar-expand-lg navbar-light  rounded" style="background-color:#e0f2f1 ; ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <?php show_tags(); ?>

          </ul>

           <ul class="navbar-nav navbar-left">
            
           
        </div>
      </nav>
      
        <?php
        if(isset($_SESSION['user_Logged_in'])){

              echo "
              <div>
        <nav class='navbar navbar-expand-lg navbar-light  rounded' style='background-color:#00acc1 ;'>
          <ul class='nav navbar-nav navbar-left' >
           
            
              <li id='li1' class='nav-item' >
              <button style='font-size:12px; border:1px solid #01579b 'id='button1'><a   class='nav-link' href='user_view_story.php'>
              <i class='fas fa-eye'aria-hidden='true'></i>My Stories</a></button>
            </li>
            <li id='li1' class='nav-item'>
              <button style='font-size:12px; border:1px solid #01579b 'id='button1'><a name=''class='nav-link' href='user_profile.php'>
              <i class='fa fa-user-circle-o' aria-hidden='true'></i>
              My Profile</a></button>
            </li>
          </ul>
        </nav>
        </div>"; }?>
      

</div>
</body>
</html>
