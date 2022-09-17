<?php

    if(isset($_GET['name'])) {
        print_r($_GET);
        $name = htmlentities($_GET['name']);
        echo $name;
    }

    if(isset($_POST['name'])) {
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo "<br>" . $name . "<br>";
    }

    // Requests works if we are submitting the form via GET or POST but we should stick with get or post.
    if(isset($_REQUEST['name'])) {
        print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo "<br>" . $name . "<br>";
    }

    echo "<br>";
    echo $_SERVER['QUERY_STRING'];
    echo "<br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & POST</title>
</head>
<body>

    <h1><?php echo "{$name}'s Profile"; ?></h1>
    <!-- With GET the information is sent through the URL -->

    <br>
    <h2>We can send information through the URL using GET</h2>
    
        <form method="GET" action="11-Get-Post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <br>
        <input type="submit" value="submit">
    </form>

    <br>
    <h2>We can send information through HTTP Header using POST</h2>
    <!-- With POST the information is sent through the HTTP Header and is much more secure -->
    
    <form method="POST" action="11-Get-Post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <br>
        <input type="submit" value="submit">
    </form>

    <br>
    <h2>We can send a query string to the URL using anchor tags</h2>
    <ul>
        <li>
            <a href="11-Get-Post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="11-Get-Post.php?name=Steve">Steve</a>
        </li>
    </ul>

    

</body>
</html>