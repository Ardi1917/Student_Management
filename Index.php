<?php
include 'config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .login-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: crimson;
        }

        .title {
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-box">
            <h2 class="title">Welcome Comrade Where Are You Going?</h2>
            <button class="btn" onclick="window.location.href='teacher-login.php'">Teachers Login</button>
            <button class="btn" onclick="window.location.href='student-login.php'">Students Login</button>
        </div>
    </div>

</body>
</html