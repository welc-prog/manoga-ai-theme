<?php
/**
 * Manoga AI Theme Functions
 *
 * @package ManogaAI
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function manoga_theme_setup() {
    // Add title tag support
    add_theme_support('title-tag');

    // Add featured images support
    add_theme_support('post-thumbnails');

    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'manoga-ai'),
        'footer'    => __('Footer Menu', 'manoga-ai'),
        'services'  => __('Services Menu', 'manoga-ai'),
    ));

    // Add editor styles
    add_theme_support('editor-styles');

    // Add responsive embeds
    add_theme_support('responsive-embeds');

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'manoga_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function manoga_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'manoga-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    // Google Fonts - Inter & JetBrains Mono
    wp_enqueue_style(
        'manoga-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );

    // Main JavaScript
    wp_enqueue_script(
        'manoga-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('manoga-main', 'manogaAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('manoga_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'manoga_enqueue_scripts');

/**
 * Custom Nav Walker for Primary Menu
 */
class Manoga_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="dropdown">';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . ($has_children ? ' has-dropdown' : '') . '"' : '';

        $output .= '<li' . $class_names . '>';

        $atts = array(
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : '',
        );

        // Add CTA class for contact/get started links
        $cta_keywords = array('contact', 'get started', 'start', 'book', 'schedule');
        foreach ($cta_keywords as $keyword) {
            if (stripos($item->title, $keyword) !== false) {
                $atts['class'] = 'nav-cta';
                break;
            }
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before ?? '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Contact Form Handler (No Plugin Required)
 */
function manoga_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'manoga_nonce')) {
        wp_send_json_error('Security check failed');
    }

    // Sanitize inputs
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');

    // Validate
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address');
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - Manoga AI';

    $body = "New contact form submission:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    if ($phone) $body .= "Phone: $phone\n";
    if ($service) $body .= "Service Interest: $service\n";
    $body .= "\nMessage:\n$message";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email,
    );

    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Thank you! Your message has been sent successfully.');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again or contact us directly.');
    }
}
add_action('wp_ajax_manoga_contact', 'manoga_handle_contact_form');
add_action('wp_ajax_nopriv_manoga_contact', 'manoga_handle_contact_form');

/**
 * Custom Excerpt Length
 */
function manoga_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'manoga_excerpt_length');

/**
 * Custom Excerpt More
 */
function manoga_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'manoga_excerpt_more');

/**
 * Add Page Slug to Body Class
 */
function manoga_body_classes($classes) {
    if (is_singular()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'manoga_body_classes');

/**
 * Remove Query Strings from Static Resources
 */
function manoga_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'manoga_remove_query_strings', 10, 2);
add_filter('script_loader_src', 'manoga_remove_query_strings', 10, 2);

/**
 * Disable Emojis
 */
function manoga_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'manoga_disable_emojis');

/**
 * Remove WordPress Version
 */
remove_action('wp_head', 'wp_generator');

/**
 * Theme Customizer Settings
 */
function manoga_customize_register($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('manoga_contact', array(
        'title'    => __('Contact Information', 'manoga-ai'),
        'priority' => 30,
    ));

    // Phone
    $wp_customize->add_setting('manoga_phone', array(
        'default'           => '+4550587900',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('manoga_phone', array(
        'label'   => __('Phone Number', 'manoga-ai'),
        'section' => 'manoga_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('manoga_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('manoga_email', array(
        'label'   => __('Email Address', 'manoga-ai'),
        'section' => 'manoga_contact',
        'type'    => 'email',
    ));

    // LinkedIn
    $wp_customize->add_setting('manoga_linkedin', array(
        'default'           => 'https://www.linkedin.com/in/kennethabueg/',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('manoga_linkedin', array(
        'label'   => __('LinkedIn URL', 'manoga-ai'),
        'section' => 'manoga_contact',
        'type'    => 'url',
    ));

    // CVR
    $wp_customize->add_setting('manoga_cvr', array(
        'default'           => 'DK39733730',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('manoga_cvr', array(
        'label'   => __('CVR Number', 'manoga-ai'),
        'section' => 'manoga_contact',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'manoga_customize_register');

/**
 * Helper Function: Get Theme Mod with Default
 */
function manoga_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * SVG Icon Helper
 */
function manoga_icon($name) {
    $icons = array(
        'phone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
        'email' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>',
        'linkedin' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>',
        'location' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
        'check' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>',
        'brain' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-1.54Z"></path><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-1.54Z"></path></svg>',
        'code' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
        'workshop' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
        'search' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        'target' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
        'tag' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>',
        'layout' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>',
        'bar-chart' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>',
        'external' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>',
        'menu' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>',
        'x' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
    );

    return isset($icons[$name]) ? $icons[$name] : '';
}

/**
 * Page Template Registration
 */
function manoga_register_page_templates() {
    // Templates are automatically detected from files with Template Name comment
}
add_action('init', 'manoga_register_page_templates');

/**
 * ===============================================
 * MULTILINGUAL SUPPORT (i18n)
 * ===============================================
 */

/**
 * Get current language
 */
function manoga_get_current_lang() {
    // Check query var first (set by rewrite rules)
    $lang = get_query_var('manoga_lang', '');
    if ($lang === 'da') {
        return 'da';
    }

    // Fallback to URL detection
    $uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da(/|$|\?)#', $uri)) {
        return 'da';
    }
    return 'en';
}

/**
 * Check if current page is Danish
 */
function manoga_is_danish() {
    return manoga_get_current_lang() === 'da';
}

/**
 * Get URL for language switch
 */
function manoga_get_lang_url($lang) {
    $current_lang = manoga_get_current_lang();
    $current_url = home_url($_SERVER['REQUEST_URI']);

    if ($lang === 'da') {
        if ($current_lang === 'en') {
            // Add /da/ prefix
            $path = $_SERVER['REQUEST_URI'];
            if ($path === '/' || $path === '') {
                return home_url('/da/');
            }
            return home_url('/da' . $path);
        }
        return $current_url;
    } else {
        // Remove /da/ prefix for English
        if ($current_lang === 'da') {
            $path = preg_replace('#^/da#', '', $_SERVER['REQUEST_URI']);
            if (empty($path) || $path === '/') {
                return home_url('/');
            }
            return home_url($path);
        }
        return $current_url;
    }
}

/**
 * Get alternate language URL for hreflang
 */
function manoga_get_hreflang_urls() {
    $current_lang = manoga_get_current_lang();
    $path = $_SERVER['REQUEST_URI'];

    if ($current_lang === 'da') {
        $en_path = preg_replace('#^/da#', '', $path);
        if (empty($en_path)) $en_path = '/';
        return array(
            'en' => home_url($en_path),
            'da' => home_url($path),
            'x-default' => home_url($en_path),
        );
    } else {
        return array(
            'en' => home_url($path),
            'da' => home_url('/da' . ($path === '/' ? '' : $path)),
            'x-default' => home_url($path),
        );
    }
}

/**
 * Output hreflang tags for SEO
 */
function manoga_hreflang_tags() {
    $urls = manoga_get_hreflang_urls();
    ?>
    <link rel="alternate" hreflang="en" href="<?php echo esc_url($urls['en']); ?>" />
    <link rel="alternate" hreflang="da" href="<?php echo esc_url($urls['da']); ?>" />
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($urls['x-default']); ?>" />
    <?php
}
add_action('wp_head', 'manoga_hreflang_tags', 1);

/**
 * Language switcher HTML
 */
function manoga_language_switcher() {
    $current_lang = manoga_get_current_lang();
    $en_url = manoga_get_lang_url('en');
    $da_url = manoga_get_lang_url('da');

    ob_start();
    ?>
    <div class="language-switcher">
        <a href="<?php echo esc_url($en_url); ?>" class="lang-flag <?php echo $current_lang === 'en' ? 'active' : ''; ?>" title="English" aria-label="Switch to English">
            <svg viewBox="0 0 60 30" width="24" height="12">
                <clipPath id="gb-clip"><rect width="60" height="30"/></clipPath>
                <g clip-path="url(#gb-clip)">
                    <path d="M0,0 v30 h60 v-30 z" fill="#012169"/>
                    <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                    <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#gb-clip)" stroke="#C8102E" stroke-width="4"/>
                    <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                    <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                </g>
            </svg>
        </a>
        <a href="<?php echo esc_url($da_url); ?>" class="lang-flag <?php echo $current_lang === 'da' ? 'active' : ''; ?>" title="Dansk" aria-label="Skift til dansk">
            <svg viewBox="0 0 37 28" width="24" height="14">
                <rect width="37" height="28" fill="#C8102E"/>
                <rect x="12" width="4" height="28" fill="#fff"/>
                <rect y="12" width="37" height="4" fill="#fff"/>
            </svg>
        </a>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * Translate strings based on current language
 */
function manoga_t($en_text, $da_text = '') {
    if (empty($da_text)) {
        return $en_text;
    }
    return manoga_is_danish() ? $da_text : $en_text;
}

/**
 * Add rewrite rules for Danish pages
 */
function manoga_add_rewrite_rules() {
    // Danish homepage
    add_rewrite_rule('^da/?$', 'index.php?manoga_lang=da', 'top');
    // Danish subpages - map to existing English pages with language parameter
    add_rewrite_rule('^da/([^/]+)/?$', 'index.php?manoga_lang=da&pagename=$matches[1]', 'top');
}
add_action('init', 'manoga_add_rewrite_rules');

/**
 * Handle Danish homepage - show front page for /da/
 */
function manoga_danish_homepage($query) {
    if (!is_admin() && $query->is_main_query()) {
        $lang = get_query_var('manoga_lang');
        if ($lang === 'da' && empty($query->get('pagename')) && empty($query->get('name')) && empty($query->get('page_id'))) {
            // Show front page for /da/
            $front_page_id = get_option('page_on_front');
            if ($front_page_id) {
                $query->set('page_id', $front_page_id);
                $query->is_home = false;
                $query->is_page = true;
                $query->is_singular = true;
            }
        }
    }
}
add_action('pre_get_posts', 'manoga_danish_homepage');

/**
 * Force front-page template for Danish homepage
 */
function manoga_danish_template($template) {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da/?$#', $request_uri)) {
        $front_page_template = get_template_directory() . '/front-page.php';
        if (file_exists($front_page_template)) {
            return $front_page_template;
        }
    }
    return $template;
}
add_filter('template_include', 'manoga_danish_template', 99);

/**
 * Disable canonical redirect for Danish URLs
 */
function manoga_disable_canonical_redirect($redirect_url, $requested_url) {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da(/|$|\?)#', $request_uri)) {
        return false;
    }
    return $redirect_url;
}
add_filter('redirect_canonical', 'manoga_disable_canonical_redirect', 1, 2);

/**
 * Prevent all redirects for Danish URLs at template_redirect stage
 */
function manoga_prevent_danish_redirect() {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da/?$#', $request_uri)) {
        // For Danish homepage, ensure we show the front page content
        global $wp_query;

        // Get the front page
        $front_page_id = get_option('page_on_front');
        if ($front_page_id && get_option('show_on_front') === 'page') {
            // Reset query to show front page
            $wp_query->is_home = false;
            $wp_query->is_page = true;
            $wp_query->is_singular = true;
            $wp_query->is_front_page = true;

            // Set the queried object
            $wp_query->queried_object = get_post($front_page_id);
            $wp_query->queried_object_id = $front_page_id;
        }
    }
}
add_action('template_redirect', 'manoga_prevent_danish_redirect', 1);

/**
 * Remove WordPress's old slug redirect for Danish URLs
 */
function manoga_disable_old_slug_redirect($link) {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da(/|$|\?)#', $request_uri)) {
        return false;
    }
    return $link;
}
add_filter('old_slug_redirect_url', 'manoga_disable_old_slug_redirect', 1);

/**
 * Disable WP's automatic redirect for posts/pages
 */
function manoga_disable_wp_redirect($url) {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (preg_match('#^/da(/|$|\?)#', $request_uri)) {
        return false;
    }
    return $url;
}
add_filter('wp_redirect', 'manoga_disable_wp_redirect', 1);

/**
 * Add query vars
 */
function manoga_query_vars($vars) {
    $vars[] = 'manoga_lang';
    return $vars;
}
add_filter('query_vars', 'manoga_query_vars');

/**
 * Set HTML lang attribute
 */
function manoga_language_attributes($output) {
    if (manoga_is_danish()) {
        return str_replace('lang="en-US"', 'lang="da"', $output);
    }
    return $output;
}
add_filter('language_attributes', 'manoga_language_attributes');

/**
 * Add SEO meta tags
 */
function manoga_seo_meta_tags() {
    $lang = manoga_get_current_lang();

    // Get page-specific meta
    $meta_description = '';
    $meta_title = '';

    if (is_front_page()) {
        if ($lang === 'da') {
            $meta_title = 'Manoga AI - AI-Drevet Digital Transformation | Vibecoding & AI Konsultering';
            $meta_description = 'Specialist i vibecoding, AI konsultering og digitale workshops. 15+ års erfaring med online marketing. Byg fremtiden med AI-assisteret udvikling.';
        } else {
            $meta_title = 'Manoga AI - AI-Powered Digital Transformation | Vibecoding & AI Consulting';
            $meta_description = 'Expert in vibecoding, AI consulting, and digital workshops. 15+ years of online marketing experience. Build the future with AI-assisted development.';
        }
    } elseif (is_page()) {
        $page_slug = get_post_field('post_name', get_the_ID());

        $seo_data = array(
            'seo' => array(
                'en' => array('title' => 'SEO Services | Manoga AI', 'desc' => 'Expert SEO services to boost your organic visibility. Technical SEO, content strategy, and data-driven optimization.'),
                'da' => array('title' => 'SEO Tjenester | Manoga AI', 'desc' => 'Ekspert SEO tjenester der booster din organiske synlighed. Teknisk SEO, indholdsstrategi og datadrevet optimering.'),
            ),
            'google-ads' => array(
                'en' => array('title' => 'Google Ads Management | Manoga AI', 'desc' => 'Professional Google Ads management. Maximize ROI with data-driven PPC campaigns and expert optimization.'),
                'da' => array('title' => 'Google Ads Styring | Manoga AI', 'desc' => 'Professionel Google Ads styring. Maksimer ROI med datadrevne PPC-kampagner og ekspert optimering.'),
            ),
            'meta-advertising' => array(
                'en' => array('title' => 'Meta Advertising | Manoga AI', 'desc' => 'Facebook and Instagram advertising that converts. Expert targeting and creative optimization.'),
                'da' => array('title' => 'Meta Annoncering | Manoga AI', 'desc' => 'Facebook og Instagram annoncering der konverterer. Ekspert målretning og kreativ optimering.'),
            ),
            'webdesign' => array(
                'en' => array('title' => 'Web Design Services | Manoga AI', 'desc' => 'Modern, fast-loading websites built for conversion. AI-powered development at 10x speed.'),
                'da' => array('title' => 'Webdesign Tjenester | Manoga AI', 'desc' => 'Moderne, hurtig-ladende hjemmesider bygget til konvertering. AI-drevet udvikling med 10x hastighed.'),
            ),
            'google-tag-manager' => array(
                'en' => array('title' => 'Google Tag Manager Setup | Manoga AI', 'desc' => 'Professional GTM implementation. Track everything, optimize everything.'),
                'da' => array('title' => 'Google Tag Manager Opsætning | Manoga AI', 'desc' => 'Professionel GTM implementering. Spor alt, optimer alt.'),
            ),
            'ai-consulting' => array(
                'en' => array('title' => 'AI Consulting Services | Manoga AI', 'desc' => 'Strategic AI consulting to transform your business. From automation to AI-powered products.'),
                'da' => array('title' => 'AI-konsultering | Manoga AI', 'desc' => 'Strategisk AI-konsultering, der transformerer din virksomhed. Fra automatisering til AI-drevne produkter.'),
            ),
            'vibecoding' => array(
                'en' => array('title' => 'Vibecoding - AI-Powered Development | Manoga AI', 'desc' => 'Build production-ready applications at 10x speed with vibecoding. The future of software development.'),
                'da' => array('title' => 'Vibecoding - AI-drevet udvikling | Manoga AI', 'desc' => 'Byg produktionsklare applikationer 10 gange hurtigere med vibecoding. Fremtidens softwareudvikling.'),
            ),
            'workshops' => array(
                'en' => array('title' => 'AI Workshops | Manoga AI', 'desc' => 'Hands-on AI workshops for teams and businesses. Learn practical AI skills that drive results.'),
                'da' => array('title' => 'AI Workshops | Manoga AI', 'desc' => 'Praktiske AI-workshops for teams og virksomheder. Lær AI-færdigheder, der skaber resultater.'),
            ),
            'portfolio' => array(
                'en' => array('title' => 'Portfolio | Manoga AI', 'desc' => 'Real projects built with vibecoding and AI. See what is possible when experience meets innovation.'),
                'da' => array('title' => 'Portfolio | Manoga AI', 'desc' => 'Rigtige projekter bygget med vibecoding og AI. Se, hvad der er muligt, når erfaring møder innovation.'),
            ),
            'contact' => array(
                'en' => array('title' => 'Contact Us | Manoga AI', 'desc' => 'Get in touch to discuss your project. Free consultation for AI, vibecoding, and digital marketing.'),
                'da' => array('title' => 'Kontakt os | Manoga AI', 'desc' => 'Kontakt os for at tale om dit projekt. Gratis konsultation om AI, vibecoding og digital marketing.'),
            ),
        );

        // Remove -da suffix for lookup
        $base_slug = preg_replace('/-da$/', '', $page_slug);

        if (isset($seo_data[$base_slug][$lang])) {
            $meta_title = $seo_data[$base_slug][$lang]['title'];
            $meta_description = $seo_data[$base_slug][$lang]['desc'];
        }
    }

    if ($meta_description) {
        echo '<meta name="description" content="' . esc_attr($meta_description) . '" />' . "\n";
    }

    // Open Graph tags
    if ($meta_title) {
        echo '<meta property="og:title" content="' . esc_attr($meta_title) . '" />' . "\n";
    }
    if ($meta_description) {
        echo '<meta property="og:description" content="' . esc_attr($meta_description) . '" />' . "\n";
    }
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url(home_url($_SERVER['REQUEST_URI'])) . '" />' . "\n";
    echo '<meta property="og:site_name" content="Manoga AI" />' . "\n";
    echo '<meta property="og:locale" content="' . ($lang === 'da' ? 'da_DK' : 'en_US') . '" />' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    if ($meta_title) {
        echo '<meta name="twitter:title" content="' . esc_attr($meta_title) . '" />' . "\n";
    }
    if ($meta_description) {
        echo '<meta name="twitter:description" content="' . esc_attr($meta_description) . '" />' . "\n";
    }
}
add_action('wp_head', 'manoga_seo_meta_tags', 2);

/**
 * JSON-LD Structured Data
 */
function manoga_structured_data() {
    $lang = manoga_get_current_lang();

    $organization = array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Manoga AI',
        'url' => home_url('/'),
        'logo' => get_template_directory_uri() . '/assets/images/logo.png',
        'description' => $lang === 'da'
            ? 'AI-konsultering, vibecoding og digital marketing-ydelser'
            : 'AI consulting, vibecoding and digital marketing services',
        'telephone' => '+4550587900',
        'sameAs' => array(
            'https://www.linkedin.com/in/kennethabueg/'
        ),
        'address' => array(
            '@type' => 'PostalAddress',
            'addressCountry' => 'DK'
        ),
        'taxID' => 'DK39733730'
    );

    echo '<script type="application/ld+json">' . json_encode($organization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";

    // Add LocalBusiness schema
    $local_business = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Manoga AI',
        'telephone' => '+4550587900',
        'priceRange' => '$$',
        'address' => array(
            '@type' => 'PostalAddress',
            'addressCountry' => 'Denmark'
        )
    );

    echo '<script type="application/ld+json">' . json_encode($local_business, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'manoga_structured_data', 3);
