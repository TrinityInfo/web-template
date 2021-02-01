
<?php
    include './phplib/header.php';
    include './phplib/navbar.php';
?>
<br><br>
<body>
<!-- banner -->

<!-- //banner -->
<!-- services -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">Product</h2>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Driving School</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Coming Soon</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Coming Soon</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Coming Soon</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Coming Soon</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<div class="w3_agile_services_grid1">
						<img src="images/p1.svg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<h3>Coming Soon</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Book<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->	
	
	<!-- footer -->
	<?php
    include './phplib/footer.php';
?>
	<!-- //footer -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Driving School
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

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