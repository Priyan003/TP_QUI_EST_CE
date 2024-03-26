<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP QUI EST-CE</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="titre">
    <h1>TP QUI EST-CE</h1>
  </div>

<div class="column-images">
   <img src="images/0000000.jpg">
    <img src="images/0001111.jpg">
    <img src="images/0010011.jpg">
    <img src="images/1101100.jpg">
    <img src="images/1110000.jpg">
    <img src="images/1111111.jpg">
    <img src="images/0011100.jpg">
    <img src="images/0100101.jpg">
    <img src="images/0101010.jpg">
    <img src="images/1100011.jpg">
    <img src="images/0110110.jpg">
    <img src="images/0111001.jpg">
    <img src="images/1000110.jpg">
    <img src="images/1001001.jpg">
    <img src="images/1010101.jpg">
    <img src="images/1011010.jpg">
</div>
 




<form method="post" action="algorithme.php">
  <li>1. A-t-il des lunettes ?
    <input type="checkbox" name="OUI" id="OUI" name="OUI">  
  </li>
</form>



  
</body>
</html>


<?php

echo "OUI: ".$_GET["OUI"];


?>
