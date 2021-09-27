<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include("nav.php")?>
</head>
<style>
    *{
        margin: 0;padding: 0;box-sizing: border-box;
    }

    body{
        height: 100vh;
        width: 100vw;
        overflow-x: hidden;
        background-color:white;
    }
    h1{
        border: 2px solid black;
        color: white;
        background-color:turquoise;
    }
    form{
        background-color:white;
    }
</style>
<body>



<?php 
    error_reporting(0);
    // define variables 
    $erremail=$errpass=$crtemail=$crtpass="";
    $details =[
        "emailid"=>"prakashjay103@gmail.com",
        "pass"=>"Dexter@123"
    ];
 
    
    if(isset($_POST['submit'])){
        $email=input_field($_POST['email']);
        $pass=input_field($_POST['pass']);

        //validate email
        if(empty($email)){
            $erremail = "Please Enter Email !";
        }
        elseif(empty($pass)){
            $errpass="Please Enter Password !";
        }
        else{
            if($email == $details['emailid']){
                if(empty($pass)){
                    $errpass = "Please Enter Password !";
                }
                else{
                    if($pass == $details['pass']){
                        $crtpass = "SUCCESS !";
                        $crtemail = "SUCCESS !";
                    }
                    else{
                        $errpass ="Incorrect Password !";
                    }
                }
            }
            else{
                $erremail="Incorrect Email !";
            }
        }
    }

    function input_field($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>

    <section class="p-4"></section>
    <!-- <?php include('nav.php')?> -->
    <section class="container">
        <h1 class="text-center">Login Here</h1><br>
            <form method="post">
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Email - ID</span>
            <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" >
            </div><span class="text-danger"><?php echo $erremail;?></span><span class="text-success fw-bolder"><?php echo $crtemail?></span><br><br>
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="pass">
            </div><span class="text-danger"><?php echo $errpass?></span><span class="text-success fw-bolder"><?php echo $crtpass?></span><br>
            <button type="submit" class="btn btn-success form-control p-2" name="submit">Sign in</button>
            </form>
    </section>
        
</body>
</html>

<?php include("foot.php")?>
    

</body>
</html>