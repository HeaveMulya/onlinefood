
<?php
include'admin/connection.php';
include'Function.php';
$ip = getIPAddress(); 
	$id=$_POST['id'];
	$qty=$_POST['qty'];
	$select_query="select * from cart where user_ip='$ip' and product_id=$id";
	$result_query=mysqli_query($conn,$select_query);
	$num_of_rows=mysqli_num_rows($result_query);
	if($num_of_rows>0 ){
		echo "<script>alert('This food is already inside cart')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	  }
	  else{
	$cart_sql="insert into cart (product_id,product_qty,user_ip,cart_date) values($id,$qty,'$ip',NOW())";
	$cart_result=mysqli_query($conn,$cart_sql);
		
			echo "<script>alert('Successfully inserted the product')</script>";
			echo "<script>window.open('index.php','_self')</script>";
	
		
		
	  }


?>

