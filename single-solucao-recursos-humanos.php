<?php
/**
 * single-solucao-recursos-humanos.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "recursos-humanos".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-recursos-humanos.php → single-solucao.php → single.php
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
                <span>Recursos Humanos</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Gestão completa · Automação
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Recursos Humanos</span><br>
                Pública em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Automatize as tarefas operacionais rotineiras e modernize o setor de Recursos Humanos da sua entidade pública.
                Com a tecnologia, é possível transformar a qualidade da gestão da carreira e a vida funcional do servidor público.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+5.000</strong>
                    <span>servidores gerenciados</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>aderente à legislação</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Recursos Humanos">

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
            <h2>Gestão completa de Recursos Humanos integrada e automatizada</h2>
            <p>
                O sistema RH automatiza tarefas operacionais rotineiras, modernizando o setor de Recursos Humanos da entidade pública.
                Desde a admissão até a aposentadoria, todo o registro de informações relacionado ao servidor público está armazenado.
            </p>
            <p>
                Desenvolvido para atender entidades públicas, o sistema oferece controle integral da vida funcional, gerenciamento de saúde e segurança do trabalho,
                gestão de recrutamento e seleção, além do registro de formação acadêmica.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-lg"></i> Controle integral da vida funcional do servidor</li>
                <li><i class="bi bi-check-lg"></i> Gerenciamento de Saúde e Segurança do Trabalho</li>
                <li><i class="bi bi-check-lg"></i> Gestão de recrutamento e seleção</li>
                <li><i class="bi bi-check-lg"></i> Registro de formação acadêmica</li>
                <li><i class="bi bi-check-lg"></i> Integração com Folha de Pagamento e Contábil</li>
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
                <p>Compartilha dados em tempo real com Folha, Contábil, Tesouraria e demais sistemas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-person-badge-fill"></i>
                <h4>Gestão completa</h4>
                <p>Do recrutamento à aposentadoria, controle total da carreira e vida funcional do servidor.</p>
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
            <h2>Tudo que sua gestão de RH municipal precisa</h2>
            <p>Cada módulo foi projetado para cobrir uma etapa do ciclo de gestão de pessoas e recursos humanos.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:209,87%,37%">
                    <i class="bi bi-person-lines-fill" style="color:#fff;"></i>
                </div>
                <h3>Controle da Vida Funcional</h3>
                <p>Desde admissão até aposentadoria, registro completo de informações do servidor público.</p>
                <ul>
                    <li>Admissão e desligamento</li>
                    <li>Progressões e promoções</li>
                    <li>Aposentadorias e pensões</li>
                    <li>Histórico completo</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:142,71%,45%">
                    <i class="bi bi-heart-pulse-fill" style="color:#fff;"></i>
                </div>
                <h3>Saúde e Segurança do Trabalho</h3>
                <p>Atende necessidades legais como PPRA, PCMSO, ASO, CAT e controla entrega de EPIs.</p>
                <ul>
                    <li>PPRA e PCMSO</li>
                    <li>Controle de EPIs</li>
                    <li>Atestados e laudos médicos</li>
                    <li>Fatores de risco</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:270,70%,55%">
                    <i class="bi bi-search" style="color:#fff;"></i>
                </div>
                <h3>Recrutamento e Seleção</h3>
                <p>Gestão completa de processos seletivos e concursos, da abertura do edital à contratação.</p>
                <ul>
                    <li>Abertura de editais</li>
                    <li>Processos seletivos</li>
                    <li>Concursos públicos</li>
                    <li>Contratação de aprovados</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:38,92%,50%">
                    <i class="bi bi-mortarboard-fill" style="color:#fff;"></i>
                </div>
                <h3>Registro de Formação</h3>
                <p>Informações detalhadas sobre formação acadêmica, cursos, treinamentos e qualificações.</p>
                <ul>
                    <li>Cursos e treinamentos</li>
                    <li>Pós-graduação e mestrados</li>
                    <li>Workshops e doutorados</li>
                    <li>Certificações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:355,80%,50%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>Módulo de Benefícios</h3>
                <p>Gerenciamento de planos de saúde, vale-transporte, alimentação, empréstimos e licenças.</p>
                <ul>
                    <li>Planos de saúde</li>
                    <li>Vale-transporte e alimentação</li>
                    <li>Empréstimos consignados</li>
                    <li>Licenças-prêmio</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc:186,80%,40%">
                    <i class="bi bi-clock-history" style="color:#fff;"></i>
                </div>
                <h3>Tempo de Serviço</h3>
                <p>Averbação, contagem de tempo de serviço, licenças-prêmio e adicionais.</p>
                <ul>
                    <li>Averbação de tempo</li>
                    <li>Contagem de serviço</li>
                    <li>Licenças-prêmio</li>
                    <li>Adicionais por tempo</li>
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
            <h2>Vantagens que fazem a diferença na gestão de pessoas</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-play-circle"></i>
                </div>
                <div>
                    <h4>Execução de tarefas em segundo plano</h4>
                    <p>Tarefas de rotina podem ser executadas em background enquanto o usuário trabalha online.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-arrow-left-right"></i>
                </div>
                <div>
                    <h4>Integração com demais sistemas</h4>
                    <p>Importação e exportação de dados com sistemas bancários, concursos e benefícios.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div>
                    <h4>Gestão completa do RH</h4>
                    <p>Recrutamento, seleção, contratos temporários, substituições e aposentadorias.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-file-earmark-medical"></i>
                </div>
                <div>
                    <h4>Lançamento de atestados médicos</h4>
                    <p>Registro de atestados e laudos médicos vinculados a afastamentos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-person-check"></i>
                </div>
                <div>
                    <h4>Controle de benefícios</h4>
                    <p>Administração de planos de saúde, vales e empréstimos de forma integrada.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Segurança do trabalho</h4>
                    <p>Controle de fatores de risco, EPIs e conformidade com normas de saúde ocupacional.</p>
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
            <p>O RH não trabalha isolado — ele é integrado com Folha de Pagamento, Contábil e demais sistemas, garantindo dados únicos e processos automatizados.</p>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary">
                Ver todas as integrações <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="ct-integracoes__map">
            <!-- Hub central -->
            <div class="ct-integ-hub">
                <i class="bi bi-person-badge-fill"></i>
                <span>RH</span>
            </div>
            <!-- Satélites -->
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-people-fill"></i>
                <span>Folha</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-coin"></i>
                <span>Tesouraria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Contratos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
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
                    Troca de tecnologia é divisor de águas na prefeitura de Mandirituba. Servidores passaram pela transição do desktop para a Nuvem e hoje colhem os benefícios da mudança.
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <strong>Prefeitura de Mandirituba</strong>
                        <span>Cliente Betha Sistemas · Paraná</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Resultados alcançados</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Modernização completa do setor de RH
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Automação de tarefas operacionais
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Controle integral da vida funcional
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Conformidade com legislação trabalhista
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
            <h2>Perguntas sobre Recursos Humanos</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema controla os períodos aquisitivos de licença-prêmio e adicionais de tempo de serviço?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, o sistema inclui averbação, contagem de tempo de serviço e acompanhamento de licenças-prêmio e adicionais.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Posso inserir novas perguntas no formulário de anamnese?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, o sistema permite customização do formulário de anamnese conforme as necessidades da entidade.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema tem algum prontuário médico para o funcionário?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, o módulo de saúde permite o registro de atestados, laudos médicos e acompanhamento médico do servidor.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema dispõe de recurso para gestão de concurso e processo seletivo?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, gestão completa desde a abertura do edital até a contratação dos candidatos aprovados.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema faz algum tipo de controle de benefícios?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, controle de planos de saúde, vale-transporte, vale-alimentação, empréstimos e funções gratificadas.
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema dispõe de controle dos fatores de risco nos ambientes de trabalho?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    Sim, atende às necessidades legais como PPRA, PCMSO e monitora fatores de risco e entrega de EPIs.
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
                <i class="bi bi-person-badge-fill"></i>
            </div>
            <h2>Pronto para modernizar o RH do seu município?</h2>
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