<?php
// Perform registration process
// Use MySQL or any database connection here

// Assuming you have a database connection established earlier
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = ' simplified-login';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$fullName = $_POST['fullName'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$userType = $_POST['userType'];
$dob = $_POST['dob'];

// Validate and sanitize user input
// Implement your validation logic here
// For example, check if email is valid, password is strong, etc.

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO sys-users (email, full_name, password, mobile, user_type, dob) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $email, $fullName, $hashedPassword, $mobile, $userType, $dob);

if ($stmt->execute()) {
    // Redirect to welcome.html after successful registration
    header("Location: welcome.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
