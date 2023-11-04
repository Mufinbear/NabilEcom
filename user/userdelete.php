<?php
	$uid=$_GET['uid'];
	$connect=mysqli_connect("localhost","root","root","systemphp");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	// $delete="delete from customer where `custid`='$custid'";
	$delete="DELETE FROM user WHERE userid='$uid'";
	$result=mysqli_query($connect,$delete);
	if($result)
	{
		mysqli_commit($connect);
		echo '<script>alert("User is successfully deleted.");</script>';
		echo '<script>window.location.assign("../admin/userdetails.php");</script>';
	}
	else
	{
		mysqli_rollback($connect);
		echo '<script>alert("User is failed to delete.");</script>';
		echo '<script>window.location.assign("../admin/userdetails.php");</script>';
	}
?>