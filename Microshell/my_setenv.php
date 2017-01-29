<?php
// my_setenv.php for my_setenv.php in /home/tang/Microshell/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Sat Oct 15 03:17:58 2016 TANG gustin
// Last update Sat Oct 15 07:11:19 2016 TANG gustin
//
?>
<?php

function	my_setenv($command)
{
  global $env;

  if (isset($command[2]) == TRUE)
    {
      if (isset($env[$command[1]]) == FALSE)
	$env[$command[1]] = $command[2];
      else
	$env[$command[1]] = $command[2];
    }
  else
    echo "setenv : needs 2 arguments\n";
}