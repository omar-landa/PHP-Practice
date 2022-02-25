<?php // test1.php
    $username = "Fred Smith";
    echo $username;
    echo "<br>";
    echo "<br>";

    $current_user = $username;
    echo $current_user;
    echo "<br>";
    echo "<br>";

    echo strrev(" .dlrow olleH");
    echo str_repeat("Hip ", 2);
    echo strtoupper("hooray");
    echo "<br>";
    echo "<br>";

    echo ucfirst(strtolower("HellO EVeRyOnE!"));
    echo "<br>";
    echo "<br>";

    echo fix_names("WILLIAM", "henry", "gAtEs");
    function fix_names($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1." ".$n2." ".$n3;
    }
    echo "<br>";
    echo "<br>";

    $names = new_fix_names("WILLIAM", "henry", "gAtEs");
    echo $names[0] . " " . $names[1] . " " . $names[2];

    function new_fix_names($n1, $n2, $n3) 
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return array($n1, $n2, $n3);
    }


    ?>
