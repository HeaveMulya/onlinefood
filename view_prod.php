<?php
include('admin/connection.php');
if(isset($_POST['custId'])){
	$id = $_POST['custId'];
	$sql = "select * from food_items where food_id=".$id;
	$result = mysqli_query($conn,$sql);
	while( $row = mysqli_fetch_array($result) ){
		$id = $row['food_id'];
		$name = $row['food_name'];
		$description = $row['food_description'];
		$img=$row['food_img'];
		echo "
		<img src='./foodimage/$img' alt='$name' class='card-img-top' height=300px>
        <div class='card-body'>
          <h5 class='card-title'>$name</h5>
          <p class='card-text truncate'>$description</p>
		  </div> "; } }
?>