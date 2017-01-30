<?php

$connection = new Mongo();
$db = $connection->selectDB('parbon');
$player = new MongoCollection($db, "player");
$entry = array(
				'name' => $_POST['name'],
				'county' => $_POST['country'],
				'base_bid' => $_POST['base_bid'],
				'score' => $_POST['score'],
				'assigned' => "0",
				'assigned_team' => null,
				'bidded_price' => null,
				);
$player->insert($entry);
$id = $entry[_id];
$tmpfilepath = $_FILES['photo']['tmp_name'];
$filetype = $_FILES['photo']['type'];
$gridFS = $connection->imagebase->getGridFS();
$id = $gridFS->storeFile( $tmpfilepath , array( 'filetype' => $filetype , '_id' => $id ) );
$connection->close();
?>