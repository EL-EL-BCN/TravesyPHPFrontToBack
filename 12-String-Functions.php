<?php 

# substr()
// Returns a portion of a string

// This will output from the second character of the string because it is zero based.
$output = substr('Hello', 1);
echo $output;
echo "<br>";

// This will output from the second character to the fourth character of the string.
$output = substr('Hello', 1, 3);
echo $output;
echo "<br>";

// This will output from the last two characters of the sting becuase we have used -2 to denote last two characters.
$output = substr('Hello', -2);
echo $output;
echo "<br>";


# strlen()
// Returns the lenght of a string

// This counts all the characters in a string including spaces and symbols
$output = strlen('Hello World!');
echo $output;
echo "<br>";



# strpos()
// Returns the position of the FIRST occurance of a specified substring

// This looks for the first occurane of the letter 'o'.
$output = strpos('Hello World!', 'o');
echo $output;
echo "<br>";


# strrpos()
// Returns the position of the LAST occurance of a specified substring

// This looks for the first occurane of the letter 'o'.
$output = strrpos('Hello World!', 'o');
echo $output;
echo "<br>";


# trim()
// removes whitespace

// This will trim all the whitespace at the end of Hello World!
$text = 'Hello World!     ';
var_dump($text);
echo "<br>";
$trimmed = trim($text);
var_dump($trimmed);
echo "<br>";


# strtoupper()
// Makes everything uppercase
$output = strtoupper('Hello World!');
echo $output;
echo "<br>";


# strtolower()
// Makes everything lowercase
$output = strtolower('Hello World!');
echo $output;
echo "<br>";


# ucwords()
// Upper Case Words. Makes the first letter of all words uppercase.
$output = ucwords('hello world!');
echo $output;
echo "<br>";


# str_replace()
// Replace all occurances of a search string with a replacement

// The first parameter is what we want to search for, the second parameter is what we want to replace the search string with and the third parameter is the string to check.
$text = 'Hello World!';
$output = str_replace('World', 'Everyone', $text);
echo $output;
echo "<br>";

# is_string()
// Check of string

// this returns a one if it is a string and and nothing if it is not a string
$val = "Hello World!";
$output = is_string($val);
echo $output;
echo "<br>";

$val2 = 22;
$output2 = is_string($val2);
echo $output2;
echo "<br>";

$values = array(true, false, null, 'abc', 33, 22.4, '', 0, '0');

foreach($values as $value) {
    if (is_string($value)) {
        echo "{$value} is a string<br>";
    }
}


# gzcompress()
// compress a string

$string ="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum pretium ultricies sem. Suspendisse potenti. Phasellus est. Aliquam pretium. Pellentesque tellus.
Cras molestie rhoncus quam. Morbi lacus leo, congue a, lobortis at, consequat sed, magna. Donec congue tristique nunc. Nulla tempor. Sed nonummy.
Ut metus. Duis purus risus, malesuada sit amet, accumsan eu, sodales a, nibh. Donec sit amet mauris ut odio congue ornare. Aliquam id odio sit amet pede accumsan gravida. Maecenas vulputate porta lacus. Sed in nibh. Quisque dui. Praesent sed odio. Etiam quam felis, tincidunt nec, molestie vel, pretium quis, tortor.
Maecenas arcu. Nam suscipit mi id nunc. Nulla facilisi. Etiam vitae massa. Donec lobortis condimentum velit. Nam libero. Nam quis est sed urna commodo nonummy. Nulla aliquet gravida ante. Nulla facilisi. Vivamus ultrices sem vel ligula. Suspendisse vel lacus vitae elit rhoncus varius. Aenean id lectus id justo interdum suscipit. Donec lorem urna, mollis semper, porta ac, pulvinar ac, sem. Suspendisse laoreet, leo eget lacinia cursus, pede nunc eleifend arcu, quis adipiscing pede neque vitae odio. Praesent adipiscing. Suspendisse et magna nec eros tristique aliquam. Pellentesque nulla massa, tristique in, sollicitudin vel, condimentum vitae, tortor. Pellentesque id felis nec lacus vehicula consequat. Donec eleifend ante ac purus.
Quisque commodo sagittis risus. In hac habitasse platea dictumst. Mauris tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lacinia fringilla mi. Nulla vehicula placerat wisi. Maecenas nonummy.";

$compressed = gzcompress($string);
echo $compressed;
echo "<br>";

$original = gzuncompress($compressed);
echo $original;
echo "<br>";



?>