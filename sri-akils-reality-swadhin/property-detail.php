<?php
    include './phplib/header.php';
    include './phplib/navbar.php';
    include 'config.php';
    $select = "SELECT * FROM `propertydetails` WHERE id='".$_GET["id"]."'";
    $result = $conn->query($select);
    if ($result->num_rows > 0)
       {
        while ($row = $result -> fetch_assoc())
        {
?>
<!-- FONT AWESOME -->
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- LEAFLET MAP -->
<link rel="stylesheet" href="css/leaflet.css">
<link rel="stylesheet" href="css/leaflet-gesture-handling.min.css">
<link rel="stylesheet" href="css/leaflet.markercluster.css">
<link rel="stylesheet" href="css/leaflet.markercluster.default.css">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="css/timedropper.css">
<link rel="stylesheet" href="css/datedropper.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/lightcase.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" id="color" href="css/default.css">

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
                    <h1>Property Detail</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Property Detail</h2>
                </div>
            </div>
        </section>

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2" style="border: 1px solid #eaeff5;padding: 18px;border-radius: 6px;">
                                    <div class="pro-wrapper" >
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3><?php echo ucwords($row["title"])?><span
                                                        class="mrg-l-5 category-tag"> For
                                                        <?php echo ucwords($row["propertyStatus"]) ?></span></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>
                                                        <?php echo ucwords($row["address"].', '.$row["city"].', '.$row["state"]); ?>
                                                    </a>
                                                </div> <br>
                                                <div class="listing-title-bar">
                                                    <h4>$ <?php echo $row["price"] ?></h4>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <p>$ <?php echo $row["area"] ?> / sq ft</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php
                                            $all_files = glob("images/property_images/".$row["propertyID"]."/*.*");
                                            for ($i=0; $i<count($all_files); $i++)
                                              {
                                                $image_name = $all_files[$i];
                                                $supported_format = array('gif','jpg','jpeg','png');
                                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                if (in_array($ext, $supported_format))
                                                    {
                                                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" ';
                                                        if($i == 0) echo 'class="active"';
                                                        echo'></li>';
                                                    }
                                              }
                                        ?>
                                    </ol>
                                    <div class="carousel-inner carus" role="listbox">
                                        <?php
                                                 $all_files = glob("images/property_images/".$row["propertyID"]."/*.*");
                                                 for ($i=0; $i<count($all_files); $i++)
                                                   {
                                                     $image_name = $all_files[$i];
                                                     $supported_format = array('gif','jpg','jpeg','png');
                                                     $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                     if (in_array($ext, $supported_format))
                                                         {
                                                            echo '<div class="carousel-item ';
                                                            if($i == 0) echo 'active';
                                                            echo'">
                                                            <img class="d-block img-fluid" src="'.$image_name.'" alt="Second slide">
                                                        </div>';
                                                         }
                                                   }
                                            ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- cars content -->
                                <div class="homes-content details-2 mb-4">
                                    <!-- cars List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>Beds <?php echo $row["bedroom"]; ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>Baths <?php echo $row["bathroom"]; ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $row["area"]; ?> sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-car" aria-hidden="true"></i>
                                            <span>Garages 2</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-columns" aria-hidden="true"></i>
                                            <span>Kitchen 2</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                            <span>Balcony 2</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3"><?php echo $row["description"] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det"><?php echo $row["type"] ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">For <?php echo $row["propertyStatus"] ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">$<?php echo $row["price"] ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Rooms:</span>
                                    <span class="det"><?php echo $row["room"] ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bedrooms:</span>
                                    <span class="det"><?php echo $row["bedroom"] ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det"><?php echo $row["bathroom"] ?></span>
                                </li>
                            </ul>
                            <?php
                                if($row["features"] != ""){ ?>
                            <h5 class="mt-5">Amenities</h5>
                            <ul class="homes-list clearfix">
                                <?php 
                                    $ament = explode(',',$row["features"]);
                                    for($i=0;$i<count($ament);$i++){
                                        echo '<li>
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>'.$ament[$i].'</span>
                                    </li>';
                                    }
                                ?>
                            </ul>
                            <?php }
                            ?>
                            <?php
                                if($row["nearBy"] != ""){ ?>
                            <h5 class="mt-5">What's Near By</h5>
                            <ul class="homes-list clearfix">
                                <?php 
                                    $ament = explode(',',$row["nearBy"]);
                                    for($i=0;$i<count($ament);$i++){
                                        echo '<li>
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>'.$ament[$i].'</span>
                                    </li>';
                                    }
                                ?>
                            </ul>
                            <?php }
                            ?>
                        </div>
                        <?php
                            if($row["link"] != "")
                                echo '<div class="property wprt-image-video w50 pro vid-si3">
                            <h5>Property Video</h5>
                            <img alt="image" width="698" height="500"
                                src="http://img.youtube.com/vi/'.$row["link"].'/maxresdefault.jpg">
                            <a class="icon-wrap popup-video popup-youtube"
                                href="https://www.youtube.com/watch?v='.$row["link"].'">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>';
                        ?>
                        <!-- End Reviews -->
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Contact Details</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <h4 class="author__title">Sri Akils Reality</h4>
                                            </div>
                                            <ul class="author__contact">
                                                <?php
                                                    $select1 = "SELECT * FROM `admin` WHERE `id`='1'";
                                                    $result1 = $conn->query($select1);
                                                    if ($result1->num_rows > 0)
                                                    {
                                                        while ($row1 = $result1 -> fetch_assoc())
                                                        {
                    echo '<li><span class="la la-map-marker"><i
                    class="fa fa-map-marker"></i></span>'.ucwords($row1["address"]).'</li>
                    <li><span class="la la-phone"><i class="fa fa-phone"></i></span><a href="tel:'.$row1["phone1"].'">'.$row1["phone1"].'</a>';
                    if($row1["phone2"] != "") echo ', <a href="tel:'.$row1["phone2"].'">'.$row1["phone2"].'</a>';
                    echo'</li><li><span class="la la-envelope-o"><i class="fa fa-envelope"></i></span><a href="mail:'.$row1["mail1"].'">'.$row1["mail1"].'</a>';
                    if($row1["mail2"] != "") echo ', <a href="tel:'.$row1["mail2"].'">'.$row1["mail2"].'</a>';
                    echo'</li>';
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                            <div class="agent-contact-form-sidebar">
                                                <h4>Request Inquiry</h4>
                                                <form name="contact_form" method="post"
                                                    action="admin/includes/curd.php">
                                                    <div <?php if(isset($_GET["msg"])) echo 'style="display : block"'; ?> id="success" class="successform">
                                                        <p class="alert alert-success font-weight-bold" role="alert">
                                                            Your message was sent
                                                            successfully!</p>
                                                    </div>
                                                    <input type="hidden" name="pid" value="<?php echo $_GET["id"]; ?>">
                                                    <input type="text" id="fname" name="full_name"
                                                        placeholder="Full Name" required />
                                                    <input type="hidden" name="id" value='<?php echo $row["id"] ?>'>
                                                    <input type="text" id="pnumber"
                                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                        minlength="10" maxlength="10" name="phone_number"
                                                        placeholder="Phone Number" required />
                                                    <input type="email" id="emailid" name="email_address"
                                                        placeholder="Email Address" required />
                                                    <textarea placeholder="Message" name="message" required></textarea>
                                                    <div class="widget-boxed-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 book">
                                                                <input type="text" name="date" id="reservation-date"
                                                                    data-lang="en" data-large-mode="true"
                                                                    data-min-year="2021" data-max-year="2050"
                                                                    data-disabled-days="08/17/2017,08/18/2017"
                                                                    data-id="datedropper-0" data-theme="my-style"
                                                                    class="form-control" readonly="">
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 book2">
                                                                <input type="text" name="time" id="reservation-time"
                                                                    class="form-control" readonly="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="submit" name="sendmessage"
                                                        class="multiple-send-message" value="Submit Request" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        <?php }} ?>
        <section class="similar-property recently portfolio bshd p-10 bg-white-inner">
            <div class="container">
                <h5>Similar Properties</h5>
                <div class="row portfolio-items">
                    <?php
                        $select = "SELECT * FROM `propertydetails` ORDER BY id DESC LIMIT 3";
                        $result = $conn->query($select);
                        if ($result->num_rows > 0)
                        {
                            while ($row = $result -> fetch_assoc())
                            {
                                echo '<div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="property-detail?id='.$row["id"].'" class="homes-img">
                                            <!--div class="homes-tag button alt featured">Featured</div-->
                                            <div class="homes-tag button alt sale">For '.$row["propertyStatus"].'</div>
                                            <!--div class="homes-price">Family Home</div-->';
                                            $files = glob("images/property_images/".$row["propertyID"]."/*.*");
                                            $image = $files[0];
                                            $supported_file = array('gif','jpg','jpeg','png');
                                            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                            if (in_array($ext, $supported_file)) 
                                            {
                                                echo '
                                                <img alt="'.ucwords($row["title"]).'" src="'.$image.'" class="img-responsive">';
                                            }
                                            echo'
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="property-detail?id='.$row["id"].'" class="btn"><i class="fa fa-share-alt"></i></a>
                                        <a href="https://www.youtube.com/watch?v='.$row["link"].'"class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="property-detail?id='.$row["id"].'">'.ucwords($row["title"]).'</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="property-detail?id='.$row["id"].'">
                                            <i class="fa fa-map-marker"></i><span>'.ucwords($row["address"].', '.$row["city"].', '.$row["state"]).'</span>
                                        </a>
                                    </p>
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="property-detail?id='.$row["id"].'">$ '.$row["price"].'</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>';
                            }
                        }
                    ?>
                </div>
            </div>
        <?php
        include './phplib/footer.php';
        ?>
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
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
        </div>

        <!-- ARCHIVES JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/range-slider.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick4.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/timedropper.js"></script>
        <script src="js/datedropper.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet-gesture-handling.min.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/map-single.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>
         <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/range-slider.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick4.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/timedropper.js"></script>
        <script src="js/datedropper.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet-gesture-handling.min.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/map-single.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>

        <!-- Date Dropper Script-->
        <script>
        $('#reservation-date').dateDropper();
        </script>
        <!-- Time Dropper Script-->
        <script>
        this.$('#reservation-time').timeDropper({
            setCurrentTime: false,
            meridians: true,
            primaryColor: "#e8212a",
            borderColor: "#e8212a",
            minutesInterval: '15'
        });
        </script>

        <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
        </script>

        <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>