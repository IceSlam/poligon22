<?php
/**
 * The template for displaying Weapons page
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

	<section class="is-weapons-list container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					Арсенал оружия
				</h2>
			</div>
		</div>
		<div class="row mt-3 weapon-items">
			<?
          $args = array(
            'posts_per_page' => 9,
            'category__in' => 5,
            'paged' => get_query_var('paged') ?: 1
          );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
								<div class="col-md-6 col-lg-4 mb-3">
									<a href="<? the_permalink(); ?>">
										<div class="card">
											<div class="img-block">
												<img src="<? the_field('weapon_img') ?>" alt="" class="img-fluid">
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
									</a>
								</div>
                <?;
              }
            } else {
            }
            wp_reset_postdata();
          ?>

		</div>
		<div class="row mt-3">
			<div class="col-lg-12 d-flex align-items-center" style="position:relative">
				<div class="mx-auto">
					<?php
						if ( function_exists('wp_bootstrap_pagination') )
							wp_bootstrap_pagination();
					?>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12 d-flex justify-content-center">
				<a href="#" class="btn order ml-4 mr-4">
					Заказать игру
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
