<?php get_header(); ?>

<div class="bg-[url('../assets/img/hero-background.jpg')] bg-cover" id="home">
  <div class="px-8 py-24 lg:py-28 lg:px-16 bg-white/70 backdrop-blur-md">
    <div class="xl:w-1/2 md:w-3/4 my-0 mx-auto">
      <div>
          <h1 class="font-bold text-4xl lg:text-6xl text-blue text-center"> Levelling up your business digitally </h1>
          <img class="text-center my-0 mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/heading-line.svg" alt="" />
      </div>
      <div class=" text-base lg:text-lg text-blue mt-4 text-center">
          <p>Visualsnare is a digital design studio based in Nairobi-Kenya that solves business needs with great visual aesthetics, clear communication and effective software</p>
          <p class="mt-4">We specialize in bespoke web development which entails coding, testing applications, user interface design, user research and more </p>
          <div class="flex justify-around mt-8">
            <div class="flex flex-col">
              <img class="w-28 h-28 object-contain my-0 mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/web-dev-icon.svg" alt="web development icon">
              <p class="font-bold text-center text-blue"> Web Development </p>
            </div>
            <div class="flex flex-col">
              <img class="w-28 h-28 object-contain my-0 mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/ui-design-icon.svg" alt="ui design icon">
              <p class="font-bold text-center text-blue"> UI Design </p>
            </div>
          </div>
      </div>    
    </div>
  </div>
</div>

<div class="px-8 lg:px-16 py-20" id="work">
  <h2 class="text-4xl text-blue mb-8 font-bold text-center">Work</h2>
  <div class="flex mb-8 lg:w-2/5 md:w-2/3 w-full justify-between my-0 mx-auto overflow-hidden" role="tablist">
    <button class="tab-btn py-2 px-6 rounded-lg" role="tab" data-tab="tab-1">Web Development</button>
    <button class="tab-btn py-2 px-6 bg-light-blue text-blue rounded-lg" role="tab" data-tab="tab-2">UI Design</button>
  </div>

  <div class="tab-content">
    <div class="tab-pane hidden" id="tab-1">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 lg:gap-x-16 gap-y-12 web-dev">
      <?php
      $args = [
          "post_type" => "web_dev",
          "order" => "ASC",
          "posts_per_page" => 4,
          "paged" => 1, // Current page starts at 1
      ];
      $web_dev = new WP_Query($args);
      ?>
      <?php if ($web_dev->have_posts()): ?>
          <?php while ($web_dev->have_posts()):
              $web_dev->the_post(); ?>
          <div class="w-[570px] h-[380px]">
              <a href="<?php echo get_permalink(); ?>" class="relative">
                  <?php the_post_thumbnail("large", [
                      "class" =>
                          "object-cover w-full h-full rounded-t-xl brightness-75",
                  ]); ?>
                  <p class="absolute text-dark-blue bg-white leading-none left-4 bottom-0 text-lg font-semibold px-4 py-2"> <?php the_title(); ?> </p>
              </a>
          </div>
          <?php
          endwhile; ?>
      <?php endif; ?>
      </div>
      <div class="flex justify-center gap-4 mt-10">
        <button id="prev-button" class="hover:bg-orange flex items-center bg-light-orange text-dark-blue font-bold px-4 py-2 rounded"><span class="pr-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow-icon.svg">
        </span>Previous</button>
        <button id="next-button" class="hover:bg-orange flex items-center bg-light-orange text-dark-blue font-bold px-4 py-2 rounded">Next<span class="pl-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-icon.svg">
        </span></button>
      </div>
    </div>

    <div class="tab-pane hidden" id="tab-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 lg:gap-x-16 gap-y-12">
      <?php
      $args = [
          "post_type" => "ui_design",
          "order" => "ASC",
          "posts_per_page" => 4,
          // "paged" => 1, // Current page starts at 1
      ];
      $ui_design = new WP_Query($args);
      ?>
      <?php if ($ui_design->have_posts()): ?>
          <?php while ($ui_design->have_posts()):
              $ui_design->the_post(); ?>
          <div class="w-[570px] h-[380px]">
              <a href="<?php echo get_permalink(); ?>" class="relative">
                  <?php the_post_thumbnail("large", [
                      "class" =>
                          "object-cover w-full h-full rounded-t-xl brightness-75",
                  ]); ?>
                  <p class="absolute text-dark-blue bg-white leading-none left-4 bottom-0 text-lg font-semibold px-4 py-2"> <?php the_title(); ?> </p>
              </a>
          </div>
          <?php
          endwhile; ?>
      <?php endif; ?>
      </div>
      </div>
    </div>
</div>

<script>
  // JavaScript for Tabs Functionality
  document.addEventListener("DOMContentLoaded", () => {
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabPanes = document.querySelectorAll(".tab-pane");

    // Activate first tab by default
    tabButtons[0].classList.add("bg-dark-blue", "text-white");
    tabPanes[0].classList.remove("hidden");

    tabButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        const target = btn.getAttribute("data-tab");

        // Deactivate all tabs and panes
        tabButtons.forEach((b) =>
        b.classList.replace("bg-dark-blue", "bg-light-blue") &&
        b.classList.replace("text-white", "text-blue"));

        // Hide all panes
        tabPanes.forEach((pane) => pane.classList.add("hidden"));

        // Activate the clicked tab and corresponding pane
        btn.classList.replace("bg-light-blue", "bg-dark-blue");
        btn.classList.replace("text-blue", "text-white");

        document.getElementById(target).classList.remove("hidden");
      });
    });
  });
</script>

<?php get_footer(); ?>
