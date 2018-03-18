<?php

/* Copyright (c) 2018  Helping Out Us, All Rights Reserved */
/* login.api.php file */


if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/classes/session.class.php';
require_once $lowerLevel . 'assets/classes/encrypt.class.php';
/**
 * Login and authentication - hopefully called with https://
 * loginId and password are in POST data
 * will update session information for the time and encrypted token
 */

//error_log('<!-- Files: ' . print_r($_FILES, true) . ' -->'.PHP_EOL);
error_log('<!-- loginAPI-Posts: ' . print_r($_POST, true) .' -->'.PHP_EOL);
error_log('<!-- loginAPI-Gets: ' . print_r($_GET, true) . ' -->'.PHP_EOL);

// FAKE

$loginId = ( isset($_POST['loginId']) ) ? rawurldecode(strip_tags($_POST['loginId'])) : false;
$password = ( isset($_POST['password']) ) ? rawurldecode(strip_tags($_POST['password'])) : false; 
date_default_timezone_set('America/Denver');
$userLoginTime = time();
$dateTime = date('l, F d, Y',time());

$session = new sessionClass();
$en = new encryptClass();

$session->set("userId", 1);
$session->set("userLoginTime", $userLoginTime);
$session->set("userDispName", $en->encrypt($loginId));
$newUserToken = $en->encrypt($userId . strval($userLoginTime));
$session->set("userLoginToken", $newUserToken);

$returnArray['code'] = 0;
$returnArray['errorLabel'] = 'Success';
$returnArray['errorMsg'] = 'User Login Successful'; 
$returnArray['token'] = rawurlencode($newUserToken); 
$returnArray['userId'] = 1; 
$returnArray['userDispName'] = rawurlencode($loginId); 
echo json_encode($returnArray);	
//error_log('DATA: 12:' . print_r($returnArray, true));	
error_log('DATA: 13:' . json_encode($returnArray));	