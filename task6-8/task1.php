<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 3;
  else
	  return 0;
}
echo check_palindrome('madam')."<br>";
?>
