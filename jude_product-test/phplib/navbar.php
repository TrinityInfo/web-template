<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

	<div class="header-bottom">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">

				<h1><a class="navbar-brand" href="index.php"><span>Driving </span>School</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav" style="margin-left: 77px;">
						<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php"><span data-hover="About">About</span></a></li>
						<li class="<?= ($activePage == 'product') ? 'active':''; ?>"><a href="product.php"><span data-hover="Product">Product</span></a></li>
						<li class="<?= ($activePage == 'price') ? 'active':''; ?>"><a href="price.php"><span data-hover="price">Price</span></a></li>
						<li class="<?= ($activePage == 'mail') ? 'active':''; ?>"><a href="mail.php"><span data-hover="Mail Us">Mail Us</span></a></li>
					</ul>
				</nav>
			</div>
			
		</nav>
	</div>