<?php    
session_start();
if(!isset($_SESSION['admin_email']))
{
  echo "<script>window.open('login.php','_self')</script>";
}
else
{












?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

<div>
	<div class="top_header"><h1>Manage Your Content</h1></div>
	<div class="side_menu">
		<style>
.vertical-menu {
    width: 200px;
   margin-top: 90px;
    margin-right: -8px;
    position: fixed;
    right: 0;
    height: 100%;
    background: #eee;
    
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
    background: green;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}

</style>



<div class="vertical-menu">
  <span class="active" > MANAGE CONTENT</span>

  <a href="index.php?insert_product">Insert New Product</a>
  <a href="index.php?view_products">View All Products</a>
  <a href="index.php?insert_cat">Insert New Category</a>
  <a href="index.php?view_cats">View All Categories</a>
  <a href="index.php?insert_brand">Insert New Brand</a>
  <a href="index.php?view_brands">View All Brands</a>
  <a href="index.php?view_customers">View Customers</a>
  <a href="index.php?view_orders">View Orders</a>
  <a href="index.php?view_payments">View Payments</a>
  <a href="logout.php">Admin Logout</a>

 
</div>
	</div>
	<div class="content_area">
  <h2 style="text-align: center;"><?php echo @$_GET['logged_in'];   ?></h2>
		
	<?php 

	include("includes/db.php");
	if(isset($_GET['insert_product']))
	{
		include("insert_product.php");
	}

if(isset($_GET['view_products']))
	{
		include("view_products.php");
	}
	if(isset($_GET['edit_pro']))
	{
		include("edit_pro.php");
	}
  if(isset($_GET['insert_cat']))
  {
    include("insert_cat.php");
  }
  if(isset($_GET['view_cats']))
  {
    include("view_cats.php");
  }
if(isset($_GET['edit_cat']))
  {
    include("edit_cat.php");
  }
  if(isset($_GET['insert_brand']))
  {
    include("insert_brand.php");
  }
   if(isset($_GET['view_brands']))
  {
    include("view_brands.php");
  }
   if(isset($_GET['edit_brand']))
  {
    include("edit_brand.php");
  }

if(isset($_GET['view_customers']))
  {
    include("view_customers.php");
  }

if(isset($_GET['view_orders']))
  {
    include("view_orders.php");
  }
  if(isset($_GET['view_payments']))
  {
    include("view_payments.php");
  }



	 ?>


	</div>

</div>


</body>
</html>
<?php } ?>