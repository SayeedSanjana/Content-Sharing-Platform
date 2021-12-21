

<?php 

if(isset($_GET['userid'])){

    $user_id=$_GET['userid'];
    $query1="SELECT * FROM users WHERE user_id='$user_id'";
    $result1=mysqli_query($connection,$query1);
            

    while($row=mysqli_fetch_assoc($result1)){

     $username=$row['username'];
     $email=$row['email'];
     $dob=$row['date_of_birth'];
     $gender=$row['gender'];
     $phone=$row['phone'];
     $role=$row['role'];
     $banned=$row['is_banned'];
     $active=$row['is_active'];

?>


<div class="col-lg-8">
    <hr>
    <h3 class="text-left p-3" style="border:1px solid #eee;background-color:lightblue; ">Edit/Update Your Profile!</h3>
    <br>
    <hr>
    
    
    <form action="update_profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
    	 <div class="container">

        <div class="form-group">
            <label for=""><b>Username</b></label>
            <input type="text" name="name" id="" value="<?php echo $username?>" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="text" name="email" id="" value="<?php 
            echo $email; ?>"class="form-control" placeholder="Email" >
        </div>

        
         <input type="text" name="editid" value="<?php echo $user_id ;?>" style="display:none">

          <div class="form-group">
            <label for=""><b>Date of Birth</b></label>
            <input type="text" name="dob" id="" value="<?php 
            echo $dob; ?>"class="form-control" placeholder="Date of Birth" >
        </div>
         <div class="form-group">
            <label for=""><b>Gender</b></label>
            <input type="text" name="gender" id="" value="<?php 
            echo $gender; ?>"class="form-control" placeholder="Gender" >
        </div>

         <div class="form-group">
            <label for=""><b>Phone</b></label>
            <input type="text" name="phone" id="" value="<?php 
            echo $phone; ?>"class="form-control" placeholder="Phone" >
        </div>
        


       

        
</div>  

        <div class="col-lg-12">
           

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="submit" name="edit-profile" value="Edit" class="btn btn-info btn-block btn-md">
                </div>
            </div>
        </div>
    </form>
</div> <?php }}?>
<?php 
//update

if(isset($_POST['edit-profile'])){
$eid=$_POST['editid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
   
    
 

 $query=mysqli_query($connection,"UPDATE users SET username='$name', email='$email' , date_of_birth='$dob',
  gender='$gender' , phone='$phone' WHERE user_id='$eid';
");
 if($query){
    echo "<div class='alert alert-success'>Profile has been updated!!  Click Home to view the home page.
    </div>";
 }

}



?>