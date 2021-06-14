<div class="main-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-controls="bs-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php dynamic_sidebar( 'header-widget' )?>
			</div>
			<div class="col-md-7">
				<nav id="nav-menu" class="navbar navbar-expand-lg">
					<?php echo do_shortcode('[rocketmenu]'); ?>
				</nav>
			</div>
			<div class="col-md-2">
				<a href="tel:<?php echo do_shortcode('[phonenumber]'); ?>" class="btn btn-phone"><span class="fa fa-phone"></span><span class="phone-text"><?php echo do_shortcode('[phonenumber]'); ?></span></a>
			</div>
		</div>
	</div>
</div>

