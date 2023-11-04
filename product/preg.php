<?php
//Step2
$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$pprice=$_POST['pprice'];
$pqty=$_POST['pqty'];
$pdetails=$_POST['pdetails'];
$pimg=$_POST['pimg'];
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
    $sql = "INSERT INTO product (productid,productname, producttype, productprice, productqty, productdetails,productimg)
    VALUES (NULL,'$pname', '$ptype', '$pprice', '$pqty', '$pdetails','$pimg')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script>alert("New product created successfully.");</script>';
    echo '<script>window.location.assign("../admin/ productdetails.php");</script>';
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>