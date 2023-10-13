
      <div class="container-fluid">

        <div class="section-title">
          <h2>Explore Our Delicious <span>Menu</span></h2>
        </div>
        <div class="row">
        <?php 
        include'admin/connection.php';
        $query = "select * from food_items";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)){
          $id = $row['food_id'];
          $name =  $row['food_name'];
          $description=$row['food_description'];
          $img=$row['food_img'];
          $price=$row['food_price'];

          echo "
          <div class='col-md-4'>
          <div class='card   rounded-3'>
          
          
                                  <div class='position-relative overflow-hidden' id='item-img-holder'>
                                  <span class='badge badge-success'>$price</span>
                                  <img class='card-img-top' src='./foodimage/$img' alt='$name' height=250px width=100%>
                                  </div>
                                  <div class='card-body rounded-0'>
                                    <h5 class='card-title'>$name</h5>
                                    <p class='card-text truncate'>$description</p>                      
              <div class='d-grid gap-2'>
              <button data-id='".$id."' class='btn btn-success btn-sm btn-popup'>View</button>
          </div>
           
                                        
                                    
                                  
                                   
                                  </div>
                                  
                                </div>
                                <br>
                      </div>
                    
          ";
        }
        ?>
       
           
        </div>


      </div>
   


   
