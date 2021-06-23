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
      height: 100px;
      width : 600px;
      margin-left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    #btn2{
      height: 100px;
      width : 600px;
      margin-left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    h1 {
      font-size: 80pt;
      text-align :center;
      color : aqua;
    }
    </style>
    </head>
    <body>
      <br>
      <h1> AVinResto </h1>
      <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 150px;">
        <form action = "customer.php" method = "post">
          <button type="submit" class="btn btn-outline-success" id = "btn1">Customer</button>
      </form>
      <br>
      <br>
      <form method = "post" action = "admin.php">
          <button type="submit" class="btn btn-outline-success" id = "btn2">Admin</button>
      </form>
          </div>
    </body>
</html>