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
echo "<!-- Start: Links -->\n";
echo "  <div class='container'>\n";
echo "    <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <h1 class='text-center' style='color: gold'>Shared links</h1>\n";
echo "       </div>\n";
echo "    </div>\n";
echo "    <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p><a href='http://bvstrings.org' target='_blank'><img src='/assets/img/BVS-Basic-Wings.jpg' alt='BVStrings' style='width: 100%;'></img></p>\n";
echo "          <p><a href='http://bvstrings.org' target='_blank'>Several of our members are also involved with BVStrings. Please visit their page and say hello!  They have songs and events posted on their site.</a></p>\n";
echo "       </div>\n";
echo "    </div>\n";
echo "    <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p><a href='http://ultimate-guitar.com' target='_blank'><img src='/assets/img/ultimateguitar.png' alt='UG' style='width: 100%;'></img></p>\n";
echo "          <p><a href='http://ultimate-guitar.com' target='_blank'>Several of our members use Ultimate-Guitar site and GuitarPro phone application. Free accounts are available in addition to paid subscription options.</a></p>\n";
echo "       </div>\n";
echo "    </div>\n";

echo " </div>\n";
echo "<!-- End: Links -->\n"; 
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
