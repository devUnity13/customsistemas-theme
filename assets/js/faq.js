/* ── FAQ accordion ── */
function toggleFaq(item) {
    const answer = item.querySelector('.faq-answer');
    const isOpen = item.classList.contains('open');

    document.querySelectorAll('.faq-item.open').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.faq-answer').style.maxHeight = '';
    });

    if (!isOpen) {
        item.classList.add('open');
        const inner = answer.querySelector('.faq-answer-inner');
        answer.style.maxHeight = inner.offsetHeight + 32 + 'px';
    }
}