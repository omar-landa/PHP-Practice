<?php

/* This will let you to quickly view the contents
 of the current directory on Windows OS, Linux, Unix, and 
 Mac OS.  */


$cmd = "dir"; //For Windows OS

// $cmd = "ls";      //For Linux, Unix, and Mac OS

exec(escapeshellcmd($cmd), $output, $status);

if($status) echo "Exec command failed";
else
{
    echo "<pre>";
    foreach($output as $line) echo htmlspecialchars("$line\n");
    echo "</pre>";
}

?>
