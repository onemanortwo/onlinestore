


<?php
//final version of database with correct colums - Previous deleted



//connection to the data based with credentals. 

 $host = 'localhost';

 $dbname = 'onlinestore';

 $username = 'root';

 $password = 'root';


 //user to encapcluate code thatmight through an exception

 // PDO is a object that opens and connection to the database https://www.php.net/manual/en/pdo.setattribute.php

 try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //if there is an error 

} catch (PDOException $e) {
    die("Cannnot coonect: " . $e->getMessage());
}