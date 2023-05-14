<?php
$column = array(
    array(
        'id'=> 1,
        'username' => 'rianmomotaz',
        'cell' => '01719568989'
    ),

    array(
        'id'=> 2,
        'username' => 'riaaz',
        'cell' => '012127198989'
    ),

    array(
        'id'=> 3,
        'username' => 'taz',
        'cell' => '01319563489'
    )
);
$username = array_column($column,'username','cell');

print_r($username); 
?>