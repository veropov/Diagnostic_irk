<? include("path.php") ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
<link rel="stylesheet" href="assets/css/blocks/main.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Диагностический Центр</title>

</head>      
<body>
<div class="background" id="background">
    <div class="back"></div>
</div>

<!--ХЭДЕР-->
<div class="cent">

<!-- ВЕРХНИЙ ХЭДЕР-->  
<header class="conteiner1">
    <div class="but">
        <a href="<?php echo BASE_URL?>"><img src="assets/style/img/logo.png" width="150px"></a>
        <a class="button0" href="#">+7(3952)480-199</a>
        <a class="button1" href="#">Скорая помощь</a>
        <a class="button2" href="#">Вызов врача на дом</a>
        <a class="button3" href="#">Запись онлайн</a>
        <a class="svg_header1" href="#" id="svg_city" data-toggle="modal" data-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" class="bi-geo-alt-fill" 
                 viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg></a>
        <a class="svg_header2" href="#" id="svg_reg">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" class="bi-person-fill" 
viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg></a>
        <a class="svg_header3" href="#" id="svg_menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" class="bi-bi-list"                  
 viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg></a>
    </div>
</header> 
    
<!-- НИЖНИЙ ХЭДЕР-->    
<div class="conteiner2">
    <ul>
        <li>
            <a class="menu" href="#">О Центре<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg></a>
            <ul>
                <li><a class="text" href="<?php echo BASE_URL . 'centr.php'?>">О Центре</a></li>
                <li><a class="text" href="<?php echo BASE_URL . 'rab_shtab.php'?>">ООО "Клиника ЦМД" на ул.Рабочего Штаба</a></li>
                <li><a class="text" href="<?php echo BASE_URL . 'novo-lenino.php'?>">Филиал ООО "Клиника ЦМД" в Ленинском районе (Ново-Ленино)</a></li>
                <li><a class="text" href="<?php echo BASE_URL . 'sverdlova.php'?>">Филиал ООО "Клиника ЦМД" на ул. Свердлова</a></li>
                <li><a class="text" href="<?php echo BASE_URL . 'lermontova.php'?>">Филиал ООО "Клиника ЦМД" на ул. Лермонтова</a></li>
                <li><a class="text" href="<?php echo BASE_URL . 'solnechniy.php'?>">Филиал ООО "Клиника ЦМД" в мкр. Солнечный</a></li>
                <li><a class="text" href="#">Вакансии</a></li>
            </ul>
        </li>
        <li><a class="menu" href="#">Услуги и цены</a></li>
        <li><a class="menu" href="#">Пациенту<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
          </svg></a>
            <ul>
        <li><a class="text" href="#">Добровольное медицинское страхование</a></li>
        <li><a class="text" href="#">Положение об обработке персональных данных пациента</a></li>
        <li><a class="text" href="#">Контролирующие органы</a></li>
        <li><a class="text" href="#">Правила госпитализации</a></li>
            </ul>
        </li>
        <li><a class="menu" href="#">Врачу<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
          </svg>
            </a>
                <ul>
                    <li><a class="text" href="#">Электронный кабинет ЛПУ</a></li>
                    <li><a class="text" href="#">Методические пособия для врачей</a></li>
                    <li><a class="text" href="#">Порядок выдачи расходных материалов</a></li>
                </ul>
        </li>
        <li><a class="menu" href="<?php echo BASE_URL . 'expert.php'?>">Специалисты</a>
        </li>
        <li><a class="menu" href="#">Центр реабилитации</a>
        </li>
        <li><a class="menu" href="#">Контакты</a></li>
    </ul>
</div>
</div>

<!--МОДАЛ-ОКНО ВЫБОРА ГОРОДА-->
<div class="conteiner__modals">
    <div class="modals" id="modal_city">

        <div class="modal__header">
            <div class="modal__text">Выберите город</div>
        </div>

        <div class="content">

            <input type="radio" name="card" class="radio-select" id="card-1">
            <label for="card-1" class="modal__content__left">
                <div class="city__svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#3F3F3F" class="bi-bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                      </svg>
                </div>
                <div class="city">
                    <h6>Иркутск</h6>
                </div>
            </label>

            <input type="radio" name="card" class="radio-select" id="card-2">
            <label for="card-2" class="modal__content__right">
                <div class="city__svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#3F3F3F" class="bi-bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                    </svg>
                </div>

                <div class="city">
                    <h6>Братск</h6>
                </div>
            </label>
        </div>

        <div class="modal__footer">
            <a class="button_modal_reg" id="modal_open" href="#">Подтвердить</a>
            <a class="button_modal_esc" id="modal_esc" href="#">Закрыть</a>
        </div>

    </div>
</div>

<!--МОДАЛ-ОКНО РЕГИСТРАЦИИ-->
<div class="conteiner__modals-2">
    <div class="modals-2" id="modal_reg">
        <div class="reg__left">

        </div>

        <div class="reg__right" href="#">
            <div class="content__open">
                <input type="radio" name="card__reg" class="radio-reg" id="card-open" value="10" checked>
                <label for="card-open" class="content_text-1">АВТОРИЗАЦИЯ</label>
                <div class="content__open__form" id="modal__open">

                    <div class="open__group">
                        <input class="form__input" id="mail" placeholder=" ">
                        <label class="form__label">Email</label>
                    </div>

                    <div class="open__group">
                        <input class="form__input" id="password" type="password" placeholder=" ">
                        <label class="form__label">Пароль</label>
                    </div>

                    <div class="button__enter" id="modal_open-2">Войти</div>
                </div>
            </div>

            <div class="content__reg">
                <input type="radio" name="card__reg" class="radio-reg" id="card-reg" value="20">
                <label for="card-reg" class="content_text-2">РЕГИСТРАЦИЯ</label>
                <div>
                    <div class="content__reg__form" id="modal__reg">
                        <div class="modal__reg">

                            <div class="open__group">
                                <input class="form__input" id="mail__reg" placeholder=" ">
                                <label class="form__label">Email</label>
                            </div>
        
                            <div class="open__group">
                                <input class="form__input" id="password__reg" type="password" placeholder=" ">
                                <label class="form__label">Пароль</label>
                            </div>

                            <div class="open__group">
                                <input class="form__input" id="password__return" type="password" placeholder=" ">
                                <label class="form__label">Подтведите пароль</label>
                            </div>
        
                        </div>
                        <div class="button__reg" id="modal_esc-2">Создать аккаунт</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

