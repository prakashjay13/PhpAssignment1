<?php
error_reporting(0);
session_start();
$sid = $_SESSION['sid'];
if (empty('sid')) {
    header("location:index.php");
}
?>



<html>

<head>
    <?php include('head.php') ?>
    <style>
        .mg {
            margin-top: 6%;
        }

        .sidenav {
            width: 330px;
            position: fixed;
            left: 10px;
            background: #eee;
            overflow-x: hidden;
            padding: 8px 0;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #2196F3;
            display: block;
        }

        .sidenav a:hover {
            color: #064579;
        }
    </style>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container mg">
        <div class="row">
            <div class="col-sm-6">
                <div class="sidenav">

                    <a href="?con=cpassword">⚡ Change password</a>
                    <a href="?con=details" >⚡ User Info</a>
                    <a href="#about">⚡ About</a>
                    <a href="#services">⚡ Services</a>
                    <a href="#clients">⚡ Clients</a>
                    <a href="#contact">⚡ Contact</a>


                </div>
            </div>
            <div class="col-sm-4">
                <?php
                switch (@$_GET['con']) {
                    case "cpassword":
                        include('cpassword.php');
                        break;
                    case "details":
                        include('details.php');
                        break;
                }
                ?>
            </div>
        </div>
        <?php

        ?>
        <?php include('foot.php') ?>
</body>

</html>