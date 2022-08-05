<?php
include './app/include/header.php';
require './app/database/db.php';
?>

<body>
<!--СЛАЙДЕР ПОД МЕНЮ-->
<div class="conteiner3">
    <div class="slider">
        <div class="text__slider">
            <div class="title__slider">
                <p>Центр Молекулярной Диагностики — <br>медицинское учреждение <br> первой категории</p>
            </div>
            <div class="main__text__slider">
                <p>Подключим эквалайзер,<br>чтобы вы принимали платежи на сайте, <br>в мобильном приложении и соцсетях</p>
            </div>
            <a href="<?php echo BASE_URL . 'fast_reg.php'?>"><div class="button__slider">Записаться</div></a>
        </div>

        <div class="banners">
            <img src="assets/style/img/slider/Монтажная область 1.png" class="slider__img"></a>
        </div>
    </div>
</div>

<!--ФИЛИАЛЫ-->

<!--Иконки-->
<div class="branch__button__slider">
    <svg xmlns="http://www.w3.org/2000/svg" class="arrow_left_circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="arrow_right_circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
    </svg>
</div>

<!--Заголовок-->
<div class="branch__h">
    <h3>Выберите нужный филиал</h3>
</div>

<!--Филиалы-->
<div class="conteiner__branch">
    <div class="branch__all">
       <div class="branch">
       <a href="<?php echo BASE_URL . 'rab_shtab.php'?>"><img src="./assets/style/img/baners/branch/Rab_shtab.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Рабочего Штаба</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
            <a href="<?php echo BASE_URL . 'sverdlova.php'?>"><img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Свердлова</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'lermontova.php'?>"><img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Лермонтова</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'novo-lenino.php'?>"><img src="./assets/style/img/baners/branch/Bratsk.jpg" class="branch__img">
            <div class="branch_elem">
                <h6>Ново-Ленино</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'solnechniy.php'?>"><img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Солнечный</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'novo-lenino.php'?>"><img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Ново-Ленино</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div>
            <div class="branch__button">
                <div class="button">Подробнее</div></a>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'lermontova.php'?>"><img src="./assets/style/img/baners/branch/Bratsk.jpg" class="branch__img">
            <div class="branch_elem">
                <h6>Братск</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
    </div>
</div>

<!--БАНЕРЫ-->
<div class="conteiner6">
        <div class="content__left">
            <img src="assets/style/img/baners/baners 1.png" class="baners__img-1">
            <h4>Диагностика<br> на современном оборудовании</h4>
            <p>МРТ, МСКТ, рентген, маммография. Максимально широкий спектр исследований для детей и взрослых</p>
            <a class="button__content__left">Подробнее</a>
        </div>
        <div class="content__right">
            <img src="assets/style/img/baners/baners 2.png" class="baners__img-2">
            <h4>Цифровая маммография <br>экспертного уровня</h4>
            <p>Первая в регионе маммографическая система нового поколения с уникальными опциями</p>
            <a class="button__content__right">Подробнее</a>
        </div>
</div>


<!--БАНЕР ПЕРЕД ФУТЕРОМ-->
<div class="conteiner7">
    <div class="media">
        <div class="media__title">
            <img src="assets/style/img/baners/media 2.png" class="media__baner-1">
            <p>Почему выбирают<br> Диагностический Центр?</p>
        </div>
        <div class="media__text">
            <div class="media__text__left">
                <div class="media__text__content">
                    <h4>Большой опыт</h4>
                    <p>Тысячи пациентов, которых мы лечим каждый год</p>
                </div>
                <div class="media__text__content">
                    <h4>Правильные ответы</h4>
                    <p>Тысячи пациентов, которых мы лечим каждый год</p>
                </div>
            </div>
            <div class="media__text__right">
                <div class="media__text__content">
                    <h4>Вы на первом месте</h4>
                    <p>Тысячи пациентов, которых мы лечим каждый год</p>
                </div>
                <div class="media__text__content">
                    <h4>Инновации с отдачей</h4>
                    <p>Тысячи пациентов, которых мы лечим каждый год</p>
                </div>
            </div>
        </div>
    </div>


</div>


</body>
<script src="./assets/js/index.js"></script>
<script src="./assets/js/header.js"></script>
</html>

