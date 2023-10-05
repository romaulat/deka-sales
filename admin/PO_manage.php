<?php
include 'navbar.php';
?>
<main>
<div class="content" style="margin-left:270px;">
<section class="header" style="padding-top:20px;">
<div class="container" >
<h1 style="float:left">Manage PO Requests</h1>
<br>
<br>
<br>
<hr style="border-top:solid 1px" ></hr>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="">
  <span class="inline">
    <h4>Select Branch: </h4>
    <div class="dropdown">
      <button class="btn btn-default" type="button" data-toggle="dropdown">Makati
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Bacolod</a></li>
        <li><a href="#">Iloilo</a></li>
        <li><a href="#">Pampanga</a></li>
      </ul>
    </div>
</span>
  </div>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="">
  <div class="search-bar" style="float:right;">
  <input type="text" placeholder="Search">
  <button type="submit">Search</button>
	</div>
  <span class="inline">
    <h4>Sort by: </h4>
    <div class="dropdown">
      <button class="btn btn-default" type="button" data-toggle="dropdown">A
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#"></a>A</li>
        <li><a href="#"></a>B</li>
        <li><a href="#"></a>C</li>
        <li><a href="#"></a>D</li>
        <li><a href="#"></a>E</li>
        <li><a href="#"></a>F</li>
        <li><a href="#"></a>G</li>
        <li><a href="#"></a>H</li>
        <li><a href="#"></a>I</li>
        <li><a href="#"></a>J</li>
        <li><a href="#"></a>K</li>
        <li><a href="#"></a>L</li>
        <li><a href="#"></a>M</li>
        <li><a href="#"></a>N</li>
        <li><a href="#"></a>O</li>
        <li><a href="#"></a>P</li>
        <li><a href="#"></a>Q</li>
        <li><a href="#"></a>R</li>
        <li><a href="#"></a>S</li>
        <li><a href="#"></a>T</li>
        <li><a href="#"></a>U</li>
        <li><a href="#"></a>V</li>
        <li><a href="#"></a>W</li>
        <li><a href="#"></a>X</li>
        <li><a href="#"></a>Y</li>
        <li><a href="#"></a>Z</li>
        
      </ul>
    </div>
</span>

<table class="table table-bordered">
  <thead>
    <tr>
	  <th>Requestor</th>
	  <th>Item</th>
	  <th>Price</th>
      <th>Supplier</th>
      <th>Date</th> 
      <th>Project</th>
      <th>Action on Request</th> 
    </tr>
  </thead>
  <tbody>
  <tr>
  <td>Cardo Dalisay</td>
  <td>Submersible pump</td>
  <td>10,680</td>
  <td>TOTAL Inc.</td>
  <td>05/11/2023</td>
  <td>Pasudeco <a class="button expand" href="openPO.php">Expand</a></td>
  <td><button class="acc">Accept</button><button class="dec">Decline</button></td>
  </tr>
  <tr>
  <td>Juan Dela Cruz</td>
  <td>Pendent Sprinkler</td>
  <td>481</td>
  <td>Mega Precision</td>
  <td>05/11/2023</td>
  <td>Pasudeco <a class="button expand" href="openPO.php">Expand</a></td>
  <td><button class="acc">Accept</button><button class="dec">Decline</button></td>
  </tr>
</tbody>
</table>
  <!-- Link to jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Link to Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
</div>
</section>
<section>

</section>
</div>
</main>