<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>


<style>
.active{
    background-image: url("images/tabs.gif");
    
}
</style>

<div id="wrapper" class="int_main_wraapper">
    <header id="header-container" class="db-top-header">
        <div id="header">
            <div class="container-fluid">
                <div class="left-side">
                    <div id="logo">
                        <a href="index"><img src="images/logo-1.png" data-sticky-logo="images/logo.png" alt=""></a>
                    </div>
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="right-side hidden-lg-down">
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
                            <li class="<?= ($activePage == 'property-list') ? 'active':''; ?>"><a  href="property-list?value=all">Property</a></li>
                            <li class="<?= ($activePage == 'services') ? 'active':''; ?>"><a  href="services">Services</a></li>
                            <li class="<?= ($activePage == 'faq') ? 'active':''; ?>"><a  href="faq">FAQ</a></li>
                            <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a  href="contact">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header>