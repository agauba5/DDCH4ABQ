<?php
	// See if we are actually logged in
if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/classes/session.class.php';
$session = new sessionClass();
$lang = $session->get("lang");

echo '<!-- GET:' . print_r($_GET, true) . ' -->' .PHP_EOL;

if (isset($_GET["lang"]))
{
	$lang = strip_tags($_GET["lang"]);
	echo '<!-- newLang:' . $lang . ' -->' .PHP_EOL;	
}
else
{
	$lang = "en";
}

$session->set("lang",$lang);

require_once $lowerLevel . 'assets/classes/encrypt.class.php';

// Returns $userDispName (decyrpted name), $userLoggedIn (boolean), $userLoginTime (bigInt - unixtimestamp)
include $lowerLevel . 'assets/inc/checklogin.inc.php';

$langText = "";
if ($lang != "en")
{
	$langText = "?lang=" . $lang;
}
?>
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
                    <a class="navbar-brand" href="index.php<?php echo $langText;?>" style="color: white; font-style: italic; font-weight: bold">Helping Out Us</a>
			</div>
<?php
echo '<!-- pageId:' . $pageId . ' -->' . PHP_EOL;
if ($pageId != "signin")
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
								<li><a href="index.php?lang=es" style="color: white;">Espa&#241;ol</a></li>      
								<li><a href="index.php?lang=en" style="color: white;">English</a></li>   								
								<li><a href="signin.php" style="color: white;">Sign-In/Sign Up</a></li>                   
							</ul>
						</div>';
	}
}
else
{
		echo '			<div class="collapse navbar-collapse navbar-right">
							<ul class="nav navbar-nav">
								<li><a href="#" style="color: white;"></a></li>                   
							</ul>
						</div>';
}
?>			

		 </div><!--/.container-->
	</nav><!--/nav-->		
</header><!--/header-->	