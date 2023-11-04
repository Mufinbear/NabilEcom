
<?php
    // $uname=$_POST['uname'];
    // $upass=$_POST['upass'];

    // //Connection to the server and database
    //     include '../config/connector.php';

    // $login="select * from user where username = '$uname' and userpass = '$upass'";
    // $chksql=mysqli_query($dbc,$login);
    // $row = mysqli_fetch_assoc($chksql);
    // $_SESSION['userid']=$row['userid'];
    // $chkrow=mysqli_num_rows($chksql); //check the number of rows
    // if($chkrow==1)
    // {
    //     echo '<script>window.location.assign("../pages/homepage.php");</script>';
    // }
    // else    
    // {
    //     session_destroy();
    //     echo '<script>alert("Login Failed");</script>';
    //     echo '<script>window.location.assign("userlogin.php");</script>';
    // }
?>

<?php
    session_start();
    include '../config/connector.php';

    $uname=$_POST['uname'];
    $upass=$_POST['upass'];

    if(isset($_POST['btnlogin'])){
        if(empty($uname) || empty($upass)){
            header("location:userlogin.php?Empty= Please fill in the blanks");
        }
        else{
            $query="select * from user where username = '$uname' and userpass = '$upass'";
            $result=mysqli_query($dbc,$query);
            $row=mysqli_fetch_assoc($result);
            if($row){
                $_SESSION['userid']=$row['userid'];
                $_SESSION['username']=$row['username'];
                header("location:../pages/homepage.php");
            }
            else
            {
                header("location:userlogin.php?Invalid= Please enter username and password");
            }
        }
    }
    else{
        echo "N";
    }
?>