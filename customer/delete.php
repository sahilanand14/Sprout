<?php 

session_start();
include("includes/db.php");


if(isset($_GET['order_id']))
{
	$order_id=$_GET['order_id'];
	

}
if(isset($_GET['invoice_no']))
{
	$invoice_no=$_GET['invoice_no'];
	

}
if(isset($_GET['due_amount']))
{
	$due_amount=$_GET['due_amount'];
	

}
if(isset($_GET['date']))
{
	$date=$_GET['date'];
	

}
 $newdate= date('Y-m-d H:i:s');
            
            $datetime1 = strtotime($date);
             $datetime2 = strtotime($newdate);
             $secs = $datetime2 - $datetime1;
             $days = $secs / 86400;
     if($days<4)
       {     
       echo "$days"; 	

$delete_order="delete from customer_orders where invoice_no='$invoice_no'";
$delete_pending="delete from pending_orders where invoice_no='$invoice_no'";
$delete_payment="delete from payments where invoice_no='$invoice_no'";
$run_pending_orders=mysqli_query($con,$delete_pending);
$run_orders=mysqli_query($con,$delete_order);
$run_payments=mysqli_query($con,$delete_payment);
echo "<script type='text/javascript'>alert('Order Cancelled Successfully');</script>";
 echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Sorry! Order cancellation not allowed after 4 days. ');</script>";
	echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}





?>