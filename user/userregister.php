<html>

<head>
    <?php
    include '../config/style.php';
     ?>
    <title>User Register</title>
</head>

<body>
    <?php 
        if(@$_GET['Unmatched']==true) 
        {
    ?>
    <div class="alert alert-${type} alert-dismissible alert-danger" role="alert">
        <div class="text-center"><?php echo $_GET['Unmatched']?></div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        }
    ?>
    <div class="d-flex align-items-center justify-content-center h-100">

        <form method="post" action="ureg.php">
            <table cellspacing="8" cellpadding="8" align="center">
                <tr>
                    <td colspan="2">
                        <h2>
                            <center>Register Account</center>
                        </h2>
                    </td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <th>Password</thh>
                    <td><input type="password" name="upass"></td>
                </tr>
                <tr>
                    <th>Confirm Password</thh>
                    <td><input type="password" name="confirmupass"></td>

                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="umail"></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><input type="text" name="uphone"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="btnsubmit" value="Register">
                            <input type="reset" name="btnreset" value="Reset">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="userlogin.php">
                            <center>log in account</center>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<!-- <center>
  <h1>Register</h1>
    <form action="ureg.php" method="post">
      Username: <input type="text" name="uname"><br>
      Password: <input type="text" name="upass"><br>
      <br><input type="submit" value="Register">
    </form>
</center> -->