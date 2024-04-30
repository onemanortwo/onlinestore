
<!-- This is a test -->

//<?php


$host = 'localhost';
$dbname = 'onlinestore';
$username = 'root';
$password = 'root';

try {



    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {


    die("coonection failed: " . $e->getMessage());
}
//