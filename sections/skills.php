<!-- ========== Skills Section Start ========== -->
<?php 
    $skill_title = get_theme_mod('skills_section_title', 'My Skills');
?>
    <section id="skill" class="skills">
        <!-- Section Title -->
        <div class="section-title-wrapper">
            <h2 class="section_title"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?php echo esc_html($skill_title); ?><span></span></h2>
        </div>
        <div class="skills-card container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

                <?php
                $args = array(
                    'post_type' => 'skill',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );

                $skills = new WP_Query($args);

                if ($skills->have_posts()) :
                    while ($skills->have_posts()) : $skills->the_post();
                        $icon = get_post_meta(get_the_ID(), '_skill_icon', true);
                ?>

                    <div class="dev-icon bg-dark py-10 rounded-xl flex flex-col items-center justify-center">
                        <?php if ($icon) : ?>
                            <i class="<?php echo esc_attr($icon); ?> text-4xl mb-3"></i>
                        <?php endif; ?>
                        <span class="dev-text text-lg font-semibold"><?php the_title(); ?></span>
                        <span class="circle1"><i class="fa-regular fa-circle"></i></span>
                        <span class="circle2"><i class="fa-regular fa-circle"></i></span>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </section>
    <!-- ========== Skills Section End ========== -->