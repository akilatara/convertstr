<?php
$html = file_get_contents("https://www.casa.gov.au/rpa-operator-certificate-holders");
$pokemon_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($html))
{ 
    $pokemon_doc->loadHTML($html);
    libxml_clear_errors();
    $list = array('holdername'); 
	$pokemon_xpath = new DOMXPath($pokemon_doc);
	$pokemon_row = $pokemon_xpath->query('//tr');
if($pokemon_row->length > 0)
	{
		foreach($pokemon_row as $row){
			
			echo $row->firstChild->nodeValue. "<br>";
			 
       array_push($list,$row->firstChild->nodeValue);
		
		}

		   $fp = fopen('people.csv', 'w');

   foreach ($list as $fields) {
    fputcsv($fp, array($fields));
}

fclose($fp);
		

	}
}
?>