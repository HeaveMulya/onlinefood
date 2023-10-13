<?php

if(isset($_POST['save']))
{
include 'connection.php';
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
//accessing images
$image=$_FILES['image']['name'];
$temp_img=$_FILES['image']['tmp_name'];
move_uploaded_file($temp_img,"../foodimage/$image"); 
$sql="insert into food_items (food_name,food_description,food_price,food_img,date) values('$name','$description','$price','$image',NOW())";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Successfully inserted the product')</script>";
    echo "<script>window.open('?food','_self')</script>";
}
else{
    echo "<script>alert('Not Successfully inserted the product')</script>";
}

}

?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
					<hr>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Food name</label>
							<input type="text" class="form-control" name="name" required>
						</div>
					
					</div>
					
					<div class="form-group row">
						<div class="col-md-10">
							<label for="" class="control-label">Food Description</label>
							<textarea name="description" class="form-control" cols="30" rows="5" required></textarea>
						</div>
					</div>
                    <div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Food Price</label>
							<input type="number" class="form-control" name="price" required>
						</div>
					
					</div>
                   
					
					<div class=" row form-group">
						<div class="col-md-5">
							<label for="" class="control-label">Food Image</label>
							<input type="file" class="form-control" name="image" required>
						</div>

						
					</div>
                    <br>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-sm btn-block btn-primary col-sm-2" name="save"> Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

