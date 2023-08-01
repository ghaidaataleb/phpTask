<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST"> 
        <label for="name">Enter Your Name: </label>
        <input type="text" name="name">    
     </form>

        <?php         
            $name=$_POST["name"];         
            echo "<h1> Hello $name </h1>";     
        ?>
</body>
</html>