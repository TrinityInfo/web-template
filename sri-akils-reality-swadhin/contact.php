<?php 
include './config.php'; 
include './phplib/header.php';
include './phplib/navbar.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us</title>
</head>

<body class="inner-pages">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            Topbar
            <div class="header-top">
                <div class="clearfix"></div>
                <!-- Topbar / End -->
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15663.406731054656!2d76.9937116!3d11.0497447!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89d17b30234728d4!2sSri%20Akils%20Reality!5e0!3m2!1sen!2sin!4v1610605269739!5m2!1sen!2sin"
                        width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                    successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="lastname"
                                    placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message"
                                    required rows="8" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">89/ 35B, Main Road, Sundakkamuthur Coimbatore, Tamil Nadu 641010
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p>+91 787 177 1787 || +91 709 277 1927</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p>sriakilsreality@gmail.com info@sriakilsreality.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">24/7 Support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->
    </div>
        <?php
        include './phplib/footer.php';
        ?>
        <!-- Wrapper / End -->
        <!--Style Switcher===========================================-->
    <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i
         class="fa fa-cog fa-spin fa-2x"></i></a>
        <div class="theme-colours">
        <p class="font-italic">Choose Colour style</p>
        <ul>
            <li>
                <a href="#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="#." class="green" id="green"></a>
            </li>
            <li>
                <a href="#." class="red" id="red"></a>
            </li>
            <li>
                <a href="#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</body>

</html>