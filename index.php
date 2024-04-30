<?php




require_once 'src/sessions.php';  // activates the sessops php file whihc keeps track of user sessions


// Page title
$page_title = "Welcome to Online Store";

// puts the header detail in the html page#

include 'templates/header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the online store</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/home.png" type="image/png">
</head>
<body>
<h1>Welcome to the Online Boating Store</h1>
<img src="images/home.png" alt="Home Image">
</body>
</html>


<p>Please choose your special prodcut!</p>

<?php

// display the footer
include 'templates/footer.php';
?>

