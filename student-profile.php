<?php

include "config.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .form-container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
    </style>
</head>
<body>

    <h2 style="text-align: center;">Add Student Grades</h2>

    <!-- Form to collect student info -->
    <div class="form-container">
        <form action="submit_grades.php" method="POST">
            <input type="text" name="student_name" class="input-field" placeholder="Student Name" required>
            <input type="text" name="course" class="input-field" placeholder="Course" required>
            <input type="text" name="grade" class="input-field" placeholder="Grade" required>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <h2 style="text-align: center;">Student Grades</h2>

    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
    </table>

</body>
</html>