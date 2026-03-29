<?php
/**
 * single-solucao-pais-e-alunos.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "pais-e-alunos".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-pais-e-alunos.php → single-solucao.php → single.php
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
                <span>Pais e Alunos</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Comunicação · Aproximação
            </div>

            <h1>
                Portal Direto para <span class="ct-hero__highlight">Pais e Alunos</span><br>
                da Comunidade Escolar
            </h1>

            <p class="ct-hero__desc">
                Solução interativa na nuvem que estimula continuamente o elo relacional positivo e engajado, 
                aproximando a família fortemente da escola por meio do controle escolar e comunicados dinâmicos e abertos.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+70%</strong>
                    <span>de engajamento das famílias</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>transparência das notas</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>24/7</strong>
                    <span>boletim na palma da mão</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver portal
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Pais e Alunos">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Portal Atualizado
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
                <strong>Comunicação Ágil</strong>
                <span>avisos em tempo real</span>
            </div>
            <div class="ct-trust__item">
                <strong>Mobile Ready</strong>
                <span>acesso em qualquer dispositivo</span>
            </div>
            <div class="ct-trust__item">
                <strong>+20 anos</strong>
                <span>de experiência em gestão</span>
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
            <div class="section-label">Sobre o Portal</div>
            <h2>Sua escola de mãos dadas com a família</h2>
            <p>
                A tecnologia Cloud da Betha oferece para a rede de ensino do município este portal moderno 
                exclusivamente desenhado para ser uma via unificada de acompanhamento das crianças pelas famílias.
            </p>
            <p>
                As informações curriculares se consolidam em um núcleo para consulta célere e ágil: 
                boletins trimestrais, registro dinâmico de ausências ou eventuais faltas no mês, comunicados avulsos 
                importantes e toda a rotina de classe disponibilizada para impulsionar a vida educacional conectada.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Conecta pais diretamente com a vida diária dos filhos</li>
                <li><i class="bi bi-check-circle-fill"></i> Centraliza informações valiosas (Boletim, Frequência, Calendário)</li>
                <li><i class="bi bi-check-circle-fill"></i> Dispensa reuniões extras focadas apenas em entregar notas e boletins</li>
                <li><i class="bi bi-check-circle-fill"></i> Amplifica a transparência e confiança mútua escolarização-comunidade</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-envelope-open-fill"></i>
                <h4>Comunicados</h4>
                <p>Notificações contínuas e seguras da administração com o responsável legal.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-card-heading"></i>
                <h4>Boletim Escolar</h4>
                <p>Desempenho letivo oficial divulgado simultaneamente após correções sem atritos.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-calendar2-check-fill"></i>
                <h4>Eventos Escolares</h4>
                <p>Mural dinâmico de datas fundamentais como rematrículas, passeios ou férias.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-shield-shaded"></i>
                <h4>Controle Pessoal</h4>
                <p>Abertura para acesso às próprias matrículas, histórico de requerimentos de todos dependentes.</p>
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
            <div class="section-label">Recursos do Portal</div>
            <h2>O que os Pais e os Alunos visualizam?</h2>
            <p>Explore as janelas principais onde as famílias acessam a realidade diária dos aprendizes e o histórico escolar municipal.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-mortarboard" style="color:#fff;"></i>
                </div>
                <h3>Consulta de Matrículas</h3>
                <p>Visualize as alocações regulares correntes ou das pendentes e confirmadas.</p>
                <ul>
                    <li>Ver todos os filhos na mesma grade</li>
                    <li>Séries atuais e detalhamentos locais</li>
                    <li>Posições da lista ampla municipal</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-list-columns-reverse" style="color:#fff;"></i>
                </div>
                <h3>Quadro de Horários</h3>
                <p>Visualize organizadamente toda a grade semanal diária lecionada e os horários vitais.</p>
                <ul>
                    <li>Disciplinas alocadas ativas diárias</li>
                    <li>Início das aulas e intervalos longos</li>
                    <li>Preparo e auxílio ao agendamento de recados extra sala</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-journal-text" style="color:#fff;"></i>
                </div>
                <h3>Boletins e Notas Parciais</h3>
                <p>Supervisione os resultados concretos a cada trimestre sem intermediários e surpresas.</p>
                <ul>
                    <li>Resultados fracionados do bimestre ativo</li>
                    <li>Geração do Parecer Descritivo individualizado</li>
                    <li>Notas detalhadas recém lançadas no ambiente escolar</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-person-check" style="color:#fff;"></i>
                </div>
                <h3>Relatórios de Frequência</h3>
                <p>Transparência total dos acessos diários e presença marcante de cada dependente registrado e faltoso.</p>
                <ul>
                    <li>Marcação visual atrativa confirmada de assiduidade</li>
                    <li>Justificativas submetidas aprovadas</li>
                    <li>Avisos por disciplinas faltadas (fundamental e ensino médio)</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-file-earmark-person" style="color:#fff;"></i>
                </div>
                <h3>Dados Cadastrais Sociais</h3>
                <p>Checagem fundamental se todos formulários informacionais inseridos constam fielmente íntegros ao sistema oficial.</p>
                <ul>
                    <li>Atualização dos alertas para contato e documentações e fotos</li>
                    <li>Revisão visual do espelho cadastral matriz discente</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 44, 96%, 48%">
                    <i class="bi bi-chat-dots" style="color:#fff;"></i>
                </div>
                <h3>Canal Seguros Exclusivo de Mensagens</h3>
                <p>Interlocução de ponta a ponta sem ruídos diretos ao portal individual restrito da secretaria pedagógica.</p>
                <ul>
                    <li>Recepção de informativos centrais departamentais abertos</li>
                    <li>Convocação para orientações confidenciais sem expor à agenda pública diária</li>
                    <li>Elimina os grupos de WhatsApp que promovem confusão generalizada iminente</li>
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
            <h2>Por que este portal relacional transforma o município?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-signpost-split"></i>
                </div>
                <div>
                    <h4>Combate ao "Abismo da Comunicação" Escolar</h4>
                    <p>Cerca de apenas 30% ou em menor faixa das famílias no Brasil conseguem acompanhar o ensino. Com notificação passiva integrada facilitadora revertemos tais quadros dolorosos imensamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-check2-circle"></i>
                </div>
                <div>
                    <h4>Resgate Educacional Iminente</h4>
                    <p>Ao se deparar rapidamente no sistema web com faltas parciais pontuais, os tutores podem cobrar responsabilidade ao aluno sem esperar as amargas reprovações letivas bimestrais finais concretizadas infalivelmente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-clipboard2-data"></i>
                </div>
                <div>
                    <h4>Fim das Intrigas de "Esqueceu as Notas na Mochila"</h4>
                    <p>O acompanhamento 100% digital exclui velhas desculpas do histórico juvenil: assim que logado, avaliações fechadas pelo Módulo Professor aparecem automaticamente sem falhas transparentemente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-hand-index-thumb"></i>
                </div>
                <div>
                    <h4>Acesso Ágil Mobile Cloud</h4>
                    <p>Utilização prática simples por qualquer navegador do tablet e celular nas ruas descomplica as ações das rotinas sobre as movimentações letivas da rede pública de ensino do munícipio.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-chat-right-quote"></i>
                </div>
                <div>
                    <h4>Mitigação nos Casos Críticos Excepcionais Mundiais</h4>
                    <p>O case divulgado do Município Timbó usou amplamente em pandemias essa frente web ativa integradora para alocar todas trocas letivas online seguras contendo a evasão estudantil local e isolando abalos.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-emoji-smile"></i>
                </div>
                <div>
                    <h4>Amigável ao Usuário Leigo Socialmente</h4>
                    <p>Interface altamente direta minimalística sem infinitas abas ocultas labirínticas complexas com textos burocráticos imprecisos focada unicamente na relação Família x Notas e Rendimento global unificado em única via.</p>
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
            <h2>Janela digital interligada ao ecossistema educacional total</h2>
            <p>
                Este módulo serve rigorosamente como a frente unificada espelhada virtualizada onde os lançamentos 
                operados pelos educadores e administradores da Secretaria de Educação se cristalizam prontamente e exibem valor social real apurado perante a sociedade mantenedora da rede civil pública comum.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-house-door"></i>
                <span>Portal Final</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Gestão Escolar Oficial">
                <i class="bi bi-building"></i>
                <span>Gestão Escoli.</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Diário Professor Virtual">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Diário (Prof)</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Frequência Reconhecimento (Face)">
                <i class="bi bi-person-bounding-box"></i>
                <span>Biometria F.</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Censo Escolar Matricial">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span>Censo INEP</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Listas de Alocação Externa Públicas Reservadas">
                <i class="bi bi-list-task"></i>
                <span>Vagas (Aloc)</span>
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
                    "Centralizamos os materiais pedagógicos e a comunicação durante períodos complexos emergenciais letivos inteiramente pelo Portal. Consequentemente conseguimos manter acesa integralmente 
                    a chama do interesse estudantil evitando a desconexão temida, mitigando efeitos catastróficos no aprendizado que inviabilizariam anos do aluno ao longo e amplo desenvolvimento social educacional regional global na infância letiva!"
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div>
                    <strong>Prefeitura de Timbó</strong>
                    <span>Secretaria de Educação atuante</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados comprovados neste case:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Comunicação centralizada fluída com todo núcleo familiar atingindo imensidão populacional de alunos integrados</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Salvaguarda protetiva iminente contra perda do semestre acadêmico e anos educacionais da jornada infanto escolar comum unida</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Aceleração no retorno colaborativo ao novo normal letivo após liberação geral</span>
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
            <h2>Principais dúvidas sobre a plataforma de acompanhamento Pais e Alunos</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O portal gera cobranças ou mensalidades? Custa dinheiro do usuário final?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Definitivamente não, o fornecimento total e absoluto amplo de todo este aplicativo acessível é de estrita responsabilidade custeada e habilitante pela prefeitura conectada à malha provedora da mantenedora Betha, garantindo equidade gratuita em rede universal do portal voltado aos contribuintes em geral com matrícula dependente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como ficam as notas alteradas ou reavaliadas após inseridas e publicadas pelo professor?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Qualquer reajuste submetido com anuência do corpo conselheiro pedagógico docente e substituído diretamente e re-salvo na prancheta gerencial ou diário digital por dentro do sistema se refletirá instantaneamente realinhado visualmente no portal público dos responsáveis acompanhando aquele fechamento trimestral espumoso modificado ativamente consolidando confiabilidade extrema de transparência global!</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Mães ou Pais com diferentes filhos em diferentes escolas municipais terão de logar separadamente de forma estressante e repetitiva diária chata?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Por possuir avançada identificação por via cruzamento do banco social unificado CPFs vinculados tutoriares dentro do Cadastro Cidadão Municipal, o mesmo adulto logando na plataforma poderá gerenciar em modo painel em um painel condensado central (dashboard familiar geral interativo rápido) todos aprendizes independentes do agrupamento das alas físicas cursadas municipais logadas por estarem filiados legalmente vinculativos ali dentro em si uníssono agrupados!</p>
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
            <i class="bi bi-phone"></i>
        </div>

        <h2>Elimine os "bilhetes na agenda esquecidos" do trajeto comum</h2>

        <p>
            Promova imediatamente uma grande via moderna de super engajamento digital dinâmico atrativo 100% livre burocrático, 
            e chame genuinamente toda comunidade participativa das famílias engajadas atenta aos rumos municipais pra dentro dos pátios de suas geridas escolas unificando todos nós.
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
