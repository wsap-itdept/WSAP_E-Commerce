<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Database connection
    $db_host = "localhost:3307";
    $db_user = "root";
    $db_pass = "";
    $db_name = "user_authentication";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Successful login
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to dashboard
    } else {
        $login_error = "Invalid login credentials";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
   
    <div class="container">
        <div class="form-container">
            <form action="login.php" method="post">
                <img src="img/logo.jpg" alt="Italian Trulli">
                <h2>Login</h2>
                <?php if (isset($login_error)) { echo "<p class='error'>$login_error</p>"; } ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
        <footer class="website-footer">
    <div class="footer-content">
        <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>&copy; 2023 Wedding Suppliers Association of the Philippines Inc. All rights reserved.</p>
    </div>
</footer>
    </div>
     <div class="Side_Img">
    <img src="img/wel.jpg" alt="Italian Trulli">
    </div>
</body>
</html>
