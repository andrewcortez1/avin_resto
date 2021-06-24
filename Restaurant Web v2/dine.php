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
#inputan{
text-align : center;
margin-left : 43%;
  margin-top : 20px;
  margin-bottom : 50px;
  width : 200px;
  height : 30px;  
}
#model{
margin-left : 37%;
}
#points{
  margin-left : 30%;
}
#submit{
margin-left : 43%;
  margin-top : 100px;
    width : 200px;
  height : 50px;  
}
</style>";
if (isset($_POST['1'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =1");
  }
  if (isset($_POST['2'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =2");
  }
  if (isset($_POST['3'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =3");
  }
  if (isset($_POST['4'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =4");
  }
  if (isset($_POST['5'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =5");
  }
  if (isset($_POST['6'])){
    mysqli_query($resto, "update meja set status ='not_ready' where no_meja =6");
  }
$get_data = mysqli_query($resto, "SELECT * FROM menu");
$get_minuman = mysqli_query($resto, "SELECT * FROM menu_minuman");
$counter = 0;
echo '<form action = "checkout.php" method = "post">';
  //echo "<input type = 'text' name = 'pelanggan'> ";
  echo "<input type='text' class='form-control' name='pelanggan' placeholder='Input Nama Anda' id = 'inputan' required oninvalid='this.setCustomValidity('Input username di field ini')' oninput='setCustomValidity('')''>";
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
<button id="model" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abc'.$counter.'">
  Menu Details
</button>';

echo '<input type="number" id="points" name='.$counter.' step="1">';
   echo "</div>";
  }
  //echo "</div>";

  while ($row = mysqli_fetch_array($get_minuman)){
    $counter++;
    echo "<div class = 'col-md-4'>";
   echo "<h3 style = 'text-align:center'>" .$row['nama'];
   echo "<h3 style = 'text-align:center'>Harga = " .$row['harga'] . "</h3>";
   echo "<img class = 'rounded mx-auto d-block' src = ".$row['link'].">";
   echo "<br>";
   echo "<br>";
   echo '<!-- Button trigger modal -->
<button  id="model" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abc'.$counter.'">
  Menu Details
</button>';
echo '<input type="number" id="points" name='.$counter.' step="1">';
 echo "</div>";
  }

echo "</div>";
  echo '<input type = "submit" id="submit">';
echo '</form>';








echo '  
<div class="modal fade" id="abc1" tabindex="-1" aria-labelledby="abc1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc1">Ayam Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Ayam Goreng adalah ayam yang digoreng bersama tepung di minyak panas
       
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
        <h5 class="modal-title" id="abc2">Nasi Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Goreng adalah nasi yang digoreng bersama telor, ayam, dan sosis
       
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
        <h5 class="modal-title" id="abc3">Nasi Uduk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Uduk adalah nasi yang diaduk-aduk perasaannya
       
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
        <h5 class="modal-title" id="abc4">Nasi Empal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Empal adalah nasi yang disajikan bersama empal goreng
       
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
        <h5 class="modal-title" id="abc5">Nasi Ayam Geprek</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Nasi Ayam Geprek adalah ayam yang digeprek hingga hancur
       
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
        <h5 class="modal-title" id="abc6">Steak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Steak adalah makanan horang kaya :) 
       
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
        <h5 class="modal-title" id="abc7">Burger</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Burger adalah daging yang diletakan antara dua roti
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

echo '  
<div class="modal fade" id="abc8" tabindex="-1" aria-labelledby="abc8" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc8">Indomie Kuah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Indomie Kuah adalah indomie yang diberi kuah
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

echo '  
<div class="modal fade" id="abc9" tabindex="-1" aria-labelledby="abc9" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc9">Indomie Goreng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Indomie Goreng adalah indomie yang tidak diberi kuah
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc10" tabindex="-1" aria-labelledby="abc10" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc10">Kusuka</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Kusuka adalah keripik singkong yang kamu dan aku suka 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '  
<div class="modal fade" id="abc11" tabindex="-1" aria-labelledby="abc11" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="abc11">Smirnoff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';