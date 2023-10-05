<?php
  include 'header.php';
?>

<main>
    <section class="hero-image">
      <div class="hero-image-content">

        <div class="hero-image-text">
          <h1>Warlen Industrial Sales Corporation</h1>
          <p>Know and work with us better</p>
          <i>continuously growing</i>
          <div class="hero-image-button">
            <a href="#section2" class="button">Scroll down for more</a>
          </div>
        </div>

      </div>
    </section>

    <section class="home-services container" id="section2">
      <div class="title">
        <p>What we serve</p>
        <h1>Our <span>Services</span> </h1>
      </div>

      <div class="services-grid">

        <div class="service-item blue">
          <a href="productServices.php?tab=one">
            <i class="fa fa-wind"></i>
            <h3>Air Condition</h3>
            <ul>
              <li>Parts and Services</li>
              <li>Supply and Installation</li>
              <li>Repair and Maintenance</li>
            </ul>
          </a>
        </div>

        <div class="service-item red">
          <a href="productServices.php?tab=two">
            <i class="fa fa-fire"></i>
            <h3>Fire Protection</h3>
            <ul>
              <li>Parts and Services</li>
              <li>Supply and Installation</li>
              <li>Repair and Maintenance</li>
            </ul>
          </a>
        </div>

        <div class="service-item blue">
          <a href="productServices.php?tab=three">
            <i class="fa fa-fan"></i>
            <h3>Mechanical</h3>
            <ul>
              <li>Kitchen Exhaust & Fresh Air System</li>
              <li>Toilet Exhausts</li>
              <li>Supply and Installation</li>
            </ul>
          </a>
        </div>

        <div class="service-item red">
          <a href="productServices.php?tab=four">
            <i class="fa fa-battery-full"></i>
            <h3>Electrical</h3>
            <ul>
              <li>Supply and Installation like Panel Board, Circuit Breakers, Outdoor LED, etc.</li>
            </ul>
          </a>
        </div>

        <div class="service-item blue">
          <a href="productServices.php?tab=five">
            <i class="fa fa-hammer"></i>
            <h3>Civil Works</h3>
            <ul>
              <li>Formworks Installation</li>
              <li>Precast Installation</li>
              <li>Cementitious Decks</li>
              <li>Concreting Works</li>
            </ul>
          </a>
        </div>

        <div class="service-item red">
          <a href="productServices.php?tab=six">
            <i class="fa fa-wrench"></i>
            <h3>Fabrication</h3>
            <ul>
              <li>Supply and Installation</li>
              <li>Repair and Maintenance</li>
            </ul>
          </a>
        </div>

      </div>

    </section>

    <section class="home-projects">
      <div class="title">
        <p>All Our Works</p>
        <h1>Our <span>Projects</span> </h1>
      </div>

      <div class="projects-grid">

        <div class="project-item">
          <img src="images/laguna.jpg" alt="" srcset="">
          <div class="overlay">
            <h1>Wilcon Depot - Pila, Laguna</h1>
            <p>Civil Works, Ground Breaking, and Inauguration</p>
            <a href="projects.php#Laguna"><button class="project-btn" >Learn More</button></a>
          </div>
        </div>

        <div class="project-item">
          <img src="projects/breadbask2.jpg" alt="" srcset="">
          <div class="overlay">
            <h1>Iloilo Bread Basket Roxas</h1>
            <p>Repair of electric oven and shredder machine & replace new gear box reducer with a project scope of Mechanical.</p>
            <a href="projects.php#Roxas"><button class="project-btn">Learn More</button></a>
          </div>
        </div>

        <div class="project-item">
          <img src="projects/cadiz6.jpg" alt="" srcset="">
          <div class="overlay">
            <h1>CONSTRUCTION OF CADIZ CITY PUBLIC MARKET</h1>
            <p>Mechanical, Electrical, Plumbing, Fire Protection, Fabrication, and Construction</p>
            <a href="projects.php#Cadiz"><button class="project-btn" >Learn More</button></a>
          </div>
        </div>

      </div>

      <div class="projects-grid-btn">
        <a href="projects.php"><button>See More</button></a>
      </div>
    </section>

    <section class="home-mission">
      <div class="mission-content">
        
        <div class="mission-text">
          <h1>Our Mission</h1>
          <i>The reason for our existence</i>
          <p>To provide excellent service all the time by promoting excellent
            standards in all aspects of operations
          </p>
        </div>

      </div>

    </section>

  <?php
    include 'footer.php'
  ?>
    
</main>

