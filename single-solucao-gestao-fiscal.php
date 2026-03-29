<?php
/**
 * single-solucao-gestao-fiscal.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "gestao-fiscal".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-gestao-fiscal.php → single-solucao.php → single.php
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
                <span>Gestão Fiscal</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Inteligência · Arrecadação
            </div>

            <h1>
                Inteligência e <span class="ct-hero__highlight">Gestão Fiscal</span><br>
                Municipal em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Solução completa para auditores fiscais. Ganhe agilidade e controle na identificação de indícios de sonegação através de fiscalização inteligente, aumentando a arrecadação municipal.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>inteligência fiscal</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>+ Arrecadação</strong>
                    <span>recuperação de receitas</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Gestão Fiscal">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Malha Fiscal Ativa
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
            <h2>Fiscalização inteligente e eficiente</h2>
            <p>
                O sistema de Gestão Fiscal Betha oferece uma solução robusta para os auditores e fiscais do município. 
                Utilizando cruzamentos de dados avançados e malha fiscal, é possível identificar indícios de sonegação 
                com rapidez e precisão.
            </p>
            <p>
                Através de recursos como o Domicílio Tributário Eletrônico (DTE) e a Digitalização do Litígio, 
                a comunicação com o contribuinte se torna direta, segura e econômica, reduzindo os custos operacionais 
                e o tempo de tramitação dos processos administrativos e notificações.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Inteligência na identificação de sonegadores</li>
                <li><i class="bi bi-check-circle-fill"></i> Cruzamento de dados de Cartões e Cartórios</li>
                <li><i class="bi bi-check-circle-fill"></i> Comunicação direta via DTE</li>
                <li><i class="bi bi-check-circle-fill"></i> Digitalização de litígios e processos fiscais</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-shield-lock"></i>
                <h4>Malha Fiscal</h4>
                <p>Cruzamento de dados com o Simples Nacional e outras fontes seguras.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-envelope-paper-fill"></i>
                <h4>Domicílio Eletrônico</h4>
                <p>Notificações seguras, ágeis e válidas diretamente no DTE.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-file-earmark-check-fill"></i>
                <h4>Digitalização</h4>
                <p>Gestão completa de processos analíticos e litígios fiscais da prefeitura.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Maior Arrecadação</h4>
                <p>Otimização das auditorias para recuperar e cobrar receitas eficientemente.</p>
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
            <h2>Recursos para maximizar resultados</h2>
            <p>Explore as funcionalidades que compõem nossa solução completa de inteligência fiscal municipal.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-search" style="color:#fff;"></i>
                </div>
                <h3>Inteligência Fiscal</h3>
                <p>Recursos avançados de malha para auditar divergências de informações.</p>
                <ul>
                    <li>Receitas do Simples Nacional</li>
                    <li>Informações de Cartórios</li>
                    <li>Operações de Cartão de Crédito/Débito</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-envelope-at" style="color:#fff;"></i>
                </div>
                <h3>Domicílio Tributário Eletrônico</h3>
                <p>Comunicação oficial e totalmente digital e segura com todos os contribuintes.</p>
                <ul>
                    <li>Redução de custos com AR</li>
                    <li>Notificações com validade legal</li>
                    <li>Gestão do ciente automático</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-journal-text" style="color:#fff;"></i>
                </div>
                <h3>Digitalização do Litígio</h3>
                <p>Controle unificado dos processos administrativos e disputas fiscais.</p>
                <ul>
                    <li>Prazos e datas importantes</li>
                    <li>Movimentação entre partes</li>
                    <li>Registro de pareceres do auditor</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-shield-check" style="color:#fff;"></i>
                </div>
                <h3>Prevenção à Sonegação</h3>
                <p>Mapeie rapidamente quem está em desconformidade e fraude com o fisco civil.</p>
                <ul>
                    <li>Identificação de indícios rápidos</li>
                    <li>Notificações automáticas em massa</li>
                    <li>Otimização do tempo do auditor</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-diagram-3" style="color:#fff;"></i>
                </div>
                <h3>Gestão Setorizada</h3>
                <p>Organize, distribua e acompanhe o andamento das ações fiscais e auditorias.</p>
                <ul>
                    <li>Acompanhamento segmentado</h3>
                    <li>Visão de produtividade</h3>
                    <li>Controle ágil de tarefas e fiscal</h3>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-compass" style="color:#fff;"></i>
                </div>
                <h3>Ações Orientadoras</h3>
                <p>Promova fiscalizações com caráter educativo, amigável e puramente preventivo.</p>
                <ul>
                    <li>Notificações e informes prévios</li>
                    <li>Orientação focada ao contribuinte</li>
                    <li>Evita desgaste e litígios</li>
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
            <h2>Por que escolher o Sistema de Gestão Fiscal Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div>
                    <h4>Aumento de Arrecadação</h4>
                    <p>Recupere receitas municipais identificando com precisão falhas nas declarações de contribuintes.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <div>
                    <h4>Eficiência na Auditoria</h4>
                    <p>Otimize ativamente o tempo de fiscalização, direcionando o foco nos casos graves de evasão.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-x-circle"></i>
                </div>
                <div>
                    <h4>Prevenção de Sonegação</h4>
                    <p>Feche as brechas históricas da sonegação fiscal adotando inteligência integrada e dados cruzados.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-chat-square-text"></i>
                </div>
                <div>
                    <h4>Comunicação Ágil e Legal</h4>
                    <p>Interaja legalmente com o contribuinte via DTE sem gastar nunca com impressões ou Correios.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-check2-all"></i>
                </div>
                <div>
                    <h4>Gestão Inteligente de Cientes</h4>
                    <p>Acompanhamento automatizado e preciso das leituras de intimações e inícios de prazos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-cloud-check"></i>
                </div>
                <div>
                    <h4>Ambiente Totalmente em Nuvem</h4>
                    <p>Sistema web veloz, acessível de qualquer lugar, contando ainda com segurança e backup rigoroso.</p>
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
                O sistema de Gestão Fiscal conecta-se fluidamente a diversos módulos da área de 
                arrecadação para cruzar e centralizar informações analíticas indispensáveis.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-search"></i>
                <span>Gestão Fiscal</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Arrecadação">
                <i class="bi bi-wallet2"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Nota Fiscal">
                <i class="bi bi-receipt"></i>
                <span>NFS-e</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Procuradoria">
                <i class="bi bi-bank"></i>
                <span>Procuradoria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Contábil">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Dívida Ativa">
                <i class="bi bi-file-earmark-spreadsheet"></i>
                <span>Dívida Ativa</span>
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
                    "Com a ferramenta de cruzamento de dados de cartões de crédito e o painel do Simples Nacional, 
                    conseguimos facilmente triplicar nossa eficiência local nas autuações e notificações justas, 
                    recuperando finalmente receitas essenciais que antes estavam perdidas na sonegação contínua."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Carlos Almeida</strong>
                    <span>Auditor Fiscal de Tributos</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Aumento rápido e expressivo na arrecadação direta</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Economia drástica de custos com postagens e impressos (DTE)</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Identificação dinâmica de pendências e inconsistências</span>
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
            <h2>Principais dúvidas sobre a Gestão Fiscal</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    De que maneira contínua o sistema apoia na malha fiscal?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O Gestão Fiscal realiza ativamente o cruzamento automatizado da receita bruta do painel Simples Nacional e monitora em paralelo os dados de repasses de construtoras civil/cartórios, bem como registros bancários de maquininhas de crédito/débito visando apontar com eficácia desvios divergentes prejudiciais em relação aos valores declarados formalmente pelo comerciante infrator ou desatento contribuinte da localidade pública municipal monitorada pela base integrada vigente sistemicamente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Na prática o que significa operar através do Domicílio Tributário Eletrônico (DTE)?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Em resumo geral o popular DTE (Domicílio Tributário Eletrônico) figura como uma robusta plataforma online segura contida e unificada dentro das engrenagens lógicas do sistema matriz do fisco municipal habilitante desta suíte fiscal inteligente. Através deste balcão eletrônico digitalizado de trocas bidirecionais documentais online, a secretaria de finanças ou prefeitura municipal efetua instantaneamente o disparo rápido massivo de múltiplas notificações em tempo integral a todos participantes registrados substituindo antigas praxes burocráticas vagarosas com correspondenciais remetidas localmente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Consigo gerenciar amplamente todo fluxo dos processos analíticos em autuações abertas?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, é plenamente viável! Especificamente utilizando módulo específico e focado na Digitalização e Tramitação completa virtualizada de cada aspecto processual administrativo das pendencias vinculadas ao Litígio perante ao paço burocrático, os inspetores atuantes avaliam em lote cada uma detalhadamente ou supervisionam individualmente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O auditor saberá de imediato ou posteriormente se aquela notificação gerou resposta visível recebida adequadamente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Efetivamente, de posse das prerrogativas gerenciais provenientes das ferramentas aplicadas na interface modular da Gestão ágil e transparente relacionada ao status ativo do "Ciente online do Contribuinte", todo aparato tecnológico empreiteiro no software fiscal Betha monitora ininterruptamente via background de registro validado sistêmico a comprovação real indicando se determinado contribuinte específico por fim logou, conferiu os informes submetidos ao canal interativo interno vinculado (portal virtual DTE) e acompanhou em conformidade legal os prazos.</p>
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
            <i class="bi bi-search"></i>
        </div>

        <h2>Desperte a tecnologia a favor da sua arrecadação local!</h2>

        <p>
            Capacite, instrumentalize devidamente e atualize a mesa de trabalho analítico diário de seus dedicados e focados 
            auditores fiscais mediante um avançadíssimo parque tecnológico composto pela solução digital unificada e 
            comunicação eletrônica contínua cem porcento (100%) rastreável e criptografada via nuvem da Betha.
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
