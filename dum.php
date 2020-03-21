<?php

 $list = array('holdername');
array_push($list, '3FB AERWORX PTY. LTD.');
print_r($list);
    


$fp = fopen('people.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, array($fields));
}

fclose($fp);
?>