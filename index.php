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

		<section class="is-selection">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              Подберём для вас подходящую площадку
            </h2>
            <h3>
              от диких до максимально комфортных с банями и рестораном
            </h3>
          </div>
        </div>
        <div class="row mt-5">
					<?
          $args = array(
            'posts_per_page' => 3,
            'category__in' => 6
          );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
								<div class="col-md-6 col-lg-4 mb-3">
			            <div class="card bg-image hover-overlay">
			              <div class="img">
			                <img src="<? the_field('platform_img'); ?>" alt="" class="">
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
			              <a href="<? the_permalink(); ?>" class="title">
			                <? the_title(); ?>
			              </a>
			            </div>
			          </div>
                <?;
              }
            } else {
            }
            wp_reset_postdata();
          ?>
        </div>
        <div class="row mt-4">
          <div class="col-md-6 col-lg-4 view-block">
            <a href="#" class="btn variants btn-block">
              <img src="<? echo get_template_directory_uri() . '/assets/img/selection_variants.svg' ?>" alt="">
              <p class="first">
                Смотреть
              </p>
              <p class="second">
                Варианты сценариев
              </p>
            </a>
          </div>
          <div class="col-md-6 offset-lg-4 col-lg-4">
            <a href="<? echo get_category_link(6); ?>" class="btn view">
              Смотреть все площадки
            </a>
          </div>
        </div>
      </div>
    </section>

		<section class="is-weapons container-xxl container-xl container">
      <div class="row">
        <div class="col-lg-9">
          <h2>
            Большой арсенал оружия
          </h2>
        </div>
        <div class="col-lg-3">
          <a href="<? echo get_category_link(5); ?>" class="btn view btn-block text-right">
            <img src="<? echo get_template_directory_uri() . '/assets/img/weapons_view.svg' ?>" alt="">
            <span>
              Смотреть все оружие
            </span>
          </a>
        </div>
      </div>
      <div class="row mt-5">
				<?
				$args = array(
					'posts_per_page' => 3,
					'category__in' => 5
				);

					$query = new WP_Query( $args );
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
							<div class="col-md-6 col-lg-4 mb-3">
			          <div class="card">
			            <div class="img-block">
			              <img src="<? the_field('weapon_img'); ?>" alt="<? the_title(); ?>" class="img-fluid">
			            </div>
			            <a href="<? the_permalink(); ?>" class="title">
			              <? the_title(); ?>
			            </a>
			            <span class="btn plus">
			              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
			                <line x1="5.5" y1="11" x2="5.5" y2="2.18557e-08" stroke="#84AF5A"/>
			                <line x1="11" y1="5.5" x2="-4.37113e-08" y2="5.5" stroke="#84AF5A"/>
			              </svg>
			            </span>
			          </div>
			        </div>
							<?;
						}
					} else {
					}
					wp_reset_postdata();
				?>
      </div>
    </section>

		<section class="is-features">
      <div class="wrapper container-fluid">
        <div class="row">
          <div class="col-lg-6 bg" style="background: url(<? echo get_template_directory_uri() . '/assets/img/features_img_bg.jpg' ?>)">
          </div>
          <div class="col-lg-6 content">
						<?php while ( have_rows('index_features') ) : the_row(); ?>
							<div class="line">
	              <img src="<? the_sub_field('icon'); ?>" alt="<? the_sub_field('title'); ?>">
	              <div class="text-wrap">
	                <div class="text">
	                  <p class="main">
	                    <? the_sub_field('title'); ?>
	                  </p>
										<p class="sub">
											<? the_sub_field('subtitle'); ?>
										</p>
	                </div>
	              </div>
	            </div>
						<?php endwhile; ?>
            <a href="#" class="btn calculate">
              Рассчитать стоимость
            </a>
          </div>
        </div>
      </div>
    </section>

		<section class="is-photogalery container-xxl container-xl container">
      <div class="row">
        <div class="col-lg-6">
          <h2>
            Фотогалерея
          </h2>
        </div>
        <div class="col-lg-6">
          <a href="<? echo get_category_link(2); ?>" class="btn view btn-block text-right">
            <img src="<? echo get_template_directory_uri() . '/assets/img/weapons_view.svg' ?>" alt="">
            <span>
              Смотреть все фотографии
            </span>
          </a>
        </div>
      </div>
      <div class="row mt-5">
			<div class="col-lg-3">
					<div data-fancybox="image" href="<? the_field('index_photo_left'); ?>" class="card long" style="background: url(<? the_field('index_photo_left'); ?>);">
						<div class="mask">
							<div class="angle top-left"></div>
							<div class="angle top-right"></div>
							<div class="angle bottom-left"></div>
							<div class="angle bottom-right"></div>
							<img src="<? echo get_template_directory_uri() . '/assets/img/photogalery_aim.svg' ?>" alt="">
						</div>
					</div>
				</div>
        <div class="col-lg-6">
					<?php while ( have_rows('index_photos_center') ) : the_row(); ?>
						<div data-fancybox="image" href="<? the_sub_field('photo'); ?>" class="card short" style="background: url(<? the_sub_field('photo'); ?>);float:left;margin:0 .5rem 1rem;max-width:47.5%;width:100%;min-height:227px">
	            <div class="mask">
	              <div class="angle top-left"></div>
	              <div class="angle top-right"></div>
	              <div class="angle bottom-left"></div>
	              <div class="angle bottom-right"></div>
	              <img src="<? echo get_template_directory_uri() . '/assets/img/photogalery_aim.svg' ?>" alt="">
	            </div>
	          </div>
					<?php endwhile; ?>
        </div>
        <div class="col-lg-3">
          <div data-fancybox="image" href="<? the_field('index_photo_right'); ?>" class="card long" style="background: url(<? the_field('index_photo_right'); ?>);">
            <div class="mask">
              <div class="angle top-left"></div>
              <div class="angle top-right"></div>
              <div class="angle bottom-left"></div>
              <div class="angle bottom-right"></div>
              <img src="<? echo get_template_directory_uri() . '/assets/img/photogalery_aim.svg' ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="is-videoreviews container-xxl container-xl container mt-2 mb-2">
      <div class="row title-block" style="margin-bottom: -4.5rem;" >
        <div class="col-lg-6">
          <h2>
            Видео отзывы
          </h2>
        </div>
        <div class="offset-lg-3 col-lg-3"></div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="uk-position-relative uk-light" style="padding-top: 9rem;" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
							<?php while ( have_rows('index_reviews') ) : the_row(); ?>
								<li data-fancybox href="<? the_sub_field('link'); ?>">
                    <div class="uk-panel">
                        <img src="<? the_sub_field('preview');?>" alt="">
                        <div class="mask"></div>
                        <div class="uk-position-center uk-panel">
                          <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle class="wave" opacity="0.2" cx="65" cy="65" r="64.5" stroke="white"/>
                          <circle class="wave" opacity="0.3" cx="65" cy="65" r="54.5" stroke="white"/>
                          <circle class="wave" opacity="0.5" cx="65" cy="65" r="44.5" stroke="white"/>
                          <circle class="round" cx="65" cy="65" r="35" fill="white"/>
                          <path d="M75.1635 63.2724C76.4865 64.0442 76.4865 65.9558 75.1635 66.7276L60.1327 75.4955C58.7994 76.2732 57.125 75.3115 57.125 73.7679L57.125 56.2321C57.125 54.6885 58.7994 53.7267 60.1327 54.5045L75.1635 63.2724Z" fill="#F9B024"/>
                          </svg>
                        </div>
                    </div>
                </li>
							<?php endwhile; ?>
            </ul>

            <a class="uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

            <ul class="uk-slider-nav uk-dotnav"></ul>

          </div>
        </div>
      </div>
    </section>


<?php
get_footer();
?>
