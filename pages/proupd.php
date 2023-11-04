<?php
//assign data from customer form into variable
$uid=$_GET['uid'];
$username=$_POST['uname'];
$userpass=$_POST['upass'];
$userphone=$_POST['uphone'];
$usermail=$_POST['umail'];
$userrace=$_POST['urace'];
$usergender=$_POST['ugender'];
$useradd=$_POST['uadd'];
?>
<?php
//Connection to the server and database
    include '../config/connector.php';
?>
<?php
	$sql="update user set username='$username', userpass='$userpass', userphone='$userphone', usermail='$usermail', userrace='$userrace', usergender='$usergender', useradd='$useradd' where userid='$uid'";
	$result=mysqli_query($dbc,$sql);
	if($result)
	{
		mysqli_commit($dbc);
		Print '<script>alert("Your profile is successfully updated.");</script>';
		Print '<script>window.location.assign("profile.php");</script>';
	}
	else
	{
		mysqli_rollback($dbc);
		Print '<script>alert("Your profile is failed to update.");</script>';
		Print '<script>window.location.assign("profile.php");</script>';
	}
?>