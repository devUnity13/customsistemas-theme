<?php
/**
 * single-solucao-tesouraria.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "tesouraria".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-tesouraria.php → single-solucao.php → single.php
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

            <div class="ct-hero__breadcrumb tesouraria">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: home_url( '/solucoes/' ) ); ?>">
                    <i class="bi bi-grid-3x3-gap"></i> Soluções
                </a>
                <i class="bi bi-chevron-right"></i>
                <span>Tesouraria</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Gestão bancária completa
            </div>

            <h1>
                Gestão <span class="ct-hero__highlight">Tesouraria</span><br>
                Municipal em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle total das operações financeiras do município — arrecadações, pagamentos,
                conciliações bancárias e movimentações em tempo real, com eficiência e precisão.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+3.000</strong>
                    <span>municípios atendidos</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>conciliação automática</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Tesouraria">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Pagamento processado
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
     2. LOGOS / PROVA SOCIAL
     ════════════════════════════════════════════════════ -->
<section class="ct-trust">
    <div class="ct-trust__inner">
        <p class="ct-trust__label">Confiado por municípios em todo o Brasil</p>
        <div class="ct-trust__stats">
            <div class="ct-trust__item">
                <strong>+3.000</strong>
                <span>clientes municipais</span>
            </div>
            <div class="ct-trust__item">
                <strong>26+</strong>
                <span>anos de mercado</span>
            </div>
            <div class="ct-trust__item">
                <strong>100%</strong>
                <span>cloud nativo</span>
            </div>
            <div class="ct-trust__item">
                <strong>47+</strong>
                <span>sistemas integrados</span>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     3. O QUE É
     ════════════════════════════════════════════════════ -->
<section class="ct-about">
    <div class="ct-about__inner">

        <div class="ct-about__text">
            <span class="section-label">Visão geral</span>
            <h2>Tesouraria municipal eficiente e integrada</h2>
            <p>
                O sistema Tesouraria é a solução completa para o controle financeiro do município.
                100% em nuvem, ele unifica arrecadações, pagamentos e conciliações bancárias em uma
                única plataforma — garantindo eficiência, precisão e conformidade com a legislação.
            </p>
            <p>
                Desenvolvido para atender qualquer município do país, o sistema oferece gestão bancária
                completa, conciliação automática e geração de ordens bancárias, sempre atualizado para
                se manter aderente às exigências dos Tribunais de Contas e instituições financeiras.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-lg"></i> Controle de arrecadações orçamentárias e extraorçamentárias</li>
                <li><i class="bi bi-check-lg"></i> Gestão completa de contas bancárias e movimentações</li>
                <li><i class="bi bi-check-lg"></i> Conciliação bancária automática e customizável</li>
                <li><i class="bi bi-check-lg"></i> Geração de ordens bancárias e relatórios em lote</li>
                <li><i class="bi bi-check-lg"></i> Integração nativa com Contabilidade e Planejamento</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-cloud-check-fill"></i>
                <h4>Nuvem nativa</h4>
                <p>Acesse de qualquer dispositivo, sem instalar nada. Backups automáticos e disponibilidade 24/7.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-shield-check"></i>
                <h4>Sempre atualizado</h4>
                <p>Atualizações automáticas conforme mudanças na legislação e layouts bancários. Sem custo adicional.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-diagram-3-fill"></i>
                <h4>Totalmente integrado</h4>
                <p>Compartilha dados em tempo real com Contabilidade, Planejamento, RH e demais sistemas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-mic-fill"></i>
                <h4>IA e automação</h4>
                <p>Conciliação automática, sugestões inteligentes e processamento em lote para maior eficiência.</p>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     4. MÓDULOS
     ════════════════════════════════════════════════════ -->
<section class="ct-modulos" id="modulos">
    <div class="ct-modulos__inner">

        <div class="ct-modulos__header">
            <span class="section-label">Módulos do sistema</span>
            <h2>Tudo que sua tesouraria municipal precisa</h2>
            <p>Cada módulo foi projetado para cobrir uma etapa do ciclo financeiro público.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:209,87%,37%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>Arrecadação de Receitas</h3>
                <p>Controle completo de arrecadações orçamentárias e extraorçamentárias, incluindo IPTU, ISS e tributos diversos, com modo incremental e pré-cadastro.</p>
                <ul>
                    <li>Arrecadações orçamentárias e extraorç.</li>
                    <li>Modo incremental e pré-cadastro</li>
                    <li>Receitas de tributos e taxas</li>
                    <li>Estorno e ajuste de arrecadações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:142,71%,45%">
                    <i class="bi bi-bank" style="color:#fff;"></i>
                </div>
                <h3>Gestão Bancária</h3>
                <p>Controle total de contas bancárias, movimentações e extratos. Ambiente exclusivo imitando internet banking para visualização e gestão financeira.</p>
                <ul>
                    <li>Movimentações bancárias em tempo real</li>
                    <li>Simulação de extrato bancário</li>
                    <li>Controle de transferências e devoluções</li>
                    <li>Integração com sistema contábil</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:270,70%,55%">
                    <i class="bi bi-receipt-cutoff" style="color:#fff;"></i>
                </div>
                <h3>Pagamentos e Ordens Bancárias</h3>
                <p>Processamento de pagamentos em lote, geração de ordens bancárias conforme layout do banco e controle de cheques emitidos.</p>
                <ul>
                    <li>Pagamentos em lote</li>
                    <li>Geração de ordens bancárias</li>
                    <li>Registro de cheques emitidos</li>
                    <li>Arquivos de remessa para bancos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:38,92%,50%">
                    <i class="bi bi-arrow-left-right" style="color:#fff;"></i>
                </div>
                <h3>Conciliação Bancária</h3>
                <p>Conciliação automática entre lançamentos financeiros e extratos bancários, com regras customizáveis e importação de extratos.</p>
                <ul>
                    <li>Conciliação automática</li>
                    <li>Regras customizáveis</li>
                    <li>Importação de extratos bancários</li>
                    <li>Relatórios de conciliação</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:355,80%,50%">
                    <i class="bi bi-bar-chart-line" style="color:#fff;"></i>
                </div>
                <h3>Relatórios e Movimentação Diária</h3>
                <p>Emissão de diversos relatórios financeiros e controle de movimentação diária para arrecadação em boca de caixa.</p>
                <ul>
                    <li>Boletim de movimentação geral</li>
                    <li>Razão analítico da conciliação</li>
                    <li>Relatórios de gestão bancária</li>
                    <li>Controle de abertura/fechamento diário</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:186,80%,40%">
                    <i class="bi bi-people-fill" style="color:#fff;"></i>
                </div>
                <h3>Controle de Acesso</h3>
                <p>Permissões individuais por usuário, módulo e entidade. Auditoria completa com histórico de alterações — essencial para a transparência pública.</p>
                <ul>
                    <li>Perfis e permissões por usuário</li>
                    <li>Acesso por entidade e módulo</li>
                    <li>Log completo de alterações</li>
                    <li>Autenticação segura em nuvem</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     5. BENEFÍCIOS (dividido em dois lados)
     ════════════════════════════════════════════════════ -->
<section class="ct-beneficios">
    <div class="ct-beneficios__inner">

        <div class="ct-beneficios__header">
            <span class="section-label">Por que escolher</span>
            <h2>Vantagens que fazem a diferença no dia a dia</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                </div>
                <div>
                    <h4>Sem instalação ou manutenção local</h4>
                    <p>O sistema funciona direto no navegador. A TI municipal não precisa gerenciar servidores, patches ou backups.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-arrow-repeat"></i>
                </div>
                <div>
                    <h4>Integração automática entre sistemas</h4>
                    <p>Dados da Contabilidade chegam direto na Tesouraria. Pagamentos processados baixam os empenhos automaticamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
                <div>
                    <h4>Conciliação bancária automática</h4>
                    <p>Regras customizáveis para conciliação automática entre lançamentos e extratos, reduzindo erros e retrabalho.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <div>
                    <h4>Eficiência em pagamentos em lote</h4>
                    <p>Processamento de múltiplos pagamentos simultaneamente, com geração automática de ordens bancárias.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div>
                    <h4>Relatórios gerenciais em tempo real</h4>
                    <p>Dashboards e relatórios atualizados instantaneamente — sem aguardar fechamentos ou exportações manuais.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-patch-check-fill"></i>
                </div>
                <div>
                    <h4>Customizável para qualquer município</h4>
                    <p>Adaptado às particularidades de cada estado e tamanho de município — do menor interior à capital.</p>
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
            <span class="section-label">Ecossistema integrado</span>
            <h2>Conectado com toda a gestão municipal</h2>
            <p>A Tesouraria não trabalha isolada — ela é o centro financeiro que conecta todos os sistemas da gestão pública, eliminando redundâncias e garantindo dados únicos e confiáveis.</p>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary">
                Ver todas as integrações <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="ct-integracoes__map">
            <!-- Hub central -->
            <div class="ct-integ-hub">
                <i class="bi bi-coin"></i>
                <span>Tesouraria</span>
            </div>
            <!-- Satélites -->
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Planejamento</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-people-fill"></i>
                <span>Folha de Pagamento</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Contratos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
                <i class="bi bi-receipt"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl">
                <i class="bi bi-cart-fill"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l">
                <i class="bi bi-boxes"></i>
                <span>Patrimônio</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl">
                <i class="bi bi-building"></i>
                <span>Arrecadação</span>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     7. CASE DE SUCESSO
     ════════════════════════════════════════════════════ -->
<section class="ct-case">
    <div class="ct-case__inner">
        <div class="ct-case__card">
            <div class="ct-case__quote">
                <i class="bi bi-quote"></i>
                <blockquote>
                    A implementação da Tesouraria trouxe uma agilidade incrível nos processos financeiros.
                    A conciliação automática e os pagamentos em lote reduziram nosso tempo de trabalho em
                    mais de 50%, e a integração com a contabilidade eliminou erros manuais.
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <strong>Carlos Eduardo Silva</strong>
                        <span>Tesoureiro · Prefeitura de São Paulo, SP</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Resultados alcançados</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Conciliação bancária 100% automática
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Processamento de pagamentos em lote diário
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Redução de 60% no tempo de fechamento financeiro
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Integração completa com sistema contábil
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
            <span class="section-label">Dúvidas frequentes</span>
            <h2>Perguntas sobre a Tesouraria</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A solução se comunica com instituições bancárias?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim. O sistema gera arquivos de ordens bancárias conforme o layout de cada banco, permitindo integração direta com os sistemas bancários para processamento de pagamentos e recebimentos.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Há conciliação bancária automática?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim. A conciliação é feita automaticamente entre os lançamentos financeiros e os extratos bancários, com regras customizáveis. Também é possível importar extratos diretamente do banco.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É integrado com a Contabilidade?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim. A Tesouraria compartilha dados em tempo real com o sistema Contábil, garantindo que pagamentos e arrecadações sejam refletidos automaticamente na escrituração contábil.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O Tesouraria possui gestão de aplicações e investimentos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim. O sistema inclui módulos para controle de aplicações financeiras, investimentos e gestão de recursos, com relatórios completos para acompanhamento de rentabilidade e conformidade.
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

        <h2>Simplifique a gestão da tesouraria do seu município</h2>

        <p>
            Tenha controle total sobre as finanças da sua entidade.
            Automatize processos e garanta transparência total.
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