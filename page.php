<?php
/**
 * Default Page Template
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle"><?php echo get_post_meta(get_the_ID(), 'page_subtitle', true) ?: 'Manoga AI'; ?></span>
        <h1 class="text-gradient"><?php the_title(); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 800px;">
        <div class="reveal">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
