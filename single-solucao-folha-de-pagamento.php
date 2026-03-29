<?php
/**
 * single-solucao-folha-de-pagamento.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "folha-de-pagamento".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-folha-de-pagamento.php → single-solucao.php → single.php
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
                <span>Folha de Pagamento</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · eSocial · Automação completa
            </div>

            <h1>
                Automação da <span class="ct-hero__highlight">Folha de Pagamento</span><br>
                Pública em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Facilidade, agilidade e eficiência na elaboração da folha de pagamento da sua entidade pública.
                Automatize uma série de rotinas que, quando realizadas manualmente, demandam tempo e atenção.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+10.000</strong>
                    <span>servidores atendidos</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>aderente ao eSocial</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Folha de Pagamento">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Cálculo processado
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
            <h2>Folha de pagamento automatizada e sempre em conformidade</h2>
            <p>
                A solução Folha automatiza uma série de rotinas definidas para a folha de pagamento dos servidores,
                respeitando aumentos de salários definidos pela entidade, cumprimento de exigências e obrigações legais
                e regras de cálculo.
            </p>
            <p>
                Desenvolvido para atender qualquer entidade pública, o sistema administra desde a admissão até aposentadoria
                ou desligamento do servidor público. Ele reúne o controle de todos os tipos de matrículas num só ambiente.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-lg"></i> Automatização da folha de pagamento</li>
                <li><i class="bi bi-check-lg"></i> Gestão de carreiras dos servidores</li>
                <li><i class="bi bi-check-lg"></i> Processos sempre atualizados com legislação</li>
                <li><i class="bi bi-check-lg"></i> Integração com Contábil e Tesouraria</li>
                <li><i class="bi bi-check-lg"></i> Controle de admissão até aposentadoria</li>
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
                <p>Compartilha dados em tempo real com Contábil, Tesouraria, RH e demais sistemas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-calculator-fill"></i>
                <h4>Cálculos automáticos</h4>
                <p>Regras de cálculo atualizadas automaticamente, eliminando erros e retrabalho manual.</p>
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
            <h2>Tudo que sua folha de pagamento municipal precisa</h2>
            <p>Cada módulo foi projetado para cobrir uma etapa do ciclo de gestão de pessoal e folha de pagamento.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:209,87%,37%">
                    <i class="bi bi-calculator" style="color:#fff;"></i>
                </div>
                <h3>Automatização da Folha</h3>
                <p>Automatiza rotinas de folha de pagamento, respeitando aumentos salariais, exigências legais e regras de cálculo.</p>
                <ul>
                    <li>Cálculos automáticos de salários</li>
                    <li>Respeito a legislação vigente</li>
                    <li>Aumentos e reajustes automáticos</li>
                    <li>Controle de obrigações legais</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:142,71%,45%">
                    <i class="bi bi-person-badge" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Carreiras</h3>
                <p>Administra desde admissão até aposentadoria ou desligamento, reunindo controle de matrículas em ambiente único.</p>
                <ul>
                    <li>Admissão e desligamento</li>
                    <li>Controle de progressões</li>
                    <li>Aposentadorias e pensões</li>
                    <li>Histórico completo do servidor</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:270,70%,55%">
                    <i class="bi bi-arrow-repeat" style="color:#fff;"></i>
                </div>
                <h3>Processos Atualizados</h3>
                <p>Sempre que há alteração na legislação, as regras são atualizadas na solução e implantadas aos clientes.</p>
                <ul>
                    <li>Atualizações legislativas automáticas</li>
                    <li>Implantação imediata de mudanças</li>
                    <li>Conformidade garantida</li>
                    <li>Liberação para todos os clientes</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:38,92%,50%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>Gestão de Pagamentos</h3>
                <p>Ambiente centralizado para resolver problemas relacionados à folha de pagamento de forma eficiente.</p>
                <ul>
                    <li>Pagamentos centralizados</li>
                    <li>Resolução rápida de questões</li>
                    <li>Controle de benefícios e descontos</li>
                    <li>Integração com bancos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:355,80%,50%">
                    <i class="bi bi-file-earmark-text" style="color:#fff;"></i>
                </div>
                <h3>Cadastro de Beneficiários</h3>
                <p>Facilita controle de pagamentos, além de gerar pensões e benefícios automaticamente.</p>
                <ul>
                    <li>Cadastro de dependentes</li>
                    <li>Geração automática de pensões</li>
                    <li>Controle de benefícios</li>
                    <li>Atualização de dados</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:186,80%,40%">
                    <i class="bi bi-percent" style="color:#fff;"></i>
                </div>
                <h3>Cálculo de Descontos</h3>
                <p>Depois que benefícios são concedidos, os descontos nas folhas são gerados automaticamente.</p>
                <ul>
                    <li>Descontos automáticos</li>
                    <li>Cálculos precisos</li>
                    <li>Conformidade com regras</li>
                    <li>Auditoria de lançamentos</li>
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
            <h2>Vantagens que fazem a diferença na gestão de pessoal</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Disponibilização de informações</h4>
                    <p>Usuários podem consultar suas informações a qualquer hora e lugar, bastando ter acesso à internet.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <div>
                    <h4>Fluxo de admissão otimizado</h4>
                    <p>Quando admitido, os dados ficam disponíveis no sistema de RH, Ponto e Minha Folha automaticamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div>
                    <h4>Cadastro de beneficiários e autônomos</h4>
                    <p>Facilita controle dos pagamentos, gerando pensões e benefícios automaticamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-calculator"></i>
                </div>
                <div>
                    <h4>Cálculo automático de descontos</h4>
                    <p>Depois da concessão de benefícios, descontos são gerados automaticamente nas folhas.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-file-earmark-check"></i>
                </div>
                <div>
                    <h4>eSocial</h4>
                    <p>O sistema já está aderente à legislação do eSocial, garantindo conformidade.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div>
                    <h4>Gestão de provisões</h4>
                    <p>Calcula mensalmente provisões de férias e 13º salário para consulta e interação com Contábil.</p>
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
            <p>A Folha não trabalha isolada — ela é integrada com Contábil, Tesouraria e demais sistemas, garantindo dados únicos e processos automatizados.</p>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary">
                Ver todas as integrações <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="ct-integracoes__map">
            <!-- Hub central -->
            <div class="ct-integ-hub">
                <i class="bi bi-people-fill"></i>
                <span>Folha</span>
            </div>
            <!-- Satélites -->
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-coin"></i>
                <span>Tesouraria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-file-earmark-check-fill"></i>
                <span>E-social</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-receipt"></i>
                <span>Contracheque</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
                <i class="bi bi-eye-fill"></i>
                <span>Transparência</span>
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
                    Santana do Itararé conta com os benefícios da Nuvem. Dentre eles, destacam-se a autonomia,
                    a integração entre soluções e eficiência na resolução de eventuais questões técnicas.
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <strong>Prefeitura de Santana do Itararé</strong>
                        <span>Cliente Betha Sistemas · Paraná</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Resultados alcançados</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Automação completa da folha de pagamento
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Redução de erros em cálculos salariais
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Conformidade total com eSocial
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Integração nativa com sistemas contábeis
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
            <h2>Perguntas sobre a Folha de Pagamento</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Para realizar manutenção nas regras de cálculo dos eventos de folha é necessário encaminhar solicitação para a contratada?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, alterações nas regras de cálculo devem ser solicitadas à equipe técnica para validação e implementação segura.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A solução permite diferentes configurações de férias?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, o sistema permite configurações flexíveis para férias, incluindo diferentes regimes e cálculos específicos por categoria.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como eu faço para verificar os períodos aquisitivos de férias dos colaboradores?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Através do módulo de gestão de pessoal, é possível consultar o histórico completo de férias e períodos aquisitivos de cada servidor.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como o sistema faz para pagar as médias e vantagens em férias e 13º Salário?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Os cálculos são feitos automaticamente com base nas regras configuradas, garantindo precisão e conformidade legal.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Depois de disparar um cálculo ou um processo no sistema, é necessário aguardar a finalização do processo para continuar a utilizar o sistema?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Não, o sistema permite processamento em background, permitindo que o usuário continue trabalhando enquanto os cálculos são executados.
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
                <i class="bi bi-people-fill"></i>
            </div>
            <h2>Pronto para automatizar a folha do seu município?</h2>
            <p>Agende uma demonstração gratuita e veja o sistema funcionando com dados reais da sua entidade.</p>
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