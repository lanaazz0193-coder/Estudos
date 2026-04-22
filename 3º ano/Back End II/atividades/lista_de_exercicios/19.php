<?php

$abreArquivo = fopen('teste.txt', 'r');

$primeiraLinha = fgets($abreArquivo);

echo $primeiraLinha;