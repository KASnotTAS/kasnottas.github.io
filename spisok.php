<?php
require_once 'script.php';

// 1. Создаем объект нашего класса
$db = new Database();

// 2. Вызываем метод получения всех фильмов и записываем их в переменную $items
$items = $db->getAllMovies();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8" />
    <title>Список</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="globals.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="main">
<div class="desktop" ><img class="background" src="img/bgbg.png"/>

// header
<header class="header" ><div class="rectangle-6" ></div>
<img class="glavnaya-group" src="img/image-99.png" />
<img class="list-group" src="img/image-99.png" />
<img class="forma-group" src="img/image-99.png" />
<img class="info-group" src="img/image-99.png" />
<div class="text-wrapper-8" > <a href="index.html">ГЛАВНАЯ</a></div>
<div class="text-wrapper-9" > <a href="spisok.html">СПИСОК</a></div>
<div class="text-wrapper-10" > <a href= "forma.php">ФОРМА</a></div>
<div class="text-wrapper-11" > <a href= "info-base.html">ИНФО</a></div>
<div class="rectangle-7" ></div>
<div class="titr-2" ><div class="rectangle-5" ></div>
<img class="image-2" src="img/image.png" /></div></header>

// main part
<div class="main-thing" >
    <div class="rectangle_new-2" ></div>
    <div class="name" ><div class="rectangle-10" ></div>
    <div class="rectangle-11" ></div>
    <div class="display-5" >Список</div>
    <div class="display-6" >Список</div></div>
    <div class="container mt-4"> 
        <div id="cards-container" class="row"></div>
</div>


// footer
<footer class="footer3" ><div class="rectangle-4" ></div>
<div class="base-nav" ><div class="base-nav-2" >Навигация</div>
<p class="nav-li" ><span class="span" >&nbsp;&nbsp;<a href="index.html">Главная</a><br/>&nbsp;&nbsp;<a href="spisok.html">Список</a><br/>&nbsp;&nbsp;<a href= "forma.php">Форма</a><br/></span>
<span class="text-wrapper-3" >&nbsp;&nbsp;</span>
<span class="span" ><a href= "info-base.html">Инфо</a></span></p></div>
<div class="titr" ><div class="rectangle-5" ></div>
<img class="img" src="img/image.png" /></div>
<div class="address" ><p class="twitter-inc" ><span class="text-wrapper-4" >Связь
<br/></span>
<span class="text-wrapper-5" >kazakofftema7@</span></p></div>
<div class="text-wrapper-6" >Товарищество<br/>Исследователей<br/>Творческого Ретро</div>
<div class="text-wrapper-7" >2026 год</div></footer>

<script>
    const items = <?php echo json_encode($items ?? [], JSON_UNESCAPED_UNICODE); ?>;
</script>

<script src="script.js"></script>

</body>
</html>