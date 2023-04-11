<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/images/favicon/apple-touch-icon.png' ?>">
  <link rel="apple-touch-icon" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/images/favicon/favicon-32x32.png' ?>">
  <link rel="apple-touch-icon" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/images/favicon/favicon-16x16.png' ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <a class="crlab-logo" href="https://br.crlab.com/" tabindex="0">
      <img src="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/crlab.svg' ?>" alt="CRLAB" class="crlab-responsive-image">
    </a>

    <!-- Desktop Menu -->
    <nav>
      <a href="#procedimento" tabindex="0">O procedimento</a>
      <a href="#introduction" tabindex="0">A CRLAB</a>
      <a href="#contact" class="crlab-button outlined small" tabindex="0">Agende uma consulta</a>
      <a href="https://api.whatsapp.com/send?phone=5511995860584&text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta%20:)" target="_blank" tabindex="0">
        <img src="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/whatsapp.svg' ?>" alt="">
        11 99586.0584
      </a>
    </nav>
    <!-- Desktop -->

    <!-- Mobile Menu -->
    <div id="menu-trigger" class="crlab-mobile-menu-trigger" onclick="openSidenav()">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </div>

    <div id="sidenav" class="crlab-mobile-menu">
      <div class="nav-links-wrapper">
        <a href="javascript:void(0)" class="crlab-close-menu-button" onclick="closeSidenav()">&times;</a>
        <a href="#procedimento" onclick="closeSidenav()">O procedimento</a>
        <a href="#introduction" onclick="closeSidenav()">A CRLAB</a>
        <a href="https://api.whatsapp.com/send?phone=5511995860584&text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta%20:)" target="_blank" onclick="closeSidenav()">
          <img src="<?php echo get_stylesheet_directory_uri() . '/lp-fue/images/whatsapp.svg' ?>" alt="">
          11 99586.0584
        </a>
      </div>
      <a href="#contact" class="crlab-button outlined small" onclick="closeSidenav()">Agende uma consulta</a>
    </div>

    <div class="crlab-overlay"></div>
    <!--Mobile  -->
  </header>