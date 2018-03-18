<?php
	// See if we are actually logged in
if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/classes/session.class.php';
require_once $lowerLevel . 'assets/classes/encrypt.class.php';

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
}?>
<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: white; font-style: italic; font-weight: bold">Helping Out Us</a>
			</div>
<?php
if ($pageId != "signup")
{
	if ($userLoggedIn)
	{
		echo '			<div class="collapse navbar-collapse navbar-right" >
							<span style="color: white; font-weight: 500;">' . $userDispName . '</span>' .
							'<ul class="nav navbar-nav">
								<li><a href="signout.php" style="color: white;">Sign-Out</a></li>
								<!-- <li><a href="#feature">Feature</a></li>
								<li><a href="#gallery">Gallery</a></li>
								<li><a href="#pricing">Price & Plan</a></li>
								<li><a href="#our-team">Our Team</a></li> 
								<li><a href="#contact">Contact</a></li>   -->                     
							</ul>
						</div>	';
	}
	else
	{
		echo '			<div class="collapse navbar-collapse navbar-right">
							<ul class="nav navbar-nav">
								<li><a href="signin.php" style="color: white;">Sign-In/Sign Up</a></li>                   
							</ul>
						</div>';
	}
}
?>			

		 </div><!--/.container-->
	</nav><!--/nav-->		
</header><!--/header-->	