<?php
//assign data from customer form into variable
$productid=$_GET['pid'];
$productname=$_POST['pname'];
$producttype=$_POST['ptype'];
$productprice=$_POST['pprice'];
$productqty=$_POST['pqty'];
$productdetails=$_POST['pdetails'];
$productimg=$_POST['pimg'];
?>
<?php
//Connection to the server and database
    include '../config/connector.php';
?>
<?php
	$sql="update product set productname='$productname',producttype='$producttype', productprice='$productprice', productqty='$productqty',productdetails='$productdetails',productimg='$productimg' where productid='$productid'";
	$result=mysqli_query($dbc,$sql);
	if($result)
	{
		mysqli_commit($dbc);
		Print '<script>alert("Product is successfully updated.");</script>';
		Print '<script>window.location.assign("../admin/productdetails.php");</script>';
	}
	else
	{
		mysqli_rollback($dbc);
		Print '<script>alert("Product is failed to update.");</script>';
		Print '<script>window.location.assign("../admin/productdetails.php");</script>';
	}
?>