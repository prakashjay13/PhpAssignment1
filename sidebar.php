<?php
$fo = fopen("users/$sid/details.txt", "r");
$names=trim(fgets($fo));
$uname=trim(fgets($fo));
$pass=trim(fgets($fo));
$gender=trim(fgets($fo));
$age=trim(fgets($fo));
$fname=trim(fgets($fo));
?>
<div class="text-center" >
<img src='<?php echo "users/$sid/$fname" ?>'>
<h3><?php echo $names; ?></h3>
<p>Gender: <?php echo $gender; ?></p>
<p>Age: <?php echo $age;?></p>
<a href="?con=changeimage">Change Image</a>
</div>