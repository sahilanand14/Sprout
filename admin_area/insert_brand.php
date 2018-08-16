<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form style="width: 600px;margin:0 auto;margin-top: 150px;" action="" method="post">
<b>Insert New Brand</b>
<input type="text" name="brand_title" placeholder="Brand name" />
<input type="submit" name="insert_brand" value="Insert Brand" />



</form>
<?php
include("includes/db.php");
if(isset($_POST['insert_brand']))
{
	$brand_title=$_POST['brand_title'];
	$insert_brand="insert into brands (brand_title) values('$brand_title')";
	$run_brand=mysqli_query($con,$insert_brand);
	if($run_brand)
	{
		echo "<script>alert('New Brand has been inserted')</script>";
		echo "<script>window.open('index.php?view_brands','_self')</script>";
	}
}


?>

</body>
</html>