<?php
// Copyright 2018, Helping Out Us. All Rights Reserved.

if (($host == "localhost") || ($ip == '127.0.0.1') || ($ip == '192.168.128.154')) // Running on local machine
{
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Macintosh') != false)
	{
    	$dbArray = array( 'dbRead' => array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306;charset=utf8', 'user' => 'houWebReadUser',   'pass' => 'R35Ud@3rb3W#UoH!', 'name' => 'DDCH4ABQ' ),
						  'dbWrite'=> array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306;charset=utf8', 'user' => 'houWebWriteUser',  'pass' => 'R35Ud@3rb3W#!uOh!', 'name' => 'DDCH4ABQ' ),

						);
		DEFINE('ENVIRONMENT','local');		
	}
    else
	{
		$dbArray = array( 'dbRead' => array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306;', 'user' => 'houWebReadUser',   'pass' => 'R35Ud@3rb3W#UoH!', 'name' => 'DDCH4ABQ' ),
						  'dbWrite'=> array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306;', 'user' => 'houWebReadUser',   'pass' => 'R35Ud@3rb3W#UoH!', 'name' => 'DDCH4ABQ' ),
						);
		 DEFINE('ENVIRONMENT','local');
	}
}
elseif (($host == "helpingout.us") || ($host == "www.helpingout.us"))
{
    $dbArray = array( 'dbRead' => array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306"', 'user' => 'houWebReadUser',   'pass' => 'R35Ud@3rb3W#UoH!', 'name' => 'DDCH4ABQ' ),
                      'dbWrite'=> array( 'dsn' => 'mysql:dbname=DDCH4ABQ;host=localhost;port=3306"', 'user' => 'houWebReadUser',   'pass' => 'R35Ud@3rb3W#UoH!', 'name' => 'DDCH4ABQ' ),
					);


    DEFINE('ENVIRONMENT','prod');       
}
else
{
    DEFINE('ENVIRONMENT','unknown');    
}