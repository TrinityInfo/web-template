<?php 
include './phplib/header.php';
include './phplib/navbar.php';
include './config.php'; 
?>

<body class="inner-pages">
    <style>

    #pagin li {
        display: inline-block;
    }
    #pagin li a{
        margin-right: 400px;
        border-radius: 50%;
        padding: 8px 12px;
        background: rgba(0, 23, 55, 0.08);
        border: none;
        text-decoration: none;
        color: #888ea8;
    }
    .current {
        /* background-color: #1b55e2 !important; */
    color: #274ABB !important;
    }
    .paging-container{
        text-align : center;
        width : 100%;
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- strat slier--->
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
                    <h1>Property List</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Property List</h2>
                </div>
            </div>
        </section>


<!-- end--->


    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-right featured portfolio blog md12">
        <div class="container section-padding pt-5">
            <div class="row" style="margin-top: 20px;">
                    <aside class="col-lg-3 col-md-12 car">
                    <div class="widget">
                        <div class="section-heading">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="media-body">
                                    <h5>Search Properties</h5>
                                    <div class="border"></div>
                                    <p>Search your Properties</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Fields -->
                        <div class="main-search-field">
                            <h5 class="title">Filter</h5>
                            <form method="GET">
                                <div class="at-col-default-mar mb-3">
                                    <select onchange="loadData('city')" id="city">
                                        <option value="" selected>Location</option>
                                        <?php
                                                $select = "SELECT DISTINCT `city` FROM `propertydetails`";
                                                $result = $conn->query($select);
                                                if ($result->num_rows > 0)
                                                {
                                                    while ($row = $result -> fetch_assoc())
                                                    {
                                                        echo '<option value="'.$row["city"].'">'.ucwords($row["city"]).'</option>';
                                                    }
                                                }
                                                else{
                                                    echo '<option value="">No Location Availables</option>';
                                                }
                                            ?>
                                    </select>
                                </div>
                                <div class="at-col-default-mar mb-3">
                                    <select onchange="loadData('propertyStatus')" class="div-toggle" id="propertyStatus"
                                        data-target=".my-info-1">
                                        <option value="0" data-show=".acitveon" selected>Property Status</option>
                                        <?php
                                                $select = "SELECT DISTINCT `propertyStatus` FROM `propertydetails`";
                                                $result = $conn->query($select);
                                                if ($result->num_rows > 0)
                                                {
                                                    while ($row = $result -> fetch_assoc())
                                                    {
                                                        echo '<option value="'.$row["propertyStatus"].'">'.ucwords($row["propertyStatus"]).'</option>';
                                                    }
                                                }
                                                else{
                                                    echo '<option value="">No Location Availables</option>';
                                                }
                                            ?>
                                    </select>
                                </div>
                                <div class="at-col-default-mar mb-3">
                                    <div class="at-col-default-mar">
                                        <select onchange="loadData('type')" class="div-toggle" id="type"
                                            data-target=".my-info-1">
                                            <option value="0" selected>Property Type</option>
                                            <?php
                                                    $select = "SELECT DISTINCT `type` FROM `propertydetails`";
                                                    $result = $conn->query($select);
                                                    if ($result->num_rows > 0)
                                                    {
                                                        while ($row = $result -> fetch_assoc())
                                                        {
                                                            echo '<option value="'.$row["type"].'">'.ucwords($row["type"]).'</option>';
                                                        }
                                                    }
                                                    else{
                                                        echo '<option value="">No Location Availables</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="at-col-default-mar mb-3">
                                    <select onchange="loadData('bedroom')" class="div-toggle" id="bedroom"
                                        data-target=".my-info-1">
                                        <option value="0" selected>Beds</option>
                                        <?php
                                                $select = "SELECT DISTINCT `bedroom` FROM `propertydetails`";
                                                $result = $conn->query($select);
                                                if ($result->num_rows > 0)
                                                {
                                                    while ($row = $result -> fetch_assoc())
                                                    {
                                                        echo '<option value="'.$row["bedroom"].'">'.ucwords($row["bedroom"]).'</option>';
                                                    }
                                                }
                                                else{
                                                    echo '<option value="">No Location Availables</option>';
                                                }
                                            ?>
                                    </select>
                                </div>
                                <div class="at-col-default-mar mb-3">
                                    <select onchange="loadData('bathroom')" class="div-toggle" id="bathroom"
                                        data-target=".my-info-1">
                                        <option value="0" selected>Baths</option>
                                        <?php
                                                $select = "SELECT DISTINCT `bathroom` FROM `propertydetails`";
                                                $result = $conn->query($select);
                                                if ($result->num_rows > 0)
                                                {
                                                    while ($row = $result -> fetch_assoc())
                                                    {
                                                        echo '<option value="'.$row["bathroom"].'">'.ucwords($row["bathroom"]).'</option>';
                                                    }
                                                }
                                                else{
                                                    echo '<option value="">No Location Availables</option>';
                                                }
                                            ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>

                   
                    <!-- Block heading end -->
                    <div class="col-lg-9 col-md-12 blog-pots">
                    <div class="row">
                        <?php
                    if($_GET["value"] == "all")
                        $select = "SELECT * FROM `propertydetails` WHERE `status`='1'";
                    else
                        $select = "SELECT * FROM `propertydetails` WHERE `status`='1' AND `".$_GET["title"]."`='".$_GET["value"]."'";
                    $count = 1;
                    $result = $conn->query($select);
                    if ($result->num_rows > 0)
                    {
                        while ($row = $result -> fetch_assoc())
                        {
                            echo '<div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
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
                        <div class="paging-container">
                            <ul id="pagin"></ul>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
    <!-- START FOOTER -->
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
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/light.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/inner.js"></script>
    <script src="js/color-switcher.js"></script>
    <script>
    function loadData(params) {
        window.location.replace("property-list?title=" + params + "&value=" + $('#' + params).val());
    }
    </script>
    <script>
    pageSize = 4;

    var pageCount = $(".item").length / pageSize;

    for (var i = 0; i < pageCount; i++) {

        $("#pagin").append('<li><a href="#">' + (i + 1) + '</a></li> ');
    }
    $("#pagin li").first().find("a").addClass("current")
    showPage = function(page) {
        $(".item").hide();
        $(".item").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
                $(this).show();
        });
    }

    showPage(1);

    $("#pagin li a").click(function() {
        $("#pagin li a").removeClass("current");
        $(this).addClass("current");
        showPage(parseInt($(this).text()))
    });
    </script>
</body>

</html>