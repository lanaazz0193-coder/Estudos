<?php

echo "Digite a medida em metros: \n";
$medidaM = (float) fgets (STDIN);

$medidaCm = $medidaM * 100;

echo "$medidaM metros equivale a $medidaCm centímetros.";