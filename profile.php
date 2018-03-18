<?php
// Helping out site Indexx
// All Rights Reserved, (c) 2018, Anas Gauba, Abdul Gauba, Nathan Schaefer, R. Bruce Pitt

if (!isset($lowerLevel))
    $lowerLevel = '';

require_once $lowerLevel . 'assets/inc/standard_open.inc.php';
require_once $lowerLevel . 'assets/inc/standard_header.inc.php';
?>

  
  <footer>
    <div id="contact">
      <div class="container">
      </div>
      <div class="container">
        <div class="row">
            
          <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
            <div id="sendmessage"></div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <h5>Email:</h5>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <h5>Username:</h5>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" />
                <div class="validation"></div>
              </div>
              <h5>Password:</h5>
              <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" data-rule="minlen:4" data-msg="Please enter a valid password" />
                <div class="validation"></div>
              </div>
              <h5>Confirm Password:</h5>
              <div class="form-group">
                <input type="password" class="form-control" name="passwordTwo" id="passwordTwo" data-rule="minlen:4" data-msg="Please enter a password" />
                <div class="validation"></div>
              </div>
              <h5>Phone Number:</h5>
              <div class="form-group">
                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" />
                <div class="validation"></div>
              </div>
            </form>
          </div>
            
            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
            <div id="sendmessage"></div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <h5>Full Name:</h5>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="fullName" data-rule="name" data-msg="Please enter a valid name" />
                <div class="validation"></div>
              </div>
              <h5>Address:</h5>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="address"/>
                <div class="validation"></div>
              </div>
              <h5>City:</h5>
              <div class="form-group">
                  <input type="text" class="form-control" name="city" id="city"/>
                <div class="validation"></div>
              </div>
              <h5>State:</h5>
              <div class="form-group">
                <input type="text" class="form-control" name="state" id="state"/>
                <div class="validation"></div>
              </div>
              <h5>Zipcode:</h5>
              <div class="form-group">
                <input type="zipcode" class="form-control" name="zipcode" id="zipcode"/>
                <div class="validation"></div>
              </div>              
              <div style="margin:0 auto;width:40%;text-align:left">
                  <button type="submit" class="btn btn-theme pull-left">Save Changes</button>
              </div>
            </form>
          </div>
            
            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
            <div id="sendmessage"></div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                  <div class="checkbox">
                      <label>
                          Seeking
                          <div style="margin:0 auto;width:25%;text-align:left">
                          <input type="checkbox" id="seeker"/>
                          </div>
                      </label>
                      <label>
                          Providing
                          <div style="margin:0 auto;width:30%;text-align:left">
                          <input type="checkbox" id="provider"/>
                          </div>
                      </label>
                  </div>
                  &nbsp;
                  <div class="option">
                      <h5>Family Income Range:</h5>
                          <select name="income">
                              <option value="">Select...</option>
                              <option value="incomeTen">$0 - $10,000</option>
                              <option value="incomeTwenty">$10,000 - $20,000</option>
                              <option value="incomeThirty">$20,000 - $30,000</option>
                              <option value="incomeForty">$30,000 - $40,000</option>
                              <option value="incomeFifty">$40,000 - $50,000</option>
                              <option value="incomeSixty">$50,000 - $60,000</option>
                              <option value="incomeSeventy">$60,000 - $70,000</option>
                              <option value="incomeEighty">$70,000 - $80,000</option>
                              <option value="incomeNinety">$80,000 - $90,000</option>
                              <option value="incomeHundred">$90,000 - $100,000</option>
                              <option value="incomeMore">$100,000 or more</option>
                          </select>
                      </label>
                  </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>


<?php
require_once $lowerLevel . 'assets/inc/standard_footer.inc.php';
require_once $lowerLevel . 'assets/inc/standard_script.inc.php';
require_once $lowerLevel . 'assets/inc/standard_close.inc.php';
?>