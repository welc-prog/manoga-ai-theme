<?php
/**
 * Template Name: Portfolio
 * Template for Portfolio/Work showcase page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Our Work</span>
        <h1><span class="text-gradient">Portfolio</span></h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Real projects built with vibecoding and AI. See what's possible when experience meets innovation.
        </p>
    </div>
</section>

<!-- Featured Projects -->
<section class="section">
    <div class="container">
        <div class="showcase-grid reveal" style="gap: var(--space-lg);">
            <!-- WELC -->
            <div class="showcase-item" style="aspect-ratio: 16/9;">
                <div class="showcase-image" style="background: linear-gradient(135deg, #f7931a 0%, #ffb347 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 2.5rem; margin-bottom: 0.5rem; color: var(--dark);">WeLoveEverythingCrypto</h3>
                        <p style="color: var(--dark); opacity: 0.8; font-size: 1.25rem;">Cryptocurrency News & Analysis Platform</p>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag">Live Project</span>
                    <h3 class="showcase-title">WeLoveEverythingCrypto</h3>
                    <p>A comprehensive cryptocurrency news platform featuring real-time market data, multi-language support (EN, DA, DE), AI-powered content generation, and a modern Nuxt 3 architecture.</p>
                    <div style="margin-top: 1rem;">
                        <strong>Tech Stack:</strong> Nuxt 3, Vue 3, TailwindCSS, Nuxt Content, i18n
                    </div>
                    <a href="https://weloveeverythingcrypto.com" target="_blank" rel="noopener" class="btn btn-primary" style="margin-top: 1rem;">
                        Visit Site <?php echo manoga_icon('external'); ?>
                    </a>
                </div>
            </div>

            <!-- Handball Stats -->
            <div class="showcase-item" style="aspect-ratio: 16/9;">
                <div class="showcase-image" style="background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 2.5rem; margin-bottom: 0.5rem;">Handball Stats</h3>
                        <p style="opacity: 0.8; font-size: 1.25rem;">Sports Analytics Platform</p>
                        <span style="display: inline-block; padding: 8px 20px; background: rgba(255,255,255,0.2); border-radius: var(--radius-full); margin-top: 1rem;">Coming Soon</span>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag">In Development</span>
                    <h3 class="showcase-title">Handball Stats App</h3>
                    <p>Advanced handball statistics and analytics platform featuring real-time match tracking, player performance metrics, team analytics, and AI-powered game predictions.</p>
                    <div style="margin-top: 1rem;">
                        <strong>Tech Stack:</strong> Nuxt 3, Vue 3, Supabase, TailwindCSS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Types -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2>What We Build</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('layout'); ?>
                </div>
                <h4 class="card-title">Web Applications</h4>
                <p class="card-text">
                    Full-featured web apps with modern frameworks. From simple tools to complex platforms.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('code'); ?>
                </div>
                <h4 class="card-title">SaaS Products</h4>
                <p class="card-text">
                    Subscription-based software products with user authentication, billing, and admin dashboards.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('bar-chart'); ?>
                </div>
                <h4 class="card-title">Data Dashboards</h4>
                <p class="card-text">
                    Interactive dashboards and analytics platforms that make data actionable.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('tag'); ?>
                </div>
                <h4 class="card-title">E-commerce</h4>
                <p class="card-text">
                    Online stores optimized for conversion. Custom solutions or platform-based.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('brain'); ?>
                </div>
                <h4 class="card-title">AI Integrations</h4>
                <p class="card-text">
                    Applications that leverage AI APIs for content generation, analysis, and automation.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('target'); ?>
                </div>
                <h4 class="card-title">Marketing Tools</h4>
                <p class="card-text">
                    Custom marketing tools, landing pages, and campaign management systems.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Want to Be Our Next Success Story?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Let's discuss your project and how we can bring it to life.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Start Your Project
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
