<?php
/*
 * Template Name: Главная
 */

get_header();

    if(get_field("show_about") === "yes")
        get_template_part("template-parts/home/about-template");

    if(get_field("show_advantages") === "yes")
        get_template_part("template-parts/home/advantages-template");

get_footer();