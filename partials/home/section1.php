<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);

  wp_reset_postdata();
?>

<div class="main-box lg:pt-24 lg:pb-40 py-20">
    <div class="wrapper">
        <h2 class="lg:mb-16 mb-10 text-center text-white font-playfair lg:text-h2 md:text-h3 text-h4">Featured Blogs</h2>

        <div class="flex flex-col lg:flex-row gap-8">
          <div class="relative w-full max-w-[624px] min-h-[496px] px-16 lg:mx-0 mx-auto">
              <div class="-z-20 absolute top-0 left-0 w-full h-full">
                <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img2.jpg" alt="cafe"/>
              </div>

              <div class="-z-10 absolute top-0 left-0 w-full h-full bg-[#14111551]"></div>

              <span class="z-10 absolute top-0 left-0 block text-white w-40 h-13 px-7 bg-[#8f6f56] uppercase font-poppins font-500 leading-[52px] tracking-[3px]">Trending</span>
              <div class="absolute bottom-10">
                <h2 class="lg:max-w-[451px] font-playfair lg:text-h2 md:text-h3 text-h4 text-white">A guide to Thai Curry</h2>

                <div class="mt-10 flex items-center gap-5 justify-between">
                  <div class="flex items-center gap-4">
                    <div class="max-w-max">
                      <img class="rounded-full object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.png" alt="andrew jonson"/>
                    </div>
                    
                    <div>
                      <span class="block opacity-87 text-paragraph text-white">Andrew Jonson</span>
                      <span class="text-white/60 text-date-1">27th January 2021</span>
                    </div>
                  </div>

                  <a href="<?php echo site_url('/menu') ?>" class="flex gap-2 items-center max-w-max text-white">
                      Read More
                      <div class="flex items-center justify-center text-white">
                          <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                      </div>
                  </a>
                </div>
              </div>
          </div>

          <ul class="lg:max-w-[537px] grid grid-cols-1 gap-8">
            <li class="w-full">
              <div class="flex items-center gap-8">
                <div class="max-w-max w-full">
                  <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img3.jpg" alt="a woman working seriously"/>
                </div>
                <div class="w-full">
                  <h2 class="mb-5 text-white/87 text-h4 font-playfair">You can move the text by dragging and dropping the text</h2>
                  <p>Writing UX copies can be a little frustrating and confusing, and sometimes </p>
                </div>
              </div>
            </li>

            <li class="w-full">
              <div class="flex items-center gap-8">
                <div class="max-w-max w-full">
                  <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img4.jpg" alt="a coffee"/>
                </div>
                <div class="w-full">
                  <h2 class="mb-5 text-white/87 text-h4 font-playfair">Edit this text to make it your own. To edit, simply </h2>
                  <p>Writing UX copies can be a little frustrating and confusing, and sometimes </p>
                </div>
              </div>
            </li>

            <li class="w-full">
              <div class="flex items-center gap-8">
                <div class="max-w-max w-full">
                  <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img5.jpg" alt="man and woman prepping food together"/>
                </div>
                <div class="w-full">
                  <h2 class="mb-5 text-white/87 text-h4 font-playfair">You can move the text by dragging and dropping the text</h2>
                  <p>Writing UX copies can be a little frustrating and confusing, and sometimes </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </div>
</div>