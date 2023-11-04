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
            <h1>Order Details</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" id="myInput" onkeyup="myFunction()"
                    placeholder="Search Product" aria-label="Search">
                <button class="btn btn-outline-secondary btn-sm" type="submit">Search</button>
            </form>
            <table class='table' id="table">
                <thead class='table-light'>
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Order Address</th>
                        <th>Payment Method</th>
                        <th>Total</th>
                        <th>Item</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
			//Connection to the server and database
				include '../config/connector.php';
		?>
                <?php
				$sql ="select * from orders";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					echo
					'<tr>
						<td>'.$row['orderid'].'</td>
						<td>'.$row['userid'].'</td>
						<td>'.$row['orderadd'].'</td>
						<td>'.$row['payment'].'</td>
                        <td>'.$row['gtotal'].'</td>
                        <td>'.$row['cartid'].'</td>
						<td>
						<a class="btn btn-primary btn-sm" href="../product/productupdate.php?pid='.$row['orderid'].'">Done</a>
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