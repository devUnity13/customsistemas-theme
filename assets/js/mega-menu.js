/* ── Mega menu ── */
let megaOpen = false;

function toggleMega() {
    megaOpen = !megaOpen;
    document.getElementById('megaPanel').classList.toggle('open', megaOpen);
    document.getElementById('megaOverlay').classList.toggle('active', megaOpen);
    document.getElementById('solucoesItem').classList.toggle('open', megaOpen);
}

function closeMega() {
    megaOpen = false;
    document.getElementById('megaPanel').classList.remove('open');
    document.getElementById('megaOverlay').classList.remove('active');
    document.getElementById('solucoesItem').classList.remove('open');
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMega(); });

/* ── Mobile drawer ── */
function toggleMobile() {
    const drawer = document.getElementById('mobileDrawer');
    const burger = document.getElementById('hamburger');
    const isOpen = drawer.classList.toggle('open');
    burger.classList.toggle('active', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
}

function toggleMobileSub(btn) {
    const sub = btn.nextElementSibling;
    sub.classList.toggle('open');
    const icon = btn.querySelector('i');
    icon.style.transform = sub.classList.contains('open') ? 'rotate(180deg)' : '';
}