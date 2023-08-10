<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = "UPDATE Employees SET Name = ?, Address = ?, Salary = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $address, $salary, $id]);

    header("Location: read.php?id=$id");
} elseif (isset($_GET['id'])) {
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
    <title>Update Employee</title>
</head>
<body>
    <?php if ($employee): ?>
    <h1>Update Employee</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $employee['Name']; ?>" required><br>
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $employee['Address']; ?>" required><br>
        <label>Salary:</label>
        <input type="number" name="salary" step="0.01" value="<?php echo $employee['Salary']; ?>" required><br>
        <button type="submit">Update Employee</button>
    </form>
    <a href="read.php?id=<?php echo $id; ?>">Cancel</a>
    <?php else: ?>
    <p>Employee not found.</p>
    <?php endif; ?>
</body>
</html>
