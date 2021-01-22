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
                        <h3 class="heading">Change Password</h3>
                        <form action="./includes/curd.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="text" name="newPassword" class="form-control"
                                            placeholder="New Password">
                                        <hr>
                                    </div>
                                </div <div class="col-lg-12 text-right">
                                <div class="send-btn pro-btn-bto">
                                    <button type="submit" name="changePassword" class="btn btn-primary btn-lg">Update
                                        Password</button>
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