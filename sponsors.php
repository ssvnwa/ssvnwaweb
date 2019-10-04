<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title="Soldier Songs And Voices Northwest Arkansas Chapter";
 
// do no include login checker as default
$require_login=false;

// include page header HTML
include_once 'layout_head.php';
// content 
echo "<!-- Start: Benefactors -->\n";
echo "<section id='benefactors'  style='background-color: #0a0a0a;background-center: round;opacity: 0.94;background-position: center;background-repeat: no-repeat;background-image: url(&quot;assets/img/acoustic-guitars.jpg&quot;);'>\n";
echo "   <div class='container' style='color: rgb(24,25,25);'>\n";
echo "      <div class='row'>\n";
echo "         <div class='col-lg-12 text-center' style='color: rgb(2,3,4);'>\n";
echo "            <h2 class='text-uppercase section-heading' style='background-color: #171515;color: rgb(254,209,54);background-repeat: no-repeat;'>Sponsors</h2>\n";
echo "            <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>SSVNWA can't exist without the generosity of our sponsors. We are always grateful for any support we can obtain for our cause</p>\n";
echo "            <p> <form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'><input type='hidden' name='cmd' value='_s-xclick' /><input type='hidden' name='hosted_button_id' value='XJD4R2YP3CL3Y' /><input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' title='PayPal - the safer, easier way to pay online!' alt='Donate with PayPal button' /> <img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1' />\n";
echo "            </form></p>\n";
echo "            <p><a href='https://www.guidestar.org/profile/82-3020010' target='_blank'><img src='https://widgets.guidestar.org/gximage2?o=9674175&l=v4' /></a></p>\n";
echo "         </div>\n";
echo "      </div>\n";
echo "   </div>\n";
echo "</section>\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
echo "<!-- End: Benefactors -->\n";