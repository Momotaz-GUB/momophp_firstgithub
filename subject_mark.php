<!-- <?php
$student_marks = array(
    "rina" => "momotaz",
    "math" => 80,
    "physics" => 90,
    "chemistry" => 70,
    "english" => 97,
    "computer" => 99,
    "islam" => 98
);
$change_key_case = array_change_key_case($student_marks,CASE_UPPER);//case filter korar jonnjo method
foreach($change_key_case as $key => $subject_mark){
    echo $key." = ".$subject_mark."</br>";
}
?> -->

<?php
$student_marks = array(
    "rina" => "momotaz",
    "math" => 80,
    "physics" => 90,
    "chemistry" => 70,
    "english" => 97,
    "computer" => 99,
    "islam" => 98
);

$letter = array(
    "a" => "Associative Array Learning",
    "b" => "This for Case hange",
    "E" => "will not print"
);
$change_key_case = array_change_key_case($letter,CASE_UPPER);
foreach($change_key_case as $key => $subject_mark){
    echo $key." = ".$subject_mark."</br>";
}
?>

