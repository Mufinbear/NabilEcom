<?php
    session_start();

    if(isset($_SESSION['userid']))
    {
?>
<?php
    include '../layouts/header.php';
?>


<?php
			//Connection to the server and database
			include '../config/connector.php';
            $uid=$_SESSION['userid'];
            $gtotal=$_SESSION['$grand_total'];
            $sql ="select * from cart join user on cart.userid=user.userid where cart.userid=$uid";
			// $sql ="select * from user where userid='$uid'";
			$result = mysqli_query($dbc,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
?>
 
 <div class="d-flex align-items-center justify-content-center h-100">
 <div class="card p-4 mt-5" style="width: 70rem;"> 
        <form method="post" action="cout.php">
            <center>
                <div class="col-sm-10 p-3">
                <h4>Complete Your Order</h4>
                </div>
                <input type="hidden" name="cartid" value="<?= $row['cartid'] ?>">
                <input type="hidden" name="gtotal" value="<?= $gtotal ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 p-3 col-form-label">Name</label>
                    <div class="col-sm-10 p-3">
                    <input type="text" class="form-control" name="name" value="<?= $row['username'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 p-3 col-form-label">Email</label>
                    <div class="col-sm-10 p-3">
                    <input type="email" class="form-control" name="email" value="<?= $row['usermail'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 p-3 col-form-label">Phone</label>
                    <div class="col-sm-10 p-3">
                    <input type="text" class="form-control" name="phone" value="<?= $row['userphone'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="orderadd" class="col-sm-2 p-3 col-form-label">Address</label>
                    <div class="col-sm-10 p-3">
                    <input required type="text" class="form-control" name="orderadd" value="<?= $row['useradd'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="payment" class="col-sm-2 p-3 col-form-label">Payment method</label>
                <div class="col-sm-10 p-3">
                <select name="payment" class="form-control" placeholder="Select Payment Method">
                    <option value="cod">Cash On Delivery</option>
                    <option value="netbanking">Online Banking</option>
                    <option value="cards">Debit/Credit Card</option>
                </select>
                </div>
                </div>
                
                <div class="d-grid gap-2 pt-3">
                    <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Pay</button>
                </div>
            </center>
        </form>
    </div>
    <?php  ?>
<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tank You !</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="form-group row">
                    <h1 class="fs-6">Your Order Placed Successfully.</h1>
                </div>
                <div class="form-group row">
                    <label for="email" class=""><?= $row['username'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="email" class=""><?= $row['usermail'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="phone" class=""><?= $row['userphone'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="address" class=""><?= $row['useradd'] ?></label>
                </div>
      </div>
      <div class="modal-body">
        <h1 class="modal-title fs-6" id="exampleModalLabel">Your items purchased :-</h1>
        <?php 
                $i=1;
                $sql ="select * from cart join product on cart.productid=product.productid where cart.userid=$uid";
                $result = mysqli_query($dbc,$sql);
                while($row = mysqli_fetch_assoc($result)){
        ?>
        
                <div class="form-group row">
                    <label><?= $i++.'. '.$row['productname'].' x'.number_format($row['pcqty']); ?></label>
                </div>
        <?php
        }
        ?>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Back to homepage</button>
      </div>
    </div>
  </div>
</div>

<?php
    include '../layouts/footer.php';
?>
<?php
    }
     }
     else{
         header("location:../user/userlogin.php");
     }
?>