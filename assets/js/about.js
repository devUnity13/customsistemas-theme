(function () {
    'use strict';

    /* ── 1. CONTADOR ANIMADO DE ESTATÍSTICAS ── */
    function animateCounters() {
        const counters = document.querySelectorAll('.about-stat-number');

        counters.forEach(function (counter) {
            const target = parseInt(counter.getAttribute('data-target'), 10);
            const duration = 1800; // ms
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                // easeOutExpo
                const eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                const current = Math.round(eased * target);
                counter.textContent = current.toLocaleString('pt-BR');
                if (progress < 1) requestAnimationFrame(update);
            }

            requestAnimationFrame(update);
        });
    }

    /* ── 2. TIMELINE — FADE-IN AO SCROLL ── */
    function initTimelineObserver() {
        const items = document.querySelectorAll('.about-timeline-item');
        if (!items.length) return;

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });

        items.forEach(function (item) { observer.observe(item); });
    }

    /* ── 3. STATS — DISPARA CONTAGEM AO ENTRAR NA VIEWPORT ── */
    function initStatsObserver() {
        const statsBar = document.querySelector('.about-stats-bar');
        if (!statsBar) return;

        let triggered = false;

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !triggered) {
                    triggered = true;
                    animateCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.4 });

        observer.observe(statsBar);
    }

    /* ── 4. CARDS DE DESTAQUE — HOVER TILT SUAVE ── */
    function initCardTilt() {
        const cards = document.querySelectorAll('.about-highlight-card, .about-mv-card');

        cards.forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const cx = rect.width / 2;
                const cy = rect.height / 2;
                const rotX = ((y - cy) / cy) * -5;
                const rotY = ((x - cx) / cx) * 5;
                card.style.transform = 'perspective(600px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateY(-4px)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
            });
        });
    }

    /* ── 5. GENERIC FADE-IN AO SCROLL ── */
    function initFadeIn() {
        const els = document.querySelectorAll(
            '.about-who-text, .about-who-highlights, .about-value-item, .about-mv-card, .about-highlight-card'
        );

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    setTimeout(function () {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, i * 60);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        els.forEach(function (el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity .5s ease, transform .5s ease';
            observer.observe(el);
        });
    }

    /* ── INIT ── */
    function init() {
        initStatsObserver();
        initTimelineObserver();
        initCardTilt();
        // initFadeIn();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
