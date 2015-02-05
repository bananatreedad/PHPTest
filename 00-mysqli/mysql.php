<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php 
	$md5_pass = md5("test");
	echo "<br>";

	if($mysqli = new mysqli("localhost", "testuser", "password", "mysqli_test")) {
		$test = $mysqli->query("SELECT * FROM user");
		print_r($test);
	}

	?>
</body>
</html>

