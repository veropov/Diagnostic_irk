<?php

require 'connect.php';


// //Запрос к базе данных одной таблицы
// function selectAll($table, $params = []) { //
//     global $pdo;
//     global $params;
//     $sql = "SELECT * FROM $table"; 

//     if (!empty($params)) {
//         $i = 0;
//         foreach ($params as $key => $value) {
//             if ($i === 0) {
//                 $sql = $sql . " WHERE $key = '$value'";
//             } else {
//                 $sql = $sql . " AND $key = '$value'";
//             }
//             $i++;
//         }
//     }

//     $query = $pdo->prepare($sql); 
//     $query->execute(); 

//     return $query->fetchAll();
//     checkErr($query);
// }

// $params = ['username' => 'Oleg Popov'];

// //Поиск ошибок
// function checkErr($query) { 
//     $errInfo = $query->errorInfo(); 

//     if ($errInfo[0] !== PDO::ERR_NONE) { 
//         echo $errInfo[2];
//         exit();
//     }
// }

// //Функция удобного вывода
// function tt($value) { 
//     echo '<pre>';
//     print_r($value);
//     echo '</pre>';
// }

// $date = selectAll('`users`');
// tt($date, $params);



$sql = 'SELECT * FROM `users`';
$query = $pdo->prepare($sql);
$query->execute();

$info = $query->fetchAll();


$sqlDoc = "SELECT * FROM `doctors`";
$queryDoc = $pdo->prepare($sqlDoc);
$queryDoc->execute();

$infoDoc = $queryDoc->fetchAll();

