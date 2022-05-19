<?php
$home_id = get_field("home_page", "options");
?>

<section class="about" <?php if($id = get_field("about_id", $home_id)) { echo "id='$id'"; } ?>>
    <div class="container">
        <div class="about-container">
            <?php if($about_img = get_field("about_img")): ?>
                <div class="about-img wow animate__slideInLeft" data-wow-duration="1s" style="background: url(<?= $about_img["url"] ?>) no-repeat center center / cover"></div>
            <?php endif;?>
            <?php if($content = get_field("about_content")): ?>
                <div class="about-info wow animate__slideInRight" data-wow-duration="1s">
                    <?= $content ?>
                    <?php if($signature = get_field("about_signature")): ?>
                        <div class="about-signature">
                            <?= $signature ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
