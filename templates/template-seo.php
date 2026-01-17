<?php
/**
 * Template Name: SEO Services
 * Template for SEO service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Digital Marketing</span>
        <h1><span class="text-gradient">SEO</span> Services</h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Data-driven search engine optimization powered by 15+ years of experience and cutting-edge AI tools.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Rank Higher. Get Found. <span class="text-gradient">Convert More.</span></h2>
                <p>
                    Search engine optimization isn't just about rankings - it's about driving qualified traffic that converts. With over 15 years in the digital marketing space, I've seen SEO evolve from keyword stuffing to the sophisticated, AI-powered discipline it is today.
                </p>
                <p>
                    I combine proven SEO fundamentals with modern AI tools to deliver results faster and more efficiently than traditional agencies.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Get a Free SEO Audit
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('search'); ?>
                    </div>
                    <h3 class="text-center">What's Included</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Technical SEO Audit
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Keyword Research & Strategy
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> On-Page Optimization
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Content Strategy
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Link Building
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Monthly Reporting
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEO Services Grid -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2>SEO Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">Technical SEO</h4>
                <p class="card-text">
                    Site speed optimization, crawlability, indexation, schema markup, Core Web Vitals, and technical foundation that search engines love.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">On-Page SEO</h4>
                <p class="card-text">
                    Title tags, meta descriptions, header structure, internal linking, and content optimization for maximum relevance and engagement.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Content Strategy</h4>
                <p class="card-text">
                    AI-assisted content planning, topic clusters, and content creation that ranks and converts. Quality content that serves users first.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Local SEO</h4>
                <p class="card-text">
                    Google Business Profile optimization, local citations, review management, and local content strategy for location-based businesses.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">E-commerce SEO</h4>
                <p class="card-text">
                    Product page optimization, category structure, faceted navigation, and conversion-focused SEO for online stores.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">SEO Audits</h4>
                <p class="card-text">
                    Comprehensive technical and content audits that identify issues and opportunities with prioritized action plans.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready to Improve Your Search Rankings?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Get a free SEO audit and see where your opportunities are.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Get Free Audit
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
