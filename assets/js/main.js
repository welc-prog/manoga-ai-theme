/**
 * Manoga AI Theme - Main JavaScript
 * Pure vanilla JS - no dependencies
 *
 * @package ManogaAI
 */

(function() {
    'use strict';

    // ============================================
    // DOM Ready
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
        initMobileMenu();
        initScrollReveal();
        initTypingEffect();
        initCounters();
        initContactForm();
        initSmoothScroll();
        initParallax();
    });

    // ============================================
    // Header Scroll Effect
    // ============================================
    function initHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScroll = 0;
        const scrollThreshold = 50;

        function handleScroll() {
            const currentScroll = window.pageYOffset;

            // Add scrolled class when past threshold
            if (currentScroll > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }

        // Throttled scroll handler
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initial check
        handleScroll();
    }

    // ============================================
    // Mobile Menu Toggle
    // ============================================
    function initMobileMenu() {
        const toggle = document.getElementById('menu-toggle');
        const nav = document.getElementById('main-nav');

        if (!toggle || !nav) return;

        toggle.addEventListener('click', function() {
            const isOpen = nav.classList.toggle('active');
            toggle.classList.toggle('active');
            toggle.setAttribute('aria-expanded', isOpen);

            // Toggle body scroll
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close menu when clicking a link
        nav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                nav.classList.remove('active');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav.classList.contains('active')) {
                nav.classList.remove('active');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
    }

    // ============================================
    // Scroll Reveal Animations
    // ============================================
    function initScrollReveal() {
        const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger');

        if (!reveals.length) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -100px 0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Unobserve after animation
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        reveals.forEach(function(el) {
            observer.observe(el);
        });
    }

    // ============================================
    // Typing Effect
    // ============================================
    function initTypingEffect() {
        const typingElements = document.querySelectorAll('.typing-text');

        typingElements.forEach(function(el) {
            const text = el.getAttribute('data-text') || el.textContent;
            el.textContent = '';

            let i = 0;
            const speed = 50;

            function typeWriter() {
                if (i < text.length) {
                    el.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }

            // Start typing when element is visible
            const observer = new IntersectionObserver(function(entries) {
                if (entries[0].isIntersecting) {
                    typeWriter();
                    observer.disconnect();
                }
            });

            observer.observe(el);
        });
    }

    // ============================================
    // Animated Counters
    // ============================================
    function initCounters() {
        const counters = document.querySelectorAll('.stat-number[data-count]');

        if (!counters.length) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(function(counter) {
            observer.observe(counter);
        });
    }

    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-count'), 10);
        const suffix = el.textContent.replace(/[0-9]/g, '');
        const duration = 2000;
        const start = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function (ease-out)
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(easeOut * target);

            el.textContent = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target + suffix;
            }
        }

        requestAnimationFrame(update);
    }

    // ============================================
    // Contact Form Handler
    // ============================================
    function initContactForm() {
        const form = document.getElementById('contact-form');
        if (!form) return;

        const messageEl = document.getElementById('form-message');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '<span class="loading">Sending...</span>';
            submitBtn.disabled = true;

            // Collect form data
            const formData = new FormData(form);
            formData.append('action', 'manoga_contact');
            formData.append('nonce', manogaAjax.nonce);

            // Send AJAX request
            fetch(manogaAjax.ajaxUrl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                // Show message
                messageEl.style.display = 'block';

                if (data.success) {
                    messageEl.className = 'form-success';
                    messageEl.innerHTML = '<p style="color: var(--success);">' + data.data + '</p>';
                    form.reset();
                } else {
                    messageEl.className = 'form-error';
                    messageEl.innerHTML = '<p style="color: var(--accent);">' + (data.data || 'An error occurred. Please try again.') + '</p>';
                }
            })
            .catch(function(error) {
                messageEl.style.display = 'block';
                messageEl.className = 'form-error';
                messageEl.innerHTML = '<p style="color: var(--accent);">Network error. Please try again.</p>';
            })
            .finally(function() {
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Hide message after 5 seconds
                setTimeout(function() {
                    messageEl.style.display = 'none';
                }, 5000);
            });
        });
    }

    // ============================================
    // Smooth Scroll
    // ============================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if just "#"
                if (href === '#') return;

                const target = document.querySelector(href);
                if (!target) return;

                e.preventDefault();

                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    // ============================================
    // Parallax Effect for Brain Animation
    // ============================================
    function initParallax() {
        const brain = document.querySelector('.ai-brain');
        if (!brain) return;

        let ticking = false;

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * 0.3;

                    // Only apply if element is in viewport
                    const rect = brain.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        brain.style.transform = 'translateY(' + rate + 'px)';
                    }

                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // ============================================
    // Glitch Effect on Hover
    // ============================================
    document.querySelectorAll('.glitch').forEach(function(el) {
        el.addEventListener('mouseenter', function() {
            this.style.animation = 'none';
            this.offsetHeight; // Trigger reflow
            this.style.animation = null;
        });
    });

    // ============================================
    // Cursor Effects (Optional - Desktop only)
    // ============================================
    if (window.matchMedia('(pointer: fine)').matches) {
        const cursor = document.createElement('div');
        cursor.className = 'custom-cursor';
        cursor.innerHTML = '<div class="cursor-dot"></div><div class="cursor-ring"></div>';
        document.body.appendChild(cursor);

        const dot = cursor.querySelector('.cursor-dot');
        const ring = cursor.querySelector('.cursor-ring');

        let mouseX = 0;
        let mouseY = 0;
        let ringX = 0;
        let ringY = 0;

        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.transform = 'translate(' + mouseX + 'px, ' + mouseY + 'px)';
        });

        // Smooth ring follow
        function animateRing() {
            ringX += (mouseX - ringX) * 0.15;
            ringY += (mouseY - ringY) * 0.15;
            ring.style.transform = 'translate(' + ringX + 'px, ' + ringY + 'px)';
            requestAnimationFrame(animateRing);
        }
        animateRing();

        // Hover effects
        document.querySelectorAll('a, button, .card').forEach(function(el) {
            el.addEventListener('mouseenter', function() {
                ring.style.transform = 'translate(' + ringX + 'px, ' + ringY + 'px) scale(1.5)';
                ring.style.borderColor = 'var(--primary)';
            });
            el.addEventListener('mouseleave', function() {
                ring.style.transform = 'translate(' + ringX + 'px, ' + ringY + 'px) scale(1)';
                ring.style.borderColor = 'var(--primary-light)';
            });
        });

        // Add cursor styles
        const style = document.createElement('style');
        style.textContent = `
            .custom-cursor {
                pointer-events: none;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999;
                mix-blend-mode: difference;
            }
            .cursor-dot {
                position: absolute;
                width: 8px;
                height: 8px;
                background: var(--primary);
                border-radius: 50%;
                transform: translate(-50%, -50%);
            }
            .cursor-ring {
                position: absolute;
                width: 40px;
                height: 40px;
                border: 2px solid var(--primary-light);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                transition: transform 0.15s ease, border-color 0.15s ease;
            }
            @media (max-width: 768px) {
                .custom-cursor { display: none; }
            }
        `;
        document.head.appendChild(style);
    }

})();
