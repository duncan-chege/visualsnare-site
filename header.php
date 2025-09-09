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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="mx-2 z-10 bg-white/80 backdrop-blur-md border-light-blue border-2 rounded-2xl lg:w-2/5 md:w-3/4 w-auto justify-between my-0 md:mx-auto fixed top-2 left-0 right-0 flex flex-row py-2 px-8 md:px-16 bg-light-grey transition-transform duration-300" id="navbar">
            <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" class="w-full h-[40px]" alt="main website logo"></a>
            <div class="flex flex-row no-wrap basis-1/2 justify-around items-center space-x-8 text-lg">
                <a class="text-blue menu-item" href="<?php echo home_url('/'); ?>#home">home</a>
                <a class="text-blue menu-item" href="<?php echo home_url('/'); ?>#work">work</a>
                <a class="text-blue menu-item" href="#contacts">contacts</a>
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
                        nav.classList.remove("rounded-lg", "px-4", "py-1.5", "bg-blue", "text-white"),
                    );
                    item.classList.add("rounded-lg", "px-4", "py-1.5", "bg-blue", "text-white");
                });
            });
        });
    </script>