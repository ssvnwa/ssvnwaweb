<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title="Soldier Songs And Voices Northwest Arkansas Chapter";
 
// do not include login checker as default
$require_login=false;

// include page header HTML
include_once 'layout_head.php';
// content
echo "<!-- Start: #Contact -->\n";
echo "<section id='contact' style='background-color: rgb(7,8,8);'>\n";
echo "  <div class='col-lg-12 text-center'>\n";
echo "     <h2 class='text-uppercase section-heading' style='color: rgb(254,209,54);'>Contact Us</h2>\n";
echo "  </div>\n";
echo "  <div class='container'>\n";
echo "    <div class='row'></div>\n";
echo "      <div class='row'>\n";
echo "        <div class='col-lg-12'>\n";
echo "          <form id='contactForm' name='contactForm' novalidate='novalidate' action='contactex.php' method='post' id='form' class='contact-form'>\n";
echo "              <div class='form-row'>\n";
echo "                 <div class='col col-md-6'>\n";
echo "                   <div class='form-group'><input class='form-control' type='text' required='true' id='name' name='cf_name' placeholder='Your Name *'><small class='form-text text-danger flex-grow-1 help-block lead'></small></div>\n";
echo "                   <div class='form-group'><input class='form-control' type='email' required='true' id='email' name='cf_email' placeholder='Your Email *'><small class='form-text text-danger help-block lead'></small></div>\n";
echo "                   <div class='form-group'><input class='form-control' type='tel' required='' placeholder='Your Phone *'><small class='form-text text-danger help-block lead'></small></div>\n";
echo "                 </div>\n";
echo "              <div class='col-md-6'>\n";
echo "                 <div class='form-group'><textarea class='form-control' required='' id='message' name='cf_message' placeholder='Your Message *'></textarea><small class='form-text text-danger help-block lead'></small></div>\n";
echo "              </div>\n";
echo "              <div class='col'>\n";
echo "                 <div class='clearfix'></div>\n";
echo "              </div>\n";
echo "              <div class='col-lg-12 text-center'>\n";
echo "                 <div id='success'></div><button class='btn btn-primary btn-xl text-uppercase' type='submit' id='sendMessageButton'>Send Message</button></div>\n";
echo "              </div>\n";
echo "          </form>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "  </div>\n";
echo "</section>\n";
echo "<!-- End: #Contact -->\n";	
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
