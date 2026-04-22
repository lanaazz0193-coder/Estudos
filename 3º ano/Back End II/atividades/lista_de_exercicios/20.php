<?php

$abreArquivo = fopen('teste.txt', 'w');

$frase = "PHP é incrível";

fwrite($abreArquivo, $frase);

$abreArquivo = fopen('teste.txt', 'r');

$primeiraLinha = fgets($abreArquivo);

echo $primeiraLinha;

