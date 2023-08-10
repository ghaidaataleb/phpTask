<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>

<h2>Visitor Counter</h2>

<p>This website has been visited by <span id="counter">
    <?php
        $counterFile = 'counter.txt';

        // Read the current count from the counter file
        $count = (int) file_get_contents($counterFile);

        // Increment the count
        $count++;

        // Update the counter file with the new count
        file_put_contents($counterFile, $count);

        echo $count;
    ?>
    </span> visitors.</p>

</body>
</html>
