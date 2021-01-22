<?php
    include './includes/header.php';
?>
<style>
    #header{
        display : none;
    }
    .second-footer {
    position: fixed;
    bottom: 0px;
    width: 100%;
}
#error{
    color : red;
    text-align : center;
    display : none;
}
</style>


<body class="inner-pages">
    <div id="wrapper">
        <br><br>
        <div id="login">
            <div class="login">
                <form method="post" id="loginForm">
                    <div id="error">Invalid Credential</div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <i class="icon_lock_alt"></i>
                    </div>
                    <div class="fl-wrap filter-tags clearfix add_bottom_30">
                        <div class="checkboxes float-left">
                            <div class="filter-tags-wrap">
                                <input id="check-b" type="checkbox" checked name="check">
                                <label for="check-b">Remember me</label>
                            </div>
                        </div>
                        <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn_1 rounded full-width">Login to Find Houses</button>
                </form>
            </div>
        </div>
        <?php include './includes/footer.php' ?> 
        </div>
    </body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
        $select = "SELECT * FROM admin WHERE userName='".base64_encode($_POST["email"])."' AND password='".base64_encode($_POST["password"])."' AND `status` = '1'";
    	$result = $conn->query($select);
    	if ($result->num_rows > 0)
    	{
        	while ($row = $result -> fetch_assoc())
        	{
				$_SESSION["isloggedin"] = true;
				echo '<meta http-equiv="refresh" content="0; url=index">';
        	}
    	}
		else
		{
			echo '<script>document.getElementById("error").style.display = "block";</script>';
		}
    }
    else{
        echo '<script>console.log("no");</script>';
    }
?>