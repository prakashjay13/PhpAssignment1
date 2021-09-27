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
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="calculator.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
	</head>
	<body>
  <?php include("nav.php");?>
<section class="container">
    <h2>Calculator</h2>
</section>
		<div id="container">
			<div id="calculator">
				<div id="result">
					<div id="history">
						<p id="history-value"></p>
					</div>
					<div id="output">
						<p id="output-value"></p>
					</div>
				</div>
				<div id="keyboard">
					<button class="operator" id="clear">C</button>
					<button class="operator" id="backspace">CE</button>
					<button class="operator" id="%">%</button>
					<button class="operator" id="/">&#247;</button>
					<button class="number" id="7">7</button>
					<button class="number" id="8">8</button>
					<button class="number" id="9">9</button>
					<button class="operator" id="*">&times;</button>
					<button class="number" id="4">4</button>
					<button class="number" id="5">5</button>
					<button class="number" id="6">6</button>
					<button class="operator" id="-">-</button>
					<button class="number" id="1">1</button>
					<button class="number" id="2">2</button>
					<button class="number" id="3">3</button>
					<button class="operator" id="+">+</button>
					<button class="number" id="0">0</button>
					<button class="operator" id="empty">.</button>
					<button class="number" id="00">00</button>
					<button class="operator" id="=">=</button>
				</div>
			</div>
		</div>
		<script src="calculator.js"></script>
		<?php include('foot.php')?>
 




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>