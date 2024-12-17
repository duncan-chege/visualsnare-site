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
  <div class="flex mb-8 lg:w-2/5 md:w-2/3 w-full justify-between my-0 mx-auto" role="tablist">
    <button class="py-2 px-6 bg-dark-blue text-white rounded-lg" role="tab">Web Development</button>
    <button class="py-2 px-6 bg-light-blue text-blue rounded-lg" role="tab">UI Design</button>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 lg:gap-x-16 gap-y-12">
    <div class="w-full xl:w-[570px]">
      <img class="object-cover h-full w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative text-dark-blue bg-white leading-none left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="w-full xl:w-[570px]">
      <img class="object-cover h-full w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative text-dark-blue bg-white leading-none left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="w-full xl:w-[570px]">
      <img class="object-cover h-full w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative text-dark-blue bg-white leading-none left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
    <div class="h-full w-full xl:w-[570px]">
      <img class="object-cover h-full w-auto rounded-t-xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.png" alt="" />
      <p class="relative text-dark-blue bg-white leading-none left-4 bottom-8 text-lg font-semibold px-4 py-2">Advancing Grassroots Football Through The FFA Website</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
