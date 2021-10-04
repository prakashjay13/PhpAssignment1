<?php
$fo = fopen("users/$sid/details.txt", "r");
$names=trim(fgets($fo));
$uname=trim(fgets($fo));
$pass=trim(fgets($fo));
$gender=trim(fgets($fo));
$age=trim(fgets($fo));
$fname=trim(fgets($fo));
if (isset($_POST["sub"])) {
    $img_tmp = $_FILES["chng_img"]["tmp_name"];
    $img_name = $_FILES["chng_img"]["name"];

    $chng_imgErr = "";

    $ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $image_path = "image-".time()."-".rand().".$ext";

    // image validation 
    if (empty($img_tmp)) {
        $chng_imgErr = "Please select png, jpg or jpeg file.";
    }

    if ($chng_imgErr === "") {
        move_uploaded_file($img_tmp, "users/$sid/$image_path");
        file_put_contents("users/$sid/details.txt","$names\n$uname\n".substr(sha1($confirm_password), 0, 10)."\n$gender\n$age\n$image_path");
        header("Refresh:3");
        $success_msg = "<div id='alert' class='alert alert-success position-absolute translate-middle bottom-0 end-0 w-25 text-center pt-3'>Image Uploaded Successfully</div>";       
    }
}
?>
<form class="form-si p-4 bg-white border rounded shadow" action="" method="POST" enctype="multipart/form-data">
    <div class="text-center">
        <h4 class="text-success">Change Image</h4>
        <hr>
    </div>
    <div class="form-group">
        <label for="chng_img">Select Image</label>
        <input type="file" class="form-control" id="chng_img" name="chng_img">
        <small id="err" class="form-text text-danger"><?php echo $chng_imgErr; ?></small>
    </div>
    <button type="submit" class="btn btn-dark btn-block" name="sub">Confirm</button>
    <?php echo $success_msg; ?>
</form>