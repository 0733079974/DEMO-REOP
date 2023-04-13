<?php
include('connectuser.php');
$id=$_GET['updateid'];
$sql="SELECT * FROM study WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    if (isset($_POST['submit'])) {
    	// code...
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $upd="UPDATE study SET id='$id',name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id'";
    $result=mysqli_query($con,$upd);
    if ($result) {
    	// code...
    	?>
    	<script>
    	console.log("record updated successfull");
    	</script>
    	<?php
    	header('location:display.php');
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
	
			<table cellpadding="35px" border="3" cellspacing="0"><form method="post">
				<font size="50px"><tr><td><label>id</label></td><td>
			<input type="number" name="id" placeholder="enter name" value="<?php echo $id ?>" required></td></tr>

			<font size="50px"><tr><td><label>name</label></td><td>
			<input type="text" name="name" placeholder="enter name" value="<?php echo $name ?>"></td></tr><br><br>
		
			<font size="50px"><tr><td><label>email address</label></td>
			<td><input type="email" name="email" placeholder="enter yuor email" value="<?php echo $email ?>"></td></tr><br><br>
		
			<font size="50px"><tr><td><label>mobile</label></td>
			<td><input type="text" name="mobile" placeholder="enter mobile number" value="<?php echo $mobile ?>"></td></tr>
			<br><br>
		
			<font size="50px"><tr><td><label>password</label></td><td>
			<input type="password" name="password"value="password" placeholder="enter password" value="<?php echo $password ?>"></td></tr><br><br>
<tr>
		<td colspan="2">
		<button type="submit"class="button" name="submit">update</button></td></tr>
	</form></table>
	
</body>
</html>