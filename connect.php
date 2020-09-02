<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Processing</title>
</head>
 <?php
	$connection = mysqli_connect('localhost', 'sheriffdeen', 'adetunji12', 'cefndata');
	if(!$connection){
		echo "Error: Unable to connect to MySQL."	 . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

?> 







<body>
</body>
</html>