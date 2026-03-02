
    <!-- ========== Footer Section Start ========== -->
    <?php 
        $footer_logo_text = get_theme_mod('footer_logo_text', 'Md. Shahriar');
        $footer_email = get_theme_mod('footer_email', 'md.shahriar1999@gmail.com');
        $footer_copyright_text = get_theme_mod('footer_copyright_text', 'Md.Shahriar. All rights reserved.');
        $footer_fb_link = get_theme_mod('footer_facebook_link', '#');
        $footer_twitter_link = get_theme_mod('footer_twitter_link', '#');
        $footer_insta_link = get_theme_mod('footer_instagram_link', '#');
        $footer_linkedin_link = get_theme_mod('footer_linkedin_link', '#');
    ?>
    <footer class="bg-dark py-4">
        <div class="flex flex-col items-center justify-center gap-4">
            <div class="pt-10">
                <div class="logo flex flex-col items-center gap-y-4">
                    <a href="#" class="text-2xl font-bold text-primary">
                        <i class="fa-solid fa-code"></i> <?php echo esc_html($footer_logo_text); ?>
                    </a>
                    <p class="text-white bg-primary px-4 py-2 rounded-full">
                        <?php echo esc_html($footer_email); ?>
                    </p>
                    <div class="footer-menu-social flex items-center gap-4 text-white">
                        <a target="_blank" href="<?php echo esc_url($footer_fb_link); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="<?php echo esc_url($footer_twitter_link); ?>"><i class="fa-brands fa-twitter"></i></a>
                        <a target="_blank" href="<?php echo esc_url($footer_insta_link); ?>"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="<?php echo esc_url($footer_linkedin_link); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>

                </div>
            </div>
            <span class="w-full h-0.5 bg-primary"></span>
            <div class="container text-center text-gray-light">
                &copy; <?php echo date('Y'); ?> <?php echo esc_html($footer_copyright_text); ?>
            </div>
        </div>
    </footer>
    <!-- ========== Footer Section End ========== -->
    

    <!-- ========== JavaScripts Link ========== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php wp_footer(); ?>