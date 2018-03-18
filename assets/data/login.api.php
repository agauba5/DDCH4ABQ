<?php

/* Copyright (c) 2018  Helping Out Us, All Rights Reserved */
/* login.api.php file */

/**
 * Login and authentication - hopefully called with https://
 * loginId and password are in POST data
 * will update session information for the time and encrypted token
 */
?>

<!-- FAKE LOGIN PAGE -- Replace by going to database at a later date -->

<?php
$loginId = ( isset($_GET['cmd']) ) ? rawurldecode(strip_tags($_GET['cmd'])) : false;          // $cmdPage



