<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png"/>
    <title>Корзина - A1</title>

    <!--header styles start-->
    <link rel="stylesheet" href="css/main.css">
    <!--header styles end-->
</head>
<body>
<div class="main container-inner">
    <header class="header-in">
        <div class="header-in__inner-wrapper">
            <a href="#" class="header-in__back"><img src="img/header-in-back.svg"></a>
            <span class="header-in__title">Корзина</span>
        </div>
        <img class="header-in__logo" src="img/header-in-logo.svg">
    </header>
    <div class="cart-products">
        <div class="cart-products__item">
            <span class="cart-products__item-remove"><img src="img/cart-product-remove.svg"></span>
            <img src="img/cart-product-img.png" class="cart-products__item-image">
            <div class="cart-products__item-title-wrapper">
                <span class="cart-products__item-title">Ролл «Филадельфия»</span>
                <span class="cart-products__item-title-bottom">180 гр. х 3 шт.</span>
            </div>
            <div class="cart-products__item-price-wrapper">
                <span class="cart-products__item-price">2249 ₽</span>
                <div class="cart-products__item-amount-change">
                    <img src="img/less.svg" class="less">
                    <span class="amount">3</span>
                    <img src="img/more.svg" class="more">
                </div>
            </div>
        </div>
        <div class="cart-products__item">
            <span class="cart-products__item-remove"><img src="img/cart-product-remove.svg"></span>
            <img src="img/cart-product-img.png" class="cart-products__item-image">
            <div class="cart-products__item-title-wrapper">
                <span class="cart-products__item-title">Ролл «Филадельфия»</span>
                <span class="cart-products__item-title-bottom">180 гр. х 3 шт.</span>
            </div>
            <div class="cart-products__item-price-wrapper">
                <span class="cart-products__item-price">2249 ₽</span>
                <div class="cart-products__item-amount-change">
                    <img src="img/less.svg" class="less">
                    <span class="amount">3</span>
                    <img src="img/more.svg" class="more">
                </div>
            </div>
        </div>
    </div>
    <div class="cart-delivery">
        <div class="cart-delivery__left-wrapper">
            <span class="cart-delivery__title">Доставка</span>
            <span class="cart-delivery__title-bottom">Закажите еще на 280р<br>для бесплатной доставки</span>
        </div>
        <span class="cart-delivery__price">99 ₽</span>
    </div>
    <div class="cart-promo">
        <div class="cart-promo__title">Введите промокод если есть</div>
        <form method="post" action="#" class="cart-promo-form">
            <input type="text" name="promo" id="promo" placeholder="6136316136136">
            <input type="submit">
        </form>
    </div>
    <div class="cart-minimum-order-price">
        <span><img src="img/cart-i.svg">Минимальная сумма заказа 500р</span>
    </div>
    <div class="cart-recommend">
        <span>Рекомендуем</span>
    </div>
    <div class="cart-button-wrapper">
        <div class="cart-button">
            <div class="cart-button-left">
                <img src="img/cart-icon.svg">
                <span>Оформить заказ</span>
            </div>
            <div class="cart-button-right">
                <span>1095 ₽</span>
            </div>
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
