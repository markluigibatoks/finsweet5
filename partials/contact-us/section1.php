<main class="main-box lg:pt-24 pt-20">
    <div class="wrapper">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        <div class="w-full text-center lg:text-left">
            <h2 class="lg:mb-6 mb-5 lg:text-h2 md:text-h3 text-h4 text-white/87">Have a Question ? <span class="block">Get in Touch with us 👋</span></h2>
            <p>Fill up the Form  and ou team will get back to within 24 hrs</p>
        
            <form class="mt-10 lg:max-w-[625px] w-full" method="POST" id="contact-us-form">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <label class="w-full">
                  <input class="w-full border border-white/4 py-3.5 px-8 text-paragraph text-white" type="text" name="name" placeholder="Name" autocomplete="name">
                </label>
                
                <label class="w-full">
                  <input class="w-full border border-white/4 py-3.5 px-8 text-paragraph text-white" type="email" name="email" placeholder="Email" autocomplete="email">
                </label>

                <label class="w-full md:col-span-2">
                  <textarea class="w-full border border-white/4 px-8 py-3.5 text-paragraph text-white" rows="4" name="message" placeholder="Message"></textarea>
                </label>
              </div>
              <button type="submit" class="mt-8 button-primary cursor-pointer text-white bg-[#27252D] flex gap-3 items-center">
                Send Message

                <span class="flex items-center justify-center text-[#FFC492]">
                    <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                </span>
              </button>
            </form>
        </div>

        <div class="max-w-[547px] lg:mx-0 mx-auto flex xl:gap-17 gap-5">
          <div class="mt-21 max-w-max mx-auto">
            <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/contact-us/section1-img1.jpg" alt="cafe ambiance"/>
          </div>

          <div class="max-w-max mx-auto">
            <img class="object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/contact-us/section1-img2.jpg" alt="making coffee"/>
          </div>
        </div>
      </div>
    </div>
</main>