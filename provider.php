<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>


<div id="feature">
    <div class="page">
        <div class="container">
            <div class="text-center">
                <h2><b>Want to provide?</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="widget">
                        <div class="widget-body">
                            <label for="filterBy" class="col-sm-2 control-label">Filter By</label>
                                <div class="col-sm-8">
                                    <select id="filterBy" name="filterBy" class="form-control" onChange="changeFilter('filterBy')">
                                        <option value="0">Select All</option>
                                        <option style="display:none" value="type">Radius</option>
                                        <option style="display:none" value="type">Time Range</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <label>
                        Refresh
                        <div style="margin:0 auto;width:25%;text-align:left"></div>
                    </label>
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-refresh"></i>
                    </div>
                </div>
                <div class="col-sm-1">
                    <label>
                        Request
                        <div style="margin:0 auto;width:25%;text-align:left"></div>
                    </label>
                    <div class="hi-icon-wrap hi-icon-effect">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>                
    </div>
</div>
 </div>

<div id="pricing">
    <div class="container">
        <div class="pricing-area text-center">
            <div class="row">
                <div class="col-sm-2 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
                    <ul>
                    <li class="heading-two">
                    <h2>Date</h2>
                    </li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                        <li></li>
                        <li class="plan-action">
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
                    <ul>
                    <li class="heading-two">
                    <h2>Title</h2>
                    </li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                        <li></li>
                        <li class="plan-action">
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
                    <ul>
                    <li class="heading-two">
                    <h2>Detail</h2>
                    </li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                        <li></li>
                        <li class="plan-action">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>




<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';