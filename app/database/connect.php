<?php

$host = 'localhost';
$user = 'root';
$password = '121257Eropov';
$db_name = 'diagnostic';
$charset = 'utf8';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=$charset", $user, $password, $options);