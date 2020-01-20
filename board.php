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
echo "<!-- Start: #Board -->\n";
echo "<section id='board' style='background-color: #0a0909;color: rgb(236,241,245);filter: brightness(169%) contrast(109%);opacity: 0.84;'>\n";
echo "  <article>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <h2 class='text-center'>Board Members</h2>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>President:  Lee Haight</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'> Vice President:  Jim Hale</p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>  Secretary:  BR Lang</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>  Position 1:  Howard Schuettpelz: </p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Position 2:  Larry Long</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Position 3:  Marty Self</p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Position 4:  Otis Michaud</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <h2 class='text-center'>Advisory Board Members</h2>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Lori Holyfield</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Steve Poynter</p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>James Garner</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Keith Vire</p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "     <div class='row'>\n";
echo "       <div class='col'>\n";
echo "          <p class='text-center'>Johnathan Paape</p>\n";
echo "       </div>\n";
echo "       <div class='col'>\n";
echo "       </div>\n";
echo "     </div>\n";
echo " </article>\n";
echo "</section>\n";
echo "<!-- End: #Board -->\n"; 
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
