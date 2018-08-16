
<!DOCTYPE html>
<html>
<head>
	<title>payment options</title>
</head>
<body>
<?php @session_start();
include("includes/db.php");
 



 ?>




<div align="center" style="padding-top:139px;">
<h2>Payments options for you</h2>
<?php 

$ip=getRealIpAddr();
$cust=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_ip='$ip' AND customer_email='$cust' ";
$run_customer=mysqli_query($con, $get_customer);
$customer=mysqli_fetch_array($run_customer);
$customer_id=$customer['customer_id'];

 ?>
<b>Pay with</b><br><a href="http://www.paypal.com"><img src="photos/paypal.png" ></a><b><br>Or<br><br> <a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Offline</a></b>















</div>
</body>
</html>
