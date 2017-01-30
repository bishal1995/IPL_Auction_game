<?php

function available_player(){
    $conn = new Mongo();
    $db = $conn->selectDB('parbon');
    $player = new MongoCollection($db, "player");
    if($player){
        $detail = $player->find(array( 'assigned' => "0" ));
        while($detail->hasNext()){
            $doc = $detail->getNext();
            echo "<tr><td>".$doc[name]."</td><td> ".$doc[score]."</td><td> ".$doc[base_bid]."</td></tr>";
        }       
        $conn->close();
    }
    else
        echo " Bad connection";
}




?>
