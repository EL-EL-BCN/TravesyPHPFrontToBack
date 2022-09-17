<?php
	session_start();

	print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
<a href="page4.php">Go to page 4</a>
<br><br>
<a href="page2.php">Go back to page 2</a>
</body>
</html>