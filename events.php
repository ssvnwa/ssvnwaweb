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
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>SSVNWA has currently suspended all live practice and performance events supporting efforts to contain the COVID-19 pandemic.\n";
echo "         <p></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>We held our monthly board meeting via hangouts and are exploring options to resume lessons and performances remotely.\n";
echo "      </div>\n";
echo "    </div>\n";
echo "  </div>\n";
echo "</section>";
echo "<!-- End: Events -->\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
