<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Animated Background -->
<div class="bg-animation">
    <?php for ($i = 0; $i < 20; $i++): ?>
        <div class="particle" style="
            left: <?php echo rand(0, 100); ?>%;
            animation-delay: <?php echo rand(0, 15); ?>s;
            animation-duration: <?php echo rand(10, 20); ?>s;
        "></div>
    <?php endfor; ?>
</div>

<!-- Site Header -->
<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php bloginfo('name'); ?>">
                <span class="logo-icon">M</span>
                <span class="logo-text">Manoga<span class="text-gradient">AI</span></span>
            </a>

            <!-- Main Navigation -->
            <nav class="main-nav" id="main-nav" aria-label="Primary Navigation">
                <?php if (has_nav_menu('primary')): ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => '',
                        'walker'         => new Manoga_Nav_Walker(),
                        'fallback_cb'    => false,
                    ));
                    ?>
                <?php else:
                    $prefix = manoga_is_danish() ? '/da' : '';
                ?>
                    <!-- Default Menu if none set -->
                    <ul>
                        <li><a href="<?php echo esc_url(home_url($prefix . '/')); ?>"><?php echo manoga_t('Home', 'Hjem'); ?></a></li>
                        <li class="has-dropdown">
                            <a href="#"><?php echo manoga_t('Services', 'Ydelser'); ?></a>
                            <ul class="dropdown">
                                <li><a href="<?php echo esc_url(home_url($prefix . '/seo/')); ?>">SEO</a></li>
                                <li><a href="<?php echo esc_url(home_url($prefix . '/google-ads/')); ?>">Google Ads</a></li>
                                <li><a href="<?php echo esc_url(home_url($prefix . '/meta-advertising/')); ?>"><?php echo manoga_t('Meta Advertising', 'Meta Annoncering'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url($prefix . '/webdesign/')); ?>"><?php echo manoga_t('Web Design', 'Webdesign'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url($prefix . '/google-tag-manager/')); ?>">Google Tag Manager</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo esc_url(home_url($prefix . '/ai-consulting/')); ?>"><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url($prefix . '/workshops/')); ?>">Workshops</a></li>
                        <li><a href="<?php echo esc_url(home_url($prefix . '/portfolio/')); ?>">Portfolio</a></li>
                        <li><a href="<?php echo esc_url(home_url($prefix . '/contact/')); ?>" class="nav-cta"><?php echo manoga_t('Get Started', 'Kom i gang'); ?></a></li>
                    </ul>
                <?php endif; ?>
            </nav>

            <!-- Language Switcher -->
            <?php echo manoga_language_switcher(); ?>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<main class="site-main" id="main">
