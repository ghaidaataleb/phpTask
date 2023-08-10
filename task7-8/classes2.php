<?php
class Greeting {
    public function introduce($name) {
        echo "Hello All, I am $name";
    }
}

// Create an instance of the Greeting class
$greeting = new Greeting();

// Call the introduce method with a name argument
$greeting->introduce("Scott");
?>
