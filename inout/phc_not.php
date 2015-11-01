<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$servername ="localhost";
$username = "root";
$password = "";
$database="inout";
$tbl_name="replyt";
$conn=mysql_connect($servername , $username , $password);

if(!$conn)
{
	echo "DATABASE ERROR";
}

$db=mysql_select_db($database, $conn);
session_start();
$count = 1;
				$query = "SELECT * FROM reply";
$result = mysql_query($query);
//iterate over all the rows
        while($row = mysql_fetch_assoc($result)){
    //iterate over all the fields
            foreach($row as $key => $val){
        //generate output
              echo $key . "&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . $val . "<BR />";
    }
	echo "<br><br>";
}
					
?>