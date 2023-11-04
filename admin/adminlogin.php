
<?php session_start(); ?>
<html>

<head>
    <?php
    include '../config/style.php';
     ?>
    <title>Admin Login</title>
</head>
<body>
    <?php 
        if(@$_GET['Empty']==true) 
        {
    ?>
        <div class="alert alert-${type} alert-dismissible alert-danger" role="alert"><div class="text-center"><?php echo $_GET['Empty']?></div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    <?php
        }
    ?>
    <?php 
        if(@$_GET['Invalid']==true) 
        {
    ?>

        <div class="alert alert-danger text-center"" role="alert"><?php echo $_GET['Invalid']?></div>

    <?php
        }
    ?>
    <div class="d-flex align-items-center justify-content-center h-100 ">
    <div class="container " style="width: 25rem;">
    
    <div class="card text-center shadow p-3 mb-5 bg-white rounded">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="../user/userlogin.php">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="../admin/adminlogin.php">Admin</a>
      </li>
    </ul>
  </div>
  <div class="container" style="width: 20rem;">
    
        <form class="mb-5 mt-5 ml-5 mr-5" method="post" action="asin.php">
            <table cellspacing="8" cellpadding="8">
                <tr>
                    <td colspan='2'>
                    <h2 class="text-center py-3"><i class="fa-solid fa-mug-hot"></i>&nbspapebende.com</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                            <center>Please login your Account</center>
                    </td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="aname"></td>
                </tr>
                <tr>
                    <th>Password</thh>
                    <td><input type="password" name="apass" id="uhidepass"><br>
                        <input type="checkbox" onclick="pass()">Show Password
                        <script>
                        function pass() {
                            var x = document.getElementById("uhidepass");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="btnlogin" value="Login">
                            <input type="reset" name="btnreset" value="Reset">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="https://bongo.cat/">
                            <center>nak apa semua kita bagi</center>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
    </div>
    </div>
</body>

</html>

<!-- <center>
  <h1>Login</h1>
  <form action="usup.php" method="POST">
    Username: <input type="text" name="uname"><br>
    Password: <input type="text" name="upass"><br>
      <br><input type="submit" value="Login"><br>
      <br><a href="userregister.php">Click here if takde account</a>
    </form>
</center> -->