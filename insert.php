<?php
include('function.php');
// Object creation
$insertdata = new DB_con();
if (isset($_POST['insert'])) {
    // Posted Values
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
    $tmp = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $dest = $filename;
    //Function Calling
    $sql = $insertdata->insert($fname, $lname, $emailid, $contactno, $address, $dest);
    if ($sql) {
        // Message for successfull insertion
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // Message for unsuccessfull insertion
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

    if (!empty($tmp)) {
        $dest = "upload/";
        if (move_uploaded_file($tmp, $dest . $filename)) {
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP CRUD OOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<style>
    #mar {
        margin-top: 6%;
        background-color: gray;
    }
</style>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3>Insert Record | PHP CRUD  OOP</h3>
                <hr />
            </div>
        </div>


        <form method="post" enctype="multipart/form-data">
            <div class="container" id="mar">
                <div class="form-group">
                    <label for="fname"><b>First Name</b></label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="lname"><b>Last Name</b></label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>



                <div class="form-group">
                    <label for="email"><b>Email id</b></label>
                    <input type="email" name="emailid" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="contactno"><b>Contact number</b></label>
                    <input type="text" name="contactno" class="form-control" maxlength="10" required>
                </div>


                <div class="form-group">
                    <label for="fname"><b>Address</b></label>
                    <input type="text" class="form-control" name="address" required>
                </div>

                <div class="form-group">
                    <label for="image"><b>Image</b></label>
                    <input type="file" class="form-control" name="image" required>
                </div>



                <button type="submit" class="btn btn-success" name="insert">Submit</button>

        </form>
    </div>

</body>

</html>