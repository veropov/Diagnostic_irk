<?php include "./app/include/header.php";
require './app/database/db.php';
?>

<body>
<div class="conteiner__rab__shtab">
    <div class="shtab">
        <div class="h__shtab"><p>Клиника ЦМД на ул. Лермонтова</p></div>
        <div class="p__shtab">
            <p>Адрес:  г. Иркутск, ул. Лермонтова, 267/2 (остановка «Школа №19»)</p>
            <p>Почтовый адрес: 664011, г. Иркутск, а/я 121</p>
            <p>Телефон: +7 (3952) 480-199</p>
            <p>Электронная почта <a class="mail" href="#">info@igcmd.ru</a></p>
            <p>Режим работы: <br><b>пн–пт</b> 8:00–20:00 <br> <b>сб–вс</b> 9:00–15:00</p>
        </div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A389149e235c3cfe919e311e5d91fb9f94a78a56cc07f31dd26dcc8094125e7de&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true;"></script>
    <?php include './all_doctor.php' ?>
    </div>
</body>


<script src="./assets/js/header.js"></script>
<script src="./assets/js/centr.js"></script>