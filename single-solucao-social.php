<?php
/**
 * single-solucao-social.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "social".
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
                <span>Social</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · CRAS · CREAS
            </div>

            <h1>
                Abrangência e cuidado extremo na <br>
                Assistência <span class="ct-hero__highlight">Social</span>
            </h1>

            <p class="ct-hero__desc">
                Direcionada para atender todos os processos do suporte protetivo da cidade, integrando-se rapidamente aos dados dos programas estaduais e federais garantindo um controle transparente de famílias beneficiárias.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>ambiente nuvem</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Federais</strong>
                    <span>integração ativa</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>CRAS</strong>
                    <span>efetividade plena</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-social.png'; ?>" alt="Mockup Social" onerror="this.src='https://placehold.co/600x400/7aa352/ffffff?text=Interface+Social'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Prontuário SUAS
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
            <h2>Planejamento contínuo nas ações solidárias</h2>
            <p>
                Garante que equipes de suporte e diretoria do CRAS ou CREAS acompanhem com notável clareza cada recurso investido, garantindo apoio total visual nos perfis reais contidos nos relatórios estatísticos da demanda municipal provida.
            </p>
            <p>
                Mobilidade sem impedimentos: todos registros inseridos das residências chegam automaticamente salvaguardados sem refazer planilhas locais dispersas que antes retardavam semanas nos velhos ritmos da prefeitura. Tudo se concentra transparentemente.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Gerenciamento transparente na concessão de repasses</li>
                <li><i class="bi bi-check-circle-fill"></i> Prontuário compatível aderente com normativas do SUAS</li>
                <li><i class="bi bi-check-circle-fill"></i> Otimização e clareza para diretorias nos espaços de proteção</li>
                <li><i class="bi bi-check-circle-fill"></i> Visibilidade de dados contínuos com alertas integrados</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-database-check"></i>
                <h4>Fluxo Ágil</h4>
                <p>Otimiza consideravelmente a pesada rotina nas entregas preenchendo as ocorrências rápidas.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-graph-up-arrow"></i>
                <h4>Controle Exato</h4>
                <p>Apuramento sobre todas liberações isoladas de suprimentos eventuais mensais.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-geo-alt"></i>
                <h4>Mapas em Ação</h4>
                <p>Indicadores territoriais mostram precisamente as vulnerabilidades urgentes e iminentes.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-list-check"></i>
                <h4>Conformidade</h4>
                <p>Estritamente calibrado com diretrizes exigidas contantes do enorme balanço Federal.</p>
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
            <h2>Potencialize a retaguarda social com painéis focados</h2>
            <p>Explore as funcionalidades que compõem nossa solução unificada de Assistência Social.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-globe-americas" style="color:#fff;"></i>
                </div>
                <h3>Inteligência Geo-Social</h3>
                <p>Apoia imensamente a coordenação territorial ilustrando mapas cruzados evidenciando visualmente todas as residências desprotegidas no traçado complexo vulnerável.</p>
                <ul>
                    <li>Visão macroestrutural de bairros em déficit</li>
                    <li>Planejamento direcionado por territórios sensíveis</li>
                    <li>Auxílio visual para destinar recursos pontuais</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-folder-check" style="color:#fff;"></i>
                </div>
                <h3>Prontuário Eletrônico SUAS</h3>
                <p>Absorve adequadamente todos preenchimentos contidos rigorosamente na pauta do Ministério correspondente federal validando histórico individual.</p>
                <ul>
                    <li>Conformidade com os padrões governamentais</li>
                    <li>Registro inviolável do acolhimento local</li>
                    <li>Fácil resgate do histórico pregressor do membro</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-calendar3" style="color:#fff;"></i>
                </div>
                <h3>Agenda Orientada</h3>
                <p>Responsável pelo despache central de encaminhamentos direcionando assistidos rotativos nos postos garantindo reservas agendadas.</p>
                <ul>
                    <li>Agendamentos programados nas frentes solidárias</li>
                    <li>Fluxograma limpo de ocupação dos CRAS</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-basket-fill" style="color:#fff;"></i>
                </div>
                <h3>Análise e Benefícios</h3>
                <p>Forte contenção gerencial atestando aprovações ou bloqueios no disparo de auxílios momentâneos integrando prontamente a requisição e a fila validante.</p>
                <ul>
                    <li>Transparência em compras de suprimento</li>
                    <li>Cestas repassadas por controle rastreado</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 49%, 40%">
                    <i class="bi bi-bar-chart-fill" style="color:#fff;"></i>
                </div>
                <h3>Painéis e Indicadores</h3>
                <p>Produz contínua transparência extraindo relatórios em tempo simultâneo apresentando balanços concretos nas metas da diretoria financeira.</p>
                <ul>
                    <li>Visão em dashboards instantâneos</li>
                    <li>Elimina cruzamento de tabelas exaustivas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 87, 60%, 45%">
                    <i class="bi bi-cash-stack" style="color:#fff;"></i>
                </div>
                <h3>Monitoramento de Renda</h3>
                <p>Observância minuciosa na permanência da extensa esteira de benefícios financeiros de transferência provendo manutenções imediatas ou exclusões.</p>
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
            <h2>Ganhos e excelência em cada família atendida</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-people"></i>
                </div>
                <div>
                    <h4>Praticidade in loco</h4>
                    <p>Registre quadros emergenciais nas portas dos assistidos atualizando o servidor principal da pasta num pulo contínuo online fora da base.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-card-checklist"></i>
                </div>
                <div>
                    <h4>Controle logístico nas entregas</h4>
                    <p>O rigor mitigador amarra o balancete controlando cestas e materiais estipulados no controle geral orçamentário transparente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-display"></i>
                </div>
                <div>
                    <h4>Visão abrangente e limpa</h4>
                    <p>Dashboards detalhados desmembram dados complexos em belos pilares de indicadores simplificando e apontando precisamente onde o gestor deve agir.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-node-plus"></i>
                </div>
                <div>
                    <h4>Interoperabilidade profunda</h4>
                    <p>CRAS e CREAS jamais isolados, o acompanhamento histórico converge integradamente otimizando vias de análises entre setores antes distanciados.</p>
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
            <h2>Rede Conectada de Suporte Unificado</h2>
            <p>
                Elimine processos longos em redigitação exaustiva, tudo navega pelas entranhas da assistência social sem atritos e intermédios burocráticos.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-people-fill"></i>
                <span>SOCIAL</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Saúde">
                <i class="bi bi-heart-pulse"></i>
                <span>Saúde</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="CadÚnico">
                <i class="bi bi-file-earmark-person"></i>
                <span>CadÚnico</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Finanças">
                <i class="bi bi-cash-coin"></i>
                <span>Finanças</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Portal Trans.">
                <i class="bi bi-search"></i>
                <span>Transparência</span>
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
                    "Ao agrupar todos os nossos assistidos na plataforma Social, reduzimos absurdamente a fraude nos benefícios duplicados que antes as famílias pegavam nos dois postinhos em bairros diferentes sem ninguém perceber cruzar os papéis das filas engarrafadas."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Fábio Moraes</strong>
                    <span>Secretário de Assistência e Desenvolvimento</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término drástico de benefícios duplicados sem critérios</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Visão unificada das vulnerabilidades em mapa e cruzados ao município</span>
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
            <h2>Principais dúvidas sobre o sistema Assistência Social</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O que é de fato a solução Social provida pela plataforma Betha?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Trata-se num portal direcionado priorizando amparar as equipes do CRAS e CREAS locais em ações fundamentadas provendo relatórios coesos instantâneos num núcleo desburocratizado interligado a fim de monitorarem perfis em perdas de tempo nos preenchimentos diários e manuais estáticos do histórico público municipal disperso antigamente.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Quais efetivamente despontam como benefícios transformadores aplicados ativamente às unidades?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Mobilidade rotativa permitindo visitas remotas gravadas seguras, clareza administrativa indicando perfis iminentes mapeados vulneravelmente pela região geográfica evitando e coibindo desvios em materiais contábil ativamente rastreados sem depender de checagens morosas isoladas engessadas e ineficientes nas centrais.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    A arquitetura cumpre as extensas legislações do governo nacional regulamentador imposto por portarias recentes e históricas aplicáveis vigentes continuamente?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Totalmente. O guarda-chuva de suporte amortece perfeitamente exigências do próprio Ministério federal atendendo painéis do SUAS, validando históricos exigentes em conformidade nativa tranquilizando inteiramente a cabeça dos governantes no compasso fiscal solidário prestado atreladamente nos crivos exigidos vigentes.</p>
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
            <i class="bi bi-people-fill"></i>
        </div>

        <h2>Torne inteligente e transparente as ações solidárias</h2>

        <p>
            Equipe profissionais facilitando o histórico analítico e promovendo eficiência social baseada em mapas repletos perfeitamente integrados ativamente com os programas do gestor centralizado.
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
