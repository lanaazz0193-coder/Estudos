<?php

echo "Digite a nota 1:\n";
$n1 = (float) fgets (STDIN);
echo "Digite a nota 2:\n";
$n2 = (float) fgets (STDIN);
echo "Digite a nota 3:\n";
$n3 = (float) fgets (STDIN);

$media = ($n1 + $n2 + $n3) / 3;

echo "A média de notas é igual a $media.";
