<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package papapups
 */

global $papapups;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1796858630627877&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-4">
                <a href="/" class="logo">
                    <img src="<?= esc_url($papapups['home_logo']['url']);?>" alt="<?php bloginfo( 'name' ); ?>">
                </a>
            </div>
            <div class="col-sm-3 header-item-1">
                <h3 class="header-title"><?= esc_attr($papapups['first_title']);?></h3>
                <p class="subtitle"><?= esc_attr($papapups['first_text']);?></p>
            </div>
            <div class="col-sm-3 header-item-2">
                <h3 class="header-title"><?= esc_attr($papapups['second_title']);?></h3>
                <p class="subtitle"><?= esc_attr($papapups['second_text']);?></p>
            </div>
            <div class="col-sm-4 col-8">
                <h3 class="header-title header-item-contacts"><?= esc_attr($papapups['phone_title']);?></h3>
                <div class="contacts">
                    <?= $papapups['phone'];?>
                    <p class="schedule"><?= esc_attr($papapups['work_days']);?></p>
                </div>
                <div class="network">
                    <a class="instagram" target="_blank" href="<?= esc_url($papapups['facebook']);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="facebook" target="_blank" href="<?= esc_url($papapups['instagram']);?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

