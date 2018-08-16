 <?php 
 session_start();
 include("includes/db.php");
 include("functions/functions.php");
?>
    <html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="myntra1.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
   
</head>

<body>
    <div>
        <!-- header -->
        <div id="fixed-header" style="padding-bottom: 10px">
            <div class="logo-align"><a href="../index.php"><img src="photos\sprout.png" width="90px"></a></div>
           
            
           
        </div>
        <!-- header -ends-->

        <!-- <div id="subheader">
                    <?php 
                    cart();
                    ?>
             <div id="headline">
                 <div id="headline_content">

                 <?php

                    if(!isset($_SESSION['customer_email']))
                    {
                        echo "<b>Welcome Guest</b><b>Shopping Cart </b>";
                    }
                    else
                    {
                        echo "<b>Welcome:" .$_SESSION['customer_email']. "</b>"."<b> Your Cart </b>";
                    }
                     
                     ?>
                     
                     <span>-Total Items:<?php items(); ?> - Total Price:<?php total_price(); ?>-<a href="cart.php" style="color: yellow;">Go to Cart</a>
                     &nbsp;

                     <?php 
                     if(!isset($_SESSION['customer_email']))
                     {
                          echo " <a href='checkout.php' style='color: #F93;'>Login</a>";


                    }
                    else
                    {

                        echo "<a href='logout.php' style='color: #F93;'>Logout</a>";
                    }
                     ?></span>

                 </div>
             </div>


        </div> -->
        <style>
.vertical-menu {
    width: 200px;
   margin-top: 140px;
   height: 100px;
    margin-right: -8px;
    position: fixed;
    right: 0;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>



<div class="vertical-menu">
 <?php 
    
    
        $customer_session=$_SESSION['customer_email'];
        $get_customer_pic="select * from customers where customer_email='$customer_session'";
        $run_customer=mysqli_query($con, $get_customer_pic);
        $row_customer=mysqli_fetch_array($run_customer);
        $customer_pic=$row_customer['customer_image'];
        echo "<img src='customer_photos/$customer_pic' width='180' height='180' ";


   ?>
  <span class="active" >MANAGE ACCOUNT:</span>

  <a href="my_account.php">Home</a>
  <a href="my_account.php?my_orders">My orders</a>
  <a href="my_account.php?edit_account">Edit profile</a>
  <a href="my_account.php?change_pass">change Password</a>
  <a href="my_account.php?delete_account">Delete account</a>
   <a href="logout.php">Logout</a>

</div>
<div id="subheader">
                    <?php 
                    cart();
                    ?>
             <div id="headline">
                 <div id="headline_content">

                 <?php

                    if(isset($_SESSION['customer_email']))
                    {
                        echo "<b>Welcome:"."</b> &nbsp;" ." <b style='color:yellow;'>". $_SESSION['customer_email']."</b>";
                    }
                   
                     
                     ?>
                     
                    
                   </span>

                 </div>
             </div>


        </div>




           

        <!-- products from here -->
        <div style=" padding-top:116px;text-align: center;width: 86.5%;">
        <h2></h2>
        <?php   getDefault();  ?>

        <?php 
        if(isset($_GET['my_orders']))
        {
            include("my_orders.php");
        }

          if(isset($_GET['edit_account']))
        {
            include("edit_account.php");
        }

  if(isset($_GET['change_pass']))
        {
            include("change_pass.php");
        }
        if(isset($_GET['delete_account']))
        {
            include("delete_account.php");
        }


         ?>

          
           
        </div>

       
    </div>
</body>

</html>