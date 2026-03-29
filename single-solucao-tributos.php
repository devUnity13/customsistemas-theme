<?php
/**
 * single-solucao-tributos.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "tributos".
 * WordPress carrega automaticamente via hierarquia:
 *   single-solucao-tributos.php → single-solucao.php → single.php
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

            <div class="ct-hero__breadcrumb tributos">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'solucao' ) ?: home_url( '/solucoes/' ) ); ?>">
                    <i class="bi bi-grid-3x3-gap"></i> Soluções
                </a>
                <i class="bi bi-chevron-right"></i>
                <span>Tributos</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · ISS · ITBI · Taxas
            </div>

            <h1>
                Gestão de <span class="ct-hero__highlight">Tributos</span><br>
                Municipal em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Controle completo da arrecadação tributária municipal. Gerencie impostos, taxas, contribuições
                e certidões de forma eficiente e transparente.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>+3.000</strong>
                    <span>municípios atendidos</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>conformidade legal</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Tributos">

                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Arrecadação online
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
            <h2>Gestão completa de tributos municipais</h2>
            <p>
                O sistema de Tributos Betha oferece uma solução completa para gerenciar toda a arrecadação tributária
                do seu município. Desde o cadastro de contribuintes até a cobrança, tudo é controlado de forma automatizada.
            </p>
            <p>
                Com interface intuitiva e recursos avançados, sua equipe consegue gerenciar ISS, ITBI, taxas,
                contribuição de melhoria e muito mais, garantindo eficiência e transparência na gestão.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Gestão completa de impostos municipais</li>
                <li><i class="bi bi-check-circle-fill"></i> Emissão de certidões online</li>
                <li><i class="bi bi-check-circle-fill"></i> Integração com rede bancária</li>
                <li><i class="bi bi-check-circle-fill"></i> Conformidade com a legislação tributária</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-receipt"></i>
                <h4>ISSQN</h4>
                <p>Gestão completa do Imposto sobre Serviços de qualquer natureza.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-house-fill"></i>
                <h4>ITBI</h4>
                <p>Controle do Imposto de Transmissão de Bens Imóveis.</p>
            </div>
            <div class="ct-about__card ct-about__card--purple">
                <i class="bi bi-currency-dollar"></i>
                <h4>Taxas</h4>
                <p>Gerenciamento de todas as taxas municipais.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-file-earmark-text-fill"></i>
                <h4>Certidões</h4>
                <p>Emissão de certidões negativas e positivas online.</p>
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
            <h2>Módulos especializados para gestão tributária</h2>
            <p>Explore os módulos que compõem nossa solução completa de gestão de tributos.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-person-badge" style="color:#fff;"></i>
                </div>
                <h3>Cadastro de Contribuintes</h3>
                <p>Cadastre e gerencie todos os contribuintes do município.</p>
                <ul>
                    <li>Pessoa física e jurídica</li>
                    <li>Endereços múltiplos</li>
                    <li>Histórico completo</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-percent" style="color:#fff;"></i>
                </div>
                <h3>ISSQN</h3>
                <p>Gestão completa do Imposto sobre Serviços.</p>
                <ul>
                    <li>Cálculo automático</li>
                    <li>Retenção na fonte</li>
                    <li>Declarações eletrônicas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-building" style="color:#fff;"></i>
                </div>
                <h3>ITBI</h3>
                <p>Controle do Imposto de Transmissão de Bens Imóveis.</p>
                <ul>
                    <li>Cálculo automático</li>
                    <li>Certidão de valor venal</li>
                    <li>Histórico de transações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-list-ul" style="color:#fff;"></i>
                </div>
                <h3>Taxas</h3>
                <p>Gerenciamento de todas as taxas municipais.</p>
                <ul>
                    <li>Taxa de licença</li>
                    <li>Taxa de coleta de lixo</li>
                    <li>Taxas diversas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-file-earmark-check" style="color:#fff;"></i>
                </div>
                <h3>Certidões</h3>
                <p>Emissão de certidões online.</p>
                <ul>
                    <li>Certidão negativa</li>
                    <li>Certidão positiva</li>
                    <li>Certidão de inteiro teor</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 142, 60%, 35%">
                    <i class="bi bi-bank" style="color:#fff;"></i>
                </div>
                <h3>Cobrança</h3>
                <p>Gestão de cobrança e arrecadação.</p>
                <ul>
                    <li>Arrecadação bancária</li>
                    <li>Boleto online</li>
                    <li>Relatórios gerenciais</li>
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
            <h2>Por que escolher o Sistema de Tributos Betha?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div>
                    <h4>Aumento da arrecadação</h4>
                    <p>Controle total sobre todos os tributos municipais, aumentando a receita.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div>
                    <h4>Conformidade legal</h4>
                    <p>Sistema atualizado conforme as mudanças na legislação tributária.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--purple">
                    <i class="bi bi-globe"></i>
                </div>
                <div>
                    <h4>Serviços online</h4>
                    <p>Contribuintes podem acessar serviços de qualquer lugar.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-bank"></i>
                </div>
                <div>
                    <h4>Integração bancária</h4>
                    <p>Arrecadação integrada com principais bancos do país.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                </div>
                <div>
                    <h4>Relatórios detalhados</h4>
                    <p>Controle total sobre a arrecadação municipal.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-cloud-check"></i>
                </div>
                <div>
                    <h4>Totalmente em nuvem</h4>
                    <p>Acesse de qualquer lugar, a qualquer momento.</p>
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
                O Sistema de Tributos se integra perfeitamente com outras soluções Betha,
                criando um ambiente unificado de gestão pública.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-currency-dollar"></i>
                <span>Tributos</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Contabilidade">
                <i class="bi bi-calculator-fill"></i>
                <span>Contábil</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Tesouraria">
                <i class="bi bi-bank"></i>
                <span>Tesouraria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Cadastro">
                <i class="bi bi-geo-alt"></i>
                <span>Cadastro</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Nota Fiscal">
                <i class="bi bi-receipt"></i>
                <span>NFSe</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="Planejamento">
                <i class="bi bi-graph-up"></i>
                <span>Planejamento</span>
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
                    "O sistema de tributos Betha transformou a gestão tributária do nosso município.
                    Aumento significativo na arrecadação e satisfação dos contribuintes com os serviços online."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div>
                    <strong>Roberto Alves</strong>
                    <span>Secretário de Fazenda - Prefeitura Municipal</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Aumento de 35% na arrecadação</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Redução de 80% em emissões manuales</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>100% de conformidade tributária</span>
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
            <h2>Dúvidas sobre Tributos</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema permite emissão de certidões online?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema permite a emissão de certidões negativas, positivas e de inteiro teor de forma online, sem necessidade de comparecimento presencial.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema calcula automaticamente o ISSQN?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema realiza o cálculo automático do ISSQN com base nas alíquotas vigentes e nas informações prestadas pelo contribuinte.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    É possível fazer integração com bancos para arrecadação?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema possui integração com os principais bancos do país para arrecadação, geração de boletos e conciliação bancária.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O sistema controla o ITBI?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Sim, o sistema oferece gestão completa do ITBI, incluindo cálculo automático com base no valor venal do imóvel e emissão de certidões.</p>
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
            <i class="bi bi-currency-dollar"></i>
        </div>

        <h2>Aumente a arrecadação do seu município</h2>

        <p>
            Tenha controle total sobre todos os tributos municipais.
            Modernize a gestão e melhore o atendimento ao contribuinte.
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

<?php get_footer(); ?></content>
