<?php
/**
 * Template Name: Vibecoding
 * Template for Vibecoding service page
 *
 * @package ManogaAI
 */

get_header();

// Set language-based URLs
$lang = manoga_get_current_lang();
$contact_url = $lang === 'da' ? home_url('/da/contact/') : home_url('/contact/');
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle"><?php echo manoga_t('AI-Powered Development', 'AI-drevet udvikling'); ?></span>
        <h1><span class="text-gradient glitch" data-text="Vibecoding">Vibecoding</span></h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            <?php echo manoga_t(
                'Build production-ready applications at 10x speed. The future of software development is here.',
                'Byg produktionsklare applikationer 10 gange hurtigere. Fremtidens softwareudvikling er her.'
            ); ?>
        </p>
    </div>
</section>

<!-- Hero Service Block -->
<section class="section">
    <div class="container">
        <div class="hero-content" style="gap: var(--space-lg);">
            <div class="reveal-left">
                <h2><?php echo manoga_t('Code at the', 'Kod med'); ?> <span class="text-gradient"><?php echo manoga_t('Speed of Thought', 'tankens hastighed'); ?></span></h2>
                <p>
                    <?php echo manoga_t(
                        'Vibecoding is AI-assisted development taken to its logical conclusion. Instead of writing every line of code manually, we collaborate with AI to build applications at unprecedented speed - without sacrificing quality.',
                        'Vibecoding er AI-assisteret udvikling taget til sin logiske konklusion. I stedet for at skrive hver linje kode manuelt samarbejder vi med AI for at bygge applikationer med hidtil uset hastighed – uden at gå på kompromis med kvaliteten.'
                    ); ?>
                </p>
                <p>
                    <?php echo manoga_t(
                        'The result? Production-ready applications in days instead of months. Features that would take weeks delivered in hours. And code that\'s clean, tested, and maintainable.',
                        'Resultatet? Produktionsklare applikationer på dage i stedet for måneder. Features, der normalt tager uger, leveres på timer. Og kode, der er ren, testet og vedligeholdbar.'
                    ); ?>
                </p>
                <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary btn-glow mt-1">
                    <?php echo manoga_t('Start Your Project', 'Start dit projekt'); ?>
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="reveal-right">
                <div class="card" style="padding: var(--space-lg); font-family: var(--font-mono); background: rgba(15, 23, 42, 0.9);">
                    <div style="color: var(--gray); margin-bottom: var(--space-xs);">// <?php echo manoga_t('AI-assisted development', 'AI-assisteret udvikling'); ?></div>
                    <div style="color: var(--primary-light);">
                        <span style="color: var(--accent);">const</span> project = <span style="color: var(--secondary);">vibecode</span>({<br>
                        &nbsp;&nbsp;idea: <span style="color: var(--success);">"<?php echo manoga_t('your vision', 'din vision'); ?>"</span>,<br>
                        &nbsp;&nbsp;speed: <span style="color: var(--success);">"10x"</span>,<br>
                        &nbsp;&nbsp;quality: <span style="color: var(--success);">"<?php echo manoga_t('production', 'produktion'); ?>"</span><br>
                        });
                    </div>
                    <div style="margin-top: var(--space-sm); color: var(--gray);">
                        // <?php echo manoga_t('Result: Working product in days', 'Resultat: Fungerende produkt på dage'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is Vibecoding -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2><?php echo manoga_t('What is Vibecoding?', 'Hvad er Vibecoding?'); ?></h2>
            <p style="max-width: 700px; margin: 0 auto;">
                <?php echo manoga_t(
                    'Vibecoding is a new paradigm in software development where humans and AI collaborate seamlessly. The developer provides the vision, architecture decisions, and quality control while AI handles the heavy lifting of code generation.',
                    'Vibecoding er et nyt paradigme inden for softwareudvikling, hvor menneske og AI samarbejder problemfrit. Udvikleren leverer visionen, tager arkitekturbeslutningerne og står for kvalitetskontrol, mens AI håndterer det tunge arbejde med kodegenerering.'
                ); ?>
            </p>
        </div>

        <div class="process-grid reveal">
            <div class="process-step">
                <div class="process-number">1</div>
                <h4 class="process-title"><?php echo manoga_t('You Describe', 'Du beskriver'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'Tell me what you want to build - the features, the feel, the functionality.',
                    'Fortæl mig, hvad du vil bygge – features, følelse og funktionalitet.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">2</div>
                <h4 class="process-title"><?php echo manoga_t('We Design', 'Vi designer'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'Together we architect the solution, making key technical decisions.',
                    'Sammen designer vi løsningen og træffer de vigtige tekniske beslutninger.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">3</div>
                <h4 class="process-title"><?php echo manoga_t('AI Builds', 'AI bygger'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'AI generates code at superhuman speed while I guide and refine.',
                    'AI genererer kode med overmenneskelig hastighed, mens jeg guider og finpudser.'
                ); ?></p>
            </div>
            <div class="process-step">
                <div class="process-number">4</div>
                <h4 class="process-title"><?php echo manoga_t('You Launch', 'Du lancerer'); ?></h4>
                <p class="process-text"><?php echo manoga_t(
                    'Production-ready code, tested and deployed. Ready for users.',
                    'Produktionsklar kode, testet og udrullet. Klar til brugerne.'
                ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section">
    <div class="container">
        <div class="text-center mb-3">
            <h2><?php echo manoga_t('Why Vibecoding?', 'Hvorfor Vibecoding?'); ?></h2>
        </div>

        <div class="services-grid stagger reveal">
            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('10x Faster', '10 gange hurtigere'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'What traditionally takes months can be done in weeks. What takes weeks can be done in days. Speed without compromise.',
                        'Det, der traditionelt tager måneder, kan gøres på uger. Det, der tager uger, kan gøres på dage. Hastighed uden kompromis.'
                    ); ?>
                </p>
            </div>

            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('Lower Cost', 'Lavere pris'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Faster development means lower costs. Get more features for your budget or launch sooner than planned.',
                        'Hurtigere udvikling betyder lavere omkostninger. Få flere features for dit budget, eller lancér tidligere end planlagt.'
                    ); ?>
                </p>
            </div>

            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('Production Quality', 'Produktionskvalitet'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'This isn\'t a prototype or MVP hack. It\'s production-ready code with proper architecture and testing.',
                        'Dette er ikke en prototype eller et MVP-hack. Det er produktionsklar kode med ordentlig arkitektur og test.'
                    ); ?>
                </p>
            </div>

            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('Rapid Iteration', 'Hurtig iteration'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Need changes? Pivoting? No problem. AI-assisted development makes iteration fast and affordable.',
                        'Brug for ændringer? Pivotering? Intet problem. AI-assisteret udvikling gør iteration hurtig og økonomisk overkommelig.'
                    ); ?>
                </p>
            </div>

            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('Modern Stack', 'Moderne stack'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'Built with modern frameworks and best practices. Vue, Nuxt, React, Python, whatever fits your needs.',
                        'Bygget med moderne frameworks og best practices. Vue, Nuxt, React, Python – hvad end der passer til dine behov.'
                    ); ?>
                </p>
            </div>

            <div class="card">
                <h4 class="card-title"><?php echo manoga_t('Full Ownership', 'Fuldt ejerskab'); ?></h4>
                <p class="card-text">
                    <?php echo manoga_t(
                        'You own the code. No vendor lock-in, no proprietary frameworks. Clean, maintainable code you can extend.',
                        'Du ejer koden. Ingen vendor lock-in, ingen proprietære frameworks. Ren, vedligeholdbar kode, du selv kan udvide.'
                    ); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Built with Vibecoding -->
<section class="section" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <div class="text-center mb-3">
            <h2><?php echo manoga_t('Built with Vibecoding', 'Bygget med Vibecoding'); ?></h2>
            <p><?php echo manoga_t('Real projects, real results.', 'Rigtige projekter, rigtige resultater.'); ?></p>
        </div>

        <div class="showcase-grid reveal">
            <div class="showcase-item">
                <div class="showcase-image" style="background: linear-gradient(135deg, #f7931a 0%, #ffb347 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--dark);">WeLoveEverythingCrypto</h3>
                        <p style="color: var(--dark); opacity: 0.8;"><?php echo manoga_t('Live Now', 'Live Nu'); ?></p>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag"><?php echo manoga_t('Live Project', 'Live Projekt'); ?></span>
                    <h3 class="showcase-title">WeLoveEverythingCrypto</h3>
                    <p><?php echo manoga_t(
                        'Full-featured crypto news platform with multi-language support, real-time data, and AI-generated content.',
                        'Fuldt udstyret kryptonyheds-platform med flersproget support, realtidsdata og AI-genereret indhold.'
                    ); ?></p>
                    <a href="https://weloveeverythingcrypto.com" target="_blank" rel="noopener" class="btn btn-primary" style="margin-top: 1rem;">
                        <?php echo manoga_t('Visit Site', 'Besøg Side'); ?> <?php echo manoga_icon('external'); ?>
                    </a>
                </div>
            </div>

            <div class="showcase-item">
                <div class="showcase-image" style="background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Handball Stats</h3>
                        <p style="opacity: 0.8;"><?php echo manoga_t('Coming Soon', 'Kommer Snart'); ?></p>
                    </div>
                </div>
                <div class="showcase-overlay">
                    <span class="showcase-tag"><?php echo manoga_t('In Development', 'Under Udvikling'); ?></span>
                    <h3 class="showcase-title">Handball Stats App</h3>
                    <p><?php echo manoga_t(
                        'Advanced sports analytics platform with real-time tracking, player metrics, and AI predictions.',
                        'Avanceret sportsanalyse-platform med realtids tracking, spillermetrikker og AI-forudsigelser.'
                    ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="padding: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <h2 class="mb-1"><?php echo manoga_t('Ready to Build at 10x Speed?', 'Klar til at bygge 10 gange hurtigere?'); ?></h2>
            <p style="font-size: 1.25rem; margin-bottom: var(--space-md);">
                <?php echo manoga_t(
                    'Let\'s discuss your project and how vibecoding can bring it to life faster than you thought possible.',
                    'Lad os tale om dit projekt, og hvordan vibecoding kan bringe det til live hurtigere, end du troede muligt.'
                ); ?>
            </p>
            <div class="flex-center" style="gap: var(--space-sm); flex-wrap: wrap;">
                <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary btn-glow">
                    <?php echo manoga_t('Start Your Project', 'Start dit projekt'); ?>
                    <?php echo manoga_icon('arrow-right'); ?>
                </a>
                <a href="tel:<?php echo esc_attr(manoga_get_option('manoga_phone', '+4550587900')); ?>" class="btn btn-secondary">
                    <?php echo manoga_icon('phone'); ?>
                    <?php echo manoga_t('Call Now', 'Ring nu'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
