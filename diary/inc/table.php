<?php
header('Content-Type: text/html; charset=utf-8');
$name = array ('Иванов Иван','Имена', 'учеников', 'из', 'базы', 'данных', '!!!', '111', '...', '***', 'nnn');
$day=7;
if(!$day%2==0) {
    $day++;
}
for($i=$day/2, $j=0; $i>-$day/2-1, $j<=$day; $i--, $j++){
    $d = new DateTime();
    $d->modify("-$i day");
    $dt[$i]=$d->format("d.m.Y");
    $date[$j]=$dt[$i];
}
$rows = count($name)+1;
$cols = count($date);

$input = <<< INPUT
<form  action="" method="post">
<input size="5" name="" />
</form>
INPUT;

$submit = <<< SUBMIT
<form  action="" method="post">
<input type="submit" name="aplay" value="Aplay" />
</form>
SUBMIT;


$table = '<table border="2" cellspacing="0">';
$table .= '<caption><\?Предмет\?></caption>';
for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if($td == 1 and $tr == 1 ){
            $table .= '<th></th>';
        }
        if($tr == 1 and $td >= 2){
            $table .= '<th>'.$date[$td-1].'</th>';
        }
        if ($td == 1 and $tr >= 2){
            $table .= '<td align="center">'.$name[$tr-2].'</td>';
        }
        if ($td>=2 and $tr>=2){
            $table .= '<td></td>';
        }
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
echo '<br />'.$submit;