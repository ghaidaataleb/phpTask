<!DOCTYPE html>
<html>
<head>
    <title>Website Counter</title>
</head>
<body>

<h2>Website Counter</h2>

<p>This page has been refreshed <span id="counter">0</span> times.</p>

<script>
    // Get the counter element
    var counterElement = document.getElementById('counter');

    // Get the current count from local storage or initialize it to 0
    var count = localStorage.getItem('refreshCount') || 0;

    // Increment the count
    count++;

    // Update the counter element and save the new count to local storage
    counterElement.textContent = count;
    localStorage.setItem('refreshCount', count);
</script>

</body>
</html>
