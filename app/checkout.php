<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png"/>
    <title>Оформление заказа - A1</title>

    <!--header styles start-->
    <link rel="stylesheet" href="css/main.css">
    <!--header styles end-->
</head>
<body>
<div class="main container">
    <header class="header-in">
        <div class="header-in__inner-wrapper">
            <a href="#" class="header-in__back"><img src="img/header-in-back.svg"></a>
            <span class="header-in__title">Оформление заказа</span>
        </div>
        <img class="header-in__logo" src="img/header-in-logo.svg">
    </header>

    <form action="#" method="post" class="delivery-form" id="delivery-form">
        <div class="delivery-form__address">
            <span class="delivery-address__title">Выберите адрес доставки</span>
            <input type="text" name="address" id="address" placeholder="ул. Фрунзе 38, офис 401">
        </div>
        <div class="delivery-form__date-time-wrapper">
            <div class="delivery-form__date">
                <span class="delivery-form__date__title">Дата доставки</span>
                <div class="delivery-form__date-fields-wrapper">
                    <div class="delivery-form__date-main-field">
                        <img src="img/checkout-data-icon.svg" class="delivery-form__date-main-field-left-img">
                        <span class="delivery-form__date-main-field-text">Сегодня</span>
                        <img src="img/checkout-bottom-icon.svg" class="delivery-form__date-main-field-right-img">
                    </div>
                    <div class="delivery-form__date-subfields">
                        <span class="delivery-form__date-subfield">Сегодня</span>
                        <span class="delivery-form__date-subfield">Завтра</span>
                        <span class="delivery-form__date-subfield">Ср 21 июня</span>
                        <span class="delivery-form__date-subfield">Чт 22 июня</span>
                        <span class="delivery-form__date-subfield">Пт 23 июня</span>
                        <span class="delivery-form__date-subfield">Сб 24 июня</span>
                        <span class="delivery-form__date-subfield">Вс 25 июня</span>
                    </div>
                </div>
            </div>
            <div class="delivery-form__time">
                <span class="delivery-form__date__title">Время доставки</span>
                <div class="delivery-form__date-fields-wrapper">
                    <div class="delivery-form__date-main-field">
                        <img src="img/checkout-time-icon.svg" class="delivery-form__date-main-field-left-img">
                        <span class="delivery-form__date-main-field-text">Ближайшее</span>
                        <img src="img/checkout-bottom-icon.svg" class="delivery-form__date-main-field-right-img">
                    </div>
                    <div class="delivery-form__date-subfields">
                        <span class="delivery-form__date-subfield">Ближайшее</span>
                        <span class="delivery-form__date-subfield">15:00</span>
                        <span class="delivery-form__date-subfield">16:00</span>
                        <span class="delivery-form__date-subfield">17:00</span>
                        <span class="delivery-form__date-subfield">18:00</span>
                        <span class="delivery-form__date-subfield">19:00</span>
                        <span class="delivery-form__date-subfield">20:00</span>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit">
    </form>

    <div class="checkout-notice">
        <span class="checkout-notice__title">Примечание</span>
        <span class="checkout-notice__text">A1ЕДА доставляет только<br>предоплаченные заказы</span>
    </div>

    <div class="cart-button-wrapper">
        <div class="cart-button cart-button-2">
            <div class="cart-button-left">
                <span>Оформить заказ</span>
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
