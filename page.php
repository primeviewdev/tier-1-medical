<?php
/**
 * The template for displaying all pages
 *
 */
 
$thumb = get_template_directory_uri().'/assets/images/banner-placeholder.png';
$image = get_option('default-banner');
if ( $image ) {
    $thumb = $image;
}

get_header(); ?>
	<div id="primary" class="innerpage site-content">
		<header style="background-image: url('<?= $thumb ?>')" class="innerpage-header">
            <div class="container">
                <h1 class="innerpage-title"><?php the_title(); ?></h1>
            </div>
		</header>
		<div class="container main_content">
			<div class="row" role="main">
				<div class="col-md-8">
				<?php 
                    while (have_posts()){ 
						the_post(); 
						get_template_part( 'content', 'page' ); 
					} 
				?>
				</div><!-- .col-md-8 -->
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div><!-- .col-md-4 -->
			</div><!--.row -->
		</div><!-- .container-fluid -->
	</div><!-- .primary -->
<?php get_footer(); ?>