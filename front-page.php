<?php
/**
 * Template Name: Front Page
 * The front page template for Manoga AI
 *
 * @package ManogaAI
 */

get_header();

// Set language-based URLs
$lang = manoga_get_current_lang();
$contact_url = $lang === 'da' ? home_url('/da/contact/') : home_url('/contact/');
$portfolio_url = $lang === 'da' ? home_url('/da/portfolio/') : home_url('/portfolio/');
$vibecoding_url = $lang === 'da' ? home_url('/da/vibecoding/') : home_url('/vibecoding/');
$ai_consulting_url = $lang === 'da' ? home_url('/da/ai-consulting/') : home_url('/ai-consulting/');
$workshops_url = $lang === 'da' ? home_url('/da/workshops/') : home_url('/workshops/');
$seo_url = $lang === 'da' ? home_url('/da/seo/') : home_url('/seo/');
$google_ads_url = $lang === 'da' ? home_url('/da/google-ads/') : home_url('/google-ads/');
$meta_url = $lang === 'da' ? home_url('/da/meta-advertising/') : home_url('/meta-advertising/');
$webdesign_url = $lang === 'da' ? home_url('/da/webdesign/') : home_url('/webdesign/');
$gtm_url = $lang === 'da' ? home_url('/da/google-tag-manager/') : home_url('/google-tag-manager/');
?>

<!-- Hero Section -->
<section class="hero section" id="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="hero-tagline"><?php echo manoga_t('AI-Powered Digital Transformation', 'AI-drevet digital transformation'); ?></span>
                <h1 class="hero-title">
                    <?php echo manoga_t('Build The Future With', 'Skab fremtiden med'); ?>
                    <span class="text-gradient glitch" data-text="Vibecoding">Vibecoding</span>
                </h1>
                <p class="hero-description">
                    <?php echo manoga_t(
                        'We combine 15+ years of digital marketing expertise with cutting-edge AI to create solutions that actually work. From vibecoding to workshops, we\'re your partner in the AI revolution.',
                        'Vi kombinerer over 15 års erfaring inden for digital marketing med banebrydende AI for at skabe løsninger, der virkelig virker. Fra vibecoding til workshops – vi er din partner i AI-revolutionen.'
                    ); ?>
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary btn-glow">
                        <?php echo manoga_t('Start Your Project', 'Start dit projekt'); ?>
                        <?php echo manoga_icon('arrow-right'); ?>
                    </a>
                    <a href="<?php echo esc_url($portfolio_url); ?>" class="btn btn-secondary">
                        <?php echo manoga_t('View Our Work', 'Se vores arbejde'); ?>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="ai-brain">
                    <div class="brain-ring"></div>
                    <div class="brain-ring"></div>
                    <div class="brain-ring"></div>
                    <div class="brain-core">
                        <?php echo manoga_icon('brain'); ?>
                    </div>
                    <div class="brain-node" style="top: 10%; left: 20%;"></div>
                    <div class="brain-node" style="top: 30%; right: 10%;"></div>
                    <div class="brain-node" style="bottom: 20%; left: 15%;"></div>
                    <div class="brain-node" style="bottom: 10%; right: 25%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Marquee -->
<div class="marquee section-sm">
    <div class="marquee-content">
        <span>Vibecoding</span>
        <span><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></span>
        <span>SEO</span>
        <span>Google Ads</span>
        <span>Meta <?php echo manoga_t('Advertising', 'Annoncering'); ?></span>
        <span><?php echo manoga_t('Web Design', 'Webdesign'); ?></span>
        <span>GTM</span>
        <span>Workshops</span>
        <span>Vibecoding</span>
        <span><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></span>
        <span>SEO</span>
        <span>Google Ads</span>
        <span>Meta <?php echo manoga_t('Advertising', 'Annoncering'); ?></span>
        <span><?php echo manoga_t('Web Design', 'Webdesign'); ?></span>
        <span>GTM</span>
        <span>Workshops</span>
    </div>
</div>

<!-- Core Services Section -->
<section class="section" id="services">
    <div class="container">
        <div class="text-center mb-3">
            <span class="hero-tagline"><?php echo manoga_t('What We Do', 'Det vi gør'); ?></span>
            <h2><?php echo manoga_t('AI-Powered Services', 'AI-drevne ydelser'); ?></h2>
            <p style="max-width: 600px; margin: 0 auto;">
                <?php echo manoga_t(
                    'From rapid prototyping with vibecoding to comprehensive AI consulting, we deliver results that matter.',
                    'Fra hurtig prototyping med vibecoding til omfattende AI-konsultering – vi leverer resultater, der gør en forskel.'
                ); ?>
            </p>
        </div>

        <div class="services-grid stagger reveal">
            <!-- Vibecoding -->
            <div class="card service-card">
                <div class="card-icon">
                    <?php echo manoga_icon('code'); ?>
                </div>
                <h3 class="card-title">Vibecoding</h3>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Build production-ready applications at 10x speed using AI-assisted development. We transform your ideas into working products in days, not months.',
                        'Byg produktionsklare applikationer 10 gange hurtigere med AI-assisteret udvikling. Vi omdanner dine idéer til fungerende produkter på dage – ikke måneder.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($vibecoding_url); ?>" class="btn btn-secondary mt-1">
                    <?php echo manoga_t('Learn More', 'Læs mere'); ?>
                </a>
            </div>

            <!-- AI Consulting -->
            <div class="card service-card">
                <div class="card-icon">
                    <?php echo manoga_icon('brain'); ?>
                </div>
                <h3 class="card-title"><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></h3>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Strategic guidance on implementing AI in your business. We help you identify opportunities, avoid pitfalls, and maximize ROI on AI investments.',
                        'Strategisk rådgivning om implementering af AI i din virksomhed. Vi hjælper dig med at identificere muligheder, undgå faldgruber og maksimere afkastet på AI-investeringer.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($ai_consulting_url); ?>" class="btn btn-secondary mt-1">
                    <?php echo manoga_t('Learn More', 'Læs mere'); ?>
                </a>
            </div>

            <!-- Workshops -->
            <div class="card service-card">
                <div class="card-icon">
                    <?php echo manoga_icon('workshop'); ?>
                </div>
                <h3 class="card-title"><?php echo manoga_t('AI Workshops', 'AI Workshops'); ?></h3>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Hands-on training for teams looking to leverage AI. From prompt engineering to building AI workflows, we get your team AI-ready.',
                        'Praktisk træning for teams, der vil mestre AI. Fra prompt engineering til opbygning af AI-arbejdsgange – vi gør dit team klar til AI.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($workshops_url); ?>" class="btn btn-secondary mt-1">
                    <?php echo manoga_t('Learn More', 'Læs mere'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Digital Marketing Section -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <span class="hero-tagline"><?php echo manoga_t('Digital Marketing', 'Digital Marketing'); ?></span>
            <h2>15+ <?php echo manoga_t('Years of', 'års'); ?> <span class="text-gradient"><?php echo manoga_t('Expertise', 'ekspertise'); ?></span></h2>
            <p style="max-width: 600px; margin: 0 auto;">
                <?php echo manoga_t(
                    'Deep digital marketing knowledge combined with AI-powered optimization for maximum impact.',
                    'Dyb viden inden for digital marketing kombineret med AI-drevet optimering for maksimal effekt.'
                ); ?>
            </p>
        </div>

        <div class="services-grid stagger reveal">
            <!-- SEO -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('search'); ?>
                </div>
                <h4 class="card-title">SEO</h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Data-driven search optimization that gets you found. Technical SEO, content strategy, and AI-powered insights.',
                        'Datadrevet søgeoptimering, der får dig fundet. Teknisk SEO, indholdsstrategi og AI-drevne indsigter.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($seo_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>

            <!-- Google Ads -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('target'); ?>
                </div>
                <h4 class="card-title">Google Ads</h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Performance-focused PPC campaigns that convert. Smart bidding, audience targeting, and continuous optimization.',
                        'Performancefokuserede PPC-kampagner, der konverterer. Smart budgivning, præcis målretning og løbende optimering.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($google_ads_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>

            <!-- Meta Advertising -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('tag'); ?>
                </div>
                <h4 class="card-title"><?php echo manoga_t('Meta Advertising', 'Meta Annoncering'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Facebook & Instagram campaigns that reach your audience. Creative strategy, audience building, and ROI tracking.',
                        'Facebook & Instagram-kampagner, der når din målgruppe. Kreativ strategi, publikumsopbygning og ROI-måling.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($meta_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>

            <!-- Web Design -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('layout'); ?>
                </div>
                <h4 class="card-title"><?php echo manoga_t('Web Design', 'Webdesign'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Modern, conversion-focused websites built with AI-assisted development. Fast, responsive, and optimized.',
                        'Moderne, konverteringsfokuserede websites bygget med AI-assisteret udvikling. Hurtige, responsive og optimerede.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($webdesign_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>

            <!-- Google Tag Manager -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('bar-chart'); ?>
                </div>
                <h4 class="card-title">Google Tag Manager</h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Proper tracking implementation for data-driven decisions. GTM setup, conversion tracking, and analytics.',
                        'Korrekt tracking-implementering til datadrevne beslutninger. GTM-opsætning, konverteringssporing og analyser.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($gtm_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>

            <!-- Analytics -->
            <div class="card">
                <div class="card-icon">
                    <?php echo manoga_icon('bar-chart'); ?>
                </div>
                <h4 class="card-title"><?php echo manoga_t('Analytics & Reporting', 'Analyse & Rapportering'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Custom dashboards and reports that make sense. GA4 setup, data visualization, and actionable insights.',
                        'Skræddersyede dashboards og rapporter, der giver mening. GA4-opsætning, datavisualisering og handlingsorienterede indsigter.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($contact_url); ?>"><?php echo manoga_t('Learn more', 'Læs mere'); ?> &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section">
    <div class="container">
        <div class="stats-grid reveal">
            <div class="stat-item">
                <div class="stat-number" data-count="15">15+</div>
                <div class="stat-label"><?php echo manoga_t('Years Experience', 'års erfaring'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="100">100+</div>
                <div class="stat-label"><?php echo manoga_t('Projects Delivered', 'projekter leveret'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="10">10x</div>
                <div class="stat-label"><?php echo manoga_t('Faster Development', 'hurtigere udvikling'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="24">24/7</div>
                <div class="stat-label"><?php echo manoga_t('AI-Powered Support', 'AI-drevet support'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Showcase -->
<section class="section" id="portfolio">
    <div class="container">
        <div class="text-center mb-3">
            <span class="hero-tagline"><?php echo manoga_t('Our Work', 'Vores arbejde'); ?></span>
            <h2><?php echo manoga_t('Featured', 'Udvalgte'); ?> <span class="text-gradient"><?php echo manoga_t('Projects', 'projekter'); ?></span></h2>
            <p style="max-width: 600px; margin: 0 auto;">
                <?php echo manoga_t(
                    'Real products built with vibecoding and AI. See what\'s possible when experience meets innovation.',
                    'Rigtige produkter bygget med vibecoding og AI. Se, hvad der er muligt, når erfaring møder innovation.'
                ); ?>
            </p>
        </div>

        <div class="showcase-grid reveal">
            <!-- WELC -->
            <div class="showcase-item">
                <div class="showcase-image" style="background: linear-gradient(135deg, #f7931a 0%, #ffb347 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 2rem; margin-bottom: 0.5rem; color: var(--dark);">WeLoveEverythingCrypto</h3>
                        <p style="color: var(--dark); opacity: 0.8;"><?php echo manoga_t('Cryptocurrency News & Analysis', 'Kryptovaluta-nyheder og analyse'); ?></p>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag"><?php echo manoga_t('Live Project', 'Live Projekt'); ?></span>
                    <h3 class="showcase-title">WeLoveEverythingCrypto</h3>
                    <p><?php echo manoga_t(
                        'Comprehensive cryptocurrency news platform built with Nuxt 3, featuring real-time data, multi-language support, and AI-powered content generation.',
                        'Omfattende kryptovaluta-nyhedsplatform bygget med Nuxt 3 – med realtidsdata, flersproget support og AI-genereret indhold.'
                    ); ?></p>
                    <a href="https://weloveeverythingcrypto.com" target="_blank" rel="noopener" class="btn btn-primary" style="margin-top: 1rem;">
                        <?php echo manoga_t('Visit Site', 'Besøg siden'); ?> <?php echo manoga_icon('external'); ?>
                    </a>
                </div>
            </div>

            <!-- Handball Stats -->
            <div class="showcase-item">
                <div class="showcase-image" style="background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 2rem; margin-bottom: 0.5rem;">Handball Stats</h3>
                        <p style="opacity: 0.8;"><?php echo manoga_t('Coming Soon', 'Kommer Snart'); ?></p>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag"><?php echo manoga_t('Coming Soon', 'Kommer Snart'); ?></span>
                    <h3 class="showcase-title">Handball Stats App</h3>
                    <p><?php echo manoga_t(
                        'Advanced handball statistics and analytics platform. Real-time match tracking, player performance metrics, and AI-powered predictions.',
                        'Avanceret håndboldstatistik- og analyseplatform. Realtids kampsporing, spillerpræstationsmålinger og AI-drevne forudsigelser.'
                    ); ?></p>
                    <span class="btn btn-secondary" style="margin-top: 1rem;">
                        <?php echo manoga_t('In Development', 'Under Udvikling'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <span class="hero-tagline"><?php echo manoga_t('How We Work', 'Sådan arbejder vi'); ?></span>
            <h2><?php echo manoga_t('The', ''); ?> <span class="text-gradient">Vibecoding</span><?php echo manoga_t('Process', '-processen'); ?></h2>
        </div>

        <div class="process-grid reveal">
            <div class="process-step">
                <div class="process-number">1</div>
                <h4 class="process-title"><?php echo manoga_t('Discovery', 'Opdagelse'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'We understand your vision, goals, and requirements through collaborative discussion.',
                    'Vi forstår din vision, dine mål og krav gennem tæt dialog.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">2</div>
                <h4 class="process-title"><?php echo manoga_t('Design', 'Design'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'AI-assisted rapid prototyping to visualize the solution before building.',
                    'AI-assisteret hurtig prototyping – visualisér løsningen, før den bygges.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">3</div>
                <h4 class="process-title"><?php echo manoga_t('Develop', 'Udvikling'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'Vibecoding magic happens - building production-ready code at unprecedented speed.',
                    'Vibecoding-magien sker – vi bygger produktionsklar kode med hidtil uset hastighed.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">4</div>
                <h4 class="process-title"><?php echo manoga_t('Deploy', 'Udrulning'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'Launch with confidence. Continuous support and AI-powered optimization.',
                    'Launch med tillid. Løbende support og AI-drevet optimering.'
                ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1"><?php echo manoga_t('Ready to Transform Your Business?', 'Klar til at transformere din virksomhed?'); ?></h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                <?php echo manoga_t(
                    'Let\'s discuss how AI and vibecoding can accelerate your next project.',
                    'Lad os tale om, hvordan AI og vibecoding kan accelerere dit næste projekt.'
                ); ?>
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary btn-glow">
                    <?php echo manoga_t('Get Started Today', 'Kom i gang i dag'); ?>
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
                <a href="tel:<?php echo esc_attr(manoga_get_option('manoga_phone', '+4550587900')); ?>" class="btn btn-secondary">
                    <?php echo manoga_icon('phone'); ?>
                    <?php echo esc_html(manoga_get_option('manoga_phone', '+45 50 58 79 00')); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section" id="contact" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info reveal-left">
                <span class="hero-tagline"><?php echo manoga_t('Get In Touch', 'Kontakt os'); ?></span>
                <h2><?php echo manoga_t('Let\'s Build Something', 'Lad os bygge noget'); ?> <span class="text-gradient"><?php echo manoga_t('Amazing', 'fantastisk'); ?></span></h2>
                <p>
                    <?php echo manoga_t(
                        'Whether you need AI consulting, a vibecoding project, or want to upskill your team - I\'m here to help. Let\'s talk about your needs.',
                        'Uanset om du har brug for AI-konsultering, et vibecoding-projekt eller ønsker at opkvalificere dit team – jeg er her for at hjælpe. Lad os tale om dine behov.'
                    ); ?>
                </p>

                <div class="contact-item">
                    <div class="contact-icon">
                        <?php echo manoga_icon('phone'); ?>
                    </div>
                    <div>
                        <strong><?php echo manoga_t('Phone', 'Telefon'); ?></strong><br>
                        <a href="tel:<?php echo esc_attr(manoga_get_option('manoga_phone', '+4550587900')); ?>">
                            <?php echo esc_html(manoga_get_option('manoga_phone', '+45 50 58 79 00')); ?>
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <?php echo manoga_icon('linkedin'); ?>
                    </div>
                    <div>
                        <strong>LinkedIn</strong><br>
                        <a href="<?php echo esc_url(manoga_get_option('manoga_linkedin', 'https://www.linkedin.com/in/kennethabueg/')); ?>" target="_blank" rel="noopener">
                            <?php echo manoga_t('Connect with me', 'Forbind med mig'); ?>
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <?php echo manoga_icon('location'); ?>
                    </div>
                    <div>
                        <strong><?php echo manoga_t('Business Registration', 'CVR-registrering'); ?></strong><br>
                        CVR: <?php echo esc_html(manoga_get_option('manoga_cvr', 'DK39733730')); ?><br>
                        <?php echo manoga_t('Denmark', 'Danmark'); ?>
                    </div>
                </div>
            </div>

            <div class="reveal-right">
                <form class="contact-form" id="contact-form" method="post">
                    <div class="form-group">
                        <label class="form-label" for="contact-name"><?php echo manoga_t('Name', 'Navn'); ?> *</label>
                        <input type="text" id="contact-name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-email">Email *</label>
                        <input type="email" id="contact-email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-phone"><?php echo manoga_t('Phone', 'Telefon'); ?></label>
                        <input type="tel" id="contact-phone" name="phone" class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-service"><?php echo manoga_t('Service Interest', 'Interesseret i'); ?></label>
                        <select id="contact-service" name="service" class="form-input">
                            <option value=""><?php echo manoga_t('Select a service...', 'Vælg en ydelse...'); ?></option>
                            <option value="vibecoding">Vibecoding</option>
                            <option value="ai-consulting"><?php echo manoga_t('AI Consulting', 'AI-konsultering'); ?></option>
                            <option value="workshops">AI Workshops</option>
                            <option value="seo">SEO</option>
                            <option value="google-ads">Google Ads</option>
                            <option value="meta-ads">Meta <?php echo manoga_t('Advertising', 'Annoncering'); ?></option>
                            <option value="webdesign"><?php echo manoga_t('Web Design', 'Webdesign'); ?></option>
                            <option value="gtm">Google Tag Manager</option>
                            <option value="other"><?php echo manoga_t('Other', 'Andet'); ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-message"><?php echo manoga_t('Message', 'Besked'); ?> *</label>
                        <textarea id="contact-message" name="message" class="form-textarea" required placeholder="<?php echo esc_attr(manoga_t('Tell me about your project...', 'Fortæl mig om dit projekt...')); ?>"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-full">
                        <?php echo manoga_t('Send Message', 'Send Besked'); ?>
                        <?php echo manoga_icon('arrow-right'); ?>
                    </button>

                    <div id="form-message" style="margin-top: 1rem; display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
