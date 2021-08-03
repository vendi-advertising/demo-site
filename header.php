<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php

    wp_head();

    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&family=Work+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php
do_action('vendi/just-after-opening-body-tag/tracking-pixel');
?>

<a href="#main-content" class="visually-hidden focusable skip-link">
    Skip to main content
</a>

<!-- begin header -->
<header id="header">
    <div class="site-header region">
        <div class="header-branding">
            <div class="header-logo" id="logo">
                <a href="<?php esc_attr_e(home_url()); ?>" style="display: none !important;">
                    <img alt="" src="<?php esc_attr_e(get_template_directory_uri()); ?>/images/logo.svg"/>
                </a>
            </div>
            <div class="header-navigation">
                <nav>
                    <div id="navigation">
                        <?php
                        wp_nav_menu(
                            [
                                'theme_location' => 'main_nav',
                                'container' => false,
                                'container_class' => false,
                                'menu_class' => 'main-nav',
                                'fallback_cb' => 'false',
                                'depth' => 3,
                            ]
                        );
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
