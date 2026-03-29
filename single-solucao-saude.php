<?php
/**
 * single-solucao-saude.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "saude".
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
                <span>Saúde</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Humanização · Inteligência
            </div>

            <h1>
                Gestão inteligente e <span class="ct-hero__highlight">humanizada</span><br>
                na Saúde municipal
            </h1>

            <p class="ct-hero__desc">
                O Saúde é uma solução completa e inovadora que simplifica a gestão e oferece diversos benefícios como ferramentas de apoio ao gestor, segurança no registro das informações e otimização de recursos físicos.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>ambiente nuvem</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>+ Agilidade</strong>
                    <span>no atendimento</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Contínuo</strong>
                    <span>conformidade SUS</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-saude.png'; ?>" alt="Mockup Saúde" onerror="this.src='https://placehold.co/600x400/7aa352/ffffff?text=Interface+Saúde'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Previne Brasil
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
            <h2>Processos simplificados e produção automatizada</h2>
            <p>
                O sistema auxiliará os profissionais a proporcionar um atendimento extremamente humanizado ao paciente, automatizando registros complexos, gerando faturamentos com eficiência e acompanhando todos os indicadores estabelecidos das metas do Previna Brasil.
            </p>
            <p>
                Seu rigoroso controle evita a repetição desnecessária de exames, refletindo diretamente em redução nos custos, enquanto se interliga de maneira nativa na rede com o E-SUS, BPA e SIGTAP repassando transparentemente as requisições geradas.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Integração direta com E-SUS, CADSUS, SIGTAP e SIGAF</li>
                <li><i class="bi bi-check-circle-fill"></i> Redução acentuada em custos e retrabalhos</li>
                <li><i class="bi bi-check-circle-fill"></i> Acompanhamento rápido das metas Previne Brasil</li>
                <li><i class="bi bi-check-circle-fill"></i> Dispensação de medicamentos controlada (Horus)</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-cloud-check"></i>
                <h4>Nuvem Segura</h4>
                <p>Tecnologia escalável que dispensa infraestrutura local cara de TI no município.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-heart-pulse"></i>
                <h4>Atendimento Ágil</h4>
                <p>Processos totalmente orientados para humanizar o foco direto no cuidado do paciente.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-shield-check"></i>
                <h4>Segurança Legal</h4>
                <p>Adequado com todas as recentes portarias vigentes do Ministério da Saúde.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-diagram-3"></i>
                <h4>Integração Nativa</h4>
                <p>Conectado e interoperável com Folha, Pessoal, e Compras nas soluções centrais.</p>
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
            <h2>Tudo o que a Secretaria de Saúde precisa em uma plataforma centralizada</h2>
            <p>Explore as funcionalidades que compõem nossa solução para gestão ambulatorial inteligente.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-hospital" style="color:#fff;"></i>
                </div>
                <h3>Consultório Multiprofissional</h3>
                <p>Ambiente único estruturado para organizar recepção, triagem rotineira, acolhimento inicial e o próprio atendimento clínico.</p>
                <ul>
                    <li>Geração de produção enviada automática</li>
                    <li>Otimização nas longas filas rotineiras</li>
                    <li>Registro rápido do acolhimento multiprofissional</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-journal-medical" style="color:#fff;"></i>
                </div>
                <h3>Registro Eletrônico (RES)</h3>
                <p>Sustenta rigorosamente o amplo histórico clínico de passagens focado no diagnóstico claro permitindo revisões assertivas.</p>
                <ul>
                    <li>Prontuário de informações detalhadas</li>
                    <li>Segurança contínua a cada prescrição ativa</li>
                    <li>Acesso cronológico fidedigno pelo plantão</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-funnel-fill" style="color:#fff;"></i>
                </div>
                <h3>Central de Regulação</h3>
                <p>Distribuição transparente efetuando gestão exata em toda base das cotas operacionais físicas e financeiras de teto repassadas.</p>
                <ul>
                    <li>Manejo nos pedidos ambulatoriais especializados</li>
                    <li>Despacho dinâmico garantindo equilíbrio de cota</li>
                    <li>Regulação ágil na ocupação da rede credenciada</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-camera-video-fill" style="color:#fff;"></i>
                </div>
                <h3>Telemedicina Integrada</h3>
                <p>Promove acompanhamento remoto e amplia vastamente os limites das coberturas populacionais reduzindo a perigosa circulação presencial nos postinhos locais.</p>
                <ul>
                    <li>Atendimentos online humanizados</li>
                    <li>Acompanhamento digital sem riscos</li>
                    <li>Expansão territorial via acolhimento remoto</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-prescription2" style="color:#fff;"></i>
                </div>
                <h3>Estoque e Farmácia</h3>
                <p>Rastreia com precisão lotes despachados e monitoridades de inventário. Garante um rigoroso escoamento dos medicamentos nas gôndolas municipais em unidades locais.</p>
                <ul>
                    <li>Dispensação criteriosa aos pacientes</li>
                    <li>Identificação de lotes e vencimentos imediatos</li>
                    <li>Interação com dispensário da área contábil</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-phone-fill" style="color:#fff;"></i>
                </div>
                <h3>Agendamento via App</h3>
                <p>Forte comodidade oferecida e instalada do lado oposto, permitindo que os beneficiados façam marcações, visualizem quadros de aviso e desmarquem consultas na palma da mão.</p>
                <ul>
                    <li>Mitiga absenteísmos não justificados</li>
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
            <h2>O que muda utilizando o sistema Saúde na cidade?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-layout-text-sidebar-reverse"></i>
                </div>
                <div>
                    <h4>Produção simplificada</h4>
                    <p>Substitui o engessado modelo cartular manual de papel preenchendo todos laudos, exigências vitais e receituários num ambiente ágil minimizando retrabalhos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-box-arrow-up-right"></i>
                </div>
                <div>
                    <h4>Emissão 100% E-SUS ligada</h4>
                    <p>Não ocorrem temidas quebras ou re-digitação perigosa perdendo números pois todos BPA criados nos balcões caem validados e íntegros.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-graph-down-arrow"></i>
                </div>
                <div>
                    <h4>Economia orçamentária fiscal</h4>
                    <p>O extenso resguardo do paciente bloqueia imensos gastos derivados por solicitações e requisições repetitivas com as mesmas conferências.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-reception-4"></i>
                </div>
                <div>
                    <h4>Alertas contínuos robotizados</h4>
                    <p>O próprio fluxo embutiu ligações e disparos comunicadores nas bases dos pacientes cadastrados, abaixando muito os níveis críticos.</p>
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
            <h2>Plataforma integrada com o ecossistema municipal</h2>
            <p>
                Totalmente integrada às soluções da Betha, o sistema transita dados de forma bidirecional sem fricção, mantendo total aderência a Portarias vigentes exigidas.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-heart-pulse-fill"></i>
                <span>SAÚDE</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="E-SUS">
                <i class="bi bi-hospital"></i>
                <span>E-SUS</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="CADSUS">
                <i class="bi bi-person-badge"></i>
                <span>CADSUS</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Contábil">
                <i class="bi bi-kanban"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Pessoal">
                <i class="bi bi-people"></i>
                <span>Pessoal</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Compras">
                <i class="bi bi-cart"></i>
                <span>Compras</span>
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
                    "Com a implantação do sistema Saúde integrando nossas UBSs e nossa regulação, diminuímos em mais de 40% a fila de espera e temos segurança plena de que toda a nossa produção de fato sobe para o Ministério da Saúde garantindo nosso repasse financeiro regular."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Dra. Amanda Nogueira</strong>
                    <span>Secretária de Saúde e Regulação Integrada</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Sincronismo absoluto nos BPA validados</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Dinamismo na marcação de exames diminuindo evasão</span>
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
            <h2>Principais dúvidas sobre o sistema Saúde</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema envia notificações ativas avisando os pacientes sobre a iminência aproximação da consulta?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim! Para mitigar a falta, o sistema conta fortemente com robôs de chamadas robotizadas e de voz disparando mensagens de confirmação enviadas automaticamente ao número primário cadastrado sempre muito próximas nas imediações as datas ativamente agendadas internamente confirmando o compromisso de cada cidadão munícipe agendado.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Onde todos as vitais e densas informações da ficha preenchida e prescrições médicas ficam armazenadas?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O ambiente provido atua totalmente em nuvem. Essa infraestrutura gigantesca hospeda assegurando disponibilidade, centralização fortificada perante sequestro, e o vastíssimo histórico longo de diagnósticos fica protegido ali perfeitamente acessível de forma redundante e ágil em qualquer hora.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A arquitetura cumpre e atende os pilares exigidos frente as dinâmicas modernizações e legislações vigentes?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim. O escopo focado do nosso negócio mantém o sistema plenamente em compasso com os rígidos órgãos reguladores nacionais. Adequado fortemente seguindo portarias consolidadas como a 344/98 garantindo relatórios aprováveis anualmente nos vistorias governamentais federais acionadas rigorosamente.</p>
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
            <i class="bi bi-heart-pulse"></i>
        </div>

        <h2>Impulsione o desempenho da unidade com gestão eficiente.</h2>

        <p>
            Promova rapidez, resolubilidade plena de filas e cuidado ímpar centralizando tudo nesta inovadora plataforma robusta projetada cirurgicamente suprindo toda imensidade ambulatorial da sua Secretaria.
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

<?php get_footer(); ?>
