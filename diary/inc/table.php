<?php
//include "parse_ini.inc.php";
//include "../classes/connectDB.class.php";
//include "../classes/table.class.php";
header('Content-Type: text/html; charset=utf-8');

/*$con = new connectDB();
$con->dbConnect($host, $user, $pass, $base);*/
$name = array ('Vasya', 'Petya', 'Sasha', 'Ivan', 'Slava', 'Ilya');
$day=7;
if(!$day%2==0) {
    $day++;
}
for($i=$day/2, $j=0; $i>-$day/2-1, $j<=$day; $i--, $j++) {
    $d = new DateTime();
    $d->modify("-$i day");
    $dt[$i]=$d->format("d.m.Y");
    $date[$j]=$dt[$i];
}
$rows = count($name)+1;
$cols = count($date);



$table = '<table border="2">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if($td == 1 and $tr == 1 ){
            $table .= '<td></td>';
        }
        if($tr == 1 and $td >= 2){
            $table .= '<td>'.$date[$td-1].'</td>';
        }
        if ($td == 1 and $tr >= 2){
            $table .= '<td>'.$name[$tr-2].'</td>';
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;
?>