<?php   

session_start();

if(isset($_GET['userlogout'])){
    session_destroy();
    header("location:../user/userlogin.php");
}
else if(isset($_GET['adminlogout'])){
    session_destroy();
    header("location:../admin/adminlogin.php");
}
// session_destroy(); //destroy the session
// echo '<script>alert("Account logout successfully.");</script>';
// echo '<script>window.location.assign("../user/userlogin.php");</script>';
// exit();
?>