<?php

get_header(); ?>

<div class="front-page-hero"> </div>

<?php
while (have_posts()) {
    the_post(); ?>
<h2 class="bg-blue-400"> <?php the_title(); ?></h2>
<?php the_content(); ?>

<?php
}

get_footer();

?>
