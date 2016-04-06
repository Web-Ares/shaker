<?php
$id = $_GET['data-id'];
$class = $_GET['class'];

if( $class == 'liked' ) {
    $json_data = '{
        "like": true
    }';
} else {
    $json_data = '{
        "like": false
    }';
}


$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);


echo $json_data;
exit;
?>
