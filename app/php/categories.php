<?php
$button = $_GET['data-id'];

if( $button == '2' ){
    $json_data = '{
        "id": 1,
        "btn" : "Categories",
        "set": [ "D. Midenge", "G. Lucas", "R. Noaami", "D. piterson", "G. Hofner", "D. Midenge", "G. Lucas", "R. Noaami", "D. piterson", "G. Hofner", "D. Midenge", "G. Lucas" ]
    }';
}
if( $button == '1'){
    $json_data = '{
        "id": 2,
        "btn" : "Signature Line",
        "set": [ "Architecture", "Landscape", "Fashion", "Artistic", "Still Life"," Animals", "Transportation", "Provocative", "Heroes", "Magical Beauty", "Illustrations" ]
    }';
}

$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);


echo $json_data;
exit;
?>
