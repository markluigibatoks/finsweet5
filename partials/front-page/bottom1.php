<div class="main-box lg:py-40 py-20">
    <div class="wrapper">
        <div class="w-full text-center lg:text-left">
            <div class="flex gap-4 items-center justify-center lg:justify-start">
                <span class="text-cap-1 font-playfair uppercase text-colour-200">Our Menu</span>
                <div class="flex items-center justify-center">
                    <?php echo file_get_contents(get_template_directory() . '/assets/images/line.svg'); ?>
                </div>
            </div>
            <div class="lg:mt-6 mt-5 lg:flex gap-5 justify-between items-center">
                <h2 class="lg:max-w-[450px] mb-5 lg:mb-0 w-full font-playfair lg:text-h2 text-h3 opacity-87 text-white">Discover our menu chart</h2>
                <p class="lg:max-w-[499px]">Through True Rich Attended does no end it his mother since favourable real had half every him case in packages enquire we up ecstatic.. Through True Rich Attended does no end it his mother</p>
            </div>
        </div>

        <h3 class="mt-8 text-h5 text-colour-300">Most Popular Picks</h3>
        <ul class="lg:mt-21 mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img1.jpg" alt="drp coffee"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">Drp Cofee</h6>
                        <span>$08.85</span>
                    </div>
                </div>
            </li>

            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img2.jpg" alt="choco cup cake"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">Choco Cup Cake</h6>
                        <span>$04.85</span>
                    </div>
                </div>
            </li>

            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img3.jpg" alt="chicken burger"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">Chicken Burger</h6>
                        <span>$08.85</span>
                    </div>
                </div>
            </li>

            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img4.jpg" alt="french fries"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">French Fries</h6>
                        <span>$07.85</span>
                    </div>
                </div>
            </li>
            
            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img5.jpg" alt="sandwich"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">Sandwich</h6>
                        <span>$03.97</span>
                    </div>
                </div>
            </li>


            <li class="w-full">
                <div class="mx-auto max-w-[405px] bg-colour-400 w-full text-center lg:text-left">
                    <div class="max-w-max mx-auto">
                        <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom1-img6.jpg" alt="chinese soup"/>
                    </div>
                    <div class="py-6 px-8 text-white flex gap-5 items-center justify-between">
                        <h6 class="xl:text-h4 text-h5">Chinese Soup</h6>
                        <span>$08.85</span>
                    </div>
                </div>
            </li>
        </ul>

        <a href="<?php echo site_url('/menu') ?>" class="mt-8 button-primary mx-auto flex gap-2 items-center max-w-max">
            View Menu
            <div class="flex items-center justify-center text-grey">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
            </div>
        </a>
    </div>
</div>