<?php
session_start();

// Check if user is logged in as is_admin=0
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0) {
    // Redirect to the login page
    header('location: PO.php');
    exit();
}

include 'navbar.php';

if (isset($_POST['next'])) {
    include('../conn.php');

    $branch = $_POST['branch'];
    $purch_num = $_POST['purch_num'];
    $project = $_POST['project'];
    $created_at = date("Y-m-d h:i:s");
    $team_leader = $_POST['team_leader'];
    $scope = $_POST['scope'];

    $sql = "INSERT INTO purchasing (branch, purch_num, project, created_at, team_leader, scope)
        VALUES ('$branch', '$purch_num', '$project', '$created_at', '$team_leader', '$scope')";

    $select = mysqli_query($conn, "SELECT * FROM `account` WHERE is_admin = 0");

    $conn->query($sql);
}
?>


<div class="content purchasing-container">
  <section class="header">

    <form action="" method = "POST" id="regForm">
      <div class="container1" >
        <div class="square">
          <div class="tab">
            <h1 style="float:left"><i class="fa fa-shopping-cart"></i>Create Purchasing Order</h1>
            <br/>
            <br/>
            <hr/>

            
              <div class="po_info">
                <input type="hidden" name="id">
              
                <label for="branch"><h6>Select Branch:</h6></label>
                <select name="branch" class="select2" id="branch" required>
                  <option value="Makati" class="dropdown-item">Makati</option>
                  <option value="Bacolod">Bacolod</option>
                  <option value="Iloilo">Iloilo</option>
                  <option value="Palawan">Palawan</option>
                </select>

                <label for=""><h6>Purchasing Order Number</h6></label>
                <input type="text" name="purch_num" class="form-control admin" required>

                <label for=""><h6>Project</h6></label>
                <input type="text" name="project" class="form-control admin" required>

                <label for=""><h6>Team Leader: </h6></label>
                <input type="text" name="team_leader" id="team_leader" class="form-control admin" placeholder="Full Name" required >

                <label for=""><h6>Scope: </h6></label>
                <input type="text" name="scope" id="scope" class="form-control admin" placeholder="Input scope" required >

                <input type="hidden" name="created_at">

                <button type="submit" name="next" class="next action-button">Next</button>

              </div>
            
          </div>
        </div>
      </div>

    </form>

  </section>

