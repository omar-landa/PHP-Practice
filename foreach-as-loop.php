<?php


/* Foreach-as loops:
   This type of loop lets you step through each item
   of an array one at a time, and then lets you use the item.  */
  $paper = array("Copier", "Inket", "Laser", "Photo");
  $j = 0;

/* This loop will cylce through each item
   in the array and print the item value.*/
  foreach($paper as $item)
  {
      echo "$j: $item<br>";
      ++$j; 
  }
  echo "<br>" . "<br>"
/* Once all items have been cycled through, the
   loop will stop executing */







//Foreach loop with an Associative Array:
$paper = array('copier' => "Copier and Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photo Printer");

foreach($paper as $item => $description)
  echo "$item: $description<br>"


   
   
   
   
   
   

   
   
 /* The List Function:
   The list function is an alternative to the foreach...as loop.
   It takes an array as its argument and then assigns the values 
   of the array to the variables inside the paranthesis.*/
   $paper = array('copier' => "Copier and Multipurpose",
   'inkjet' => "Inkjet Printer",
   'laser' => "Laser Printer",
   'photo' => "Photo Printer");

   while (list($item, $description) = each($paper))
    echo "$item: $description<br>";




//Another list function example:
list($a, $b) = array('Jose', 'Gina');
echo "a=$a b=$b;"

?>


?>
