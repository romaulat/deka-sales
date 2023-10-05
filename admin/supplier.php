<?php
  include 'navbar.php';

  if(isset($_POST['next'])){
    include('../conn.php');

        $supplier = $_POST['supplier'];
        $contact_no = $_POST['contact_no'];
        $contact_person = $_POST['contact_person'];
        $created_at=date("Y-m-d h:i:s");

        $sql = "INSERT INTO supplier (supplier, contact_no, contact_person, created_at)
        VALUES ('$supplier', '$contact_no', '$contact_person', '$created_at')";

        $conn->query($sql);
  }
?>

<div class="content purchasing-container">
  <section class="header">

    <form action="" method = "POST" id="regForm">
      <div class="container1" >
        <div class="square">
          <div class="tab">
            <h1 style="float:left"><i class="fa fa-handshake"></i>Supplier Information</h1>
            <br/>
            <br/>
            <hr/>

            
              <div class="po_info">
                <input type="hidden" name="id">
              
                <label for=""><h6>Supplier:</h6></label>
                <input type="text" name="supplier" class="form-control admin" id="supplier" placeholder="" required>

                <label for=""><h6>Contact Number:</h6></label>
                <input type="text" name="contact_no" class="form-control admin" id="contact_no" placeholder="" required>

                <label for=""><h6>Contact Person:</h6></label>
                <input type="text" name="contact_person" class="form-control admin" id="contact_person" placeholder="" required>

                <input type="hidden" name="created_at">

                <button type="submit" name="next" class="next action-button">Next</button>

              </div>
            
          </div>
        </div>
      </div>

    </form>

  </section>

