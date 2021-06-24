<?php
include "connection.php";
//include "background.php";
session_start();

if(isset($_POST['showtable'])){
 $sql="select * from menu";
 $result=mysqli_query($resto,$sql);
 while($row=mysqli_fetch_array($result))
 {
  echo "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
    <td>".$row[3]."</td>
    <td><a ide='$row[0]' class='edit' href='#?ide=$row[0]'><button type='button' class='btn btn-success'>Edit</button></a></td>
    <td><a idd='$row[0]' class='delete' href='#?idd=$row[0]'><button type='button' class='btn btn-primary' >+1000</button></a></td>
    <td><a idd='$row[0]' class='turunharga' href='#?idd=$row[0]'><button type='button' class='btn btn-primary' >-1000</button></a></td>
    <td><a idd='$row[0]' class='delmenu' href='#?idd=$row[0]'><button type='button' class='btn btn-primary' >Delete</button></a></td>
   </tr>";
 } 
 exit();
}
if(isset($_POST['editvalue'])){
 
 $id=$_POST['id']; 
 $sql="select * from menu where no_menu = '$id'";
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
    <label class="col-sm-2 col-form-label">no_menu</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="id" disabled = "disabled"value="">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nama" disabled = "disabled">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="alamat">
    </div>
   </div>
   <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Link</label>
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
      <th>no_menu</th>
      <th>nama</th>
      <th>harga</th>
      <th>link</th>
      <th>Actions</th>
     </tr>
    </thead>
    <tbody id="showdata">

    </tbody>
   </table>
  </div> 
 </div>
 <form action = "admin_page.php" method = "post">
  <input type = "submit" value = "back">
 </form>
 <script>
$(document).ready(function(){
 showdata();
 $('body').delegate('.edit','click',function(){
  idedit=$(this).attr('ide');
  $.ajax({
   url  : "ajaxchange.php",
   type : "post",
   data :{
      editvalue : 1,
      id     : idedit 
   },
   success : function(res){
    $('#id').val(res.no_menu);
    $('#nama').val(res.nama);
    $('#alamat').val(res.harga);
    $('#umur').val(res.link);
   }
  }); 
 });
    $('body').delegate('.delete','click',function(){
  var iddelete=$(this).attr('idd');
       var  confirm=window.confirm("Naikkan 1000?");
  if(confirm){
            $.ajax({
                url  : "ajaxchange.php",
                type : "post",
                data :{
                            delete : 1,
                            id     : iddelete 
                },
                success : function(res){
                    alert("Harga berhasil dinaikkan");
                    showdata();
                }
            }); 
        }
 });

    $('body').delegate('.turunharga','click',function(){
  var iddelete=$(this).attr('idd');
       var  confirm=window.confirm("Turunkan 1000?");
  if(confirm){
            $.ajax({
                url  : "ajaxchange.php",
                type : "post",
                data :{
                            decrease_harga : 1,
                            id     : iddelete 
                },
                success : function(res){
                    alert("Harga berhasil diturunkan");
                    showdata();
                }
            }); 
        }
 });

        $('body').delegate('.delmenu','click',function(){
  var iddelete=$(this).attr('idd');
       var  confirm=window.confirm("Delete?");
  if(confirm){
            $.ajax({
                url  : "ajaxchange.php",
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
   url  : "ajaxchange.php",
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
   url  : "ajaxchange.php",
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
  url  : "ajaxchange.php",
  type : "post",
  data :{
     showtable : 1
  },
  success : function(res){
   $("#showdata").html(res);
  }
 });
}
 </script>
</body>

</html>