<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM Employees WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
</head>
<body>
    <h1>Delete Employee</h1>
    <?php if (isset($_GET['id'])): ?>
    <p>Are you sure you want to delete this employee?</p>
    <form method="POST">
        <button type="submit">Yes</button>
        <a href="index.php">No, Cancel</a>
    </form>
    <?php else: ?>
    <p>Invalid request.</p>
    <?php endif; ?>
</body>
</html>
