 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
</head>
<body>
	
<div class="card ">
	<?php include'view_prod.php';?>
<form action="add.php" method="post">
	<div class="form-group">
	<label>Quantity: </label>
		  <input type="hidden" name="id" value="<?php echo $id?>">

	</div>
	<div class="form-group">
		<div class="input-group">
			  <div class="input-group-btn">
				  <a id="down"  class="btn btn-outline-success" onclick=" down('0')"><span class="glyphicon glyphicon-minus">-</span></a>
			  </div>
			  <input type="text" id="myNumber" class="form-control input-number" value="1" name="qty" >
			  <div class="input-group-btn">
				  <a id="up" class="btn btn-outline-success" onclick="up('100')"><span class="glyphicon glyphicon-plus">+</span></a>
			  </div>
		  </div>

	</div>
	
		  
	  <div class="text-center">
          	<button type="submit" class="btn btn-warning btn-sm btn-block" > Add to Cart</button>
          </div>
</form>


</div>
 


<script src="incrementing.js"></script>
	
</body>
</html>





