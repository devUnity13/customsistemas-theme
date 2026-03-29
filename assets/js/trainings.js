/* Mapeamento das trilhas para badges */
const capTrilhaLabels = {
    contabilidade: { label: '📋 Contabilidade', classe: 'badge-contabilidade' },
    tributos: { label: '💰 Tributos', classe: 'badge-tributos' },
    rh: { label: '👥 RH & Folha', classe: 'badge-rh' },
    orcamento: { label: '🏛️ Orçamento', classe: 'badge-orcamento' },
    compras: { label: '🛒 Compras', classe: 'badge-compras' },
    patrimonio: { label: '🏗️ Patrimônio', classe: 'badge-patrimonio' },
};

/* Abrir vídeo no player */
function capAssistir(video) {
    // Marca como ativo na lista
    document.querySelectorAll('.cap-video-item').forEach(function (el) {
        el.classList.remove('ativo');
    });
    event.currentTarget.classList.add('ativo');

    // Esconde placeholder
    document.getElementById('capPlayerPlaceholder').style.display = 'none';

    /* Em produção, o youtube_id seria real. 
       Aqui simulamos carregando um embed do canal da Betha:
       Substitua os youtube_id pelos IDs reais dos vídeos da Betha Sistemas */
    var iframe = document.getElementById('capIframe');
    iframe.src = 'https://www.youtube.com/embed/' + video.youtube_id + '?autoplay=1';
    // Como os IDs são placeholder, exibimos o iframe apontando para o canal da Betha
    //iframe.src = 'about:blank';
    iframe.style.display = 'block';

    // Mostra info do vídeo atual
    var cur = document.getElementById('capPlayerCurrent');
    var lbl = capTrilhaLabels[video.trilha];
    document.getElementById('capCurrentBadge').className = 'cap-current-badge ' + lbl.classe;
    document.getElementById('capCurrentBadge').textContent = lbl.label;
    document.getElementById('capCurrentTitulo').textContent = video.titulo;
    document.getElementById('capCurrentDesc').textContent = video.desc;
    document.getElementById('capCurrentDuracao').textContent = '⏱ ' + video.duracao;
    cur.style.display = 'block';

    // Scroll suave até o player em mobile
    if (window.innerWidth <= 1024) {
        document.querySelector('.cap-player-embed').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

/* Filtrar por trilha */
var capFiltroAtivo = 'todos';

function capFiltrar(btn) {
    capFiltroAtivo = btn.getAttribute('data-filtro');
    document.querySelectorAll('.cap-filtro').forEach(function (b) { b.classList.remove('ativo'); });
    btn.classList.add('ativo');
    capAplicarFiltros();
}

/* Busca */
function capBuscar(valor) {
    capAplicarFiltros(valor.toLowerCase());
}

function capAplicarFiltros(busca) {
    busca = busca !== undefined ? busca : document.getElementById('capBusca').value.toLowerCase();
    var itens = document.querySelectorAll('#capVideoLista .cap-video-item');
    var visiveis = 0;
    itens.forEach(function (item) {
        var trilha = item.getAttribute('data-trilha');
        var titulo = item.getAttribute('data-titulo');
        var passaTrilha = capFiltroAtivo === 'todos' || trilha === capFiltroAtivo;
        var passaBusca = !busca || titulo.includes(busca);
        if (passaTrilha && passaBusca) {
            item.style.display = '';
            visiveis++;
        } else {
            item.style.display = 'none';
        }
    });
    document.getElementById('capSemResultados').style.display = visiveis === 0 ? 'flex' : 'none';
    document.getElementById('capSemResultados').style.flexDirection = 'column';
    document.getElementById('capSemResultados').style.alignItems = 'center';
}

/* Abrir trilha pelo card de trilhas */
function capAbrirTrilha(trilhaId) {
    document.getElementById('videos').scrollIntoView({ behavior: 'smooth', block: 'start' });
    setTimeout(function () {
        var btn = document.querySelector('[data-filtro="' + trilhaId + '"]');
        if (btn) capFiltrar(btn);
    }, 600);
}

/* Formulário de agendamento */
document.getElementById('capForm').addEventListener('submit', function (e) {
    e.preventDefault();
    this.style.display = 'none';
    document.getElementById('capSuccess').style.display = 'block';
});

/* Máscara de telefone */
document.getElementById('cap-telefone').addEventListener('input', function (e) {
    var v = e.target.value.replace(/\D/g, '');
    if (v.length <= 2) v = '(' + v;
    else if (v.length <= 7) v = '(' + v.slice(0, 2) + ') ' + v.slice(2);
    else v = '(' + v.slice(0, 2) + ') ' + v.slice(2, 7) + '-' + v.slice(7, 11);
    e.target.value = v;
});

/* Scroll suave */
document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});