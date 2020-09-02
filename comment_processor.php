<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Processing</title>
</head>
 <body>
 <table width="459" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td><h1>Christian Evangelical Fellowship of Nigeria, kano Chapter</h1></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="48">&nbsp;</td>
    <td width="256"><div align="center"><h3>
      <?php
// require('connect.php');

$servername = "localhost";
$username = "sheriffdeen";
$password = "adetunji12";
$dbname = "cefndata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, phone, message, msg_date)
VALUES ('$name', '$email', '$phone', '$message', NOW())";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for your feedback.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?></h3>
    </div></td>
    <td width="32">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="contact.html">Click here to return to the contact page</a>.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>