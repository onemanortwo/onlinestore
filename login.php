<?php


// loads the files to check/start sessions and the connectied to the databsae
require_once 'src/sessions.php';
require_once 'src/database.php';

//checks if user is already logged in and fi so, re-directs to index page

if (isset($_SESSION['user_id'])) {

    header("Location: products.php");
    exit();
}

//  variables

$username = $password = '';
$error_message = '';

// handle form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // retrieve form data

    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate form data 

    if (empty($username) || empty($password)) {
        $error_message = "Please enter username &  password.";
    } else {
        try {
            // SQL statement to retrieve user data from the database
            $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
            
            // bind parameters
            $stmt->bindParam(':username', $username);
            
            // run  statement
            $stmt->execute();
            
            // get  result
            $user = $stmt->fetch();
            
            // check password
            if ($user && password_verify($password, $user['password'])) {

                // set session variables
                $_SESSION['user_id'] = $user['id'];

                // Go home page after successful login

                header("Location: index.php");
                exit();
            } else {
                $error_message = "Wrong username or password.";
            }
        } catch (PDOException $e) {

            //  error message if login fails
            $error_message = "Login failed: " . $e->getMessage();
        }
    }
}

include 'templates/header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Login</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>

        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required><br>

        <label for="password">Password:</label><br>

        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php


    // Display error message if login fails
    if (!empty($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
    ?>
</body>
</html>
