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
 




<form>
  <ol>
    <li>1. A-t-il des lunettes ?
      <input type="text" name="lunettes" id="lunettes">
    </li>
    <li>2. A-t-il une moustache ?
      <input type="text" name="moustache" id="moustache">
    </li>
    <li>3. A-t-il un chapeau ?
      <input type="text" name="chapeau" id="chapeau">
    </li>
    <li>4. A-t-il des cheveux ?
      <input type="text" name="cheveux" id="cheveux">
    </li>
    <li>5. A-t-il une boucle d'oreille ?
      <input type="text" name="boucle_oreille" id="boucle_oreille">
    </li>
    <li>6. A-t-il une barbe ?
      <input type="text" name="barbe" id="barbe">
    </li>
    <li>7. A-t-il un noeud papillon ?
      <input type="text" name="noeud_papillon" id="noeud_papillon">
    </li>
  </ol>
  <input type="submit" value="Envoyer">
</form>

<?php

    echo "Chaîne de résultats : " . $chaine_resultats;
  ?>

  
</body>
</html>


