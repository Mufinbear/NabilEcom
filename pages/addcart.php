<?php 
    session_start();
    include '../config/connector.php';

    if (isset($_SESSION['userid'])) {
    $userid=$_SESSION['userid'];
    $pid=$_POST['pid'];
    $pprice=$_POST['pprice'];
    $pqty=$_POST['pqty'];

    if($pqty>0){
    
    $tprice=$pprice*$pqty;
    $sql = "insert into cart (userid, productid, pcqty, tprice) values ('$userid', '$pid', '$pqty', '$tprice')";

    if (mysqli_query($dbc, $sql)) {
        header('location:../cart/cart.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($dbc);
    }
    else{
      Print '<script>alert("Please check your quantity before add to cart.");</script>';
		  Print '<script>window.location.assign("homepage.php");</script>';
    }
  
}
 
    
    ?>

    