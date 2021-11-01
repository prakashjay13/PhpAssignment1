<?php
include('function.php');

//Deletion
if (isset($_GET['del'])) {
    // Deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($rid);
    if ($sql) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
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
    <style type="text/css">

    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>PHP CRUD OOP</h3>
                <hr />
                <a href="insert.php"><button class="btn btn-success"> Add Details</button></a>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Sr.no</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Created_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php
                            $fetchdata = new DB_con();
                            $sql = $fetchdata->fetchdata();
                            $srno = 1;
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td><?php echo ($srno); ?></td>
                                    <td><?php echo ($row['FirstName']); ?></td>
                                    <td><?php echo ($row['LastName']); ?></td>
                                    <td><?php echo ($row['EmailId']); ?></td>
                                    <td><?php echo ($row['ContactNumber']); ?></td>
                                    <td><?php echo ($row['Address']); ?></td>
                                    <td><img src="<?php echo $row['Image']; ?>" height="150px" width="150px"></td>
                                    <td><?php echo ($row['Created_at']); ?></td>
                                    <td><a href="update.php?id=<?php echo ($row['id']); ?>"><button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                    <td><a href="index.php?del=<?php echo ($row['id']); ?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                                </tr>
                            <?php
                                // for serial number increment
                                $srno++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>