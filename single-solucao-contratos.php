<?php
/**
 * single-solucao-contratos.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "contratos".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-contratos.php → single-solucao.php → single.php
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
                <span>Contratos</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Gestão · Controle
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Contratos</span><br>
                Administrativos em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo dos contratos administrativos da sua entidade. Gerencie vigências, aditamentos,
                obrigações contratuais e garanta conformity total com a legislação.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+5.000</strong>
                    <span>contratos gerenciados</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Contratos">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Contrato ativo
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
            <h2>Gestão completa de contratos administrativos</h2>
            <p>
                O sistema de Contratos Betha oferece uma solução completa para gerenciar todos os contratos administrativos
                da sua entidade pública. Desde o cadastro até a extinção, cada etapa do ciclo de vida do contrato é controlada
                de forma automatizada.
            </p>
            <p>
                Com interface intuitiva e recursos avançados, sua equipe consegue gerenciar vigências, aditamentos,
                obrigações contratuais e muito mais, garantindo transparência e eficiência na gestão.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle completo do ciclo de vida</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão de vigências e aditamentos</li>
                <li><i class="bi bi-check-circle-fill"></i> Controle de obrigações contratuais</li>
                <li><i class="bi bi-check-circle-fill"></i> Conformidade com a Lei 14.133/2021</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-file-earmark-text-fill"></i>
                <h4>Cadastro de Contratos</h4>
                <p>Cadastre todos os contratos com todas as informações e documentos.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-calendar-range-fill"></i>
                <h4>Controle de Vigência</h4>
                <p>Monitore datas de início, término e renovações automáticas.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-plus-circle-fill"></i>
                <h4>Aditamentos</h4>
                <p>Gerencie todos os tipos de aditamento de forma simplificada.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-list-task"></i>
                <h4>Obrigações Contratuais</h4>
                <p>Controle todas as obrigações e multas aplicáveis.</p>
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
            <h2>Módulos especializados para gestão de contratos</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão de contratos.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-file-earmark-plus" style="color:#fff;"></i>
                </div>
                <h3>Cadastro de Contratos</h3>
                <p>Cadastre contratos com todas as informações e documentos necessários.</p>
                <ul>
                    <li>Dados da contratada</li>
                    <li>Objeto e valor</li>
                    <li>Cláusulas e condições</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-calendar-check" style="color:#fff;"></i>
                </div>
                <h3>Controle de Vigência</h3>
                <p>Monitore datas de vigência, vencimentos e renovações.</p>
                <ul>
                    <li>Alertas de vencimento</li>
                    <li>Renovações automáticas</li>
                    <li>Histórico de vigências</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-plus-lg" style="color:#fff;"></i>
                </div>
                <h3>Aditamentos</h3>
                <p>Gerencie todos os tipos de aditamento de forma simplificada.</p>
                <ul>
                    <li>Aditamento de prazo</li>
                    <li>Aditamento de valor</li>
                    <li>Histórico completo</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-clipboard-check" style="color:#fff;"></i>
                </div>
                <h3>Obrigações Contratuais</h3>
                <p>Controle todas as obrigações e garantias contratuais.</p>
                <ul>
                    <li>Registro de obrigações</li>
                    <li>Controle de multas</li>
                    <li>Alertas de vencimento</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 220, 70%, 45%">
                    <i class="bi bi-receipt" style="color:#fff;"></i>
                </div>
                <h3>Garantias</h3>
                <p>Gerencie garantias contratuais e suas liberações.</p>
                <ul>
                    <li>Tipos de garantia</li>
                    <li>Validade e vigência</li>
                    <li>Liberação automática</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-bar-chart-line" style="color:#fff;"></i>
                </div>
                <h3>Relatórios Gerenciais</h3>
                <p>Relatórios detalhados para controle e tomada de decisão.</p>
                <ul>
                    <li>Contratos por status</li>
                    <li>Valores e prazos</li>
                    <li>Extrato completo</li>
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
            <h2>Por que escolher o Sistema de Contratos Betha?</h2>
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
                    <h4>Controle de vigências</h4>
                    <p>Alertas automáticos para contratos próximos ao vencimento.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-file-earmark-ruled"></i>
                </div>
                <div>
                    <h4>Gestão de aditamentos</h4>
                    <p>Controle completo de todos os tipos de aditamento.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-list-check"></i>
                </div>
                <div>
                    <h4>Obrigações contratuais</h4>
                    <p>Não deixe nenhuma obrigação passar despercebida.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <div>
                    <h4>Integração completa</h4>
                    <p>Se integra com Compras, Contábil e outros módulos Betha.</p>
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
                O Sistema de Contratos se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Contratos</span>
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
            <div class="ct-integ-node ct-integ-node--br" title="Almoxarifado">
                <i class="bi bi-box-seam"></i>
                <span>Almoxarifado</span>
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
                    "O sistema de contratos Betha trouxe total transparência para nossa gestão contratual.
                    Conseguimos controlar todas as vigências, aditamentos e obrigações de forma eficiente."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Maria Santos</strong>
                    <span>Coordenadora de Compras - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>100% de compliance contratual</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Zero contratos vencidos</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Gestão simplificada</span>
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
            <h2>Dúvidas sobre Contratos</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite controlar a vigência dos contratos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema possui controle completo de vigência com alertas automáticos para contratos próximos ao vencimento e renovação.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível gerenciar aditamentos de contrato?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar e gerenciar todos os tipos de aditamento, incluindo prazo, valor e objeto, com histórico completo.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema controla obrigações contratuais?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar todas as obrigações contratuais, com alertas de vencimento e controle de multas.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema atende à Lei 14.133/2021?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema foi desenvolvido para atender integralmente a Lei 14.133/2021, incluindo todas as funcionalidades necessárias para gestão contratual.</p>
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
            <i class="bi bi-file-earmark-text-fill"></i>
        </div>

        <h2>Gestão eficiente dos seus contratos</h2>

        <p>
            Tenha controle total sobre todos os contratos administrativos da sua entidade.
            Evite problemas com vigências, aditamentos e obrigações.
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
