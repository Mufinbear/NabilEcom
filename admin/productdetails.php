<?php
    session_start();

    if(isset($_SESSION['adminid']))
    {
?>
<?php
    include '../layouts/aheader.php';
?>
    <section>
        <div class="container" align='center'>
            <h1>Product Details</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" id="myInput" onkeyup="myFunction()"
                    placeholder="Search Product" aria-label="Search">
                <button class="btn btn-outline-secondary btn-sm" type="submit">Search</button>
            </form>
            <div class='add'>
                <a class="btn btn-success btn-sm float-end my-2" href="../product/productregister.php">Add</a>
            </div>
            <table class='table' id="table">
                <thead class='table-light'>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th colspan=2>Action</th>
                    </tr>
                </thead>
                <?php
			//Connection to the server and database
				include '../config/connector.php';
		?>
                <?php
				$sql ="select * from product";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					echo
					'<tr>
						<td>'.$row['productname'].'</td>
						<td>'.$row['producttype'].'</td>
						<td>'.$row['productprice'].'</td>
						<td>'.$row['productqty'].'</td>
                        <td>'.$row['productdetails'].'</td>
						<td><img src=../images/'.$row['productimg'].' height="100"></td>
						<td>
						<a class="btn btn-primary btn-sm" href="../product/productupdate.php?pid='.$row['productid'].'">Update</a>
						</td>
						<td>
							<a class="btn btn-danger btn-sm" href="../product/productdelete.php?pid='.$row['productid'].'">Delete</a>
						</td>

					</tr>';
				}
		?>
                </tr>

            </table>

            <?php
    include '../config/searcher.php';
?>
            </form>
        </div>
<?php
    include '../layouts/footer.php';
?>
<?php
     }
     else{
         header("location:../admin/adminlogin.php");
     }
?>