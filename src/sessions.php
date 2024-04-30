<?php

//this starts a session or renews a current one
 session_start();


//standalone php function to cehck if user is loggedin
function isUserLoggedIn() {
return isset($_SESSION['user_id']);
}

// this function check if user is already logged in adn rediects to login if fasle
function requireLogin() {
if (!isUserLoggedIn())
    
    {
        header('Location: login.php');
           exit();
    }
}

//this function logs out the user and destroys the session
function logout() {
session_unset();
     
    session_destroy();
     header('Location: index.php');


      exit(); // terminates the script
}
