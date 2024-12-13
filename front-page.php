<?php get_header(); ?>

<div class="py-28 px-16 bg-light-grey text-grey">
    <div class="grid grid-cols-2 gap-4">
      <div>
        <h1 class="font-bold text-6xl text-orange"> Levelling up your business digitally </h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/heading-line.svg" alt="" />
      </div>
      <div class="text-lg">
        <p>Visualsnare is a digital design studio based in Nairobi-Kenya that solves business needs with great visual aesthetics, clear communication and effective software</p>
        <p class="mt-4">We specialize in bespoke web development which entails coding, testing applications, user interface design, user research and more </p>
        <div class="flex justify-around mt-8">
          <div class="flex flex-col">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-dev-icon.svg" alt="web development icon">
            <p class="font-bold text-center"> Web Development </p>
          </div>
          <div class="flex flex-col">
            <img class="h-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/ui-design-icon.svg" alt="ui design icon">
            <p class="font-bold text-center"> UI Design </p>
          </div>
        </div>
      </div>    
    </div>
</div>

<div class="my-8 px-16">
  <h2 class="text-4xl mb-8 font-bold">Work</h2>
  <div class="flex w-1/4 mb-8 justify-between" role="tablist">
    <button class="py-2 px-6 bg-neutral-500 text-white rounded-lg" role="tab">Web Development</button>
    <button class="py-2 px-6 bg-neutral-300 rounded-lg" role="tab">UI Design</button>
  </div>
  <div class="grid grid-cols-2 gap-x-16 gap-y-8">
    <div class="w-[570px]">
      <img class="w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative bg-white  left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="w-[570px]">
      <img class="w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative bg-white  left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="w-[570px]">
      <img class="w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative bg-white  left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="w-[570px]">
      <img class="w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative bg-white  left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
