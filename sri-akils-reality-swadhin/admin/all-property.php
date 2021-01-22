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
    <link rel="stylesheet" href="../css/datatables.css">
    <link rel="stylesheet" href="../css/dt-global_style.css">
    <style>
    .cir-img {
        border-radius: 20%;
        height : 70px;
        position: absolute;
    }

    .ml {
        margin-left: 160px;
    }
    </style>
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row pl-3 pr-3">
                <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white">
                    <div class="dashborad-box">
                        <h4 class="title">All Property</h4>
                        <div class="section-body listing-table">
                            <div class="table-responsive">
                                <table class="table table-striped paginate">
                                    <thead>
                                        <tr>
                                            <th class="pl-2">My Properties</th>
                                            <th>Date Added</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $select = "SELECT * FROM `propertydetails` WHERE `status`='1'";
                                $count = 1;
                                $result = $conn->query($select);
                                if ($result->num_rows > 0)
                                {
                                    while ($row = $result -> fetch_assoc())
                                    {
                                        echo '<tr><td><div class="author-box clearfix">';
                                        $files = glob("images/property_images/".$row["propertyID"]."/*.*");
                                        $i = 0;
                                        $image = $files[$i];
                                        $supported_file = array('gif','jpg','jpeg','png');
                                        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                        if (in_array($ext, $supported_file)) 
                                        {
                                            echo ' <img class="cir-img" alt="'.ucwords($row["title"]).'" src="'.$image.'"
                                                class="author__img">';
                                        }
                                        echo '
                                        <h4 class="ml author__title">
                                        <a target="blank" style="font-size : 12px" href="https://sriakilsreality.com/dev/property-detail?id='.$row["id"].'">'.ucwords($row["title"]).'</a></h4>
                                            <p  class="ml author__meta">'.ucwords($row["address"].', '.$row["city"].', '.$row["state"]).'</p>
                                        </div></td>
                                        <td>'.$row["createdOn"].'</td>
                                        <td class="actions">
                                            <a href="edit-property?id='.$row["id"].'" class="edit"><i style="padding : 10px;" class="lni-pencil"></i>Edit</a>
                                            <a href="includes/curd.php?removeProperty='.$row["id"].'"><i style="padding : 10px;color : #d22727" class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>';
                                    }
                                }
                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <form action="edit-property" method="post"><input hidden name="id" value="'.$row["id"].'"><button class="btn" type="submit"><i class="lni-pencil"></i>Edit</button></form> -->
    <?php include './includes/footer.php'; ?>
    <script src="../js/datatables.js"></script>
    <script>
    $('.paginate').DataTable({
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
    </script>
</body>

</html>