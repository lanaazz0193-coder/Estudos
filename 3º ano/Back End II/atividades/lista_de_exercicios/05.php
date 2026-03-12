<?php

echo "\nDigite a temperatura em C°: ";
$celsius = (float) fgets (STDIN);

$fahrenheit = ($celsius * (9/5)) + 32; 

echo "\n$celsius °C corresponde à $fahrenheit °F";