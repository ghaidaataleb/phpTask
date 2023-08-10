<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $address, $salary]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 50%;
            margin: auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Create Employee</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <label>Salary:</label>
        <input type="number" name="salary" step="0.01" required>
        <button type="submit">Add Employee</button>
    </form>
    <br>
    <button><a href="index.php">Back to List</a></button>
</body>
</html>
