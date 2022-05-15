<div class="popup-window_product">
    <?php if($thumbnail = get_the_post_thumbnail_url()): ?>
        <div class="popup-window_product-img">
            <img src="<?= $thumbnail ?>" alt="Миниатюра">
        </div>
    <?php endif; ?>
    <div class="popup-window_product-info">
        <div class="popup-window_product-header">
            <h4><?php the_title(); ?></h4>
            <?php if($sub_heading = get_field("sub_heading")): ?>
                <span><?= $sub_heading ?></span>
            <?php endif; ?>
        </div>
        <div class="popup-window_product-content">
            <?php the_content(); ?>
        </div>
        <div class="popup-window_product-btn">
            <a href="#popup-product" data-title="<?php the_title(); ?>" class="open-popup-btn popup-window_btn style_1">Заказать набор</a>
            <a href="<?php the_permalink(); ?>" class="popup-window_btn style_2">Подробнее</a>
        </div>
    </div>
</div>