<?php
// Retrieve cart from cookie
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

// Handle clearing the cart
if (isset($_POST['clear_cart'])) {
    setcookie('cart', '', time() + 10, "/"); // Delete the cookie
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Your Shopping Cart</h2>

    <?php if (!empty($cart)): ?>
        <ul>
            <?php foreach ($cart as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

    <br>
    <a href="index.php">Back to Products</a>

    <form method="POST">
        <button type="submit" name="clear_cart">Clear Cart</button>
    </form>
</body>
</html>
