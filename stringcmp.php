<?php

$list =  array('holdername');
array_push($list,'3FB AERWORX PTY. LTD.','4 ONE 4 REAL ESTATE PTY LTD','4D SURVEYING PTY LIMITED','A DOYLE VIDEO PRODUCTION PTY LTD','A.C.N. 628 301 066 PTY LTD T/A SEQUOR ANALYTICS','A.D.T SERVICES PTY LTD T/A XTREME AERIAL VISION','A.I. UAV PTY LTD T/A QMODO','A5PIRE PTY LTD');
print_r($list);
    


$fp = fopen('people.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, array($fields));
}

fclose($fp);
?>

