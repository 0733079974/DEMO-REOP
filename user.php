<?php
include('connectuser.php');
if (isset($_POST['submit'])) {

	// code...
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$sql="INSERT INTO study(id,name,email,mobile,password) values('$id','$name','$email','$mobile','$password')";
	$result=mysqli_query($con,$sql);
	if ($result) {

		// code...
		echo "record inserted successful";
		header('location:display.php');
		//header_remove('location:connectuser.php');
	}
	else{
		die(mysql_error($con));
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD OPERATION</title>
</head>
<body style="margin-top: -350px;margin-left: 350px;">
	
			<table cellpadding="35px" border="3" cellspacing="0"><form method="post" action="">
				<font size="50px"><tr><td><label>ID</label></td><td>
			<input type="number" name="id" placeholder="ID" required></td></tr>
			<font size="50px"><tr><td><label>name</label></td><td>
			<input type="text" name="name" placeholder="enter name" required></td></tr><br><br>
		
			<font size="50px"><tr><td><label>email address</label></td>
			<td><input type="email" name="email" placeholder="enter yuor email" required></td></tr><br><br>
		
			<font size="50px"><tr><td><label>mobile</label></td>
			<td><input type="text" name="mobile" placeholder="enter mobile number" required></td></tr>
			<br><br>
		
			<font size="50px"><tr><td><label>password</label></td><td>
			<input type="password" name="password"value="password" placeholder="enter password" required></td></tr><br><br>
<tr>
		<td colspan="2">
		<button type="submit"class="button" name="submit">submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button><a href="display.php">view records</a></button></td></tr>
	</form></table>
	
</body>
</html>