<?php

function available_player(){
    $conn = new Mongo();
    $db = $conn->selectDB('parbon');
    $player = new MongoCollection($db, "player");
    if($player){
        $detail = $player->find(array( 'assigned' => "0" ));
        while($detail->hasNext()){
            $doc = $detail->getNext();

            

            echo "<tr><td>"." <img src=\"image.php?id=$doc[_id]\" style=\"width:50%;height:50%\" class=\"img-thumbnail\">"."</td><td><br>".$doc[name]."</td><td> <br>".$doc[score]."</td><td> <br>".$doc[base_bid]."</td></tr>";

        }       
        $conn->close();
    }
    else
        echo " Bad connection";
}

function sold_player(){
    $conn = new Mongo();
    $db = $conn->selectDB('parbon');
    $player = new MongoCollection($db, "player");
    if($player){
        $detail = $player->find(array( 'assigned' => "1" ));
        while($detail->hasNext()){
            $doc = $detail->getNext();
            echo "<tr><td>".$doc[name]."</td><td> ".$doc[assigned_team]."</td><td> ".$doc[bidded_price]."</td></tr>";
        }       
        $conn->close();
    }
    else
        echo " Bad connection";
}
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
		<div class="col-md-6" >
			<center><b><h3>Available Player</h3></b></center>
			<table class="table " >
				<thead>
					<tr>
						<th>Photo</th><th>Name</th><th>Score</th><th>Bid Price</th>
					</tr>
				</thead>
				<tbody>
					<?php available_player(); ?>
				</tbody>			
			</table>			
		</div>		<div class="col-md-6" >
			<center><b><h3>Auctioned Player</h3></b></center>
			<table class="table table-bordered" >
				<thead>
					<tr>
						<th>Name</th><th>Assigned Team</th><th>Starting Bid</th>
					</tr>
				</thead>
				<tbody>
					<?php sold_player(); ?>
				</tbody>			
			</table>			
		</div>
	</div>
</div>
<br><br><br><br><br><center><footer >&copy; All right reserved by Incandescence Team</footer></center>
</body>
</html>