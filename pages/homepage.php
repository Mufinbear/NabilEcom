<?php
    session_start();

    if(isset($_SESSION['userid']))
    {
?>
<?php
    include '../layouts/header.php';
?>

<div class="container">
    <div class="row mt-5">
        <?php 
  			include '../config/connector.php';
  			$stmt = $dbc->prepare('select * from product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
        <div class=" col-md-4 col-lg-2 mb-2">
            <div class="card">
                <div class="">
                    <img src=../images/<?php echo $row['productimg'] ?> class="card-img-top" height="250">
                    <div class="card-body p-1">
                        <h4 class="card-title text-center text-dark d-inline-block text-truncate"
                            style="max-width: 190px;"><?= $row['productname'] ?></h4>
                        <h5 class="card-text text-center text-success">
                            RM&nbsp;<?= number_format($row['productprice'],2) ?>
                        </h5>
                    </div>
                    <div class="card-footer p-1">
                        <form method='post' action="addcart.php">
                            <div class="row p-2">
                                <div class="col-md-6 py-1 pl-4">
                                    <b>Quantity: </b>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="pqty" value="0">
                                </div>
                            </div>
                            <input type="hidden" name="pid" value="<?= $row['productid'] ?>">
                            <input type="hidden" name="pprice" value="<?= $row['productprice'] ?>">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-success btn-block">
                                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Add to cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>


<?php
    include ('../layouts/footer.php');
?>
<?php
     }
     else{
         header("location:../user/userlogin.php");
     }
?>