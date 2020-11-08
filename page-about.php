<?php
/**
 * The template for displaying about page
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

<main id="main" class="is-main about">

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

	<section class="is-info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>
						О нас
					</h2>
					<? the_content(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="is-weapons">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h2>
						Большой арсенал оружия
					</h2>
				</div>
				<div class="col-lg-3">
					<a href="<? echo get_category_link(5); ?>" class="btn view btn-block text-right">
						<img src="<? echo get_template_directory_uri() . '/assets/img/weapons_view.svg';?>" alt="">
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
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<a href="#" class="btn order mt-4 mx-auto">
						Заказать игру
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="is-selection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>
						Тематические площадки
					</h2>
				</div>
			</div>
			<div class="row mt-5">
				<?
				$args = array(
					'posts_per_page' => 9,
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

<?php
get_footer();
