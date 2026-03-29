<?php
/**
 * single-solucao-ponto.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "ponto".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-ponto.php → single-solucao.php → single.php
 *
 * O mega menu aponta para get_permalink() do post — zero config extra.
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
                <span>Ponto</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Controle de jornada · Automação
            </div>

            <h1>
                Gerenciamento efetivo da <span class="ct-hero__highlight">Jornada de Trabalho</span><br>
                em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle de tempo e possibilidade de configurações diversas, como banco de horas e jornadas flexíveis.
                Gerencie efetivamente a jornada de trabalho dos servidores públicos com automação completa.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+5.000</strong>
                    <span>servidores controlados</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>aderente às normas</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>24/7</strong>
                    <span>disponibilidade cloud</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver módulos
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Controle de Ponto">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Jornada registrada
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
        <div class="ct-trust__label">Tecnologia Betha</div>
        <div class="ct-trust__stats">
            <div class="ct-trust__item">
                <strong>+20 anos</strong>
                <span>de experiência</span>
            </div>
            <div class="ct-trust__item">
                <strong>500+</strong>
                <span>entidades atendidas</span>
            </div>
            <div class="ct-trust__item">
                <strong>99.9%</strong>
                <span>uptime garantido</span>
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
            <div class="section-label">Sobre o Ponto</div>
            <h2>Controle completo da jornada de trabalho</h2>
            <p>
                O sistema de ponto Betha oferece gerenciamento efetivo da jornada de trabalho dos servidores públicos,
                com controle preciso de tempo e flexibilidade para configurações diversas, incluindo banco de horas
                e jornadas flexíveis. Todas as marcações ficam registradas em ambiente de fácil acesso e pesquisa.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Registro detalhado da jornada</li>
                <li><i class="bi bi-check-circle-fill"></i> Flexibilidade na forma de marcação</li>
                <li><i class="bi bi-check-circle-fill"></i> Jornada de trabalho automatizada</li>
                <li><i class="bi bi-check-circle-fill"></i> Fórmulas personalizadas para cálculo</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-clock-history"></i>
                <h4>Registro Automatizado</h4>
                <p>Marcação automática de ponto com detecção de ocorrências fora do padrão.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-gear"></i>
                <h4>Configurações Flexíveis</h4>
                <p>Banco de horas, jornadas flexíveis e personalização de fórmulas de cálculo.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-shield-check"></i>
                <h4>Conformidade Legal</h4>
                <p>Atende às normas do Ministério do Trabalho e Portaria 1510/2009.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-graph-up"></i>
                <h4>Relatórios Detalhados</h4>
                <p>Controle completo de ausências, afastamentos e eventos extraordinários.</p>
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
            <div class="section-label">Módulos do Sistema</div>
            <h2>Módulos especializados para controle de ponto</h2>
            <p>Explore os módulos que compõem nossa solução completa de controle de jornada de trabalho.</p>
        </div>

        <div class="ct-modulos__grid">
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 100%, 50%">
                    <i class="bi bi-journal-check" style="color:#fff;"></i>
                </div>
                <h3>Registros Regulares</h3>
                <p>Registre ocorrências disciplinares como advertência, elogios ou suspensão, gerando afastamentos automáticos.</p>
                <ul>
                    <li>Advertências e elogios</li>
                    <li>Suspensões automáticas</li>
                    <li>Controle disciplinar</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-calendar-event" style="color:#fff;"></i>
                </div>
                <h3>Gestão das Marcações</h3>
                <p>Períodos de apuração, importação e manutenção das marcações em ambiente único e integrado.</p>
                <ul>
                    <li>Apuração automática</li>
                    <li>Importação flexível</li>
                    <li>Manutenção centralizada</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 100%, 50%">
                    <i class="bi bi-person-dash" style="color:#fff;"></i>
                </div>
                <h3>Controle de Ausências</h3>
                <p>Sistema completo para controle das ausências de todos os servidores com justificativas detalhadas.</p>
                <ul>
                    <li>Justificativas de faltas</li>
                    <li>Controle por servidor</li>
                    <li>Relatórios de ausência</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-stars" style="color:#fff;"></i>
                </div>
                <h3>Eventos Extraordinários</h3>
                <p>Controle de servidores que participaram de eventos especiais como campanhas de vacinação para concessão de folgas.</p>
                <ul>
                    <li>Campanhas especiais</li>
                    <li>Concessão de folgas</li>
                    <li>Eventos diferenciados</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 100%, 50%">
                    <i class="bi bi-hospital" style="color:#fff;"></i>
                </div>
                <h3>Controle de Afastamentos</h3>
                <p>Administração completa dos afastamentos para justificar faltas dos servidores de forma automatizada.</p>
                <ul>
                    <li>Afastamentos médicos</li>
                    <li>Licenças diversas</li>
                    <li>Justificativas automáticas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-arrow-left-right" style="color:#fff;"></i>
                </div>
                <h3>Permutas</h3>
                <p>Permita a permuta ou troca provisória de jornada entre trabalhadores de forma simples e controlada.</p>
                <ul>
                    <li>Trocas de jornada</li>
                    <li>Permutas temporárias</li>
                    <li>Controle automatizado</li>
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
            <h2>Por que escolher o Controle de Ponto Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">
            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-share"></i>
                </div>
                <div>
                    <h4>Facilidade no compartilhamento de informações</h4>
                    <p>Integração nativa com as soluções Folha e Recursos Humanos, facilitando o controle dos horários.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Atendimento às normas legais</h4>
                    <p>Atende às normas do Ministério do Trabalho e Previdência, conforme Portaria 1510/2009.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-tags"></i>
                </div>
                <div>
                    <h4>Distinção na identificação de informações</h4>
                    <p>Fácil identificação entre marcação importada, digitada, processada ou alterada.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-robot"></i>
                </div>
                <div>
                    <h4>Tarefas automatizadas</h4>
                    <p>Automatização de tarefas como permuta coletiva, controle de horários e turnos contínuos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-upload"></i>
                </div>
                <div>
                    <h4>Importações flexíveis</h4>
                    <p>Scripts de importação flexíveis com possibilidade de criar modelos específicos do cliente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-clock"></i>
                </div>
                <div>
                    <h4>Jornada automatizada</h4>
                    <p>Definição de jornadas com detecção automática de faltas, horas extras e afastamentos.</p>
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
            <h2>Integração completa com o ecossistema Betha</h2>
            <p>
                O Controle de Ponto se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão de RH e folha de pagamento.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-clock-history"></i>
                <span>Ponto</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Folha de Pagamento">
                <i class="bi bi-cash-stack"></i>
                <span>Folha</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Recursos Humanos">
                <i class="bi bi-people"></i>
                <span>RH</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Contabilidade">
                <i class="bi bi-calculator"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="E-social">
                <i class="bi bi-cloud-upload"></i>
                <span>E-social</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Tesouraria">
                <i class="bi bi-bank"></i>
                <span>Tesouraria</span>
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
                    "A implementação do sistema de ponto Betha revolucionou nosso controle de jornada.
                    A automação dos processos e a integração com a folha de pagamento trouxe eficiência
                    e precisão para nossa gestão de RH."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Maria Silva</strong>
                    <span>Diretora de RH - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Redução de 80% no tempo de processamento de folha</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Eliminação de erros manuais de cálculo</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Conformidade total com legislações trabalhistas</span>
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
            <h2>Dúvidas sobre o Controle de Ponto</h2>
        </div>

        <div class="ct-faq__list">
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível importar as marcações de relógios físicos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite importação flexível de marcações de relógios ponto físicos através de scripts personalizáveis, permitindo criar modelos específicos para cada cliente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema gera horas extras e faltas para descontar diretamente no sistema folha?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, a integração nativa com o sistema de folha de pagamento permite que horas extras, faltas e outras ocorrências sejam automaticamente calculadas e lançadas na folha de pagamento.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona o controle de banco de horas?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O sistema permite configurar banco de horas com controle automático de créditos e débitos, compensação de horas e relatórios detalhados para gestão eficiente da jornada flexível.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema atende às exigências da Portaria 1510/2009?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o Controle de Ponto Betha foi desenvolvido em conformidade com todas as exigências da Portaria 1510/2009 do Ministério do Trabalho e Previdência.</p>
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
            <i class="bi bi-clock-history"></i>
        </div>

        <h2>Pronto para automatizar o controle de jornada?</h2>
        <p>
            Entre em contato conosco e solicite uma demonstração personalizada
            do sistema de Controle de Ponto Betha para sua entidade.
        </p>

        <div class="ct-cta__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                <i class="bi bi-calendar-check"></i>
                Solicitar demonstração
            </a>
            <a href="https://centraldeajuda.betha.com.br/" target="_blank" class="btn-custom-outline btn-lg">
                <i class="bi bi-question-circle"></i>
                Central de ajuda
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

<?php get_footer(); ?></content>