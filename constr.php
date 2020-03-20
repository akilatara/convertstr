<?php

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"'),
);

//array_push($list,'3FB AERWORX PTY. LTD.','ewffwe','fsffdsf','fdsfg');
print_r($list);
var_dump($list);
$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>
