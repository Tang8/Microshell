<?php
// my_env.php for my_env.php in /home/tang/Microshell/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 10:01:50 2016 TANG gustin
// Last update Sat Oct 15 07:17:24 2016 TANG gustin
//
?>
<?php

function	my_env()
{
  global $env;

  $env['PWD'] = getcwd();
  unset($env['OLDPWD']);
  unset($env['argv']);
  unset($env['argc']);
  $tab = $env;
  while (list($key, $value) = each($tab))
    {
      echo $key . "=" . $value . "\n";
    }
}
?>