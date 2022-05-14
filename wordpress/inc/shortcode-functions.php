<?php

add_shortcode("product_buttons", "products_buttons_shortcode");

function products_buttons_shortcode() {
    $categories = get_categories( [
        'taxonomy'     => 'category',
        'type'         => 'post',
        'child_of'     => get_field("product_category", "options"),
        'parent'       => '',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => 0,
    ] );

    $html = '<div class="home-info_btn-container">';

    if( $categories ){
        foreach( $categories as $cat ){
            $html .= '<a href="#' . $cat->slug . '" class="open-popup-btn home-info_btn">' . $cat->name . '</a>';
        }
    }
    $html .= '</div>';
    return $html;
}