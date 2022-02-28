<?php
//COPYING FILES WITH PHP:
copy('testfile.text', 'testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";

echo "<br>" . "<br>";






//MOVING A FILE WITH PHP:
if(!rename('testfile2.txt', 'testfile2.new'))
    echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new";

echo "<br>" . "<br>";






//DELETING A FILE WITH PHP:
if(!unlink('testfile2.new')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";

?>
