<?php

// starts the database connection

require_once 'src/database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];

    // this creates a hashed password for storage in the db
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // statment for preping the data into the database

                $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
                
        // binds the username para to the variable of same name
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $hashed_password);
                
        //creates/runs the statment 
        $stmt->execute();
        
        //after the succesful regristration, this redirects back to the login page
        
        header("Location: login.php");
        exit();
    } catch (PDOException $e) {

        // error msaage in case of failed register using the erro_message 

        $error_message = "Registration failed: " . $e->getMessage();
    }
  
  }
include 'templates/header.php';
?>

<!-- HTML for form-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>


<body>
    <h2>User Registration</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="username">Username:</label><br>

            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label><br>

            <input type="password" id="password" name="password" required><br><br>

     <input type="submit" value="Register">
    </form>
    
    <?php
   
   
    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
// display the footer
include 'templates/footer.php';

    ?>
</body>
</html>
