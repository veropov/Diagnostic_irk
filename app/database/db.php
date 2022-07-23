<?php

require 'connect.php';


//Запрос к базе данных одной таблицы
function selectAll($table, $params = []) { //
    global $pdo;
    global $params;
    $sql = "SELECT * FROM $table"; 

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = '$value'";
            } else {
                $sql = $sql . " AND $key = '$value'";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql); 
    $query->execute(); 

    return $query->fetchAll();
    checkErr($query);
}

$params = [
    'admin' => 1,
    'password' => '1212eropov'
];

//Поиск ошибок
function checkErr($query) { 
    $errInfo = $query->errorInfo(); 

    if ($errInfo[0] !== PDO::ERR_NONE) { 
        echo $errInfo[2];
        exit();
    }
}

//Функция удобного вывода
function tt($value) { 
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$date = selectAll('`users`');
tt($date, $params);