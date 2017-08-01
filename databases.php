<?php
// 1.create a database connection

$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "secretpassword";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//test if connection occured.
if(mysqli_connect_error()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_error() .")"
  );
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>databse</title>
	</head>
	<body>
    <h2>fckjndjvndoifvf</h2>
	</body>
</html>

<?php
//close connection
  mysql_close($connection);
 ?>
