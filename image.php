<?php
function display_image($id){
	$mongo = new Mongo();
	$gridFS = $mongo->imagebase->getGridFS();
	$object = $gridFS->findOne(array('_id' => new MongoID("$id") ));//query the file object
	header('Content-type: '.$object->file['filetype']);//set content-type header, output in browser
	echo $object->getBytes();
}
display_image($_GET['id']);
?>