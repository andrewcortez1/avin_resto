<?php
include "background.php";

echo '<script src = "../bootstrap/js/bootstrap.min.js"></script>';
echo'<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="../jQuery.js"></script>';
echo "<style>
h3{
	color : aqua;
}
img {
 width : 400px;
 height : 300px;
}
h2 {
  color : green;
  text-align : center;
}
</style>";
echo '<h2> Please Pick Food</h2>';
$get_data = mysqli_query($resto, "SELECT * FROM menu");
$counter = 0;
echo '<form action = "checkout.php" method = "post">';
  echo "<div class = 'row'>";
  while ($row = mysqli_fetch_array($get_data)){
    $counter++;
   echo "<div class = 'col-md-4'>";
   echo "<h3 style = 'text-align:center'>" .$row['nama'];
   echo "<h3 style = 'text-align:center'>Harga = " .$row['harga'] . "</h3>";
   echo "<img class = 'rounded mx-auto d-block' src = ".$row['link'].">";
   echo "<br>";
   echo "<br>";
   echo '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abc'.$counter.'">
  Launch demo modal
</button>';

echo '<input type="number" id="points" name='.$counter.' step="1">';
   echo "</div>";
  }
  echo "</div>";
  echo '<input type = "submit">';
echo '</form>';

echo '  
<div class="modal fade" id="abc1" tabindex="-1" aria-labelledby="abc1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc1">Nasi Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

echo '  
<div class="modal fade" id="abc2" tabindex="-1" aria-labelledby="abc2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc2">Nasi Uduk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc3" tabindex="-1" aria-labelledby="abc3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc3">Nasi Empal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc4" tabindex="-1" aria-labelledby="abc4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc4">Nasi Ayam Geprek</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc5" tabindex="-1" aria-labelledby="abc5" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc5">Nasi Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc6" tabindex="-1" aria-labelledby="abc6" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc6">Nasi Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc7" tabindex="-1" aria-labelledby="abc7" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc7">Nasi Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng Terdiri dari 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

?>