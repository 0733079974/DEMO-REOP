<?php
session_start();
$con=mysqli_connect("localhost","root","","po");
if (isset($_POST['send'])) {
	$a=$_POST['tel'];
	$b=$_POST['pas'];
	$sel=mysqli_query($con,"SELECT * FROM table1 WHERE phone='$a'");
	if (mysqli_num_rows($sel)>0) {
		$fet=mysqli_fetch_array($sel);
		$aa=$fet['phone'];
		$bb=$fet['pass'];
		//$_SESSION['tel']=$aa;
		//$_SESSION['pass']=$bb;
		if ($aa==$a && $bb==$b) {
			header("location:home.php");
		}
		elseif($aa==$a && $bb!=$b){
			echo "password does error";
		}elseif($aa!=$a ){
			echo "code sel";
		}}
		else{
			echo"user not exit";
		}
	}

?>

<form method="POST">
<input type="text" pattern="[0-9]{10}" name="tel"><br>

<input type="password" name="pas">
<input type="submit" name="send">
</form>