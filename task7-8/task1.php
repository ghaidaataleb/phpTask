<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    echo "<h2>Data was sent using GET method</h2>";
    echo "Email: " . $_GET["email"] . "<br>";
    echo "Password: " . $_GET["password"] . "<br>";
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Data was sent using POST method</h2>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";
} else {
    echo "<h2>Invalid request method</h2>";
}
?>

</body>
</html>

