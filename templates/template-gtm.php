<?php
/**
 * Template Name: Google Tag Manager
 * Template for Google Tag Manager service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Analytics & Tracking</span>
        <h1><span class="text-gradient">Google Tag Manager</span></h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Professional GTM implementation for accurate tracking and data-driven marketing decisions.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Track Everything. <span class="text-gradient">Know Everything.</span></h2>
                <p>
                    Good marketing decisions require good data. Google Tag Manager is the foundation of modern marketing measurement - but only when implemented correctly.
                </p>
                <p>
                    I help businesses implement robust tracking solutions that capture the data they need without slowing down their websites. From basic GA4 setup to complex e-commerce tracking, I've got you covered.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Get Proper Tracking
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('bar-chart'); ?>
                    </div>
                    <h3 class="text-center">Tracking Setup</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Google Analytics 4
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Google Ads Conversion
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Meta Pixel
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> E-commerce Tracking
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Custom Event Tracking
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Server-Side Tracking
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2>GTM Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">GTM Setup & Configuration</h4>
                <p class="card-text">
                    Complete Google Tag Manager setup with organized container structure, naming conventions, and documentation.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">GA4 Implementation</h4>
                <p class="card-text">
                    Full Google Analytics 4 setup including enhanced measurement, custom events, and e-commerce tracking.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Conversion Tracking</h4>
                <p class="card-text">
                    Google Ads, Meta, LinkedIn, and other platform conversion tracking for accurate attribution.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">E-commerce Tracking</h4>
                <p class="card-text">
                    Complete dataLayer implementation for product views, add to cart, checkout, and purchase tracking.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Server-Side Tagging</h4>
                <p class="card-text">
                    Server-side GTM implementation for improved data accuracy, privacy compliance, and site performance.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Tracking Audits</h4>
                <p class="card-text">
                    Comprehensive audits of existing tracking setup with recommendations and fixes for data accuracy.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready for Accurate Tracking?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Stop guessing. Start measuring. Get proper tracking that powers data-driven decisions.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Get a Tracking Audit
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
                <a href="tel:<?php echo esc_attr(manoga_get_option('manoga_phone', '+4550587900')); ?>" class="btn btn-secondary">
                    <?php echo manoga_icon('phone'); ?>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
