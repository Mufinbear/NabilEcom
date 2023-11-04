<?php
//assign data from customer form into variable
$uid=$_GET['uid'];
$username=$_POST['uname'];
$userpass=$_POST['upass'];
$userphone=$_POST['uphone'];
$usermail=$_POST['umail'];
?>
<?php
//Connection to the server and database
    include '../config/connector.php';
?>
<?php
	$sql="update user set username='$username',userpass='$userpass', userphone='$userphone', usermail='$usermail' where userid='$uid'";
	$result=mysqli_query($dbc,$sql);
	if($result)
	{
		mysqli_commit($dbc);
		Print '<script>alert("User is successfully updated.");</script>';
		Print '<script>window.location.assign("../admin/userdetails.php");</script>';
	}
	else
	{
		mysqli_rollback($dbc);
		Print '<script>alert("User is failed to update.");</script>';
		Print '<script>window.location.assign("../admin/userdetails.php");</script>';
	}
?>