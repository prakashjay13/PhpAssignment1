<?php
error_reporting(0);

include('connection.php');

$error = "";
if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (empty($email) || empty($pass)) {
        $error = "Enter valid email and password";
    } else {
        $sel = mysqli_query($con, "select * from users where email='$email'");
        if (mysqli_num_rows($sel) > 0) {
            $arr = mysqli_fetch_assoc($sel);
            if ($arr['email'] == $email && $arr['password'] == $pass) {
                session_start();
                $_SESSION['sid'] = $email;

                header("location:dashboard.php");
            } else {
                $error = "Your Password is incorrect";
            }
        } else {
            $error = "User is not registered";
        }
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <style>
        .mar {
            margin-top: 6%;
            background-color: aquamarine;
        }
    </style>
    <?php include("head.php") ?>
    <title>Register</title>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container mar"><br>
        <?php echo $error; ?>
        <form method="post">


            <div class="mb-3">
                <span class="text-danger"></span><br>
                <label class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
            </div>

            <div class="mb-3">

                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>

            <button type="submit" class="btn btn-warning" name="sub">Submit</button>
            <a href="register.php" class="btn btn-primary text-info">New User</a>
        </form>
        <br>
    </div>

    <?php include("foot.php") ?>
</body>

</html>