<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png"/>
    <title>Личный кабинет - A1</title>

    <!--header styles start-->
    <link rel="stylesheet" href="css/main.css">
    <!--header styles end-->
</head>
<body>
<div class="main container" style="padding-bottom: 30px;">
    <header class="header-in">
        <div class="header-in__inner-wrapper">
            <a href="#" class="header-in__back"><img src="img/header-in-back.svg"></a>
            <span class="header-in__title">Личный кабинет</span>
        </div>
        <img class="header-in__logo" src="img/header-in-logo.svg">
    </header>

    <div class="cabinet__top-buttons">
        <a href="./cabinet.php" class="cabinet__top-buttons-profile inactive"><?php include "img/cabinet-profile-icon.svg"?>Профиль</a>
        <a href="./orders.php" class="cabinet__top-buttons-orders"><?php include "img/cabinet-cart-icon.svg"?>Заказы</a>
    </div>

    <div class="orders">
        <div class="orders__item order-success">
            <div class="orders__item-top-line">
                <span class="orders__item-number">Заказ #9235555-01</span>
                <div class="orders__item-top-line-right">
                    <span class="orders__item-price">2249 ₽</span>
                    <img class="orders__item-close" src="img/order-close.svg">
                </div>
            </div>
            <span class="orders__item-address">ул. Фрунзе 308, офис 401</span>
            <div class="orders__item-bottom-line">
                <span class="orders__item-date">25 мая 2020 г.</span>
                <span class="orders__item-check"><img src="img/get-check-icon.svg"><span>Получить чек</span></span>
                <span class="orders__item-status green">Доставлен</span>
            </div>
            <div class="orders__item-rating">
                <span class="orders__item-rating-title">Оцените заказ</span>
                <div class="orders__item-rating-stars">
                    <span><?php include "img/star-icon.svg"?></span>
                    <span><?php include "img/star-icon.svg"?></span>
                    <span><?php include "img/star-icon.svg"?></span>
                    <span><?php include "img/star-icon.svg"?></span>
                    <span><?php include "img/star-icon.svg"?></span>
                </div>
            </div>
            <form action="#" method="post" class="orders__item-feedback">
                <textarea name="feedback" placeholder="Вы можете оставить отзыв"></textarea>
                <img src="img/feedback-icon.svg" class="orders__item-feedback-icon">
                <div class="orders__item-feedback-file-wrapper">
                    <label class="orders__item-feedback-file-image" for="file"><img src="img/input-file-img.svg"></label>
                    <input type="file" name="file" id="file">
                </div>
            </form>
        </div>
        <div class="orders__item">
            <div class="orders__item-top-line">
                <span class="orders__item-number">Заказ #9235555-01</span>
                <div class="orders__item-top-line-right">
                    <span class="orders__item-price">2249 ₽</span>
                    <img class="orders__item-close" src="img/order-close.svg">
                </div>
            </div>
            <span class="orders__item-address">ул. Фрунзе 308, офис 401</span>
            <div class="orders__item-bottom-line">
                <span class="orders__item-date">25 мая 2020 г.</span>
                <span class="orders__item-check"><img src="img/get-check-icon.svg"><span>Получить чек</span></span>
                <span class="orders__item-status yellow">Доставляется</span>
            </div>
        </div>
        <div class="orders__item">
            <div class="orders__item-top-line">
                <span class="orders__item-number">Заказ #9235555-01</span>
                <div class="orders__item-top-line-right">
                    <span class="orders__item-price">2249 ₽</span>
                    <img class="orders__item-close" src="img/order-close.svg">
                </div>
            </div>
            <span class="orders__item-address">ул. Фрунзе 308, офис 401</span>
            <div class="orders__item-bottom-line">
                <span class="orders__item-date">25 мая 2020 г.</span>
                <span class="orders__item-check"><img src="img/get-check-icon.svg"><span>Получить чек</span></span>
                <span class="orders__item-status red">Отменен</span>
            </div>
        </div>
    </div>
</div>
<div class="orders__get-check-popup">
    <span class="orders__get-check-popup-title">Отправка кассового чека</span>
    <form action="#" method="post" class="orders__get-check-popup-form">
        <div class="orders__get-check-popup-form-email-wrapper">
            <input type="email" name="email" id="email" placeholder="Укажите e-mail">
            <img src="img/email-popup-icon.svg" class="orders__get-check-popup-email-image">
        </div>
        <button type="submit">Отправить</button>
    </form>
</div>
<div class="overlay"></div>
<!--footer scripts start-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="js/common.js"></script>
<script>
    $("#phone").mask("+7 (999) 999-99-99");
</script>
<!--footer scripts end-->
</body>
</html>
