<?php
/**
 * Template Name: Meta Advertising
 * Template for Meta/Facebook Advertising service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Digital Marketing</span>
        <h1><span class="text-gradient">Meta</span> Advertising</h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Facebook & Instagram advertising that reaches your ideal customers. Data-driven campaigns with measurable ROI.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Reach Billions. <span class="text-gradient">Convert Customers.</span></h2>
                <p>
                    Meta's advertising platform reaches over 3 billion people monthly. But reach means nothing without relevance. I help businesses cut through the noise and connect with customers who actually want what you're selling.
                </p>
                <p>
                    From audience building to creative strategy, I manage campaigns that deliver measurable business results - not just vanity metrics.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Start Advertising
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('tag'); ?>
                    </div>
                    <h3 class="text-center">Platforms Covered</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Facebook Feed & Stories
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Instagram Feed & Reels
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Messenger Ads
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Audience Network
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> WhatsApp Business
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
            <h2>Meta Advertising Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">Campaign Strategy</h4>
                <p class="card-text">
                    Full-funnel advertising strategy aligned with your business goals. Awareness, consideration, and conversion campaigns that work together.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Audience Building</h4>
                <p class="card-text">
                    Custom audiences, lookalike audiences, interest targeting, and behavioral targeting to reach your ideal customers.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Creative Development</h4>
                <p class="card-text">
                    Scroll-stopping ad creative, video ads, carousel ads, and dynamic creative testing for maximum engagement.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Pixel & Tracking</h4>
                <p class="card-text">
                    Meta Pixel implementation, Conversion API setup, event tracking, and attribution for accurate measurement.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Retargeting</h4>
                <p class="card-text">
                    Website visitors, engaged users, video viewers, and customer list retargeting to maximize conversions.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">E-commerce Ads</h4>
                <p class="card-text">
                    Catalog ads, dynamic product ads, collection ads, and shopping campaigns for online stores.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready to Reach Your Audience?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Let's discuss how Meta advertising can grow your business.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Get Started
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
