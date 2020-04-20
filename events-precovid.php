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
echo "<!-- Start: Events -->\n";
echo "<section id='about' style='background-color: #0a0a0a;background-center: round;opacity: 0.94;background-position: center top;background-repeat: no-repeat;background-image: url(\"./assets/img/SSVNWALogo.png\");'>\n";
echo "  <div class='container'>\n";
echo "    <div class='row'>\n";
echo "      <div class='col-lg-12 text-center'>\n";
echo "         <h2 class='text-uppercase' style='color: rgb(254,209,54);'>SSVNWA Recurring Events</h2>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>SSVNWA offers lessons and practice every Tuesday at 2:30pm in Building 44 Room 245 at the Veteran's Health Care System of the Ozarks (<a href='https://www.fayettevillear.va.gov/'  target='_blank'>VHCSO</a>) 1100 North College Avenue Fayetteville, AR 72703-1944.</p>\n";
echo "         <p></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>SSVNWA meets also meets on the 2nd Sunday of each month at 1:00pm at the Fayetteville Senior Activity Center (<a href='https://www.aaanwar.org/locations/detail/1428' target='_blank'>FVSWAC</a>) 945 S College Ave, Fayetteville, AR 72701.  We have the board meeting followed by a member jam session at 2.</p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "  </div>\n";
echo "</section>";
echo "<!-- End: Events -->\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
