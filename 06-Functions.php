<?php 
# FUNCTION - Block of code that can be repeatedly called;

/*
    - Camel Case - myFunction()
    - Lower Case - my_function()
    - pascal Case - MyFuction()
*/

function simpleFunction() {
    echo '<h1>Hello World!</h1>';
}

// Function with params
function sayHello($name) {
    echo "Hello $name<br>";
}

// Now we can call the function
simpleFunction();
sayHello('Joe');
sayHello('bob');


// Note that the sayHello function must be called with a name parameter. If we do not put in a name then we get an error. Uncaught ArgumentCountError: Too few arguments to function sayHello(), 0 passed in

// WE can asign a default value so that if nothing is passed into the function then it outputs the default.
function sayHelloDefault($name = 'World!') {
    echo "Hello $name<br>";
}

sayHelloDefault();

// A function can take more than one parameter
function addNumbers($num1, $num2) {
    echo $num1 + $num2 . "<br>";
}

addNumbers(2,3);

// a function can return a value based on the params passed in.
function multiplyNumbers($num1, $num2) {
    return $num1 * $num2;
}

echo (multiplyNumbers(2,5) . "<br>");

// passing arguments by reference
$myNum = 10;

function addFive($num) {
    $num += 5;
}

// add the ampersand symbol infront of the paramater to pass it in by reference.
function addTen(&$num) {
    $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";
addTen($myNum);
echo "Value: $myNum<br>";

// When we pass in a number by reference PHP will manipulare the variable.






?>