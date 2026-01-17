<?php
/**
 * Template Name: Web Design
 * Template for Web Design service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Digital Services</span>
        <h1><span class="text-gradient">Web Design</span> & Development</h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Modern, conversion-focused websites built with AI-assisted development. Fast, responsive, and optimized for results.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Websites That Work. <span class="text-gradient">Built With AI.</span></h2>
                <p>
                    Your website is often the first impression customers have of your business. It needs to look great, load fast, and convert visitors into customers.
                </p>
                <p>
                    Using vibecoding and AI-assisted development, I build modern websites in a fraction of the traditional time - without sacrificing quality. The result? Better websites, delivered faster, at competitive prices.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Start Your Project
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('layout'); ?>
                    </div>
                    <h3 class="text-center">What You Get</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Custom Design
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Mobile Responsive
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> SEO Optimized
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Fast Loading
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Analytics Setup
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> CMS Training
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
            <h2>Web Design Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">WordPress Development</h4>
                <p class="card-text">
                    Custom WordPress themes and solutions. Easy to manage, scalable, and built to your exact specifications.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">E-commerce</h4>
                <p class="card-text">
                    Online stores that sell. WooCommerce, Shopify, or custom solutions optimized for conversions.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Landing Pages</h4>
                <p class="card-text">
                    High-converting landing pages for campaigns. A/B tested and optimized for maximum ROI.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Web Applications</h4>
                <p class="card-text">
                    Custom web apps built with modern frameworks. Vue, Nuxt, React - whatever fits your needs.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Performance Optimization</h4>
                <p class="card-text">
                    Speed optimization for existing sites. Core Web Vitals, image optimization, and technical improvements.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Maintenance & Support</h4>
                <p class="card-text">
                    Ongoing website maintenance, security updates, backups, and technical support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready for a New Website?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Let's discuss your project and how AI-powered development can deliver results faster.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Get a Quote
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
