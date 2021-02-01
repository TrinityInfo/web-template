<?php
    include './phplib/header.php';
    include './phplib/navbar.php';
?>
<br><br>
<!-- banner -->

<!-- //banner -->	
<!-- about -->
	<!-- about-top -->
	<body>
	<div class="about-top">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">About Us </h2>
			</div>
			<div class="wthree-services-bottom-grids">
				<div class="col-md-6 wthree-services-left">
					<img src="images/8.jpg" Class="img-responsive" alt="">
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						<h4>Single Place Scheduling</h4>
						<p>Nam tempor pharetra egestas. Nam varius condimentum faucibus. Duis eget lobortis felis, id laoreet massa. Donec tempor ex ultrices nisi commodo consectetur. Maecenas a diam cursus, vehicula ligula vel, fringilla libero. Mauris eu nulla mi.</p>
					</div>
					<div class="wthree-services-right-bottom">
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
	<br>
	
		
			
				<div class="col-md-6 wthree-services-left">
					<img src="images/9.jpg" Class="img-responsive" alt="">
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						<h4>Payments & Invoicing</h4>
						<p>Nam tempor pharetra egestas. Nam varius condimentum faucibus. Duis eget lobortis felis, id laoreet massa. Donec tempor ex ultrices nisi commodo consectetur. Maecenas a diam cursus, vehicula ligula vel, fringilla libero. Mauris eu nulla mi.</p>
					</div>
					<div class="wthree-services-right-bottom">
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
	<br>
	
		<div class="container">
				<div class="col-md-6 wthree-services-left">
					<img src="images/8.jpg" Class="img-responsive" alt="">
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						<h4>Client Data & History</h4>
						<p>Nam tempor pharetra egestas. Nam varius condimentum faucibus. Duis eget lobortis felis, id laoreet massa. Donec tempor ex ultrices nisi commodo consectetur. Maecenas a diam cursus, vehicula ligula vel, fringilla libero. Mauris eu nulla mi.</p>
					</div>
					<div class="wthree-services-right-bottom">
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
	
	<!-- //about-top -->
	<!-- advantages -->
	
	<!-- //team -->
	<!-- //about -->

	<!-- footer -->
	<?php
    include './phplib/footer.php';
?>
	<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>