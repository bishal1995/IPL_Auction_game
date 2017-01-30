<?php

$connection = new Mongo();
$db = $connection->selectDB("parbon");
$team_coll = new MongoCollection($db, "team");
$player_coll = new MongoCollection($db, "player");
$log_coll = new MongoCollection($db, "log");

$log = $log_coll->find()->sort(array('_id' => -1))->limit(1);
$revert = $log->getNext();
$team = $team_coll->findone(array('name'=>$revert[team]));
$player = $player_coll->findone(array('name'=>$revert[player]));

$bal = intval($revert[bid]) + intval($team[balance]);
$team[balance] = "$bal";
$score = intval($team[score]) - intval($player[score]);
$team[score] = "$score";
$index = count( $team[players] );
unset($team[players][$index]);
$team_coll->save($team);

$player[assigned] = "0";
$player[assigned_team] = null;
$player[bidded_price] = null;
$player_coll->save($player);

$connection->close();
function redirect($url, $statusCode = 303)
{
	header('Location: ' . $url, true, $statusCode);
   	die();
}
$val = 'controller.php';
$connection->close();
redirect($val);


?>