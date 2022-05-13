<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cintivo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="main-header">
        <div class="container">
            <div class="main-header_container">
                <?php
                $logo = get_field("header_logo", "options");
                if($logo): ?>
                    <div class="logo">
                        <a href="<?= home_url("/") ?>">
                            <img src="<?= $logo["url"] ?>" alt="<?= $logo["alt"] ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <div class="main-header_contact">
                    <?php if($mail = get_field("e_mail", "options")): ?>
                        <div class="main-header_contact-mail">
                            <?= $mail; ?>
                        </div>
                    <?php endif;
                    if($tel = get_field("telephone", "options")): ?>
                        <div class="main-header_contact-phone">
                            <?= $tel ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="main-header_btn-container">
                    <a href="#" id="main-header_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
