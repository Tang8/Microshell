<?php
// my_cat.php for my_cat.php in /home/tang/Microshell/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 08:58:51 2016 TANG gustin
// Last update Thu Oct 13 13:53:59 2016 TANG gustin
//
?>
<?php

function	condition($i, $str)
{
  $filename = $str[$i];
  $c = 1;
  if ((file_exists($filename)) == FALSE)
    {
      echo "content.php: $filename: No such file or directory\n";
      $c = 0;
    }
  else if ((is_dir($filename)) == TRUE)
    {
      echo "content.php: $filename: Is a directory\n";
      $c = 0;
    }
  else if ((is_readable($filename)) == FALSE)
    {
      echo "content.php: $filename: Cannot open file\n";
      $c = 0;
    }
  else if ((is_writable($filename)) == FALSE)
    {
      echo "content.php: $filename: Permission denied\n";
      $c = 0;
    }
  return ($c);
}

function	my_cat($command, $i)
{
  $e = $i + 1;
  $a = count($command);
  $filename = $command[$e];

  while ($e < $a)
    {
      if ((condition($e, $command)) == 1)
	{
	  $filename = "$command[$e]";
	  $handle = fopen($filename, "r");
	  $contents = fread($handle, filesize($filename));
	  echo "$contents\n";
	  fclose($handle);
	}
      $e = $e + 1;
    }
}
?>