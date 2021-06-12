<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="../jQuery.js"></script>
</head>
<style>
	body {
          background-image: url('background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
    .jumbotron {
    	position : relative;
    }
    .col-form-label{
    	color : white;
    }
    .display-4{
    	color : aqua;
    }
    .btn-primary{
    	width : 280px;
    }
</style>
<body>
	<div class="container">	
		<center>
		<form method="post" action="givesession.php">	
		<div class="bg-transparent p-5 rounded-lg m-3" style="width: 700px;">
			<h1 class="display-4">AVinResto Admin</h1>
			<br><br>
			<div class="mb-3 row">
				<label for="Username" class="col-sm-4 col-form-label">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Input username di field ini')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Input password di field ini')" oninput="setCustomValidity('')">
				</div>
			</div>
			<br><br>
			<div class="mb-3 row">
				<div class="col-sm-6 offset-md-3">
				<button type="submit" class="btn btn-primary" name="signin">Enter</button>
				</div>
			</div>
		</div>
		</form>
		</center>	
	</div>

</body>
</html>