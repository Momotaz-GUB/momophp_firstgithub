<?php
$price_list = array(
    'a' => 50,
    'b' => 100,
    'c' => 150,
    'd' => 160
);
$another_price_list = array(
    'a' => 50,
    'b' => 100,
    'c' => 150
);
$new_diff_array = array_diff($price_list,$another_price_list);
// print_r ($new_diff_array);
print_r ($new_diff_array);
?>