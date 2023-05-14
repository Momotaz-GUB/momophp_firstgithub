<?php
echo $title  = $_POST['title']."</br>";
echo $Price  = $_POST['Price']."</br>";
echo $Plan  = $_POST['Plan']."</br></br>";
$featurelist  = $_POST['featurelist'];
$feature_count = count($featurelist);
// var_dump($featurelist);
for($i=0; $i<$feature_count;$i++){
    echo '<img src="tik-icon.jpg" width="15" heigth="15"/>'.$featurelist[$i]."</br>";
}

?>
