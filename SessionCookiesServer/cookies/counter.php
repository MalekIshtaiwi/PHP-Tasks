<?php
// Check if the visit count cookie is set
if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'] + 1;
} else {
    $visitCount = 1;
}

// Set/update the cookie with the new visit count
setcookie('visit_count', $visitCount, time() + (86400 * 30), "/"); // Cookie lasts 30 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    <h2>Welcome to the Visit Counter Page</h2>
    <p>You have visited this page <?php echo $visitCount ?> times.</p>
</body>
</html>
