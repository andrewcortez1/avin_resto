<?php 
  
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type = "text/css" href = "../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    body {
          background-image: url('background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
    #btn1{
      position : absolute;
      top : 500px;
      left : 590px;
      height: 300px;
      width : 600px;
      text-align: center;
    }
    #btn2{
      position : absolute;
      top : 500px;
      left : 1400px;
      height: 300px;
      width : 600px;
    }
    h1 {
      text-align :center;
      color : aqua;
    }
    </style>
    </head>
    <body>
      <h1> AVinResto </h1>
      <form action = "customer.php" method = "post">
          <button type="submit" class="btn btn-outline-success" id = "btn1">Customer</button>
      </form>
      <form method = "post" action = "admin.php">
          <button type="submit" class="btn btn-outline-success" id = "btn2">Admin</button>
      </form>
          
    </body>
</html>
     