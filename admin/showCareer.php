<?php
include 'navbar.php';

if (isset($_POST['delete'])) {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include('../conn.php');
    $sql = "DELETE FROM `careers` WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully.";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
}

?>
<main>
  <div class="content" style="margin-left: 270px;">
    <section class="header" style="padding-top: 20px;">
      <div class="container careers">
        <h1 style="float: left;">Careers</h1>
        <br>
        <br>
        <hr style="border-top: solid 1px">
      </div>
    </section>

    <section>
      <div class="container careers">
	      <button class="btn btn-secondary"><a href="careers.php">Create New</a></button>
        <div class="search-bar" style="float: right;">
          <form action="" method="POST">
            <input type="text" placeholder="Position or Branch" name="search">
            <button type="submit" name="submit">Search</button>
          </form>
        </div>

        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Position</th>
              <th>Branch</th>
              <th>Job Description</th>
              <th class="colbig">Qualifications</th>
              <th class="colbig">Action</th>
            </tr>
          </thead>
          <tbody>
			 
            <?php
            include('../conn.php');

            if (isset($_POST['submit'])) {
              $searchBox = $_POST['search'];
              $searchBox = filter_var($searchBox, FILTER_SANITIZE_STRING);

              $sql = "SELECT careers.id, careers.position, careers.branch, careers.description, GROUP_CONCAT(qualifications.qualification SEPARATOR '<br>') AS qualifications
              FROM careers
              LEFT JOIN qualifications ON careers.id = qualifications.career_id
              WHERE careers.position LIKE '%$searchBox%' OR careers.branch LIKE '%$searchBox%'
              GROUP BY careers.id";
            } else {
              $sql = "SELECT careers.id, careers.position, careers.branch, careers.description, GROUP_CONCAT(qualifications.qualification SEPARATOR '<br>') AS qualifications
              FROM careers
              LEFT JOIN qualifications ON careers.id = qualifications.career_id
              GROUP BY careers.id";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                  <td><?php echo $row['position']; ?></td>
                  <td><?php echo $row['branch']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo nl2br($row['qualifications']); ?></td>
                  <td class="action-careers">
                    <button class="edit">
                      <a href="editCareer.php?id=<?php echo $row['id']; ?>">Edit</a>
                    </button>
                    <form method="POST" action="showCareer.php?id=<?php echo $row['id']; ?>">
                      <button type="submit" name="delete" class="delete">Delete</button>
                    </form>
                  </td>
                </tr>
              <?php
            }
          } else {
            echo "<tr><td colspan='5'>No careers found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</div>
</main>

<!-- Link to jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Link to Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
