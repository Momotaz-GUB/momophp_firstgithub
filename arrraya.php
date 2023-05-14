<?php
 $momo_name = "#Rina Momotaz, ";
 $momo_phone = "017195689898 ";
 $momo_email = "momotaz.c97@gmail.com.";
 echo "</br>".$momo_phone.$momo_name.$momo_email."</br></br>";
//  echo "<br><br><br>";
 $momo_infos = array("Rina Momotaz","017195689898","momotaz.c97@gmail.com",23,"countirngr");
 var_dump($momo_infos);

 echo "</br>".count($momo_infos)."</br></br>";
 echo "</br></br>"."Momotaz's email ID: ".$momo_infos[2];
 echo "<br><br><br><br>";
 $product_info[0]="seosoanal";
 $product_info[1]="vegetable";
 $product_info[2]="potato";
 $product_info[3]="per kilo";
 $product_info[4]=25;
 $product_info[5]="April";
 $product_count = count($product_info);

 echo "</br>".$product_count."</br>";
 for($i=0;$i<$product_count;$i++){
 echo "</br>".$i."</br>";
 echo $product_info[$i];
 }
  //{{edited by ibnul}}
?>
