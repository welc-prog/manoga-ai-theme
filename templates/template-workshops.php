<?php
/**
 * Template Name: AI Workshops
 * Template for AI Workshops service page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">AI Services</span>
        <h1><span class="text-gradient">AI Workshops</span></h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Hands-on training to get your team AI-ready. From basics to advanced applications.
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2>Learn AI. <span class="text-gradient">Apply It Today.</span></h2>
                <p>
                    AI tools are only as good as the people using them. My workshops are designed to give your team practical, hands-on experience with AI tools they can use immediately.
                </p>
                <p>
                    No theoretical fluff. No slide decks full of buzzwords. Just practical training that transforms how your team works.
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow mt-1">
                    Book a Workshop
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg);">
                    <div class="card-icon" style="margin: 0 auto var(--space-md);">
                        <?php echo manoga_icon('workshop'); ?>
                    </div>
                    <h3 class="text-center">Workshop Topics</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI Fundamentals
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Prompt Engineering
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI for Marketing
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> AI for Development
                        </li>
                        <li style="padding: var(--space-xs) 0; display: flex; align-items: center; gap: var(--space-xs);">
                            <?php echo manoga_icon('check'); ?> Custom Topics
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workshop Types -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2>Workshop Programs</h2>
        </div>

        <div class="pricing-grid reveal">
            <!-- Intro Workshop -->
            <div class="card pricing-card">
                <div class="pricing-tier">Starter</div>
                <h3>AI Fundamentals</h3>
                <p class="card-text mb-2">Perfect for teams new to AI. Learn the basics and get hands-on experience with popular AI tools.</p>
                <ul class="pricing-features">
                    <li>Half-day workshop</li>
                    <li>Up to 15 participants</li>
                    <li>Hands-on exercises</li>
                    <li>Tool recommendations</li>
                    <li>Resource materials</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary w-full">
                    Get Details
                </a>
            </div>

            <!-- Advanced Workshop -->
            <div class="card pricing-card featured">
                <div class="pricing-tier">Popular</div>
                <h3>Prompt Engineering</h3>
                <p class="card-text mb-2">Master the art of communicating with AI. Learn techniques that 10x your AI output quality.</p>
                <ul class="pricing-features">
                    <li>Full-day workshop</li>
                    <li>Up to 15 participants</li>
                    <li>Advanced techniques</li>
                    <li>Real-world projects</li>
                    <li>Follow-up session</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary w-full">
                    Get Details
                </a>
            </div>

            <!-- Custom Workshop -->
            <div class="card pricing-card">
                <div class="pricing-tier">Enterprise</div>
                <h3>Custom Program</h3>
                <p class="card-text mb-2">Tailored training for your specific industry, tools, and use cases.</p>
                <ul class="pricing-features">
                    <li>Custom duration</li>
                    <li>Any team size</li>
                    <li>Industry-specific</li>
                    <li>Ongoing support</li>
                    <li>Implementation help</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary w-full">
                    Get Details
                </a>
            </div>
        </div>
    </div>
</section>

<!-- What You'll Learn -->
<section class="section">
    <div class="container">
        <div class="text-center mb-3">
            <h2>What Your Team Will Learn</h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title">Effective Prompting</h4>
                <p class="card-text">
                    How to communicate with AI to get consistent, high-quality results. The difference between good and great outputs.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Tool Mastery</h4>
                <p class="card-text">
                    Hands-on experience with ChatGPT, Claude, and other AI tools. When to use what and how to get the most out of each.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Workflow Integration</h4>
                <p class="card-text">
                    How to integrate AI into daily work. Practical applications that save hours every week.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Quality Control</h4>
                <p class="card-text">
                    How to verify AI outputs, catch errors, and maintain quality standards in AI-assisted work.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Best Practices</h4>
                <p class="card-text">
                    Guidelines for responsible AI use, data privacy, and avoiding common pitfalls.
                </p>
            </div>

            <div class="card">
                <h4 class="card-title">Staying Current</h4>
                <p class="card-text">
                    How to keep up with AI developments and continuously improve your AI skills.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1">Ready to Upskill Your Team?</h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                Let's discuss a workshop tailored to your team's needs.
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-glow">
                    Book a Workshop
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
