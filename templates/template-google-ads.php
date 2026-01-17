<?php
/**
 * Template Name: Google Ads Services
 * Template for Google Ads service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Digital Marketing</span>
        <h1><span class="text-gradient">Google Ads</span> Management</h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Performance-driven PPC campaigns that maximize ROI. Expert Google Ads management backed by 15+ years of experience.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Stop Wasting Ad Spend. <span class="text-gradient">Start Converting.</span></h2>
                <p>
                    Google Ads can be incredibly powerful - or an expensive black hole. The difference is expertise. With 15+ years managing PPC campaigns across industries, I know how to build campaigns that deliver real business results.
                </p>
                <p>
                    I leverage AI-powered tools for smart bidding optimization, audience insights, and continuous performance improvement while maintaining the strategic oversight that automated solutions can't provide.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Get a Free PPC Audit
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('target'); ?>
                    </div>
                    <h3 class="text-center">Campaign Types</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Search Campaigns
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Performance Max
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Display Campaigns
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Shopping Campaigns
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> YouTube Ads
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Remarketing
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
            <h2>Google Ads Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">Campaign Setup</h4>
                <p class="card-text">
                    Complete account structure, campaign setup, ad group organization, and conversion tracking implementation from scratch.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Keyword Strategy</h4>
                <p class="card-text">
                    In-depth keyword research, match type optimization, negative keyword management, and ongoing search term analysis.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Ad Copy & Creative</h4>
                <p class="card-text">
                    Compelling ad copy, responsive search ads, A/B testing, and continuous creative optimization for better CTR and conversions.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Bid Management</h4>
                <p class="card-text">
                    Smart bidding strategies, manual bid optimization, ROAS targeting, and budget allocation for maximum efficiency.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Landing Page Optimization</h4>
                <p class="card-text">
                    Landing page analysis, CRO recommendations, Quality Score improvement, and conversion rate optimization.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Reporting & Analysis</h4>
                <p class="card-text">
                    Custom dashboards, performance reports, attribution analysis, and actionable insights for continuous improvement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready to Maximize Your Ad Spend?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Get a free audit of your Google Ads account and discover untapped opportunities.
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
