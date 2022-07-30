
<?php include("./app/include/header.php"); ?>
<body>
<!--СЛАЙДЕР ПОД МЕНЮ-->
<div class="conteiner3">
    <div class="slider">
        <div class="text__slider">
            <div class="title__slider">
                <p>Центр Молекулярной Диагностики — <br>медицинское учреждение <br> первой категории</p>
            </div>
            <div class="main__text__slider">
                <p>Подключим интернет-эквайринг, <br>чтобы вы принимали платежи на сайте, <br>в мобильном приложении и соцсетях</p>
            </div>

            <div class="button__slider">
                Записаться
            </div>
        </div>

        <div class="banners">
            <img src="assets/style/img/slider/Монтажная область 1.png" class="slider__img"></a>
        </div>
    </div>
</div>


<!--ЛЕГКАЯ РЕГИСТРАЦИЯ-->
<div class="conteiner5">
    <div class="easy__reg">
        <div class="reg">
            <div class="input__style">
                <div id="elastic-2" class="input2">
                <label for="elastic-2" class="elastic__label">Выберите филиал</label>
                </div>
            </div>
                <ul class="elastic2">
                    <li><a href="#" class="text_elas">Братск</a></li>
                    <li><a href="#" class="text_elas">Рабочего Штаба</a></li>
                    <li><a href="#" class="text_elas">Солнечный</a></li>
                    <li><a href="#" class="text_elas">Свердлова</a></li>
                    <li><a href="#" class="text_elas">Ново-Ленино</a></li>
                    <li><a href="#" class="text_elas">Лермонтова</a></li>
                    <li><a href="#" class="text_elas">Радужный</a></li>
                    <li><a href="#" class="text_elas">Юрия Тена</a></li>
                </ul>
        </div>
        <div class="reg">
            <div class="input__style">
                <div id="elastic" class="input">
                <label for="elastic" class="elastic__label">Выберите врача</label>
                </div>
            </div>
                <ul class="elastic">
                    <li><a href="#" class="text_elas">Терапевт</a></li>
                    <li><a href="#" class="text_elas">Аллерголог</a></li>
                    <li><a href="#" class="text_elas">Кардиолог</a></li>
                    <li><a href="#" class="text_elas">Ортопед</a></li>
                    <li><a href="#" class="text_elas">Педиатр</a></li>
                    <li><a href="#" class="text_elas">Хирург</a></li>
                    <li><a href="#" class="text_elas">Невролог</a></li>
                    <li><a href="#" class="text_elas">Гепатолог</a></li>
                </ul>
        </div>
            <div class="reg">
                <div class="input__style">
                    <div id="elastic__data" class="input2">
                    <label for="elastic-2" class="elastic__label">Выберите доступную дату</label>
                    </div>
                </div>

                <!--КАЛЕНДАРЬ-->
                <div class="conteiner__cal"  id="month__reg" onclick="dataHidden()">
                    <div class="month">
            
                        <div class="date">
                            <h2>Май</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi-bi-chevron-down-date-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" id="swipe__top"/>
                                </svg>
            
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi-bi-chevron-down-date-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" id="swipe__down"/>
                                </svg>
                            <p></p>
            
            
                        </div>
            
                        <div class="weekdays">
                            <ul>
                                <li>ПН</li>
                                <li>ВТ</li>
                                <li>СР</li>
                                <li>ЧТ</li>
                                <li>ПТ</li>
                                <li>СБ</li>
                                <li>ВС</li>
                            </ul>
                        </div>
            
                        <div class="days">
                            <ul>
                               <li class="last__date" id="blyaa">30</li>
                               <li class="last__date">31</li>
                               <li>1</li>
                               <li>2</li>
                               <li>3</li>
                               <li>4</li>
                               <li>5</li>
                               <li>6</li>
                               <li>7</li>
                               <li>8</li>
                               <li>9</li>
                               <li>10</li>
                               <li>11</li>
                               <li>12</li>
                               <li>13</li>
                               <li>14</li>
                               <li>15</li>
                               <li>16</li>
                               <li>17</li>
                               <li>18</li>
                               <li>19</li>
                               <li>20</li>
                               <li>21</li>
                               <li>22</li>
                               <li>23</li>
                               <li>24</li>
                               <li>25</li>
                               <li>26</li>
                               <li>27</li>
                               <li>28</li>
                               <li>29</li>
                               <li>30</li>
                               <li class="next__date">1</li>
                               <li class="next__date">2</li>
                               <li class="next__date">3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--КОНЕЦ КАЛЕНДАРЯ-->
            </div>
                    <div class="reg">
            <div class="input__style">
                <input type="text"  placeholder=" " id="elastic" class="input__name">
                <label for="elastic" class="elastic__label">Комментарий (можно оставить пустым)</label>
            </div>
        </div>
        <div class="reg__name">
            <div class="input__style__name">
                <input type="text"  placeholder=" " id="elastic" class="input__name">
                <label for="elastic" class="elastic__label">Ваше имя</label>
            </div>
            <div class="input__style__name">
                <input type="text"  placeholder=" " id="elastic" class="input__name">
                <label for="elastic" class="elastic__label">Ваш номер телефона</label>
            </div>
        </div>
        <div class="reg">
            <a class="button_cash" href="#">Регистрация</a>
            <a class="button_cash-close" href="#">Закрыть</a>
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
       <a href="<?php echo BASE_URL . 'rab_shtab.php'?>"><img src="./assets/style/img/baners/branch/Rab_shtab.jpeg" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал Рабочего Штаба</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
            <a href="<?php echo BASE_URL . 'sverdlova.php'?>"><img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал ул. Свердлова</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'lermontova.php'?>"><img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал ул. Лермонтова</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'novo-lenino.php'?>"><img src="./assets/style/img/baners/branch/Bratsk.jpg" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал Ново-Ленино</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'solnechniy.php'?>"><img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал мкр. Солнечный</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'novo-lenino.php'?>"><img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал Ново-Ленино</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
        <div class="branch">
        <a href="<?php echo BASE_URL . 'lermontova.php'?>"><img src="./assets/style/img/baners/branch/Bratsk.jpg" class="branch__img">
            <div class="branch_elem">
                <h6>Филиал в Братске</h6>
                <p>пн–пт 8:00–20:00<br>
                сб–вс 9:00–15:00</p>
            </div></a>
            <div class="branch__button">
                <div class="button">Записаться</div>
            </div>
        </div>
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
</html>

<script src="./assets/js/index.js"></script>
<script src="./assets/js/header.js"></script>