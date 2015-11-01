<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="blood";
$conn=mysql_connect($servername , $username , $password);

if(!$conn)
{
	echo "DATABASE ERROR";
}

$db=mysql_select_db($database, $conn);
session_start();

if (!isset($_SESSION['phone_no'])) {
header('Location: home.html');
}

$phone = $_POST['phone_no'];
$blood = $_POST['blood'];
$add = $_POST['address'];
$pin = $_POST['pincode'];

$query="INSERT INTO blood(phone_no,blood,address,pincode)
	VALUES('$phone','$blood','$add','$pin')";
$result=mysql_query($query);
if(!$result)
	{		
		echo "Sending Failed ";
	}
	else
	{
		header('location:ngo.php');

}
?>

<html>

<body>

</body>

</html>