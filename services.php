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
echo "<!-- Start: Services -->\n";
echo "<section class='text-info' id='services' style='opacity: 0.79;background-size: contain;color: #d6cccc;background-color: #110a0a;'>\n";
echo "  <div class='container'>\n";
echo "     <div class='row'>\n";
echo "       <div class='col-lg-12 text-center' style='background-repeat: space;'>\n";
echo "         <h2 class='text-uppercase section-heading' style='color: rgb(254,209,54);'>Member services</h2>\n";
echo "        </div>\n";
//echo "	   <div class='col-lg-12 text-center'><a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' role='button' href='members.php'>Member Login (coming soon)</a></div>\n";
echo "        <div class='row text-center'>\n";
echo "          <div class='col-md-4'><span class='fa-stack fa-4x'></span>\n";
echo "             <img src='/assets/img/acoustic-guitars.jpg' alt='Instruments' style='max-width: 100%; height: 150px' >\n";
echo "             <h4 class='section-heading'>Instruments</h4>\n";
echo "             <p class='text-muted'>SSVNWA currently provides each member with a student guitar in exchange for attendance at 8 weekly group lesson sessions.</p>\n";
echo "           </div>\n";
echo "           <div class='col-md-4'><span class='fa-stack fa-4x'></span>\n";
echo "              <img src='/assets/img/AcousticTune.jpg' alt='Instruments' style='max-width: 100%; height: 150px' >\n";
echo "              <h4 class='section-heading'>Instruction</h4>\n";
echo "              <p class='text-muted'>SSVNWA provides instruction at weekly group sessions free of charge.</p>\n";
echo "           </div>\n";
echo "           <div class='col-md-4'><span class='fa-stack fa-4x'></span>\n";
echo "              <img src='/assets/img/SongBook.jpg' alt='Instruments' style='max-width: 100%; height: 150px' >\n";
echo "              <h4 class='section-heading'>Song Library</h4>\n";
echo "              <p class='text-muted'>SSVNWA provides access to shared member songs and covers with lyrics and chords.&nbsp;</p>\n";
echo "           </div>\n";
echo "     </div>\n";
echo "  </div>\n";
echo "</section>\n";
echo "<!-- End: Services -->\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>