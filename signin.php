<?php
// Helping out site Index
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

include $lowerLevel . 'assets/inc/standard_open.inc.php';
$pageId = "signin";
include $lowerLevel . 'assets/inc/standard_header.inc.php';
?>


<div class="login-page">
    <div class="form">
      <div id="form-signin" >
        <form class="login-form">
          <input id="loginId" name="loginId" type="text" placeholder="username"/>
          <input id="password" name="password" type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a onclick="changetosignup()">Create an account</a></p>
        </form>
      </div>
      <div id="form-signup" style="display: none;">
        <form class="register-form">
          <input id="addLoginId" name="addLoginId" type="text" placeholder="name"/>
          <input id="addPassword" name="addPassword" type="password" placeholder="password"/>
          <input id="addConfirm" name="addConfirm" type="confirm" placeholder="confirm password"/>		  
          <input id="addEmail" name="addEmail" type="text" placeholder="email address"/>
		  <div class="checkbox"><label>no email</label>
			<input id="addNoEmail" name="addNoEmail" type="checkbox" />

		  </div>
		<input id="addPhone" name="addPhone" type="text" placeholder="phone"/>
		  <select class="col-lg-12" id="addCarrier" name="addCarrier" type="text" >
			  <option value="0">-- Select Carrier --</option>
			  <option value="att">AT&T</option>
			  <option value="ver">Verizon</option>
			  <option value="tm">T-Mobile</option>
			  <option value="cri">Cricket</option>
		  </select>		
		<p>
			<button>create my user</button></p>
          <p class="message">Already registered? <a onclick="changetosignin()">Sign In</a></p>
        </form>
      </div>
    </div>

</div>

<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
?>
<script src="assets/js/signup.js"></script>
<?php
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';