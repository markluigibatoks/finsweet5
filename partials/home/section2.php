<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);

  $link = '#';

  if($recent_blog->have_posts()) {
    while($recent_blog->have_posts()) {
      $recent_blog->the_post();

      $link = get_the_permalink();
    }
  }

  wp_reset_postdata();
?>

<div class="main-box">
    <div class="wrapper">
        <h2 class="lg:text-4xl leading-[44px] tracking-normal text-h4 text-white/87 font-playfair">All Articles</h2>

        <ul class="lg:mt-16 mt-10 grid grid-cols-1 lg:grid-cols-2 gap-10">
          <li class="w-full">
            <div class="w-full flex sm:flex-row flex-col gap-10 item-start sm:items-center">
              <div class="max-w-max w-full">
                <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img2.jpg" alt="a lavish piece"/>
              </div>

              <div>
                <div class="flex items-center gap-4">
                  <div class="max-w-max">
                    <img class="rounded-full object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.png" alt="andrew jonson"/>
                  </div>
                  
                  <div>
                    <span class="block opacity-87 text-paragraph text-white">Andrew Jonson</span>
                    <span class="text-white/60 text-date-1">27th January 2021</span>
                  </div>
                </div>
                <h3 class="mt-6 font-playfair text-white/87 text-h4">A guide to Thai Curry</h3>

                <a href="<?php echo $link; ?>" class="mt-6 flex gap-2 items-center max-w-max text-white hover:underline">
                      Read More
                      <div class="flex items-center justify-center text-white">
                          <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                      </div>
                  </a>
              </div>
            </div>
          </li>

          <li class="w-full">
            <div class="w-full flex sm:flex-row flex-col gap-10 item-start sm:items-center">
              <div class="max-w-max w-full">
                <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img3.jpg" alt="a lavish piece"/>
              </div>

              <div>
                <div class="flex items-center gap-4">
                  <div class="max-w-max">
                    <img class="rounded-full object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.png" alt="andrew jonson"/>
                  </div>
                  
                  <div>
                    <span class="block opacity-87 text-paragraph text-white">Andrew Jonson</span>
                    <span class="text-white/60 text-date-1">27th January 2021</span>
                  </div>
                </div>
                <h3 class="mt-6 font-playfair text-white/87 text-h4">The best guacamole recipe with only 4 ingredients</h3>

                <a href="<?php echo $link; ?>" class="mt-6 flex gap-2 items-center max-w-max text-white hover:underline">
                      Read More
                      <div class="flex items-center justify-center text-white">
                          <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                      </div>
                  </a>
              </div>
            </div>
          </li>

          <li class="w-full">
            <div class="w-full flex sm:flex-row flex-col gap-10 item-start sm:items-center">
              <div class="max-w-max w-full">
                <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img4.jpg" alt="a lavish piece"/>
              </div>

              <div>
                <div class="flex items-center gap-4">
                  <div class="max-w-max">
                    <img class="rounded-full object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.png" alt="andrew jonson"/>
                  </div>
                  
                  <div>
                    <span class="block opacity-87 text-paragraph text-white">Andrew Jonson</span>
                    <span class="text-white/60 text-date-1">27th January 2021</span>
                  </div>
                </div>
                <h3 class="mt-6 font-playfair text-white/87 text-h4">How to store Tomatoes (and Whether to Refrigerate Them)</h3>

                <a href="<?php echo $link; ?>" class="mt-6 flex gap-2 items-center max-w-max text-white hover:underline">
                      Read More
                      <div class="flex items-center justify-center text-white">
                          <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                      </div>
                  </a>
              </div>
            </div>
          </li>

          <li class="w-full">
            <div class="w-full flex sm:flex-row flex-col gap-10 item-start sm:items-center">
              <div class="max-w-max w-full">
                <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img5.jpg" alt="a lavish piece"/>
              </div>

              <div>
                <div class="flex items-center gap-4">
                  <div class="max-w-max">
                    <img class="rounded-full object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.png" alt="andrew jonson"/>
                  </div>
                  
                  <div>
                    <span class="block opacity-87 text-paragraph text-white">Andrew Jonson</span>
                    <span class="text-white/60 text-date-1">27th January 2021</span>
                  </div>
                </div>
                <h3 class="mt-6 font-playfair text-white/87 text-h4">The Absolute Best Way to Cook French Fries</h3>

                <a href="<?php echo $link; ?>" class="mt-6 flex gap-2 items-center max-w-max text-white hover:underline">
                      Read More
                      <div class="flex items-center justify-center text-white">
                          <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                      </div>
                  </a>
              </div>
            </div>
          </li>
        </ul>
    </div>
</div>