<?php 
$con=mysqli_connect("localhost","root","","mydb1");

if (!$con) {
die(mysql_error($con));
}
else{
	echo "connected successful";
}
?>