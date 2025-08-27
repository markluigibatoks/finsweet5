<?php get_header(); ?>

<main class="main-box lg:pt-24 pt-20">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post();
        $author_id = get_the_author_meta('ID');
        ?>
        <div class="wrapper">
          <div class="flex items-center gap-6 justify-center max-w-[648px] mx-auto border-b border-b-white/5 pb-6">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 max-w-max">
                <img class="rounded-full object-cover w-full" src="<?php echo get_avatar_url($author_id, 32); ?>" alt=""/>
              </div>

              <span class="text-white/87 text-paragraph"><?php echo get_the_author(); ?></span>
            </div>

            <div class="text-center">
              <span>Posted on <?php echo get_the_date(); ?> </span>
              
            </div>
          </div>
          <h2 class="text-white text-center lg:text-h2 md:text-h3 text-h4 mt-8 font-playfair my-0"><?php the_title(); ?></h2>
        </div>
        <div class="lg:mt-20 mt-10 prose prose-invert max-w-7xl mx-auto">
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
</main>

<?php get_footer(); ?>