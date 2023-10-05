<?php
include('../conn.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Fetch career details from the database
  $sql = "SELECT * FROM careers WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Retrieve updated data from the form
      $position = $_POST['position'];
      $branch = $_POST['branch'];
      $description = $_POST['description'];
      $qualifications = $_POST['qualifications'];

      // Validate and truncate the description to 1000 characters
      $description = substr($description, 0, 1000);

      // Validate and truncate the qualifications to 500 characters
      $qualifications = substr($qualifications, 0, 500);

      // Update the career record in the database
      $updateSql = "UPDATE careers SET position = '$position', branch = '$branch', description = '$description' WHERE id = $id";
      $conn->query($updateSql);

      // Update qualifications
      $deleteQualificationsSql = "DELETE FROM qualifications WHERE career_id = $id";
      $conn->query($deleteQualificationsSql);

      $qualificationsArr = explode(PHP_EOL, $qualifications);
      foreach ($qualificationsArr as $qualification) {
        $qualification = trim($qualification);
        if (!empty($qualification)) {
          $insertQualificationSql = "INSERT INTO qualifications (career_id, qualification) VALUES ($id, '$qualification')";
          $conn->query($insertQualificationSql);
        }
      }

      // Redirect back to the manage PO requests page
      header('Location: showCareer.php');
      exit();
    }
  } else {
    // Career with the specified ID not found
    echo "Career not found.";
    exit();
  }
} else {
  // No career ID specified
  echo "Invalid request.";
  exit();
}
?>

<?php include 'navbar.php'; ?>

<main>
  <div class="content" style="margin-left: 270px;">
    <section class="header" style="padding-top: 20px;">
      <div class="container">
        <h1 style="float: left">Edit Career</h1>
        <br>
        <br>
        <br>
        <hr style="border-top: solid 1px">
      </div>
    </section>

    <section>
      <div class="container">
        <form method="POST">
          <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $row['position']; ?>" required>
          </div>

          <div class="form-group">
            <label for="branch">Branch</label>
            <select name="branch" class="form-control">
              <option value="Makati" <?php if ($row['branch'] == 'Makati') echo 'selected'; ?>>Makati</option>
              <option value="Bacolod" <?php if ($row['branch'] == 'Bacolod') echo 'selected'; ?>>Bacolod</option>
              <option value="Iloilo" <?php if ($row['branch'] == 'Iloilo') echo 'selected'; ?>>Iloilo</option>
              <option value="Palawan" <?php if ($row['branch'] == 'Palawan') echo 'selected'; ?>>Palawan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="description">Job Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" maxlength="1000" required><?php echo $row['description']; ?></textarea>
            <small class="form-text text-muted">Maximum 1000 characters.</small>
          </div>

          <div class="form-group">
            <label for="qualifications">Qualifications (Press ENTER for each qualification):</label>
            <textarea class="form-control" id="qualifications" name="qualifications" rows="4" maxlength="500" required><?php echo getQualificationsText($id); ?></textarea>
            <small class="form-text text-muted">Maximum 500 characters.</small>
          </div>

          <button type="submit" class="btn btn-primary">Update Career</button>
        </form>
      </div>
    </section>
  </div>
</main>


<?php
function getQualificationsText($careerId) {
  include('../conn.php');
  $sql = "SELECT qualification FROM qualifications WHERE career_id = $careerId";
  $result = $conn->query($sql);
  $qualifications = '';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $qualifications .= $row['qualification'] . PHP_EOL;
    }
  }
  return $qualifications;
}
?>
