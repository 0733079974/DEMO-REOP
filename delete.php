<?php
include('connectuser.php');
if (isset($_GET['deleteid'])) {

	// code...
	$id=$_GET['deleteid'];
	$sql="DELETE from study where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "deleted succussfull";
		header("location:display.php");
	}
	else{
		die(mysqli_error($con));

	}
}

?>