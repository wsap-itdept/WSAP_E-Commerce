<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f2f2f2;
    }
    .login-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      width: 300px;
    }
    .footer {
      text-align: center;
      margin-top: 20px;
      padding: 10px;
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
      </form>
    </div>
    <div class="footer">
      &copy; 2023 Your Company. All rights reserved.
    </div>
  </div>
</body>
</html>