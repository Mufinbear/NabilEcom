<?php
 session_start();
//Step2
if (isset($_SESSION['userid'])) {

$uid=$_SESSION['userid'];
$orderadd=$_POST['orderadd'];
$payment=$_POST['payment'];
$gtotal=$_POST['gtotal'];
$cartid=$_POST['cartid'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "systemphp";
?>
<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `orders` (orderid, userid, orderadd, payment, gtotal,cartid)
    VALUES (NULL,'$uid','$orderadd','$payment','$gtotal','$cartid')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script>alert("New Order created successfully.");</script>';
    echo '<script>window.location.assign("checkout.php");</script>';
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}
?>
