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

    <!-- <link rel="stylesheet" href='<?=baseurl.'css/style.css'?>'> -->
</head>

<body> 
    <header>
        <nav class="navbar bg-light">

            <div class="container-fluid">
                <a class="navbar-brand" href="../pages/homepage.php"><i
                        class="fa-solid fa-mug-hot"></i>&nbspapebende.com</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" id="myInput" onkeyup="myFunction()"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary btn-sm" type="submit">Search</button>
                </form>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="../cart/cart.php"><i
                                class="fa-sharp fa-solid fa-cart-shopping text-dark"></i>
                            <span class="position-absolute top-1 start-1 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span></a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-bars text-dark"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="../pages/profile.php"><i
                                        class="fa-sharp fa-solid fa-user"></i>&nbsp&nbsp<?php echo ($_SESSION['username']); ?></a>
                            </li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php?userlogout">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="min-vh-100">