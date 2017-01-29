<?php
// microshell.php for microshell.php in /home/tang/Colle/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 02:28:22 2016 TANG gustin
// Last update Sat Oct 15 07:10:09 2016 TANG gustin
//
?>
						WELCOME TO MICROSHELL
<?php

require ("my_echo.php");
require ("my_ls.php");
require ("my_pwd.php");
require ("my_cd.php");
require ("my_cat.php");
require ("my_env.php");
require ("condition.php");
require ("my_setenv.php");
require ("my_unsetenv.php");

function	start_game($command, $i, $flags, $func)
{
  global $env;
  $env = $_SERVER;
  while ($command[$i] != "exit")
    {
      echo realpath(getcwd()) . "$> ";
      $command = explode(' ', readline());
      $n = 0;

      while ($command[$i] == '')
	{
	  $i = $i + 1;
	}
      while (($flags[$n] != $command[$i]) && ($flags[$n] != NULL))
	{
	  $n = $n + 1;
	}
      $func[$n]($command, $i);
      $n = 0;
      $i = 0;
    }
}

function	main()
{
  $command = "pokemon";
  $i = 0;

  $flags = array("echo", "ls", "pwd", "cd", "cat", "env", "exit", "setenv", "unsetenv", NULL);

  $func = array("my_echo",
		"my_ls",
		"my_pwd",
		"my_cd",
		"my_cat",
		"my_env",
		"my_exit",
		"my_setenv",
		"my_unsetenv",
		"my_null",
		);
  start_game($command, $i, $flags, $func);
  return (0);
}

main();
?>