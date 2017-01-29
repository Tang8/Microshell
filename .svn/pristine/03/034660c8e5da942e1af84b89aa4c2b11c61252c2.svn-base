<?php
// my_ls.php for my_ls.php in /home/tang/Colle/tang_g/Microshell
// 
// Made by TANG gustin
// Login   <tang_g@etna-alternance.net>
// 
// Started on  Thu Oct 13 04:04:25 2016 TANG gustin
// Last update Thu Oct 13 17:38:18 2016 TANG gustin
//
?>
<?php

function	my_ls($command, $i)
{
  $e = $i + 1;
  $a = 0;

  if (isset($command[$e]) != FALSE)
    {
      if (is_readable($command[$e]) == FALSE)
	{
	  echo "ls: $command[$e]: Permission denied\n";
	}
      if ($dir = scandir($command[$e]))
	{
	  while (isset($dir[$a]) != FALSE)
	    {
	      if ($dir[$a][0] != '.')
		{
		  if (is_dir($dir[$a]) == TRUE)
		    echo "$dir[$a]/\n";
		  else if (is_link($dir[$a]) == TRUE)
		    echo "$dir[$a]@\n";
		  else if (is_executable($dir[$a]) == TRUE)
		    echo "$dir[$a]*\n";
		  else
		    echo "$dir[$a]\n";
		}
	      $a = $a + 1;
	    }
	}
    }
  
  else if ($dir = scandir(getcwd()))
    {
      while (isset($dir[$a]) !== FALSE)
	{
	  if ($dir[$a][0] != '.')
	    {
	      if (is_dir($dir[$a]) == TRUE)
		echo "$dir[$a]/\n";
	      else if (is_link($dir[$a]) == TRUE)
		echo "$dir[$a]@\n";
	      else if (is_executable($dir[$a]) == TRUE)
		echo "$dir[$a]*\n";
	      else
		echo "$dir[$a]\n";
	    }
	  $a = $a + 1;
	}
    }
  else
    echo "ls: $command[$e]: Not a directory\n";
}

?>