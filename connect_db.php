<?php

$user="root";
$password="";
$dsn="mysql:host=localhost;dbname=sport;port=3307";

try{
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $ex) {
    $info=$ex->getMessage();
    header("Location: error.php/?err=$info");
    die();
}