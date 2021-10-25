<?php
error_reporting(0);
include('connection.php');
session_start();
$profile=$_SESSION['sid'];
$sel=mysqli_query($con,"select password from users where email='$profile'; ");
$arr=mysqli_fetch_assoc($sel);
if(isset($_POST['sub'])){
    $oldpass=$_POST['opass'];
    $newpass=$_POST['npass'];
    $conpass=$_POST['cpass'];
     
    if($arr['password']==$oldpass){
        if($newpass==$conpass){
            $a=mysqli_query($con,"update users set password='$newpass' where email='$profile'; ");

            echo "<script> alert ('Your password has been updated.');</script>";
        }
        else{
            echo "<script> alert ('newpass and changepass does not match');</script>";
        }

    }
    else{
        echo "<script> alert ('Your old password is incorrect');</script>";
    }
}
?>


<html>
    <head>
        <style>
            .mar{
                margin-top: 6%;
                background-color: lavenderblush;
            }
        </style>
<?php include('head.php') ?>
    </head>
    <body>
    
    <form method="post">
        <div class="container mar">
  <div class="mb-3">
    <label  class="form-label">Old password</label>
    <input type="password" class="form-control" name="opass" >
  </div>
  <div class="mb-3">
  <label  class="form-label">New password</label>
    <input type="password" class="form-control" name="npass" >
  </div>
  <div class="mb-3 ">
  <label  class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="cpass" >
  </div>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
</div>
<?php include('foot.php') ;?>
    </body>
</html>