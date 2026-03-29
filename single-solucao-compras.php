<?php
/**
 * single-solucao-compras.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "compras".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-compras.php → single-solucao.php → single.php
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
                <span>Compras</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Licitações · Contratos
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Compras e Licitações</span><br>
                Pública em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Automatize todo o processo de compras públicas, desde o planejamento até a contratação.
                Garanta conformidade com a legislação e economia para sua entidade.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+3.000</strong>
                    <span>processos realizados</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Compras Públicas">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Processo concluído
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
            <h2>Gestão completa de compras e licitações públicas</h2>
            <p>
                O sistema de Compras Públicas Betha oferece uma solução completa para automatizar todo o processo de contratação,
                desde o planejamento inicial até a execução do contrato. Desenvolvido especificamente para atender às necessidades
                do setor público brasileiro.
            </p>
            <p>
                Cominterface intuitiva e recursos avançados, sua equipe consegue gerenciar licitações, contratos, atas de registro
                de preços e muito mais, tudo em conformidade com a legislação vigente.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Planejamento de compras automatizado</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão completa de licitações</li>
                <li><i class="bi bi-check-circle-fill"></i> Controle de contratos e ordens de fornecimento</li>
                <li><i class="bi bi-check-circle-fill"></i> Conformidade com a Lei 14.133/2021</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-file-earmark-text-fill"></i>
                <h4>Processos Licitatórios</h4>
                <p>Gestão completa de todos os modalidades de licitação, da preparação à homologação.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-file-ruled-fill"></i>
                <h4>Contratos Administrativos</h4>
                <p>Gerenciamento de contratos com controle de vigência, aditamentos e obrigações.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-clipboard-data-fill"></i>
                <h4>ATA de Registro de Preços</h4>
                <p>Controle de atas de registro de preços com gestão de fornecedores e itens.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Relatórios Gerenciais</h4>
                <p>Dashboards e relatórios para tomada de decisão e controle de gastos.</p>
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
            <h2>Módulos especializados para compras públicas</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão de compras e licitações.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-calendar-range" style="color:#fff;"></i>
                </div>
                <h3>Planejamento de Compras</h3>
                <p>Planeje as aquisições anuais com base em dados históricos e necessidades da entidade.</p>
                <ul>
                    <li>Plano anual de compras</li>
                    <li>Estimativa de custos</li>
                    <li>Fluxo de aprovação</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-gavel" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Licitações</h3>
                <p>Execute todos os tipos de licitação previstos na legislação de forma digital.</p>
                <ul>
                    <li>Pregão eletrônico</li>
                    <li>Concorrência e tomada de preços</li>
                    <li>Dispensa e inexigibilidade</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-file-earmark-ruled" style="color:#fff;"></i>
                </div>
                <h3>Contratos</h3>
                <p>Gerencie todos os contratos administrativos em um único ambiente.</p>
                <ul>
                    <li>Vigência e prazos</li>
                    <li>Aditamentos</li>
                    <li>Obrigações contratuais</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-bookmark-check" style="color:#fff;"></i>
                </div>
                <h3>ARP - Atas de Registro</h3>
                <p>Controle as atas de registro de preços e suas vigências.</p>
                <ul>
                    <li>Gerenciamento de itens</li>
                    <li>Consulta de preços</li>
                    <li>Participantes e fornecedores</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-cart-check" style="color:#fff;"></i>
                </div>
                <h3>Ordens de Fornecimento</h3>
                <p>Emita e acompanhe ordens de fornecimento diretamente do sistema.</p>
                <ul>
                    <li>Emissão de OFs</li>
                    <li>Autorização de compras</li>
                    <li>Histórico de aquisições</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-people-fill" style="color:#fff;"></i>
                </div>
                <h3>Catálogo de Fornecedores</h3>
                <p>Cadastre e gerencie fornecedores com histórico de compras e avaliações.</p>
                <ul>
                    <li>Cadastro de fornecedores</li>
                    <li>Qualificação técnica</li>
                    <li>Avaliação de desempenho</li>
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
            <h2>Por que escolher o Sistema de Compras Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Conformidade com a legislação</h4>
                    <p>Sistema atualizado conforme as mais recentes mudanças na legislação de compras públicas.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div>
                    <h4>Economia para o erário</h4>
                    <p>Redução de custos através de竞价 pública e gestão eficiente do processo.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Agilidade nos processos</h4>
                    <p>Digitalização completa do processo licitatório，减少 tempo de execução.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                </div>
                <div>
                    <h4>Controle e transparência</h4>
                    <p>Relatórios detalhados para controle interno e prestação de contas.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <div>
                    <h4>Integração com portais</h4>
                    <p>Compatibilidade com PNCP e outros portais de compras governamentais.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-cloud-check"></i>
                </div>
                <div>
                    <h4>Totalmente em nuvem</h4>
                    <p>Acesse de qualquer lugar, a qualquer momento, sem necessidade de instalação.</p>
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
                O Sistema de Compras se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-cart-fill"></i>
                <span>Compras</span>
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
            <div class="ct-integ-node ct-integ-node--r" title="Patrimônio">
                <i class="bi bi-building"></i>
                <span>Patrimônio</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Estoque">
                <i class="bi bi-box-seam"></i>
                <span>Estoque</span>
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
                    "A implementação do sistema de compras Betha trouxe economia significativa para nosso município.
                    O processo licitatório ficou muito mais ágil e transparente, garantindo compliance total com a legislação."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>João Silva</strong>
                    <span>Secretário de Administração - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Redução de 30% nos custos de aquisição</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Agilidade no processo licitatório</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Conformidade total com a Lei 14.133/2021</span>
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
            <h2>Dúvidas sobre Compras Públicas</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema atende à nova Lei de Licitações (Lei 14.133/2021)?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema foi desenvolvido para atender integralmente a Lei 14.133/2021, incluindo todas as modalidades de licitação, procedimentos auxiliares e formas de contratação.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível integrar com o Portal Nacional de Contratações Públicas (PNCP)?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema possui integração com o PNCP, permitindo a publicação automática de editais, atas e contratos conforme exigido pela legislação.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite gestão de atas de registro de preços?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema oferece gestão completa de Atas de Registro de Preços, incluindo controle de vigência, participantes, itens e solicitações de adesão.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona o módulo de planejamento de compras?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O módulo permite criar o Plano Anual de Compras, com base em dados históricos e necessidades da entidade, estimando custos e definindo o fluxo de aprovação.</p>
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
            <i class="bi bi-cart-fill"></i>
        </div>

        <h2>Praticidade e economia para suas compras públicas</h2>

        <p>
            Transforme a forma como sua entidade realiza compras. 
            Automatize processos, garanta conformidade legal e economize recursos.
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
