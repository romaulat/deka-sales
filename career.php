<?php
  include 'header.php';
?>
<style>
  section{
    padding: 2rem 7%;  
  }
</style>

<main>
  <section class="careers-image">
        <div class="careers-image-content container">
            <div class="careers-text">
                <h1 class="animate">Careers</h1>
                <p class="animate">Designed For Careers, Engineered To Last.</p>
            </div>
        </div>
    </section>


  <section class="why" id="why">
    <h6>WHY <span class="text">DEKA SALES?</span></h6>
    <p>We believe in teamwork towards <span class="text">D</span>edicated, <span class="text">E</span>fficient,
    and <span class="text">K</span>een <span class="text">A</span>ctions to deliver <span class="text">S</span>afety, <span class="text">A</span>bove-Standard, and
    <span class="text">L</span>asting customer relationship through <span class="text">E</span>mpowered
    <span class="text">S</span>ervice.

    <div class="container-deka">
      <div class="row-deka">

        <div class="deka-details">
          <i class="fas fa-handshake" id="red"></i>
          <p>Dedicated</p>
        </div>

        <div class="deka-details">
          <i class="fas fa-clock" id="blue"></i>
          <p>Efficient</p>
        </div>

        <div class="deka-details">
          <i class="fa fa-eye" id="red"></i>
          <p>Keen Actions</p>
        </div>

        <div class="deka-details">
          <i class="fa fa-medkit" id="blue"></i>
          <p>Safety</p>
        </div>

        <div class="deka-details">
          <i class="fa fa-star" id="red"></i>
          <p>Above-Standard</p>
        </div>

        <div class="deka-details">
          <i class="fas fa-users" id="blue"></i>
          <p>Lasting relationship</p>
        </div>

        <div class="deka-details">
          <i class="fas fa-hand-rock" id="red"></i>
          <p>Empowered Service</br></p>
        </div>
        
      </div>
    </div>
  </section>

<!---->
<section id="jobs">
  <div class="row">
    <div class="container" style="padding:40px; border:solid 2px black; background: var(--white);">
      <h1 style="color:var(--orange)">Open Positions</h1>
      <br/>
      <div class="accordion" id="accordionExample">
        <?php
        include('conn.php');

        $itemsPerPage = 5; // Number of careers per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number from the URL query parameter
        $offset = ($currentPage - 1) * $itemsPerPage; // Calculate the offset

        // Retrieve careers with pagination
        $sql = "SELECT careers.id, careers.position, careers.branch, careers.description, GROUP_CONCAT(qualifications.qualification SEPARATOR '<br>') AS qualifications
                FROM careers
                LEFT JOIN qualifications ON careers.id = qualifications.career_id
                GROUP BY careers.id
                LIMIT $offset, $itemsPerPage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          $index = 1; // Counter variable for generating unique IDs
          while ($row = $result->fetch_assoc()) {
            $positionId = 'position_' . $index;
            $collapseId = 'collapse_' . $index;
        ?>
            <div class="card">
              <div class="card-header" id="<?php echo $positionId; ?>">
                <h2 class="mb-0 job-position">
                  <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $collapseId; ?>" aria-expanded="true" aria-controls="<?php echo $collapseId; ?>">
                    <strong><?php echo $row['position']; ?> - <?php echo $row['branch']; ?></strong>
                  </a>
                  <button class="btn-career">Apply Now</button>
                </h2>
                <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $collapseId; ?>" aria-expanded="true" aria-controls="<?php echo $collapseId; ?>">
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </div>
              <div id="<?php echo $collapseId; ?>" class="collapse" aria-labelledby="<?php echo $positionId; ?>" data-parent="#accordionExample">
                <div class="card-body">
                  Description: <?php echo $row['description']; ?><br><br>
                  Qualifications: <br>
                  <span>
                    <?php echo nl2br($row['qualifications']); ?>
                  </span>
                </div>
              </div>
            </div>
        <?php
            $index++;
          }
        }
        ?>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
          <?php
          // Count total careers
          $totalCountSql = "SELECT COUNT(*) as count FROM careers";
          $totalCountResult = $conn->query($totalCountSql);
          $totalCountRow = $totalCountResult->fetch_assoc();
          $totalCount = $totalCountRow['count'];

          // Calculate total pages
          $totalPages = ceil($totalCount / $itemsPerPage);

          // Generate pagination links
          for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i == $currentPage) ? 'active' : '';
          ?>
            <li class="page-item <?php echo $activeClass; ?>"><a class="page-link" href="?page=<?php echo $i; ?>" style="margin-top:1rem;"><?php echo $i; ?></a></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>




<section class="offices" id="offices" >
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="text">
          <h2>HR Offices</h2>
          <h4>We look forward <br>to working with you!</br></h4>
          <p><span class="orange">Bacolod Office:</span> DEKA SALES
          Blk 2 Lot 20 Lacson-Extension, Alijis National Road, Bacolod City</p>
        
          <p><span class="orange">Iloilo City:</span> DEKA SALES
          Cor. El 98 St., BS Aquino Drive, Taft North, Mandurriao, Iloilo City</p>
          <h4>Reach out to us Online</h4>
          
            <div class="d-flex" style="margin-bottom:10px;">
              <i class="fab fa-facebook-f" aria-hidden="true" style="line-height:1.5; color: var(--orange);"></i><p style="margin:0 10px;"> <a href="https://web.facebook.com/dekasalesofficialpage" target="_blank" style="text-decoration: none; color: var(--orange);">Deka Sales-Hiring</a></p>
            </div>
        
            <div class="d-flex">
              <i class="fa fa-envelope" aria-hidden="true" style="line-height:1.5; color: var(--orange);"></i><p style="margin:0 10px;"> <a href="mailto:deka_hiring@yahoo.com" style="text-decoration: none; color: var(--orange);">deka_hiring@yahoo.com</a></p>
            </div>
         

        </div>
      </div>
      
      <div class="col-sm-6 flex-image">
        <img src="images/career.jpg" alt="Placeholder Image" class="img-fluid">
      </div>
    </div>
  </div>  
</section>

<?php
    include 'footer.php'
  ?>
	  <script>
	  $('.collapse').collapse()
	  
	  </script>
</main>