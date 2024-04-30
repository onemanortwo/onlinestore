<?php

// activates the sessops php file whihc keeps track of user sessions

require_once 'src/sessions.php';



// products array that give s list of prodcuts.  not connected to a database and is only a sample page.

$products = [
    ['id' => 1, 'name' => 'Solar-Powered Electric Boat Conversion Kit', 'price' => 210, 'description' => ' The kit includes solar panels, electric motors, battery packs, and all necessary components for a seamless conversion process'],
    ['id' => 2, 'name' => 'Fixed VHF Radio', 'price' => 150, 'description' => 'The GX1400G makes DSC easy. With an internal 66 Channel GPS built into the front panel, there is no need to hassle with wiring the radio to a GPS for DSC. Out of the box and ready to go, DSC calling, position sharing, waypoint navigation, navigation to DSC distress calls can all be performed with just a few simple steps. '],
    ['id' => 3, 'name' => 'Deck organiser', 'price' => 70.99, 'description' => 'This product involves installing simple hooks or clips on your boats deck to neatly organize your dock lines'],
    ['id' => 4, 'name' => 'Led Round Light Bar, 4.5 inch', 'price' => 21.49, 'description' => '12V 24V 140W 14000LM Flood Light Pod Off Road Fog Driving Roof Bar Bumper for Jeep,SUV Truck, Hunters'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/styles.css">
</head>


<body>
    <?php include 'templates/header.php'; ?>

    <h2>Products</h2>

      <div class="product-list">
        <?php foreach ($products as $product): ?>

            <!-- This is a comment -->

            <div class="product">
                <h3><?php echo $product['name']; ?></h3>
                <p>Price: <?php echo number_format($product['price'], 2, ',', '.'); ?>€</p>

                <p><?php echo $product['description']; ?></p>

                <form method="POST" action="added_to_cart.php"> 
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="submit" value="Add to Cart">
                </form>

            </div>
        <?php endforeach; ?>
      </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
