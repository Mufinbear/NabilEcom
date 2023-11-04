<?php
    session_start();

    if(isset($_SESSION['userid']))
    {
?>
<?php
    include '../layouts/header.php';
?>


    <?php
	$uid=$_GET['uid'];
	$dbc=mysqli_connect("localhost","root","root","systemphp");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$sql="select * from user where userid='$uid'";
	$result=mysqli_query($dbc,$sql);
	if(false === $result)
	{
		echo mysql_error();
	}
	$row = mysqli_fetch_assoc($result);
	?>
    <div class="d-flex align-items-center h-100 py-5">
<div class="container" style="width: 70rem;">

    <div class="card shadow p-3 mb-5 bg-white rounded">
    <form method="post" action="proupd.php?uid=<?php echo $uid;?>">
            <table class='table' id="table">
                <thead class='table-light text-center'>
                    <tr>
                        <th colspan='7'>Profile</th>
                    </tr>
                </thead>
                
                    <tr>
                    <td rowspan="3"><img src="../images/profile.png" width="200" height="250"></td>
                    <td>ID : <?=$row['userid'];?></td>
                    <td>Username : <input type="text" name="uname" value='<?=$row['username'];?>'></td>
                    <input type="hidden" name="upass" value='<?=$row['userpass'];?>'>
                </tr>
                <tr>
                    
                    <td colspan="">Email : <input type="text" name="umail" required value='<?=$row['usermail'];?>'></td>
                    
                    <td>Phone : <input type="text" name="uphone" value='<?=$row['userphone'];?>'></td>
                </tr>
                <tr>
                    
                    <td>Gender : <input type="radio" name="ugender" value="Male"> Male
                    <input type="radio" name="ugender" value="Female"> Female
                </td>
                    <td>Race : <input type="text" name="urace" value='<?=$row['userrace'];?>'></td>
                </tr>
                <tr>
                <td></td>
                <td colspan="2">Address : <input type="text" name="uadd"  value='<?=$row['useradd'];?>'></td>
                </tr>
                </table>
                <div class="d-grid gap-2">
                <input type="submit" class="btn btn-success btn-sm" name="btnsubmit" value="Update">
</div>
</form>
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