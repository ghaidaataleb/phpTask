<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo $my_str;
echo "<br>";
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."<br>";
?>