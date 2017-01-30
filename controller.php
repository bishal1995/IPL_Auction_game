<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<bod onload="startTime()" >

<div class="container" >
	<div class="row" ><br><br>
	<div class="col-md-12" >
		<center><img src="incand.png"></center>
	</div>
	</div><br><br>
	<div class="row" ><br><br><br>
		<div class="col-md-4" ></div>
		<div class="col-md-4" >
			<form role="form" class="form-horizontal" method="POST" action="action.php" >
			<div class="form-group" >Team name : <input list="browsers" name="team" class="form-control"  required>
                                      <datalist id="browsers">
                                        <option value="Team A">
                                        <option value="Team B">
                                        <option value="Team C">
                                        <option value="Team D">
                                      </datalist> </div>	
            <div class="form-group" >Player : <input list="browsers" name="player" class="form-control" required>
                                      <datalist id="browsers">
                                        <option value="Player 1">
                                        <option value="Player 2">
                                        <option value="Player 3">
                                        <option value="Player 4">
                                      </datalist> </div>
			<div class="form-group" >Bid : <input type="text" class="form-control" name="bid" required> </div>
			<center><button type="submit" class="btn btn-primary">Proceed</button></center>
			</form>
		</div>
		<div class="col-md-4" ></div>	
	</div>
	<br><br><br>
	<div class="row" >
	<center><h3>Revert Previous Action : </h3></center><br><br>
		<center><a href="revert.php"><button type="button" class="btn btn-warning" >Revert</button></a></center>
	</div>





</div>






<br><br><br><br><br><center><footer >&copy; All right reserved by Incandescence Team</footer></center>
</body>
</html>