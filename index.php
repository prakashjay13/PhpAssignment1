<?php 
error_reporting(0);
include("nav.php");
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pass1=$password;
    if($email!="" && $password!=""){
      if(is_dir("users/$email")){
          $fo=fopen("users/$email/details.txt","r");
          fgets($fo); 
          fgets($fo);
          $pass=trim(fgets($fo));
          $password=substr(sha1($password),0,10);
          if($pass==$password){
            
            session_start();
            $_SESSION['sid']=$email;
            if(!empty($_POST['remember'])){
              setcookie('email',$email,time()+3600*24);
              setcookie('password',$pass1,time()+3600*24);
            }
            header("location:dashboard.php");
          }
          else {
            $errMsg="Enter correct email or password";
          }
      }
      else{
        $errMsg="Enter correct email or password";
      }
    }
    else {
      $errMsg="Plz fill the blank fields";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Page</title>
    <style>
      body{
        background: url(images/lp.png) no-repeat  fixed;
      }
    </style>
    <script>
      function cook(){
          if("<?php echo $_COOKIE['email'];?>"!=undefined){
            if(document.getElementById("email").value=="<?php echo $_COOKIE['email'];?>"){
              document.getElementById("password").value="<?php echo $_COOKIE['password'];?>" ;
            }
            else {
              document.getElementById("password").value="" ;
            }
          }
        }
    </script>
  </head>
  <body>
    <main>
        <header >
            <h1 class="text-center">User Login</h1>
        </header>
        <section class="container">
        <?php 
          if(!empty($errMsg)){
            ?>
      <div class="alert alert-danger"> <?php echo $errMsg;?></div>
            <?php
          }
          ?>
        <form method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" onchange="cook()">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <br>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
  <form>
  <button class="btn btn-primary" formaction="register.php">New User</button>
</form>
</form>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
  
  
  </body>
</html>

