<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <?php
  	$a = [5, 10, 20, 1, 8];

  	for ($i=0; $i < count ($a) ; $i++) { 
  		print '<li>' .$a [$i]. '</li>';
  	}
  ?>
	
	<?php
  	$a = ['mela', 'kiwi', 'pera'];

  	echo $a[1];
  ?>
	<h1>Hello, world!</h1>
	<body background="http://i.imgur.com/4obrSTa.png">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>