<?php
	$pid=$_GET['pid'];
	$connect=mysqli_connect("localhost","root","root","systemphp");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	// $delete="delete from customer where `custid`='$custid'";
	$delete="DELETE FROM product WHERE productid='$pid'";
	$result=mysqli_query($connect,$delete);
	if($result)
	{
		mysqli_commit($connect);
		echo '<script>alert("Product is successfully deleted.");</script>';
		echo '<script>window.location.assign("../admin/productdetails.php");</script>';
	}
	else
	{
		mysqli_rollback($connect);
		echo '<script>alert("Product is failed to delete.");</script>';
		echo '<script>window.location.assign("../admin/productdetails.php");</script>';
	}
?>