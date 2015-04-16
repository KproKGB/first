<?php
$z = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$p = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$c = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$b = array();
$result= '';
$l = 0;

function genPass ($am, $result)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $k = (int)$_POST['kol'];
        $d = (int)$_POST['len'];

        for ($j = 0; $j < $k; $j++) {
            for ($i = 0; $i < $d; $i++) {
                if (count($am) != 0) {
                    $l = rand(0, count($am) - 1);
                    $result .= $am[$l];
                } else {
                    $result = '';
                }

            }

            echo $result . "<br>";
            $result = '';
        }

    }
}

//Обрабока входных данных
if(isset($_POST['zagl']) and isset($_POST['propis']) and isset($_POST['chisl'])){
    $am= array_merge($z, $p, $c);
}
elseif (isset($_POST['zagl']) and isset($_POST['propis'])){
    $am= array_merge($z, $p);
}
elseif(isset($_POST['propis']) and isset($_POST['chisl'])){
    $am= array_merge($p, $c);
}
elseif(isset($_POST['zagl']) and isset($_POST['chisl'])){
    $am= array_merge($z, $c);
}
elseif (isset($_POST['zagl'])) {
    $am = $z;
}
elseif (isset($_POST['propis'])) {
    $am = $p;
}
elseif (isset($_POST['chisl'])) {
    $am = $c;
}
else {
    $am = $b;
}

?>