<?php

function details(){
	session_start();
	if( ($_SESSION['id_index']+1) < count($_SESSION['index']) ){
		$_SESSION['id_index'] = $_SESSION['id_index'] + 1; 
		$id = $_SESSION['index'][$_SESSION['id_index']];
		echo "$id";
		$connection = new Mongo();
		$db = $connection->selectDB('parbon');
	    $player = new MongoCollection($db, "player");
	    $detail = $player->findone(array( '_id' => $id ));
	    print_r($detail);
	}
	else{
		echo "Player over";
		session_destroy();
	}
}
//details();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Players</title>
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
	<div class="col-md-4" >
		<div class="row" >
			<div class="col-md-6" ><img src="image.php?id=568aa6f2e059f76d0d8b4570" tyle="width:50%;height:50%" class="img-thumbnail" ></div>
			<div class="col-md-6" >				
				Name : Bishal Paul<br>
				Starting Bid : $5000 <br>
				Points : 100<br>				
			</div>
		</div>
	</div>

	<div class="col-md-4" >
	<div class="row" >
		kya
	</div>






	
	</div>
	<div class="col-md-4" >
	bla bla	
	</div>


		
	</div>





</div>

</body>
</html>









