<?php
/**
 * The template for displaying Galery item page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package poligon22
 */

get_header();
?>

<main id="main" class="is-main">

	<section class="is-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb">
					<?php
		         if ( function_exists('yoast_breadcrumb') ) {
		           yoast_breadcrumb( '<ol style="margin-left:0px;" class="breadcrumb bc-yoast">','</ol>' );
		         }
		        ?>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="is-photogalery-item container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<p class="galery-type">
					Галерея игры
				</p>
				<h2 class="galery-name">
					<? the_title(); ?>
				</h2>
				<p class="galery-date">
					<i class="fas fa-clock"></i>
					<? the_date(); ?>
				</p class="galery-date">
			</div>
		</div>
		<div class="row mt-3">
			<?php
				$images = get_field('games_gallery');
				if( $images ): ?>
								<?php foreach( $images as $image ): ?>
									<div class="col-md-6 col-lg-4 col-xl-3">
										<div data-fancybox="image" href="<?php echo esc_url($image['url']); ?>" class="card short" style="background: url(<?php echo esc_url($image['sizes']['thumbnail']); ?>);">
											<div class="mask">
												<div class="angle top-left"></div>
												<div class="angle top-right"></div>
												<div class="angle bottom-left"></div>
												<div class="angle bottom-right"></div>
												<img src="<? echo get_template_directory_uri() . '/assets/img/photogalery_aim.svg' ?>" alt="<? the_title(); ?>">
											</div>
										</div>
									</div>
								<?php endforeach; ?>
				<?php endif; ?>
		</div>

	</section>

<?php
get_footer();
