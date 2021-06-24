<?php
include "connection.php";
//include "background.php";
session_start();

if(isset($_POST['showtable'])){
 $sql="select * from pembayaran";
 $result=mysqli_query($resto,$sql);
 while($row=mysqli_fetch_array($result))
 {
  echo "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
    <td>".$row[3]."</td>
    <td><a ide='$row[0]' class='edit' href='#?ide=$row[0]'><button type='button' class='btn btn-success'>Edit</button></a></td>
    <td><a idd='$row[0]' class='turunharga' href='#?idd=$row[0]'><button type='button' class='btn btn-primary' >View Pesanan</button></a></td>
    <td><a idd='$row[0]' class='delmenu' href='#?idd=$row[0]'><button type='button' class='btn btn-primary' >Finish</button></a></td>
   </tr>";
 } 
 exit();
}

if(isset($_POST['showdata2'])){

$id=$_POST['nama']; 
 $sql="select p.no, p.no_menu,p.qty ,m.nama, m.harga,  m.harga*p.qty AS 'Total Harga'
FROM pesanan_makanan p JOIN menu m ON (p.no_menu = m.no_menu)
WHERE p.nama = '$id'";
 $result=mysqli_query($resto,$sql);
 echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Menu</th>
      <th scope="col">Qty</th>
      <th scope = "col"> Nama Makanan </th>
      <th scope="col">Harga</th>
      <th scope="col">Total Harga</th>
    </tr>
  </thead>
  <tbody>
';
 while($row=mysqli_fetch_array($result))
 {
  echo "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
     <td>".$row[3]."</td>
    <td>".$row[4]."</td>
    <td>".$row[5]."</td>
   </tr>";
 } 
 $det_minum="select p.no, p.no_minum,p.qty ,m.nama, m.harga,  m.harga*p.qty AS 'Total Harga'
 FROM pesanan_minuman p JOIN menu_minuman m ON (p.no_minum = m.no_minuman)
 WHERE p.nama = '$id'";
 $res=mysqli_query($resto,$det_minum);
 while($rows=mysqli_fetch_array($res))
 {
  echo "<tr>
    <td>".$rows[0]."</td>
    <td>".$rows[1]."</td>
    <td>".$rows[2]."</td>
     <td>".$rows[3]."</td>
    <td>".$rows[4]."</td>
    <td>".$rows[5]."</td>
   </tr>";
 }
 exit();
}
if(isset($_POST['editvalue'])){
 
 $id=$_POST['id']; 
 $sql="select * from pesanan_makanan where no = '$id'";
 $result=mysqli_query($resto,$sql);
 $row=mysqli_fetch_array($result); 
 header("content-type: text/x-json");
 echo json_encode($row);
 exit(); 
} 
if(isset($_POST['updatevalue'])){
 $sql="update menu set nama='{$_POST['nama']}', harga='{$_POST['alamat']}', link='{$_POST['umur']}' where no_menu={$_POST['id']}";
 $result=mysqli_query($resto,$sql);
 exit(); 
} 

if(isset($_POST['savevalue'])){
 $sql="insert into menu values('{$_POST['id']}','{$_POST['nama']}','{$_POST['alamat']}','{$_POST['umur']}','{$_POST['jk']}')";
 $result=mysqli_query($resto,$sql);
 exit(); 
} 
if(isset($_POST['delete'])){
    echo $_POST['id'];
    $sql="update menu SET harga = harga+1000 where no_menu='{$_POST['id']}'" ;
    echo $sql;
    $result=mysqli_query($resto,$sql);
    
}
if(isset($_POST['decrease_harga'])){
    echo $_POST['id'];
    $sql="update menu SET harga = harga-1000 where no_menu='{$_POST['id']}'" ;
    echo $sql;
    $result=mysqli_query($resto,$sql);
}


if(isset($_POST['delete_db'])){
    echo $_POST['id'];
    $sql="delete from `menu` WHERE no_menu ='{$_POST['id']}'" ;
    echo $sql;
    $result=mysqli_query($resto ,$sql);
    
}
?>
<html>
<head>
 <script src="../jQuery.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
 <div class="container" style="margin-top: 10px;"> 
  <div class="p-5 mb-4 bg-light rounded-3 mx-auto" style="width: 800px;">  
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">no</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="id" value="">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama_cust</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nama" disabled = "disabled">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Pemesanan</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="alamat">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="umur">
    </div>
   </div>
   <div class="row">
    <div class="col-sm-4 offset-md-2">
     
     <button type="button" class="btn btn-primary" id="update" value="Update">Update</button>
    </div>
   </div>
  </div>
  <div>
   <table class="table table-sm table-primary table-striped table-hover">
    <thead>
     <tr>
      <th>No_menu</th>
      <th>Nama_cust</th>
      <th>Jenis_pemesanan</th>
      <th>Keterangan</th>
      <th>View Order</th>
     </tr>
    </thead>
    <tbody id="showdata">

    </tbody>
   </table>
  </div> 
 </div>
 <h3 id = "showdata2">


 </h3>
 <form action = "admin_page.php" method = "post">
  <input type = "submit" value = "back">
 </form>
 <script>
$(document).ready(function(){
 showdata();
 
 $('body').delegate('.edit','click',function(){
  idedit=$(this).attr('ide');
  $.ajax({
   url  : "billing.php",
   type : "post",
   data :{
      editvalue : 1,
      id     : idedit 
   },
   success : function(res){
    $('#id').val(res.no_menu);
    $('#nama').val(res.nama);
    $('#alamat').val(res.jenis_pesanan);
    $('#umur').val(res.keterangan);
   }
  }); 
 });
    $('body').delegate('.delete','click',function(){
  var iddelete=$(this).attr('idd');
       var  confirm=window.confirm("View Data?");
  if(confirm){
            $.ajax({
                url  : "billing.php",
                type : "post",
                data :{
                            delete : 1,
                            id     : iddelete 
                },
                success : function(res){
                    showdata2();
                }
            }); 
        }
 });
    //edit view customer
    $('body').delegate('.turunharga','click',function(){
        idedit=$(this).attr('idd');
        var v_nama=$("#nama").val();
       var  confirm=window.confirm("Tampilkan data?");
  if(confirm){
            $.ajax({
                url  : "billing.php",
                type : "post",
                data :{
                            nama   : v_nama,
                            id     : idedit
                },
                success : function(res){
                    showdata2();
                }
            }); 
        }
 });

        $('body').delegate('.delmenu','click',function(){
  var iddelete=$(this).attr('idd');
       var  confirm=window.confirm("Delete?");
  if(confirm){
            $.ajax({
                url  : "billing.php",
                type : "post",
                data :{
                            delete_db : 1,
                            id     : iddelete 
                },
                success : function(res){
                    alert("berhasil!");
                    showdata();
                }
            }); 
        }
 });
    $("#update").click(function(){
  var v_id=$("#id").val();
  var v_nama=$("#nama").val();
  var v_alamat=$("#alamat").val();
  var v_umur=$("#umur").val();
  var v_jk=$("input[name='jk']:checked").val();
  $.ajax({
   url  : "billing.php",
   type    : "post",
   data    :{
      updatevalue : 1,
      id          : v_id,
      nama   : v_nama,
      alamat   : v_alamat,
      umur   : v_umur,
      jk    : v_jk

   },
   success : function(res){
    alert("Update Sucessfully");
    showdata();
   }

  })

 });

 $("#save").click(function(){
  var v_id=$("#id").val();
  var v_nama=$("#nama").val();
  var v_alamat=$("#alamat").val();
  var v_umur=$("#umur").val();
  var v_jk=$("input[name='jk']:checked").val();
  $.ajax({
   url  : "billing.php",
   type    : "post",
   data    :{
      savevalue   : 1,
      id          : v_id,
      nama   : v_nama,
      alamat   : v_alamat,
      umur   : v_umur,
      jk    : v_jk

   },
   success : function(res){
    alert("save Sucessfully");
    showdata();
   }

  })

 });
   
}); 
//diluar document ready
function showdata(){
 $.ajax({
  url  : "billing.php",
  type : "post",
  data :{
     showtable : 1
  },
  success : function(res){
   $("#showdata").html(res);
  }
 });
}

function showdata2(){
 var v_nama=$("#nama").val();
 $.ajax({
  url  : "billing.php",
  type : "post",
  data :{
     showdata2 : 1,
     nama : v_nama
  },
  success : function(res){
   $("#showdata2").html(res);
  }
 });
}
 </script>
</body>

</html>