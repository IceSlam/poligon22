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

		<section class="is-endgame container-fluid">
      <div class="row">
        <div class="col-lg-3 is-endgame__outer">
          <img src="<? echo get_template_directory_uri() . "/assets/img/endgame_outer_bg.png" ?>" alt="" class="img-fluid d-block" style="margin-left: calc(100% - 123px);">
        </div>
        <div class="col-lg-9 is-endgame__inner">
          <img src="<? echo get_template_directory_uri() . "/assets/img/endgame_inner_bg.png" ?>" alt="" class="img-fluid d-block img">
          <div class="is-endgame__inner-content">
            <p>
              У вас прошла игра?
            </p>
            <p>
              Хотите получить фотографии?
            </p>
          </div>
          <a href="#" class="btn is-endgame__btn">
            Получить фотографии
          </a>
        </div>
      </div>
    </section>

		<section class="is-why" style="background: url(<? echo get_template_directory_uri() . '/assets/img/why_bg.jpg' ?>);">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h3>
              <? the_field('why_title'); ?>
              <span>
                <? the_field('why_title_color'); ?>
              </span>
            </h3>
            <? the_field('why_description'); ?>
            <div class="verticaline"></div>
            <div class="verticaline v2"></div>
          </div>
          <div class="col-lg-5">
          </div>
        </div>
      </div>
    </section>

		<section class="is-advantages container-fluid">
      <div class="row">
				<?php while ( have_rows('index_advantages') ) : the_row(); ?>
					<div class="col mx-auto">
	          <img src="<? the_sub_field('icon'); ?>" alt="" class="d-block img-fluid mx-auto">
	          <h4 class="d-block mx-auto text-center">
	            <? the_sub_field('count'); ?>
	          </h4>
	          <p class="d-block mx-auto text-center mb-5">
	            <? the_sub_field('label'); ?>
	          </p>
	        </div>
				<?php endwhile; ?>
      </div>
    </section>


<?php
get_footer();
?>
