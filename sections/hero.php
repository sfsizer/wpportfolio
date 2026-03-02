<!-- ========== Hero Section Start ========== -->
     <?php 
        $hello_title = get_theme_mod('hero_hello_title', 'HELLO');
        $name_title = get_theme_mod('hero_name_title', "I'm Md.Shahriar a");
        $typed_text = get_theme_mod('hero_typed_text', 'Web Developer, Front-end Developer, Freelancer');
        $hero_description = get_theme_mod('hero_description_text', 'A passionate web developer with expertise in creating stunning and responsive websites. I specialize in front-end development and have a strong command of HTML, CSS, PHP, Wordpress, JavaScript, Elementor and various frameworks.');
        $project_button_text = get_theme_mod('hero_work_button_text', 'View My Work');
        $project_button_link = get_theme_mod('hero_work_button_link', '#project');
        $hero_resume_text = get_theme_mod('hero_resume_button_text', 'Resume');
        $hero_resume_link = get_theme_mod('hero_resume_button_link', '#');
        $hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero-image.png');
        $hero_image_up_text = get_theme_mod('hero_image_up_text', 'Web Designer');
        $hero_image_down_text = get_theme_mod('hero_image_down_text', 'Web Developer');
        
        
     ?>
    <section id="home" class="hero-section  h-auto -py-6.25 lg:-py-12.5">
        <div class="container flex flex-col-reverse md:flex-row gap-y-12.5  justify-between gap-12.5 items-center">
            <div class="hero-content w-full md:w-1/2 flex flex-col gap-6 ">
                <h1 class="font-bold text-primary flex flex-col">
                    <span class="hello"><?php echo esc_html($hello_title); ?></span> 
                    <span class="name"><?php echo esc_html($name_title); ?></span> 
                    <span id="typed"></span>
                </h1>
                <p class="text-gray-light text-lg">
                    <?php echo esc_html($hero_description); ?>
                </p>
                <div class=" flex flex-col lg:flex-row  items-center gap-5 gap-y-5">
                    <a href="<?php echo esc_url($project_button_link); ?>" class="hero-btn">
                        <?php echo esc_html($project_button_text); ?> <span  class="text-2xl"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="<?php echo esc_url($hero_resume_link); ?>" class="hero-btn items-center justify-center">
                        <?php echo esc_html($hero_resume_text); ?> <span  class="text-2xl"><i class="fa-solid fa-download"></i></span>
                    </a>
                </div>
            </div>
            <div class="hero-image w-full  md:w-1/2">
                <div class="hero-img-bg h-full  w-full relative">
                    <img src="<?php if(!empty($hero_image)): ?>
                        <?php echo esc_url($hero_image); ?>
                        <?php endif; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="w-full h-full object-cover">
                    <h3 class="md:flex hidden hero-animate-text"><?php echo esc_html($hero_image_up_text); ?></h3>
                    <h3 class="hero-animate-textd"><?php echo esc_html($hero_image_down_text); ?></h3>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ========== Hero Section End ========== -->