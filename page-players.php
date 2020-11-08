<?php
/**
 * The template for displaying Best players page
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

<main id="main" class="is-main players">

	<section class="is-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?php echo get_home_url(); ?>">
									Главная
								</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								<? the_title(); ?>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="is-photogalery-block container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					Лучшие игроки
				</h2>
			</div>
		</div>
		<div class="row mt-3 players-list">
			<?php while ( have_rows('players') ) : the_row(); ?>
				<div class="col-md-6 col-lg-4 mb-3">
					<div class="card bg-image hover-overlay">
						<div class="img">
							<img src="<? the_sub_field('photo'); ?>" alt="" class="">
							<div class="mask"
							></div>
						</div>
						<a href="#" class="btn plus">
							+
						</a>
						<div class="bordered-frame-top"></div>
						<div class="bordered-frame-bottom"></div>
						<div class="bordered-frame-left"></div>
						<div class="bordered-frame-right"></div>
						<a class="title">
							<? the_sub_field('name'); ?>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>

<?php
get_footer();
