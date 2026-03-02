<!-- ========== Service Section Start ========== -->
 <?php 
    $service_title = get_theme_mod('service_section_title', 'My Services');
    $service_years = get_theme_mod('service_years_experience', '25');
    $service_exti = get_theme_mod('service_experience_text', 'Years of Experience');
    $service_desc = get_theme_mod('service_experience_desc', 'I’m a passionate Web Designer and WordPress Developer with a strong eye for clean and user-friendly design.');
    $service_complete_projects = get_theme_mod('service_complete_projects', '300+');
    $service_complete_projects_title = get_theme_mod('service_complete_projects_title', 'Project Complete');
    $service_natural_projects = get_theme_mod('service_natural_projects', '20+');
    $service_natural_projects_title = get_theme_mod('service_natural_projects_title', 'Natural Projects');
    $service_clints = get_theme_mod('service_clints', '100+');
    $service_clints_title = get_theme_mod('service_clints_title', 'Clients Reviews');
    $service_clint_satisfied = get_theme_mod('service_clint_satisfied', '100%');
    $service_clint_satisfied_title = get_theme_mod('service_clint_satisfied_title', 'Clint Satisfied');
 ?>
    <section id="service" class="skill-section flex flex-col gap-12">
        <!-- Section Title -->
        <div class="section-title-wrapper">
            <h2 class="section_title"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?php echo esc_html($service_title); ?><span></span></h2>
        </div>
                <!-- Service Cards -->
        <div class="container flex flex-col md:flex-row items-center  gap-7 md:gap-5  md:flex-wrap flex-nowrap">
            <?php
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );

                $services = new WP_Query($args);

                if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post();
                        $sicon = get_post_meta(get_the_ID(), '_service_icon', true);
                ?>
                    <!-- Service Card  -->
                    <div class="skill-card">
                        <?php if ($sicon) : ?>
                            <i class="<?php echo esc_attr($sicon); ?>"></i>
                        <?php endif; ?>
                        <h3 class="text-xl font-bold text-primary"><?php the_title(); ?></h3>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            
            
        </div>
        <!-- Experience -->
        <div class="container flex flex-col md:flex-row items-center justify-between gap-7">
            <!-- Experience Card left -->
            <div class="experience-card-left w-full md:w-1/2 flex flex-col gap-y-7 bg-gradient py-12 px-20 rounded-xl">
                <h3 class="text-2xl leading-8 md:text-4xl md:leading-12 xl:text-5xl xl:leading-15.75 font-bold text-white flex items-center gap-5 md:gap-7 lg:gap-15">
                    <span class="text-5xl leading-13 md:text-7xl md:leading-20 xl:text-[10.438rem] xl:leading-46 text-primary"><?php echo esc_html($service_years); ?></span> <span><?php echo esc_html($service_exti); ?></span>
                </h3>
                <p class="text-white text-base leading-6.5">
                    <?php echo esc_html($service_desc); ?>
                </p>
            </div>
            <!-- Experience Card right -->
            <div class="experience-card-right grid grid-cols-1 md:grid-cols-2 gap-5 w-full md:w-1/2">
                <div class="bg-dark py-10 rounded-xl items-center justify-center">
                    <h3 class="text-5xl leading-15.75 font-bold text-white text-center"><?php echo esc_html($service_complete_projects); ?></h3>
                    <p class="text-gray-light text-base leading-6.5 text-center">
                        <?php echo esc_html($service_complete_projects_title); ?>
                    </p>
                </div>
                <div class="bg-dark py-10 rounded-xl items-center justify-center">
                    <h3 class="text-5xl leading-15.75 font-bold text-white text-center"><?php echo esc_html($service_natural_projects); ?></h3>
                    <p class="text-gray-light text-base leading-6.5 text-center">
                        <?php echo esc_html($service_natural_projects_title); ?>
                    </p>
                </div>
                <div class="bg-dark py-10 rounded-xl items-center justify-center">
                    <h3 class="text-5xl leading-15.75 font-bold text-white text-center"><?php echo esc_html($service_clints); ?></h3>
                    <p class="text-gray-light text-base leading-6.5 text-center">
                        <?php echo esc_html($service_clints_title); ?>
                    </p>
                </div>
                <div class="bg-dark py-10 rounded-xl items-center justify-center">
                    <h3 class="text-5xl leading-15.75 font-bold text-white text-center"><?php echo esc_html($service_clint_satisfied); ?></h3>
                    <p class="text-gray-light text-base leading-6.5 text-center">
                        <?php echo esc_html($service_clint_satisfied_title); ?>
                    </p>
                </div>
            </div>
        </div>
        
    </section>
    <!-- ========== Service Section End ========== -->