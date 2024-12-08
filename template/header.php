<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

    <link rel="stylesheet" href="../style/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
    <div class="header-wrapper">
        <div class="header-top">
            <div class="header-top__logo-position">
                <div class="header__logo">
                    <img src="../image/header/logo.svg" alt="">
                </div>
                <a class="catalog__button-link" href="">
                    <div class="catalog__button">
                        <span class="catalog__button_text">Каталог</span>
                        <div class="catalog__button-elem">
                            <span class="catalog__button-elem-item"></span>
                        </div>
                    </div>
                </a>
            </div>
            <form action="" class="header-search-form">
                <button><img src="../image/header/Search_Small.svg" alt=""></button>
                <input placeholder="Поиск" class="header-search" type="text">
            </form>
            <div class="header__controls">
                <a class="class=" header__controls_favourites" href="">
                <img src="" alt=""><span>Избранное</span>
                </a>
                <a class="header__controls_cart" href="">
                    <img src="" alt=""><span>Корзина</span>
                </a>
                <div class="header__controls_sigin">
                    <button>Войти</button>
                </div>
            </div>
        </div>
        <div class="header__tags">
            <ul>
                <a href="">Все</a>
                <a href="">Фэнтази</a>
                <a href="">Детективы</a>
                <a href="">Боевики</a>
                <a href="">Проза</a>
                <a href="">Бизнес</a>
                <a href="">Изотерика</a>
                <a href="">Психология</a>
                <a href="">Мода</a>
                <a href="">Кулинария</a>
                <a href="">Биография</a>
                <a href="">Хобби</a>
                <a href="">Домашние животные</a>
            </ul>
        </div>
    </div>
</header>