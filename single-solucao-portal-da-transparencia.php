<?php
/**
 * single-solucao-transparencia.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "transparencia".
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
                <span>Transparência Pública</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Atendimento à LAI · Dinâmico
            </div>

            <h1>
                Zele pela clareza com o <span class="ct-hero__highlight">Portal da Transparência</span>
            </h1>

            <p class="ct-hero__desc">
                A solução permite zelar pela efetividade das ações de transparência pública e controle social, consolidando as informações nas mais variadas fontes para disponibilizá-las de forma consistente para toda a sociedade.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>conformidade com LAI</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>Tempo Real</strong>
                    <span>atualização de dados</span>
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
        </div>

        <div class="ct-hero__visual">
            <div class="ct-hero__mockup">
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Transparência">
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Portal Atualizado
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
            <div class="ct-trust__item"><strong>Customizável</strong><span>Identidade visual própria</span></div>
            <div class="ct-trust__item"><strong>Acessibilidade</strong><span>Libras e leitores de tela</span></div>
            <div class="ct-trust__item"><strong>Responsivo</strong><span>Adapta-se ao celular e tablet</span></div>
        </div>
    </div>
</section>

<section class="ct-about">
    <div class="ct-about__inner">
        <div class="ct-about__text">
            <div class="section-label">Sobre o Portal</div>
            <h2>Conectando a administração à sociedade</h2>
            <p>
                Assegure que os cidadãos acessem informações cruciais sobre as contas públicas através de um 
                ambiente intuitivo, amigável e completamente adaptável.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Integração com e-SIC e Ouvidoria</li>
                <li><i class="bi bi-check-circle-fill"></i> Personalização de menus e consultas</li>
                <li><i class="bi bi-check-circle-fill"></i> Motor de busca avançado</li>
            </ul>
        </div>
        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue"><i class="bi bi-search"></i><h4>Busca Potente</h4><p>Facilita a localização de qualquer termo no portal.</p></div>
            <div class="ct-about__card ct-about__card--green"><i class="bi bi-palette"></i><h4>Identidade Visual</h4><p>Altere cores, logos e brasões.</p></div>
            <div class="ct-about__card ct-about__card--green"><i class="bi bi-universal-access"></i><h4>Acessibilidade</h4><p>Padrão e-MAG e compatibilidade com leitores.</p></div>
            <div class="ct-about__card ct-about__card--orange"><i class="bi bi-phone"></i><h4>Responsivo</h4><p>Acesse perfeitamente no computador ou no celular.</p></div>
        </div>
    </div>
</section>

<section id="modulos" class="ct-modulos">
    <div class="ct-modulos__inner">
        <div class="ct-modulos__header">
            <div class="section-label">Recursos do Portal</div>
            <h2>Tudo o que a sua entidade precisa para ser transparente</h2>
        </div>
        <div class="ct-modulos__grid">
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-layout-wtf" style="color:#fff;"></i></div>
                <h3>Menus Customizáveis</h3>
                <p>Criação de consultas personalizadas para atender às necessidades locais e legislações vigentes.</p>
                <ul>
                    <li>Arrastar e soltar abas</li>
                    <li>Agrupamento temático e estruturado</li>
                    <li>Design hierárquico intuitivo</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-file-earmark-check" style="color:#fff;"></i></div>
                <h3>Publicação de Documentos</h3>
                <p>Armazenamento e exibição de contratos, licitações, despesas e receitas de forma organizada e rastreável.</p>
                <ul>
                    <li>Visualização de PDF fluída</li>
                    <li>Anexação rápida sem limite brando</li>
                    <li>Controle rígido de validade e versão</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-search" style="color:#fff;"></i></div>
                <h3>Busca Textual Completa</h3>
                <p>Motor de alta velocidade onde o cidadão encontra exatamente o que procura partindo de sinônimos técnicos e parciais.</p>
                <ul>
                    <li>Buscas exatas por chave primária</li>
                    <li>Sinalização de palavra em foco</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-bar-chart" style="color:#fff;"></i></div>
                <h3>Painéis em Gráficos</h3>
                <p>Saia da mesmice estatística de tabelas cruas, deixando todas as divulgações do município amarradas de forma esteticamente impecável.</p>
                <ul>
                    <li>Comparações orçamentárias anuais</li>
                    <li>Opção facilitada para de exportação (JPEG)</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-card-checklist" style="color:#fff;"></i></div>
                <h3>LGPD e Governança</h3>
                <p>Controle preciso exigido pelos ministérios blindando dados estritamente confidenciais mesmo publicados em portais amplamente populares.</p>
                <ul>
                    <li>Anonimização sensível pontual configurável</li>
                    <li>Rastreamento constante de IPs e registros</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-megaphone" style="color:#fff;"></i></div>
                <h3>Canais de Atendimento Integrado</h3>
                <p>Inclusões transparentes e descomplicadas de hiperlinks para serviços úteis externos vitais governamentais do mesmo ente corporativo.</p>
                <ul>
                    <li>Ramais de e-SIC governamental dedicados</li>
                    <li>Redirecionamento para WhatsApp institucional</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ct-beneficios">
    <div class="ct-beneficios__inner">
        <div class="ct-beneficios__header">
            <div class="section-label">Benefícios</div>
            <h2>Por que escolher o Portal da Transparência Betha?</h2>
        </div>
        <div class="ct-beneficios__grid">
            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue"><i class="bi bi-clock-history"></i></div>
                <div><h4>Informação em Tempo Real</h4><p>Sincronia contínua sem necessidade de exportações manuais ou duplicidade de dados cadastrados.</p></div>
            </div>
            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green"><i class="bi bi-award"></i></div>
                <div><h4>Cumprimento da LAI</h4><p>Atende integralmente a Lei Complementar nº 131/2009 e a Lei de Acesso à Informação.</p></div>
            </div>
            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange"><i class="bi bi-people"></i></div>
                <div><h4>Aproximação Social</h4><p>Reduz o distanciamento entre a sociedade e os agentes de gestão, aumentando a confiança nas contas.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="ct-integracoes">
    <div class="ct-integracoes__inner">
        <div class="ct-integracoes__text">
            <div class="section-label section-label--light">Integração Total</div>
            <h2>Transparência que flui dos setores direto para a sociedade</h2>
            <p>Esqueça os trabalhos manuais cansativos de consolidar planilhas para o portal. A solução de Transparência da Betha já vem integrada às bases da prefeitura, lendo as movimentações e atualizando os gráficos em tempo real.</p>
            <ul class="ct-about__checks ct-about__checks--light">
                <li><i class="bi bi-check-circle-fill"></i> Sincronia com Folha de Pagamento</li>
                <li><i class="bi bi-check-circle-fill"></i> Dados atualizados de Contratos e Licitações</li>
                <li><i class="bi bi-check-circle-fill"></i> Extratos amarrados com a Contabilidade Pública</li>
            </ul>
        </div>
        <div class="ct-integracoes__map">
            <div class="ct-integ-hub">
                <i class="bi bi-eye"></i>
                <span>Transparência</span>
            </div>
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-graph-up-arrow"></i>
                <span>Contabilidade</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-person-lines-fill"></i>
                <span>RH e Folha</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-cart-check"></i>
                <span>Compras</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-briefcase"></i>
                <span>Procuradoria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
                <i class="bi bi-cash-coin"></i>
                <span>Arrecadação</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl">
                <i class="bi bi-megaphone"></i>
                <span>e-SIC</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l">
                <i class="bi bi-bank"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl">
                <i class="bi bi-journal-check"></i>
                <span>Almoxarifado</span>
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
                    "O Portal da Transparência nos colocou nota máxima nos rankings de avaliação do TCE e da CGU. A liberdade de colocar as cores e brasões oficiais do nosso município deu um toque totalmente profissional."
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar"><i class="bi bi-person"></i></div>
                    <div>
                        <strong>Controlador Geral</strong>
                        <span>Prefeitura Cliente Betha</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Impacto Gerado</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-star-fill"></i>
                    <span>Nota 10 em Transparência no ranking MPF e CGU.</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-clock-fill"></i>
                    <span>Zero atraso de publicação dos relatórios contábeis e fiscais (RGF, RREO).</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-shield-fill-check"></i>
                    <span>Efetivação absoluta da Lei de Acesso à Informação sem margem de erros.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-faq">
    <div class="ct-faq__inner">
        <div class="ct-faq__header">
            <div class="section-label">Dúvidas Frequentes</div>
            <h2>Tudo o que você precisa saber sobre a Transparência</h2>
        </div>

        <div class="ct-faq__list">
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O cidadão consegue acessar os dados livremente pelo celular?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o portal é 100% responsivo e otimizado para navegação em dispositivos móveis, sem precisarem de cadastro prévio, cumprindo todo o escopo do Acesso Livre preconizado nas leis federais brasileiras.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O Portal da Transparência atende pessoas com deficiência?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Com certeza. O sistema possui ferramentas nativas em conformidade com o padrão e-MAG (Modelo de Acessibilidade em Governo Eletrônico), incorporando contrastes e perfeita aderência a leitores de tela e tecnologias assistivas, além de atalhos flexíveis.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Podemos configurar mais de um painel ou ocultar informações sensíveis da base?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o controlador da transparência municipal configura que visões estarão dispostas e o que permanecerá sigiloso (dados pessoais protegidos pela LGPD, documentos trancados). A customização abrange a publicação das atas até os vídeos da câmara em URLs próprias.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-cta">
    <div class="ct-cta__inner">
        <div class="ct-cta__icon"><i class="bi bi-eye"></i></div>
        <h2>Torne sua gestão uma referência em clareza pública!</h2>
        <p>Garanta acesso fácil a todas as contas públicas e evite multas ou penalidades de órgãos controladores.</p>
        <div class="ct-cta__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">Solicitar demonstração</a>
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
