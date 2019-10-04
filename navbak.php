<!-- navbar -->
  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="background-color: rgb(11,12,13);color: rgb(26,122,211);filter: brightness(96%) contrast(141%) grayscale(0%) hue-rotate(0deg);">
    <div class="container-fluid">
        <div class="navbar-header ">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Your Site" to your site name -->
            <a class="navbar-brand navbar-custom" href="<?php echo $home_url; ?>">SSVNWA Web</a>
        </div>
 
        <div class="navbar-collapse collapse navbar-custom">
            <ul class="nav navbar-nav navbar-custom">
                <!-- link to the "Cart" page, highlight if current page is cart.php -->
                <li class="nav-item nav-custom" role="presentation"><a class="nav-link js-scroll-trigger" href="<?php echo $home_url; ?>">Home</a></li>
            </ul>
 
            <?php
            // login and logout options
            // check if users / customer was logged in
            // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
            ?>
            <ul class="navbar-nav navbar-right navbar-custom">
                <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                        &nbsp;&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <?php
}
 
// show login and register options
// if user was not logged in, show the "login" and "register" options
else{
?>
<ul class="nav navbar-nav navbar-right navbar-custom">
    <li <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
        <a href="/login.php">
            <span class="glyphicon glyphicon-log-in"></span> Log In
        </a>
    </li>
 
    <li <?php echo $page_title=="Register" ? "class='active'" : ""; ?>>
        <a href="./register.php">
            <span class="glyphicon glyphicon-check"></span> Register
        </a>
    </li>
</ul>
<?php
}
            ?>
             
        </div><!--/.nav-collapse -->
 
    </div>
</div>
</nav>
<!-- /navbar -->