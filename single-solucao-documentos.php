<?php
/**
 * single-solucao-documentos.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "documentos".
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
                <span>Documentos</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Assinaturas · Armazenamento
            </div>

            <h1>
                Segurança Total em <span class="ct-hero__highlight">Documentos</span><br>
                e Assinaturas Digitais
            </h1>

            <p class="ct-hero__desc">
                Solução completa para gestão arquivística e oficial na nuvem. Agilize chancelamentos com assinaturas em lote, economize drasticamente com uso de papel e mantenha validação jurídica total.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>Legal</strong>
                    <span>validade ICP-Brasil</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>+ Espaço</strong>
                    <span>sem custos físicos</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>24/7</strong>
                    <span>disponibilidade contínua</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-documentos.png'; ?>" alt="Mockup Documentos" onerror="this.src='https://placehold.co/600x400/1e3166/ffffff?text=Interface+Documentos'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Assinatura Simplificada
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
            <h2>Repositório e chancela digital integrada</h2>
            <p>
                O sistema de Documentos Betha oferece uma infraestrutura de alto nível de blindagem em cloud focado na tramitação, retenção oficial e firma jurídica perante o trâmite eletrônico burocrático, gerando enormes economias.
            </p>
            <p>
                A possibilidade de efetuar validações conjuntas, emitir assinaturas lotes expressas que homologam dezenas de ofícios simultaneamente num único token afasta a administração do passado escuro das velhas papeladas sujeitas ao decaimento temporal.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Eliminação do manuseio frequente nos acervos físicos da prefeitura</li>
                <li><i class="bi bi-check-circle-fill"></i> Homologação conectada às raízes certificadoras do formato ICP</li>
                <li><i class="bi bi-check-circle-fill"></i> Organização massiva multi-formatos (pdfs, planilhas)</li>
                <li><i class="bi bi-check-circle-fill"></i> Rastreamento rigoroso anti-fraude em revisões oficiais</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-file-earmark-check"></i>
                <h4>Armazenagem</h4>
                <p>Repouse toda documentação complexa em local altamente redundante impenetrável à perdas eventuais reais ambientais.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-phone-fill"></i>
                <h4>Multiplataforma</h4>
                <p>Nenhuma complicação por drivers quebrados, exibe o painel compatível nos mais variáveis formatos mobile conectados.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-share-fill"></i>
                <h4>Colaboração Simples</h4>
                <p>Sincronize equipes ao mesmo tempo formatando ofícios decisivos e avaliando termos críticos.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-ui-checks-grid"></i>
                <h4>Níveis Diferenciados</h4>
                <p>Corte o poder totalitário limitando rigorosamente níveis que se restringem puramente à revisão isolada pontual.</p>
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
            <h2>Recursos para maximizar o arquivamento e validade</h2>
            <p>Abaixo os atalhos funcionais primórdios que equipam essa potente base documental governamental unida aos fluxos gerenciais da Betha Cloud.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-journal-bookmark" style="color:#fff;"></i>
                </div>
                <h3>Gravação Histórica Perene</h3>
                <p>Funciona similar a uma trilha irreversível de alterações coibindo adulterações nas portarias homologadas recém publicadas aos contribuintes vigiado firmemente a olhos justos.</p>
                <ul>
                    <li>Registro claro contendo timestamps de horários</li>
                    <li>Sinalização de responsáveis atrelados pelo manuseio</li>
                    <li>Inverossimilhança de corrompimento intencional</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-search" style="color:#fff;"></i>
                </div>
                <h3>Buscas Inteligentes</h3>
                <p>Extração automática de descrições complexas num extenso calhamaço atrelado usando poderosos mecanismos que enxergam miolos dos textos dentro de exames escaneados rapidamente pela barra.</p>
                <ul>
                    <li>Indexador universal ágil no cofre de dados</li>
                    <li>Filtros refinados para categorização estruturada</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-signpost-split-fill" style="color:#fff;"></i>
                </div>
                <h3>Regras de Tramitação Fixo</h3>
                <p>Os fluxos e a rota oficial a ser trilhada pelo despacho evitam extravios nas inúmeras aprovações mantendo controle minucioso nos rastreiros intersetoriais ativados.</p>
                <ul>
                    <li>Visualização e criação esquematizada gráfica simples</li>
                    <li>Conformidade processual rígida sem quebra de etapas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-file-earmark-check-fill" style="color:#fff;"></i>
                </div>
                <h3>Modo Assinaturas Multilote</h3>
                <p>Eliminações consideráveis dos exaustivos empenhos monótonos gastando incontáveis horas do gabinete firmando papéis em longas bancadas. Agrupa e aplica massivo aval no montante inteiro perante autenticação baseada.</p>
                <ul>
                    <li>Verificações cruzadas com base legal reconhecida</li>
                    <li>Token chancelador amarra a conformidade instantânea</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-app-indicator" style="color:#fff;"></i>
                </div>
                <h3>Avisos a Cobrar Assinatura</h3>
                <p>Notificações proativas avisam diretamente o responsável legalmente exigido na homologação para ele atuar veloz abrindo as pendências encruadas no sistema sem depender de telefone humano e secretariado avisando insistentemente sua atenção principal da vez atrasada em pautas oficiais ali paradas nos escaninhos logados.</p>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-trash" style="color:#fff;"></i>
                </div>
                <h3>Lixeira Protetora Longa</h3>
                <p>Mesmo caso aconteçam deslizes que removam algo de suma precisão momentânea por acidentes corriqueiros, resgates práticos restauram mantendo blindagem antiperda iminente até o veredito permanente limar das bases governamentais legalmente escoradas com os períodos obrigados.</p>
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
            <h2>Por que escolher a gestão de Documentos Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-award-fill"></i>
                </div>
                <div>
                    <h4>Chanceles Massivos Seguros</h4>
                    <p>Ao aprovar lotes a validade persiste incólume em cada portaria garantida nas leis das assinaturas.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <div>
                    <h4>Eficiência Extrema Operacional</h4>
                    <p>Otimização severa que despacha resoluções do executivo poupando frete e desgaste interdepartamental diário.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-x-circle-fill"></i>
                </div>
                <div>
                    <h4>Redução Integral de Impressões</h4>
                    <p>Subtrai dos tetos mensais volumosos montantes de resmas gráficas acumulando papel reciclável desnecessário nas baixas diárias.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <div>
                    <h4>Invulnerabilidade Preventiva Digital</h4>
                    <p>Cópias remotas contínuas retém o arquivo principal contra ações naturais deletérias como infiltrações de arquivamentos em solos antigos mofados.</p>
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
                O sistema unificado comunicasse transversalmente com portais e serviços primários emissores repousando seus certificados digitais vinculados em um ambiente oficial onde todos recorrem na nuvem.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-folder-check"></i>
                <span>Documentos</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Protocolo Web">
                <i class="bi bi-envelope-paper"></i>
                <span>Protocolo Web</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Conecta">
                <i class="bi bi-link-45deg"></i>
                <span>Conecta</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Transparência">
                <i class="bi bi-search"></i>
                <span>Transparência</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="RH Setores">
                <i class="bi bi-people"></i>
                <span>RH Web</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Dívida Ativa">
                <i class="bi bi-file-earmark-spreadsheet"></i>
                <span>Dívida Ativa</span>
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
                    "Na época assinar centenas de pareceres técnicos era um fardo que sugava metade dos expedientes da diretoria isolada numa baia cheia de malotes pesados em cima das mesas. Transacionando e homologando via repositório cloud economizamos na verdade algo muito mais caro e que não se imprime num papel comum que era justamente todo aquele precioso momento de produtividade pública local desperdiçado de antes."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Ricardo Mendonça</strong>
                    <span>Secretário Operacional de Atos Civis</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Evasão maciça dos escaninhos contendo papeladas oficiais pesadas liberando espaços logísticos vitais nos gabinetes nobres da sede atarefada central executiva</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Términos dos custosos trâmites que envolviam reconhecimento legal e autenticadores terceiros espalhados externamente</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Zero perda ou deterioramento irreversível de normas ou resoluções temporais vitais retidas permanentemente garantidas no acervo eletrônico de memória histórica e probatória governamentais online na Betha integrados adequadamente com os preceitos de transição exigidos</span>
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
            <h2>Principais dúvidas sobre a plataforma e uso do Documentos</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A tramitação tem respaldo judicial firme nas regras ICP habituais da federação se efetuadas massivamente dentro desse portal cloud oficial oferecido para esse fim especifico pela central Betha integrada sem ressalvas impeditivas aplicáveis nos formatos locais vigentes hoje homologados adequadamente pelas cortes e pelos demais serviços estatais correspondentes interligados nisso aí agora também no município aderente local?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Com certeza incontestável! Munido do padrão criptográfico e chancela nativamente adequados emitindo trilhas vinculadas as autoridades certificadoras da raiz, toda portaria selada nesse modulo goza da fé-pública plena dispensando cartoriais terceiros habituais das velhas vias.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Quais arquivos ou extensões os pesados mecanismos de OCR embutidos leem efetivamente indexando o arquivo completo digitalizado nesse cofre online?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O poderoso algoritmo decifra ativamente além dos típicos e corriqueiros PDFs textualizados. Ele visualmente escaneia laudos estáticos anexados provenientes de pranchadas jpegs convertendo caracteres pintados em letras palpáveis achadas com enorme agilidade facilitadora no front dos buscadores velozes disponíveis no índice do acervo base ativados em toda grade municipal atrelada ali arquivada inteiramente de uma forma mais livre.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O que ocorre exatamente se formos formatar uma aba contendo despachos cruciais vitais aprovados legalmente que acidentalmente escorregou e foi varrido pela barra deletadora de um supervisor de rotinas num expurgo indesejado feito erroneamente no calor operacional e diário normal do expediente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Tudo permanece intacto e acessível. A retenção da Lixeira estende um abrigo perene onde itens suprimidos habitam num hiato seguro e protetor isentos das garras da exclusão real irrecuperável que costumava obliterar e dar dores fortes nas resoluções conturbadas antes dessas travas eficientes entrarem na vigília unificada governamental no módulo mestre.</p>
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
            <i class="bi bi-shield-check"></i>
        </div>

        <h2>Seu acervo em plenas e inquestionáveis seguranças</h2>

        <p>
            Impeça e bloqueie permanentemente as falhas, as multas e o desgaste moroso logístico que freava sua administração no arquivamento 
            e na emissão legal diária ativando as travas homologadoras digitais em lote sem entraves da ferramenta Documentos Betha com implantação imediata simples nos seus canais online e computação na nuvem hoje.
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
