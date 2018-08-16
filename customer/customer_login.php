<?php 

@session_start();
include("includes/db.php");


 ?>
<div>
	

<h2>LOGIN </h2>
<form  style="margin-top: 100px;" action="checkout.php" method="post">
	<table width="400" bgcolor="#66CCCC" align="center">
	<tr align="center">
		<td colspan="3"><h2>LOGIN </h2>
</td>
	</tr>
	<tr >
          <!-- <td align="right"><b>Your Email:</b></td> -->
          <td style="padding: 0px 30px;"><input type="text" name="c_email" required placeholder="username" style="width: 100%;padding: 10px 0px 10px 6px;font-size: 20px;" /></td>
    </tr>
    <tr></tr>
<tr>    
<!-- <td align="right"><b>Your Password:</b></td> -->
<td style="padding: 8px 30px;"><input type="password" name="c_pass" required placeholder="password" style="width: 100%;padding: 10px 0px 10px 6px;font-size: 20px;"/></td>
</tr>

<tr align="center">
<td style="padding: 0px 30px;" colspan="3"><input type="submit" name="c_login" value="Login" style="width: 100%;padding: 10px 0px 10px 6px;font-size: 20px;"/></td>
</tr>
<tr align="center">
	<td colspan="3" ><a  href="forgot_pass.php">Forgot Password</a></td>
</tr>
<tr>
	<td colspan="3"><a  style="text-decoration: none;float: right;" href="customer_register.php">Create Account</a></td>
</tr>

</table>


</form>

</div>
<?php 
	if(isset($_POST['c_login']))
	{
		$customer_email=$_POST['c_email'];
		$customer_pass=$_POST['c_pass'];
		$sel_customer="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
		$run_customer=mysqli_query($con, $sel_customer);
		$check_customer=mysqli_num_rows($run_customer);
		$get_ip=getRealIpAddr();
		$sel_cart="select * from cart where ip_add='$get_ip'";
		$run_cart=mysqli_query($con, $sel_cart);
		$check_cart=mysqli_num_rows($run_cart);
		if($check_customer==0)
		{
			echo "<script>alert('Incorrect password or E-mail!')</script>";
			exit();

		}
		if($check_customer==1 AND $check_cart==0)  //if cart is empty and customer logs in.
		{
			$_SESSION['customer_email']=$customer_email;
			echo "<script>window.open('customer/my_account.php','_self')</script>";
		}
		else
		{	$_SESSION['customer_email']=$customer_email;
			echo "<script>alert('You have Successfully Logged In!')</script>";
			include("payment_options.php");
			
		}

	}

 ?>