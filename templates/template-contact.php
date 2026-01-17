<?php
/**
 * Template Name: Contact Page
 * Template for Contact page
 *
 * @package ManogaAI
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <span class="page-subtitle">Get In Touch</span>
        <h1><span class="text-gradient">Contact</span> Us</h1>
        <p style="max-width: 600px; margin: var(--space-sm) auto 0;">
            Ready to start your project? Have questions? Let's talk.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info reveal-left">
                <h2>Let's Build Something <span class="text-gradient">Amazing</span></h2>
                <p>
                    Whether you need AI consulting, a vibecoding project, digital marketing help, or want to upskill your team - I'm here to help. Let's talk about your needs.
                </p>

                <div class="contact-item">
                    <div class="contact-icon">
                        <?php echo manoga_icon('phone'); ?>
                    </div>
                    <div>
                        <strong>Phone</strong><br>
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
                            Connect with me
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <?php echo manoga_icon('location'); ?>
                    </div>
                    <div>
                        <strong>Business Registration</strong><br>
                        CVR: <?php echo esc_html(manoga_get_option('manoga_cvr', 'DK39733730')); ?><br>
                        Denmark
                    </div>
                </div>

                <div style="margin-top: var(--space-lg); padding: var(--space-md); background: rgba(99, 102, 241, 0.1); border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
                    <h4 style="margin-bottom: var(--space-xs);">Typical Response Time</h4>
                    <p style="margin: 0; color: var(--gray-light);">
                        I typically respond within 24 hours on business days. For urgent matters, please call directly.
                    </p>
                </div>
            </div>

            <div class="reveal-right">
                <form class="contact-form" id="contact-form" method="post">
                    <div class="form-group">
                        <label class="form-label" for="contact-name">Name *</label>
                        <input type="text" id="contact-name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-email">Email *</label>
                        <input type="email" id="contact-email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-phone">Phone</label>
                        <input type="tel" id="contact-phone" name="phone" class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-service">Service Interest</label>
                        <select id="contact-service" name="service" class="form-input">
                            <option value="">Select a service...</option>
                            <optgroup label="AI Services">
                                <option value="vibecoding">Vibecoding</option>
                                <option value="ai-consulting">AI Consulting</option>
                                <option value="workshops">AI Workshops</option>
                            </optgroup>
                            <optgroup label="Digital Marketing">
                                <option value="seo">SEO</option>
                                <option value="google-ads">Google Ads</option>
                                <option value="meta-ads">Meta Advertising</option>
                                <option value="webdesign">Web Design</option>
                                <option value="gtm">Google Tag Manager</option>
                            </optgroup>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-budget">Budget Range</label>
                        <select id="contact-budget" name="budget" class="form-input">
                            <option value="">Select budget range...</option>
                            <option value="5000-10000">5,000 - 10,000 DKK</option>
                            <option value="10000-25000">10,000 - 25,000 DKK</option>
                            <option value="25000-50000">25,000 - 50,000 DKK</option>
                            <option value="50000+">50,000+ DKK</option>
                            <option value="discuss">Let's discuss</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-message">Message *</label>
                        <textarea id="contact-message" name="message" class="form-textarea" required placeholder="Tell me about your project or question..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-full btn-glow">
                        Send Message
                        <?php echo manoga_icon('arrow-right'); ?>
                    </button>

                    <div id="form-message" style="margin-top: 1rem; display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
