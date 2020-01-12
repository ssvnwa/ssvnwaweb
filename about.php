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
echo "<section id='about' style='background-color: #0a0a0a;background-center: round;opacity: 0.94;background-position: center top;background-repeat: no-repeat;background-image: url(\"./assets/img/SSVNWALogo.png\");'>\n";
echo "    <article>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h2 class='text-uppercase' style='color: rgb(254,209,54);'>ABOUT SSVNWA</h2>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>The mission of Soldier Songs &amp; Voices NWA is to foster a creative and supportive community of veterans through music instruction, performance, and outreach.</p>\n";
echo "         <p><a href='https://www.guidestar.org/profile/82-3020010' target='_blank'><img src='https://widgets.guidestar.org/gximage2?o=9674175&l=v4' /></a></p>\n";
echo "      </div>\n";
echo "    </article>\n";
echo "    <article>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h2 class='text-uppercase' style='color: rgb(254,209,54);'>CHAPTERS</h2>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Soldier Songs and Voices NWA is one of 11 chapters of a national organization.<br>Please feel free to click on the image links below to check out our other chapters' pages!</p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>National</h3>\n";
echo "          <p><a href='http://soldiersongsandvoices.com' target='_blank'><img src='./assets/img/SSVLogo.png' alt='Soldier Songs and Voices National HQ' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Please visit our national home page and say hello!</p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>Cheatham St. Warehouse<br>San Marcos, Texas</h3>\n";
echo "          <p><a href='http://www.cheathamstreet.com' target='_blank'><img src='./assets/img/chethamstwh.png' alt='Cheatham Street Warehouse' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Cheatham Street Warehouse is where the idea for Soldier Songs and Voices began. Sessions are led by Dustin Welch and Mark Jungers every Monday from 5 - 7 PM. </p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>Restoration Ranch<br> Bastrop, Texas</h3>\n";
echo "          <p><a href='http://www.restorationranch.org/' target='_blank'><img src='./assets/img/bastroprr.png' alt='Restoration Ranch Bastrop, TX' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>In partnership with Code VI Veteran Integration, Jim Cochrun leads Soldier Songs and Voices workshops on the 2nd and 4th Sundays of each month from 4-6 PM at Restoration Ranch in Bastrop.</p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>The Bugle Boy<br>La Grange, Texas</h3>\n";
echo "          <p><a href='http://www.thebugleboy.org/' target='_blank'><img src='./assets/img/bugleboy.png' alt='The Bugle Boy La Grange, Texas' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Heather Eilers is the chapter coordinator for bi-monthly music workshops held at The Bugle Boy, an intimate concert hall housed in a World War II army barracks located in La Grange. Heather assembles a stellar cast of music volunteers, including the likes of Chuck Hawthorne, Terri Hendrix, Lloyd Maines, Susan Gibson, and other visiting artists. </p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>The Palmer Pavilion<br>Sarasota, Florida</h3>\n";
echo "          <p><a href='https://www.facebook.com/SarasotaManateeSoldierSongsandVoices/?hc_ref=PAGES_TIMELINE' target='_blank'><img src='./assets/img/palmersarasota.png' alt='The Palmer Pavilion Sarasota, Florida' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Ray Hodges leads monthly sessions in the Palmer Pavilion, located behind the American Legion Post 24 in Sarasota, on Wednesdays from 4-6 PM. Read more about the program <a href='http://ticket.heraldtribune.com/2014/11/05/music-soothes-scars-war/' target='_blank'>here</a></p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>The Candyman Strings and Things<br>Santa Fe, New Mexico</h3>\n";
echo "          <p><a href='http://www.candymansf.com/soldier-songs-voices' target='_blank'><img src='./assets/img/santafecm.png' alt='The Candyman Strings and Things Santa Fe, New Mexico' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Daniel Johnsen leads sessions at The Candyman Strings and Things in Santa Fe on the second and fourth Tuesday of every month at 6:30PM. More info can be found <a href='https://www.facebook.com/SSV.SantaFe/' target='_blank'> here</a>.</p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>Artichoke Music<br>Portland, Oregon</h3>\n";
echo "          <p><a href='https://www.artichokemusic.org/' target='_blank'><img src='./assets/img/portlandac.png' alt='Artichoke Music Portland, Oregon' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Carl Solomon leads sessions at Artichoke Music every Sunday from 2-4PM. The Portland chapter also meets the third Wednesday of each month at Ascension Episcopal Parish. More information can be found <a href='https://www.facebook.com/SSVPDX/' target='_blank'>here</a>.</p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>Not Forgotten Outreach<br>Taos, New Mexico</h3>\n";
echo "          <p><a href='http://notforgottenoutreach.org/' target='_blank'><img src='./assets/img/santafetaos.png' alt='Not Forgotten Outreach Taos, New Mexico' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Daniel Johnsen leads sessions at the Wellness Center located at the Not Forgotten Outreach in Taos on the first Saturday of every month at 1 PM. More information can be found <a href='https://www.facebook.com/SSV.SantaFe/' target='_blank'>here</a></p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>Sam's Burger Joint<br>San Antonio, Texas</h3>\n";
echo "          <p><a href='https://www.samsburgerjoint.com/' target='_blank'><img src='./assets/img/samsinsa.png' alt='Sam's Burger Joint San Antonio, Texas' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>In partnership with 'Find The Hero In You', Tom Vickers leads Soldier Songs and Voices sessions the first Tuesday of every month from 6-8pm.</p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>American Legion, Post 82<br>Nashville, TN</h3>\n";
echo "          <p><a href='https://www.facebook.com/post82nashville/' target='_blank'><img src='./assets/img/legiontn.png' alt='American Legion, Post 82 Nashville, TN' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>Led by Adam McCabe, the Nashville Chapter meets weekly from 5-7pm at the American Legion Post 82 off Galitan Pike.  More information can be found <a href='https://www.facebook.com/post82nashville/' target='_blank'>here</a>.</p>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    <div class='row' align='center'>\n";
echo "      <div class='col'>\n";
echo "         <h3 class='text-uppercase' style='color: rgb(254,209,54);'>New Chapter<br>The Susan Phippen House<br>Scituate, MA</h3>\n";
echo "          <p><a href='https://scituatecommunitychristmas.org/' target='_blank'><img src='./assets/img/phippenhouse.png' alt='The Susan Phippen House Scituate, MA' style='width: 40%;'></img></a></p>\n";
echo "         <p class='text-muted' style='color: #eeebeb;filter: brightness(148%);background-color: #0a0a0a;'>We have a new chapter in Scituate, MA atThe Susan Phippen House. We'll post more info as it comes in </p>\n";
echo "      </div>\n";
echo "      <div class='col'>\n";
echo "      </div>\n";
echo "    </div>\n";
echo "    </article>\n";
echo "</section>";
echo "<!-- End: About -->\n";
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>
