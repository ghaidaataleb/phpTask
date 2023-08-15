var email = document.getElementsByName('email')[0].value;
var password = document.getElementsByName('password')[0].value;

// Send an API request to validate the login credentials
fetch('/api/login', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        email: email,
        password: password
    })
})
.then(function(response) {
    if (response.ok) {
        // Validation successful, redirect to welcome.php
        window.location.href = 'welcome.html';
    } else {
        // Validation failed, display error message
        var errorElement = document.getElementById('loginError');
        errorElement.innerText = 'Invalid email or password. Please try again.';
    }
})
.catch(function(error) {
    console.error(error);
});

var email = document.getElementsByName('email')[0].value;
var fullName = document.getElementsByName('fullName')[0].value;
var password = document.getElementsByName('password')[0].value;
var mobile = document.getElementsByName('mobile')[0].value;
var userType = document.getElementsByName('userType')[0].value;
var dob = document.getElementsByName('dob')[0].value;

// Send an API request to validate the registration data
fetch('/api/register', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        email: email,
        fullName: fullName,
        password: password,
        mobile: mobile,
        userType: userType,
        dob: dob
    })
})
.then(function(response) {
    if (response.ok) {
        // Validation successful, redirect to welcome.html
        window.location.href = 'welcome.html';
    } else {
        // Validation failed, display error message
        var errorElement = document.getElementById('registrationError');
        errorElement.innerText = 'Error registering user. Please try again.';
    }
})
.catch(function(error) {
    console.error(error);
});