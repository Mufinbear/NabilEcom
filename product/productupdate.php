<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <title>Update Product</title>
</head>

<body>
    <?php
	$productid=$_GET['pid'];
	$dbc=mysqli_connect("localhost","root","root","systemphp");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$sql="select * from product where productid='$productid'";
	$result=mysqli_query($dbc,$sql);
	if(false === $result)
	{
		echo mysql_error();
	}
	$row = mysqli_fetch_assoc($result);
	?>

    <div class="d-flex align-items-center justify-content-center h-100">
        <form method="post" action="pupd.php?pid=<?php echo $productid;?>">
            <center>
                <table cellspacing="8" cellpadding="8" align="center">
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <h2>Update UserProduct</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td><input type="text" name="pname" value='<?=$row['productname'];?>'></td>
                    </tr>
                    <tr>
                        <th>Product Type</th>
                        <td><input type="text" name="ptype" value='<?=$row['producttype'];?>'></td>
                    </tr>
                    <tr>
                        <th>Product Price</th>
                        <td><input type="number" name="pprice" value='<?=$row['productprice'];?>'></td>
                    </tr>
                    <tr>
                        <th>Product Quantity</th>
                        <td><input type="number" name="pqty" value='<?=$row['productqty'];?>'></td>
                    </tr>
                    <tr>
                        <th>Product Details</th>
                        <td><textarea cols='30' rows='10' name='pdetails'><?=$row['productdetails'];?></textarea></td>
                    </tr>
                    <tr>
                        <th> Image (<?php echo $row['productimg'] ?>)</th>
                        <td>
                            <img src=../images/<?php echo $row['productimg'] ?> height="200">
                        </td>
                    </tr>

                    <tr>
                        <th>Upload Image</th>
                        <td>
                            <input type="file" name="pimg" id="pimg" required value='<?=$row['productimg'];?>'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <input type="submit" name="btnsubmit" value="Update">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="productdetails.php">
                                <center>go back</center>
                            </a>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
</body>

</html>