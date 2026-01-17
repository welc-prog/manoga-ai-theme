</main><!-- #main -->

<?php
// Set language-based URLs for footer
$lang = manoga_get_current_lang();
$prefix = $lang === 'da' ? '/da' : '';
?>

<!-- Site Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url($prefix . '/')); ?>" class="logo">
                    <span class="logo-icon">M</span>
                    <span class="logo-text">Manoga<span class="text-gradient">AI</span></span>
                </a>
                <p><?php echo manoga_t(
                    'Transforming businesses through vibecoding, AI consulting, and hands-on workshops. 15+ years of digital marketing expertise meets cutting-edge artificial intelligence.',
                    'Vi transformerer virksomheder gennem vibecoding, AI-konsultering og praktiske workshops. Over 15 års erfaring inden for digital marketing møder banebrydende kunstig intelligens.'
                ); ?></p>
                <div class="social-links">
                    <a href="<?php echo esc_url(manoga_get_option('manoga_linkedin', 'https://www.linkedin.com/in/kennethabueg/')); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <?php echo manoga_icon('linkedin'); ?>
                    </a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="footer-column">
                <h4 class="footer-heading"><?php echo manoga_t('Digital Marketing', 'Digital Marketing'); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url($prefix . '/seo/')); ?>"><?php echo manoga_t('SEO Services', 'SEO-ydelser'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/google-ads/')); ?>">Google Ads</a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/meta-advertising/')); ?>"><?php echo manoga_t('Meta Advertising', 'Meta Annoncering'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/webdesign/')); ?>"><?php echo manoga_t('Web Design', 'Webdesign'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/google-tag-manager/')); ?>">Google Tag Manager</a></li>
                </ul>
            </div>

            <!-- AI Services Column -->
            <div class="footer-column">
                <h4 class="footer-heading"><?php echo manoga_t('AI Services', 'AI-ydelser'); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url($prefix . '/ai-consulting/')); ?>"><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/vibecoding/')); ?>">Vibecoding</a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/workshops/')); ?>">AI Workshops</a></li>
                    <li><a href="<?php echo esc_url(home_url($prefix . '/portfolio/')); ?>">Portfolio</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="footer-column">
                <h4 class="footer-heading"><?php echo manoga_t('Contact', 'Kontakt'); ?></h4>
                <ul class="footer-links">
                    <li>
                        <a href="tel:<?php echo esc_attr(manoga_get_option('manoga_phone', '+4550587900')); ?>">
                            <?php echo esc_html(manoga_get_option('manoga_phone', '+45 50 58 79 00')); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(manoga_get_option('manoga_linkedin', 'https://www.linkedin.com/in/kennethabueg/')); ?>" target="_blank" rel="noopener">
                            <?php echo manoga_t('LinkedIn Profile', 'LinkedIn-profil'); ?>
                        </a>
                    </li>
                    <li>
                        CVR: <?php echo esc_html(manoga_get_option('manoga_cvr', 'DK39733730')); ?>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Manoga AI. <?php echo manoga_t('All rights reserved.', 'Alle rettigheder forbeholdes.'); ?></p>
            <p>CVR: <?php echo esc_html(manoga_get_option('manoga_cvr', 'DK39733730')); ?> | <?php echo manoga_t('Denmark', 'Danmark'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
