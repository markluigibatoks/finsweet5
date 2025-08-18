<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="z-10 sticky top-0">
      <div class="z-10 main-box bg-colour-0">
        <div class="wrapper">
          <div class="py-3 lg:py-0 flex items-center">
            <a href="<?php echo site_url('/')?>">
              <div class="lg:pr-12 pr-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
              </div>
            </a>

            <nav class="hidden lg:block">
                <ul class="flex gap-10">
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_page('/menu') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Menu</a>
                    </li>
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_page('/about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_page('/our-story') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/our-story'); ?>">Our Story</a>
                    </li>
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                    <li class="py-7">
                      <a class="nav-link text-white hover:underline <?php echo is_page('/contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact</a>
                    </li>
                </ul>
            </nav>

            <a href="https://github.com/markluigibatoks/finsweet5" target="_blank" class="hover:underline ml-auto flex items-center gap-2 md:gap-3 text-label-2 text-colour-200 text-nowrap">
              Clone Project
              <div class="flex items-center justify-center text-white">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
              </div>
            </a>

            <?php get_template_part('/partials/drawer-toggle') ?>
          </div>
        </div>
      </div>

      <?php get_template_part('/partials/drawer') ?>
    </header>