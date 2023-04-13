<?php
session_start();
if ($_SESSION['tel']=='') {
	header("location:po.php");
}?>
<?php

if(isset($_POST['logout'])){
	session_destroy();
	header("locaation:po.php");
}
//echo $_SESSION['tel'];
?>
<form method="POST">
	<button name="logout">Logout</button>
</form>