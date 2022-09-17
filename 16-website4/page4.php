<?php
	session_start();

	// unset($_SESSION['name']);
	// Unset will unset one value in the session array

	session_destroy();
	// session_destroy will erase the whole session array
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h1>You Have been logged out</h1>
<a href="page3.php">Go to page 3</a>
</body>
</html>