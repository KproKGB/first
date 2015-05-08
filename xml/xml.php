<?php
/*function clearStr($str){
    $newstr = str_replace(" ", "", $str);
    //$str = str_replace(",",".", $newstr);
    return $newstr;
}*/
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
$newxml = new DOMDocument("1.0", "utf-8");
$doc = $newxml->createElement('doc');
$head = $newxml->createElement('header');
$head->setAttribute('order_date=', '9-10-2015');
$itms = $newxml->createElement('items');
$head->appendChild($itms);
$itm = $newxml->createElement('item');
$itms->appendChild($itm);
$iid= $newxml->createElement('item_id');
$itm->appendChild($iid);
$text = $newxml->createTextNode($id['1']);
$iid->appendChild($text);
$newxml->appendChild($doc);

echo $newxml->saveXML();
?>
