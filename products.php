<?php
$products = [
    ["id" => 1, "pname" => "Product A", "price" => "$345.00", "quantity" => "4", "image" => "images/A.jpg"],
    ["id" => 2, "pname" => "Product B", "price" => "$342.00", "quantity" => "3", "image" => "images/B.jpg"],
    ["id" => 3, "pname" => "Product C", "price" => "$225.00", "quantity" => "2", "image" => "images/C.jpg"],
    ["id" => 4, "pname" => "Product D", "price" => "$543.00", "quantity" => "4", "image" => "images/D.jpg"],
    ["id" => 5, "pname" => "Product E", "price" => "$765.00", "quantity" => "4", "image" => "images/E.jpg"],
    ["id" => 6, "pname" => "Product F", "price" => "$98.00", "quantity" => "8", "image" => "images/F.jpg"],
    ["id" => 7, "pname" => "Product G", "price" => "$456.00", "quantity" => "4", "image" => "images/G.jpg"],
    ["id" => 8, "pname" => "Product H", "price" => "$410.00", "quantity" => "6", "image" => "images/H.jpg"],
    ["id" => 9, "pname" => "Product I", "price" => "$340.00", "quantity" => "4", "image" => "images/I.jpg"],
    

]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Products</title>
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
    <?php
    include("nav.php")
    ?>

    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                foreach ($products as $product) {
                    echo "<div class='col my-3'>
                        <div class='card shadow-sm'>
                            <img class='bd-placeholder-img card-img-top' src='".$product["image"]."' width='100%' height='225' />

                            <div class='card-body'>
                                <h5 class='card-title'>".$product["pname"]."</h5>
                                <p class='card-text'>Price: ".$product["price"]."</p>
                                <p class='card-text'>Quantity: ".$product["quantity"]."</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>

            </div>
            <footer>
              <p>Copyright © 2016 Designed by <a href="mailto:hege@example.com">Azuretheme</a> - All Rights Reserved.
              </p>
            </footer>
            
            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

          </body>

</html>