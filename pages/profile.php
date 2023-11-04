<?php
    session_start();

    if(isset($_SESSION['userid']))
    {
?>
<?php
    include '../layouts/header.php';
?>


<div class="d-flex align-items-center h-100 py-20">
<div class="container" style="width: 70rem;">

    <div class="card shadow p-3 mb-5 bg-white rounded">

            <table class='table' id="table">
                <thead class='table-light text-center'>
                    <tr>
                        <th colspan='7'>Profile</th>
                    </tr>
                </thead>
                <?php
			//Connection to the server and database
				include '../config/connector.php';
		?>
                <?php
                $uid=$_SESSION['userid'];
				$sql ="select * from user where userid='$uid'";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					// echo
					// '<tr>
                    //     <td>'.$row['userid'].'</td>
					// 	<td>'.$row['username'].'</td>
					// 	<td>'.$row['userpass'].'</td>
					// 	<td>'.$row['usermail'].'</td>
					// 	<td>'.$row['userphone'].'</td>
					// 	<td>
					// 	<a class="btn btn-primary btn-sm" href="../user/userupdate.php?uname='.$row['username'].'">Update</a>
					// 	</td>
					// 	<td>
					// 		<a class="btn btn-danger btn-sm" href="../user/userdelete.php?upass='.$row['userpass'].'">Delete</a>
					// 	</td>

					// </tr>';
                    echo
                    '<tr>
                    <td rowspan="3"><img src="../images/profile.png" width="200" height="250"></td>
                    <td>ID : '.$row['userid'].'</td>
                    <td>Username : '.$row['username'].'</td>
                </tr>
                <tr>
                    
                    <td colspan="">Email : '.$row['usermail'].'</td>
                    
                    <td>Phone : '.$row['userphone'].'</td>
                </tr>
                <tr>
                    
                    <td>Gender : '.$row['usergender'].'</td>
                    <td>Race : '.$row['userrace'].'</td>
                </tr>
                <tr>
                <td></td>
                <td colspan="2">Address : '.$row['useradd'].'</td>
                </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="../pages/proupdate.php?uid='.$row['userid'].'">Edit</a>
                ';
				}
		?>
</div>
</div>
</div>


<?php
    include ('../layouts/footer.php');
?>
<?php
     }
     else{
         header("location:../user/userlogin.php");
     }
?>