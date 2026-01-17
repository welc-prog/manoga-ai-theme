<?php
/**
 * Template Name: AI Consulting
 * Template for AI Consulting service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">AI Services</span>
        <h1><span class="text-gradient">AI Consulting</span></h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Strategic guidance on implementing AI in your business. Maximize ROI and avoid costly mistakes.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>AI Done Right. <span class="text-gradient">Not Just Hype.</span></h2>
                <p>
                    Everyone's talking about AI, but not everyone knows how to implement it effectively. I help businesses cut through the hype and find practical AI applications that deliver real value.
                </p>
                <p>
                    From identifying opportunities to implementation strategy, I provide hands-on guidance based on real experience building AI-powered solutions - not just theoretical knowledge.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Book a Consultation
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('brain'); ?>
                    </div>
                    <h3 class="text-center">Consulting Areas</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI Strategy & Roadmap
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Process Automation
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI Tool Selection
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Prompt Engineering
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI Integration
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Team Training
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
            <h2>Consulting Services</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">AI Strategy Development</h4>
                <p class="card-text">
                    Comprehensive assessment of AI opportunities in your business with a practical implementation roadmap.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Process Automation</h4>
                <p class="card-text">
                    Identify and implement AI-powered automation for repetitive tasks, saving time and reducing errors.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">AI Tool Evaluation</h4>
                <p class="card-text">
                    Expert guidance on selecting the right AI tools for your specific needs and budget.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Custom AI Solutions</h4>
                <p class="card-text">
                    Design and implementation of custom AI solutions tailored to your unique business requirements.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Prompt Engineering</h4>
                <p class="card-text">
                    Optimization of AI prompts and workflows for better results and consistent outputs.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">AI Governance</h4>
                <p class="card-text">
                    Policies and best practices for responsible AI use, data privacy, and quality control.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready to Leverage AI?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Let's discuss how AI can transform your business operations.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Book Consultation
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
