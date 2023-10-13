
<form action="" method="post">
	
	<div class="form-group">
		<div class="input-group">
			  <div class="input-group-btn">
				  <a id="down"  onclick=" down('0')"><span class="glyphicon glyphicon-minus">-</span></a>
			  </div>
			  <input type="text" id="myNumber" class="form-control input-number" value="1" name="qty" />
			  <div class="input-group-btn">
				  <a id="up" class="btn btn-default" onclick="up('100')"><span class="glyphicon glyphicon-plus">+</span></a>
			  </div>
		  </div>

	</div>
	
		  
	  <div class="text-center">
          	<button class="btn btn-warning btn-sm btn-block"  name="cart"> Add to Cart</button>
          </div>
</form>
<?php
include'admin/connection.php';
if(isset($_POST['cart'])){
	//$id=$_POST['id'];
	$qty=$_POST['qty'];
	$cart_sql="insert into cart (product_qty,cart_date) values($qty,NOW())";
	$cart_result=mysqli_query($conn,$cart_sql);
	if($cart_result){
		
			echo "<script>alert('Successfully inserted the product')</script>";
			echo "<script>window.open('test2.php','_self')</script>";
	}
		else{
			echo "<script>alert('Not Successfully inserted the product')</script>";
		}
		
	}


?>
 
</div>

<script>
      function up(max) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
    if (document.getElementById("myNumber").value >= parseInt(max)) {
        document.getElementById("myNumber").value = max;
    }
}
function down(min) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
    if (document.getElementById("myNumber").value <= parseInt(min)) {
        document.getElementById("myNumber").value = min;
    }
}

    </script>
 

        
