<?php
/**
 * single-solucao-app-saude-domiciliar.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "app-saude-domiciliar".
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
                <span>App Saúde Domiciliar</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% Offline · Agentes (ACS) · Mobilidade
            </div>

            <h1>
                Agilidade e Mobilidade com o <br>
                <span class="ct-hero__highlight">APP Saúde</span> Domiciliar
            </h1>

            <p class="ct-hero__desc">
                Aplicativo móvel sustentável e inteligente que simplifica o trabalho dos Agentes de Saúde (ACS). Dispensa integralmente o uso de fichas impressas e opera offline com sincronização direta no sistema centralizado da Secretaria municipal.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>Offline nativo</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Geo</strong>
                    <span>GPS exato</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Zero</strong>
                    <span>papel utilizado</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver recursos
                </a>
            </div>

        </div><!-- /.ct-hero__content -->

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-app-saude.png'; ?>" alt="Mockup APP Saúde Domiciliar" onerror="this.src='https://placehold.co/600x400/7aa352/ffffff?text=Interface+APP'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Fichas CDS
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
            <div class="section-label">Sobre o App</div>
            <h2>Otimização extrema para a ponta do atendimento comunitário</h2>
            <p>
                As valiosas visitas domiciliares ganham a força da mobilidade absoluta superando os arcaicos formulários cartulares rabiscados em pranchetas longas que desmanchavam nas chuvas do trabalho contínuo percorrido exaustivamente nas zonas espalhadas.
            </p>
            <p>
                Basta carregar e parear com a inteligência central e lançar pé nas ruas. Mesmo distanciado e desprovido absolutamente de antenas redes, o profissional fará seu preenchimento off-line inteiro preservado e validado salvaguardando perfeitamente relatórios e metas apontadas sem re-digitação dolorosa diária atrasada pela equipe da chefia.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Sincronismo inteligente injetando rapidamente bases ativas ao eSUS</li>
                <li><i class="bi bi-check-circle-fill"></i> Sustentabilidade gigantesca economizando remessas infindáveis impressas</li>
                <li><i class="bi bi-check-circle-fill"></i> Prévia da ficha familiar acelerando imensamente abordagens nos mutirões</li>
                <li><i class="bi bi-check-circle-fill"></i> Entrega automatizada ao longo da jornada validada externamente</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-cursor-fill"></i>
                <h4>Apontamento Geo</h4>
                <p>Auditorias monitoram precisamente os registros pela localização batida das GPS gravadas.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-wifi-off"></i>
                <h4>Autonomia Seca</h4>
                <p>O App retém blindadamente anotações vitais perfeitas sem necessidade constante coberta pela internet.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-file-earmark-check-fill"></i>
                <h4>Fim do Retrabalho</h4>
                <p>Substitui modelos copiadores demorados exaustivamente re-digitados à noite nas secretarias estagnadas.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-speedometer2"></i>
                <h4>Visitas Focadas</h4>
                <p>Aceleradas em disparada pois carrega todo passado imutável de indivíduos sem perguntar duas vezes exaustivamente.</p>
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
            <h2>O parceiro móvel perfeito para o seu Agente (ACS)</h2>
            <p>Explore as funcionalidades que compõem o motor veloz desse aplicativo descentralizado.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-card-checklist" style="color:#fff;"></i>
                </div>
                <h3>Fichas CDS completas</h3>
                <p>Gera digitalmente pela tela todos os complexos roteiros avaliativos contidos no Cadastro Simplificado exigido.</p>
                <ul>
                    <li>Cadastros originais validados padronizados pelo topo</li>
                    <li>Registro preventivo do acompanhamento familiar preenchido ativamente</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-house-door-fill" style="color:#fff;"></i>
                </div>
                <h3>Acompanhamento In-Loco</h3>
                <p>Libera digitação simultânea acompanhando velozmente o ocorrido embutido e notado prontamente conversando nativamente sem pausas arrastadas na residência inspecionada.</p>
                <ul>
                    <li>Abordagem fluida preenchendo o App</li>
                    <li>Registro rápido familiar acolhido</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-person-lines-fill" style="color:#fff;"></i>
                </div>
                <h3>Acesso Histórico do Munícipe</h3>
                <p>Injeta e preenche facilmente munindo do visual do histórico individual resguardado evitando idas perdidas desgastantes no re-cadastramento da vida familiar por repetição presencial ignorada na unidade descentralizada municipal.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-hdd-network-fill" style="color:#fff;"></i>
                </div>
                <h3>Sincronização Nativa Saúde</h3>
                <p>Encaixa os envios e os despacha injetando reportes consolidados diretos alimentando a nuvem base ativamente contínua na inteligência servidora instalada na volta do agente.</p>
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
            <h2>Resultados tangíveis e medidos nas frentes rurais e urbanas</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-telephone-outbound"></i>
                </div>
                <div>
                    <h4>Escoamento ágil e imediato nas produções</h4>
                    <p>Ao conectar à antena as empilhadas visitas gravadas digitalmente sobem preenchidas integradamente aliviando massiva redigitação das secretárias da unidade.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-tree"></i>
                </div>
                <div>
                    <h4>Fim radical nas despesas papeleiras</h4>
                    <p>Orçamentos dispendiosos despejados mês a mês recarregando impressões em toners caras em formulários rasgados são dizimados.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-geo"></i>
                </div>
                <div>
                    <h4>Monitoramento assertivo do itinerário</h4>
                    <p>A localização gravada das batidas GPS atesta incansavelmente à coordenação que as presenças e vistorias nas campanhas difíceis e focos longes rurais foram efetivadas comprovadamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div>
                    <h4>Dinamismo valioso acelerando visitas</h4>
                    <p>Poupando longas re-interrogatórias, apenas diferenças da rotina da família visitadas são alteradas em pouquíssimos toques prevenidos no visor veloz ativo recarregado nativo no terminal tátil embutido.</p>
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
            <h2>A Ponta Direta com o Sistema Principal</h2>
            <p>
                O APP acorda todas as manhãs espelhando fidedignamente o núcleo do banco de Saúde e as diretrizes do Ministério e no regresso sincroniza perfeitamente limpo o censo rotineiro apurado.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-phone"></i>
                <span>APP ACS</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="E-SUS">
                <i class="bi bi-hospital"></i>
                <span>E-SUS</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl" title="Vacinas">
                <i class="bi bi-shield-plus"></i>
                <span>Vacinas</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l" title="Farmácia">
                <i class="bi bi-prescription2"></i>
                <span>Farmácia</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl" title="Auditoria">
                <i class="bi bi-geo-alt"></i>
                <span>Auditoria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Mapas">
                <i class="bi bi-map"></i>
                <span>Mapas (Geo)</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Vigilância">
                <i class="bi bi-eye"></i>
                <span>Vigilância</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Faturamento">
                <i class="bi bi-journal-medical"></i>
                <span>Faturamento</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Saúde Base">
                <i class="bi bi-heart-pulse-fill"></i>
                <span>Saúde Base</span>
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
                    "O salto em motivação que os agentes sentiram quando aposentaram as estressantes centenas de impressos rotos diários molhados e desgastados foi imenso. Substituindo tudo por este simples App veloz enraizado integralmente que opera solto limpo nas distâncias inacessíveis longes com internet cega nula da cidade aliviando os ombros de quem caminhava quilômetros extenuados nas visitas amparadas do dia a dia pesado sem apoio digital nenhum no passado."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Rita Assunção</strong>
                    <span>Coordenadora Geral ACS e UBSs</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Zerar atrasos de meses preenchendo digitadores da repetição arcaica atrasada exaustiva isolada</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término brutal radical em papelarias despachadas às costas da base ativa centralizadora mantenedora inofensiva</span>
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
            <h2>Principais dúvidas sobre o APP Saúde Domiciliar</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Preciso prover internet na zona rural distante para funcionar sem perder relatórios anotados na longa base cega sem cobertura nacional operadora tarifada estipulada localmente lá distanciada extensamente enraizada no município meu de plantão ativo operante desbravando?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Não precisa prover acesso nos bolsões cegos. O projeto base opera soberanamente autônomo e isolado retendo em segurança pacífica persistente até chegar nos portões seguros onde a rede Wi Fi pareadora se encarrega velozmente do sincronismo de toda a volumosa atividade colhida despachada retroativa salva digital protegida preenchida estritamente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    As bases analíticas comprovando efetivamente as saídas diárias podem comprovar à prefeitura ausências de percursos falsos e fantasmas enganosos apurados nas prestações enviadas contabilizadas desonestamente nas frentes difíceis mapeadas enigmáticas rurais espalhadas atestando verdadeiramente as rondas apontáveis?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Totalmente. Cravado incansavelmente na veracidade, o georreferenciamento fixará as cruzetas GPS exatas cravando na auditoria visível pontual amparando transparentemente as jornadas exaustivas verdadeiramente executadas apuráveis pelo cruzando imbatível e confiável nativamente estampado incontestavelmente avalizado perante os juízos de avaliações fiscais da folha mensal base das produções estaduais e municipais amparáveis seguidamente validadas localizadamente amparadas e inquestionáveis sempre nas matrizes.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Devem ser criados laudos do zero todo santo ano sobrecarregando o dedo no visor irritante contínuo arrastado chato repetitivamente preenchendo todos moradores velhos preenchidas anuais incansavelmente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Longe disso! O visor reencarna inteligentemente preenchimentos pretéritos mantendo a base fidedigna ali contendo as informações já preenchidas anteriormente pelo profissional sem esquecer, modificando ou adicionando exclusivamente um óbito doloroso novo gravidez avistada atual repentina veloz economizante saltando veloz o longo dia amparável no preenchimento contido rápido nas ruas rudes estressantes pesadas enlatando cansaços enfadonhos do repetidismo sem valor engessado preenchidas sem razão anterior aparente cansativas extenuantes desanimadoras.</p>
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
            <i class="bi bi-phone-vibrate"></i>
        </div>

        <h2>Mobilidade ininterrupta nas mãos da sua brigada ACS.</h2>

        <p>
            Equipe seu agente facilitando brutalmente preenchimentos, otimize as produções num ambiente ágil minimizando exaustivas perdas e retrabalhos com amarrações operacionais em papeis velhos enfadonhos abandonando cadernos obsoletos na sua prefeitura hoje.
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
