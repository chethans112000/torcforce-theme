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
                    <div class="logo-text">
                        Torcforce
                        <!-- <span class="logo-subtitle">TOOL GROUP</span> -->
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="nav-desktop">
                    <a href="#hero" class="nav-link">
                        Home
                    </a>
                    <a href="#about-us" class="nav-link">About Us</a>
                    <div class="nav-dropdown">
                        <a href="#products" class="nav-link">
                            Products
                            <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-column">
                                <h4 class="dropdown-title">Hydraulic Tools</h4>
                                <a href="#" class="dropdown-link">Torque Wrenches</a>
                                <a href="#" class="dropdown-link">Pump Systems</a>
                                <a href="#" class="dropdown-link">Cylinders</a>
                                <a href="#" class="dropdown-link">Accessories</a>
                            </div>
                            <div class="dropdown-column">
                                <h4 class="dropdown-title">Bolting Solutions</h4>
                                <a href="#" class="dropdown-link">Tensioning Tools</a>
                                <a href="#" class="dropdown-link">Flange Tools</a>
                                <a href="#" class="dropdown-link">Nut Runners</a>
                                <a href="#" class="dropdown-link">Custom Solutions</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-dropdown">
                        <a href="#industries" class="nav-link">
                            Industries
                            <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-column">
                                <h4 class="dropdown-title">Energy</h4>
                                <a href="#" class="dropdown-link">Oil & Gas</a>
                                <a href="#" class="dropdown-link">Renewable Energy</a>
                                <a href="#" class="dropdown-link">Nuclear Power</a>
                                <a href="#" class="dropdown-link">Petrochemical</a>
                            </div>
                            <div class="dropdown-column">
                                <h4 class="dropdown-title">Infrastructure</h4>
                                <a href="#" class="dropdown-link">Construction</a>
                                <a href="#" class="dropdown-link">Mining</a>
                                <a href="#" class="dropdown-link">Transportation</a>
                                <a href="#" class="dropdown-link">Manufacturing</a>
                            </div>
                        </div>
                    </div>
                    <a href="#gallery" class="nav-link">Gallery</a>
                    <a href="#contact" class="nav-link">
                        Contact
                    </a>
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
                    <a href="#hero" class="mobile-nav-link">Home</a>
                    <a href="#about-us" class="mobile-nav-link">About Us</a>
                    <div class="mobile-dropdown">
                        <a href="#products" class="mobile-nav-link mobile-dropdown-toggle">
                            Products
                            <svg class="mobile-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </a>
                        <div class="mobile-dropdown-content">
                            <div class="mobile-dropdown-section">
                                <h5>Hydraulic Tools</h5>
                                <a href="#" class="mobile-sub-link">Torque Wrenches</a>
                                <a href="#" class="mobile-sub-link">Pump Systems</a>
                                <a href="#" class="mobile-sub-link">Cylinders</a>
                                <a href="#" class="mobile-sub-link">Accessories</a>
                            </div>
                            <div class="mobile-dropdown-section">
                                <h5>Bolting Solutions</h5>
                                <a href="#" class="mobile-sub-link">Tensioning Tools</a>
                                <a href="#" class="mobile-sub-link">Flange Tools</a>
                                <a href="#" class="mobile-sub-link">Nut Runners</a>
                                <a href="#" class="mobile-sub-link">Custom Solutions</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <a href="#industries" class="mobile-nav-link mobile-dropdown-toggle">
                            Industries
                            <svg class="mobile-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </a>
                        <div class="mobile-dropdown-content">
                            <div class="mobile-dropdown-section">
                                <h5>Energy</h5>
                                <a href="#" class="mobile-sub-link">Oil & Gas</a>
                                <a href="#" class="mobile-sub-link">Renewable Energy</a>
                                <a href="#" class="mobile-sub-link">Nuclear Power</a>
                                <a href="#" class="mobile-sub-link">Petrochemical</a>
                            </div>
                            <div class="mobile-dropdown-section">
                                <h5>Infrastructure</h5>
                                <a href="#" class="mobile-sub-link">Construction</a>
                                <a href="#" class="mobile-sub-link">Mining</a>
                                <a href="#" class="mobile-sub-link">Transportation</a>
                                <a href="#" class="mobile-sub-link">Manufacturing</a>
                            </div>
                        </div>
                    </div>
                    <a href="#gallery" class="mobile-nav-link">Gallery</a>
                    <a href="#contact" class="mobile-nav-link">Contact</a>
                </nav>
            </div>
        </div>
    </header>