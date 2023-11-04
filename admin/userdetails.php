<?php
    session_start();

    if(isset($_SESSION['adminid']))
    {
?>
<?php
    include '../layouts/aheader.php';
?>
        <!-- asasdasd -->
        <div class="container" align='center'>
            <h1>User Details</h1>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" id="myInput" onkeyup="myFunction()"
                    placeholder="Search User" aria-label="Search">
                <button class="btn btn-outline-secondary btn-sm" type="submit">Search</button>
            </form>
            <div class='add'>
                <a class="btn btn-success btn-sm float-end my-2" href="../user/userregister.php">Add</a>
            </div>
            <table class='table' id="table">
                <thead class='table-light'>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>E-mail</th>
                        <th>Phone Number</th>
                        <th colspan='2'>Action</th>
                    </tr>
                </thead>
                <?php
			//Connection to the server and database
				include '../config/connector.php';
		?>
                <?php
				$sql ="select * from user";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					echo
					'<tr>
                        <td>'.$row['userid'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['userpass'].'</td>
						<td>'.$row['usermail'].'</td>
						<td>'.$row['userphone'].'</td>
						<td>
						<a class="btn btn-primary btn-sm" href="../user/userupdate.php?uid='.$row['userid'].'">Update</a>
						</td>
						<td>
							<a class="btn btn-danger btn-sm" href="../user/userdelete.php?uid='.$row['userid'].'">Delete</a>
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