<?php
/**
 * single-solucao-bi-administrativo.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "bi-administrativo".
 */

defined('ABSPATH') || exit;

get_header();
?>

<!-- ════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════ -->
<section class="ct-hero">
    <div class="ct-hero__inner">

        <div class="ct-hero__content">

            <div class="ct-hero__breadcrumb">
                <a href="<?php echo esc_url(get_post_type_archive_link('solucao') ?: home_url('/solucoes/')); ?>">
                    <i class="bi bi-grid-3x3-gap"></i> Soluções
                </a>
                <i class="bi bi-chevron-right"></i>
                <span>BI Administrativo</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                Controle Orçamentário · Folha · Patrimônio
            </div>

            <h1>
                Gestão e Monitoramento no <br>
                <span class="ct-hero__highlight">BI Administrativo</span>
            </h1>

            <p class="ct-hero__desc">
                Melhore radicalmente a eficiência a partir de compreensão completa das áreas de arrecadação,
                contabilidade, folha de pagamento, patrimônio e contratos com inteligência de dados integrados.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>Visibilidade real</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Gestão</strong>
                    <span>Orçamentária clara</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Folha</strong>
                    <span>Raio-x cirúrgico</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver dashboards
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img"
                    src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-bi.png'; ?>"
                    alt="Mockup BI Administrativo"
                    onerror="this.src='https://placehold.co/600x400/a39382/ffffff?text=Interface+BI+Administrativo'">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Análise Receita/Despesa
                </div>
            </div>
        </div><!-- /.ct-hero__visual -->

    </div><!-- /.ct-hero__inner -->

    <!-- Decorative wave -->
    <div class="ct-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#ffffff" />
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
            <h2>Compreensão profunda, administração cirúrgica</h2>
            <p>
                O BI Administrativo integrado transforma dados áridos escondidos nas tabelas em indicadores analíticos
                essenciais garantindo controle preciso sobre todas as áreas de gestão financeira da prefeitura.
            </p>
            <p>
                As lideranças conseguem visualizar em poucos cliques tendências, anomalias preocupantes nas despesas
                contratuais e variações acentuadas da folha salarial antes que estourem no balanço de encerramento.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle rigoroso das despesas versus arrecadação efetiva
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Indicadores precisos orientando cumprimento da LRF
                    governamental</li>
                <li><i class="bi bi-check-circle-fill"></i> Transparência cristalina monitorando cada contrato executivo
                    ativo</li>
                <li><i class="bi bi-check-circle-fill"></i> Ferramenta anti-desperdício alinhando contratos vigentes
                    repassados</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Receitas</h3>
                    <p>Descubra e atue cirurgicamente nas tendências exatas e falhas em repasses municipais.</p>
            </div>
            <div class="ct-about__card ct-about__card--primary">
                <i class="bi bi-person-lines-fill"></i>
                <h4>Folha RH</h3>
                    <p>Raio geométrico detalhando evolução, servidores e rubricas impedindo folha inchada estourando
                        LRF.</p>
            </div>
            <div class="ct-about__card ct-about__card--primary">
                <i class="bi bi-building"></i>
                <h4>Patrimônio</h3>
                    <p>Conservação controlada avaliando deteriorações e depreciando bens em bases nativas fiscais reais
                        contidas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-card-checklist"></i>
                <h4>Contratos</h3>
                    <p>Conformidade em pagamentos e alertas vivos exigindo atenção nos prazos dos aditivos contratuais
                        estipulados.</p>
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
            <div class="section-label">Dashboards Embarcados</div>
            <h2>Um raio-X constante das suas finanças</h2>
            <p>Conheça as ramificações visuais do BI projetadas para esmiuçar os processos orçamentários vitais.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-pie-chart-fill" style="color:#fff;"></i>
                </div>
                <h3>Receita X Despesa</h3>
                <p>Comparativos vivos atestando instantaneamente em tempo dinâmico discrepâncias alertadoras entre
                    aquilo que entra versus a saída vertiginosa classificada em fatias e gráficos fáceis.</p>
                <ul>
                    <li>Análise e saúde financeira em 1 clique</li>
                    <li>Visões agrupadas orçamentárias de secretarias</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>Receitas Detalhadas</h3>
                <p>Mapeia a origem verdadeira atestando tendências exatas e colaborações das contribuições de
                    faturamento na composição completa anual da prefeitura contendo origens exaustivamente rastreadas
                    abertas.</p>
                <ul>
                    <li>Análises comparativas retroativas das safras fiscais</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-shield-minus" style="color:#fff;"></i>
                </div>
                <h3>Monitoração de Despesas</h3>
                <p>Desmascara focos de sangramentos desnecessários evidenciando setores esbanjadores sem lastro
                    orçamentário real preestabelecido garantindo controle dos gastos no centavo.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-geo-alt-fill" style="color:#fff;"></i>
                </div>
                <h3>Gestão Geo do IPTU</h3>
                <p>Monitora fisicamente inadimplências do IPTU por zoneamento apontando regiões em mapas contendo
                    débitos congelados varriando cobranças concentradas exigidas.</p>
                <ul>
                    <li>Inteligência em manchas geográficas endividadas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 49%, 40%">
                    <i class="bi bi-arrow-up" style="color:#fff;"></i>
                </div>
                <h3>Evolução Econômica</h3>
                <p>Ponteiros atenciosos sobre aberturas ou fechamentos das empresas na praça revelando panoramas
                    contidos detalhados indicando progresso e a força comercial ativa regional.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 30, 60%, 45%">
                    <i class="bi bi-people-fill" style="color:#fff;"></i>
                </div>
                <h3>Raio-X Servidores</h3>
                <p>Dashboards esquadrinhando toda vida rublical atestando aumentos, variações excessivas e abolições com
                    folha engessada na inteligência visível clara da saúde organizacional e recursos humanos ativos
                    inativos estáticos.</p>
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
            <h2>Eficiência e Previsibilidade Governamental</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-search"></i>
                </div>
                <div>
                    <h4>Transparência Pró-ativa</h4>
                    <p>Antecipe os problemas financeiros das pastas demonstrando gráficos contundentes num telão sem
                        precisar esperar rodar fechamentos contábeis longos arrastando decisões atrasadas lentas do
                        final da competência apurada contábil isolada.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--primary">
                    <i class="bi bi-wallet2"></i>
                </div>
                <div>
                    <h4>Economia no Centavo</h4>
                    <p>Ao desdobrar as despesas no gráfico é possível frear gastos excedentes de setores operando sob
                        orçamentos falsos garantindo que amarrações financeiras rigorosas estipuladas sejam efetivamente
                        seguidas a risco exato determinado fidedignamente alinhado cravado ali exposto irrefutável.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--primary">
                    <i class="bi bi-person-x-fill"></i>
                </div>
                <div>
                    <h4>Pente Fino na Folha</h4>
                    <p>O Raio-X espanta contratações fantasmas e comissionamentos ilegais monitorando oscilações severas
                        injustificadas no orçamento com pessoal alinhando ao teto da exigência imposta publicamente
                        alertando no painel ativador rigoroso fiscal estrito cravado estipulado.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Análise Retroativa Segura</h4>
                    <p>Não há mais achismos; históricos consistentes evidenciando ativamente qual bairro enriqueceu aos
                        anos permitindo atitudes pautadas na ciência das métricas confiáveis embasadas em dados gerados
                        do tesouro valiosíssimo municipal inestimável impulsionando precisão assertividade nas ações
                        diretas.</p>
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
            <h2>O cérebro da saúde financeira</h2>
            <p>
                Cruza ininterruptamente raízes com setores de coleta sem precisar carregar relatórios pesados num
                pendrive isolado engessando seu corpo gerencial.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>BI ADM</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Tributos">
                <i class="bi bi-cash-coin"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl" title="Contábil">
                <i class="bi bi-journal-text"></i>
                <span>Contabilidade</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l" title="RH / Folha">
                <i class="bi bi-people-fill"></i>
                <span>RH / Folha</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl" title="Patrimônio">
                <i class="bi bi-building"></i>
                <span>Patrimônio</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Compras">
                <i class="bi bi-cart"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Contratos">
                <i class="bi bi-file-earmark-check"></i>
                <span>Contratos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="GeoIPTU">
                <i class="bi bi-pin-map"></i>
                <span>Geo IPTU</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Arrecadação">
                <i class="bi bi-graph-up-arrow"></i>
                <span>Arrecadação</span>
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
                    "Foi como ligar a luz numa sala escura onde as mesas apinhadas contábeis nos cegavam diuturnamente.
                    O volume financeiro despido em indicadores nos telas da controladoria permitiu bloquear compras onde
                    já não havia lastro antecipando um provável bloqueio legal do Tribunal, ajustou o Raio-X mapeando
                    rubricas indevidas na folha gigante e nos apontou num mapa quais os pontos de inadimplência severa
                    do IPTU cobrando pontualmente. Não há gestor sem isso hoje."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Marcelo Queiroz</strong>
                    <span>Controlador Financeiro e Auditor</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Impacto tangível alcançado:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término da surpresa negativa nas folhas de pagamentos estouradas</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Ajuste da inadimplência visualizando o mapa focando agentes e correios na raiz exata regional
                        atestada visivelmente</span>
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
            <h2>Tire suas dúvidas</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Preciso de um desenvolvedor dedicado preenchendo as planilhas cruzando os dados e gerando as teias
                    desses painéis complexos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>De forma alguma. As consolidações, os cruzamentos contábeis complexos nativos estipulados
                        internamente são arranjados automaticamente e injetados ativamente das próprias fontes
                        integrativas como o modulo de Contabilidade contendo valores diretos na veia não engarrafando
                        processamento re-digitado sem requerer analista técnico elaborando cruzamentos arriscados
                        falíveis isolados sujeitos amadores em painéis construídos manuais propensos corriqueiros e
                        problemáticos estagnados.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como ele auxilia no respeito irrestrito exato à famosa e estrita Lei de Responsabilidade Fiscal
                    (LRF)?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Operando em antecipação de ameaças visualizando no indicador vivo diuturno um possível cruzamento
                        de tetos impostos alertando a tesouraria e o gestor central mostrando o "Termômetro" ativamente
                        visível barrando gastos preestabelecidos com rubricas em folha e empenhos contidos atestando
                        previsões impedidoras que estourariam legalmente e trariam responsabilidades penais
                        administrativas contundentes amargadas posteriormente em auditorias tristes de fim do ano
                        avaliadas engessadas punidas rigorosamente apuradas estipuladamente baseadas exigidas visadas
                        cravadas.</p>
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
            <i class="bi bi-pie-chart-fill"></i>
        </div>

        <h2>Elimine surpresas financeiras nos relatórios</h2>

        <p>
            Capacite o poder decisório do gabinete com dashboards perfeitos encurtando o abismo analítico nas
            secretarias controlando contratos, contas e patrimônio ao rigor analítico estrito centavo a centavo
            monitorados em tempo simultâneo impecável.
        </p>

        <div class="ct-cta__actions">
            <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="btn-custom-primary btn-lg">
                <i class="bi bi-calendar-check"></i>
                Agendar demonstração
            </a>
            <a href="<?php echo esc_url(get_post_type_archive_link('solucao') ?: home_url('/solucoes/')); ?>"
                class="btn-custom-outline btn-lg">
                <i class="bi bi-arrow-left"></i>
                Ver todas as soluções
            </a>
        </div>

    </div>
</section>

<script>
    /* ── FAQ toggle específico desta página ── */
    function ctToggleFaq(btn) {
        const item = btn.closest('.ct-faq__item');
        const answer = item.querySelector('.ct-faq__answer');
        const icon = btn.querySelector('i');
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