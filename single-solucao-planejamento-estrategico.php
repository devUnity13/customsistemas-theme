<?php
/**
 * single-solucao-planejamento-estrategico.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "planejamento-estrategico".
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
                <span>Planejamento Estratégico</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                Gestão · Planejamento · Tecnologia
            </div>

            <h1>
                Gestão transparente com o <br>
                <span class="ct-hero__highlight">Planejamento</span> Estratégico
            </h1>

            <p class="ct-hero__desc">
                Otimize a gestão estratégica do seu município com tecnologia, integração e controle. A solução proporciona uma visão clara dos objetivos, indicadores e resultados, garantindo o alinhamento das ações com as metas públicas.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>alinhamento PPA</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>SWOT</strong>
                    <span>análise central</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Apoio</strong>
                    <span>decisões ágeis</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver recursos
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-planejamento.png'; ?>" alt="Mockup Planejamento Estratégico" onerror="this.src='https://placehold.co/600x400/a39382/ffffff?text=Interface+Planejamento'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Mapa Estratégico
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
            <div class="section-label">Sobre o Sistema</div>
            <h2>Metas e Obras alinhadas às expectativas sociais</h2>
            <p>
                A solução de Planejamento Estratégico oferece um conjunto robusto de ferramentas baseadas nas melhores práticas da gestão pública, cobrindo todas as etapas do ciclo de gestão estratégica municipal de ponta a ponta.
            </p>
            <p>
                Com foco em resultados e governança, permite que a prefeitura contemple uma visão integrada de suas metas e indicadores (KPIs), facilitando o acompanhamento de projetos e iniciativas através de ferramentas analíticas modernas.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Mapa Estratégico visual para as metas prioritárias nativas</li>
                <li><i class="bi bi-check-circle-fill"></i> Conectividade e integração à contabilidade de custos gerencial</li>
                <li><i class="bi bi-check-circle-fill"></i> Painéis modernos de análise SWOT e métodos 5W2H embarcados</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão contínua de projetos avaliando pendências e andamento financeiro</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-graph-up"></i>
                <h4>Monitoramento Real</h4>
                <p>Mensure o avanço e entregas da secretaria visualizando claramente onde o orçamento reage.</p>
            </div>
            <div class="ct-about__card ct-about__card--primary">
                <i class="bi bi-diagram-3-fill"></i>
                <h4>Matriz de Riscos</h4>
                <p>Identificação precoce impedindo desastres executivos nas grandes diretrizes prioritárias.</p>
            </div>
            <div class="ct-about__card ct-about__card--primary">
                <i class="bi bi-check2-all"></i>
                <h4>Vinculação PPA</h4>
                <p>Garante alinhamento irrestrito do Planejamento Prático focado ao escopo exigido de 4 anos Plurianual.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-file-earmark-check"></i>
                <h4>Probatórios</h4>
                <p>Anexe licenças ou imagens comprovando com forte respaldo a materialidade das obras executadas.</p>
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
            <h2>Organize o desenvolvimento passo a passo</h2>
            <p>Confira as funcionalidades encarregadas de traduzir planejamento retórico em controle tangível na caneta do Prefeito.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-map-fill" style="color:#fff;"></i>
                </div>
                <h3>Mapa Estratégico</h3>
                <p>Plante suas visões através de ferramentas de desenho visual simplificadas traçando onde cada secretaria entra no macro plano anual validado.</p>
                <ul>
                    <li>Perspectivas fáceis e ilustradas na base</li>
                    <li>Reforço na cultura dos resultados governamentais</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-kanban-fill" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Projetos e KPIs</h3>
                <p>Fisgue metas isoladas alocando orçamentos reais, estipulando fases da planta, rastreando desvios na gestão em andamentos engenhados.</p>
                <ul>
                    <li>Definição contundente de Escopos tangíveis</li>
                    <li>Gerenciamento transparente de gargalos das obras federais</li>
                    <li>Controle de cronogramas integrados</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-ui-checks" style="color:#fff;"></i>
                </div>
                <h3>Análises SWOT e 5W2H</h3>
                <p>Disponibiliza aos diretores engrenagens consagradas em ambientes ágeis definindo planos de ação estipulados e aderentes.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-bank2" style="color:#fff;"></i>
                </div>
                <h3>Interligação API Geral Contábil</h3>
                <p>Puxa fidedignos empenhos reais extraídos na tesouraria integrando estritamente custos consumidos em projetos elaborados na ponta visível sem repetições cadastrais desgastantes operacionais.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-bar-chart-fill" style="color:#fff;"></i>
                </div>
                <h3>Dashboards e Exibições</h3>
                <p>Monitores coloridos ressaltando faturamentos mensurando KPIs engenhados na visualização consolidada limpa e interativa simplificando análises densas e volumosas.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-shield-exclamation" style="color:#fff;"></i>
                </div>
                <h3>Monitoração Plena e Riscos</h3>
                <p>Enquadre ameaças estrututais calculando impactos de quebra alertando sobre gargalos legais e contratempos burocráticos evitando atrasos estressantes públicos severos e danosos.</p>
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
            <h2>Excelência gerencial enraizada</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-eye"></i>
                </div>
                <div>
                    <h4>Visão Limpa dos Objetivos</h4>
                    <p>Facilita o alinhamento das ações, removendo as teias burocráticas estipuladas ao permitir intuição na hora de entender prioridades em jogo.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--primary">
                    <i class="bi bi-laptop"></i>
                </div>
                <div>
                    <h4>Direcionamento Dinâmico</h4>
                    <p>Painéis flexíveis que reagem antecipadamente, estancando excessos ou perdas do cronograma que atrasam entregatórios aguardados pela sociedade civil local.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--primary">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div>
                    <h4>Integração do Secretariado</h4>
                    <p>Conduz todo o núcleo político num consenso visível forçando integração colaborativa amarrada no projeto principal do gabinete geral.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-arrow-repeat"></i>
                </div>
                <div>
                    <h4>Rotina Sustentável Central</h4>
                    <p>Elimina retrabalhos puxando recursos de outras soluções desaguando nas aprovações de projetos otimizando trâmites engessados por planilhas.</p>
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
            <h2>A central do controle total municipal</h2>
            <p>
                Conectividade garantida e amarrada puxando valores de cada base prefeitoral para desenhar visualmente a aplicação correta em projetos na linha orçamentária.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-signpost-split-fill"></i>
                <span>ESTRATÉGIA</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Gestor P.">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Portal Gestor</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl" title="Contábil">
                <i class="bi bi-journal-text"></i>
                <span>Contabilidade</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l" title="PPA">
                <i class="bi bi-archive-fill"></i>
                <span>Plano Plur.</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl" title="Compras">
                <i class="bi bi-cart"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Transp.">
                <i class="bi bi-search"></i>
                <span>Transparência</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Jurídico">
                <i class="bi bi-bank"></i>
                <span>Jurídico</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="RH">
                <i class="bi bi-people-fill"></i>
                <span>Recursos H.</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Arrecadação">
                <i class="bi bi-cash-coin"></i>
                <span>Tributos</span>
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
                    "O salto em organização foi espantoso. Antes o plano e os projetos repousavam apagados numa planilha engessada perdida sem fim na chefia controlada por e-mails demorados. Agora a central de Planejamento desenhou o mapa geral, engata no empenho e avisa visualmente o progresso do orçamento real, alinhado ao Plano PPA integradamente resolvendo dúvidas de desvios velozmente na raiz dos problemas das pastas responsáveis isoladas sem confusões arrastadas nas secretarias gerais prefeiturais interligadas firmes consolidadamente prontas nas metas atingidas estipuladas rigorosamente em tela cheia centralizadora e clara para todos engajados no comitê diário matinal."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Célio Martins</strong>
                    <span>Secretário de Planejamento Urbano e Metas</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Impacto efetivo:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término de projetos travados por falhas comunicativas esquecidas</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Sincronicidade contábil nativa demonstrando os consumos do ciclo orçamentário</span>
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
            <h2>Principais dúvidas do sistema</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona a ligação direta e intrínseca entre os novos projetos idealizados pela equipe técnica e estruturadora governamental na ponta analítica engajada com os crivos e verbas contidos exigidos anuais pelo Plano Plurianual (PPA) rigorosamente contábil validado imposto?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>A ferramenta opera com laço intrínseco contábil, ou seja, para iniciar um projeto, os envolvidos podem e devem amarrá-lo diretamente e rigorosamente à sua rubrica no PPA, assegurando destinação fiscal sem deslizes administrativos e apontando coerência e responsabilidade com gastos programados da entidade governamental mantenedora estipulada evitando inconformidades e desencontros contábeis custosos pesados e danosos burocráticos arrastados nas pastas gerenciais e contábeis interligadas sempre em conformidade nativa e validada estritamente contida nas despesas.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Essas metodologias como Análise SWOT, 5W2H e Matrizes limitam-se ao simples preenchimento de papéis estáticos anexáveis estagnados visualmente enlatados preenchidos mortos sem interações no corpo dos relatórios preenchidos ou integram efetivamente painéis monitoráveis dinamicamente demonstrando riscos evoluídos diários nas avaliações?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Eles integram completamente a vida do acompanhamento operacional! Após registrar preenchimentos do método, os painéis e radares de projetos engolem e monitoram indicativos contidos em telas vivas vibrantes gerando flags gerenciais sinalizantes se uma ameaça preenchida se materializar e abocanhar orçamentos reais, cobrando os responsáveis estipulados nominalmente exigidos ativos apurados integradamente nas engrenagens operacionais consolidados e visados nas abas interativas dos monitores executivos das direções atentas ativas no percurso.</p>
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
            <i class="bi bi-flag-fill"></i>
        </div>

        <h2>Traga o controle e as rédeas dos projetos municipais</h2>

        <p>
            Capacite líderes engajando suas secretarias provendo direcionamento impecável consolidado em painéis unificados analíticos mapeando caminhos eficientes validados garantidos no sucesso da pasta municipal.
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
