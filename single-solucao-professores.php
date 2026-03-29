<?php
/**
 * single-solucao-professores.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "professores".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-professores.php → single-solucao.php → single.php
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════ -->
<section class="ct-hero">
    <div class="ct-hero__inner">

        <div class="ct-hero__content">

            <div class="ct-hero__breadcrumb">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: home_url( '/solucoes/' ) ); ?>">
                    <i class="bi bi-grid-3x3-gap"></i> Soluções
                </a>
                <i class="bi bi-chevron-right"></i>
                <span>Professores</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Rotina Docente · Inteligência
            </div>

            <h1>
                Gestão Ágil para os <span class="ct-hero__highlight">Professores</span><br>
                da Rede Municipal
            </h1>

            <p class="ct-hero__desc">
                Solução em nuvem que simplifica e agiliza as tarefas diárias do docente do planejamento de aulas 
                ao fechamento de médias, conectando toda a sala de aula diretamente à secretaria e aos pais.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>diário digitalizado</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>IA</strong>
                    <span>combate à evasão</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>10x+</strong>
                    <span>ganho de tempo</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver ferramentas
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Professores">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Diário Preenchido
                </div>
            </div>
        </div><!-- /.ct-hero__visual -->

    </div><!-- /.ct-hero__inner -->

    <!-- Decorative wave -->
    <div class="ct-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     2. TRUST BAR
     ════════════════════════════════════════════════════ -->
<section class="ct-trust">
    <div class="ct-trust__inner">
        <p class="ct-trust__label">Tecnologia Betha</p>
        <div class="ct-trust__stats">
            <div class="ct-trust__item">
                <strong>Prêmio UNESCO</strong>
                <span>inteligência preditiva</span>
            </div>
            <div class="ct-trust__item">
                <strong>+20 anos</strong>
                <span>de experiência educacional</span>
            </div>
            <div class="ct-trust__item">
                <strong>99.9%</strong>
                <span>estabilidade do sistema</span>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     3. SOBRE / O QUE É
     ════════════════════════════════════════════════════ -->
<section class="ct-about">
    <div class="ct-about__inner">

        <div class="ct-about__text">
            <div class="section-label">Sobre o Sistema</div>
            <h2>Foco na aprendizagem, não na burocracia</h2>
            <p>
                O sistema para Professores foi desenhado para eliminar processos morosos dos educadores, 
                trazendo um diário de classe digital completo. Isso os liberta da burocracia para focar no 
                que realmente importa: a aprendizagem de crianças e jovens no ambiente escolar.
            </p>
            <p>
                A tecnologia empregada integra inteligência artificial que sinaliza, a partir de faltas e notas, 
                quais alunos correm risco de abandonar os estudos, apoiando a equipe docente na intervenção precoce 
                e garantindo a máxima retenção educacional.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Substitui o diário de papel por uma plataforma web intuitiva</li>
                <li><i class="bi bi-check-circle-fill"></i> Cálculo automático de faltas, médias e conceitos</li>
                <li><i class="bi bi-check-circle-fill"></i> Identifica precocemente indícios de evasão</li>
                <li><i class="bi bi-check-circle-fill"></i> Integração direta ao portal dos pais</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-journal-bookmark-fill"></i>
                <h4>Diário de Classe</h4>
                <p>Todas as presenças, faltas e anotações didáticas no celular ou computador.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-camera-video-fill"></i>
                <h4>Flexibilidade EaD</h4>
                <p>Suporte de postagens para ambientes remotizados de ensino aprendizagem.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-calendar-event"></i>
                <h4>Quadro Exclusivo</h4>
                <p>Visualização instantânea dos horários, turmas atribuídas e disciplinas do dia.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Visão Completa 360°</h4>
                <p>Painéis didáticos sobre cada aluno para embasar a evolução pedagógica.</p>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     4. MÓDULOS
     ════════════════════════════════════════════════════ -->
<section id="modulos" class="ct-modulos">
    <div class="ct-modulos__inner">

        <div class="ct-modulos__header">
            <div class="section-label">Ferramentas Docentes</div>
            <h2>Tudo para facilitar a gestão na sala de aula</h2>
            <p>Explore as principais ferramentas do portal digital do professor municipal.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-journal-text" style="color:#fff;"></i>
                </div>
                <h3>Diário Digital Completo</h3>
                <p>Preenchimento flexível de planos de aulas e ocorrências.</p>
                <ul>
                    <li>Planejamento atrelado à BNCC</li>
                    <li>Registro do conteúdo ensinado</li>
                    <li>Anotações por turma ou data</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-person-check" style="color:#fff;"></i>
                </div>
                <h3>Frequência Inteligente</h3>
                <p>Chamadas feitas virtualmente de forma ágil com alertas.</p>
                <ul>
                    <li>Listagem nominal limpa e fácil</li>
                    <li>Tecnologia de Reconhecimento Facial</li>
                    <li>Notificações ao diretor por ausências</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-pencil-square" style="color:#fff;"></i>
                </div>
                <h3>Registro de Avaliações</h3>
                <p>Adeus às infindáveis calculadoras ao final dos trimestres.</p>
                <ul>
                    <li>Lançamento rápido múltiplo</li>
                    <li>Avaliação por notas ou por habilidades</li>
                    <li>Resultados refletidos instantaneamente</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-calendar-week" style="color:#fff;"></i>
                </div>
                <h3>Quadro de Horários</h3>
                <p>Agenda sempre no bolso ou tablet sem complicação.</p>
                <ul>
                    <li>Aulas e disciplinas distribuídas</li>
                    <li>Horário de planejamento e horários vagos</li>
                    <li>Aviso de substituições aprovadas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-robot" style="color:#fff;"></i>
                </div>
                <h3>Inteligência Artificial (Evasão)</h3>
                <p>Seja notificado preditivamente quem e qual perfil do aluno decaiu.</p>
                <ul>
                    <li>Alertas cruciais para o educador atuante</li>
                    <li>Recomendação ativa de foco no aluno</li>
                    <li>Ação precoce de salvamento de ano escolar</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-layout-text-window-reverse" style="color:#fff;"></i>
                </div>
                <h3>Dashboard Contextual</h3>
                <p>Uma visão 360 do desenvolvimento histórico e familiar do educando.</p>
                <ul>
                    <li>Indicadores visuais de retenção ou média</li>
                    <li>Recorrência clínica ou de dispensa</li>
                    <li>Contato de familiares centralizado</li>
                </ul>
            </div>

        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     5. BENEFÍCIOS
     ════════════════════════════════════════════════════ -->
<section class="ct-beneficios">
    <div class="ct-beneficios__inner">

        <div class="ct-beneficios__header">
            <div class="section-label">Benefícios</div>
            <h2>Por que digitalizar a rotina do educador?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Recuperação de Tempo Foco</h4>
                    <p>Ao tirar da frente o penoso trabalho braçal manual, os líderes pedagógicos reconquistam tempo para formular didáticas enriquecedoras.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-hdd-network"></i>
                </div>
                <div>
                    <h4>Integração em Tempo Real</h4>
                    <p>Com um clique de salvar, a secretaria, os dados do Censo e os portais de comunicação aos alunos já ficam sincronizados imediatamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-journal-check"></i>
                </div>
                <div>
                    <h4>Apoio na Base Nacional Comum</h4>
                    <p>O próprio ambiente facilita vincular habilidades ensinadas diretamente à base curricular definida (BNCC).</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-person-bounding-box"></i>
                </div>
                <div>
                    <h4>Frequência Biométrica Otimizada</h4>
                    <p>Modernidade via reconhecimento ativo facial garante controle ponta a ponta sem burlas e sem perder minutos primordiais de aula chamando.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <div>
                    <h4>Apoio Inteligente de IA Preditiva</h4>
                    <p>Recurso amplamente laureado mundialmente por apontar chances iminentes de fracasso ou total evasão na turma antes da desistência do jovem.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-phone-flip"></i>
                </div>
                <div>
                    <h4>Acesso Total Anywhere (Na nuvem)</h4>
                    <p>Permite registrar parciais de casa, no carro via celular ou de fato na quadra da escola sem depender exclusivamente de estar na sala conectada.</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     6. INTEGRAÇÕES
     ════════════════════════════════════════════════════ -->
<section class="ct-integracoes">
    <div class="ct-integracoes__inner">

        <div class="ct-integracoes__text">
            <div class="section-label">Integrações</div>
            <h2>No centro do ecossistema educacional colaborativo</h2>
            <p>
                A atuação docente dentro da solução conecta todos os pilares formadores,
                fomentando a atuação conjunta essencial entre secretarias, professores e responsáveis.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-briefcase"></i>
                <span>Professor</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Gestão Escolar">
                <i class="bi bi-building"></i>
                <span>A. Escolar</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Portal Mães/Pais">
                <i class="bi bi-people-fill"></i>
                <span>Famílias</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Ambientes Virtuais AVA">
                <i class="bi bi-google"></i>
                <span>Classroom</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Censo Mec">
                <i class="bi bi-file-earmark-text"></i>
                <span>Inep/MEC</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Recursos Humanos">
                <i class="bi bi-cash-stack"></i>
                <span>RH / Férias</span>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     7. CASE
     ════════════════════════════════════════════════════ -->
<section class="ct-case">
    <div class="ct-case__inner">

        <div class="ct-case__card">
            <div class="ct-case__quote">
                <i class="bi bi-quote"></i>
                <blockquote>
                    "Antes o fechamento de fim de trimestre representava um pesadelo logístico com montanhas de papéis 
                    e infindáveis retrabalhos na correção. O Diário do Professor web em nuvem nos fez redescobrir o que é 
                    ter vida útil para focar efetivamente em estratégias pedagógicas proativas ao invés de atuar feito robôs calculistas."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Sueli Nascimento</strong>
                    <span>Professora Orientadora - Rede Pública de Ensino</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término imediato no uso dispendioso em impressos de diários físicos</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Antecipação na identificação ativa de ausências e problemas acadêmicos locais</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Resgate em tempo e produtividade integral liberado ao ato de preparar aulas inovadoras</span>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     8. FAQ
     ════════════════════════════════════════════════════ -->
<section class="ct-faq">
    <div class="ct-faq__inner">

        <div class="ct-faq__header">
            <div class="section-label">Perguntas frequentes</div>
            <h2>Principais dúvidas sobre a plataforma do Professores</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema obriga a escola estar sempre online com internet contínua para computar informações nas salas?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O sistema central funciona online nativamente, permitindo que alterações remotas se consolidem assim que tiver conexão ativa. Diante de quedas de conectividade, pode operar rotineiramente do dispositivo mantido sem perda até que, ao encontrar conectividade normalizada, realize todo "batch upload" sincronizador com as secretarias sem complicação grave no cotidiano daquele docente em particular.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Quão segura se torna toda essa vasta base diária de notas alimentada?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Todo o traçado de dados e registros numéricos de resultados discentes inserido está abrigado integralmente blindado por rígidos protocolos em parques servidores ultra modernos AWS em formato Cloud-Computing nativo, oferecendo múltiplas redundâncias virtuais que previnem sinistros de perdas e salvaguardam por lei os backups totais criptografados segundo rito de governança LGPD.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    De que modo eficaz a Inteligência Artificial é vislumbrada em uso pleno pelo tutor da classe local?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Enquanto o educador lança dados convencionais (ausência simples do jovem), algoritmos invisíveis no retaguarda traçam paralelos em históricos extensivos globais da carteira ativa identificando se este menor exibe características sintomáticas graves (que podem evoluir sumariamente ao total abandono no semestre correspondente). O software então notifica visualmente um alerta na tela recomendando intervenção ou conselho focado de classe para não perder aquele jovem a curto prazo iminente.</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     9. CTA
     ════════════════════════════════════════════════════ -->
<section class="ct-cta">
    <div class="ct-cta__inner">

        <div class="ct-cta__icon">
            <i class="bi bi-pencil-square"></i>
        </div>

        <h2>Liberte seus pedagogos e docentes do emaranhado de papéis</h2>

        <p>
            Equipe seu quadro municipal atuante na linha de frente orientadora formativa escolar preenchendo todos 
            os requisitos oficiais normativos de modo 100% eletrônico e digitalizado veloz.
        </p>

        <div class="ct-cta__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                <i class="bi bi-calendar-check"></i>
                Agendar demonstração
            </a>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: home_url( '/solucoes/' ) ); ?>" class="btn-custom-outline btn-lg">
                <i class="bi bi-arrow-left"></i>
                Ver todas as soluções
            </a>
        </div>

    </div>
</section>

<script>
/* ── FAQ toggle específico desta página ── */
function ctToggleFaq(btn) {
    const item   = btn.closest('.ct-faq__item');
    const answer = item.querySelector('.ct-faq__answer');
    const icon   = btn.querySelector('i');
    const isOpen = item.classList.contains('is-open');

    // Fecha todos
    document.querySelectorAll('.ct-faq__item.is-open').forEach(el => {
        el.classList.remove('is-open');
        el.querySelector('.ct-faq__answer').style.maxHeight = null;
        el.querySelector('i').className = 'bi bi-plus-lg';
    });

    if (!isOpen) {
        item.classList.add('is-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.className = 'bi bi-dash-lg';
    }
}

/* ── Smooth scroll ── */
document.querySelectorAll('.ct-scroll-link').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>

<?php get_footer(); ?>
