<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

$pageId ="data"; 
$returnArray = array();


// Returns $userDispName (decyrpted name), $userLoggedIn (boolean), $userLoginTime (bigInt - unixtimestamp)
include $lowerlevel . 'assets/inc/checklogin.inc.php';

$cmdPage = ( isset($_GET['cmd']) ) ? rawurldecode(strip_tags($_GET['cmd'])) : false;          // $cmdPage

if ($userLoggedIn)
{
	if ($cmdPage == false)
	{
		$returnArray['code'] = $subPage . "-9002";
		$returnArray['errorLabel'] = 'Bad Data';
		$returnArray['errorMsg'] = 'Unknown Command'; 		
	}
	else
	{
		$filename = 'assets/data/' . $cmdPage . '.api.php';  
		if (file_exists($filename))
		{
			include $filename;  
		}
		else
		{			
			$returnArray['code'] = $subPage . "-9000";
			$returnArray['errorLabel'] = 'Cmd Error';
			$returnArray['errorMsg'] = 'Cmd ' . $filename . ' not found'; 		
		}	
	}
}
else if ($cmdPage == 'login')
{
	$filename = 'assets/data/' . $cmdPage . '.api.php';  
	if (file_exists($filename))
	{
		include $filename;  
	}
	else
	{			
		$returnArray['code'] = $subPage . "-9000";
		$returnArray['errorLabel'] = 'Cmd Error';
		$returnArray['errorMsg'] = 'Cmd ' . $filename . ' not found'; 		
	}	
}
else
{
	$returnArray['code'] = $subPage . "-9001";
	$returnArray['errorLabel'] = 'Authorization';
	$returnArray['errorMsg'] = 'Failed Authorization'; 		
}
header('Content-Type: application/json');
header("Content-Transfer-Encoding: UTF-8");
header("Expires: 0");
echo json_encode($returnArray);	
//error_log('APILOADER: 12:' . print_r($returnArray, true));	
//error_log('APILOADER: 13:' . json_encode($returnArray));	
exit();



