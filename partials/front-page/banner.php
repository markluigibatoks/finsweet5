<div class="main-box lg:pt-24 pt-10">
    <div class="wrapper">
        <div class="flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:order-2 max-w-max">
                <img class="aspect-video lg:aspect-auto object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/banner-img1.jpg" alt="a coffee, and a croissant"/>
            </div>

            <div class="lg:order-1 max-w-[624px] w-full text-center lg:text-left">
                <h2 class="mb-4 lg:text-h1 md:text-h4 text-h3 opacity-87 text-white font-playfair">We serve high quality foods of all kinds.</h2>
                <p>Edit this text to make it your own. To edit, simply click directly on the text to start adding your own words. You can move the text.</p>
                <a href="<?php echo site_url('/menu') ?>" class="mt-8 button-primary mx-auto lg:mx-0 flex gap-2 items-center max-w-max">
                    View Menu
                    <div class="flex items-center justify-center text-grey">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>

                <ul class="mt-10">
                    <li>
                        <h4 class="text-h4 font-playfair text-white">Opening Times</h4>
                        <p>Sunday to Saturday | 09:00 AM to 11:00 PM</p>
                    </li>
                    <li class="mt-4">
                        <h4 class="text-h4 font-playfair text-white">Location</h4>
                        <address class="not-italic">Master canteen, BBSR , Odisha 752054</address>
                    </li>
                    <li class="mt-4">
                        <h4 class="text-h4 font-playfair text-white">Call us</h4>
                        <a href="tel:+9776462441" target="_blank" class="hover:underline">+9776462441</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>