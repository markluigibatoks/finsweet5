<main class="main-box lg:pb-40 lg:pt-24 py-20">
    <div class="wrapper">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-5">
            <div class="lg:order-2 flex lg:gap-17 md:gap-10 gap-5">
                <div class="mt-21 max-w-max">
                    <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/middle1-img1.jpg" alt="store ambiance"/>
                </div>

                <div class="max-w-max">
                    <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/middle1-img2.jpg" alt="store ambiance"/>
                </div>
            </div>

            <div class="lg:order-1 lg:max-w-[613px] w-full text-center lg:text-left">
                <div class="flex gap-4 items-center justify-center lg:justify-start">
                    <span class="text-cap-1 font-playfair uppercase text-colour-200">Know More About Us</span>
                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/line.svg'); ?>
                    </div>
                </div>
                <h2 class="lg:mt-6 lg:mb-8 mb-5 lg:text-h2 text-h3 font-playfair text-white">We source sustainable & line caught Foods</h2>
                <p>Edit this text to make it your own. To edit, simply click directly on the text to start adding your own words. You can move the text by dragging and dropping the text anywhere on the page. </p>

                <ul class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <li class="w-full">
                        <div class="w-full text-center lg:text-left">
                            <h2 class="text-number-1 text-colour-300 before:content-[url('../assets/images/front-page/middle1-icon1.png')] before:mr-2">10+ People</h2>
                            <span>We are Small Team</span>
                            <p class="mt-4">Through True Rich Attended does no end it his mother since favourable.</p>
                        </div>
                    </li>

                    <li class="w-full">
                        <div class="w-full text-center lg:text-left">
                            <h2 class="text-number-1 text-colour-300 before:content-[url('../assets/images/front-page/middle1-icon1.png')] before:mr-2">2014</h2>
                            <span>We are From</span>
                            <p class="mt-4">Through True Rich Attended does no end it his mother since favourable.</p>
                        </div>
                    </li>

                    <li class="w-full">
                        <div class="w-full text-center lg:text-left">
                            <h2 class="text-number-1 text-colour-300 before:content-[url('../assets/images/front-page/middle1-icon1.png')] before:mr-2">200k</h2>
                            <span>We Served</span>
                            <p class="mt-4">Through True Rich Attended does no end it his mother since favourable.</p>
                        </div>
                    </li>
                </ul>

                <a href="<?php echo site_url('/menu') ?>" class="mt-8 button-primary mx-auto lg:mx-0 flex gap-2 items-center max-w-max">
                    View Menu
                    <div class="flex items-center justify-center text-grey">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>