<?php
	session_start();

	// $_SESSION['name'] = 'John Doe';

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?></h5>
<a href="page3.php">Go to page 3</a>
<br><br>
<a href="page1.php">Go back to page 1</a>
</body>
</html>