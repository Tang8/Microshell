<?php
// my_cd.php for my_cd.php in /home/tang/Colle/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 05:00:37 2016 TANG gustin
// Last update Sat Oct 15 07:24:54 2016 TANG gustin
//
?>
<?php

function	my_cd($command, $i)
{
  global $env;

  $e = $i + 1;
  if (isset($command[$e]) == FALSE)
    {
      chdir('/../');
      $tmp = $env["OLDPWD"];
      $env["OLDPWD"] = $env["PWD"];
      $env["PWD"] = $tmp;
    }
  else if ($command[$e] == '-')
    {
      chdir($env["OLDPWD"]);
      $tmp = $env["OLDPWD"];
      $env["OLDPWD"] = $env["PWD"];
      $env["PWD"] = $tmp;
    }
  else if (file_exists($command[$e]) == FALSE)
    echo "cd: $command[$e]: No such file or directory\n";
  else if (is_dir($command[$e]) == FALSE)
    echo "cd: $command[$e]: Not a directory\n";
  else if (is_readable($command[$e]) == FALSE)
    echo "cd: $command[$e]: Permission denied\n";
  else
    {
      chdir($command[$e]);
      $tmp = $env["OLDPWD"];
      $env["OLDPWD"] = $env["PWD"];
      $env["PWD"] = $tmp;
    }
}