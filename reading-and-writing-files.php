<?php
//CREATING A FILE:
$fh = fopen("testfile.text", 'w') or die("Failed to create file");
/*fopen opens the file, 'w' opens the file for writing.
The 'w' will also attempt to create the file if 
it does not already exist*/

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not wite to file");
//fwrite writes to the file

fclose($fh); //closes the file
echo "File 'testfile.txt' written successfully";

echo "<br>" . "<br>";


/* Other fopen modes:
'r'  = open for reading only, returns FALSE if file doesnt exist.

'r+' = open for reading & writing, returns FALSE if doesnt exist.

'w'  = open for writing only, attempts to create file if it 
       doesn't exist already.

'w+' = opens for reading and writing, will attempt to create the
       file if it doesnt already exist.

'a'  = opens for writing only. Appends to end of file. Will attempt
       to create file if it doesnt exist.

'a+' = opens for reading and writing. Appends to end of file. Will
       attempt to create file if it doesnt exist.

*/









//READING FROM FILES:
//With fgets:
$fh = fopen("testfile.text", 'r') or
    die("File does not exist or you lack permission to open it");

$line = fgets($fh);
fclose($fh);
echo $line;
echo "<br>" . "<br>";

//With fread:
$fh = fopen("testfile.text", 'r') or
    die("File does not exist or you lack permission to open it");

$text = fread($fh, 3);
fclose($fh);
echo $text;


?>
