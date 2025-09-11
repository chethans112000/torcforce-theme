<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/torcforce-logo.png" alt="Torcforce Logo" class="logo-image">

                </div>

                <!-- Desktop Navigation -->
                <nav class="nav-desktop">
                    <?php
                    // Use the specific menu ID 7 for desktop navigation
                    wp_nav_menu(array(
                        'menu'           => 7,
                        'menu_class'     => '',
                        'container'      => '',
                        'walker'         => new Torcforce_Walker_Nav_Menu(),
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg class="close-icon hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden" id="mobileMenu">
                <nav class="mobile-nav">
                    <?php
                    // Use the same menu ID 7 for mobile navigation
                    wp_nav_menu(array(
                        'menu'           => 7,
                        'menu_class'     => '',
                        'container'      => '',
                        'walker'         => new Torcforce_Mobile_Walker_Nav_Menu(),
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>