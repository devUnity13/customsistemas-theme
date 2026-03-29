<?php
/**
 * single-solucao-educacao.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "educacao".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-educacao.php → single-solucao.php → single.php
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
                <span>Educação</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Gestão Escolar · Inteligência
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Educação</span><br>
                Municipal em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Sistema em nuvem desenhado para simplificar e otimizar a administração da rede de ensino municipal.
                Gerencie turmas, alunos, matrizes curriculares e avaliações de qualquer lugar e a qualquer momento.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>conformidade BNCC</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>IA</strong>
                    <span>predição de evasão</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>24/7</strong>
                    <span>acesso online</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="btn-custom-primary btn-lg">
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Educação">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Diário Digital Ativo
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
                <strong>100%</strong>
                <span>integração Censo</span>
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
            <h2>Gestão inteligente da rede de ensino</h2>
            <p>
                O sistema de Educação proporciona um ambiente completo e integrado para o controle escolar,
                atendendo às necessidades de escolas, professores e da própria Secretaria de Educação.
            </p>
            <p>
                Com recursos avançados de Inteligência Artificial para identificar riscos de evasão e reprovação,
                aliado à gestão de vagas, matrículas e diário de classe digital, a sua rede municipal transforma o
                dia a dia das escolas com tecnologia de ponta, 100% adaptada à Base Nacional Comum Curricular (BNCC).
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Controle eficiente de vagas e lista de espera</li>
                <li><i class="bi bi-check-circle-fill"></i> IA preditiva contra evasão escolar</li>
                <li><i class="bi bi-check-circle-fill"></i> Planejamento centralizado com calendários flexíveis</li>
                <li><i class="bi bi-check-circle-fill"></i> Sincronização automática de turmas e diários</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-person-lines-fill"></i>
                <h4>Controle de Vagas</h4>
                <p>Gestão completa da fila de espera e alocação de matrículas.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-book"></i>
                <h4>Conformidade BNCC</h4>
                <p>Atendimento total às novas diretrizes curriculares nacionais.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-cpu-fill"></i>
                <h4>IA Educacional</h4>
                <p>Predição avançada do risco de abandono ou reprovação do aluno.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-phone-vibrate"></i>
                <h4>Diário de Classe</h4>
                <p>Registro digitalizado de presenças, notas e conteúdos em tempo real.</p>
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
            <h2>Funcionalidades para maximizar a aprendizagem</h2>
            <p>Explore as ferramentas que transformam a gestão educacional no seu município.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-people" style="color:#fff;"></i>
                </div>
                <h3>Lista de Espera e Vagas</h3>
                <p>Distribuição justa e transparente das vagas escolares.</p>
                <ul>
                    <li>Fila de espera eletrônica</li>
                    <li>Critérios parametrizáveis</li>
                    <li>Alocação eficiente</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-card-checklist" style="color:#fff;"></i>
                </div>
                <h3>Matrículas e Rematrículas</h3>
                <p>Fluxo digital ágil que elimina o uso de papéis e filas na escola.</p>
                <ul>
                    <li>Renovação simplificada</li>
                    <li>Cadastro do aluno integrado</li>
                    <li>Histórico preservado</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-journal-check" style="color:#fff;"></i>
                </div>
                <h3>Diário de Classe Digital</h3>
                <p>Ferramenta essencial para professores ganharem produtividade.</p>
                <ul>
                    <li>Lançamento rápido via app web</li>
                    <li>Conteúdo programático</li>
                    <li>Controle de conceitos e faltas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-table" style="color:#fff;"></i>
                </div>
                <h3>Quadros de Horários Flexíveis</h3>
                <p>Distribua a carga horária e disciplinas de forma otimizada.</p>
                <ul>
                    <li>Horários personalizados</li>
                    <li>Prevenção de choques de aulas</li>
                    <li>Apoio a turmas multisseriadas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-cpu" style="color:#fff;"></i>
                </div>
                <h3>Inteligência Artificial (Evasão)</h3>
                <p>Algoritmos analisam notas, faltas e perfis para prever riscos sociais.</p>
                <ul>
                    <li>Alertas automáticos para direção</li>
                    <li>Ações de resgate do aluno</li>
                    <li>Diminuição de indicadores negativos</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-bar-chart" style="color:#fff;"></i>
                </div>
                <h3>Desempenho Escolar e Avaliações</h3>
                <p>Acompanhe o rendimento e gere boletins automáticos.</p>
                <ul>
                    <li>Modelos customizáveis (notas e pareceres)</li>
                    <li>Cálculos de médias automáticos</li>
                    <li>Sincronia rápida do Censo Escolar</li>
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
            <h2>Por que escolher o Sistema de Educação Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-award"></i>
                </div>
                <div>
                    <h4>BNCC Integrada</h4>
                    <p>Gerenciamento completo das etapas do ensino fundamentado 100% na Base Nacional Comum Curricular
                        (BNCC).</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-calendar3"></i>
                </div>
                <div>
                    <h4>Calendários Customizáveis</h4>
                    <p>As escolas podem personalizar seus próprios quadros de atividades a partir das premissas lançadas
                        pela secretaria central.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                </div>
                <div>
                    <h4>Boletins e Avaliações Flexíveis</h4>
                    <p>Permite a criação de múltiplos modelos adaptáveis de boletins escolares e diferentes metodologias
                        ou conceitos conceituais.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-person-bounding-box"></i>
                </div>
                <div>
                    <h4>Frequência Biométrica</h4>
                    <p>Traz o moderno recurso inovador e indispensável que é o efetivo controle diário embasado através
                        do reconhecimento facial dos matriculados.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-google"></i>
                </div>
                <div>
                    <h4>Integração Google Classroom</h4>
                    <p>Mantenha turmas virtuais sincrônicas criadas em poucos cliques para suporte ao eficiente ensino
                        dinâmico em modelos modernos híbridos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <div>
                    <h4>LGPD e Segurança de Dados</h4>
                    <p>Rotinas robustas em servidores focadas especificamente em total proteção de banco de informações
                        seguindo rígida proteção legal.</p>
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
                A tecnologia em educação precisa conversar ativamente com ferramentas diversas.
                O módulo interliga RH, Merenda Escolar, Portal Transparência e Portais Google.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-book"></i>
                <span>Educação</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Diário de Classe">
                <i class="bi bi-journal"></i>
                <span>Diário</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="RH / Folha">
                <i class="bi bi-cash-stack"></i>
                <span>RH</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Merenda Escolar">
                <i class="bi bi-cup-straw"></i>
                <span>Merenda</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Censo Escolar">
                <i class="bi bi-file-earmark-text"></i>
                <span>Censo</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Google Classroom">
                <i class="bi bi-google"></i>
                <span>Classroom</span>
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
                    "Utilizando a Inteligência Artificial e o diário digitalizado, conseguimos antecipar o risco de
                    reprovação
                    e agir junto às famílias em tempo recorde. Eliminamos o retrabalho excessivo manual e finalmente
                    garantimos
                    todas as informações do Censo enviadas perfeitamente alinhadas."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Mariana Costa</strong>
                    <span>Secretária Municipal de Educação</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término da digitação de diários no final do ano</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Queda de 30% nas taxas de evasão ao longo dos cursos</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Organização central e transparente de amplas filas de vagas nas creches</span>
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
            <h2>Principais dúvidas sobre o sistema de Educação</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O envio dos dados para o Ministério da Educação (Censo) é dificultoso?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Não, os trâmites do sistema Betha organizam automaticamente toda extração simplificada dos
                        detalhamentos estatísticos do período vigente necessários aos processos anuais vitais do
                        Educacenso oficial (Inep), agilizando a integração completa nacional sem demandar refações
                        intensas contínuas por toda diretoria escolar.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A virada de ano e transição do calendário é rápida e segura para manter o histórico?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>A sincronia otimizada efetua essa etapa morosa e vital perfeitamente, garantindo fluidez ímpar ao
                        transferir matriculas consolidadas, currículos pedagógicos, permitindo em escassos cliques
                        validados duplicar ou copiar cadastros de períodos idênticos entre anos para uso pronto das
                        redes vinculadas municipais educacionais.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona exatamente a gestão de EJA (Educação de Jovens e Adultos)?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O layout estrutural ampara perfeitamente rotinas moldadas exclusivamente às exigências normativas
                        exclusivas aplicáveis à modalidade EJA. Permitindo o cadastro, remanejamentos fracionados
                        flexíveis das turmas, diários específicos, matriz e apuração avaliativa simplificada conforme
                        decretos singulares destas alas diferenciadas do aprendizado.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    As escolas criam as turmas sozinhas ou depende da secretaria?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O ambiente provê governança sistêmica ampla descentralizada com total amparo logado colaborativo
                        – contudo as permissões personalizáveis controlam hierarquicamente quem fará os cadastros: a
                        gestão regional elabora base macro e matriz comum (BNCC) de onde o gestor e diretor particular
                        definem os pormenores customizáveis nas ramificações escolares sob sua rígida gerência e alçada
                        em localidade isolada.</p>
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
            <i class="bi bi-book"></i>
        </div>

        <h2>Transforme o futuro educacional do seu município</h2>

        <p>
            Capacite seus professores e integre sua gestão com diário eletrônico, inteligência artificial integrada,
            reconhecimento facial para evitar evasão, entregando controle imediato em tempo real ao gestor
            da importante rede pública de forma rápida.
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