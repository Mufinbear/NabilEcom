
<html>
<head>
     <?php
    include '../config/style.php';
     ?>
    <title>Admin Register</title>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center h-100">

        <form method="post" action="areg.php">
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
                    <td><input type="text" name="aname"></td>
                </tr>
                <tr>
                    <th>Password</thh>
                    <td><input type="password" name="apass"></td>
                </tr>
                <tr>
                    <th>Confirm Password</thh>
                    <td><input type="password" name="confirmapass"></td>

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
                        <a href="adminlogin.php">
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
