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
    <header class="header-in" style="margin-bottom: 7px;">
        <div class="header-in__inner-wrapper">
            <a href="#" class="header-in__back"><img src="img/header-in-back.svg"></a>
            <span class="header-in__title">Добавить адрес</span>
        </div>
    </header>
    <span class="address__title">Мы возим еду только в пределах<br>зоны доставки, чтобы она была<br> максимально свежей</span>

    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A811e43364244823ad05b88ab5a68bccea0563d12872bbb2b14edf88640a228fb&amp;source=constructor" width="100%" height="250" frameborder="0"></iframe>

    <form action="#" method="post" class="address__form">
        <div class="address__form-inner-wrapper">
            <input type="text" name="street" placeholder="Улица">
            <input type="text" name="house" placeholder="Дом">
        </div>
        <div class="address__form-inner-wrapper">
            <input type="text" name="entrance" placeholder="Подъезд">
            <input type="text" name="floor" placeholder="Этаж">
        </div>
        <div class="address__form-inner-wrapper">
            <input type="text" name="apartment" placeholder="Квартира / офис">
        </div>
        <button type="submit">Добавить адрес</button>
    </form>

</div>
<!--footer scripts start-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/common.js"></script>
<!--footer scripts end-->
</body>
</html>
