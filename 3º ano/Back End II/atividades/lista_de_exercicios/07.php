<?php

echo "Que horas são? ";
$hora = (float) fgets (STDIN);

if ($hora >= 5 && $hora <= 11) {
    echo "Bom dia.";
} elseif ($hora >= 12 && $hora <= 18) {
    echo "Boa tarde.";
} else {
    echo ("Boa noite.");
}