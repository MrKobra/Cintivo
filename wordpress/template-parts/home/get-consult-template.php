<?php
$home_id = get_field("home_page", "options");
?>

<section class="contact-form" <?php if($id = get_field("consult_id", $home_id)) { echo "id='$id'"; } ?>>
    <div class="container">
        <div class="contact-form_container">
            <div class="contact-form_info">
                <?php get_template_part("template-parts/heading-template", "", ["heading" => get_field("consult_heading", $home_id)]) ?>
                <?php if($form = get_field("consult_form", $home_id)) {
                    echo do_shortcode($form);
                } ?>
            </div>
            <?php if($consult_img = get_field("consult_img", $home_id)): ?>
                <div class="contact-form_img">
                    <img src="<?= $consult_img["url"] ?>" alt="<?= $consult_img["alt"] ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
