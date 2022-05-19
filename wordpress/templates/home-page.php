<?php
/*
 * Template Name: Главная
 */

get_header();

    if(have_posts()):
        the_post(); ?>
        <section class="home" id="home">
            <div class="container">
                <div class="home-container">
                    <div class="home-info">
                        <?php the_content(); ?>
                        <div class="home-info_request">
                            <a href="#popup-callback" class="open-popup-btn btn">Заказать звонок</a>
                        </div>
                    </div>
                    <?php if(get_field("gallery")): ?>
                        <div class="home-gallery">
                            <?php while(has_sub_field("gallery")):
                                if($img = get_sub_field("img")): ?>
                                    <div class="home-gallery_block">
                                        <img src="<?= $img["url"] ?>" alt="<?= $img["alt"] ?>">
                                    </div>
                                <?php endif;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif;

    if(get_field("show_about") === "yes")
        get_template_part("template-parts/home/about-template");

    if(get_field("show_advantages") === "yes")
        get_template_part("template-parts/home/advantages-template");

    if(get_field("show_contact") === "yes")
        get_template_part("template-parts/home/contact-template");

    if(get_field("show_consult") === "yes")
        get_template_part("template-parts/home/get-consult-template");

get_footer();