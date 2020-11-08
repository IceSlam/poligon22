<?php
/**
 * The template for displaying Weapon item page
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

<main id="main" class="is-main weapons">

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

	<section class="is-weapons-list item container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h3>
					Оружие
				</h3>
				<h2>
					<? the_title(); ?>
				</h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<?
					the_content();
				?>
				<a href="<? the_field('weapon_img'); ?>" data-fancybox="image">
					<img src="<? the_field('weapon_img'); ?>" alt="<? the_title(); ?>" class="img-fluid d-block mx-auto w-75">
				</a>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12 d-flex justify-content-center">
				<a href="#" class="btn order ml-4 mr-4">
					Заказать игру
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
