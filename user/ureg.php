<?php
//Step2
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$confirmupass=$_POST['confirmupass'];
$umail=$_POST['umail'];
$uphone=$_POST['uphone'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "systemphp";
?>
<?php

if($upass==$confirmupass){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (userid,username, userpass, usermail, userphone)
    VALUES (NULL,'$uname', '$upass', '$umail', '$uphone')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script>alert("New record created successfully.");</script>';
    echo '<script>window.location.assign("userlogin.php");</script>';
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}else{
  header("location:userregister.php?Unmatched= Your password is not match");
}
