<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png"/>
    <title>Вход - A1</title>

    <!--header styles start-->
    <link rel="stylesheet" href="css/main.css">
    <!--header styles end-->
</head>
<body>
<div class="main container">
    <header class="header-in">
        <div class="header-in__inner-wrapper">
            <a href="#" class="header-in__back"><img src="img/header-in-back.svg"></a>
            <span class="header-in__title">Вход</span>
        </div>
        <img class="header-in__logo" src="img/header-in-logo.svg">
    </header>

    <img class="login__logo" src="img/payment3_logo.svg">
    <span class="login__title">Пожалуйста, укажите номер телефона</span>

    <form action="#" method="post" class="login__form1">
        <input type="text" class="login__form1-number" name="number" id="phone" placeholder="номер телефона">
        <span class="login__form1-number-before">+7</span>
        <button type="submit">Получить код</button>
    </form>
    <form action="#" method="post" class="login__form2">
        <input type="text" class="login__form2-code" name="code" placeholder="Код из sms">
        <button type="submit">Далее</button>
    </form>

    <p class="login__agreement">Нажимая на кнопку, вы принимаете<br> условия <a href="#">пользовательского соглашения</a></p>

</div>
<!--footer scripts start-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="js/common.js"></script>
<script>
    $("#phone").mask("(999) 999-99-99");
</script>
<!--footer scripts end-->
</body>
</html>
