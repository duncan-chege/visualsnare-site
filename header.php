<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php
        wp_title("");
        echo " | ";
        bloginfo("name");
        ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <nav class="w-full flex flex-row py-4 px-16 justify-between bg-light-grey">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" alt="main website logo">
                <div class="flex flex-row no-wrap basis-1/2 justify-around items-center text-grey text-lg">
                    <a href="">home</a>
                    <a href="">work</a>
                    <a href="">contacts</a>
                </div>
            </nav>
        </header>