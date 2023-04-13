<?php
include('connectuser.php');
if (isset($_POST['sub'])) {
	// code...
	$c=$_POST['fname'];
	$d="INSERT INTO action(name) VALUES('$c')";
	$ins=mysqli_query($con,$d);
	if ($ins) {
  echo"inserted successful";
	}else{
		die(mysqli_error($a,$ins));
		echo "not inserted";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<form method="post">
	FIRST NAME<input type="text" name="fname">
	<button name="sub">send</button>

</form>
</body>
</html>
