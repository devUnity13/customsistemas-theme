<?php
/**
 * single-solucao-conecta.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "conecta".
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
                <span>Conecta</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Comunicação · Integração
            </div>

            <h1>
                Gestão Ágil e <span class="ct-hero__highlight">Comunicação</span><br>
                em Nuvem
            </h1>

            <p class="ct-hero__desc">
                Solução completa para gestão de demandas de trabalho. Ganhe agilidade na comunicação interna e externa de sua entidade criando fluxos personalizados e reduzindo custos operacionais.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>ambiente nuvem</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>+ Agilidade</strong>
                    <span>processos rápidos</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo function_exists('custom_img') ? custom_img('modelo.png') : esc_url(get_template_directory_uri()) . '/assets/img/mockup-conecta.png'; ?>" alt="Mockup Conecta" onerror="this.src='https://placehold.co/600x400/1e3166/ffffff?text=Interface+Conecta'">
                
                <!-- Floating badges -->
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Workflows Ágeis
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
            <h2>Gestão inteligente de fluxos e demandas de trabalho</h2>
            <p>
                O sistema Conecta Betha oferece uma solução robusta para a comunicação entre servidores, departamentos e órgãos públicos. Utilizando tecnologias cloud para centralizar o tráfego de dados departamental.
            </p>
            <p>
                Através da organização das tarefas nativas nos grupos de comunicação rápida, todos os ruídos são evitados, reduzindo consideravelmente as despesas estruturais com material gráfico, carimbos e papeladas em malotes.
            </p>

            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Transformação de processos físicos em digitais</li>
                <li><i class="bi bi-check-circle-fill"></i> Criação rápida e autonomia para criar fluxos</li>
                <li><i class="bi bi-check-circle-fill"></i> Comunicação em setores independentes isolados</li>
                <li><i class="bi bi-check-circle-fill"></i> Retomada dinâmica via Rascunhos de envios</li>
            </ul>
        </div>

        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue">
                <i class="bi bi-folder-symlink"></i>
                <h4>Digitalização</h4>
                <p>Anexações pesadas com rastreabilidade absoluta de tramitação.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-people-fill"></i>
                <h4>Grupos de Trabalho</h4>
                <p>Defina as competências focadas para cada unidade e diretoria existente.</p>
            </div>
            <div class="ct-about__card ct-about__card--green">
                <i class="bi bi-diagram-3-fill"></i>
                <h4>Fluxos Flexíveis</h4>
                <p>O próprio administrador parametriza os modelos processuais sem depender de suportes externos.</p>
            </div>
            <div class="ct-about__card ct-about__card--orange">
                <i class="bi bi-bell-fill"></i>
                <h4>Rede de Notificações</h4>
                <p>Avisos assertivos somente a quem precisa agir em determinado processo parado na fila.</p>
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
            <h2>Recursos para revolucionar a comunicação online</h2>
            <p>Explore as funcionalidades que compõem nossa solução unificada de fluxo informacional.</p>
        </div>

        <div class="ct-modulos__grid">

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-laptop" style="color:#fff;"></i>
                </div>
                <h3>Processamento em Nuvem</h3>
                <p>Tenha todas as informações disponíveis não importa em qual lugar o servidor esteja atuando de momento.</p>
                <ul>
                    <li>Acesse diretamente no conecta.betha.cloud</li>
                    <li>Liberação via central do usuário nativa</li>
                    <li>Sempre atualizado com a última versão legal</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-archive" style="color:#fff;"></i>
                </div>
                <h3>Caixa Organizacional</h3>
                <p>Separação lógica clara da fila massiva governamental isolando estritamente os departamentos correspondentes.</p>
                <ul>
                    <li>Fila "Minhas Tarefas" individuais</li>
                    <li>Fila "Tarefas do Grupo" compartilhadas</li>
                    <li>Transição fluida arrastável entre abas</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-layout-text-window-reverse" style="color:#fff;"></i>
                </div>
                <h3>Criador Gráfico de Formulários</h3>
                <p>Substitua velhos impressos tabulados construindo campos obrigatórios lógicos para cada etapa.</p>
                <ul>
                    <li>Perguntas dissertativas, numéricas ou opções</li>
                    <li>Trava de continuidade baseada na resposta da etapa anterior</li>
                    <li>Criação visual imediata por quem atende</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-collection-play" style="color:#fff;"></i>
                </div>
                <h3>Gravação em Rascunho</h3>
                <p>Previne perdas imensuráveis num preenchimento massivo complexo de muitas aprovações seguidas ou quedas na conexão.</p>
                <ul>
                    <li>Persistência no fechamento inesperado do browser</li>
                    <li>Consulta aos Rascunhos para continuar envios atrasados</li>
                    <li>Garantia contínua da preservação documental</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 60%, 35%">
                    <i class="bi bi-globe" style="color:#fff;"></i>
                </div>
                <h3>Canais Externos Integrados</h3>
                <p>O munícipe ou aluno distante não precisa ir a repartição, ele protocola o pacote pela internet no portal respectivo.</p>
                <ul>
                    <li>Interação unificada à distância segura das bases da pandemia e além</li>
                    <li>Despachos de tarefas no EAD escolar atrelados</li>
                    <li>Diminuição estrondosa das aglomerações</li>
                </ul>
            </div>

            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 224, 76%, 36%">
                    <i class="bi bi-sliders2-vertical" style="color:#fff;"></i>
                </div>
                <h3>Módulo Gestor Restrito</h3>
                <p>O administrador dita e parametriza quem exatamente pode visualizar e executar algo dentro de tudo.</p>
                <ul>
                    <li>Mapeamento total da hierarquia pública configurada digitalmente em minutos e replicável</li>
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
            <h2>Por que escolher o sistema Conecta?</h2>
        </div>

        <div class="ct-beneficios__grid">

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--blue">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <div>
                    <h4>Extrema Agilidade de Operação</h4>
                    <p>Tramitações interdepartamentais que demoravam semanas e caixas agora são disparadas instantaneamente.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-piggy-bank"></i>
                </div>
                <div>
                    <h4>Redução Massiva de Despesas</h4>
                    <p>Corte 100% de papéis para circulação interna, frete rodoviário de malotes e desperdício de tinta nas repartições.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--green">
                    <i class="bi bi-ui-checks"></i>
                </div>
                <div>
                    <h4>Organização e Visibilidade</h4>
                    <p>O superior hierárquico sabe quem tem qual processo parado na sua baia digital impedindo lentidão inexplicável.</p>
                </div>
            </div>

            <div class="ct-beneficio">
                <div class="ct-beneficio__icon ct-beneficio__icon--orange">
                    <i class="bi bi-person-check-fill"></i>
                </div>
                <div>
                    <h4>Acessos Hierarquizados</h4>
                    <p>O documento reservado jamais cai nas vistas de alguém de escopo inferior assegurando sigilo funcional.</p>
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
                O sistema Conecta conecta-se fluidamente a diversos módulos e portais atuando como ponte comunicacional indispensável.
            </p>
        </div>

        <div class="ct-integracoes__map">
            <!-- Central hub -->
            <div class="ct-integ-hub">
                <i class="bi bi-link-45deg"></i>
                <span>Conecta</span>
            </div>

            <!-- Satellite nodes -->
            <div class="ct-integ-node ct-integ-node--t" title="Protocolo">
                <i class="bi bi-envelope-paper"></i>
                <span>Protocolo</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr" title="Documentos">
                <i class="bi bi-folder2-open"></i>
                <span>Documentos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r" title="Transparência">
                <i class="bi bi-search"></i>
                <span>Transparência</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br" title="Cidadão Web">
                <i class="bi bi-person-lines-fill"></i>
                <span>Cidadão Web</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b" title="RH">
                <i class="bi bi-people"></i>
                <span>RH e Servidor</span>
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
                    "Ao adotar a tramitação direta do Conecta nossa prefeitura transformou o caos dos despachos em fila indestrutível na nuvem acelerando as repostas num índice assustadoramente positivo ao cidadão contribuinte que esperava retornos da central de solicitações."
                </blockquote>
            </div>

            <div class="ct-case__author">
                <div class="ct-case__avatar">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <strong>Marcelo Silva</strong>
                    <span>Secretário de Administração Interna</span>
                </div>
            </div>

            <div class="ct-case__results">
                <h4>Resultados reais obtidos:</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Término de compras gigantes de papéis e impressoras atreladas a despachos simples rápidos no ambiente virtual restrito</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Rapidez impressionante localizando ofícios que sumiam</span>
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
            <h2>Principais dúvidas sobre o sistema Conecta</h2>
        </div>

        <div class="ct-faq__list">

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O que é exatamente e pra que serve amplamente a solução Conecta?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>O Conecta atende amplamente à gestão de demandas de atividades e solicitações em equipe integrando ambientes colaborativos facilitadamente gerenciados numa interface onde mensagens ofícios e pacotes virtuais saltam de setor em setor amparados pela hierarquia de quem atende num fluxograma digital mapeado interligando prefeitura a escolas, secretarias descentralizadas etc.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como ocorre de fato e onde é executada essa transição diária por meus servidores já atribulados?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Extremante flexível ele roda solto no browser (conecta.betha.cloud) sob forte autenticação da central segura de permissões isentando o temível problema na instalação máquina a máquina, suportando a escalada imediata e mantendo logado frentes focadas nos grupos operacionais sem burocratizar nada o uso contínuo fluido da mesa de controle deles.</p>
                </div>
            </div>

            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Existem travas caso os parâmetros municipais ou leis mudem e alterem a rota de quem assina antes da obra?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>A autonomia fornecida aos supervisores permite edições a quente das caixas de grupo rotacionando e estipulando etapas extras. Assim que o normativo decretar que o procurador avalize agora também, você puxa rapidamente mais uma "caixa condicional" na interface de configurações mudando rapidamente as responsabilidades correntes.</p>
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
            <i class="bi bi-chat-right-text"></i>
        </div>

        <h2>Elimine trâmites engessados, conecte todos.</h2>

        <p>
            Capacite, instrumentalize devidamente e atualize a mesa de trabalho analítico diário de seus dedicados servidores,
            desburocratizando e aproximando todas frentes governamentais por meio da plataforma de fluxos segura da 
            Betha Sistemas.
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
