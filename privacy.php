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
echo "          <h1 class='text-center' style='color: gold'>Privacy Policy</h1>\n";
echo "          <img src='./assets/img/lockitup.jpg' alt='Privacy' style='display: block; margin-left: auto; margin-right: auto; height: 30%;' >\n";
echo "          <p>Soldier Songs and Voices Northwest Arkansas chapter will never release any personal data collected in connection with the operation of our site to anyone at any time or for any reason.</p>\n";
echo "       </div>\n";
echo "    </div>\n";
echo " </div>\n";
echo "</section>\n";
echo "<!-- End: Privacy -->\n"; 
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
