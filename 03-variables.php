<?php 
    // echo "<h1>hello world</h1><br>";
    // print "<h1>hello world</h1>";

    // Single line comment
    # Single line comment
    /* 
    Multiline 
    comment 
    */

    # VARIABLES

    /*
        - prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscores
        - Case Sensative
    */

    # DATATYPES

    /*
        - String
        - Intergers
        - floats (which are decimals)
        - Booloeans (true or false)
        - Arrays
        - Objects
        - NULL
        - Resource
    */

    $output = "<h1>Hello World!</h1><br>";
    echo $output;

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;
    echo $sum;
    echo "<br>";

    $string1 = "Hello";
    $string2 = "world!";
    // $greeting = $string1 + $string2;
    // echo $greeting;
    // Fatal error: Uncaught TypeError: Unsupported operand types: string + string
    $greeting = $string1 . " " . $string2; 
    echo $greeting;
    echo "<br>";
    $greeting2 = "$string1 $string2"; 
    echo $greeting2;
    echo "<br>";echo "<br>";
    // ESCAPE CHARACTERS - A backslash precedes the character we want to escape
    $string3 = 'They\'re Here';
    echo $string3;
    echo "<br>";
    // An escape character is not needed here because the string is denoted by double quotes.
    $string4 = "They're Here";
    echo $string4;
    echo "<br>";


    $float1 = 4.4;
    $bool1 = true;
    
    # CONSTANTS
    define('GREETING', 'Hello Everyone');
    echo GREETING;
    echo "<br>";
    
    // By default constants are case sensative unless we add the true parameter in the third position NOTE THIS FEATURE IS DEPRECIATED!
    // define('MESSAGE', 'Hello World!', true);
    // echo message;
    // echo "<br>";

?>