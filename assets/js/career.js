function openCarreiraModal(vaga) {
    document.getElementById('carreiraModal').classList.add('active');
    document.getElementById('vagaSelecionada').textContent = vaga;
    document.getElementById('vaga').value = vaga;
    document.body.style.overflow = 'hidden';
}
function closeCarreiraModal() {
    document.getElementById('carreiraModal').classList.remove('active');
    document.body.style.overflow = '';
    setTimeout(function () {
        document.getElementById('carreiraForm').reset();
        document.getElementById('carreiraSuccess').style.display = 'none';
        document.getElementById('carreiraForm').style.display = 'block';
    }, 300);
}
document.getElementById('carreiraModal').addEventListener('click', function (e) {
    if (e.target === this) closeCarreiraModal();
});
document.getElementById('carreiraForm').addEventListener('submit', function (e) {
    e.preventDefault();
    this.style.display = 'none';
    document.getElementById('carreiraSuccess').style.display = 'block';
});
document.getElementById('telefone').addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, '');
    if (v.length <= 2) v = '(' + v;
    else if (v.length <= 7) v = '(' + v.slice(0, 2) + ') ' + v.slice(2);
    else v = '(' + v.slice(0, 2) + ') ' + v.slice(2, 7) + '-' + v.slice(7, 11);
    e.target.value = v;
});