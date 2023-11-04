<?php
	$pid=$_GET['cid'];
	$connect=mysqli_connect("localhost","root","root","systemphp");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	// $delete="delete from customer where `custid`='$custid'";
	$delete="DELETE FROM cart WHERE cartid='$pid'";
	$result=mysqli_query($connect,$delete);
	if($result)
	{
		mysqli_commit($connect);
		echo '<script>alert("Item is successfully deleted.");</script>';
		echo '<script>window.location.assign("cart.php");</script>';
	}
	else
	{
		mysqli_rollback($connect);
		echo '<script>alert("Item is failed to delete.");</script>';
		echo '<script>window.location.assign("cart.php");</script>';
	}
?>