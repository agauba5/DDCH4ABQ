<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>
  
<div class="request-page">
    <form class="request-form">
       <h2>Request</h2>
        <div>
            <label for="Title">Title:</label>
            <textarea class="form-control" rows="1" id="title"></textarea>
        </div>
         <div>
            <label for="Description">Description:</label>
            <textarea class="form-control" rows="5" id="Description"></textarea>
        </div>
       <div>
           <text><a href="#"> + Add Time</a></text>
       </div>
       <div style="align-self: left">
       <button type="cancel" class="btn btn-theme pull-left">Cancel</button>
    </div>
       <div style="align-self: right">
        <button type="submit" class="btn btn-theme pull-left">Submit</button>
    </div>
    </form>

</div>

<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';