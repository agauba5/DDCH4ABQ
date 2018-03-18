<?php
    $list = array(
        0 => array(
            'ID' => 001,
            'Title' => "test",
            'User_ID' => "Maria",
            'Detail' => "Seeking cat food for my beloved Mittens. I'm located in the south valley, any help is highly appreciated!!",
            'Date' => 1521345266)
        
        
        
        
    );
        
    
foreach ( $list as $var ) {
    echo "\n ", "ID: ", $var['ID'], "\n", "Title: \n", $var['Title'], "\nUser ID: ", $var['User_ID'], "\nDetail: ", $var['Detail'], "\nDate: ", $var['Date'];
}


?>
