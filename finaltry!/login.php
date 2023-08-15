<?php
// Perform login authentication
// Use MySQL or any database connection here

$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simplified-login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the query and bind parameters
$stmt = $conn->prepare("SELECT * FROM sys-users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);

// Execute the query
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Check if authentication is successful
if ($result->num_rows > 0) {
    // Redirect to welcome.php
    header("Location: welcome.html");
    exit();
} else {
    // Redirect back to index.html with error message
    header("Location: index.html?error=Invalid email or password");
    exit();
}

// Close the database connection
$stmt->close();
$conn->close();
?>