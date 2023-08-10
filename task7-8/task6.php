<!DOCTYPE html>
<html>
<head>
    <title>Requested Time</title>
</head>
<body>

<h2>Requested Time</h2>

<p>This page was requested at: <span id="requestedTime"></span></p>

<script>
    // Get the current date and time
    var currentDate = new Date();

    // Format the date and time
    var formattedTime = currentDate.toLocaleString();

    // Display the formatted time on the page
    document.getElementById('requestedTime').textContent = formattedTime;
</script>

</body>
</html>
