<?php
$home_id = get_field("home_page", "options");
?>

<section class="contact" <?php if($id = get_field("contact_id", $home_id)) { echo "id='$id'"; } ?>>
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <?php get_template_part("template-parts/heading-template", "", ["heading" => get_field("contact_heading", $home_id)]) ?>
                <div class="contact-info_container">
                    <?php if($address = get_field("contact_address", $home_id)): ?>
                        <div class="contact-info_block map">
                            <?= $address ?>
                        </div>
                    <?php endif;
                    if($tel = get_field("contact_telephone", $home_id)): ?>
                        <div class="contact-info_block tel">
                            <?= $tel ?>
                        </div>
                    <?php endif;
                    if($mail = get_field("contact_email", $home_id)): ?>
                        <div class="contact-info_block mail">
                            <?= $mail ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($map = get_field("contact_map", $home_id)): ?>
                <div class="contact-map">
                    <div class="contact-map_container">
                        <?= $map ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>