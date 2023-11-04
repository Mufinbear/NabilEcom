<?php
//assign data from customer form into variable
$username=$_GET['uname'];
$userpass=$_POST['upass'];
$userphone=$_POST['uphone'];
$usermail=$_POST['umail'];
?>
<?php
//Connection to the server and database
    include '../config/connector.php';
?>
<?php
	$sql="update user set username='$username',userpass='$userpass', userphone='$userphone', usermail='$usermail' where username='$username'";
	$result=mysqli_query($dbc,$sql);
	if($result)
	{
		mysqli_commit($dbc);
		Print '<script>alert("Customer is successfully updated.");</script>';
		Print '<script>window.location.assign("userdetails.php");</script>';
	}
	else
	{
		mysqli_rollback($dbc);
		Print '<script>alert("Customer is failed to update.");</script>';
		Print '<script>window.location.assign("userdetails.php");</script>';
	}
?>