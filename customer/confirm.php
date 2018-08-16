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









 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form  action="confirm.php?update_id=<?php echo $order_id; ?>&&due_amount=&&invoice_no=" method="post">
 <table width="1000" align="center" border="2" bgcolor="#CCCCCC">
 	<tr align="center">
 		<td colspan="5"><h2>Please confirm your Payment</h2></td>
 	</tr>
 	<tr>
 		<td align="right">Invoice No:</td>
 		<td><input  type="text" name="invoice_no" value='<?php echo "$invoice_no"; ?>' /></td>
 	</tr>
 	 	<tr>
 		<td align="right">Amount Sent:</td>
 		<td><input  type="text" name="amount" value="<?php echo "$due_amount"; ?>" /></td>
 	</tr>
 	<tr>
 		<td align="right">Select Payment Mode:</td>
 		<td><select name="payment_method">
 			<option>Select Payment</option>
 			<option>Bank Transfer</option>
 			<option>Ubl</option>
 			<option>Western Union</option>
 			<option>PayPal</option>
 		</select></td>
 	</tr>
 	<tr>
 		<td align="right">Transaction/Reference Id:</td>
 		<td><input type="text" name="tr" /></td>
 	</tr>
 	<tr>
 		<td align="right">Ubl:</td>
 		<td><input type="text" name="code" /></td>
 	</tr>
 	 	<tr>
 		<td align="right">Payment Date:</td>
 		<td><input type="text" name="date" /></td>
 	</tr>
 	 	<tr align="center">
 		
 		<td colspan="5"><input type="submit" name="confirm" value="Confirm Payment" /></td>
 	</tr>

 	
 	
 </table>
 	







 </form>
 
 </body>
 </html>
 <?php 

if(isset($_POST['confirm']))
{	$update_id=$_GET['update_id'];
	$invoice=$_POST['invoice_no'];
	$amount=$_POST['amount'];
	$payment_method=$_POST['payment_method'];
	$ref_no=$_POST['tr'];
	$code=$_POST['code'];
	$date=$_POST['date'];
	$complete='complete';

	$insert_payment="insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values('$invoice','$amount','$payment_method','$ref_no','$code','$date')";
	$run_payment=mysqli_query($con, $insert_payment);
		$update_order="update customer_orders SET order_status='$complete' WHERE order_id='$update_id'";
	$run_order=mysqli_query($con, $update_order);
	$update_pending_orders="delete from pending_orders where invoice_no='$invoice'";
	$run_pending_orders=mysqli_query($con,$update_pending_orders);
	if($run_payment)
	{
		echo "<h2 style='text-align:center;'>Payment received, your order will be completed within 24 hours</h2>";

	}


}




  ?>