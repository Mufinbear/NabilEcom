<?php
    session_start();
    include '../config/connector.php';

    $aname=$_POST['aname'];
    $apass=$_POST['apass'];

    if(isset($_POST['btnlogin'])){
        if(empty($aname) || empty($apass)){
            header("location:adminlogin.php?Empty= Please fill in the blanks");
        }
        else{
            $query="select * from admin where adminname = '$aname' and adminpass = '$apass'";
            $result=mysqli_query($dbc,$query);
            $row=mysqli_fetch_assoc($result);
            if($row){
                $_SESSION['adminid']=$row['adminid'];
                $_SESSION['adminname']=$row['adminname'];
                header("location:adminhome.php");
            }
            else
            {
                header("location:adminlogin.php?Invalid= Please enter admin name and password");
            }
        }
    }
    else{
        echo "N";
    }
?>