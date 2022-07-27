<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><b><a href="<?php echo site_url() ?>">Reisebüro</a></b></h1>
      <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li <?php if (get_post_type() == 'destination') echo 'class="current-menu-item"' ?>><b><a href="<?php echo get_post_type_archive_link('destination'); ?>">Reiseziel</a></b></li>
            <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"';  ?>><b><a href="<?php echo get_post_type_archive_link('event'); ?>">Reiseplan</a></b></li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><b><a href="<?php echo site_url('/blog'); ?>">Blog</a></b></li>
            <li <?php if (get_post_type() == 'cv') echo 'class="current-menu-item"' ?>><b><a href="<?php echo get_post_type_archive_link('cv'); ?>">Lebenslauf</a></b></li>
            <li <?php if (is_page('kontakt') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><b><a href="<?php echo site_url('/kontakt') ?>">Kontakt</a></b></li>
          </ul>
        </nav>
          <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </header>
<b></b>