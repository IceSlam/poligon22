<?php
/**
 * The template for displaying Scenario page
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

<main id="main" class="is-main scenario">

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

	<section class="is-default container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					<? the_title(); ?>
				</h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12 content">
				<ul class="list-unstyled">
					<?php while ( have_rows('scenario') ) : the_row(); ?>
						<li>
							<? the_sub_field('variant'); ?>
						</li>
					<?php endwhile; ?>
					<li class="last">
						и многое другое
					</li>
				</ul>
			</div>
		</div>
	</section>

<?php
get_footer();
