<?php 
    #ARRAY - Variable that holds multiple values

    /* 
        - indexed
        - Associative
        - Multi-Dimensional
    
    */

    # INDEXED
    echo "INDEXED ARRAY";
    echo "<br>";
    $people = array('kevin', 'Jeremey', 'Sara');
    echo $people[1];
    // Arrays are zero based - i.e the first value is in position zero.
    echo "<br>";
    
    // Arays can also be integers or floats
    $ids = array(23, 55, 12.5);

    // Arrays can also be written shorthand
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[0];
    echo "<br>";

    $cars[3] = 'Chevey';
    $cars[] = 'BMW';
    echo $cars[3] . " " . $cars[4];
    echo "<br>";

    // We can count the number of items in an array
    echo count($cars);
    echo "<br>";

    // We can also output the whole contents of an array
    print_r($cars);
    echo "<br>";

    var_dump($cars);
    echo "<br><br><br><br>";
    
    echo "ASSOCIATIVE ARRAY";
    echo "<br>";
    # ASSOCIATIVE ARRAY
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 25);
    // An associative array has two values for each item, the key in single quotes then the value for that item, i.e. age.
    echo $people['Brad'];
    echo "<br>";
    
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    echo $ids[22];
    echo "<br>";

    // We can add to an associative array
    $people['Jill'] = 42;
    print_r($people);
    echo "<br>";
    var_dump($people);
    echo "<br><br><br><br>";
    
    echo "MULTI-DIMENSIONAL ARRAY";
    echo "<br>";
    // Are arrays within arrays
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );

    echo "Make of car: " . $cars[1][0];
    echo "<br>";
    echo "Number of " . $cars[1][0]."'s Sold: " . $cars[1][1];
    echo "<br>";
    echo "Number of " . $cars[1][0]."'s Remaining: " . $cars[1][2];

?>