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
<body class="maxw1600 m0a dashboard-bd">
    <!-- START SECTION USER PROFILE -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row pl-3 pr-3">
                <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white">
                    <div class="my-address">
                        <h3 class="heading">My Account</h3>
                        <form action="./includes/curd.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <label>Organization Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Sri Akils Reality" readonly>
                                    </div>
                                </div>
                                <?php
                                        $select = "SELECT * FROM `admin` WHERE `id`='1'";
                                        $result = $conn->query($select);
                                        if ($result->num_rows > 0)
                                        {
                                            while ($row = $result -> fetch_assoc())
                                            {
                                                echo'
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input value="'.$row["phone1"].'" name="phone1" class="form-control" placeholder="Phone"><br>
                                                    <input value="'.$row["phone2"].'" name="phone2" class="form-control" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" value="'.$row["mail1"].'" name="mail1" class="form-control" placeholder="Email"> <br>
                                                    <input type="email" value="'.$row["mail2"].'" name="mail2" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea name="address" placeholder="Address" class="form-control">'.$row["address"].'</textarea>
                                                </div>
                                            </div>
                                                ';
                                            }
                                        }
                                    ?>
                                <div class="col-lg-12">
                                    <div class="send-btn pro-btn-bto">
                                        <button type="submit" name="updateAdminDetail" class="btn btn-primary btn-lg">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION USER PROFILE -->
    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    </div>
    <!-- Wrapper / End -->
    <?php include './includes/footer.php'; ?>
</body>

</html>