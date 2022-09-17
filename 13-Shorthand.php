<?php 

$loggedIn = true;
$arr = [1, 2, 3, 4, 5];

# Using if else to check for condition
if ($loggedIn) {
    echo 'You are logged in';
} else {
    echo 'You are not logged in';
}

echo "<br><br>";

# Using ternary check for condition
echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';
echo "<br><br>";


# we can set a variable based on a condition
$isRegistered = ($loggedIn == true) ? true : false;

echo $isRegistered;
echo "<br><br>";


# Nested ternary
$age = 20;
$score = 15;

echo 'your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

// The first nested ternary checks if score is greeater than 10. if the score is greater than 10 then we check for age where if age is greater than 10 then it is average, if under 10 it is eceptional.
// If score is NOT grreater than 10 and age is greter than 10 then it is horrible whereas if score is less than and age is less than 10 then score is average.

echo "<br><br>";
?>

<!-- Using PHP inside of HTML code blocks -->

<!-- Ugly method -->
<div>
    <?php If($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
        <?php } ?>    
</div>

<br><br>

<!-- Cleaner method -->
<div>
    <?php If($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<br><br>

<!-- Cleaner method foreach loop -->
<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<br><br>

<!-- Cleaner method for loop -->
<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>
