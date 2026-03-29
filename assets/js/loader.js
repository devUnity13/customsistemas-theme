/* ══════════════════════════════════════════
   loader.js — Custom Sistemas · Page Loader
   ══════════════════════════════════════════ */

(function () {
    'use strict';

    /* ── 1. ESCONDE O LOADER QUANDO A PÁGINA TERMINAR DE CARREGAR ── */
    function hideLoader() {
        const loader = document.getElementById('page-loader');
        if (!loader) return;

        /* Completa a barra de progresso até 100% antes de sumir */
        const bar = loader.querySelector('.loader-progress');
        if (bar) {
            bar.style.transition = 'width .25s ease';
            bar.style.width = '100%';
        }

        setTimeout(function () {
            loader.classList.add('loader-hide');

            /* Remove do DOM após a transição para não bloquear nada */
            loader.addEventListener('transitionend', function () {
                loader.remove();
            }, { once: true });
        }, 260);
    }

    /* Dispara ao DOMContentLoaded (mais rápido que window.load) */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', hideLoader);
    } else {
        /* Página já carregada (cache) — esconde rapidinho */
        hideLoader();
    }

    /* ── 2. MOSTRA O LOADER AO NAVEGAR PARA OUTRA PÁGINA ── */
    function showLoader() {
        const existing = document.getElementById('page-loader');
        if (existing) {
            existing.classList.remove('loader-hide');
            return;
        }

        /* Recria o loader caso já tenha sido removido */
        const loader = buildLoader();
        document.body.appendChild(loader);
    }

    /* Intercepta cliques em links internos */
    document.addEventListener('click', function (e) {
        const link = e.target.closest('a');
        if (!link) return;

        const href = link.getAttribute('href');
        if (!href) return;

        /* Ignora: âncoras, links externos, target _blank, download, javascript: */
        if (
            href.startsWith('#') ||
            href.startsWith('mailto:') ||
            href.startsWith('tel:') ||
            href.startsWith('javascript:') ||
            link.target === '_blank' ||
            link.hasAttribute('download') ||
            link.origin !== location.origin
        ) return;

        /* Ignora modificadores de teclado (abrir em nova aba, etc.) */
        if (e.ctrlKey || e.metaKey || e.shiftKey || e.altKey) return;

        showLoader();
    });

    /* Garante que o loader também aparece no botão Voltar/Avançar */
    window.addEventListener('pageshow', function (e) {
        if (e.persisted) hideLoader(); /* página vinda do bfcache */
    });

    /* ── HELPER: MONTA O HTML DO LOADER ── */
    function buildLoader() {
        const el = document.createElement('div');
        el.id = 'page-loader';
        el.innerHTML = `
            <div class="loader-progress"></div>
            <img
                src="assets/img/custom_logo.png"
                alt="Custom Sistemas"
                class="loader-logo"
                onerror="this.style.display='none'"
            >
            <div class="loader-spinner-wrap">
                <div class="loader-spinner"></div>
                <span class="loader-text">Carregando...</span>
            </div>
        `;
        return el;
    }

})();