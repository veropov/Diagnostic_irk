<?php include "./app/include/header.php" ?>

<body style="background: rgb(133, 178, 204);">
<!--ЛЕГКАЯ РЕГИСТРАЦИЯ-->
<div class="conteiner5">
    <div class="easy__reg">
        <div class="all__reg">
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
            </div>
        </div>
        <div class="all__img">
            <img src="./assets/style/img/baners/branch/Rab_shtab.webp" class="branch__img">
            <img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
            <img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <img src="./assets/style/img/baners/branch/Bratsk.jpg" class="branch__img">
            <img src="./assets/style/img/baners/branch/Sverdlova.webp" class="branch__img">
            <img src="./assets/style/img/baners/branch/Rab_shtab.webp" class="branch__img">
            <img src="./assets/style/img/baners/branch/Lermontova.webp" class="branch__img">
        </div>
    </div>
</div>

</body>
<script src="./assets/js/fast-reg.js"></script>
<script src="./assets/js/header.js"></script>