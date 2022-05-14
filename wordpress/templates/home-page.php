<?php
/*
 * Template Name: Главная
 */

get_header();

    if(get_field("show_about") === "yes")
        get_template_part("template-parts/home/about-template");

    if(get_field("show_advantages") === "yes")
        get_template_part("template-parts/home/advantages-template");

    if(get_field("show_contact") === "yes")
        get_template_part("template-parts/home/contact-template");

    if(get_field("show_consult") === "yes")
        get_template_part("template-parts/home/get-consult-template");

get_footer();