<?php
    $seeker = array(
        0 => array(
            'ID' => 1243,
            'Title' => "Looking for Cat Food!",
            'User_ID' => "MariaLopez132",
            'Detail' => "Seeking cat food for my beloved Mittens. I'm located in the south valley, any help is highly appreciated!!",
            'Date' => 1521345266),
        1 => array(
            'ID' => 6895,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        2 => array(
            'ID' => 1313,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        3 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        4 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        );
    
    $giver = array(
        0 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        1 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        2 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        3 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265),
        4 => array(
            'ID' => 2343,
            'Title' => "",
            'User_ID' => "",
            'Detail' => "",
            'Date' => 1521345265)
        );
        
    
foreach ($seeker as $var ) {
    echo "\r\n ", "ID: ", $var['ID'], "\r\n", "Title: \n", $var['Title'], "\r\nUser ID: ", $var['User_ID'], "\r\nDetail: ", $var['Detail'], "\r\nDate: ", $var['Date'], "\n";
}

foreach ($giver as $var ) {
    echo "\r\n", "ID: ", $var['ID'], "\r\n", "Title: \n", $var['Title'], "\r\nUser ID: ", $var['User_ID'], "\r\nDetail: ", $var['Detail'], "\r\nDate: ", $var['Date'], "\n";
}


?>
