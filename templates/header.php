<?php
  include_once('./data/posts.php');
  include_once('./data/categories.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <title>Blog Codar</title>
</head>
<body>
    <header>
        <a href="./" id="logo">
            <img src="./img/logo.svg" alt="logo da página"/>
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="./" class="navLink">Home</a></li>
                <li><a href="#" class="navLink">Categorias</a></li>
                <li><a href="#" class="navLink">Sobre</a></li>
                <li><a href="./contato.php" class="navLink">Contato</a></li>
            </ul>
        </nav>
    </header>