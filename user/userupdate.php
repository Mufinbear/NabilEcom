<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <title>Update User</title>
</head>

<body>
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
    <div class="d-flex align-items-center justify-content-center h-100">

        <form method="post" action="uupd.php?uid=<?php echo $uid;?>">
            <center>
                <table cellspacing="8" cellpadding="8" align="center">
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <h2>Update User</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="uname" required value='<?=$row['username'];?>'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="upass" required value='<?=$row['userpass'];?>'></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="umail" required value='<?=$row['usermail'];?>'></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="uphone" required value='<?=$row['userphone'];?>'></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <input type="submit" name="btnsubmit" value="Update">
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
</body>

</html>