<?php
    include './phplib/header.php';
    include './phplib/navbar.php';
?>
<br><br>
<body>
<!-- banner -->
	
<!-- //banner -->
<!-- contact -->		
	<div class="contact"> 
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">Mail Us</h2>
			</div>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right"> 
					<form action="#" method="post">  
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" class="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone no" placeholder="Phone" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT" > 
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<div class="address">
						<h5>Address:</h5>
						<p><i class="glyphicon glyphicon-home"></i> 333 Broome St New York, NY 10002, </p>
					</div>
					<div class="address address-mdl">
						<h5>Phones:</h5>
						<p><i class="glyphicon glyphicon-earphone"></i> +1 999 888 777</p>
						<p><i class="glyphicon glyphicon-phone"></i> +11 222 333</p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com">mail@example.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
	</div>
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
	</div>
	<!-- //contact -->	
	
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