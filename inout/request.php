<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="request";
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
$sub = $_POST['subject'];
$mes = $_POST['message'];
$add = $_POST['address'];
$pin = $_POST['pincode'];
$query="INSERT INTO request(phone_no,subject,message,address,pincode)
	VALUES('$phone','$sub','$mes','$add','$pin')";
$result=mysql_query($query);
if(!$result)
	{		
		echo "Sending Failed ";
	}
	else
	{
		header('location:phc_successfull.php');

}
?>

<html>

<body>

</body>

</html>