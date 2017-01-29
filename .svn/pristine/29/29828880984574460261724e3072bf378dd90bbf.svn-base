<?php
// my_echo.php for my_echo.php in /home/tang/Colle/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 02:39:34 2016 TANG gustin
// Last update Sat Oct 15 03:43:48 2016 TANG gustin
//
?>
<?php

function	my_echo($command, $i)
{
  if ($command > 0)
    {
      $e = $i + 1;
      while (isset($command[$e]) != FALSE)
	{
	  while ($command[$e] == '')
	    {
	      if ($command[$e] == '"')
		break;
	      $e = $e + 1;
	    }
	  $command[$e] = trim($command[$e], '"');
	  echo "$command[$e] ";
	  $e = $e + 1;
	}
    }
  else
    {
      return (0);
    }
  echo "\n";
}
?>