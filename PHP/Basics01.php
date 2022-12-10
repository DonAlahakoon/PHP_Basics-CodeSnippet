<?php
    // P R I N T I N G
    echo "<h1>Hello World</h1>";
    print "<hr>";
    echo "<p> This is a php code snippet</p>";

    //V A R I A B L E S
    /*
    Names are case sensitive and must start with a '$' pcntl_sign then a letter or '_'.
    Convention says,
        Start with a lowercase word, then additional words are capitalized
          ex: myFirstVariable
    */

    $name = "Tom";
    $age = 30;//Dynamically typed language
    $gpa = 3.0;
    $isTall = true;
    $name = "Jack";


    //C A S T I N G  A N D   C O N V E R T I N G
    echo((int)3.14)."<br>";
    echo((int)"80"+(float)"60.5")."<br>";
    echo intval("60") + floatval("50.3"); //converting using functions

    //S T R I N G S
    $greeting = "Hello";

    echo strlen($greeting)."<br>";
    echo $greeting[0]."<br>";
    echo $greeting[-1]."<br>";
    echo str_replace("l","Z", $greeting)."<br>"; //replaces 'l' with 'Z'
    echo strchr($greeting,"ll")."<br>"; //finds and return the rest of the string

    //N U M B E R S
    echo (2*3)."<br>";
    echo (2**3)."<br>";
    echo (10%3)."<br>";
    echo (10/3)."<br>";
    echo ((1+2)*3)."<br><br>";

    $num = 10;
    $num++; //Incrementing by one
    $num+=12; // add operation
    echo $num."<br><br>";

    //Useful math functions
    echo max(3,6)."<br>";
    echo sqrt(144)."<br>";
    echo round(2.6)."<br>";

    //L I S T S
    //$Lucky_numbers = [];
    //$Lucky_numbers = arrays(4,8,"fifteen",16,23,42.0);

    $lucky_numbers = [4,8,"fifteen",16,23,42.0];

    $lucky_numbers[0] = 90;
    echo $lucky_numbers[0]."<br>";
    echo $lucky_numbers[1]."<br>";
    echo count($lucky_numbers)."<br>";


    $number_grid = [[1,2],[4,5]];
    $number_grid[1][1] = 7;

    echo $number_grid[1][1]."<br>";
    echo $number_grid[0][1]."<br><br>";

    //L I S T   F U N C T I O N S
    $friends = [];
    array_push($friends,"Oscar","Angela");
    array_push($friends,"Kevin","Tom");

    array_pop($friends);
    echo "$friends[0],$friends[1],$friends[2] <br>";
    sort($friends);
    echo "$friends[0],$friends[1],$friends[2] <br>";
    echo in_array("Tom",$friends);//use to find whether elements are in the array if true return '1' else none


 ?>
