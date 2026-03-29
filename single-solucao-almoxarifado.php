<?php
/**
 * single-solucao-almoxarifado.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "almoxarifado".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-almoxarifado.php → single-solucao.php → single.php
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
                <span>Almoxarifado</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Estoque · Controle
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Almoxarifado</span><br>
                Público em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo do estoque da sua entidade pública. Gerencie materiais, controla estoque mínimo,
                e garante abastecimento contínuo com segurança e eficiência.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+3.000</strong>
                    <span>itens cadastrados</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>controle total</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Almoxarifado">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Estoque controlado
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
            <h2>Controle completo de almoxarifado público</h2>
            <p>
                O sistema de Almoxarifado Betha oferece uma solução completa para gerenciar o estoque da sua entidade pública.
                Desde o cadastro de materiais até a distribuição para os departamentos, tudo é controlado de forma automatizada.
            </p>
            <p>
                Com interface intuitiva e recursos avançados, sua equipe consegue gerenciar estoques múltiplos, controle de validade,
                solicitação de materiais e muito mais, garantindo transparência e eficiência na gestão.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle de estoque em tempo real</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão de estoque mínimo e máximo</li>
                <li><i class="bi bi-check-circle-fill"></i> Controle de validade de materiais</li>
                <li><i class="bi bi-check-circle-fill"></i> Requisições e distribuições automatizadas</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-box-seam-fill"></i>
                <h4>Cadastro de Materiais</h4>
                <p>Cadastre todos os materiais com características, unidades e grupos de classificação.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Controle de Estoque</h4>
                <p>Monitoramento em tempo real das quantidades, valores e posição do estoque.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-calendar-check-fill"></i>
                <h4>Controle de Validade</h4>
                <p>Alertas automáticos para materiais próximos ao vencimento.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-file-earmark-ruled-fill"></i>
                <h4>Requisições</h4>
                <p>Sistema de solicitação e aprovação de materiais por departamentos.</p>
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
            <h2>Módulos especializados para almoxarifado</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão de almoxarifado.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-tags" style="color:#fff;"></i>
                </div>
                <h3>Cadastro de Materiais</h3>
                <p>Cadastre materiais com todas as características, unidades de medida e grupos.</p>
                <ul>
                    <li>Código interno e NCM</li>
                    <li>Unidades de medida</li>
                    <li>Grupos e subgrupos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-boxes" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Estoque</h3>
                <p>Controle completo de entradas, saídas e saldo do estoque.</p>
                <ul>
                    <li>Controle de quantidade</li>
                    <li>Valorização de estoque</li>
                    <li>Histórico de movimentações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-exclamation-triangle" style="color:#fff;"></i>
                </div>
                <h3>Estoque Mínimo</h3>
                <p>Defina níveis mínimo e máximo de estoque para cada material.</p>
                <ul>
                    <li>Ponto de reposição</li>
                    <li>Alertas automáticos</li>
                    <li>Relatórios de necessidade</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-calendar-event" style="color:#fff;"></i>
                </div>
                <h3>Controle de Validade</h3>
                <p>Gerencie datas de validade e evite desperdícios.</p>
                <ul>
                    <li>Alertas de vencimento</li>
                    <li>Controle de lote</li>
                    <li>FiFo - Primeiro que entra, primeiro que sai</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-file-earmark-arrow-up" style="color:#fff;"></i>
                </div>
                <h3>Requisições</h3>
                <p>Sistema de solicitação de materiais por departamentos.</p>
                <ul>
                    <li>Solicitação online</li>
                    <li>Fluxo de aprovação</li>
                    <li>Histórico por servidor</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-bar-chart-line" style="color:#fff;"></i>
                </div>
                <h3>Relatórios Gerenciais</h3>
                <p>Relatórios detalhados para controle e tomada de decisão.</p>
                <ul>
                    <li>Movimentações por período</li>
                    <li>Consumo por departamento</li>
                    <li>Extrato de materiais</li>
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
            <h2>Por que escolher o Sistema de Almoxarifado Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Controle em tempo real</h4>
                    <p>Saiba exatamente o que tem em estoque a qualquer momento.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-exclamation-circle"></i>
                </div>
                <div>
                    <h4>Evite faltantes</h4>
                    <p>Alertas automáticos quando o estoque atinge o nível mínimo.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Controle de validade</h4>
                    <p>Evite desperdícios com controle de datas de vencimento.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-people"></i>
                </div>
                <div>
                    <h4>Requisições online</h4>
                    <p>Departamentos solicitam materiais de forma digital e rastreável.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <div>
                    <h4>Integração com compras</h4>
                    <p>Direct integration with Compras system for automatic replenishment.</p>
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
                O Sistema de Almoxarifado se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-box-seam-fill"></i>
                <span>Almoxarifado</span>
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
            <div class="ct-integ-node ct-integ-node--br" title="Patrimônio">
                <i class="bi bi-building"></i>
                <span>Patrimônio</span>
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
                    "O sistema de almoxarifado Betha transformou a forma como gerenciamos nosso estoque.
                    Reduzimos desperdícios e melhoramos significativamente o controle de materiais."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Carlos Oliveira</strong>
                    <span>Secretário de Administração - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Redução de 40% em desperdícios</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Controle total do estoque</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Agilidade nas requisições</span>
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
            <h2>Dúvidas sobre Almoxarifado</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite controlar estoque mínimo e máximo?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite definir estoque mínimo e máximo para cada material, com alertas automáticos quando o nível mínimo é atingido.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível fazer controle de validade dos materiais?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema possui controle de validade com alertas automáticos para materiais próximos ao vencimento, garantindo que sejam utilizados antes do prazo.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Os departamentos podem fazer requisições online?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite que os departamentos façam requisições de materiais online, com fluxo de aprovação e histórico completo de solicitações.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema se integra com o módulo de compras?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema de almoxarifado se integra diretamente com o módulo de compras, permitindo geração automática de solicitações de compra quando o estoque atinge o nível mínimo.</p>
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
            <i class="bi bi-box-seam-fill"></i>
        </div>

        <h2>Controle total do seu almoxarifado</h2>

        <p>
            Organize e controle o estoque da sua entidade com eficiência.
            Evite desperdícios, faltantes e tenha total controle do que entra e sai.
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
