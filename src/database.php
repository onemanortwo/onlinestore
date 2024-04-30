

<?php

//connection to thje data based with credentals. 
 $host = 'localhost';

 $dbname = 'onlinestore';

 $username = 'root';

 $password = 'root';


 //user to encapcluate code thatmight through an exception

 // PDO is a object that opens and connection to the database https://www.php.net/manual/en/pdo.setattribute.php

 try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //if there is an exception 

} catch (PDOException $e) {
    die("Cannnot coonect: " . $e->getMessage());
}