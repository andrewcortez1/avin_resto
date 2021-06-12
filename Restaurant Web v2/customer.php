<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    body {
          background-image: url('background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
    h1 {
      text-align :center;
      color : aqua;
    }
    .form-group{
      position : absolute;
      left : 1000px;
      top : 500px;
    }
    .col-form-label{
      color : aqua;
    }
    </style>
</head>
<body>
  <h1> Customer </h1>
  <form class="form-inline">
      <div class="form-group mb-2">
          <label for="inputPassword" class="col-sm-5 col-form-label">Input Name :</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" id="inputPassword" placeholder="Your Name">

                <a class="btn btn-primary" href="dine.php" role="button">Dine In </a>
                <a class="btn btn-primary" href="take.php" role="button">Take Away </a>
            </div>
      </div>
  </form>
</body>