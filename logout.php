<?php


session_start();


// empy array that resets all sessions
$_SESSION = [];


// sestroy the session
session_destroy();


// sends the user back to the home 

header("Location: index.php");


exit();
?>
