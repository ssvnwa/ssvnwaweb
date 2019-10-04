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
echo "<!-- Start: #Team -->\n";
echo "<section class='py-5' style='background-color: #0a0909;color: rgb(236,241,245);filter: brightness(169%) contrast(109%);opacity: 0.84;'>\n";
echo "  <div class='container'>\n";
echo "    <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <h1 class='text-center'>Board Member Listing</h1>\n";
echo "          <p class='text-center'>Lori Holyfield: Founder</p>\n";
echo "          <p class='text-center'>Lee Haight: President</p>\n";
echo "          <p class='text-center'>Jim Hale: Vice President</p>\n";
echo "          <p class='text-center'>BR Lang: Secretary</p>\n";
echo "          <p class='text-center'>Otis Michaud: Webmaster</p>\n";
echo "          <p class='text-center'>Marty Self: Treasurer</p>\n";
echo "       </div>\n";
echo "    </div>\n";
echo " </div>\n";
echo "</section>\n";
echo "<!-- End: #Team -->\n"; 
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
echo "<!-- End: Benefactors -->\n";