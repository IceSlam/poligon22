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

	<section class="is-photogalery-block container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					Фотогалерея игр
				</h2>
			</div>
		</div>
		<div class="row mt-3 galery-items">
			<?
          $args = array(
            'posts_per_page' => 9,
            'category__in' => 2,
            'paged' => get_query_var('paged') ?: 1
          );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
								<div class="col-md-6 col-lg-4 mb-3">
				          <div class="card bg-image hover-overlay">
				            <div class="img">
				              <? the_post_thumbnail(); ?>
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
				              <?
												the_title();
											?>
				            </a>
				            <a href="<? the_permalink(); ?>" class="view">
				              смотреть все фотографии
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
				<a class="btn get ml-4 mr-4"
					type="button"
					data-toggle="modal"
					data-target="#get-photo"
				>
					Получить фотографии
				</a>
				<div
					class="modal fade order-game"
					id="get-photo"
					tabindex="-1"
					aria-labelledby="get-photo-label"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="get-photo-label">
									Получить фотографии
								</h5>
								<button
									type="button"
									class="btn-close"
									data-dismiss="modal"
									aria-label="Close"
								></button>
							</div>
							<div class="modal-body">
								<?php echo do_shortcode( '[contact-form-7 id="77" title="Заказать игру"]' ); ?>
							</div>
						</div>
					</div>
				</div>
				<a
					class="btn order ml-4 mr-4"
					type="button"
					data-toggle="modal"
					data-target="#order-game"
				>
					Заказать игру
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
