<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cintivo
 */

?>

    <footer class="main-footer">
        <div class="container">
            <div class="main-footer_container">
                <div class="main-footer_info">
                    <?php if($logo = get_field("footer_logo", "options")): ?>
                        <div class="logo">
                            <a href="<?= home_url("/") ?>">
                                <img src="<?= $logo["url"] ?>" alt="<?= $logo["alt"] ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                    <p>Cintivolab© <?= date("Y") ?></p>
                    <p>
                        <?php if($link = get_field("public_offer", "options")) {
                            echo "<a href='$link'>";
                        } ?>
                        Публичная оферта
                        <?php if($link) {
                            echo "</a>";
                        } ?>
                    </p>
                </div>
                <div class="main-footer_mailing">
                    <div class="main-footer_mailing-container">
                        <span>Подпишись на рассылку</span>
                        <?= do_shortcode('[mailpoet_form id="1"]') ?>
                    </div>
                </div>
                <div class="main-footer_contact">
                    <div class="main-footer_contact-data">
                        <h3>Связаться:</h3>
                        <?php if($tel = get_field("telephone", "options")): ?>
                            <div class="main-footer_contact-phone">
                                <?= $tel ?>
                            </div>
                        <?php endif;
                        if($mail = get_field("e_mail", "options")): ?>
                            <div class="main-footer_contact-mail">
                                <?= $mail ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if($address = get_field("address", "options")): ?>
                        <div class="main-footer_contact-data">
                            <h3>Адрес:</h3>
                            <div class="main-footer_contact-map">
                                <?= $address ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
