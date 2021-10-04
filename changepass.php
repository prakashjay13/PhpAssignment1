<?php
error_reporting(0);
session_start();
$fo = fopen("users/$sid/details.txt", "r");
$names=trim(fgets($fo));
$uname=trim(fgets($fo));
$pass=trim(fgets($fo));
$gender=trim(fgets($fo));
$age=trim(fgets($fo));
$fname=trim(fgets($fo));

$old_password = $_POST["old_password"];
$new_password = $_POST["new_password"];
$confirm_password = $_POST["confirm_password"];
$old_passwordErr = $new_passwordErr = $confirm_passwordErr = "";

if (isset($_POST["sub"])) {

    // old password validation 
    if (empty($old_password)) {
        $old_passwordErr = "Please Enter old password";
    } else if (!preg_match("/^[a-zA-Z0-9]{3,16}+$/", $old_password)) {
        $old_passwordErr = "Only characters and number are allowed. Length should be between 4 to 16.";
    }

    // new password validation 
    if (empty($new_password)) {
        $new_passwordErr = "Please Enter new password";
    } else if (!preg_match("/^[a-zA-Z0-9]{3,16}+$/", $new_password)) {
        $new_passwordErr = "Only characters and number are allowed. Length should be between 4 to 16.";
    }

    // confirm password validation 
    if (empty($confirm_password)) {
        $confrim_passwordErr = "Please Enter new password again";
    } else if (!preg_match("/^[a-zA-Z0-9]{3,16}+$/", $confrim_password)) {
        $confrim_passwordErr = "Only characters and number are allowed. Length should be between 4 to 16.";
    }

    // change password logic 
    if ($old_passwordErr === "" && $new_passwordErr === "" && $confirm_passwordErr === "") {
        if (trim($pass) !== substr(sha1($old_password), 0, 10)) {
            $old_passwordErr = substr(sha1($old_password), 0, 10) . "Enter Correct Password";
        } else {
            if ($confirm_password != $new_password) {
                $confirm_passwordErr = "Password doesn't Match";
            } else {
                file_put_contents("users/$sid/details.txt","$names\n$uname\n".substr(sha1($confirm_password), 0, 10)."\n$gender\n$age\n$fname");
                $success_msg = "<div id='alert' class='alert alert-success position-absolute translate-middle bottom-0 end-0 w-25 text-center pt-3'>Password Changed Successfully</div>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="form-si p-4 bg-white border rounded shadow" method="POST">
        <div class="text-center">
            <h4 class="text-success">Change Password</h4>
            <hr>
        </div>
        <div class="form-group">
            <label for="email">Enter your Old Password</label>
            <input type="password" class="form-control" id="email" name="old_password" placeholder="Enter Password" value="<?php echo $_GET["uid"]; ?>">
            <small id="err" class="form-text text-danger"><?php echo $old_passwordErr; ?></small>
        </div>
        <div class="form-group">
            <label for="password">Enter the New Password</label>
            <input type="password" class="form-control" id="password" name="new_password" placeholder="Enter password">
            <small id="err" class="form-text text-danger"><?php echo $new_passwordErr; ?></small>
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="confirm_password" placeholder="Enter password">
            <small id="err" class="form-text text-danger"><?php echo $confirm_passwordErr; ?></small>
        </div>
        <button type="submit" class="btn btn-dark btn-block" name="sub">Change Password</button>
        <?php echo $success_msg; ?>
    </form>
</body>

</html>