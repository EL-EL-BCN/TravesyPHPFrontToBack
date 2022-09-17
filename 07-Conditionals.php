<?php

# CONDITIONALS

/* 
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
*/

$num = 5;
echo '<b>$num = 5</b><br><br>';

echo 'CONDITIONAL == means is equal to<br>if($num == 5)<br>';

if($num == 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL === means is exactly equal to, including datatype<br>if($num === 5)<br>';

if($num === 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL === means is exactly equal to, including datatype<br>if($num === "5")<br>Here datatype is set to string because it is in quotes where as $num is am imterger so it fails<br>';

if($num === "5") {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL > means greater than<br><br>if($num > "5")<br>';

if($num > 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL < means less than<br><br>if($num < "5")<br>';

if($num < 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL >= means greater than or equal to<br>if($num >= "5")<br>';

if($num >= 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL <= means less than or equal to<br>if($num >= "5")<br>';

if($num <= 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}


echo 'CONDITIONAL != means NOT equal to<br>if($num != 5)<br>';

if($num != 5) {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo 'CONDITIONAL !== means NOT equal to value and datatype<br>if($num !== "5")<br>';

if($num !== "5") {
    echo '<b>5 passed</b><br><br>';
}
else {
    echo '<b>did not pass</b><br><br>';
}

echo '<br>Nesting IF</br>';

$num = 5;
echo '<b>$num = 5</b><br><br>';
echo "if (\$num > 4) {<br>  if (\$num = 10) {<br>  echo '\$num passed<br>';<br>}<br>}";

if ($num > 4) {
    if ($num = 10) {
        echo '$num passed<br>';
    }
}

# LOGICAL OPERATORS

/*
    and &&
    Or ||
    xor
*/

echo '<br>Logical Operators</br>';
echo "if(\$num > 4 OR \$num < 10)<br>";

if($num > 4 OR $num < 10) {
    echo '<b>$num passed</b><br>';
}

# Switch
echo '<br>Switch Statement</br>';

$favColor = 'blue';

switch($favColor) {
    case 'red';
        echo 'Your favorite color is red';
    break;
    case 'blue';
        echo 'Your favorite color is blue';
    break;
    case 'green';
        echo 'Your favorite color is green';
    break;
    default:
        echo 'Your favorite color is something else';
}



?>