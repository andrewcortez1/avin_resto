<?php
//include "background.php";
include "connection.php";
echo '<script src = "../bootstrap/js/bootstrap.min.js"></script>';
echo'<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="../jQuery.js"></script>';
//function hitung (){
// $count=0;
// $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
// while ($row = mysqli_fetch_array($get_data)){
//  $count++;
// }
// return $count++;
//}
//makanan
 //checkout dari dine in
 //checkout2 dari takeaway
$pelanggan = $_POST['pelanggan'];

$ayam_goreng = $_POST['1'];
$nasi_goreng= $_POST['2'];
$nasi_uduk = $_POST['3'];
$nasi_empal = $_POST['4'];
$ayam_geprek = $_POST['5'];
$steak = $_POST['6'];
$burger = $_POST['7'];
$indomie_kuah = $_POST['8'];
$indomie = $_POST['9'];
$kusuka = $_POST['10'];

//minuman
$smirnoff = $_POST['11'];
$iceland = $_POST['12'];
$mohito = $_POST['13'];
$es_teh = $_POST['14'];
$es_jeruk = $_POST['15'];
$jus_alpukat = $_POST['16'];
$jus_stoberi = $_POST['17'];
$air_mineral = $_POST['18'];

 $count_pembayaran = mysqli_query($resto, "SELECT * FROM pembayaran");
 $hitung=0; 
  while ($row = mysqli_fetch_array($count_pembayaran)){
    $hitung++;
  }
  $hitung++;
  mysqli_query($resto, "insert into pembayaran values ('$hitung', '$pelanggan','Dine In', 'Processing', 'Ready')");

echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead> <tbody>';

 echo "Nama Pelanggan : " .$pelanggan ."</br>";
// echo "Ayam Goreng " .$ayam_goreng ."</br>"; 
// echo "Nasi goreng : " .$nasi_goreng ."</br>";
// echo "Nasi uduk : " .$nasi_uduk ."</br>";
// echo "Nasi empal : " .$nasi_empal ."</br>";
// echo "Ayam geprek : " .$ayam_geprek ."</br>";
// echo "Steak :" .$steak ."</br>";
// echo "Burger : " .$burger ."</br>";
// echo "Indomie Kuah :" .$indomie_kuah ."</br>";
// echo "Kusuka : " .$kusuka ."</br>";

// echo "Smirnoff : " .$smirnoff ."</br>";
// echo "Iceland : " .$iceland ."</br>";
// echo "Mohito : " .$mohito ."</br>";
// echo "Es Teh : " .$es_teh  ."</br>";
// echo "Es Jeruk : " .$es_jeruk ."</br>";
// echo "Jus Alpukat :" .$jus_alpukat ."</br>";
// echo "Jus Stoberi :" .$jus_stoberi ."</br>";;
// echo "Air_mineral : " .$air_mineral."</br>" ; 

$no_pesanan =0;
if ($ayam_goreng >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Ayam Goreng</td>
      <td>'.$ayam_goreng.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '1', '$ayam_goreng', 'Dine In', 'Belum Bayar')");
}
if ($nasi_goreng >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Nasi Goreng</td>
      <td>'.$nasi_goreng.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '1', '$nasi_goreng', 'Dine In', 'Belum Bayar')");
}
if ($nasi_uduk >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Nasi Uduk</td>
      <td>'.$nasi_uduk.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '2', '$nasi_uduk', 'Dine In', 'Belum Bayar')");
}
if ($nasi_empal >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Nasi Empal</td>
      <td>'.$nasi_empal.'</td>
    </tr>';


     $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '3', '$nasi_empal', 'Dine In', 'Belum Bayar')");
}
if ($ayam_geprek>=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Ayam Geprek</td>
      <td>'.$ayam_geprek.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '4', '$ayam_geprek', 'Dine In', 'Belum Bayar')");
}
if ($steak >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Steak</td>
      <td>'.$steak.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '5', '$steak', 'Dine In', 'Belum Bayar')");
}
if ($burger >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Burger</td>
      <td>'.$burger.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '6', '$burger', 'Dine In', 'Belum Bayar')");
} 
if ($indomie_kuah >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Indomie Kuah</td>
      <td>'.$indomie_kuah.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '7', '$indomie_kuah', 'Dine In', 'Belum Bayar')");
}
if ($indomie >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Indomie Goreng</td>
      <td>'.$indomie.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;

 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '8', '$indomie', 'Dine In', 'Belum Bayar')");
}
if ($kusuka >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Kusuka</td>
      <td>'.$kusuka.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_makanan");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 $count++;
 
 mysqli_query($resto, "INSERT INTO pesanan_makanan values ($count ,'$pelanggan', '9', '$kusuka', 'Dine In', 'Belum Bayar')");
}

//minuman
if ($smirnoff >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Smirnoff</td>
      <td>'.$smirnoff.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '1', '$smirnoff', 'Dine In', 'Belum Bayar')");
}

if ($iceland >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Iceland</td>
      <td>'.$iceland.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '2', '$iceland', 'Dine In', 'Belum Bayar')");

}

if ($mohito >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Mohito</td>
      <td>'.$mohito.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '3', '$mohito', 'Dine In', 'Belum Bayar')");

}
if ($es_teh >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Es Teh Manis</td>
      <td>'.$es_teh.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '4', '$es_teh', 'Dine In', 'Belum Bayar')");

}

if ($es_jeruk >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Es Jeruk</td>
      <td>'.$es_jeruk.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '5', '$es_jeruk', 'Dine In', 'Belum Bayar')");
}
if ($jus_alpukat >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Jus Alpukat</td>
      <td>'.$jus_alpukat.'</td>
    </tr>';
    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '6', '$jus_alpukat', 'Dine In', 'Belum Bayar')");
}
if ($jus_stoberi >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Jus Stroberi</td>
      <td>'.$jus_stroberi.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '7', '$jus_stoberi', 'Dine In', 'Belum Bayar')");
}

if ($air_mineral >=1){
 echo ' <tr>
      <th scope="row">'.$no_pesanan.'</th>
      <td>Air Mineral</td>
      <td>'.$air_mineral.'</td>
    </tr>';

    $no_pesanan++;
 $count=0;
 $get_data = mysqli_query($resto, "SELECT * FROM pesanan_minuman");
 while ($row = mysqli_fetch_array($get_data)){
  $count++;
 }
 mysqli_query($resto, "INSERT INTO pesanan_minuman values ($count ,'$pelanggan', '8', '$air_mineral', 'Dine In', 'Belum Bayar')");
}
echo ' </tbody>
</table>';