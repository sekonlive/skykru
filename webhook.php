<?php


 $data = [ 'speech' => 'This speech is from MyPHP webhook', "displayText" => 'This DisplayText is from MyPHP webhook','source' => 'MyWebhook', 'data' => '', 'contextOut' => 'MyWebhook-ContextOut' ];
header('Content-type: application/json');
echo json_encode( $data );

?>
