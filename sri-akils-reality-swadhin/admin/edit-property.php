<?php
    include './includes/header.php';
    include './includes/navbar.php';
    if (!$_SESSION["isloggedin"])
    {
        $_SESSION["isloggedin"] = false;
        header('location: login');
        exit();
    }
    $select = "SELECT * FROM `propertydetails` WHERE `id`='".$_GET["id"]."'";
    $result = $conn->query($select);
    if ($result->num_rows > 0)
    {
        while ($row = $result -> fetch_assoc())
        { ?>
?>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <style>
    .thumbnail {
        width: 230px;
        padding: 15px;
    }

    .hide {
        display: none;
    }

    .container {
        position: relative;
        width: 100%;
        top: 10%;
    }

    .container .btn {
        position: absolute;
        left: 100%;
        top: 10%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #555;
        color: white;
        font-size: 16px;
        font-family: cursive;
        padding: 2px 14px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .container .btn:hover {
        background-color: black;
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
                                    <input type="hidden" name="id" value="<?php echo $row["propertyID"] ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Title</label>
                                                <input type="text" name="title" id="title"
                                                    value="<?php echo $row["title"] ?>"
                                                    placeholder="Enter your property title">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea id="description" name="description"
                                                    placeholder="Describe about your property"><?php echo $row["description"] ?></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdownmissdcall">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Select Status</option>
                                                    <option
                                                        <?php if($row["propertyStatus"] == "Rent") echo "selected " ?>
                                                        value="Rent">Rent</option>
                                                    <option
                                                        <?php if($row["propertyStatus"] == "Sales") echo "selected " ?>
                                                        value="Sales">Sales</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdowntype">type</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="-">Select Type</option>
                                                    <option <?php if($row["type"] == "House") echo "Selected " ?>
                                                        value="House">House</option>
                                                    <option <?php if($row["type"] == "Commercial") echo "Selected " ?>
                                                        value="Commercial">Commercial</option>
                                                    <option <?php if($row["type"] == "Apartment") echo "Selected " ?>
                                                        value="Apartment">Apartment</option>
                                                    <option <?php if($row["type"] == "Lot") echo "Selected " ?>
                                                        value="Lot">Lot</option>
                                                    <option <?php if($row["type"] == "Garage") echo "Selected " ?>
                                                        value="Garage">Garage</option>
                                                    <option <?php if($row["type"] == "Sites") echo "Selected " ?>
                                                        value="Sites">Sites</option>
                                                    <option <?php if($row["type"] == "Garage") echo "Selected " ?>
                                                        value="Garage">Garage</option>
                                                    <option <?php if($row["type"] == "Industry") echo "Selected " ?>
                                                        value="Industry">Industry</option>
                                                    <option
                                                        <?php if($row["type"] == "Corporate Land") echo "Selected " ?>
                                                        value="Corporate Land">Corporate Land</option>
                                                    <option <?php if($row["type"] == "DTP Layout") echo "Selected " ?>
                                                        value="DTP Layout">DTP Layout</option>
                                                    <option
                                                        <?php if($row["type"] == "Building Construction") echo "Selected " ?>
                                                        value="Building Construction">Building Construction</option>
                                                    <option
                                                        <?php if($row["type"] == "Building Promoters") echo "Selected " ?>
                                                        value="Building Promoters">Building Promoters</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="rooms">rooms</label>
                                                <select name="room" id="room" class="form-control">
                                                    <option value="-">Select Rooms</option>
                                                    <option <?php if($row["room"] == "1") echo "Selected " ?> value="1">
                                                        1</option>
                                                    <option <?php if($row["room"] == "2") echo "Selected " ?> value="2">
                                                        2</option>
                                                    <option <?php if($row["room"] == "3") echo "Selected " ?> value="3">
                                                        3</option>
                                                    <option <?php if($row["room"] == "4") echo "Selected " ?> value="4">
                                                        4</option>
                                                    <option <?php if($row["room"] == "5") echo "Selected " ?> value="5">
                                                        5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" value="<?php echo $row["price"] ?>"
                                                    placeholder="USD" id="price">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="area">Area</label>
                                                <input type="text" name="area" value="<?php echo $row["area"] ?>"
                                                    placeholder="Sqft" id="area">
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
                                            <input type="text" name="address" value="<?php echo $row["address"] ?>"
                                                placeholder="Enter Your Address" id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" value="<?php echo $row["city"] ?>"
                                                placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="state">State</label>
                                            <input type="text" name="state" value="<?php echo $row["state"] ?>"
                                                placeholder="Enter Your State" id="state">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country">Country</label>
                                            <input type="text" name="country" value="<?php echo $row["country"] ?>"
                                                placeholder="Enter Your Country" id="country">
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
                                                <option <?php if($row["age"] == "0-1 Years") echo"Selected " ?>
                                                    value="0-1 Years">0-1 years</option>
                                                <option <?php if($row["age"] == "0-5 Years") echo"Selected " ?>
                                                    value="0-5 Years">0-5 years</option>
                                                <option <?php if($row["age"] == "0-10 Years") echo"Selected " ?>
                                                    value="0-10 Years">0-10 years</option>
                                                <option <?php if($row["age"] == "0-15 Years") echo"Selected " ?>
                                                    value="0-15 Years">0-15 years</option>
                                                <option <?php if($row["age"] == "0-20 Years") echo"Selected " ?>
                                                    value="0-20 Years">0-20 years</option>
                                                <option <?php if($row["age"] == "0-50 Years") echo"Selected " ?>
                                                    value="0-50 Years">0-50 years</option>
                                                <option <?php if($row["age"] == "50+ Years") echo"Selected " ?>
                                                    value="50+ Years">50+ years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb">
                                            <label for="bed">Bedrooms <span>(optional)</span></label>
                                            <select name="bedroom" id="bedroom" class="form-control">
                                                <option value="-">Select Bedroom</option>
                                                <option <?php if($row["bedroom"] == "1") echo "Selected "; ?> value="1">
                                                    1</option>
                                                <option <?php if($row["bedroom"] == "2") echo "Selected "; ?> value="2">
                                                    2</option>
                                                <option <?php if($row["bedroom"] == "3") echo "Selected "; ?> value="3">
                                                    3</option>
                                                <option <?php if($row["bedroom"] == "4") echo "Selected "; ?> value="4">
                                                    4</option>
                                                <option <?php if($row["bedroom"] == "5") echo "Selected "; ?> value="5">
                                                    5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb last">
                                            <label for="bath">Bathrooms <span>(optional)</span></label>
                                            <select name="bathroom" id="bathroom" class="form-control">
                                                <option value="-">Select Bathrooms</option>
                                                <option <?php if($row["bathroom"]== "1") echo "Selected "; ?> value="1">
                                                    1</option>
                                                <option <?php if($row["bathroom"]== "2") echo "Selected "; ?> value="2">
                                                    2</option>
                                                <option <?php if($row["bathroom"]== "3") echo "Selected "; ?> value="3">
                                                    3</option>
                                                <option <?php if($row["bathroom"]== "4") echo "Selected "; ?> value="4">
                                                    4</option>
                                                <option <?php if($row["bathroom"]== "5") echo "Selected "; ?> value="5">
                                                    5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 dropdown faq-drop no-mb last">
                                        <p>
                                            <label for="features">Features <span>(optional)</span></label>
                                            <textarea id="features" name="features"
                                                placeholder="Describe Features of your property"><?php echo $row["features"] ?></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-12 dropdown faq-drop no-mb last">
                                        <p>
                                            <label for="features">What's Near By <span>(optional)</span></label>
                                            <textarea id="features" name="nearBy"
                                                placeholder="Describe whats near to your property"><?php echo $row["nearBy"] ?></textarea>
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
                                    <input type="text" name="link" value="<?php echo $row["link"] ?>"
                                        placeholder="Enter Link" id="state">
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <input name="upload[]" id="files" type="file" class="form-control"
                                        multiple="multiple" />
                                </div>
                                <div class="img-Box">
                                    <?php
                                        $all_files = glob("../images/property_images/".$row["propertyID"]."/*.*");
                                        for ($i=0; $i<count($all_files); $i++)
                                          {
                                                $image_name = $all_files[$i];
                                                $supported_format = array('gif','jpg','jpeg','png');
                                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                if (in_array($ext, $supported_format))
                                                { ?>
                                    <div id="<?php echo $i ?>" class="container">
                                        <img src="<?php echo $image_name; ?>" class="thumbnail">
                                        <p onclick="deleteImage('<?php echo $i; ?>','<?php echo $image_name; ?>')"
                                            class="btn">X</p>
                                    </div>
                                    <?php }
                                           }
                                    ?>
                                </div>
                                <output id="result" />
                            </div>
                        </div>
                        <div class="add-property-button">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button pro-btn-bto">
                                        <button name="updateProperty" type="submit">Add Property</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php }} include './includes/footer.php'; ?>

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

    function deleteImage(params, image) {
        $.ajax({
            type: 'POST',
            url: './deleteImage.php',
            data: "id=" + image,
            success: function(data) {
                console.log("ok");
            }
        });
        $('#' + params).addClass('hide');
    }
    </script>