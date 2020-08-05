<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png"/>
    <title>Главная - A1</title>

    <!--header styles start-->
    <link rel="stylesheet" href="css/main.css">
    <!--header styles end-->
</head>
<body>
<div class="main container">
    <header class="header">
        <div class="header_inner_wrapper">
            <img class="header__menu-button" src="img/burger-menu-icon.svg">
            <img class="header__logo" src="img/logo.svg">
        </div>
        <div class="header__login-button">
            <img class="header__login-img" src="img/user-icon.svg">
            <span class="header__login-text">Войти</span>
        </div>
        <!--<div class="header__login-button" style="width: 170px;">
            <img class="header__login-img" src="img/user-icon.svg">
            <span class="header__login-text">+7 (515) 525-66-55</span>
        </div>-->
    </header>
    <div class="search">
        <form action="/" class="search__form">
            <input type="search" name="search" id="search" placeholder="Поиск">
            <button type="submit"><img src="img/search-icon.svg"></button>
        </form>
    </div>
    <div class="filters">
        <div class="filter-item active">
            <?php include "img/sushi-icon.svg" ?>
            <span class="filter-item-text">Суши</span>
        </div>
        <div class="filter-item">
            <?php include "img/pizza-icon.svg" ?>
            <span class="filter-item-text">Пицца</span>
        </div>
        <div class="filter-item">
            <?php include "img/wok-icon.svg" ?>
            <span class="filter-item-text">WOK</span>
        </div>
        <div class="filter-item">
            <?php include "img/soup-icon.svg" ?>
            <span class="filter-item-text">Супы</span>
        </div>
        <div class="filter-item">
            <?php include "img/bakery-icon.svg" ?>
            <span class="filter-item-text">Пироги</span>
        </div>
        <div class="filter-item">
            <?php include "img/second-eat-icon.svg" ?>
            <span class="filter-item-text">Второе</span>
        </div>
    </div>
    <div class="products">
        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>
        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>

        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>

        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>

        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>

        <div class="product-item">
            <img class="product-item-img" src="img/product-img.png">
            <h2 class="product-item-title">Ролл «Филадельфия»</h2>
            <p class="product-item-desc">Идейные соображения высшего порядка, а также начало повседневной работы</p>
            <div class="product-item-bottom">
                <div class="product-item-bottom-i-wrapper">
                    <img class="product-item-bottom-i" src="img/info-icon.svg">
                    <div class="product-item-bottom-i-desc">
                        <ul class="product-item-bottom-i-list">
                            <li>
                                <span class="product-item-bottom-i-list-title">Количество</span>
                                <span class="product-item-bottom-i-list-text">8 шт.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Вес</span>
                                <span class="product-item-bottom-i-list-text">300 г.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Калории</span>
                                <span class="product-item-bottom-i-list-text">784 кК.</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Белки</span>
                                <span class="product-item-bottom-i-list-text">9</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Жиры</span>
                                <span class="product-item-bottom-i-list-text">10</span>
                            </li>
                            <li>
                                <span class="product-item-bottom-i-list-title">Углеводы</span>
                                <span class="product-item-bottom-i-list-text">20</span>
                            </li>
                        </ul>
                        <span class="product-item-bottom-i-desc-bottom-text">Пищевая ценность на 100гр. продукта</span>
                    </div>
                </div>
                <span class="product-item-price-crossed-out">350 ₽</span>
                <div class="product-item-price-wrapper">
                    <span class="product-item-price-main">249 ₽</span>
                    <span class="product-item-amount">15</span>
                </div>
            </div>
        </div>


    </div>
    <div class="cart-button-wrapper">
        <div class="cart-button">
            <div class="cart-button-left">
                <img src="img/cart-icon.svg">
                <span>Корзина</span>
            </div>
            <div class="cart-button-right">
                <span>1095 ₽</span>
            </div>
        </div>
    </div>
    <div class="burger-menu">
        <div class="burger-menu__header">
            <img src="img/burger-close.svg" class="burger-menu__close">
            <a href="/"><img src="img/burger-logo.svg" class="burder-menu__logo"></a>
        </div>
        <div class="burger-menu__content">
            <a href="#" class="burger-menu__content-item burger-menu__content-item-first">
                <span><img src="img/user-burger-menu-icon.svg">Привет, Андрей</span>
                <span class="burger-menu__content-item-phone">+7 (989) 852-55-11</span>
            </a>
            <a href="#" class="burger-menu__content-item">
                <span><img src="img/location-icon.svg">г. Омск</span>
            </a>
            <a href="#" class="burger-menu__content-item">
                <span><img src="img/user-agreement-icon.svg">Пользовательское соглашение</span>
            </a>
        </div>
        <div class="burger-menu__button-wrapper">
            <a href="#" class="burger-menu__button">Связаться с нами</a>
        </div>

    </div>
</div>
<!--footer scripts start-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/common.js"></script>
<!--footer scripts end-->
</body>
</html>
