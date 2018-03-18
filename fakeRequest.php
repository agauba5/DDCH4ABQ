<?php
    $list = array(
        0 => array(
            'ID' => 001,
            'Title' => 'test',
            'User_ID' => 'Maria',
            'Detail' => 'Seeking cat food for my beloved Mittens.',
            'Date' => 1521345266)
        
        
        
        
    );
        
    
foreach ( $list as $var ) {
    echo "\n ", "ID: ", $var['ID'], "\n", "Title: \n", $var['Title'], "\n", $var['User_ID'], "\n", $var['Detail'], "\t\t", $var['Date'];
}


?>
