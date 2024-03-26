<?php

$personnage = $_GET['Var']; 
$personnage2 = $personnage;
$personnage3 = $personnage;
//echo ("Valeur 1 = " . $personnage[1]);

$personnage = substr($personnage, 0, 1) . substr($personnage, 1 + 1);
$personnage = substr($personnage, 0, 2) . substr($personnage, 2 + 1);
$personnage = substr($personnage, 0, 3) . substr($personnage, 3 + 1);

//echo($personnage);
$s1 = intval($personnage[0]) + intval($personnage[1]) + intval($personnage[2]) + intval($personnage[3]);
//echo ($s1);

if ($s1 %2 == 0) {
    $s1 = 0;
} else {
    $s1 = 1;
}

echo ("s1 = " . $s1);


//s2
$personnage2 = substr($personnage2, 0, 0) . substr($personnage2, 0 + 1);
$personnage2 = substr($personnage2, 0, 2) . substr($personnage2, 2 + 1);
$personnage2 = substr($personnage2, 0, 4) . substr($personnage2, 4 + 1);
$s2 = intval($personnage2[0]) + intval($personnage2[1]) + intval($personnage2[2]) + intval($personnage2[3]);
if ($s2 %2 == 0) {
    $s2 = 0;
} else {
    $s2 = 1;
}

echo ("s2 = " . $s2);


//s3
$personnage3 = substr($personnage3, 0, 0) . substr($personnage3, 0 + 1);
$personnage3 = substr($personnage3, 0, 0) . substr($personnage3, 0 + 1);
$personnage3 = substr($personnage3, 0, 0) . substr($personnage3, 0 + 1);
$s3 = intval($personnage3[0]) + intval($personnage3[1]) + intval($personnage3[2]) + intval($personnage3[3]);
if ($s3 %2 == 0) {
    $s3 = 0;
} else {
    $s3 = 1;
}

echo ("s3 = " . $s3);


?>
