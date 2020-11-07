<?php
/**
 * The main template file
 * Template Name: Главная страница
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package poligon22
 */

get_header();
?>

<main id="main" class="is-main">

		<section class="is-slider">
			<div class="is-slider__wrapper">
				<div uk-slider="center: true; finite: true; autoplay: true;">

					<div class="uk-position-relative uk-light" tabindex="-1">

							<ul class="uk-slider-items uk-child-width-1@s uk-grid">
								<?php while ( have_rows('index_slides') ) : the_row(); ?>
									<li>
										<div class="is-slider__slide" style="background: linear-gradient(270deg, rgba(0, 0, 0, 0.3) 0%, rgba(0,0,0,.6) 100%), url(<? the_sub_field('background'); ?>);">
											<div class="is-slider__slide-content container-xxl container-xl container">
												<div class="col-lg-7">
													<h4 class="sub">
														<? the_sub_field('subtitle'); ?>
													</h4>
													<h3 class="title">
														<? the_sub_field('title'); ?>
													</h3>
													<p class="description">
														<? the_sub_field('description'); ?>
													</p>
												</div>
											</div>
										</div>
									</li>
              <?php endwhile; ?>
							</ul>

							<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slider-item="previous">
								<img src="<? echo get_template_directory_uri() . "/assets/img/slider_prev.svg" ?>" alt="">
							</a>
							<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slider-item="next">
								<img src="<? echo get_template_directory_uri() . "/assets/img/slider_prev.svg" ?>" alt="" style="transform: rotate(180deg)">
							</a>

					</div>

					<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

				</div>
			</div>
		</section>


<?php
get_footer();
?>
