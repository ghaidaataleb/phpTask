<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<?php
// Set cookies
$cookie_name = 'user';
$cookie_value = 'John Doe';

$expiry_time = time() + (86400 * 30); // 30 days from now
$cookie_path = '/';
$domain = ''; // Set your domain if needed
$secure = false; // Set to true if using HTTPS
$httponly = true; // This cookie can't be accessed by JavaScript

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

echo "Cookie '$cookie_name' is set with value '$cookie_value'.<br>";

// Retrieve cookies
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' value is: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie '$cookie_name' is not set.<br>";
}

// Delete cookies
setcookie($cookie_name, '', time() - 3600, $cookie_path, $domain, $secure, $httponly);
echo "Cookie '$cookie_name' is deleted.";
?>

</body>
</html>
