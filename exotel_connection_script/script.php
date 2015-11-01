<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="hack";
$tbl_name="ngo";
$conn=mysql_connect($servername , $username , $password);

if(!$conn)
{
	echo "DATABASE ERROR";
}

$db=mysql_select_db($database, $conn);
session_start();

$pin = $_GET['digit'];
$result = '9559169130';
$query="select ngo_phone from ngo where pincode = '$pin' " ;
$result=mysql_query($query);

$result = '9559169130';
		echo $result ;
?>