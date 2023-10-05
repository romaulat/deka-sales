<?php
include 'navbar.php';
?>
<main>
<body>
<div class="content" style="padding-left:270px;overflow:hidden;">
<section class="header" style="padding-top:20px;">
<div class="container" >
<h1 style="float:left">Purchasing Order</h1>
<br>
<br>
<br>
<hr style="border-top:solid 1px" ></hr>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<span style="float:right">
<h4>PO# 1234</h4>
<h4>Project: Pasudeco</h4>
<h4>Date Needed: May 20,2023</h4>
</span> 
<h2>Warlen Industrial Sales Corporation</h2>

<span style="float:left">
<h5>Requestor: Cardo Dalisay</h5>
 <h5>Date: May 9, 2023</h5>
</span>

<table class="table table-bordered" style="text-align:center;">
  <thead>
    <tr>
	  <th>Item</th>
	  <th>Supplier</th>
	  <th>Qty</th>
	  <th>Unit Price</th>
	  <th>Total</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td>Submersible pump</td>
  <td>TOTAL Inc.</td>
  <td>1</td>
  <td>10,680</td>
  <td>10,680</td>
  </tr>
  <tr>
  <td>Pendent Sprinkler</td>
  <td>Megaprecision</td>
  <td>15</td>
  <td>481</td>
  <td>7,215</td>
  </tr>
</tbody>
</table>

</div>
</section>
<span style="position:relative; bottom:0;left:78%; display:inline-flex;">
<h4>TOTAL: </h4>
<div class="tots">17,895</div>
</span>
<span style="padding-top:40px;text-align:center;position:relative;bottom:-80%;left:-27%;">
<center>
<hr style="width:500px;border-bottom:solid 1px black"/>
<h4>Approved By</h4>
<br/>
<button class="acc">Accept</button>
<button class="dec">Decline</button>
<button>Print</button>
</center>
</span>
</div>
  <!-- Link to jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Link to Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</main>