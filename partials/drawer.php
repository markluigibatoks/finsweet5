<div id="drawer" class="absolute top-0 bg-colour-0 w-full text-white h-0 overflow-hidden transition-all ease-in-out duration-700">
    <div class="main-box overflow-auto h-full">    
        <div class="wrapper">
            <nav class="pt-20">
                <ul class="flex flex-col gap-12">
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_page('menu') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/menu'); ?>">Menu</a>
                    </li>
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_page('our-story') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/our-story'); ?>">Our Story</a>
                    </li>
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                    <li>
                        <a class="text-2xl text-white hover:underline <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>