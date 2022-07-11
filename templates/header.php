<?php
    include_once('./data/categories.php'); 
    include_once('./data/posts.php');
    include_once('helpers/url.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilo Do Blog -->
    <link rel="stylesheet" href="<?= $BASE_URL?>/CSS/styles.css">
    
    <!-- Fontes Do Blog -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;1,300;1,700&family=Quicksand:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Codar.blog</title>
</head>
<body>
    <header>
        <a href="<?=$BASE_URL?>" id="logo">
            <img src="<?=$BASE_URL?>/img/logo.svg" alt="Blog Codar">
        </a>

        <nav>
            <ul id="navbar">
                <li><a href="<?=$BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?=$BASE_URL?>contact.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>