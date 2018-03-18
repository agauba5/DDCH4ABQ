<?php
    $seeker = array(
        0 => array(
            'ID' => 0243,
            'Title' => "Looking for Cat Food!",
            'User_ID' => "Maria",
            'Detail' => "Seeking cat food for my beloved Mittens. I'm located in the south valley, any help is highly appreciated!!",
            'Date' => 1521345266)
        );
    
    $giver = array(
        0 => array(
            'ID' => 2343,
            'Title' => "test",
            'User_ID' => "Maria",
            'Detail' => "Seeking cat food for my beloved Mittens. I'm located in the south valley, any help is highly appreciated!!",
            'Date' => 1521345266)
        );
        
    
foreach ($seeker as $var ) {
    echo "\n ", "ID: ", $var['ID'], "\n", "Title: \n", $var['Title'], "\nUser ID: ", $var['User_ID'], "\nDetail: ", $var['Detail'], "\nDate: ", $var['Date'];
}

foreach ($giver as $var ) {
    echo "\n ", "ID: ", $var['ID'], "\n", "Title: \n", $var['Title'], "\nUser ID: ", $var['User_ID'], "\nDetail: ", $var['Detail'], "\nDate: ", $var['Date'];
}


?>
