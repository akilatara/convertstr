<?php

 $list = array('holdername');
array_push($list, $row->firstChild->nodeValue);
print_r($list);
    


$fp = fopen('people.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, array($fields));
}

fclose($fp);
?>