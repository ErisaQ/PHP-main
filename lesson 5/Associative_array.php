<?php
$grade = array(
    "Math" => "5",
    "Art" => "5",
    "History" => "5",
    "Music" => "5"
);

foreach($grade as $subject=> $grade){
    echo "Subject:" . $subject . ", Grade:" . $grade;
    echo "<br>";
}
?>