<?php
/**
 * single-solucao-beth.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "beth" (Conteúdo BETH).
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
                <span>Assistente Virtual</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Inteligência Artificial · Cidadania
            </div>

            <h1>
                Segurança e Eficiência com a IA <span class="ct-hero__highlight">BETH</span> na sua gestão
            </h1>

            <p class="ct-hero__desc">
                A primeira assistente virtual desenvolvida exclusivamente para suprir as demandas na gestão pública! A
                BETH converte todo o complexo serviço burocrático de balcão das prefeituras numa experiência interativa
                agilizada resolvendo solicitações da população.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>24/7</strong>
                    <span>disponibilidade contínua</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Zero</strong>
                    <span>filas de espera local</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>LGPD</strong>
                    <span>100% de conformidade</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver integrações
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img"
                    src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-beth.png'; ?>"
                    alt="Mockup BETH"
                    onerror="this.src='https://placehold.co/600x400/97999B/ffffff?text=Interface+Beth'">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-robot"></i>
                    Atendimento Inteligente
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
            <h2>Otimização do atendimento de forma humanizada</h2>
            <p>
                Acelerando a transformação digital, a BETH processa o ingresso de cidadãos munida de recursos poderosos
                e integrados ativamente. Hospedada sob sólidas e imensas bases tecnológicas interligadas globalmente nas
                bases cloud, ela eleva a produtividade operacional diária.
            </p>
            <p>
                Ela vai incrivelmente além dos robôs fixos de respostas padronizadas pois interage organicamente com
                ERPs tributários, educacionais ou sociais para promover emitir laudos, emitir folhas de contracheque
                salariais e gerar emissões burocráticas sob o forte encabeçamento preventivo exigido nas garantias
                estipuladas das normas legais da LGPD.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Automação total resolvendo a demanda na primeira interação
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Solução 100% cloud com extrema disponibilidade aos usuários
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Forte inteligência e personalização atrelada ao município
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Conexão nativa total validando cadastros cruzados em tempo
                    real</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-globe"></i>
                <h4>Atendimento Online</h4>
                <p>Esvazie consideravelmente os balcões e recepções abarrotados nas sedes do governo.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-shield-lock-fill"></i>
                <h4>Rigor de Privacidade</h4>
                <p>Autenticação estrita bloqueia acessos de terceiros sem lastro validado pelas bases públicas.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-robot"></i>
                <h4>Nacional e Específica</h4>
                <p>Aceleradora pioneira nacional projetada do topo a baixo focada exclusivamente no nicho de governo.
                </p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-link-45deg"></i>
                <h4>Totalmente Integrada</h4>
                <p>Plugue fluidamente no extenso ecossistema central da Cloud acionando recursos dos módulos em
                    segundos.</p>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════
     4. MÓDULOS / EIXOS DE ATENDIMENTO
     ════════════════════════════════════════════════════ -->
<section id="modulos" class="ct-modulos">
    <div class="ct-modulos__inner">

        <div class="ct-modulos__header">
            <div class="section-label">Eixos de Funcionalidades</div>
            <h2>IA voltada pontualmente as necessidades de cada ponta geradora de contatos administrativos do
                ecossistema central no município englobado.</h2>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-heart-pulse-fill" style="color:#fff;"></i>
                </div>
                <h3>Setor de Saúde Unificado</h3>
                <p>Automatizando interações vitais ligadas às esferas preventivas curativas providenciando laços
                    desburocratizados junto ao cidadão sem exigir deslocamento arriscado prolongado nas dependências
                    hospitalares conectadas ativamente no plano da inteligência central intercedora.</p>
                <ul>
                    <li>Validação imediata para apontamento de reservas nas abertas consultas clínicas médicas agendadas
                    </li>
                    <li>Consultas direcionadas evidenciando exames e conferências em laudos patológicos</li>
                    <li>Verificação autônoma no inventário das farmácias apurando o status livre nas posições essenciais
                    </li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-backpack-fill" style="color:#fff;"></i>
                </div>
                <h3>Eixo da Cidadania na Educação</h3>
                <p>Aliviando o complexo fluxo secretarial da diretoria pedagógica nas unidades de ensino vinculadas
                    aproximando virtualmente conselhos abertos com pais de alunos regularmente matriculados baseados nas
                    respostas fluidamente instantâneas e rastreáveis na secretaria conectada.</p>
                <ul>
                    <li>Entrega dinâmica atestado acadêmico certificando validações correntes formatadas via PDFs
                        emitidos lá do fundo sistêmico</li>
                    <li>Visualização e prestação direta evidenciando boletins do ano do estudante consultador</li>
                    <li>Consulta na progressão interativa visando o trâmite contínuo nas conhecidas filas em disputas
                    </li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-calculator" style="color:#fff;"></i>
                </div>
                <h3>Autonomia Fiscal na Arrecadação</h3>
                <p>Solucionando a imensa avalanche temporal dedicada a resolver e recalcular multas engessando os
                    auditores locais do fisco com atendimentos presenciais gerados nas filas intermináveis do cadastro
                    mobiliário local. Transaciona autônoma pagamentos rápidos.</p>
                <ul>
                    <li>Gerenciamento que encaminha guias vigentes unificadas originadas do carnê oficial gerado
                        dinamicamente das bases do IPTU municipal</li>
                    <li>Chancela autêntica desvinculando CND certidões regularizadoras no compliance atestador</li>
                    <li>Aceleração ágil emitindo vias autorizativas fundamentais interligadas ao licenciamento</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-person-badge-fill" style="color:#fff;"></i>
                </div>
                <h3>Foco no Servidor e Funcionalismo</h3>
                <p>Provê um balcão virtual direcionado suprindo resolutamente todas lacunas informativas perante as
                    contábeis requisições vindouras da enorme mesa diretora contínua atrelada ao enorme organograma
                    centralizador RH do empregador governamental municipal vinculado local.</p>
                <ul>
                    <li>Entrega assertiva digital puxando demonstrativos de recibos listando os contracheques espelhados
                        e faturados periodicamente em meses anteriores do funcionário logado no portal.</li>
                    <li>Despacho facilitando o requerimento validável aprovado indicando recessos nas escalas
                        controladas com apontamentos diretos do diário do RH do contratante de forma livre</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-bezier" style="color:#fff;"></i>
                </div>
                <h3>Linguagem Orgânica Cognitiva</h3>
                <p>A BETH desamarra a complexidade daqueles menus restritos tradicionais baseados inteiramente nos frios
                    números digitados incansavelmente absorvendo com inteligência a real intenção humana discursiva
                    inserida nas requisições textuais amplamente contextualizadas ao invés das tradicionais.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%">
                    <i class="bi bi-key-fill" style="color:#fff;"></i>
                </div>
                <h3>Compliance Nacional Identitário</h3>
                <p>Nenhuma blindagem superficial funciona: sua estrutura é amparada nativamente nas vigências federais
                    regulamentadas que amarram firmemente a cessão informacional restringida e as interações expostas
                    nos canais criptograficamente protegidos exigindo rígidos consentimentos legais prévios aplicados
                    nas frentes sociais engajadas.</p>
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
            <h2>Por que escolher a IA BETH?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-cloud-arrow-up"></i>
                </div>
                <div>
                    <h4>Hospedagem Top-Tier</h4>
                    <p>Forte pilar alocado sob gigantes servidores mundiais isentando lentidão com alta
                        contingenciabilidade a apagões técnicos nas estruturas físicas paridas nos municípios.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-plugin"></i>
                </div>
                <div>
                    <h4>Extrema Interoperabilidade</h3>
                        <p>Além de conversadora sua capacidade técnica interage, consulta ou injeta dinamicamente fluxos
                            no núcleo gerencial matriz sem atritos ou barreiras transacionais fechadas limitantes.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-aspect-ratio-fill"></i>
                </div>
                <div>
                    <h4>Personalização Plena</h3>
                        <p>Moldada e orientada pelas cores institucionais do brasão seguindo fluxogramas próprios
                            parametrizados localmente por gestores de TI e executivos departamentais atrelados
                            diariamente ali operando sua logística própria autônoma independente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Operação Irrestrita Noturna</h3>
                        <p>Não padece em horários mortos do fim de semana gerando guias salvadoras na madrugada e
                            sanando angústias instantâneas populacionais nas datas inacessíveis festivas habituais
                            isoladas em domingos normais que fecham o paço.</p>
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
                Com motor desenvolvido sob a mesma cama arquitetural cloud a assistente atacadista despacha suas
                resolutivas demandas atreladas nos canais oficiais integradores de dados nativamente consumindo o leque
                diverso nos componentes primários.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-robot"></i>
                <span>BETH IA</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Arrecadação">
                <i class="bi bi-wallet2"></i>
                <span>Arrecadação</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="RH / Servidor">
                <i class="bi bi-people"></i>
                <span>RH Web</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Educação">
                <i class="bi bi-journal-bookmark"></i>
                <span>Educação</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Saúde">
                <i class="bi bi-heart-pulse"></i>
                <span>Saúde</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Protocolo">
                <i class="bi bi-envelope-paper"></i>
                <span>Protocolo</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl" title="Transparência">
                <i class="bi bi-search"></i>
                <span>Transparência</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l" title="Documentos">
                <i class="bi bi-folder-check"></i>
                <span>Documentos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl" title="Ouvidoria">
                <i class="bi bi-headset"></i>
                <span>Ouvidoria</span>
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
                    "Na virada severa do vencimento ordinário do IPTU nosso balcão entupia rotineiramente estrangulando
                    todo o fluxo predial da sede com enormes aglomerações. Assim que alocamos e ensinamos as diretrizes
                    básicas da IA publicando nas plataformas de redes a Beth assumiu ativamente mais de oitenta por
                    cento e cinco desse ruído absurdo contínuo desobrigando funcionários esgotados nas jornadas
                    monótonas diárias!"
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Sérgio Mello</strong>
                    <span>Secretário Municipal de Planejamento e Arrecadação Fiscal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Términos definitivos da lentidão contínua presencial desintegrando filas enormes aglomeradas
                        em portas sob climas excessivamente rigorosamente quentes gerando desgastes desnecessários nos
                        picos orçamentais.</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Pico de satisfação pública superando patamares de excelência resolvendo atritos de
                        comunicação</span>
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
            <h2>Principais dúvidas sobre a BETH</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A BETH é considerada estritamente um chatbot limitado de FAQ listando abas amarradas repetidamente
                    ignorando as sentenças descritivas orgânicas longas formatadas livremente pelos indagadores logados
                    correntemente ali digitando sua real solicitação de momento no painel?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Não, absolutamente. Municiada com processamento poderoso transacional atrelada a compreensão
                        inteligente conversacional avançada, ela compreende contextos e dispensa cardápios engessados,
                        resolvendo por trás a emissão técnica do pedido integrando pontualmente ao núcleo ERP
                        transacionado gerando certidões prontas no formato final ao requerente sem transferir humanos
                        intermediários para apertarem confirmações operacionais do lado da retaguarda burocrática
                        ativada nas malhas digitais.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Quais as procedências validatórias robustas atrelam blindagem na proteção de arquivos ou salários
                    retidos evitando disparos alheios criminosos que vazam os indicativos confidenciais sensíveis das
                    esferas individuais sociais controladas perante normas unificadas nacionais LGPD contidas nesse
                    âmbito virtual ativado nas teias da prefeitura pública conectada hoje no ambiente Cloud exposto
                    amplamente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Atua implacável e firmemente. Cruzando chancelas idôneas originadas nas malhas certificadoras
                        governamentais ativadas nas autenticações blindadas iniciais emitindo rigor severo perante os
                        parâmetros protetivos garantindo confidencialidade extrema de chaves sistêmicas. Jamais
                        entregando os dados cruciais sigilosos solicitados sem certificar rigorosamente que o
                        solicitador humano atual requerente na conversa provou minuciosamente ser idoneamente o dono
                        estrito daqueles registros valiosos.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O contingente funcional rotineiro que cumpre expediente batendo ponto engajado rotineiramente na
                    estrutura organizacional pública possui canal ou facilidade resolutiva nessa esfera inovadora ou
                    seus algoritmos conversadores foram calibrados intencionalmente estritos mirando unicamente apenas
                    nas frentes direcionadas voltadas resolvendo apenas a massa civil popular cidadã e os munícipes
                    desconectados espalhados?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Seus potenciais não se limitam e escalam brilhantemente! Atendendo e abrangendo os contribuintes
                        externos civis primários, sua carga diretiva também acopla vertentes complexas do ambiente de
                        administração de Pessoas RH logadas servindo perfeitamente os concursados que interagem colhendo
                        recibos, batendo ou checando presenças, providenciando readequação previdenciária, férias
                        estipuladas e inúmeras consultas contábeis isoladas dedicadas num ecossistema fechado paralelo
                        restrito acoplado fluidamente ali nas mesmas lógicas.</p>
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
            <i class="bi bi-robot"></i>
        </div>

        <h2>Reduza filas e torne inteligente o atendimento administrativo!</h2>

        <p>
            Capacite, instrumentalize e leve modernidade máxima resolutiva a todos setores cruciais adotando a força
            orgânica imparável
            do motor atrelado na exclusiva Assistente Virtual Pública BETH da Betha Sistemas disponível agora com
            implementação contínua nas engrenagens operacionais reais.
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