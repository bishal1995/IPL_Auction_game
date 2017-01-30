<!DOCTYPE html>
<html>
<head>
    <title>PLayer Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/test.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container" >
	<div class="row" ><br><br>
	<div class="col-md-12" >
		<center><img src="incand.png"></center>
	</div>
	</div><br><br>
	<div class="row" >
		<div class="col-md-4" ></div>
		<div class="col-md-4" >
			

      <form role="form" class="form-horizontal" method="POST" action="player_reg.php" enctype="multipart/form-data">
        <center><h3>Player Registration : </h3></center><br>     
        <div class="form-group" >Name : <input type="text" class="form-control" name="name" placeholder="Full Name" required> </div>
        <div class="form-group" >Country : <input type="text" class="form-control" name="country" placeholder="Country" required> </div>
        <div class="form-group" >Score : <input type="text" class="form-control" name="score" placeholder="Score" required> </div>
        <div class="form-group" >Base bid : <input type="text" class="form-control" name="base_bid" placeholder="Starting bid" required> </div>
        <div class="form-group" >Profile photo : <input type="file" class="form-control" name="photo"  > </div>
        <center><button type="submit" class="btn btn-default">Register Player</button></center>
      </form>
		</div>
		<div class="col-md-4" ></div>
	</div>


















</div>





</body>
</html>