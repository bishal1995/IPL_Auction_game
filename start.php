<?php
function start_query(){
    session_start();
    $_SESSION['index'] = array();
    $_SESSION['id_index'] = -1;
    $conn = new Mongo();
    $db = $conn->selectDB('parbon');
    $player = new MongoCollection($db, "player");
    if($player){        
        $detail = $player->find(array( 'assigned' => "1" ));
        while ($detail->hasNext()) {
        	$doc = $detail->getNext();
        	$_SESSION['index'][] = $doc[_id];        
        }
    }
    else
        echo "Bad connection";
}
start_query();
?>