<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
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

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $signup_success = "Signup successful! You can now login.";
    } else {
        $signup_error = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="signup.php" method="post">
                <h2>Sign Up</h2>
                <?php
                if (isset($signup_success)) {
                    echo "<p class='success'>$signup_success</p>";
                } elseif (isset($signup_error)) {
                    echo "<p class='error'>$signup_error</p>";
                }
                ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
