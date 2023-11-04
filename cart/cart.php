<?php
    session_start();

    if(isset($_SESSION['userid']))
    {
?>
<?php
    include '../layouts/header.php';
?>

<div class="container py-5">
<h4 class="text-center text-dark py-1"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp&nbspCart</h4>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive mt-2">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>
                                <a href="delete.php?clear=all" class="btn btn-danger"
                                    onclick="return confirm('Are you sure want to clear your cart?');"><i
                                        class="fas fa-trash"></i>&nbsp&nbspClear Cart</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                include '../config/connector.php';
                $userid=$_SESSION['userid'];
                $counter=NULL;
                $grand_total=NULL;
                $sql ="select * from cart join product on cart.productid=product.productid where cart.userid=$userid";
				$result = mysqli_query($dbc,$sql);
				while($row = mysqli_fetch_assoc($result)){
              ?>
                        <tr>
                            <td><?php echo $counter += 1 ?></td>
                            <input type="hidden" class="pid" value="<?= $row['productid'] ?>">
                            <td><img src="../images/<?= $row['productimg'] ?>" width="100"></td>
                            <td><?= $row['productname'] ?></td>
                            <td>
                                RM&nbsp<?= number_format($row['productprice'],2); ?>
                            </td>
                            <input type="hidden" class="pprice" value="<?= $row['productprice'] ?>">
                            <td>
                            <?= number_format($row['pcqty']); ?>
                            </td>
                            <td>RM&nbsp<?= number_format($row['tprice'],2); ?></td>
                            <td>
                                <a href="../cart/delete.php?cid=<?= $row['cartid'] ?>" class="text-danger lead"
                                    onclick="return confirm('Are you sure want to remove this item?');"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $grand_total += $row['tprice'];
                        $_SESSION['$grand_total']=$grand_total; ?>
                        <?php } ?>

                        <tr>
                            <td colspan="2">
                                <a href="../pages/homepage.php" class="btn btn-success"><i
                                        class="fas fa-cart-plus"></i>&nbsp&nbspContinue Shopping</a>
                            </td>
                            <td>
                            </td>
                            <td colspan="2"><b>Total</b></td>
                            <td><b>RM</i>&nbsp&nbsp<?= number_format($grand_total,2); ?></b></td>

                            <td>
                                <a href="../cart/checkout.php" class="btn btn-success"><i class="far fa-credit-card"></i>&nbsp&nbspCheckout</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
    include '../layouts/footer.php';
?>
<?php
     }
     else{
         header("location:../user/userlogin.php");
     }
?>