<?php

// Cria e conecta ao banco de dados

$dbPath = 'biblio_match.sqlite';
$pdo = new PDO("sqlite:$dbPath");
echo "Banco de Dados criado e conectado com sucesso! \n";

// Cria a tabela 'produtos'
$pdo->exec('CREATE TABLE livros (
    id_livro  INTEGER PRIMARY KEY AUTOINCREMENT,
    nome      TEXT NOT NULL,
    autor     TEXT,
    qttd_pags INTEGER,
    genero    TEXT NOT NULL,
    status    TEXT
);');
echo "Tabela Livros criada com sucesso!";