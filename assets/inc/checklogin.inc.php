<?php
	// See if we are actually logged in
if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/classes/session.class.php';
require_once $lowerLevel . 'assets/classes/encrypt.class.php';

// Returns $userDispName (decyrpted name), $userLoggedIn (boolean), $userLoginTime (bigInt - unixtimestamp)

// Now we see if we are logged in with the correct user Id and token
$session = new sessionClass();
$en = new encryptClass();

// Empty information
$userDispName = "";

// Create a user login session information
$eUserId = $session->get("userId");
$userLoggedIn = false;
if ($eUserId !== false)
{
	$userId = $en->decrypt($eUserId);
	$userLoginTime = $session->get("userLoginTime");
	if ($userLoginTime !== false)
	{
		$userToken = $session->get("userLoginToken");
		$eUserDispName = $session->get("userDispName");
		if ($userToken !== false)
		{
			// Generate a new token from the old token
			$newUserToken = $en->encrypt($userId . $userLoginTime);
			if ($newUserToken == $userToken)
			{
				$userLoggedIn = true;
				$userDispName = $en->decrypt($eUserDispName);
			}
			else
			{
				$session->del("userLoginToken");
				$session->del("userDispName");
				$session->del("userLoginId");
			}
		}
		else
		{
			$session->del("userDispName");
			$session->del("userLoginId");
		}
	}
	else
	{
		$session->del("userLoginId");
	}
}