<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="reply";
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
$a = $_POST['phone_no'];
$b = $_POST['reply'];


$query="INSERT INTO reply(phone_no,reply)
	VALUES('$a','$b')";

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