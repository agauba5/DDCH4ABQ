<?php
// Helping out site Index
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>


<div class="wrap">
<!-- strat-contact-form -->	
<!---728x90--->
<div class="contact-form">
<!-- start-form -->
	<form class="contact_form" action="#" method="post" name="contact_form">
		<h1>Login Into Your Account</h1>
	    <ul>
	        <li>
	            <input class="textbox1" name="email" placeholder="info@w3layouts.com" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off" type="email">
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input name="website" class="textbox2" placeholder="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off" type="password">
	            <p><img src="images/lock.png" alt=""></p>
	        </li>
         </ul>
       	 	<input name="Sign In" value="Sign In" type="submit">
			<div class="clear"></div>	
			<label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>Remember me</label>
		<div class="forgot">
			<a href="#">forgot password?</a>
		</div>	
		<div class="clear"></div>	
	</form>
<!-- end-form -->
<!-- start-account -->
<div class="account">
	<h2><a href="#">Don' have an account? Sign Up!</a></h2>
    <div class="span"><a href="#"><img src="images/facebook.png" alt=""><i>Sign In with Facebook</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="#"><img src="images/twitter.png" alt=""><i>Sign In with Twitter</i><div class="clear"></div></a></div>
    <div class="span2"><a href="#"><img src="images/gplus.png" alt=""><i>Sign In with Google+</i><div class="clear"></div></a></div>
</div>	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!---728x90--->
<!-- end-contact-form -->
<div class="footer">
    
</div>
</div>


<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';