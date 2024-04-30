

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added to Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>



    <h2><?php echo isset($_POST['product_id']) ? "Product added to your shopping cart!" : "Error: Product ID not provided."; ?></h2>
    <p><a href="products.php">Click here to return to shopping</a></p>

   

    <?php include 'templates/footer.php'; ?>
</body>
</html>
