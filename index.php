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
    echo "<header class='masthead' style='background-image: url(&quot;assets/img/SSVNWALogo.png&quot;);background-size: auto;'>";
    echo "<div class='container'>";
    echo "  <div class='intro-text'>";
    echo"      <div class='intro-lead-in'><span>Welcome to the Solder Songs and Voices of Northwest Arkansas Website!</span></div>";
    echo "        <div class='intro-heading text-uppercase'><span style='font-size: 30px;'>Thanks for stopping in!</span></div>";
    echo " 		  <div class='intro-lead-in'><span style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>The mission of Soldier Songs &amp; Voices NWA is to foster a creative and supportive community of veterans through music instruction, performance, and outreach.</span></div>";
    echo "    </div>";
    echo "</header>";

// footer HTML and JavaScript codes
include 'layout_foot.php';
?>