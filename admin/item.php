<?php
  include 'navbar.php';

  if(isset($_POST['next'])){
    include('../conn.php');

        $item_name = $_POST['item_name'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['unit'];
        $unit_price = $_POST['unit_price'];
        $item_description = $_POST['item_description'];
        $created_at=date("Y-m-d h:i:s");

        $sql = "INSERT INTO item (item_name, brand, model, quantity, unit, unit_price, item_description, created_at)
        VALUES ('$item_name', '$brand', '$model', '$quantity', '$unit', '$unit_price', '$item_description', '$created_at')";

        $conn->query($sql);
  }
?>

<div class="content purchasing-container">
  <section class="header">

    <form action="" method = "POST" id="regForm">
      <div class="container1" >
        <div class="square">
          <div class="tab">
            <h1 style="float:left"><i class="fa fa-shopping-cart"></i>Item Details</h1>
            <br/>
            <br/>
            <hr/>

            
              <div class="po_info">
                <input type="hidden" name="id">
              
                <label for=""><h6>Item Name:</h6></label>
                <input type="text" name="item_name" class="form-control admin" id="item_name" required>

                <label for=""><h6>Brand/Origin:</h6></label>
                <input type="text" name="brand" class="form-control admin" id="brand" required>

                <label for=""><h6>Model:</h6></label>
                <input type="text" name="model" class="form-control admin" id="model" required>

                <label for=""><h6>Quantity:</h6></label>
                <input type="text" name="quantity" class="form-control admin" id="quantity" required>

                <label for=""><h6>Unit:</h6></label>
                <input type="text" name="unit" class="form-control admin" id="unit" required>

                <label for=""><h6>Unit Price:</h6></label>
                <input type="text" name="unit_price" class="form-control admin" id="unit_price" required>

			          <label for=""><h6>Item Description:</h6></label>
                <textarea name="item_description" class="form-control admin" id="item_description" required></textarea>

                <input type="hidden" name="created_at">

                <button type="submit" name="next" class="next action-button">Next</button>

              </div>
            
          </div>
        </div>
      </div>

    </form>

  </section>

