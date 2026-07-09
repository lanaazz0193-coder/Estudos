<?php

// Cria e conecta ao banco de dados

$dbPath = '../biblioteca.sqlite';
$pdo = new PDO("sqlite:$dbPath");
echo "Banco de Dados criado e conectado com sucesso! \n";

$crtiacaoTabela = "

    CREATE TABLE livros (

    id_livro  INTEGER PRIMARY KEY AUTOINCREMENT,
    nome      TEXT NOT NULL,
    autor     TEXT,
    qttd_pags INTEGER,
    genero    TEXT NOT NULL,
    status    TEXT);";

$pdo->exec($crtiacaoTabela);

// Cria a tabela 'livros'
//$pdo->exec('CREATE TABLE livros (
//    id_livro  INTEGER PRIMARY KEY AUTOINCREMENT,
//    nome      TEXT NOT NULL,
//    autor     TEXT,
//    qttd_pags INTEGER,
//    genero    TEXT NOT NULL,
//    status    TEXT
//);');

echo "Tabela Livros criada com sucesso!";

$sql = "
INSERT INTO Livros (nome, qttd_pags, autor, imagem, status, genero, nota) VALUES
('A Metamorfose', 120, 'Franz Kafka', 'ametamorfose.jpg, 'Lido', 'Novela', 4),
('A Morte de Ivan Ilitch', 90, 'Liev Tolstói', 'amortedeivanilitch.jpg', 'Lido', 'Novela', 5),
('Ilíada', 200, 'Homero', 'iliada.jpg', 'Lido', 'Épico', 4),
('Noites Brancas', 90, 'Dostoievski', 'noitesbrancas.jpg', 'Lido', 'Romance', 4),
('O Gato Preto', 120, 'Edgar Allan Poe', 'ogatopreto.jpg', 'Lido', 'Terror', 4),
('Coraline', 300, 'Neil Gaiman', 'coraline.jgp', 'Lido', 'Terror', 5);
";