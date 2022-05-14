<?php
$home_id = get_field("home_page", "options");
?>

<section class="advantages" <?php if($id = get_field("advantage_id", $home_id)) { echo "id='$id'"; } ?>>
    <div class="container">
        <?php get_template_part("template-parts/heading-template", "", ["heading" => get_field("advantages_heading", $home_id)]) ?>
        <?php if(get_field("advantages", $home_id)): ?>
            <div class="advantages-container">
                <?php while(has_sub_field("advantages", $home_id)): ?>
                    <div class="advantages-card">
                        <?php if($icon = get_sub_field("advantage_icon")): ?>
                            <div class="advantages-icon">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon["alt"] ?>">
                            </div>
                        <?php endif; ?>
                        <?php if($content = get_sub_field("advantage_content")): ?>
                            <div class="advantages-info">
                                <?= $content ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>