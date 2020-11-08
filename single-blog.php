<?php
/**
 * The template for displaying Blog item page
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

	<section class="is-pubs container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Статьи</h3>
				<h2>
					<? the_title(); ?>
				</h2>
				<div class="info">
					<p class="date">
						<i class="fas fa-clock mr-2"></i>
						<? the_date(); ?>
					</p>
					<p class="author ml-1">
						<i class="fas fa-user ml-2 mr-2"></i>
						<? the_author(); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12 content">
				<? the_content(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
