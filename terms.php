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
echo "<br><br><br><br>\n";
echo "<!-- Start: Privacy -->\n";
echo "<section class='py-5' style='background-color: #0a0909;color: rgb(236,241,245);filter: brightness(169%) contrast(109%);opacity: 0.84;'>\n";
echo "  <div class='container'>\n";
echo "    <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <h1 class='text-center' style='color: gold'>Terms of Use</h1>\n";
echo "          <p>Thanks for visiting the Soldier Songs and Voices NorthWset Arkansas Chapter ('SSVNWA') website.</p>\n";
echo "          <p>These terms of service ('Terms') cover your use and access to the products, services, software, platform and websites (collectively, 'Services') provided by SSVNWA and any of our affiliates (collectively, 'SSVNWA').</p>\n";
echo "          <p>By using our Services, you agree to be bound by these Terms as well as our <a href='privacy.php' alt='Privacy Policy'>Privacy policy</a></p>\n";
echo "          <p>If you are using our Services as the employee or agent of an organization, you are agreeing to these Terms on behalf of that organization. Please note that the statements set forth under the headings 'More simply put' are provided as a courtesy solely for your convenience and are not legally binding or otherwise intended to modify these terms in any way.</p>\n";
echo "          <p>You must be the legal age of majority in your state of residence or otherwise able to form a binding contract with SSVNWA in order to use the Services. The Services provided SSVNWA are intended for use only by the veteran members of SSVNWA.</p>\n";
echo "       </div>\n";
echo "    </div>\n";
echo " </div>\n";
echo "</section>\n";
echo "<!-- End: Privacy -->\n"; 
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
