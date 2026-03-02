<!-- ========== Project Section Start ========== -->
    <?php
        $project_title= get_theme_mod('project_section_title', 'My Project'); 
        $tab1_text = get_theme_mod('project_tab1_text', 'All');
        $tab2_text = get_theme_mod('project_tab2_text', 'Web Design');
        $tab3_text = get_theme_mod('project_tab3_text', 'Web Development');
        $tab4_text = get_theme_mod('project_tab4_text', 'WordPress');
        $tab5_text = get_theme_mod('project_tab5_text', 'Elementor');
    ?>
    <section id="project" class=" container ">
        <div class="pt-6.25 lg:pt-12.5">
            <!-- Section Title -->
            <div class="section-title-wrapper">
                <h2 class="section_title"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?php echo esc_html($project_title); ?><span></span></h2>
            </div>

            <!-- ================= Tabs ================= -->
            <div class="w-full flex justify-center mb-14 px-4">
    
                 <!-- Scroll wrapper for mobile -->
                <div class="w-full overflow-x-auto scrollbar-hide">
        
                <div class="relative flex items-center justify-start md:justify-center gap-2 p-2 rounded-xl backdrop-blur-xl bg-white/10 border border-white/20 min-w-max">

                    <!-- Sliding Background -->
                    <div id="tab-indicator"
                        class="absolute top-2 left-2 h-10 bg-primary rounded-xl 
                        transition-all duration-500 ease-out">
                        </div>

                        <button data-tab="all" class="tab-btn relative z-10 px-6 py-2 rounded-full whitespace-nowrap cursor-pointer">
                            <?php echo esc_html($tab1_text); ?>
                        </button>

                        <button data-tab="web-design" class="tab-btn relative z-10 px-6 py-2 rounded-full whitespace-nowrap cursor-pointer">
                            <?php echo esc_html($tab2_text); ?>
                        </button>

                        <button data-tab="web-development" class="tab-btn relative z-10 px-6 py-2 rounded-full whitespace-nowrap cursor-pointer">
                            <?php echo esc_html($tab3_text); ?>
                        </button>

                        <button data-tab="wordpress" class="tab-btn relative z-10 px-6 py-2 rounded-full whitespace-nowrap cursor-pointer">
                            <?php echo esc_html($tab4_text); ?>
                        </button>

                        <button data-tab="elementor" class="tab-btn relative z-10 px-6 py-2 rounded-full whitespace-nowrap cursor-pointer">
                            <?php echo esc_html($tab5_text); ?>
                        </button>

                    </div>

                </div>

            </div>    

                <!-- ================= Projects ================= -->
            <div id="projects" class="grid md:grid-cols-3 gap-8">

            <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();

            $github = get_post_meta(get_the_ID(), '_github_link', true);
            $live = get_post_meta(get_the_ID(), '_live_link', true);
            $tech_stack = get_post_meta(get_the_ID(), '_tech_stack', true);

            $terms = get_the_terms(get_the_ID(), 'project_category');
            $category_class = '';

            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    $category_class .= ' ' . $term->slug;
                }
            }
            ?>

                <div class="project-card<?php echo esc_attr($category_class); ?> group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500">

                    <div class="relative overflow-hidden">

                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>"
                                class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                        <?php endif; ?>

                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center gap-6">

                            <?php if ($github) : ?>
                                <a href="<?php echo esc_url($github); ?>" target="_blank"
                                class="text-white text-2xl hover:text-primary transition">
                                <i class="fab fa-github"></i>
                                </a>
                            <?php endif; ?>

                            <?php if ($live) : ?>
                                <a href="<?php echo esc_url($live); ?>" target="_blank"
                                class="text-white text-2xl hover:text-primary transition">
                                <i class="fas fa-up-right-from-square"></i>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3"><?php the_title(); ?></h3>

                        <div class="flex flex-wrap gap-2">

                            <?php
                            if ($tech_stack) {
                                $techs = explode(',', $tech_stack);
                                foreach ($techs as $tech) {
                                    echo '<span class="px-3 py-1 text-sm rounded-full bg-blue-500/20 text-blue-400">'
                                        . esc_html(trim($tech)) .
                                        '</span>';
                                }
                            }
                            ?>

                        </div>
                    </div>

                </div> 

                <?php endwhile; wp_reset_postdata(); endif; ?>

            </div>
        </div>
    </section>
    <!-- ========== Project Section End ========== -->