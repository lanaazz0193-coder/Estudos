<?php

echo "Digite um número: \n";

$numero = (float) fgets (STDIN);

echo "O número é: $numero\n";

//Onde, a funçaõ nativa "fgtes" captura uma string de uma rquivo, e STDIN é o identificador do terminal;
//Basicamente, o "f" vem de "file" (arquivo), indicando que estamos obtendo algo de um arquivo. O "gets" vem de "pegar" e o "s" de string, que significa obter uma sequência de caracteres de um arquivo.
//Assim, quando utilizamos a função fgets, que tenta ler uma string de um arquivo, e passamos o nosso terminal como o arquivo passamos o nosso terminal como arquivo de entrada, ela ficará guardando até 