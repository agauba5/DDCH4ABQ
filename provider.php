<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>


<div id="feature">
    <div class="provider-page" class="button">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-md-10">
                    <div class="widget">
                        <div class="widget-body">
                            <form id="form-new-facility-client" class="form-horizontal no-margin">
                                <div id="div-filterBy" class="form-group">
                                    <label for="filterBy" class="col-sm-2 control-label">Filter By</label>
                                    <div class="col-sm-8">
                                        <select id="filterBy" name="filterBy" class="form-control" onChange="changeFilter('filterBy')">
                                            <option value="0">Select All</option>
                                            <option value="type">Radius</option>
                                            <option value="type">Range</option>
                                            <option value="type">Select All</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-refresh"></i>
                    </div>
                </div>
            </div>                
        </div>
    </div>
 </div>
<!-- row ends -->





<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';