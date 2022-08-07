<?php include './app/include/header.php';
require './app/database/db.php';
?>

<body>

<div class="conteiner__expert">
    <div class="shtab__doctor">
            <div class="h__shtab"><p>Выберите врача из списка</p>
            </div>
            <div class="branch__filter">
                <div class="branch__doctor__filter">Терапевт</div>
                <div class="branch__doctor__filter">Аллерголог</div>
                <div class="branch__doctor__filter">Кардиолог</div>
                <div class="branch__doctor__filter">Ортопед</div>
                <div class="branch__doctor__filter">Педиатр</div>
                <div class="branch__doctor__filter">Хирург</div>
                <div class="branch__doctor__filter">Невролог</div>
                <div class="branch__doctor__filter">Гепатолог</div>
            </div>
            <div class="background__shtab">
            <?php foreach ($infoDoc as $value): ?>
                <div class="img__shtab">
                    <div class="button__shtab">
                        <div class="button__doc__shtab">Узнать стоимость</div>
                    </div>
                    <div class="name__doc">
                        <p><?php echo $value['name']?></p>
                    </div>
                </div>
            <?php endforeach ?>   
        </div>
    </div> 
</div>

</body>

<script src="./assets/js/header.js"></script>
<script src="./assets/js/centr.js"></script>