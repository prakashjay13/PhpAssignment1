<?php
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
    // Get the userid
    $userid = intval($_GET['id']);
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
    $sql = $updatedata->update($fname, $lname, $emailid, $contactno, $address,$filename, $userid);
    if ($sql){
    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else {
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
    <title>PHP CRUD OOP </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3>Update Record </h3>
                <hr />
            </div>
        </div>

        <?php
        // Get the userid
        $userid = intval($_GET['id']);
        $onerecord = new DB_con();
        $sql = $onerecord->fetchonerecord($userid);
        $srno = 1;
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <form  method="post" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-4"><b>First Name</b>
                        <input type="text" name="firstname" value="<?php echo ($row['FirstName']); ?>" class="form-control" required>
                    </div>
                    
                    <div class="col-md-4"><b>Last Name</b>
                        <input type="text" name="lastname" value="<?php echo ($row['LastName']); ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"><b>Email id</b>
                        <input type="email" name="emailid" value="<?php echo ($row['EmailId']); ?>" class="form-control" required>
                    </div>
                    <div class="col-md-4"><b>Contactno</b>
                        <input type="text" name="contactno" value="<?php echo ($row['ContactNumber']); ?>" class="form-control" maxlength="10" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"><b>Address</b>
                    <input type="text" class="form-control" name="address" value="<?php echo ($row['Address']); ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"><b>Image</b>
                    <input type="file" class="form-control" name="image" value="<?php echo ($row['Image']); ?>" required>
                    </div>
                </div>
            <?php } ?>
            <div class="row" style="margin-top:1%">
                <div class="col-md-8">
                <button type="submit" class="btn btn-success" name="update">Update</button>
                </div>
            </div>
            </form>


    </div>
    </div>

</body>
</htm