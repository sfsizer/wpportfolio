<?php
function wpportfolio_theme_files() {
    // google fonts
    wp_enqueue_style('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap', false);
    //Main Css
    wp_enqueue_style('style-css', get_stylesheet_uri());
    // Tailwind CSS
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/output.css');
    //Custome CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');

    // Font Awesome
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');
    //Typed-Js
    wp_enqueue_script('typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js', array(), '2.0.10', true);
    // Main JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('typed-js'), '1.9.0', true);
}
add_action('wp_enqueue_scripts', 'wpportfolio_theme_files');

//Theme support
function wpportfolio_theme_setup(){
    // Add Theme Logo Support
    // add_theme_support('custom-logo', array(
    //     'height'      => 30,
    //     'width'       => 80
    // ));
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'wpportfolio'),
    ));
}

add_action('after_setup_theme', 'wpportfolio_theme_setup');

function wpportfolio_customize_register($wp_customize) {
    // Add a section for the header
    $wp_customize->add_section('header_section', array(
        'title' => __('Header Section', 'wpportfolio'),
        'priority' => 20,
    ));
    // add a setting for header logo text
    $wp_customize->add_setting('header_logo_text',[
        'default' => 'Md. Shahriar',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    // Add a control for header logo text
    $wp_customize->add_control('header_logo_text_control',[
        'label' => __('Header Logo Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'header_section',
        'settings' => 'header_logo_text',
    ]);
    //Footer Facebook Link
    $wp_customize->add_setting('footer_facebook_link',[
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_facebook_link_control',[
        'label' => __('Facebook Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'footer_facebook_link',
        'priority' => 25,
    ]);
    //Footer Twitter Link
    $wp_customize->add_setting('footer_twitter_link',[
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_twitter_link_control',[
        'label' => __('Twitter Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'footer_twitter_link',
        'priority' => 30,
    ]);
    //Footer Instagram Link
    $wp_customize->add_setting('footer_instagram_link',[
        'default' => '#',  
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_instagram_link_control',[
        'label' => __('Instagram Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'footer_instagram_link',
        'priority' => 35,
    ]);
    //Footer LinkedIn Link
    $wp_customize->add_setting('footer_linkedin_link',[
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_linkedin_link_control',[
        'label' => __('LinkedIn Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'footer_linkedin_link',
        'priority' => 40,
    ]);
    // Add a section for the hero section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'wpportfolio'),
        'priority' => 30,
    ));
    // Add a setting for the hero Hello title
    $wp_customize->add_setting('hero_hello_title',[
        'default' => 'HELLO',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_hello_title_control',[
        'label' => __('Hero Hello Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_hello_title',
        'priority' => 10,
    ]);
    // Add a setting for the hero Name title
    $wp_customize->add_setting('hero_name_title',[
        'default' => "I'm Md.Shahriar a",
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_name_title_control',[
        'label' => __('Hero Name Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_name_title',
        'priority' => 10,
    ]);
    // Add a setting for the hero Typed JS text
    $wp_customize->add_setting('hero_typed_text',[
        'default' => 'Web Developer, Front-end Developer, Freelancer',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_typed_text_control',[
        'label' => __('Hero Typed JS Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_typed_text',
        'priority' => 10,
    ]);
    //Hero Description Text
    $wp_customize->add_setting('hero_description_text',[
        'default' => 'A passionate web developer with expertise in creating stunning and responsive websites. I specialize in front-end development and have a strong command of HTML, CSS, PHP, Wordpress, JavaScript, Elementor and various frameworks.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('hero_description_text_control',[
        'label' => __('Hero Description Text', 'wpportfolio'),
        'type' => 'textarea',
        'section' => 'hero_section',
        'settings' => 'hero_description_text',
        'priority' => 15,
    ]);
    //Hero Work Button text
    $wp_customize->add_setting('hero_work_button_text',[
        'default' => 'View My Work',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_work_button_text',[
        'label' => __('Hero Work Button Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_work_button_text',
        'priority' => 20,
    ]);
    //Hero Work Button Link
    $wp_customize->add_setting('hero_work_button_link',[
        'default' => '#project',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('hero_work_button_link',[
        'label' => __('Hero Work Button Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'hero_section',
        'settings' => 'hero_work_button_link',
        'priority' => 20,
    ]);
    //Hero Resume Button text
    $wp_customize->add_setting('hero_resume_button_text',[
        'default' => 'Resume',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_resume_button_text',[
        'label' => __('Hero Resume Button Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_resume_button_text',
        'priority' => 25,
    ]);
    //Hero Resume Button Link
    $wp_customize->add_setting('hero_resume_button_link',[
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('hero_resume_button_link',[
        'label' => __('Hero Resume Button Link', 'wpportfolio'),
        'type' => 'url',
        'section' => 'hero_section',
        'settings' => 'hero_resume_button_link',
        'priority' => 25,
    ]);
    // Hero Image
    $wp_customize->add_setting('hero_image', [
        'default' => get_template_directory_uri() . '/assets/images/hero-image.png',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'wpportfolio'),
        'section' => 'hero_section',
        'settings' => 'hero_image',
        'priority' => 30,
    )));
    //Hero Image Up text
    $wp_customize->add_setting('hero_image_up_text',[
        'default' => 'Web Designer',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_image_up_text',[
        'label' => __('Hero Image Up Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_image_up_text',
        'priority' => 35,
    ]);
    //Hero Image Down text
    $wp_customize->add_setting('hero_image_down_text',[
        'default' => 'Web Developer',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_image_down_text',[
        'label' => __('Hero Image Down Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'hero_section',
        'settings' => 'hero_image_down_text',
        'priority' => 40,
    ]);
    // Project Section
    // Add a section for the project section
    $wp_customize->add_section('project_section', array(
        'title' => __('Project Section', 'wpportfolio'),
        'priority' => 40,
    ));
    // Add a setting for the project section title
    $wp_customize->add_setting('project_section_title',[
        'default' => 'My Projects',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_section_title_control',[
        'label' => __('Project Section Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_section_title',
        'priority' => 10,
    ]);
    // Project Tabs Button Text
    // Tabs Button 1
    $wp_customize->add_setting('project_tab1_text',[
        'default' => 'All',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_tab1_text_control',[
        'label' => __('Project Tab 1 Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_tab1_text',
        'priority' => 20,
    ]);
    // Tabs Button 2
    $wp_customize->add_setting('project_tab2_text',[
        'default' => 'Web Design',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_tab2_text_control',[                
        'label' => __('Project Tab 2 Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_tab2_text',
        'priority' => 30,
    ]);
    // Tabs Button 3
    $wp_customize->add_setting('project_tab3_text',[
        'default' => 'Web Dev',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_tab3_text_control',[
        'label' => __('Project Tab 3 Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_tab3_text',
        'priority' => 40,
    ]);
    // Tabs Button 4
    $wp_customize->add_setting('project_tab4_text',[
        'default' => 'Wordpress',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_tab4_text_control',[
        'label' => __('Project Tab 4 Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_tab4_text',
        'priority' => 50,
    ]);
    // Tabs Button 5
    $wp_customize->add_setting('project_tab5_text',[
        'default' => 'Elementor',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('project_tab5_text_control',[        
        'label' => __('Project Tab 5 Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'project_section',
        'settings' => 'project_tab5_text',
        'priority' => 60,
    ]);
    // Add a Section for the Skills section 
    $wp_customize->add_section('skills_section', array(
        'title' => __('Skills Section', 'wpportfolio'),
        'priority' => 65,
    ));
    // Add a setting for the skills section title
    $wp_customize->add_setting('skills_section_title',[
        'default' => 'My Skills',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('skills_section_title_control',[
        'label' => __('Skills Section Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'skills_section',
        'settings' => 'skills_section_title',
        'priority' => 10,
    ]);
    //Add a Section for the Service section
    $wp_customize->add_section('service_section', array(
        'title' => __('Service Section', 'wpportfolio'),
        'priority' => 70,
    ));
    // Add a setting for the service section title
    $wp_customize->add_setting('service_section_title',[
        'default' => 'My Services',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_section_title_control',[
        'label' => __('Service Section Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_section_title',
        'priority' => 10,
    ]);
    // Service Experience card number of year
    $wp_customize->add_setting('service_experience_years',[
        'default' => '25',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_experience_years_control',[
        'label' => __('Service Experience Years', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_experience_years',
        'priority' => 20,
    ]);
    // Service Experience card title
    $wp_customize->add_setting('service_experience_title',[
        'default' => 'Years of Experience',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_experience_title_control',[
        'label' => __('Service Experience Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_experience_title',
        'priority' => 30,
    ]);
    // Service Experience card description
    $wp_customize->add_setting('service_experience_description',[
        'default' => 'I’m a passionate Web Designer and WordPress Developer with a strong eye for clean and user-friendly design.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('service_experience_description_control',[
        'label' => __('Service Experience Description', 'wpportfolio'),
        'type' => 'textarea',
        'section' => 'service_section',
        'settings' => 'service_experience_description',
        'priority' => 40,
    ]);
    //Service complete project number
    $wp_customize->add_setting('service_complete_projects',[
        'default' => '300+',
        'sanitize_callback' => 'sanitize_text_field',
    ]); 
    $wp_customize->add_control('service_complete_projects_control',[
        'label' => __('Service Complete Projects', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_complete_projects',
        'priority' => 50,
    ]);
    //Service complete project title
    $wp_customize->add_setting('service_complete_projects_title',[
        'default' => 'Project Complete',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_complete_projects_title_control',[
        'label' => __('Service Complete Projects Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_complete_projects_title',
        'priority' => 60,
    ]);
    //Service natural complete project number
    $wp_customize->add_setting('service_natural_complete_projects',[
        'default' => '20+',
        'sanitize_callback' => 'sanitize_text_field',
    ]); 
    $wp_customize->add_control('service_natural_complete_projects_control',[
        'label' => __('Service Natural Complete Projects', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_natural_complete_projects',
        'priority' => 70,
    ]);
    //Service natural complete project title
    $wp_customize->add_setting('service_natural_complete_projects_title',[
        'default' => 'Natural Projects',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_natural_complete_projects_title_control',[
        'label' => __('Service Natural Complete Projects Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_natural_complete_projects_title',
        'priority' => 80,
    ]);
    //Service review number
    $wp_customize->add_setting('service_clint_review',[
        'default' => '150+',
        'sanitize_callback' => 'sanitize_text_field',
    ]); 
    $wp_customize->add_control('service_clint_review_control',[
        'label' => __('Service Clint Review', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_clint_review',
        'priority' => 90,
    ]);
    //Service review title
    $wp_customize->add_setting('service_clint_title',[
        'default' => 'Client Reviews',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_clint_title_control',[
        'label' => __('Service Clint Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_clint_title',
        'priority' => 100,
    ]);
    //Service Clint Satisfy number
    $wp_customize->add_setting('service_clint_satisfy',[
        'default' => '150+',
        'sanitize_callback' => 'sanitize_text_field',
    ]); 
    $wp_customize->add_control('service_clint_satisfy_control',[
        'label' => __('Service Clint Satisfy', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_clint_satisfy',
        'priority' => 110,
    ]);
    //Service Satisfy title
    $wp_customize->add_setting('service_clint_satisfy_title',[
        'default' => 'Satisfied Client',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('service_clint_satisfy_title_control',[
        'label' => __('Service Clint Satisfy Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'service_section',
        'settings' => 'service_clint_satisfy_title',
        'priority' => 120,
    ]);
    //Contact Section
    // Add a section for the contact section
    $wp_customize->add_section('contact_section', array(
        'title' => __('Contact Section', 'wpportfolio'),
        'priority' => 75,
    ));
    // Contact Section Title    
    $wp_customize->add_setting('contact_section_title',[
        'default' => 'Contact Me',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('contact_section_title_control',[
        'label' => __('Contact Section Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'contact_section',
        'settings' => 'contact_section_title',
        'priority' => 10,
    ]);
    // Contact Section Small Title
    $wp_customize->add_setting('contact_section_small_title',[
        'default' => 'Get In Touch',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('contact_section_small_title_control',[
        'label' => __('Contact Small Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'contact_section',
        'settings' => 'contact_section_small_title',
        'priority' => 10,
    ]);
    // Contact Section Title
    $wp_customize->add_setting('contact_title',[
        'default' => 'Md. Shahriar',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('contact_title_control',[
        'label' => __('Contact Title', 'wpportfolio'),
        'type' => 'text',
        'section' => 'contact_section',
        'settings' => 'contact_title',
        'priority' => 20,
    ]);
    // Contact Section Description
    $wp_customize->add_setting('contact_section_description',[
        'default' => 'WordPress Developer & Web Designer Crafting modern, responsive & powerful websites Let’s build your online presence together',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('contact_section_description_control',[
        'label' => __('Contact Description', 'wpportfolio'),
        'type' => 'textarea',
        'section' => 'contact_section',
        'settings' => 'contact_section_description',
        'priority' => 30,
    ]);
    //Footer Section
    // Add a section for the footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer Section', 'wpportfolio'),
        'priority' => 80,
    ));
    // Footer logo text
    $wp_customize->add_setting('footer_logo_text',[
        'default' => 'Md. Shahriar',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_logo_text_control',[
        'label' => __('Footer Logo Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'footer_section',
        'settings' => 'footer_logo_text',
        'priority' => 10,
    ]);
    // Footer email
    $wp_customize->add_setting('footer_email',[
        'default' => 'md.shariar1999@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('footer_email_control',[
        'label' => __('Footer Email', 'wpportfolio'),
        'type' => 'email',
        'section' => 'footer_section',
        'settings' => 'footer_email',
        'priority' => 20,
    ]);
    //Footer Copyright Text
    $wp_customize->add_setting('footer_copyright_text',[
        'default' => 'Md.Shahriar. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_copyright_text_control',[
        'label' => __('Footer Copyright Text', 'wpportfolio'),
        'type' => 'text',
        'section' => 'footer_section',
        'settings' => 'footer_copyright_text',
        'priority' => 30,
    ]);

}
add_action('customize_register', 'wpportfolio_customize_register');

//Custome Post Type For Projects
function wpportfolio_register_projects_cpt() {

    register_post_type('project', array(

        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),

        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'show_in_rest' => true,

    ));
}
add_action('init', 'wpportfolio_register_projects_cpt');

add_theme_support('post-thumbnails');
// Project Category Taxonomy
function wpportfolio_project_taxonomy() {

    register_taxonomy('project_category', 'project', array(
        'label' => 'Project Categories',
        'rewrite' => array('slug' => 'project-category'),
        'hierarchical' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'wpportfolio_project_taxonomy');
// Project Metabox
function wpportfolio_project_meta_boxes() {

    add_meta_box(
        'project_links',
        'Project Extra Info',
        'wpportfolio_project_links_callback',
        'project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'wpportfolio_project_meta_boxes');


function wpportfolio_project_links_callback($post) {

    $github = get_post_meta($post->ID, '_github_link', true);
    $live = get_post_meta($post->ID, '_live_link', true);
    $tech = get_post_meta($post->ID, '_tech_stack', true);

    ?>
    <p>
        <label>GitHub Link</label>
        <input type="text" name="github_link" value="<?php echo esc_attr($github); ?>" style="width:100%;">
    </p>

    <p>
        <label>Live Link</label>
        <input type="text" name="live_link" value="<?php echo esc_attr($live); ?>" style="width:100%;">
    </p>

    <p>
        <label>Tech Stack (comma separated)</label>
        <input type="text" name="tech_stack" value="<?php echo esc_attr($tech); ?>" style="width:100%;">
        <small>Example: HTML, CSS, JS, PHP</small>
    </p>
    <?php
}


function wpportfolio_save_project_meta($post_id) {

    if (isset($_POST['github_link'])) {
        update_post_meta($post_id, '_github_link', sanitize_text_field($_POST['github_link']));
    }

    if (isset($_POST['live_link'])) {
        update_post_meta($post_id, '_live_link', sanitize_text_field($_POST['live_link']));
    }

    if (isset($_POST['tech_stack'])) {
        update_post_meta($post_id, '_tech_stack', sanitize_text_field($_POST['tech_stack']));
    }
}
add_action('save_post', 'wpportfolio_save_project_meta');

//Project Post Type End

//Custome Post type for skills
function wpportfolio_register_skills_cpt() {

    register_post_type('skill', array(
        'labels' => array(
            'name' => 'Skills',
            'singular_name' => 'Skill',
            'add_new' => 'Add Skill',
            'add_new_item' => 'Add New Skill',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title'),
        'has_archive' => false,
        'show_in_rest' => true,
    ));

}
add_action('init', 'wpportfolio_register_skills_cpt');
// Meta Box for Skills
function wpportfolio_skill_meta_box() {

    add_meta_box(
        'skill_icon_meta',
        'Skill Icon',
        'wpportfolio_skill_icon_callback',
        'skill',
        'normal',
        'high'
    );

}
add_action('add_meta_boxes', 'wpportfolio_skill_meta_box');


function wpportfolio_skill_icon_callback($post) {
    $icon = get_post_meta($post->ID, '_skill_icon', true); 
    ?>
    <p>
        <label>Font Awesome Icon Class</label>
        <input type="text" name="skill_icon" value="<?php echo esc_attr($icon); ?>" style="width:100%;">
        <small>Example: fa-brands fa-html5</small>
    </p>
    <?php
}

function wpportfolio_save_skill_meta($post_id) {
    if (isset($_POST['skill_icon'])) {
        update_post_meta($post_id, '_skill_icon', sanitize_text_field($_POST['skill_icon']));
    }
}
add_action('save_post', 'wpportfolio_save_skill_meta');

//Custome post type for services
function wpportfolio_register_services_cpt() {

    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add Service',
            'add_new_item' => 'Add New Service',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title'),
        'has_archive' => false,
        'show_in_rest' => true,
    ));

}
add_action('init', 'wpportfolio_register_services_cpt');
// Meta Box for Services
function wpportfolio_service_meta_box() {

    add_meta_box(
        'service_icon_meta',
        'Service Icon',
        'wpportfolio_service_icon_callback',
        'service',
        'normal',
        'high'
    );

}
add_action('add_meta_boxes', 'wpportfolio_service_meta_box');


function wpportfolio_service_icon_callback($post) {
    $sicon = get_post_meta($post->ID, '_service_icon', true); 
    ?>
    <p>
        <label>Font Awesome Icon Class</label>
        <input type="text" name="service_icon" value="<?php echo esc_attr($sicon); ?>" style="width:100%;">
        <small>Example: fa-solid fa-bezier-curve</small>
    </p>
    <?php
}

function wpportfolio_save_service_meta($post_id) {
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
    }
}
add_action('save_post', 'wpportfolio_save_service_meta');

// Contact Form Dev
function wpportfolio_contact_form_handler() {

    if (isset($_POST['contact_submit'])) {

        $name    = sanitize_text_field($_POST['name']);
        $phone   = sanitize_text_field($_POST['phone']);
        $email   = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = "yourgmail@gmail.com"; // তোমার Gmail দাও এখানে

        $email_subject = "New Message: " . $subject;

        $body  = "Name: $name\n";
        $body .= "Phone: $phone\n";
        $body .= "Email: $email\n\n";
        $body .= "Message:\n$message";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: '.$name.' <'.$email.'>',
        );

        wp_mail($to, $email_subject, $body, $headers);

    }
}
add_action('init', 'wpportfolio_contact_form_handler');