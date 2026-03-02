<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- ========== Heder Section Start ========== -->
    <?php
        $header_logo_text = get_theme_mod('header_logo_text', 'Md. Shahriar');
        $footer_fb_link = get_theme_mod('footer_facebook_link', '#');
        $footer_twitter_link = get_theme_mod('footer_twitter_link', '#');
        $footer_insta_link = get_theme_mod('footer_instagram_link', '#');
        $footer_linkedin_link = get_theme_mod('footer_linkedin_link', '#');
    ?>
    <header id="header" class="fixed top-0 left-0 w-full z-50 py-6 transition-all duration-300">
        <div class="container mx-auto px-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-primary">
            <i class="fa-solid fa-code"></i> <?php echo esc_html($header_logo_text); ?>
            </a>

            <!-- Desktop Menu -->
            <nav class="main-menu hidden md:block">
            <ul class="flex items-center gap-8 text-white">
                <?php
                    wp_nav_menu([
                    'theme_location' => 'primary_menu',
                    ]);
                ?>
                
                <!-- <li><a href="#home" class="hover:text-primary transition nav_link">Home</a></li>
                <li><a href="#project" class="hover:text-primary transition nav_link">Projects</a></li>
                <li><a href="#skill" class="hover:text-primary transition nav_link">Skills</a></li>
                <li><a href="#service" class="hover:text-primary transition nav_link">Service</a></li>
                <li><a href="#contact" class="hover:text-primary transition nav_link">Contact</a></li> -->
            </ul>
            </nav>

            <!-- Desktop Social -->
            <div class="menu-social hidden md:flex items-center gap-4 text-white">
            <a target="_blank" href="<?php echo esc_url($footer_fb_link); ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <a target="_blank" href="<?php echo esc_url($footer_twitter_link); ?>"><i class="fa-brands fa-twitter"></i></a>
            <a target="_blank" href="<?php echo esc_url($footer_insta_link); ?>"><i class="fa-brands fa-instagram"></i></a>
            <a target="_blank" href="<?php echo esc_url($footer_linkedin_link); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="menu-btn" class="md:hidden flex flex-col justify-between w-6 h-5 z-50 focus:outline-none cursor-pointer">
            <span class="block h-0.5 w-full bg-red-500 transform transition duration-300"></span>
            <span class="block h-0.5 w-full bg-red-500 transform transition duration-300"></span>
            <span class="block h-0.5 w-full bg-red-500 transform transition duration-300"></span>
            </button>
            <!-- Mobile menu -->
             <div id="mobile-menu" class="fixed top-0 right-0 h-full w-72 bg-black text-white transform translate-x-full transition-transform duration-300 z-40 p-8 md:hidden">

                <ul class="mobile-main-menu flex flex-col gap-6 mt-10 text-lg">
                    <?php
                        wp_nav_menu([
                        'theme_location' => 'primary_menu',
                        ]);
                    ?>
                    <!-- <li><a href="#home" class="hover:text-primary transition nav_link">Home</a></li>
                    <li><a href="#project" class="hover:text-primary transition nav_link">Projects</a></li>
                    <li><a href="#skill" class="hover:text-primary transition nav_link">Skills</a></li>
                    <li><a href="#service" class="hover:text-primary transition nav_link">Service</a></li>
                    <li><a href="#contact" class="hover:text-primary transition nav_link">Contact</a></li> -->
                </ul>

                <div class="mobile-menu-social flex gap-4 mt-10 border-t pt-6">
                    <a target="_blank" href="<?php echo esc_url($footer_fb_link); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                    <a target="_blank" href="<?php echo esc_url($footer_twitter_link); ?>"><i class="fa-brands fa-twitter"></i></a>
                    <a target="_blank" href="<?php echo esc_url($footer_insta_link); ?>"><i class="fa-brands fa-instagram"></i></a>
                    <a target="_blank" href="<?php echo esc_url($footer_linkedin_link); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Heder Section End ========== -->