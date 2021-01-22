<?php
    include './includes/header.php'; 
    include './includes/navbar.php';
    if (!$_SESSION["isloggedin"])
    {
        $_SESSION["isloggedin"] = false;
        header('location: login');
        exit();
    }
?>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <style>
    .thumbnail {
        width: 230px;
        padding: 15px;
    }
    </style>
    <div id="wrapper">
        <section class="royal-add-property-area section-padding pt-5">
            <div class="container-fluid">
                <div class="row pl-3 pr-3">
                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white">
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <form method="post" action="includes/curd.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Title</label>
                                                <input type="text" name="title" id="title"
                                                    placeholder="Enter your property title">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea id="description" name="description"
                                                    placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdownmissdcall">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Select Status</option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Sales">Sales</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdowntype">type</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="-">Select Type</option>
                                                    <option value="House">House</option>
                                                    <option value="Commercial">Commercial</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Lot">Lot</option>
                                                    <option value="Garage">Garage</option>
                                                    <option value="Sites">Sites</option>
                                                    <option value="Garage">Garage</option>
                                                    <option value="Industry">Industry</option>
                                                    <option value="Corporate Land">Corporate Land</option>
                                                    <option value="DTP Layout">DTP Layout</option>
                                                    <option value="Building Construction">Building Construction</option>
                                                    <option value="Building Promoters">Building Promoters</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="rooms">rooms</label>
                                                <select name="room" id="room" class="form-control">
                                                    <option value="-">Select Rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" placeholder="USD" id="price">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="area">Area</label>
                                                <input type="text" name="area" placeholder="Sqft" id="area">
                                            </p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="address">Address</label>
                                            <input type="text" name="address" placeholder="Enter Your Address"
                                                id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="state">State</label>
                                            <input type="text" name="state" placeholder="Enter Your State" id="state">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country">Country</label>
                                            <input type="text" name="country" placeholder="Enter Your Country"
                                                id="country">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Extra Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb">
                                            <label for="age">Building Age <span>(optional)</span></label>
                                            <select name="age" id="age" class="form-control">
                                                <option value="-">Select Age</option>
                                                <option value="0-1 Years">0-1 years</option>
                                                <option value="0-5 Years">0-5 years</option>
                                                <option value="0-10 Years">0-10 years</option>
                                                <option value="0-15 Years">0-15 years</option>
                                                <option value="0-20 Years">0-20 years</option>
                                                <option value="0-50 Years">0-50 years</option>
                                                <option value="50+ Years">50+ years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb">
                                            <label for="bed">Bedrooms <span>(optional)</span></label>
                                            <select name="bedroom" id="bedroom" class="form-control">
                                                <option value="-">Select Bedroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb last">
                                            <label for="bath">Bathrooms <span>(optional)</span></label>
                                            <select name="bathroom" id="bathroom" class="form-control">
                                                <option value="-">Select Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 dropdown faq-drop no-mb last">
                                        <p>
                                            <label for="features">Features <span>(optional)</span></label>
                                            <textarea id="features" name="features"
                                                placeholder="Describe Features of your property"></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-12 dropdown faq-drop no-mb last">
                                        <p>
                                            <label for="features">What's Near By <span>(optional)</span></label>
                                            <textarea id="features" name="nearBy"
                                                placeholder="Describe whats near to your property"></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-add-property property-form-group">
                            <h3>property Media</h3>
                            <div class="col-lg-12 col-md-12">
                                <p>
                                    <label for="state">Video Link</label>
                                    <input type="text" name="link" placeholder="Enter Link" id="state">
                                </p>
                            </div>
                            <div class="row" style="margin-left: 0px;">
                                <div class="col-lg-12 col-md-12">
                                    <input name="upload[]" id="files" type="file" class="form-control"
                                        multiple="multiple" />
                                </div>
                                <output id="result" />
                            </div>
                        </div>
                        <div class="add-property-button">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button pro-btn-bto">
                                        <button name="addProperty" type="submit">Add Property</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include './includes/footer.php'; ?>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>

    </div>
    <script>
    function handleFileSelect(event) {
        //Check File API support
        if (window.File && window.FileList && window.FileReader) {

            var files = event.target.files; //FileList object
            var output = document.getElementById("result");

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                if (!file.type.match('image')) continue;

                var picReader = new FileReader();
                picReader.addEventListener("load", function(event) {
                    var picFile = event.target;
                    var div = document.createElement("span");
                    div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" + "title='" + file
                        .name + "'/>";
                    output.insertBefore(div, null);
                });
                //Read the image
                picReader.readAsDataURL(file);
            }
        } else {
            console.log("Your browser does not support File API");
        }
    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>