<?php

/* This is how you use the 'clone' operator to make a clone
of object1 in order to use the code in object2 */

$object1 = new User(); //Creats object 1
$object1->name = "Alice";

$object2 = clone $object1; //Makes a copy of object 1 and makes object2
$object2->name = "Amy";  //Assigns a new name to the object

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User
{
    public $name;
}

?>
