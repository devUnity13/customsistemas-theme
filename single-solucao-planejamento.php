<?php
/**
 * single-solucao-planejamento.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "planejamento".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-planejamento.php → single-solucao.php → single.php
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
                <span>Planejamento</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Orçamento · Acompanhamento
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Planejamento</span><br>
                e Orçamento Público em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo do ciclo de planejamento e execução orçamentária da sua entidade. 
                Gerencie PPA, LDO, LOA, dotação,/empenho e garanta conformidade com a legislação.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+1.500</strong>
                    <span>entidades atendidas</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>conformidade legal</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Planejamento">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    PPA aprovado
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
            <h2>Gestão completa de planejamento e orçamento público</h2>
            <p>
                O sistema de Planejamento Betha oferece uma solução completa para gerenciar todo o ciclo de planejamento 
                e execução orçamentária da sua entidade pública. Desde o PPA até a execução da LOA, cada etapa é controlada 
                de forma automatizada.
            </p>
            <p>
                Com interface intuitiva e recursos avançados, sua equipe consegue gerenciar peças orçamentárias, 
                dotações, emissões de empenho e muito mais, garantindo transparência e eficiência na gestão.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle completo do ciclo orçamentário</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão de PPA, LDO e LOA</li>
                <li><i class="bi bi-check-circle-fill"></i> Empenho, liquidação e pagamento</li>
                <li><i class="bi bi-check-circle-fill"></i> Conformidade com a Lei 4.320/64</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>PPA</h4>
                <p>Planeje as metas e prioridades de longo prazo.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-file-earmark-ruled-fill"></i>
                <h4>LDO</h4>
                <p>Defina as diretrizes orçamentárias anuais.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-calculator-fill"></i>
                <h4>LOA</h4>
                <p>Estabeleça a lei orçamentária anual.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-receipt-fill"></i>
                <h4>Execução</h4>
                <p>Controle a execução orçamentária.</p>
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
            <h2>Módulos especializados para gestão de planejamento</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão orçamentária.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-compass" style="color:#fff;"></i>
                </div>
                <h3>PPA - Plano Plurianual</h3>
                <p>Cadastre e gerencie o Plano Plurianual da entidade.</p>
                <ul>
                    <li>Programas e ações</li>
                    <li>Metas e indicadores</li>
                    <li>Vinculação com receitas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-file-earmark-text-fill" style="color:#fff;"></i>
                </div>
                <h3>LDO - Lei de Diretrizes</h3>
                <p>Defina as diretrizes orçamentárias do exercício.</p>
                <ul>
                    <li>Prioridades e metas</li>
                    <li>Regras sobre endividamento</li>
                    <li>Anexos obrigatórios</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>LOA - Lei Orçamentária</h3>
                <p>Elabore a Lei Orçamentária Anual.</p>
                <ul>
                    <li>Estimativa de receitas</li>
                    <li>Fixação de despesas</li>
                    <li>Dotação por exercício</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-credit-card-fill" style="color:#fff;"></i>
                </div>
                <h3>Empenho</h3>
                <p>Controle de emitensão e acompanhamento de empenhos.</p>
                <ul>
                    <li>Empenho ordinário</li>
                    <li>Empenho estimativo</li>
                    <li>Empenho global</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-check2-square" style="color:#fff;"></i>
                </div>
                <h3>Liquidação</h3>
                <p>Processe a liquidação das despesas.</p>
                <ul>
                    <li>Verificação de documentos</li>
                    <li>Controle de prazos</li>
                    <li>Histórico completo</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-bank" style="color:#fff;"></i>
                </div>
                <h3>Pagamento</h3>
                <p>Execute o pagamento das despesas liquidadas.</p>
                <ul>
                    <li>Ordens de pagamento</li>
                    <li>Controle de restos a pagar</li>
                    <li>Relatórios de execução</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-bar-chart-line-fill" style="color:#fff;"></i>
                </div>
                <h3>Relatórios Gerenciais</h3>
                <p>Relatórios detalhados para controle e tomada de decisão.</p>
                <ul>
                    <li>Execução orçamentária</li>
                    <li>Balancetes</li>
                    <li>Prestação de contas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-diagram-3-fill" style="color:#fff;"></i>
                </div>
                <h3>Suplementações</h3>
                <p>Gerencie as alterações orçamentárias.</p>
                <ul>
                    <li>Créditos especiais</li>
                    <li>Créditos extraordinários</li>
                    <li>Histórico de alterações</li>
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
            <h2>Por que escolher o Sistema de Planejamento Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Conformidade legal</h4>
                    <p>Sistema atualizado conforme as mais recentes mudanças na legislação.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <div>
                    <h4>Controle de dotação</h4>
                    <p>Evite ultrapassar os limites estabelecidos na LOA.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-file-earmark-ruled"></i>
                </div>
                <div>
                    <h4>Ciclo completo</h4>
                    <p>Do planejamento à execução, tudo em um único sistema.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-list-check"></i>
                </div>
                <div>
                    <h4>Prestação de contas</h4>
                    <p>Gere relatórios e anexos para TCU, TCM e tribunais.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <div>
                    <h4>Integração completa</h4>
                    <p>Se integra com Contabilidade, Tesouraria e outros módulos Betha.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-cloud-check"></i>
                </div>
                <div>
                    <h4>Totalmente em nuvem</h4>
                    <p>Acesse de qualquer lugar, a qualquer momento.</p>
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
                O Sistema de Planejamento se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-graph-up-arrow"></i>
                <span>Planejamento</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Contabilidade">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Tesouraria">
                <i class="bi bi-bank"></i>
                <span>Tesouraria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Compras">
                <i class="bi bi-cart-fill"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Contratos">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Contratos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Folha de Pagamento">
                <i class="bi bi-cash-stack"></i>
                <span>Folha</span>
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
                    "O sistema de planejamento Betha trouxe total controle sobre nossa execução orçamentária.
                    Conseguimos acompanhar em tempo real todas as etapas do ciclo, desde o PPA até o pagamento."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Carlos Oliveira</strong>
                    <span>Secretário de Planejamento - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>100% de compliance orçamentário</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Controle total de dotações</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Prestação de contas simplificada</span>
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
            <h2>Dúvidas sobre Planejamento</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema controla todo o ciclo orçamentário?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema contempla todas as etapas do ciclo orçamentário: PPA, LDO, LOA, execução (empenho, liquidação, pagamento) e prestação de contas.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível controlar dotações e suplementações?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar e gerenciar todas as dotações, com controle de saldos e processo de suplementação de créditos.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema gera relatórios para tribunais de contas?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema gera todos os relatórios e anexos necessários para prestação de contas aos tribunais de contas.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema atende à Lei 4.320/64?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema foi desenvolvido para atender integralmente a Lei 4.320/64, incluindo todas as funcionalidades necessárias para gestão orçamentária.</p>
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
            <i class="bi bi-graph-up-arrow"></i>
        </div>

        <h2>Gestão eficiente do seu planejamento orçamentário</h2>

        <p>
            Tenha controle total sobre todo o ciclo de planejamento e execução orçamentária da sua entidade.
            Evite problemas com dotação, emitensão de empenho e prestação de contas.
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

<?php get_footer(); ?>
