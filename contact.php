<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="lay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact</title>
    <style>
      footer {
    text-align: center;
    padding: 3px;
    background-color:white;
    color:black;
    width: 100%;
  }
    </style>
  </head>
  <body>

<?php include("nav.php");?>
<section class="container">
    <h2>Contact</h2>
</section>

<?php
error_reporting(0);
$nameerror =  $emailerror = $mobnoerror = $gendererror = $cityerror = $feedbackerror = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    
    $gender = @$_POST['gender'];
    $city = $_POST['city'];
    $feedback = $_POST['feedback'];

    //name
    if (empty($name)) {
        $nameerror = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "Only Letters and White Space allowed";
        }
    }

    //email
    if (empty($email)) {
        $emailerror = "Email is required";
    } else {

        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailerror = "Invalid Email Format";
        }
    }


    //mobileno
    if (empty($mobno)) {
        $mobnoerror = "Mobile Number is required";
    } else {

        if (!preg_match("/^\d{10}$/", $mobno)) {
            $mobnoerror = "Only Numbers with 10 Digits required";
        }
    }

    //gender
    if (empty($gender)) {
        $gendererror = "This Field is required";
    }

    //city
    if (empty($city)) {
        $cityerror = "This Field is required";
    }
    //feedback
    if (empty($feedback)) {
        $feedbackerror = "This Field is required";
    }

    if ($nameerror == "" && $mobnoerror == "" && $emailerror == "" &&  $gendererror == "" && $cityerror == "" && $feedbackerror == "") {


      echo "<h2 color = #FF0001> <br><b>We will contact you shortly.</b> </h3>"; 
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: arial;
        }

        h2{
          color: darkgreen;
        }

        body {
            text-align: center;
            background-image: url("images/backimg.jpg");

        }

        .error {
            color: #F00;
        }

        #p1 {
            height: 34px;
            padding-left: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-weight: bold;
            font-size: 20px;
            border-radius: 5px;
        }

        input[type=text],
        textarea {
            height: 34px;
            padding-left: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-weight: bold;
            font-size: 20px;
            border-radius: 5px;
        }

        .submit {
            padding: 10px;
            text-align: center;
            font-size: 18px;
            border: 2px solid #e5a900;
            color: blue;
            font-weight: bold;
            cursor: pointer;
            text-shadow: 0px 1px 0px #13506D;
            border-radius: 5px;
        }

        .submit:hover {
            background: yellow;
        }
    </style>
</head>

<body>
    <br>
    <h3>Contact Us</h3>
    <form action="" method="post">
        <span class="error">* required field.</span><br />
        <br>
        <br>
        <h3>Name:</h3>
        <input class="input" name="name" type="text" value="">
        <span class="error">* <?php echo $nameerror; ?></span><br />
        <br>

        <h3>E-mail:</h3>
        <input class="input" name="email" type="text" value="">
        <span class="error">* <?php echo $emailerror; ?></span><br />
        <br>
        <h3>Mobile Number :</h3>
        <input class="input" name="mobno" type="text" value="">
        <span class="error">* <?php echo $mobnoerror; ?></span><br />
        <br>
        <h3>City :</h3>
        <input class="input" name="city" type="text" value="">
        <span class="error">* <?php echo $cityerror; ?></span><br />
        <br>
        <h3>Gender:</h3>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Others">Others
        <span class="error">*<?php echo $gendererror; ?></span><br />
        <br>
        <h3>Feedback:</h3>
        <textarea cols="40" name="feedback" rows="10">
</textarea><br />
        <span class="error">*<?php echo $feedbackerror; ?></span><br />
        <br>
        <input class="submit" name="submit" type="submit" value="Submit">
    </form>
    <br />
    <br>
    <br>
    <footer>
              <p>Copyright © 2016 Designed by <a href="mailto:hege@example.com">Azuretheme</a> - All Rights Reserved.
              </p>
            </footer>
    
</body>

</html>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>