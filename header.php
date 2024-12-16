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
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <nav class="fixed top-0 left-0 right-0 w-full flex flex-row py-4 px-8 md:px-16 justify-between bg-light-grey">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" alt="main website logo">
                <div class="flex flex-row no-wrap basis-1/2 justify-around items-center text-grey text-lg">
                    <a href="#home">home</a>
                    <a href="#work">work</a>
                    <a href="#contacts">contacts</a>
                </div>
            </nav>
        </header>