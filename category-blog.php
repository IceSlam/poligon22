<?php
/**
 * The template for displaying Blog page
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

	<section class="is-pubs container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					Статьи
				</h2>
			</div>
		</div>
		<div class="row mt-3">
			<?
          $args = array(
            'posts_per_page' => 9,
            'category__in' => 3,
            'paged' => get_query_var('paged') ?: 1
          );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
								<div class="card mb-3">
									<div class="row g-0">
										<div class="col-md-3 hover-overlay img-block">
											<div class="img" style="background: url(<? $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $image_url[0]; ?>)">
												<img src="<? echo get_template_directory_uri() . '/assets/img/pubs_item1.jpg'; ?>" alt="" class="img-fluid" style="opacity:0">
												<div class="mask"></div>
											</div>
											<div class="bordered-frame-top"></div>
											<div class="bordered-frame-bottom"></div>
											<div class="bordered-frame-left"></div>
											<div class="bordered-frame-right"></div>
										</div>
										<div class="col-md-9">
											<div class="card-body">
												<a href="<? the_permalink(); ?>" class="card-title">
													<? the_title(); ?>
												</a>
												<p class="card-text">
													<? the_excerpt(); ?>
												<p class="card-text">
													<small class="text-muted">
														<a href="<? the_permalink(); ?>" class="btn more mb-4">
															<span class="plus">
																+
															</span>
															Подробнее
														</a>
													</small>
												</p>
											</div>
										</div>
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
	</section>

<?php
get_footer();
