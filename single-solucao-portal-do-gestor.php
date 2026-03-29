<?php
/**
 * single-solucao-portal-do-gestor.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "portal-do-gestor".
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="ct-hero">
    <div class="ct-hero__inner">
        <div class="ct-hero__content">
            <div class="ct-hero__breadcrumb">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: home_url( '/solucoes/' ) ); ?>">
                    <i class="bi bi-grid-3x3-gap"></i> Soluções
                </a>
                <i class="bi bi-chevron-right"></i>
                <span>Gestão Estratégica</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                Visão 360° · Painéis · Tomada de Decisão
            </div>

            <h1>
                Controle o município de onde estiver com o <span class="ct-hero__highlight">Portal do Gestor</span>
            </h1>

            <p class="ct-hero__desc">
                Concebido com tecnologia em nuvem, o Portal do Gestor é uma ferramenta essencial para o monitoramento de indicadores que refletem a qualidade da administração pública, otimizando a tomada de decisões rápidas.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>KPIs</strong>
                    <span>em tempo real</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Maior</strong>
                    <span>segurança jurídica</span>
                </div>
            </div>

            <div class="ct-hero__actions">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">
                    <i class="bi bi-calendar-check"></i>
                    Solicitar demonstração
                </a>
                <a href="#modulos" class="btn-custom-outline btn-lg ct-scroll-link">
                    <i class="bi bi-grid-1x2"></i>
                    Ver indicadores
                </a>
            </div>
        </div>

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Portal do Gestor">
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-graph-up-arrow"></i>
                    Crescimento
                </div>
            </div>
        </div>
    </div>
    <div class="ct-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<section class="ct-trust">
    <div class="ct-trust__inner">
        <p class="ct-trust__label">Tecnologia Betha</p>
        <div class="ct-trust__stats">
            <div class="ct-trust__item"><strong>Cloud</strong><span>Acesso de qualquer lugar</span></div>
            <div class="ct-trust__item"><strong>Monitoramento</strong><span>Controle do Orçamento e RH</span></div>
            <div class="ct-trust__item"><strong>Aberto</strong><span>Forte integração de dados</span></div>
        </div>
    </div>
</section>

<section class="ct-about">
    <div class="ct-about__inner">
        <div class="ct-about__text">
            <div class="section-label">Sobre a Plataforma</div>
            <h2>Agilidade decisória em suas mãos</h2>
            <p>
                O dia a dia de prefeitos, secretários e gestores é complexo. Ter dados confiáveis em mãos permite 
                ações e implementações de políticas públicas baseadas em evidências.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Monitoramento de gastos com pessoal</li>
                <li><i class="bi bi-check-circle-fill"></i> Controle rigoroso do orçamento</li>
                <li><i class="bi bi-check-circle-fill"></i> Identificação de fomento econômico</li>
            </ul>
        </div>
        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue"><i class="bi bi-bar-chart"></i><h4>Visão Holística</h4><p>Gráficos em bloco evidenciando todas as áreas-chave municipais.</p></div>
            <div class="ct-about__card ct-about__card--green"><i class="bi bi-shield-check"></i><h4>Segurança LRF</h4><p>Verifique o cumprimento automático das obrigações e limites de lei.</p></div>
            <div class="ct-about__card ct-about__card--orange"><i class="bi bi-projector"></i><h4>Modo Apresentação</h4><p>Perfeito para exibição transparente de dados frente ao público.</p></div>
            <div class="ct-about__card ct-about__card--blue"><i class="bi bi-cloud-arrow-down"></i><h4>Integração Nativa</h4><p>Bebe diretamente da fonte do Arrecadação, RH e Contabilidade.</p></div>
        </div>
    </div>
</section>

<section id="modulos" class="ct-modulos">
    <div class="ct-modulos__inner">
        <div class="ct-modulos__header">
            <div class="section-label">Recursos do Portal</div>
            <h2>Indicadores macro para todas as pontas da gestão</h2>
        </div>
        <div class="ct-modulos__grid">
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-piggy-bank" style="color:#fff;"></i></div>
                <h3>Painéis de Arrecadação Contínua</h3>
                <p>Acompanhamento analítico e vivo das receitas tributárias e flutuações da complexa dívida ativa da administração em sua totalidade visual.</p>
                <ul>
                    <li>Visão panorâmica comparando previsto e realizado</li>
                    <li>Sinalizadores de alertas nas quedas percentuais perigosas</li>
                    <li>Controle simultâneo absoluto do balanço orçamentário diário</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-wallet2" style="color:#fff;"></i></div>
                <h3>Monitoramento de Gastos (Folha)</h3>
                <p>Controle severo das custas astronômicas e perigosas derivadas das horas extras, imprevistos salariais dos cargos comissionados, progressões ou férias dos afastamentos contínuos.</p>
                <ul>
                    <li>Curva histórica acompanhando os percentuais regrados previdenciários restritos por diretrizes constitucionais federais</li>
                    <li>Visualização granular para detalhamento individual por secretaria independente</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-pie-chart" style="color:#fff;"></i></div>
                <h3>Análise Econômica Estruturada Global</h3>
                <p>Identificação estatística consolidada de grandes empresas ou conglomerados que merecem aproximação corporativa objetiva voltada ao favorecimento contínuo real de longo prazo impulsionando fomento mercadológico no município.</p>
                <ul>
                    <li>Inteligência orientada sobre polos focais e principais pagadores</li>
                    <li>Fórmulas demográficas com geolocalização exata</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-cone-striped" style="color:#fff;"></i></div>
                <h3>Gestão de Obras Executadas e Contratos</h3>
                <p>Monitorização clara do desdobramento temporal financeiro aplicado no acompanhamento firme atrelado as frotas e materiais vinculadas e licitadas ativas do período correspondente.</p>
                <ul>
                    <li>Cronogramas cruzados com liberação progressiva financeira estipulada em caixa</li>
                    <li>Status atual em tempo real dos editais críticos da fundação patrimonial</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-people-fill" style="color:#fff;"></i></div>
                <h3>Gestão Populacional Cruzada</h3>
                <p>Unificação panorâmica de cadastros em malha ampla (Cidadão X Saúde X Cadastro Escolar X Benefícios base geradores sóciais governamentais). Forme o mapa preciso populacional do município visualmente rico aos envolvidos.</p>
                <ul>
                    <li>Controle em números absolutos matriculados sem repetições irreais indesejáveis atrelados ao CPF validado nativamente</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-display" style="color:#fff;"></i></div>
                <h3>Modo Apresentador Focado TV</h3>
                <p>A funcionalidade premium para exibição direta panorâmica e cristalina projetando todos os indicadores vitais simplificados rotativos numa incrível tela grande frontal montada focada para as cruciais exibições em conselhos ou prestação transparente gabinetes de auditores oficiais.</p>
            </div>
        </div>
    </div>
</section>

<section class="ct-integracoes">
    <div class="ct-integracoes__inner">
        <div class="ct-integracoes__text">
            <div class="section-label section-label--light">Integração Total</div>
            <h2>Uma central de controle que enxerga o município inteiro</h2>
            <p>Os painéis do Portal do Gestor interligam-se a absolutamente tudo. Arrecadações, despachos, dados do quadro do funcionalismo (RH), licitações até relatórios de ensino ou leitos de saúde. O verdadeiro BI (Business Intelligence) público para os olhos da liderança governamental.</p>
            <ul class="ct-about__checks ct-about__checks--light">
                <li><i class="bi bi-check-circle-fill"></i> Arrecadação X Dívida Ativa conectada</li>
                <li><i class="bi bi-check-circle-fill"></i> Sincronia contábil apurada com responsabilidade fiscal</li>
                <li><i class="bi bi-check-circle-fill"></i> Indicadores populacionais da Saúde e Educação</li>
            </ul>
        </div>
        <div class="ct-integracoes__map">
            <div class="ct-integ-hub">
                <i class="bi bi-laptop"></i>
                <span>Portal Gestor</span>
            </div>
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-cash"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-bank"></i>
                <span>Contabilidade</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-people"></i>
                <span>RH e Pessoal</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-cart"></i>
                <span>Compras/Licitação</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
                <i class="bi bi-house"></i>
                <span>Patrimônio</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl">
                <i class="bi bi-heart-pulse"></i>
                <span>Saúde Pública</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l">
                <i class="bi bi-book"></i>
                <span>Educação Central</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl">
                <i class="bi bi-send-check"></i>
                <span>Ouvidoria/Protocolo</span>
            </div>
        </div>
    </div>
</section>

<section class="ct-case">
    <div class="ct-case__inner">
        <div class="ct-case__card">
            <div class="ct-case__quote">
                <i class="bi bi-quote"></i>
                <blockquote>
                    "Foi com os alertas vitais do painel aberto do Portal do Gestor no meu próprio tablet pessoal que notei um declínio de receita do ISS da cidade, intervindo precocemente, contivemos riscos na folha e focamos campanhas e fomento nos bairros comerciais corretos no auge da pandemia de forma 100% monitorada."
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar"><i class="bi bi-person"></i></div>
                    <div>
                        <strong>Prefeito Municipal</strong>
                        <span>Prefeitura Cliente Betha</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Impacto Gerado</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Diagnóstico imediato e cruzamento de queda de receitas em 48h.</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-bar-chart-line-fill"></i>
                    <span>Monitoramento total da balança dos percentuais constitucionais vigentes federais sem sustos de prestação de conta final do ano executivo.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-faq">
    <div class="ct-faq__inner">
        <div class="ct-faq__header">
            <div class="section-label">Dúvidas Frequentes</div>
            <h2>Tudo o que você precisa saber sobre o Portal do Gestor</h2>
        </div>

        <div class="ct-faq__list">
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Os secretários podem visualizar as pastas limitadas apenas aos seus domínios?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Totalmente. A segurança modular permite que o prefeito e o gabinete central tenham acesso macroscópico irrestrito e panorâmico de indicadores, enquanto um Secretário de Planejamento ou Secretário da Fazenda acesse restritamente os blocos confidenciais pertinentes às suas estritas pastas de controle administrativo da prefeitura.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Preciso solicitar integrações externas de mercado lentas para povoar esses dados?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Não. Quando os sistemas oficiais subjacentes do amplo ecossistema municipal utilizado for plenamente o da própria governança cloud engrenada da Betha Informática, os bancos de dados fluem espelhados e mastigados nativamente de ponta-a-ponta, compondo todos esses dashboards espetaculares coloridos instantes depois das apurações processuais dos servidores reais estarem concluídas.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como funciona o "Modo Apresentação" em gabinetes executivos?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Você pode conectar seu notebook, espelhar seu tablet corporativo logado numa televisão e colocar os indicadores simplificados focados girando sob as abas principais, evidenciando dezenas de métricas econômicas, populacionais e previdenciárias de forma cristalina aos olhos dos munícipes, associações empresariais comerciais locais recebidas ou fiscais estaduais da contabilidade em trânsito legal fiscalizatório com beleza plástica espetacular sem precedentes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-cta">
    <div class="ct-cta__inner">
        <div class="ct-cta__icon"><i class="bi bi-laptop"></i></div>
        <h2>Governe apoiado em indicadores vivos</h2>
        <p>Saia da era do achismo e ingresse na fase orientada a dados para o setor público de sucesso.</p>
        <div class="ct-cta__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">Falar com Consultor</a>
        </div>
    </div>
</section>

<script>
function ctToggleFaq(btn) {
    const item   = btn.closest('.ct-faq__item');
    const answer = item.querySelector('.ct-faq__answer');
    const icon   = btn.querySelector('i');
    const isOpen = item.classList.contains('is-open');

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

document.querySelectorAll('.ct-scroll-link').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if(target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>
<?php get_footer(); ?>
