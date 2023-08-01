<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo $my_string;
echo "<br>";
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."<br>";
?>