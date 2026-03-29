/* ── Navbar scroll ── */
window.addEventListener('scroll', () => {
    document.getElementById('siteNav').classList.toggle('scrolled', window.scrollY > 10);
});

function openSearch() {
    const overlay = document.getElementById('searchOverlay');
    const input = overlay.querySelector('input');

    overlay.classList.add('active');
    setTimeout(() => input.focus(), 200);
}

function closeSearch() {
    const overlay = document.getElementById('searchOverlay');
    overlay.classList.remove('active');
}

/* Fechar com ESC */
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeSearch();
    }
});
