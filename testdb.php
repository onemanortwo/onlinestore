<?php
// Databse test config
    $host = 'localhost';

    $dbname = 'onlinestore'; 

    $username = 'root'; 

    $password = 'wrongpass'; 

try {
            
            $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
            
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            
            echo " connection works";
            } catch (PDOException $e) {
            
            echo " Connection doest work " . $e->getMessage();
        }   
        ?>
