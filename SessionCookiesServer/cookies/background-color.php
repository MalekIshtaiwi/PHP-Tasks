<?php
// Set cookie if the form is submitted
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('bg_color', $color, time() + (86400 * 30), "/"); // Cookie lasts 30 days
    header("Location: " . $_SERVER['PHP_SELF']); // Refresh page to apply color
    exit;
}

// Retrieve the stored background color from the cookie
$backgroundColor = isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : "white";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Selector</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($backgroundColor); ?>;">
    <h2>Select Your Preferred Background Color</h2>
    <form method="post">
        <select name="color">
            <option value="white" <?php echo ($backgroundColor == 'white') ? 'selected' : ''; ?>>White</option>
            <option value="lightblue" <?php echo ($backgroundColor == 'lightblue') ? 'selected' : ''; ?>>Light Blue</option>
            <option value="lightgreen" <?php echo ($backgroundColor == 'lightgreen') ? 'selected' : ''; ?>>Light Green</option>
            <option value="lightcoral" <?php echo ($backgroundColor == 'lightcoral') ? 'selected' : ''; ?>>Light Coral</option>
            <option value="lightgray" <?php echo ($backgroundColor == 'lightgray') ? 'selected' : ''; ?>>Light Gray</option>
        </select>
        <button type="submit">Save Preference</button>

    </form>
</body>
</html>
