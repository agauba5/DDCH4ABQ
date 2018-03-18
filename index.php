<?php
// Helping out site Index
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>



	<div id="feature">
		<div class="container">
			<div class="row">
				<div class="text-center">
                                    <h3>OUR GOAL</h3>
                                    <img src='img/HH6.jpg' alt='stretch'/>
                                    <h4><b>Welcome to Helping Out Us!</b><br></h4>
                                    <p>
                                        Here, you can help people OR get help
                                        from mentors. The goal of this website is to
                                        help people who are in need OR who want to help
                                        people.<br>Below are two options for you to choose
                                        from! Go ahead and choose from it! May you have an awesome
                                        experience</p>
				</div>
				<div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<a href="seeker.php"> <i class="fa fa-pencil"></i>
								<h2>Seeking</h2></a>
                                                        <p>Looking for someone for help?<br>
                                                        Click this button!</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<a href="resources.php"> <i class="fa fa-plus"></i>
								<h2>Resources</h2></a>
							<p>Want additional help?<br>
                                                            Browse through external resources</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<a href="provider.php"> <i class="fa fa-users"></i>
								<h2>Providing</h2></a>
                                                        <p>Want to help someone?<br>
                                                        Click this button!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';