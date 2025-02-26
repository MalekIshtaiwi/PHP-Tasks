<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    setcookie("username", $username, time() + (30 * 24 * 60 * 60), "/");
    echo "hello $username";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Remember Username</title>
</head>
<body>
    <h2>Login Form</h2>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" 
               value="<?php echo isset($_COOKIE["username"]) ? $_COOKIE["username"] : ''; ?>" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
