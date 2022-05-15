<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cintivo
 */

get_header();
?>

    <section class="default-content">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if(have_posts()) {
                the_post();
                the_content();
            } ?>
        </div>
    </section>

<?php
get_footer();
