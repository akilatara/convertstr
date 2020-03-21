<?php

$html = file_get_contents('https://www.casa.gov.au/rpa-operator-certificate-holders'); //get the html returned from the following url

$game_doc = new DOMDocument();
libxml_use_internal_errors(TRUE); //disable libxml errors
if(!empty($html)) { //if any html is actually returned
    $game_doc->loadHTML($html);
    libxml_clear_errors(); //remove error
    $xpath = new DOMXPath($game_doc);

    // Modify the XPath query to match the content
    foreach ($xpath->query('//table')->item(0)->getElementsByTagName('tr') as $rows) {
        $cells = $rows->getElementsByTagName('td');
        if( $cells->length > 0 ){
            $cells2 = $rows->getElementsByTagName('th');
            echo '<pre>';
             //@ signs are added due to table structure
            //Get scrapped columns
            echo $dayDateBye[] = $cells->item(0)->textContent;
           echo $homeTeam[0] = $cells->item(1)->textContent;
            echo $awayTeam[] = $cells->item(2)->textContent;
            echo $venue[] = $cells->item(3)->textContent;
            echo $timeGMT[] = $cells->item(4)->textContent;
            echo $timeZA[] = $cells->item(5)->textContent;
            echo '</pre>';
        }
    }
}

?>