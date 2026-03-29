<?php
/**
 * single-solucao-procuradoria.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "procuradoria".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-procuradoria.php → single-solucao.php → single.php
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
                <span>Procuradoria</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Gestão · Controle
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Procuradoria</span><br>
                Jurídica em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo das atividades jurídicas da sua entidade. Gerencie processos, contratos, 
                pareceres e demandas da consultoria jurídica com eficiência e total conformidade legal.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+10.000</strong>
                    <span>processos gerenciados</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Procuradoria">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Processo ativo
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
            <h2>Gestão completa da consultoria jurídica</h2>
            <p>
                O sistema de Procuradoria Betha oferece uma solução completa para gerenciar todas as atividades 
                jurídicas da sua entidade pública. Desde o recebimento de demandas até a conclusão, cada etapa 
                do trabalho jurídico é controlada de forma automatizada.
            </p>
            <p>
                Com interface intuitiva e recursos avançados, sua equipe de procuradores e assessores jurídicos 
                consegue gerenciar processos, contratos, pareceres e demandas de forma eficiente, garantindo 
                transparência e conformidade com a legislação.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle completo do ciclo de demandas</li>
                <li><i class="bi bi-check-circle-fill"></i> Gestão de processos e prazos</li>
                <li><i class="bi bi-check-circle-fill"></i> Controle de contratos jurídicos</li>
                <li><i class="bi bi-check-circle-fill"></i> Emissão de pareceres e Notas Técnicas</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-bank"></i>
                <h4>Gestão de Processos</h4>
                <p>Controle todos os processos jurídicos comtram sua entidade.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-clock-fill"></i>
                <h4>Controle de Prazos</h4>
                <p>Monitore prazos processuais e administrativos.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-file-earmark-ruled-fill"></i>
                <h4>Pareceres Jurídicos</h4>
                <p>Emita e controle pareceres e Notas Técnicas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-file-text-fill"></i>
                <h4>Análise de Contratos</h4>
                <p>Gerencie análises jurídicas de contratos.</p>
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
            <h2>Módulos especializados para gestão jurídica</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão de procuradoria.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-bank" style="color:#fff;"></i>
                </div>
                <h3>Cadastro de Processos</h3>
                <p>Cadastre processos judiciais e administrativos com todas as informações.</p>
                <ul>
                    <li>Dados do processo</li>
                    <li>Partes envolvidas</li>
                    <li>Valor da causa</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-calendar-check" style="color:#fff;"></i>
                </div>
                <h3>Controle de Prazos</h3>
                <p>Monitore prazos processuais e administrativos.</p>
                <ul>
                    <li>Alertas de vencimento</li>
                    <li>Controle de diligências</li>
                    <li>Histórico de prazos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-file-earmark-text" style="color:#fff;"></i>
                </div>
                <h3>Pareceres Jurídicos</h3>
                <p>Emita e gerencie pareceres e Notas Técnicas.</p>
                <ul>
                    <li>Modelos personalizados</li>
                    <li>Aprovação digital</li>
                    <li>Histórico completo</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-clipboard-check" style="color:#fff;"></i>
                </div>
                <h3>Análise de Contratos</h3>
                <p>Controle a análise jurídica de contratos.</p>
                <ul>
                    <li>Fluxo de aprovação</li>
                    <li>Observações jurídicas</li>
                    <li>Arquivo de cláusulas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-people" style="color:#fff;"></i>
                </div>
                <h3>Advogados/Procuradores</h3>
                <p>Gerencie a equipe jurídica e suas atribuições.</p>
                <ul>
                    <li>Cadastro de procuradores</li>
                    <li>Atribuição de demandas</li>
                    <li>Relatório de atividades</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 76%, 36%">
                    <i class="bi bi-bar-chart-line" style="color:#fff;"></i>
                </div>
                <h3>Relatórios Gerenciais</h3>
                <p>Relatórios detalhados para controle e tomada de decisão.</p>
                <ul>
                    <li>Processos por status</li>
                    <li>Produtividade jurídica</li>
                    <li>Estatísticas completas</li>
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
            <h2>Por que escolher o Sistema de Procuradoria Betha?</h2>
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
                    <h4>Controle de prazos</h4>
                    <p>Alertas automáticos para prazos processuais importantes.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-file-earmark-ruled"></i>
                </div>
                <div>
                    <h4>Gestão de pareceres</h4>
                    <p>Controle completo da emissão de pareceres jurídicos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <div>
                    <h4>Fluxo de demandas</h4>
                    <p>Gerencie o fluxo de demandas jurídicas da sua entidade.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <div>
                    <h4>Integração completa</h4>
                    <p>Se integra com Contratos, Contábil e outros módulos Betha.</p>
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
                O Sistema de Procuradoria se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-bank"></i>
                <span>Procuradoria</span>
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
            <div class="ct-integ-node ct-integ-node--r" title="Contratos">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Contratos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Compras">
                <i class="bi bi-cart-fill"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Recursos Humanos">
                <i class="bi bi-people-fill"></i>
                <span>RH</span>
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
                    "O sistema de Procuradoria Betha trouxe total organização para nossa consultoria jurídica.
                    Conseguimos controlar todos os processos, prazos e pareceres de forma eficiente."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Dr. João Silva</strong>
                    <span>Procurador Geral - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>100% de compliance jurídico</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Zero prazos perdidos</span>
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
            <h2>Dúvidas sobre Procuradoria</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite controlar prazos processuais?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema possui controle completo de prazos com alertas automáticos para prazos importantes e vencimento.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível gerenciar a emissão de pareceres jurídicos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar, emitir e controlar todos os pareceres jurídicos, com fluxo de aprovação e histórico completo.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema controla a análise de contratos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar e gerenciar a análise jurídica de contratos, com observações, aprovações e arquivo de cláusulas.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite gerenciar a equipe de procuradores?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite cadastrar todos os procuradores e advogados, atribuir demandas e gerar relatórios de produtividade.</p>
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
            <i class="bi bi-bank"></i>
        </div>

        <h2>Gestão eficiente da sua procuradoria</h2>

        <p>
            Tenha controle total sobre todas as atividades jurídicas da sua entidade.
            Evite problemas com prazos, processos e demandas.
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

<?php get_footer(); ?></content>
