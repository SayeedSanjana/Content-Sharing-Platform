<?php 
$ID=$_SESSION['user_id'];
$query="SELECT * FROM users WHERE user_id='$ID' ";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($result)){
  $username=$row['username'];
  $email=$row['email'];
  $active=$row['is_active'];
  $banned=$row['is_banned'];
  $role=$row['role'];
  $dob=$row['date_of_birth'];
  $gender=$row['gender'];
  $phone=$row['phone'];


?>

<div class="col-md-6 p-3">
  <div class="row justify-content-center">
    <div class="col-auto">
<table class="table table-dark table-center" style="border:2px solid #e53935 ">
  <thead>
    <tr>
      <th scope="col">#</th>
        <th></th>
      <th colspan="10" scope="col"></th>
        <th></th>
      <th colspan="3"scope="col"></th>
    
      <th></th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>NAME : </b></td>
      <td></td>
      <td colspan="3"><?php echo $username ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>EMAIL : </b></td>
      <td></td>
      <td colspan="3"><?php echo $email?></td>
      <td></td>
      
    </tr>
    <tr>
      <th  scope="row">3</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;
      background-color: #e3f2fd;color:black;"><b>DATE OF BIRTH : </b></td>
      <td></td>
      <td colspan="3"><?php echo $dob ?></td>
      <td></td>
      
    </tr>

    <tr>
      <th  scope="row">4</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>GENDER : </b></td>
      <td></td>
      <td colspan="3"><?php echo $gender ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th  scope="row">5</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>PHONE : </b></td>
      <td></td>
      <td colspan="3"><?php echo $phone ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th  scope="row">6</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>ROLE : </b></td>
      <td></td>
      <td colspan="3"><?php echo $role ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th  scope="row">7</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;
      background-color: #e3f2fd;color:black;"><b>DATE OF BIRTH : </b></td>
      <td></td>
      <td colspan="3"><?php echo $dob ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th  scope="row">8</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>ACTIVE : </b></td>
      <td></td>
      <td colspan="3"><?php echo $active ?></td>
      <td></td>
      
    </tr>

     <tr>
      <th  scope="row">9</th>
      <td></td>
      <td colspan="10" style="border:1px solid #90caf9 ;background-color: #e3f2fd;color:black;"><b>UNLISTED:</b></td>
      <td></td>
      <td colspan="3"><?php echo $banned ?></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="col"></th>
        <th></th>
      <th colspan="10" scope="col"></th>
        <th></th>
      <th colspan="3"scope="col"></th>
    
      <th> <a style="border:2px solid #8bc34a" class="btn btn-success btn-md" href="update_profile.php?userid=<?php echo $ID  ?>">Edit Profile</a> </th>

      
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
<?php }?>