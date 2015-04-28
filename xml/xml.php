<?php
function clearStr($str){
    $newstr = preg_replace("/[\s]*/", "", $str);
    $str = str_replace(",",".", $newstr);
    return $str;
}
$price = simplexml_load_file("price.xml");
$child = $price->children();
$child2 = $child->children();
$child3 = $child2->children();
$cnt = count($child3);

    for($i=0; $i<$cnt; $i++){
        $id[$i]=strip_tags($child3[$i]->item_id);
        $art[$i]=strip_tags($child3[$i]->item_art);
        $name[$i]=strip_tags($child3[$i]->item_name);
        $kind[$i]=strip_tags($child3[$i]->item_kind);
        $brand[$i]=strip_tags($child3[$i]->item_brand);
        $price1[$i]=strip_tags($child3[$i]->item_price1);
        $price2[$i]=strip_tags($child3[$i]->item_price2);
        $picture[$i]=strip_tags($child3[$i]->item_picture);
        $description[$i]=strip_tags($child3[$i]->item_description);
        $availability[$i]=strip_tags(intval($child3[$i]->item_availability));
    }
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>xml</title>
 </head>
 <body> 
    <pre>
    <?php print_r(clearStr($price1));?>
    </pre>
 </body>
</html>
