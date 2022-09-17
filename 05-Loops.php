<?php 
# LOOPS - Ececute code set number of times

/*
    - For
    - While
    - Do..while
    - Foreach
*/

# FOR LOOP
echo 'FOR LOOP';
echo '<br>';

for ($i = 0; $i < 10; $i++) {
    echo 'number: ' . $i;
    echo '<br>';
}

# WHILE LOOP
echo '<br><br><br>';
echo 'WHILE LOOP';
echo '<br>';
// Takes a condition

$i = 10;

while ($i < 20) {
    echo 'number: ' . $i;
    echo '<br>';
    $i++;
}

# DO..WHILE LOOP
echo '<br><br><br>';
echo 'DO..WHILE LOOP';
echo '<br>';
// Takes a condition

$i = 20;
do{
    echo 'number: ' . $i;
    echo '<br>';
    $i++;
}
while ($i < 30);

# FOREACH LOOP
echo '<br><br><br>';
echo 'FOREACH LOOP WITH INDEXED ARRAY';
echo '<br>';
// Designed to work with arrays

$people = array('Brad', 'Jose', 'William');

foreach ($people as $person) {
    echo 'Name: ' . $person;
    echo '<br>';
}

# FOREACH LOOP
echo '<br><br><br>';
echo 'FOREACH LOOP WITH ASSOCIATIVE ARRAY';
echo '<br>';

$people = array(
    'Brad' => 'brad@gmail.com',
    'Jose' => 'Jose@snailmail.com',
    'William' => 'William@royalmail.com'
);

foreach ($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
}
    




?>