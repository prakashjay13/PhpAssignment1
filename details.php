<?php
include('connection.php');
session_start();
$name = $_SESSION['sid'];

$sel = mysqli_query($con, "select * from users where email='$name'");
if (mysqli_num_rows($sel) > 0) {

    while ($arr = mysqli_fetch_assoc($sel)) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                table,th,td {
                    border: 1px solid black;
                    padding: 3px;
                }
            </style>
        </head>

        <body>
            <table >
                <tr>
                    <th rowspan="2"  align="center" ><img src=" <?php echo $arr['file']  ?>" height="100px" width="100px"></th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>City</th>
                </tr>
                
                <tr>
                    <td><?php echo $arr['email'] ?></td>
                    <td><?php echo $arr['uname'] ?></td>
                    <td><?php echo $arr['name'] ?></td>
                    <td><?php echo $arr['age'] ?></td>
                    <td><?php echo $arr['city'] ?></td>

                </tr>
            </table>
    <?php
    }
}


    ?>
        </body>

        </html>