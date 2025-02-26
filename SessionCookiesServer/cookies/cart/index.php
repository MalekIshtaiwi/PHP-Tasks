<?php
// Handle adding items to the cart
if (isset($_POST['product'])) {
    $product = $_POST['product'];

    // Retrieve the current cart from the cookie
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [] ;

    // Add new item to the cart array
    $cart[] = $product;

    // Save updated cart back into the cookie (JSON format)
    setcookie('cart', json_encode($cart), time() + (30 * 24 * 60 * 60), "/"); // Cookie lasts 30 days

    // Redirect to prevent form resubmission
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Products</title>
</head>
<body>
    <h2>Product List</h2>

    <!-- Product Form -->
    <form method="POST">
        <button type="submit" name="product" value="Laptop">Add Laptop to Cart</button>
        <button type="submit" name="product" value="Phone">Add Phone to Cart</button>
        <button type="submit" name="product" value="Headphones">Add Headphones to Cart</button>
        <button type="submit" name="product" value="Smartwatch">Add Smartwatch to Cart</button>
    </form>

    <br>
    <a href="cart.php">View Cart</a> <!-- Link to Cart Page -->
</body>
</html>
