<?php
/* Copyright (c) 2018, Helping Out Us. All rights reserved. */

if (ENVIRONMENT != 'unknown')
{
    // Open Read Database - may be loadbalancer address
	// With the separate connections, if we have a read many, write one (replicate), works as implemented
    try
    {
        $dbCon_Read = new PDO($dbArray['dbRead']['dsn'], $dbArray['dbRead']['user'], $dbArray['dbRead']['pass']);
        $dbCon_Write = $dbCon_Read;
    }
    catch (PDOException $e)
    {
         error_log('Error in '.$e->getFile().' Line: '.$e->getLine().' Error: '.$e->getMessage());
         header('Location: ' . rootpath . 'error.php?err=Database Error-1&msg=' . $e->getMessage());
         exit();
    }

    // Open Write Database  
    try
    {
        $dbCon_Write = new PDO($dbArray['dbWrite']['dsn'], $dbArray['dbWrite']['user'], $dbArray['dbWrite']['pass']);
    }
    catch (PDOException $e)
    {
         error_log('Error in '.$e->getFile().' Line: '.$e->getLine().' Error: '.$e->getMessage());
         header('Location: ' . rootpath . 'error.php?err=Database Error-2&msg=' . $e->getMessage());
         exit();
    }
} 
else // Uknown Database Environment
{
    error_log('Error in '.$e->getFile().' Line: '.$e->getLine().' Error: Unknown Environment');
    header('Location: ' . rootpath . 'error.php?err=Database Error&msg=Uknown Environment' );
    exit();
}