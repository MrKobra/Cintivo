<?php
if(isset($args["product_id"])):
    $product_id = $args["product_id"];
    $category = get_category($product_id);
?>

    <div class="popup-window container" id="<?= $category->slug ?>">
        <div class="popup-window_container">
            <div class="heading">
                <h2>Диагностика с Prognosis Biotech</h2>
            </div>
            <header class="popup-window_header">
                <div class="sub-heading">
                    <h3><?= $category->name ?></h3>
                    <?php if($sub_heading = get_field("cat_subheading", "category_" . $product_id)): ?>
                        <span><?= $sub_heading ?></span>
                    <?php endif; ?>
                </div>
                <div class="request-btn">
                    <a href="#popup-consult" class="open-popup-btn popup-window_btn style_2">Заказать консультацию</a>
                </div>
            </header>
            <?php $posts = get_posts( array(
                'numberposts' => -1,
                'category'    => $product_id,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );
            if($posts): ?>
                <div class="popup-window_product-container">
                    <?php foreach($posts as $post) {
                        setup_postdata($post);
                        get_template_part("template-parts/product-template");
                    } ?>
                </div>
            <?php else: ?>
                <div class="popup-window_product-none">
                    <p>По вашему запросу продуктов не найдено</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif;