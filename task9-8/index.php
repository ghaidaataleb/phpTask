<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['soft_delete'])) {
        $delete_id = $_POST['soft_delete'];
        $query = "UPDATE Employees SET IsDeleted = 1 WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$delete_id]);
    }
}

$query = "SELECT * FROM Employees WHERE IsDeleted = 0"; // Exclude soft-deleted records
$stmt = $db->prepare($query);
$stmt->execute();
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            border: 2px solid #000;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .soft-delete-button {
            color: red;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Employee Management</h1>
    <a href="create.php"><button>Add Employee</button></a>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?php echo $employee['Name']; ?></td>
            <td><?php echo $employee['Address']; ?></td>
            <td><?php echo $employee['Salary']; ?></td>
            <td>
                <a href="read.php?id=<?php echo $employee['id']; ?>">View</a> |
                <a href="update.php?id=<?php echo $employee['id']; ?>">Update</a> |
                <form method="post" style="display: inline-block;">
                    <input type="hidden" name="soft_delete" value="<?php echo $employee['id']; ?>">
                    <button type="submit" class="soft-delete-button">Soft Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
