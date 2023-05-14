<?php
$person_info = array (
    "key" => "value",
    "name" => "rina momtaz",
    "cell" => "01719568989",
    "email" => "momotaz@gmail.com",
    "website" => "ww.momotaz.com"
);
$devide = array_chunk($person_info,2,true);
var_dump($devide);      

?> 
