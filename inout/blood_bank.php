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


$d1 = $_POST['date1'];
$blood = $POST['blood_group'];
$phone = $_POST['phone_no'];
$add = $_POST['address'];
$pin = $_POST['pincode'];
$d2 = $_POST['date2'];


$query="INSERT INTO blood_bank(phone_no,medical,address,pincode)
	VALUES('$phone','$medic','$add','$pin')";
	
$result=mysql_query($query);
if(!$result)
	{		
		echo "Sending Failed ";
	}
	else
	{
		echo "connected";
	//	header('location:ngo.php');

}
?>