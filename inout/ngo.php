<!DOCTYPE html>
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
?>
<html>
<head>
    <title>NGO</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="template2/tabcontent.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#F6F9FC; font-family:Arial;">
<center><img src ="logo.jpg"   height ="79"></center>
<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="LOG OUT">
  </label>
</form>

    <div style="width: 700px; margin: 0 auto; padding: 30px 0 40px;">
                <ul class="tabs" data-persist="true">
            <li><a href="#view1">Primary Health Center</a></li>
            <li><a href="#view2">Blood Bank</a></li>
            <li><a href="#view3">Medical Stores</a></li>
			<li><a href="#view4">Reply</a></li>
			<li><a href="#view5">Profile</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
                <b>Primary Health Center</b><br><br><br>
                <b> All the request posted by Rural primary healthcare centre of concerned Pincode </b>
                <p>
               <iframe src="request_ngo.php" frameborder="0" height="300" width="700"></iframe>
               

                </p>
                
            </div>
            <div id="view2">
                <b>Blood BANK</b>
                <p>
                
                <?php
			echo "<form action='blood_post.php' method='post'><br>";
			echo "Blood Group : <br><input type='text' name = 'blood' size='17' ><br><br>";
			echo "Address :<br>";
                  echo "<input type='text' name='address' size= '50'>
             <br><br>";
				echo "Phone number : <br><input type='text' size='17' name= 'phone_no' ><br><br>";
				echo "Pincode : <br><input type='text' size='17' name ='pincode' ><br><br>";
             echo "<input type='submit' value = 'Send'>";
			 echo "</form>";
			?>
                </P>
                             
            </div>
            <div id="view3">
                <b>Medical Stores</b>
                <p>
                  <?php
			echo "<form action='medical_post.php' method='post'><br>";
			
			echo "Medicine: <br><input type='text' name = 'medical' size='17' ><br><br>";
			
			echo "Address :<br>";
                  echo "<input type='text' name='address' size= '50'>
             <br><br>";
			
				echo "Phone number : <br><input type='text' size='17' name= 'phone_no' ><br><br>";
			
				echo "PINCODE : <br><input type='text' size='17' name ='pincode' ><br><br>";
            
			 echo "<input type='submit' value = 'Send'>";
			 echo "</form>";
			?>
                
                </p>       
            </div>
			<div id = "view4">
			<b>REPLY</b>
            <?php
			echo "<form action='reply.php' method='post'><br>";
			echo "Phone number : <br><input type='text' size='17' name ='phone_no'><br><br>";
						echo "Reply :<br>";
                  echo "<TEXTAREA name='reply' ROWS=10 COLS=50 >
                </TEXTAREA><br><br>";
             echo "<input type='submit' value = 'REPLY'>";
			?>
        </div>
		<div id = "view5">
			<b>Profile</b>
        </div>
    </div>
</body>
</html>
