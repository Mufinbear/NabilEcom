<?php
define('baseurl','http://localhost/php/systemphp/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../config/style.php';
     ?>
    <title>apebende.com</title>
</head>

<body>
    <header>
        <nav class="navbar bg-light">

            <div class="container-fluid">
                <a class="navbar-brand" href="../admin/adminhome.php"><i
                        class="fa-solid fa-mug-hot"></i>&nbspapebende.com</a>
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=baseurl.'admin/userdetails.php'?>"><i
                                class="fa-sharp fa-solid fa-user"></i>&nbspUser Details</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="<?=baseurl.'admin/productdetails.php'?>"><i
                                class="fa-sharp fa-solid fa-clipboard"></i>&nbspProduct Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=baseurl.'admin/orderdetails.php'?>"><i
                                class="fa-solid fa-truck"></i>&nbspOrder Details</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-bars text-dark"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#"><i
                                        class="fa-sharp fa-solid fa-user"></i>&nbsp&nbsp<?php echo ($_SESSION['adminname']); ?></a>
                            </li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php?adminlogout">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="min-vh-100">