<?php
/*
 * Template Name: Главная
 */

get_header();

    if(get_field("show_about") === "yes")
        get_template_part("template-parts/home/about-template");

get_footer();