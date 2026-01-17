<?php
/**
 * 404 Template
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="section" style="min-height: 80vh; display: flex; align-items: center;">
    <div class="container text-center">
        <div class="reveal">
            <span class="hero-tagline">Error 404</span>
            <h1 style="font-size: 8rem; margin-bottom: 0;">
                <span class="text-gradient glitch" data-text="404">404</span>
            </h1>
            <h2 style="margin-bottom: var(--space-md);">Page Not Found</h2>
            <p style="max-width: 500px; margin: 0 auto var(--space-md);">
                The page you're looking for seems to have vanished into the digital void. Perhaps it was vibecoded out of existence?
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <?php echo manoga_icon('arrow-right'); ?>
                    Back to Home
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
