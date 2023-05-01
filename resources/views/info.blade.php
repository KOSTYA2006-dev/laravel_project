<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/onas.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/model.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background: #83ACC4">
@include("layouts.head")
    <div class="obo_nas">
        <h2 class="promo_h2"> О компании</h2>
        <p class="promo_text">
            Физика.ru — Мы предлагаем широкий спектр тем, начиная от классической механики и заканчивая квантовой физикой, которые затрагивают как основы науки, так и самые передовые научные исследования. Информация на сайте представлена в доступной и интересной форме, задачей которой является вдохновлять и обучать.
        </p>
        <div class="statistika">
            <h3 class="promo_text3">Физика.ru — это </h3>
            <ul class="pade_list">
                <il class="list_item">
                    <h3 class="promo-page__item-title">
                        {{$data}}
                        <span class="promo-page__measure">Человек</span>
                    </h3>
                    <span class="promo-page__subtitle">Зарегистрированны на сайте</span>
                </il>
                <il class="list_item">
                    <h3 class="promo-page__item-title">
                        1
                        <span class="promo-page__measure"> Млрд</span>
                    </h3>
                    <span class="promo-page__subtitle"> Заказчиков </span>
                </il>
                <il class="list_item">
                    <h3 class="promo-page__item-title">
                        1
                        <span class="promo-page__measure"> Млрд</span>
                    </h3>
                    <span class="promo-page__subtitle"> Исполнители </span>
                </il>
                <il class="list_item">
                    <h3 class="promo-page__item-title">
                        1
                        <span class="promo-page__measure"> Млрд</span>
                    </h3>
                    <span class="promo-page__subtitle"> Счастливых людей которое нашли работу  </span>
                </il>
            </ul>
        </div>
    </div>
</body>

</html>