<?php

/* Using printf: 
Controls the format of the output. Lets you put formatting
characters in a string.
Must be prefaced with a % sign.*/
printf("My name is %s. I am %d years old,
 which is %x in hexidecimal.", 'Jose', 29, 29);
echo "<br>" . "<br>";




//printf can also be used for colors:
printf("<span style = 'color:#%X%X%X'>Hello</span>", 65, 127, 245);
echo "<br>" . "<br>";




/* printf can be used to be more precise with numbers too:
Using .2 before the 'f' modifier displays the 
floating point number to only 2 decimal places when
it is printed. You would use '%.2f' to print this. */
print("Without using printf, you display " . 12453/13);
echo "<br>";
printf("With printf, you display %.2f", 12453/13);
echo "<br>" . "<br>";




/* You can also pad in front and behind numbers with
zeros, spaces, or special characters using printf: */

//pads to 15 spaces only:
printf("The result is $%15f", 123.42/12);
echo "<br>";

//pads to 15 spaces, and fills with 0's:
printf("The result is $%015f", 123.42/12);
echo "<br>";

//pads to 15 spaces and 2 point precision:
printf("The result is $%15.2f", 123.42/12);
echo "<br>";

//pads to 15 spaces, 2 point precision, fills with 0's:
printf("The result is $%015.2f", 123.42/12);
echo "<br>";

//pads to 15 spaces, 2 point precision, fills with #'s:
printf("The result is $%'#15.2f", 123.42/12);
/* You must place the apostrophe before using a special character
as a padding filler like shown above with '# */




/* You can also pad strings, left-justify, and 
right-justify by using [%s] and adding modifiers like 
with padding numbers */

/* STRING MODIFIERS:
[%s] = standard string output
[%12s] = right-justify with spaces to width 12
[%-12s] = left justify with spaces to width 12
[%012s] = pads with 0's
[%'#12s] = pads with #'s
[%12.8s] = right-justify, max of 8 characters, will cut off extra
[%-12.12s] = left-justify, max of 12 characters, will cut off extra
[%-@12.10s] = left-justify, pad with @. max 10 characters

EXAMPLES BELOW:
*/
echo "<pre>";
$k = "Jose";
$j = "Jose Landa";

printf("[%012s]\n", $k);
printf("[%12.8s]\n", $j);
printf("[%'#12s]\n", $k);
printf("[%-'#12s]", $k);

echo "</pre>";



/* You can use sprintf to store the output in a variable
to use later instead of printing the output */

$name = sprintf("[%-'#12s]\n", $k);
echo $name;
echo "<br>" . "<br>";
?>
