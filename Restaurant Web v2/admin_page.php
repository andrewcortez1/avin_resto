<?php
session_start();
echo'<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="../jQuery.js"></script>';

require_once "connection.php";
echo '<style>
body {
          background-image: url("background.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
h3{
 color : aqua;
}
img {
 width : 400px;
 height : 300px;
}


    </style>';

  echo '
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <h3 class="navbar-text"style="margin-left : 14px; margin-right : 20px">Welcome , '.$_SESSION['name'].'</h3>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class ="nav-link active " href="#">View Makanan</a>
                    </li>
                    <li class="nav-item">
                      <a class ="nav-link " href="view_minuman.php">View Minuman</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="setting_account.php">Setting Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="about.php">About</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="create_new_menu.php">Create New Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
          </nav><br><br>';
  
  $get_data = mysqli_query($resto, "SELECT * FROM menu");
  echo "<div class = 'row'>";
  while ($row = mysqli_fetch_array($get_data)){
   echo "<div class = 'col-md-4'>";
   echo "<h3 style = 'text-align:center'>" .$row['nama'];
   echo "<h3 style = 'text-align:center'>Harga = " .$row['harga'] . "</h3>";
   echo "<img class = 'rounded mx-auto d-block' src = ".$row['link'].">";

   echo "<br>";
   echo "<br>";
   echo "</div>";
 }
?>