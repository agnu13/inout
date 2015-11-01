<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="medical_post";
$conn=mysql_connect($servername , $username , $password);

if(!$conn)
{
	echo "DATABASE ERROR";
}

$db=mysql_select_db($database, $conn);
session_start();



$phone = $_POST['phone_no'];
$medic = $_POST['medical'];
$add = $_POST['address'];
$pin = $_POST['pincode'];

$query="INSERT INTO medical_post(phone_no,medical,address,pincode)
	VALUES('$phone','$medic','$add','$pin')";
	
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