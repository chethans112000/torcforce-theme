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
                    <a href="#" class="nav-link">
                        Company
                        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </a>
                    <a href="#" class="nav-link">Brands</a>
                    <a href="#" class="nav-link">
                        Solutions
                        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </a>
                    <a href="#" class="nav-link">Investors</a>
                    <a href="#" class="nav-link">
                        Careers
                        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </a>
                    <a href="#" class="nav-link">
                        Media
                        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </a>
                    <a href="#about-us" class="nav-link" id="aboutUsLink">About Us</a>
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
                    <a href="#" class="mobile-nav-link">Company</a>
                    <a href="#" class="mobile-nav-link">Brands</a>
                    <a href="#" class="mobile-nav-link">Solutions</a>
                    <a href="#" class="mobile-nav-link">Investors</a>
                    <a href="#" class="mobile-nav-link">Careers</a>
                    <a href="#" class="mobile-nav-link">Media</a>
                    <a href="#about-us" class="mobile-nav-link" id="aboutUsLinkMobile">About Us</a>
    <!-- Smooth scroll script for About Us link -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function smoothScrollToAboutUs(e, selector) {
            const aboutSection = document.querySelector(selector);
            if (aboutSection) {
                e.preventDefault();
                aboutSection.scrollIntoView({ behavior: 'smooth' });
                // Optionally close mobile menu
                const mobileMenu = document.getElementById('mobileMenu');
                if (mobileMenu && selector === '#about-us') {
                    mobileMenu.classList.add('hidden');
                }
            }
        }
        var aboutUsLink = document.getElementById('aboutUsLink');
        if (aboutUsLink) {
            aboutUsLink.addEventListener('click', function(e) {
                smoothScrollToAboutUs(e, '#about-us');
            });
        }
        var aboutUsLinkMobile = document.getElementById('aboutUsLinkMobile');
        if (aboutUsLinkMobile) {
            aboutUsLinkMobile.addEventListener('click', function(e) {
                smoothScrollToAboutUs(e, '#about-us');
            });
        }
    });
    </script>
                </nav>
            </div>
        </div>
    </header>