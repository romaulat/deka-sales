<?php
  include 'navbar.php';

  if(isset($_POST['next'])){
    include('../conn.php');

        $created_at=date("Y-m-d h:i:s");
        $date = $_POST['date'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $barangay = $_POST['barangay'];
        $street_name = $_POST['street_name'];
        $street_number = $_POST['street_number'];

        $sql = "INSERT INTO delivery (date, province, city, barangay, street_name, street_number, created_at)
        VALUES ('$date', '$province', '$city', '$barangay', '$street_name', '$street_number', '$created_at')";

        $conn->query($sql);
  }
?>

<div class="content purchasing-container">
  <section class="header">

    <form action="" method = "POST" id="regForm">
      <div class="container1" >
        <div class="square">
          <div class="tab">
            <h1 style="float:left"><i class="fa fa-truck"></i>Delivery Information</h1>
            <br/>
            <br/>
            <hr/>

            
              <div class="po_info">
                <input type="hidden" name="id">
              
                <label for=""><h6>Date Needed: </h6></label>
                <input type="date" name="date" class="supp form-control admin" id="date" required>

                <label for=""><h6>Province:</h6></label>
                <input type="text" name="province" class="form-control admin" id="province" required>

                <label for=""><h6>City: </h6></label>
                <input type="text" name="city" class="form-control admin" id="city" required>

                <label for=""><h6>Barangay:</h6></label>
                <input type="text" name="barangay" class="form-control admin" id="barangay" required>

                <label for=""><h6>Street Number:</h6></label>
                <input type="text" name="street_number" class="form-control admin" id="street_number" required>

                <label for=""><h6>Street Name:</h6></label>
                <input type="text" name="street_name" class="form-control admin" id="street_name" required>

                <input type="hidden" name="created_at">

                <button type="submit" name="next" class="next action-button">Next</button>
              </div>
            
          </div>
        </div>
      </div>

    </form>

  </section>
