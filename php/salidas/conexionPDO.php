<?php
$dbhost = 'localhost';
$dbname = 'invent';
$dbuser = 'root';
$dbpass = '';
try {
    $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbcon-> exec("set names utf8");
} catch (PDOException $ex) {
    die($ex->getMessage());
}


