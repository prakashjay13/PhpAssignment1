<?php
error_reporting(0);

include('connection.php');

$emailErr = $unameErr = $passErr = $nameErr = $ageErr = $cityErr = $fnameErr = "";

if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $tmp = $_FILES['image']['tmp_name'];
    $fname = $_FILES['image']['name']; 

    {
        if (mysqli_query($con, "insert into users(email, uname, password, name, age, city, file) values
        ('$email','$uname','$pass','$name',$age,'$city','upload/$fname')")) {
            session_start();
            $_SESSION['sid'] = $name;
            header("location:index.php");
        }
    }
    if (!empty($tmp)) {
        $dest = "upload/";
        if (move_uploaded_file($tmp, $dest . $fname)) {
        } 
    }



//email validation
    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
            $emailErr = "Enter valid email";
        }
    }
    //uname validation 
    if (empty($uname)) {
        $unameErr = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]+$/", $uname)) {
            $nameErr = "Only alphabate allow";
        }
    }

    //password validation
    if (empty($pass)) {
        $passErr = "Password is required";
    } else {
        if (!preg_match("/^[a-zA-Z0-9 ]+$/", $pass)) {
            $passErr = "Enter valid password";
        }
    }


    //name validation 
    if (empty($name)) {
        $nameErr = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $nameErr = "Only alphabate allow";
        }
    }



    //age validation 
    if (empty($age)) {
        $ageErr = "Age is required";
    }

    //city validation 
    if (empty($city)) {
        $cityErr = "City is required";
    }


    //file validation 
    if (empty($fname)) {
        $fnameErr = "File is required";
    }

    if ($nameErr == "" && $unameErr == "" && $emailErr == "" && $passErr == "" && $ageErr == "" && $cityErr == "" && $fnameErr == "" ) {
        echo "<h3> Registered Successfully</h3>";
    }
}
    
    
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head>
<style>
    #mar {
        margin-top: 6%;
        background-color: gray;
    }
</style>

<body>
    <div class="container" id="mar">
        <h2 class="text-center">Register for new user</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">


                <label for="email"><b>Email address:</b></label>
                <input type="email" class="form-control" placeholder="Enter Email address" name="email" value="<?php echo $email;?>" ><span class="text-danger">* <?php echo $emailErr; ?></span><br />
                
            </div>

            <div class="form-group">
                <label for="uname"><b>Username:</b></label>
                <input type="text" class="form-control" placeholder="Enter User Name" name="uname" value="<?php echo $uname;?>" ><span class="text-danger">* <?php echo $unameErr; ?></span><br />
                
            </div>

            <div class="form-group">
                <label for="pass"><b>Password:</b></label>
                <input type="password" class="form-control" placeholder="Enter Password" name="pass" value="<?php echo $pass;?>" ><span class="text-danger">* <?php echo $passErr; ?></span><br />
                
            </div>

            <div class="form-group">
                <label for="name"><b>Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $name;?>" ><span class="text-danger">* <?php echo $nameErr; ?></span><br />
                
            </div>

            <div class="form-group">
                <label for="age"><b>Age:</b></label>
                <input type="text" class="form-control" placeholder="Enter Age" name="age" value="<?php echo $age;?>" ><span class="text-danger">* <?php echo $ageErr; ?></span><br />
                
            </div>

            <div class="form-group">
                <label for="city"><b>City:</b></label>
                <input type="text" class="form-control" placeholder="Enter City" name="city" value="<?php echo $city;?>" ><span class="text-danger">* <?php echo $cityErr; ?></span><br />
                
            </div>


            <div class="form-group">
                <label for="image"><b>Image:</b></label>
                <input type="file" class="form-control" placeholder="Enter Last Name" name="image" > <span class="text-danger">* <?php echo $fnameErr; ?></span><br />
                
            </div>






            <button type="submit" class="btn btn-primary" name="sub">Submit</button>
        </form>
    </div>

    <?php include("foot.php") ?>
</body>

</html>