/* ══════════════════════════════════════════
   suporte.js — Custom Sistemas · Suporte Técnico
   ══════════════════════════════════════════ */

(function () {
    'use strict';

    /* ── 1. FAQ ACCORDION ── */
    function initFaq() {
        const questions = document.querySelectorAll('.suporte-faq-question');

        questions.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                const answer = btn.nextElementSibling;

                // Fecha todos os outros
                questions.forEach(function (otherBtn) {
                    if (otherBtn !== btn) {
                        otherBtn.setAttribute('aria-expanded', 'false');
                        const otherAnswer = otherBtn.nextElementSibling;
                        if (otherAnswer) otherAnswer.classList.remove('open');
                    }
                });

                // Toggle o atual
                btn.setAttribute('aria-expanded', String(!expanded));
                if (answer) answer.classList.toggle('open', !expanded);
            });
        });
    }

    /* ── 2. SCROLL SUAVE PARA ÂNCORAS INTERNAS ── */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                const target = document.querySelector(link.getAttribute('href'));
                if (!target) return;
                e.preventDefault();
                const offset = 80; // altura da navbar
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: top, behavior: 'smooth' });
            });
        });
    }

    /* ── 3. FADE-IN AO SCROLL ── */
    function initFadeIn() {
        const targets = document.querySelectorAll(
            '.suporte-canal-card, .suporte-recurso-card, .suporte-faq-item, .suporte-ticket-info, .suporte-ticket-visual'
        );

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    const delay = (entry.target.dataset.fadeDelay || i) * 80;
                    setTimeout(function () {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        targets.forEach(function (el, i) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(22px)';
            el.style.transition = 'opacity .5s ease, transform .5s ease';
            el.dataset.fadeDelay = i;
            observer.observe(el);
        });
    }

    /* ── 4. HOVER TILT NOS CARDS ── */
    function initTilt() {
        const cards = document.querySelectorAll('.suporte-canal-card, .suporte-recurso-card');

        cards.forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const rotX = ((y - rect.height / 2) / rect.height) * -5;
                const rotY = ((x - rect.width / 2) / rect.width) * 5;
                card.style.transform = 'perspective(700px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateY(-5px)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
            });
        });
    }

    /* ── 5. ANIMAÇÃO DE DIGITAÇÃO NO MOCKUP ── */
    function initMockupTyping() {
        const textarea = document.querySelector('.suporte-mockup-textarea');
        if (!textarea) return;

        const text = 'Ao tentar gerar a folha, aparece o erro código 500...';
        let index = 0;
        let typingStarted = false;
        let textNode = null;

        const observer = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting && !typingStarted) {
                typingStarted = true;
                textNode = document.createTextNode('');
                const cursor = textarea.querySelector('.suporte-mockup-cursor');
                if (cursor) {
                    textarea.insertBefore(textNode, cursor);
                } else {
                    textarea.appendChild(textNode);
                }
                typeChar();
                observer.disconnect();
            }
        }, { threshold: 0.5 });

        observer.observe(textarea);

        function typeChar() {
            if (index < text.length) {
                textNode.textContent += text[index];
                index++;
                setTimeout(typeChar, 42 + Math.random() * 40);
            }
        }
    }

    /* ── INIT ── */
    function init() {
        initFaq();
        initSmoothScroll();
        // initFadeIn();
        initTilt();
        initMockupTyping();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();