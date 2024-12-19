<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

<div class="bg-fixed bg-[url('../assets/img/single-hero-background.jpg')] bg-cover">
    <div data-aos="fade-up" data-aos-duration="2000" class="px-8 pt-24 lg:pt-28 lg:px-16 bg-white/70 backdrop-blur-md">
        <div class="xl:w-1/2 md:w-3/4 my-0 mx-auto">
            <h1 class='font-bold text-4xl lg:text-4xl text-blue text-center'><?php echo get_the_title(); ?></h1>
        </div>
        <div class="xl:w-3/4 mt-8 mx-auto relative">
            <img class="h-[360px] w-full object-cover rounded-t-xl" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <a href="<?php echo pods_field_display(
                "website_link"
            ); ?>" target="_blank" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-dark-blue text-white py-2 px-6 border-[3.5px] border-white rounded-t-xl">Visit Website</a>
        </div>
    </div>
</div>

<div class="xl:w-3/4 md:px-14 px-8 md:my-16 my-10 mx-auto">
    <div data-aos="fade-up" data-aos-duration="2000" class="flex md:flex-nowrap flex-wrap justify-between md:gap-x-8 gap-y-4">
        <div class="md:w-3/4 text-dark-blue">
            <?php the_content(); ?>
        </div>

        <div class="md:w-1/4 lg:space-y-2 space-y-4">
            <?php if (pods_field_display("client")): ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Client</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display("client"); ?></p>
                </div>
            <?php endif; ?>
            <?php if (pods_field_display("studio_partner")): ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Studio Partner</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display("studio_partner"); ?></p>
                </div>
            <?php endif; ?>
            <?php if (pods_field_display("role")): ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Role</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display("role"); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    //Retrieve the images field using pods
    $images = pods_field("website_images");

    if ($images): ?>
    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-8 gap-7 md:mt-16 mt-10">
        <?php foreach ($images as $image): ?>
            <div>
                <img src="<?php echo esc_url(
                    $image["guid"]
                ); ?>" alt="<?php echo esc_attr(
    $image["post_title"]
); ?>" class="w-full h-auto object-cover shadow-md rounded-lg">
            </div>
    
        <?php endforeach; ?>
    </div>
    <?php endif;
    ?>

    <div class="xl:w-3/4">
        <h2 class="text-3xl text-dark-blue font-bold ">Graphic Services </h3>
        <p class="text-dark-blue mt-2 mb-12">The website was not enough. Mr Brian still had more projects in store and we were tasked with
            creating a consistent visual identity for all FFA ventures from partnership announcements, FFA project
            announcements to most notably, The Africa Football Business Show- an online web series that engages football
            stakeholders in matters grassroots and international football </p>
    </div>

        <div class="grid-box space-y-2">
            <div class="grid-sizer md:w-[31%] w-[50%]"></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-1.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-2.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-2.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-3.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-3.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-4.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-4.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-5.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-5.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-6.png" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-6.png" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-7.png" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-7.png" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-8.jpg" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-8.jpg" alt="" class="w-full"></a></div>
            <div class="grid-item md:w-[31%] w-[50%]"><a class="my-link" data-gall="myGallery"
                    href="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-9.png" alt="" class="w-full"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ffa-9.png" alt="" class="w-full"></a></div>
        </div>

        <?php wpb_posts_nav(); ?>

</div>

<?php
} ?>

<script>
    jQuery(document).ready(function ($) {
        var $grid = $(".grid-box").imagesLoaded(function () {
            $grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
                gutter: 10
            });
        });
    });

    new VenoBox({
        selector: ".my-link",
        navigation: true,
        navKeyboard: true,
        navTouch: true,
    });

    AOS.init();
</script>


<?php get_footer(); ?>
