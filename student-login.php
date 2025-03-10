<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST METHOD"]=="POST"){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);
    $password = trim($_POST['password']);

    $sql = "SELECT id, name, email, course, password FROM students WHERE password=?";
    $stm = $conn->prepare($sql);
    $stm->bind_param("s", $name);
    $stm->execute();
    $stm->store_result();
    $stm->bind_result($id, $name, $hashed_password, $email, $course);

    if($stm->fetch() && password_verify($password, $hashed_password)){
        $_SESSION['user_id'] = $id;
        $_SESSION['name'] = $name;
        header("Location: student-profile.php");
        exit();
    } else {
        echo "Wrong credentials..!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Student Login</h2>
        <form method="POST">
            <input type="text" name="name" class="input-field" placeholder="Name" required>
            <input type="email" name="email" class="input-field" placeholder="Email" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <input type="text" name="course" class="input-field" placeholder="Course" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="error">
            <!-- Error messages will appear here -->
        </div>
    </div>

</body>
</html>