<?php
/**
 * The main template file (fallback)
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="text-gradient">
            <?php
            if (is_home()) {
                echo 'Latest Updates';
            } elseif (is_archive()) {
                the_archive_title();
            } elseif (is_search()) {
                echo 'Search Results';
            } else {
                the_title();
            }
            ?>
        </h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="services-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin: -2rem -2rem 2rem -2rem; overflow: hidden; border-radius: var(--radius-lg) var(--radius-lg) 0 0;">
                                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 200px; object-fit: cover;')); ?>
                            </div>
                        <?php endif; ?>

                        <h3 class="card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <p class="card-text"><?php the_excerpt(); ?></p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary">
                            Read More
                            <?php echo manoga_icon('arrow-right'); ?>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="text-center mt-3">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="text-center">
                <h2>No content found</h2>
                <p>Try searching or navigate back to the <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a>.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
