<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poligon22
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<body id="body">

  <header id="header" class="is-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 brand">
          <a href="./" class="">
          <img src="<?php echo get_template_directory_uri() . "/assets/img/poligon_logo.png" ?>" alt="Полигон22" class="img-fluid is-brand__logo">
          <div class="is-brand">
            <h1 class="is-brand__title">
              Полигон 22
            </h1>
            <p class="is-brand__description">
              Лазертаг от команды профессионалов!
            </p>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <p class="is-header__games-counter">
            <? echo get_option( 'poligon22_years' ); ?> организуем
          </p>
          <p class="is-header__games-type">
            игры в лазертаг
          </p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="is-header__phone">
						<?
            	$poligon22_phone = get_option( 'poligon22_phone' );
              	if ($poligon22_phone) { ?>
		            <a href="tel:<? echo get_option( 'poligon22_phone' ); ?>" class="tel">
		              <? echo get_option( 'poligon22_phone' ); ?>
		            </a> <?
							}
            ?>
            <br>
						<?
            	$poligon22_email = get_option( 'poligon22_email' );
              	if ($poligon22_email) { ?>
		            <a href="mailto:<? echo get_option( 'poligon22_email' ); ?>" class="email">
									Эл. почта:
		              <? echo get_option( 'poligon22_email' ); ?>
		            </a> <?
							}
            ?>
          </div>
          <div class="is-header__socials">
						<?
							$poligon22_vk = get_option( 'poligon22_vk' );
								if ($poligon22_vk) { ?>
								<a href="<? echo get_option( 'poligon22_vk' ); ?>" class="social vk" target="_blank">
									<i class="fab fa-vk"></i>
								</a> <?
							}
						?>
						<?
							$poligon22_youtube = get_option( 'poligon22_youtube' );
								if ($poligon22_youtube) { ?>
								<a href="<? echo get_option( 'poligon22_youtube' ); ?>" class="social yt" target="_blank">
									<i class="fab fa-youtube"></i>
								</a> <?
							}
						?>
						<?
							$poligon22_ok = get_option( 'poligon22_ok' );
								if ($poligon22_ok) { ?>
								<a href="<? echo get_option( 'poligon22_ok' ); ?>" class="social ok" target="_blank">
									<i class="fab fa-odnoklassniki"></i>
								</a> <?
							}
						?>
						<?
							$poligon22_instagram = get_option( 'poligon22_instagram' );
								if ($poligon22_instagram) { ?>
								<a href="<? echo get_option( 'poligon22_instagram' ); ?>" class="social inst" target="_blank">
									<i class="fab fa-instagram"></i>
								</a> <?
							}
						?>
          </div>
        </div>
        <div class="col-md-6 offset-lg-1 col-lg-2">
          <a
            class="btn is-header__games-order"
            type="button"
            data-toggle="modal"
            data-target="#order-game"
          >
            Заказать игру
          </a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark is-navbar">
      <div class="container">
        <p class="d-lg-none mb-0 pt-3 pb-3 pl-3" style="font-family: Rubik; color: #fff;">
          Меню
        </p>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">
                О нас
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Фотогалерея игр</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Лучшие игроки</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Статьи</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Оружие</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
