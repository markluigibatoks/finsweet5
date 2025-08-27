<footer class="main-box px-0">
  <div class="wrapper">
    <div class="lg:pt-40 pt-20 flex flex-col sm:flex-row items-stretch">
      <div class="relative sm:order-2 w-full grayscale-100">
        <iframe class="w-full h-full min-h-[300px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387196.06506356475!2d-74.30844760704744!3d40.69667469060334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sca!4v1755856115358!5m2!1sen!2sca" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <ul class="sm:order-1 bg-colour-400 sm:py-20 sm:px-16 py-10 px-5 lg:max-w-[441px] w-full grid grid-cols-1 gap-8">
        <li class="w-full">
          <div class="w-full text-center sm:text-left">
            <h2 class="mb-1.5 text-h4 text-white font-playfair">Working Hour</h2>
            <span class="block">Sunday to Saturday</span>
            <span class="block">09:00 AM to 11:00 PM</span>
          </div>
        </li>

        <li class="w-full">
          <div class="w-full text-center sm:text-left">
            <h2 class="mb-1.5 text-h4 text-white font-playfair">Location</h2>
            <address class="not-italic">Street - 127, New York,<span class="block">United States</span> <span class="block">546544</span></address>
          </div>
        </li>

        <li class="w-full">
          <div class="w-full text-center sm:text-left">
            <h2 class="mb-1.5 text-h4 text-white font-playfair">Contact Us</h2>
            <a href="tel:+123456789" target="_blank" class="block hover:underline text-colour-100">+123456789</a>
            <a href="mailto:hey@yourdomain.com" target="_blank" class="block hover:underline text-colour-100">hey@yourdomain.com</a>
          </div>
        </li>
      </ul>
    </div>

    <a href="<?php echo site_url('/')?>" class="block mx-auto max-w-max mt-20 lg:mt-40">
      <div class="max-w-max">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
      </div>
    </a>

    <nav class="mt-11 mb-8 px-5">
        <ul class="grid lg:flex sm:grid-cols-3 grid-cols-2 gap-10 place-items-center justify-center">
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
            </li>
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_page('menu') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/menu'); ?>">Menu</a>
            </li>
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
            </li>
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_page('our-story') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/our-story'); ?>">Our Story</a>
            </li>
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li>
              <a class="nav-link text-white hover:underline <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact</a>
            </li>
        </ul>
    </nav>
  </div>

  <div class="border-t border-white/7 px-5 py-7">
    <div class="wrapper">
      <div class="grid grid-cols-2 place-items-between lg:flex items-center justify-between gap-5 flex-wrap">
        <ul class="lg:order-2 flex items-center gap-6 max-w-max">
          <li>
            <a aria-label="dummy link" href="#" class="hover:opacity-80 active:opacity-90 flex items-center justify-center">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/facebook.svg'); ?>
            </a>
          </li>

          <li>
            <a aria-label="dummy link" href="#" class="hover:opacity-80 active:opacity-90 flex items-center justify-center">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/twitter.svg'); ?>
            </a>
          </li>

          <li>
            <a aria-label="dummy link" href="#" class="hover:opacity-80 active:opacity-90 flex items-center justify-center">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/instagram.svg'); ?>
            </a>
          </li>

          <li>
            <a aria-label="dummy link" href="#" class="hover:opacity-80 active:opacity-90 flex items-center justify-center">
              <?php echo file_get_contents(get_template_directory() . '/assets/images/linkedin.svg'); ?>
            </a>
          </li>
        </ul>

        <a href="<?php echo site_url('/contact') ?>" target="_blank" class="lg:order-3 hover:underline flex items-center gap-2 md:gap-3 text-label-2 text-white text-nowrap max-w-max justify-self-end lg:justify-self-auto">
          Contact Us
          <div class="flex items-center justify-center text-colour-200">
            <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
          </div>
        </a>

        <div class="lg:order-1 col-span-2 lg:col-span-1 lg:mx-0 lg:text-left text-center leading-[24px] mx-auto">
          &copy; <?php echo date('Y')?> <a class="hover:underline" href="<?php echo site_url('/') ?>"><?php echo get_bloginfo(); ?></a> <span class="hidden sm:inline">|</span> <span class="block sm:inline">All Rights Reserved</span>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
