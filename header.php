<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

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
            <nav class="fixed top-0 left-0 right-0 w-full flex flex-row py-4 px-8 md:px-16 justify-between bg-light-grey transition-transform duration-300" id="navbar">
            <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" alt="main website logo"></a>
                <div class="flex flex-row no-wrap basis-1/2 justify-around items-center text-grey text-lg">
                    <a class="menu-item" href="#home">home</a>
                    <a class="menu-item" href="#work">work</a>
                    <a class="menu-item" href="#contacts">contacts</a>
                </div>
            </nav>
        </header>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const navbar = document.getElementById("navbar");
                let lastScrollY = window.scrollY;

                window.addEventListener("scroll", () => {
                    const currentScrollY = window.scrollY;

                    if (currentScrollY > lastScrollY) {
                        // Scrolling down - hide the navbar
                        navbar.style.transform = "translateY(-100%)";
                    } else {
                        // Scrolling up - show the navbar
                        navbar.style.transform = "translateY(0)";
                    }

                    lastScrollY = currentScrollY;
                });

                // Active menu item styling
                const navbarItems = document.querySelectorAll(".menu-item");
                navbarItems.forEach((item) => {
                    item.addEventListener("click", () => {
                        navbarItems.forEach((nav) =>
                            nav.classList.remove("rounded-lg", "px-4", "py-1.5", "bg-gray-300"),
                        );
                        item.classList.add("rounded-lg", "px-4", "py-1.5", "bg-gray-300");
                    });
                });
            });
        </script>