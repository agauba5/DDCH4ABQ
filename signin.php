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
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a onclick="changetosignup()">Create an account</a></p>
        </form>
      </div>
      <div id="form-signup" style="display: none;">
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
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