<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

<div class="bg-fixed bg-[url('../assets/img/single-hero-background.jpg')] bg-cover">
    <div class="px-8 pt-24 lg:pt-28 lg:px-16 bg-white/70 backdrop-blur-md">
        <div class="xl:w-1/2 md:w-3/4 my-0 mx-auto">
            <h1 class='font-bold text-4xl lg:text-4xl text-blue text-center'><?php echo get_the_title(); ?></h1>
        </div>
        <div class="xl:w-2/3 mt-8 mx-auto relative">
            <img class="h-[360px] w-full object-cover rounded-t-xl" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            <a class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-dark-blue text-white py-2 px-6 border-[3.5px] border-white rounded-t-xl" href="" target="_blank">Visit Website</a>
        </div>
    </div>
</div>

<?php
} ?>

<?php get_footer(); ?>
