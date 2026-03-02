<!-- ========== Contact Section Start ========== -->
<?php 
    $contact_title = get_theme_mod('contact_section_title', 'Contact Me');
    $contact_small_title = get_theme_mod('contact_small_title', 'Get In Touch');
    $contact_big_title = get_theme_mod('contact_title', 'Md. Shahriar');
    $contact_description = get_theme_mod('contact_section_description', ' WordPress Developer & Web Designer
                        Crafting modern, responsive & powerful websites
                        Let’s build your online presence together');
?>
    <section id="contact" class="contact bg-black">
        <!-- Section Title -->
        <div class="section-title-wrapper">
            <h2 class="section_title"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?php echo esc_html($contact_title); ?><span></span></h2>
        </div>
        <div class="container bg-dark rounded-xl">
            <div class="flex flex-col lg:flex-row items-center justify-between py-25 lg:px-15 gap-y-5">
                <div class="w-full lg:w-[calc(40%-25px)] contact-left">
                    <h3 class="flex gap-2 items-center">
                        <span class="relative flex size-3">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex size-3 rounded-full bg-primary"></span>
                        </span>
                        <span class="text-xl font-secondary font-medium leading-7 text-white"><?php echo esc_html($contact_small_title); ?></span>
                    </h3>
                    <h2 class="text-5xl leading-15 font-primary font-bold ">
                        <?php echo esc_html($contact_big_title); ?>
                    </h2>
                    <p class="text-base ">
                        <?php echo esc_html($contact_description); ?>
                    </p>
                </div>
                <div class="w-full lg:w-[calc(60%-25px)] contact-right">
                    <?php if(isset($_POST['contact_submit'])) : ?>
                        <p style="color:green;">Message Sent Successfully!</p>
                    <?php endif; ?>
                    <form method="POST" action="" class="flex flex-col gap-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <input type="text" name="name" placeholder="Your Name"
                                    class="w-full contact-input py-5 px-3 text-white border-2 border-gray-light rounded-xl focus:outline-none hover:border-primary focus:ring-primary focus:ring-2"
                                    required>
                            </div>

                            <div>
                                <input type="text" name="phone" placeholder="Phone Number"
                                    class="w-full contact-input py-5 px-3 text-white border-2 border-gray-light rounded-xl focus:outline-none hover:border-primary focus:ring-primary focus:ring-2"
                                    required>
                            </div>

                            <div>
                                <input type="email" name="email" placeholder="Your Email"
                                    class="w-full contact-input py-5 px-3 text-white border-2 border-gray-light rounded-xl focus:outline-none hover:border-primary focus:ring-primary focus:ring-2"
                                    required>
                            </div>

                            <div>
                                <input type="text" name="subject" placeholder="Subject"
                                    class="w-full contact-input py-5 px-3 text-white border-2 border-gray-light rounded-xl focus:outline-none hover:border-primary focus:ring-primary focus:ring-2"
                                    required>
                            </div>

                            <div class="md:col-span-2">
                                <textarea name="message" placeholder="Your Message"
                                    class="w-full contact-input py-5 px-3 text-white border-2 border-gray-light rounded-xl focus:outline-none hover:border-primary focus:ring-primary resize-none h-32 focus:ring-2"
                                    required></textarea>
                            </div>
                        </div>

                        <button type="submit" name="contact_submit"
                            class="btn btn-primary w-full py-5 px-3 text-white rounded-full bg-primary cursor-pointer text-base font-medium font-secondary">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Contact Section End ========== -->