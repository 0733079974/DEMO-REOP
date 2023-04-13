<?php 
include('connectuser.php');
?>
 <!DOCTYPE html>
 <html>
 <head><title>CRUD OPERATION</title>
 </head>
 <body>
 <button><a href="user.php">add user</a></button>
 		<table border="1" cellspacing="0" cellpadding="20px" align="center">
 			<thead>
 				<tr>
 					<th>id</th>
 					<th>name</th>
 					<th>email</th>
 					<th>mobile</th>
 					<th>password</th>
 					<th>operations</th>
 				</tr>
 			</thead>
 			<?php 
 			$sql="SELECT * FROM study";
 			$result=mysqli_query($con,$sql);
 			if ($result) {
 				// code...

 				//$row=mysqli_fetch_assoc($result);
 				//echo $row['name'];
            
while ($row=mysqli_fetch_assoc($result))
                
                 {
                    // code...
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
                echo'<tr>
                <th>'.$id.'</th><td>'.$name.'</td><td>'.$email.'</td><td>'.$mobile.'</td><td>'.$password.'</td><td><button><a href="update.php?updateid='.$id.'">update</a></button><button><a href="delete.php?deleteid='.$id.'">delete</a></button></td></tr>';

                }
 			}

 			?>
 		</table>
 </body>
 </html>