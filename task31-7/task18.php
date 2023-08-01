<?php
$str1 = "2,543.12";
echo $str1;
echo "<br>";

$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."<br>";
  }
?>