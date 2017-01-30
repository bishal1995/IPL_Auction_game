<?php


$connection = new Mongo();
$db = $connection->selectDB("parbon");
$team_coll = new MongoCollection($db, "team");

$team = $_POST['team'];
$player = $_POST['player'];
$bid = intval($_POST['bid']);

$team_det = $team_coll->findone( array( 'name' => $team ) );
$bal = intval($team_det[balance]);

if( $bid < $bal ){
	$player_coll = new MongoCollection($db, "player");
	$player_det = $player_coll->findone( array( 'name' => $player ) );
	$base_price = intval($player_det[base_bid]);
	if( $bid >= $base_price && $player_det[assigned]=="0" ){
		
		$player_det[assigned] = "1";
		$player_det[assigned_team] = $team;
		$player_det[bidded_price] = "$bid";
		$player_coll->save($player_det);		

		$score = intval($player_det[score]);
		$id = $player_det[_id];
		$bal = $bal - $bid;
		$team_score = intval($team_det[score]);
		$team_score = $team_score + $score;		
		$index = count( $team_det[players] ) + 1;
		$team_det[players][$index] = $id;
		$team_det[balance] = "$bal";
		$team_det[score] = "$team_score";
		$team_coll->save($team_det);

		$log_coll = new MongoCollection($db, "log");
		$log = array(
					'team' => $team_det[name],
					'player' => $player_det[name],
					'bid' => "$bid",
					);
		$log_coll->insert($log);

		$connection->close();
		function redirect($url, $statusCode = 303)
		{
			header('Location: ' . $url, true, $statusCode);
		   	die();
		}
		$val = 'controller.php';
		$connection->close();
		redirect($val); 
	}
	else
		echo "Bid not possible";
}
else
	echo "Cannot buy";
?>