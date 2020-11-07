<?php
/**
 * The template for displaying all pages
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
				<? the_content(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
