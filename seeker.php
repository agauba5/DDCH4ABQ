<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>

<div class="seeker-page">
        <div class="col-sm-8">
            <select id="filterBy" name="filterBy" class="form-control" onChange="changeFilter('filterBy')">
                <option value="0">Select All</option>
                <option value="type">Radius</option>
                <option value="type">Range</option>
                <option value="type">Select All</option>
            </select>
        </div>
</div>
<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php'; 