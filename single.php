<?php
/**
 * Single Post Template
 *
 * @package ManogaAI
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle"><?php echo get_the_date(); ?></span>
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 800px;">
        <?php if (has_post_thumbnail()) : ?>
            <div class="reveal" style="margin-bottom: var(--space-lg); border-radius: var(--radius-lg); overflow: hidden;">
                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
            </div>
        <?php endif; ?>

        <article class="reveal">
            <div class="post-content" style="font-size: 1.1rem; line-height: 1.8;">
                <?php the_content(); ?>
            </div>

            <?php
            // Post tags
            $tags = get_the_tags();
            if ($tags) : ?>
                <div class="post-tags" style="margin-top: var(--space-lg); padding-top: var(--space-md); border-top: 1px solid rgba(255,255,255,0.1);">
                    <strong>Tags:</strong>
                    <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag" style="display: inline-block; padding: 4px 12px; background: rgba(99, 102, 241, 0.2); border-radius: var(--radius-full); margin: 4px; font-size: 0.85rem;">
                            <?php echo $tag->name; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </article>

        <!-- Post Navigation -->
        <nav class="post-navigation" style="margin-top: var(--space-lg); display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md);">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if ($prev_post) : ?>
                <a href="<?php echo get_permalink($prev_post); ?>" class="card" style="padding: var(--space-sm);">
                    <span style="font-size: 0.85rem; color: var(--gray);">&larr; Previous</span>
                    <h4 style="margin: var(--space-xs) 0 0; font-size: 1rem;"><?php echo get_the_title($prev_post); ?></h4>
                </a>
            <?php else: ?>
                <div></div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post); ?>" class="card" style="padding: var(--space-sm); text-align: right;">
                    <span style="font-size: 0.85rem; color: var(--gray);">Next &rarr;</span>
                    <h4 style="margin: var(--space-xs) 0 0; font-size: 1rem;"><?php echo get_the_title($next_post); ?></h4>
                </a>
            <?php endif; ?>
        </nav>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
