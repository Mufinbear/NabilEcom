<?php
    session_start();

    if(isset($_SESSION['adminid']))
    {
?>
<?php
    include '../layouts/aheader.php';
?>
        <!-- asasdasd -->
        <div class="container" align='center'>
            
        </div>
    
<?php
    include '../layouts/footer.php';
?>
<?php
     }
     else{
         header("location:../admin/adminlogin.php");
     }
?>