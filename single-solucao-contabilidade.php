<?php
/**
 * single-solucao-contabilidade.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "contabilidade".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-contabilidade.php → single-solucao.php → single.php
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
                <span>Contábil</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · MCASP · PCASP
            </div>

            <h1>
                Planejamento e <span class="ct-hero__highlight">Contabilidade</span><br>
                Pública em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo da execução orçamentária, financeira e contábil do seu município —
                integrado, seguro e sempre atualizado com a legislação vigente.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+3.000</strong>
                    <span>municípios atendidos</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>aderente ao MCASP</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Contábil">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Empenho emitido
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
            <h2>Contabilidade pública integrada e sempre em conformidade</h2>
            <p>
                O sistema Contábil é a solução completa para o controle orçamentário, financeiro e
                patrimonial do município. 100% em nuvem, ele unifica todas as entidades em uma única
                base de dados — eliminando retrabalho e garantindo integridade total das informações.
            </p>
            <p>
                Desenvolvido para atender qualquer município do país, independente do tamanho ou
                legislação estadual, o sistema é customizável e recebe atualizações contínuas para
                se manter aderente às portarias da SOF, STN e exigências dos Tribunais de Contas.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-lg"></i> PCASP e MCASP integrados nativamente</li>
                <li><i class="bi bi-check-lg"></i> Integração com Planejamento, Tesouraria e Folha</li>
                <li><i class="bi bi-check-lg"></i> Lançamentos automáticos via eventos contábeis</li>
                <li><i class="bi bi-check-lg"></i> Prestação de contas para Tribunais de Contas</li>
                <li><i class="bi bi-check-lg"></i> Permissões diferenciadas por usuário e entidade</li>
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
                <p>Atualizações automáticas conforme mudanças na legislação federal e estadual. Sem custo adicional.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-diagram-3-fill"></i>
                <h4>Totalmente integrado</h4>
                <p>Compartilha dados em tempo real com Planejamento, Tesouraria, RH e demais sistemas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-mic-fill"></i>
                <h4>IA e Big Data</h4>
                <p>Reconhecimento de fala, análise de dados em tempo real e sugestões inteligentes de lançamento.</p>
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
            <h2>Tudo que sua contabilidade municipal precisa</h2>
            <p>Cada módulo foi projetado para cobrir uma etapa do ciclo orçamentário e contábil público.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:209,87%,37%">
                    <i class="bi bi-bar-chart-steps" style="color:#fff;"></i>
                </div>
                <h3>Execução Orçamentária</h3>
                <p>Empenho, liquidação e pagamento de despesas com controle de cotas mensais e LRF. Suporte completo a créditos adicionais, suplementações e cancelamentos.</p>
                <ul>
                    <li>Empenho, liquidação e pagamento</li>
                    <li>Controle de cotas mensais (LRF)</li>
                    <li>Créditos adicionais e suplementações</li>
                    <li>Anulação e cancelamento de empenhos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:142,71%,45%">
                    <i class="bi bi-cash-coin" style="color:#fff;"></i>
                </div>
                <h3>Arrecadação de Receitas</h3>
                <p>Classificação por natureza da receita conforme portarias SOF/STN. Controle de arrecadações orçamentárias e extraorçamentárias em tempo real.</p>
                <ul>
                    <li>Arrecadações orçamentárias e extraorç.</li>
                    <li>Natureza da receita (SOF/STN)</li>
                    <li>Receitas de IPTU, ISS e tributos</li>
                    <li>Estorno e ajuste de arrecadações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:270,70%,55%">
                    <i class="bi bi-building-check" style="color:#fff;"></i>
                </div>
                <h3>Prestação de Contas</h3>
                <p>Geração automática de arquivos para Tribunais de Contas estaduais, SICONFI, RREO, RGF e demais exigências legais — sempre atualizados.</p>
                <ul>
                    <li>Arquivos para Tribunais de Contas</li>
                    <li>SICONFI, RREO e RGF</li>
                    <li>Relatórios contábeis obrigatórios</li>
                    <li>Histórico de prestações enviadas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:38,92%,50%">
                    <i class="bi bi-bank2" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Precatórios</h3>
                <p>Controle de precatórios de pessoal em conta especial, integrado ao fluxo de empenho e pagamento, com suporte à natureza jurídica de Consórcios Públicos.</p>
                <ul>
                    <li>Precatórios em conta especial</li>
                    <li>Empenho para Tribunais de Justiça</li>
                    <li>Contratos de rateio (consórcios)</li>
                    <li>Lançamentos automáticos via eventos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:355,80%,50%">
                    <i class="bi bi-journal-bookmark-fill" style="color:#fff;"></i>
                </div>
                <h3>Plano de Contas (PCASP)</h3>
                <p>PCASP estruturado e atualizado, com suporte a múltiplas entidades em base unificada. Controle patrimonial, financeiro e orçamentário consolidado.</p>
                <ul>
                    <li>PCASP federal e estadual</li>
                    <li>Múltiplas entidades, base única</li>
                    <li>Eventos contábeis automáticos</li>
                    <li>Relatórios e demonstrações MCASP</li>
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
                    <p>Dados do Planejamento chegam direto na Contabilidade. Pagamentos da Tesouraria baixam os empenhos automaticamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
                <div>
                    <h4>Conformidade garantida com a legislação</h4>
                    <p>Atualizações automáticas conforme portarias SOF, STN e exigências dos Tribunais de Contas de cada estado.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <div>
                    <h4>Redução de retrabalho</h4>
                    <p>Lançamentos automáticos via eventos contábeis eliminam digitação manual e erros na escrituração.</p>
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
            <p>O Contábil não trabalha isolado — ele é o centro financeiro que conecta todos os sistemas da gestão pública, eliminando redundâncias e garantindo dados únicos e confiáveis.</p>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary">
                Ver todas as integrações <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="ct-integracoes__map">
            <!-- Hub central -->
            <div class="ct-integ-hub">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <!-- Satélites -->
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Planejamento</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-coin"></i>
                <span>Tesouraria</span>
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
                    Analisando todo o processo pelo qual passamos, não tenho dúvidas do quanto a troca foi benéfica.
                    A solução é intuitiva e fácil de trabalhar, e a adaptação dos servidores foi muito rápida.
                    A organização no departamento melhorou muito logo após a implantação.
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <strong>Vanessa Azevedo de Almeida Gravel</strong>
                        <span>Contadora · Prefeitura de Rio das Flores, RJ</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Resultados alcançados</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Migração desktop → cloud sem interrupção dos serviços
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Prestações de contas mensais, bimestrais e semestrais no prazo
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Departamento operando de forma independente em 90 dias
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Customização completa para a realidade do estado do RJ
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
            <h2>Perguntas sobre o Contábil</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema atende às exigências do meu estado?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim. O sistema é desenvolvido para ser aderente às particularidades de cada estado brasileiro, incluindo as exigências específicas de cada Tribunal de Contas. A Custom Sistemas, como revendedora autorizada, garante que as configurações sejam ajustadas à realidade do seu município.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona a migração do sistema desktop para o cloud?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    A migração é feita com acompanhamento completo da nossa equipe de implantação. O processo inclui mapeamento dos dados históricos, migração assistida, treinamento dos usuários e acompanhamento nos primeiros meses de operação — sem interrupção das atividades do município.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema se integra com outros que já usamos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    O Contábil se integra nativamente com todos os sistemas da linha Betha: Planejamento, Tesouraria, Folha de Pagamento, Contratos, Compras, Patrimônio e Tributos. Para sistemas de terceiros, avaliamos as possibilidades de integração via API durante a etapa de levantamento.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como são feitas as atualizações de legislação?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Por ser 100% em nuvem, as atualizações são aplicadas automaticamente — sem nenhuma ação necessária da TI municipal. Quando há mudanças em portarias SOF, STN ou exigências dos Tribunais de Contas, o sistema já é atualizado antes da vigência da nova norma.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Quantos usuários podem acessar simultaneamente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Por ser cloud, o sistema suporta múltiplos usuários simultâneos sem degradação de performance. O número de licenças é definido no contrato e pode ser ajustado conforme a necessidade do município.
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ════════════════════════════════════════════════════
     9. CTA FINAL
     ════════════════════════════════════════════════════ -->
<section class="ct-cta">
    <div class="ct-cta__inner">
        <div class="ct-cta__content">
            <div class="ct-cta__icon">
                <i class="bi bi-calculator-fill"></i>
            </div>
            <h2>Pronto para modernizar a contabilidade do seu município?</h2>
            <p>Agende uma demonstração gratuita e veja o sistema funcionando com dados reais do seu município.</p>
            <div class="ct-cta__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração gratuita
                </a>
                <a href="<?php echo esc_url( home_url( '/suporte/' ) ); ?>" class="ct-cta__link">
                    <i class="bi bi-telephone"></i>
                    Falar com um especialista
                </a>
            </div>
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
