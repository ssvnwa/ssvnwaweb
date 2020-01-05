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
echo "<!-- Start: About -->\n";
echo "<section id='about' style='background-color: #0a0a0a;background-center: round;opacity: 0.94;background-position: center top;background-repeat: no-repeat;background-image: url(&quot;assets/img/SSVNWALogo.png&quot;);'>\n";
echo "  <div class='container'>\n";
echo "    <div class='row'>\n";
echo "      <div class='col-lg-12 text-center'>\n";
echo "         <h2 class='text-uppercase' style='color: rgb(254,209,54);'>ABOUT SSVNWA</h2>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>The mission of Soldier Songs &amp; Voices NWA is to foster a creative and supportive community of veterans through music instruction, performance, and outreach.</p>\n";
echo "         <p><a href='https://www.guidestar.org/profile/82-3020010' target='_blank'><img src='https://widgets.guidestar.org/gximage2?o=9674175&l=v4' /></a></p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "  </div>\n";
echo "</section>";
echo "<!-- End: About -->\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
