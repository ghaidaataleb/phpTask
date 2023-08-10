<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM Employees WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <?php if ($employee): ?>
    <h1>Employee Details</h1>
    <p><strong>Name:</strong> <?php echo $employee['Name']; ?></p>
    <p><strong>Address:</strong> <?php echo $employee['Address']; ?></p>
    <p><strong>Salary:</strong> <?php echo $employee['Salary']; ?></p>
    <a href="index.php">Back to List</a>
    <?php else: ?>
    <p>Employee not found.</p>
    <?php endif; ?>
</body>
</html>
