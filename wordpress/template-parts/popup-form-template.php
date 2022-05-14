<div class="popup-form" <?php if(isset($args["id"])) echo 'id="' . $args["id"] . '"'; ?>>
    <?php if(isset($args["heading"])): ?>
        <h3><?= $args["heading"] ?></h3>
    <?php endif;
    if(isset($args["form"])) {
        echo do_shortcode($args["form"]);
    } ?>
</div>