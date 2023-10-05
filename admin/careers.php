<?php
ob_start(); // Start output buffering
include 'navbar.php';

if (isset($_POST['submit'])) {
  include('../conn.php');

  $position = $_POST['position'];
  $branch = $_POST['branch'];
  $description = $_POST['description'];
  $created_at = date("Y-m-d h:i:s");

  // Truncate the description if it exceeds 1000 characters
  $description = substr($description, 0, 1000);

  $sql = "INSERT INTO careers (position, branch, description, created_at)
          VALUES ('$position', '$branch', '$description', '$created_at')";
  $conn->query($sql);

  $career_id = $conn->insert_id; // Get the auto-generated ID of the inserted career

  // Retrieve the qualifications from the form
  $qualifications = $_POST['qualifications'];
  $qualifications = substr($qualifications, 0, 500);

  $qualificationList = explode("\n", $qualifications);
  $qualificationList = array_map('trim', $qualificationList);

  // Insert each qualification into the qualifications table
  foreach ($qualificationList as $qualification) {
    if (!empty($qualification)) { // Insert only non-empty qualifications
      $sql = "INSERT INTO qualifications (career_id, qualification)
              VALUES ('$career_id', '$qualification')";
      $conn->query($sql);
    }
  }

  // Redirect to showCareer.php after successful insertion
  header('Location: showCareer.php');
  exit();
}
ob_end_flush(); // Flush the output buffer
?>

<main>
  <section class="header">
    <div class="content" style="margin-left: 280px;">
      <div class="container1">
        <div class="square">
          <h1 style="float:left"><i class="fa fa-briefcase"></i> Careers</h1>
          <h6 style="float:right"><?php echo date("Y.m.d") ?></h6>
          <br />
          <br />
          <hr />
          <div class="row">
            <form action="" method="post">
              <input type="hidden" name="id">
              <h6>Position:</h6><input type="text" class="form-control admin" name="position" placeholder="" required>

              <h6>Branch:</h6>
              <select name="branch">
                <option value="Makati">Makati</option>
                <option value="Bacolod">Bacolod</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Palawan">Palawan</option>
              </select>

              <h6>Job Description:</h6>
              <textarea class="form-control admin" name="description" rows="4" placeholder="" required oninput="checkDescriptionLength(this)"></textarea>
              <span id="descriptionLengthAlert" style="color: red; display: none;">The description should not exceed 1000 characters.</span>

              <h6>Qualifications (Press ENTER for each qualification):</h6>
              <textarea class="form-control admin" name="qualifications" rows="4" placeholder="" required oninput="checkQualificationsLength(this)"></textarea>
              <span id="qualificationsLengthAlert" style="color: red; display: none;">The qualifications should not exceed 500 characters.</span>

              <input type="hidden" name="created_at">

              <button type="submit" class="continue" name="submit">Post</button>
            </form>
            <hr />
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function checkDescriptionLength(textarea) {
      const description = textarea.value;
      const lengthAlert = document.getElementById('descriptionLengthAlert');

      if (description.length > 1000) {
        lengthAlert.style.display = 'block';
        textarea.value = description.substring(0, 1000); // Truncate the input to 1000 characters
      } else {
        lengthAlert.style.display = 'none';
      }
    }

    function checkQualificationsLength(textarea) {
      const qualifications = textarea.value;
      const lengthAlert = document.getElementById('qualificationsLengthAlert');

      if (qualifications.length > 500) {
        lengthAlert.style.display = 'block';
        textarea.value = qualifications.substring(0, 500); // Truncate the input to 500 characters
      } else {
        lengthAlert.style.display = 'none';
      }
    }
  </script>

</main>
