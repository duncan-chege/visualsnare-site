<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

<div class="bg-fixed bg-[url('../assets/img/single-hero-background.jpg')] bg-cover">
    <div class="px-8 pt-24 lg:pt-28 lg:px-16 bg-white/70 backdrop-blur-md">
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

<div class="xl:w-3/4 px-14 my-16 mx-auto">
    <div class="flex gap-x-10">
        <div class="xl:w-4/5 text-dark-blue">
            <?php the_content(); ?>
        </div>

        <div class="xl:w-1/5 space-y-2">
            <?php if (pods_field_display('client')) : ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Client</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display( 'client' ); ?></p>
                </div>
            <?php endif?>
            <?php if (pods_field_display('studio_partner')) : ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Studio Partner</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display( 'studio_partner' ); ?></p>
                </div>
            <?php endif?>
            <?php if (pods_field_display('role')) : ?>
                <div>
                    <h3 class="font-bold text-dark-blue">Role</h3>
                    <p class="text-sm text-gray-700 font-semibold">
                    <?php echo pods_field_display( 'role' ); ?></p>
                </div>
            <?php endif?>
        </div>
    </div>

    <?php
    //Retrieve the images field using pods
    $images = pods_field('website_images');

    if ($images) : ?>
    <div class="grid grid-cols-2 gap-8 mt-16">
        <?php foreach ($images as $image): ?>
            <div>
                <img src="<?php echo esc_url($image['guid']); ?>" alt="<?php echo esc_attr($image['post_title']);?>" class="w-full h-auto object-cover shadow-md rounded-lg">
            </div>
    
        <?php endforeach?>
    </div>
    <?php endif; ?>
</div>

<?php
} ?>

<?php get_footer(); ?>
