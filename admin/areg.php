<?php
//Step2
$aname=$_POST['aname'];
$apass=$_POST['apass'];
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
    $sql = "INSERT INTO admin (adminid,adminname,adminpass)
    VALUES (NULL,'$aname','$apass')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script>alert("New record created successfully.");</script>';
    echo '<script>window.location.assign("adminlogin.php");</script>';
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
