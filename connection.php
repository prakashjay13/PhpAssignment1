<?php
define('HOSTNAME', 'localhost');
define('UNAME','root');
define('PASSWORD','');
define('DBNAME','myproject');
$con=mysqli_connect(HOSTNAME,UNAME,PASSWORD,DBNAME) or die('connection failed');

?>