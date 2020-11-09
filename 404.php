<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

	<section class="is-default container-xxl container-xl container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					Упс! Страница не найдена
				</h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12 content">
				Попробуйте проверить путь страницы или измените свой запрос
			</div>
		</div>
	</section>

<?php
get_footer();
