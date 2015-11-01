<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="user";
$conn=mysql_connect($servername , $username , $password);
if(!$conn)
{
	echo "DATABASE ERROR";
}
$db=mysql_select_db($database, $conn);
session_start();

// Include database connection settings
if($db)
{
	$a=$_POST['phone_no'];
	$p = $_POST['password'];
	$login = mysql_query("SELECT * FROM user WHERE (phone_no = '" .     mysql_real_escape_string($_POST['phone_no']) . "') and (password = '" .     mysql_real_escape_string($_POST['password']) . "')");
	
	if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['phone_no'] = $_POST['phone_no'];
// Jump to secured page
 echo "connected";
 header('Location: ngo.php');
}
else {
// Jump to login page
header('Location: home.html');
}}
?>
