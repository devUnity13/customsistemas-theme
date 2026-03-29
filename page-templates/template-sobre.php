<?php
/**
 * Template Name: Sobre — Quem Somos
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="about-section" id="sobre">

    <!-- HERO INTRO -->
    <div class="about-hero">
        <div class="about-hero-inner">
            <div class="about-hero-tag">
                <span class="chip"><?php esc_html_e( 'Nossa História', 'custom-sistemas' ); ?></span>
            </div>
            <h1 class="about-hero-title">
                <?php esc_html_e( 'Tecnologia que ', 'custom-sistemas' ); ?><em><?php esc_html_e( 'transforma', 'custom-sistemas' ); ?></em><br>
                <?php esc_html_e( 'cidades brasileiras', 'custom-sistemas' ); ?>
            </h1>
            <p class="about-hero-desc">
                <?php esc_html_e( 'Há mais de três décadas ao lado dos municípios, desenvolvemos soluções que simplificam a gestão pública e melhoram a vida dos cidadãos — de ponta a ponta.', 'custom-sistemas' ); ?>
            </p>
        </div>
        <div class="about-hero-visual">
            <div class="about-hero-img-wrap">
                <img src="<?php echo custom_img( 'about-image.jpg' ); ?>" alt="<?php esc_attr_e( 'Equipe Custom Sistemas', 'custom-sistemas' ); ?>">
                <div class="about-hero-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span><?php esc_html_e( 'Referência em Gestão Pública', 'custom-sistemas' ); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS BAR -->
    <div class="about-stats-bar">
        <div class="about-stats-inner">
            <div class="about-stat-item">
                <span class="about-stat-number" data-target="30">0</span><span class="about-stat-suffix">+</span>
                <p><?php esc_html_e( 'Anos de experiência', 'custom-sistemas' ); ?></p>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number" data-target="500">0</span><span class="about-stat-suffix">+</span>
                <p><?php esc_html_e( 'Municípios atendidos', 'custom-sistemas' ); ?></p>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number" data-target="1200">0</span><span class="about-stat-suffix">+</span>
                <p><?php esc_html_e( 'Usuários ativos', 'custom-sistemas' ); ?></p>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number" data-target="9">0</span><span class="about-stat-suffix"> módulos</span>
                <p><?php esc_html_e( 'Soluções integradas', 'custom-sistemas' ); ?></p>
            </div>
        </div>
    </div>

    <!-- QUEM SOMOS -->
    <div class="about-who">
        <div class="about-who-inner">
            <div class="about-who-text">
                <span class="about-section-label"><?php esc_html_e( 'Quem Somos', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Uma parceira comprometida com a modernização do setor público', 'custom-sistemas' ); ?></h2>
                <p><?php esc_html_e( 'Somos especializados no desenvolvimento de software para gestão pública municipal. Nossa missão é clara: permitir que governos e órgãos públicos modernizem seus processos, tornem suas operações mais eficientes e ofereçam serviços melhores à população.', 'custom-sistemas' ); ?></p>
                <p><?php esc_html_e( 'Com profunda expertise em sistemas de administração financeira, pessoal, planejamento, educação e saúde, entregamos tecnologia robusta, segura e alinhada às reais necessidades das administrações municipais de todo o Brasil.', 'custom-sistemas' ); ?></p>
                <a href="#solutions" class="btn-custom-primary about-who-cta">
                    <?php esc_html_e( 'Conheça nossas soluções', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="about-who-highlights">
                <?php
                $highlights = [
                    [ 'bi-shield-check',    'Segurança de Dados',      'Infraestrutura certificada com proteção total às informações públicas e privadas.' ],
                    [ 'bi-cloud-arrow-up',  '100% em Nuvem',           'Acesso de qualquer lugar, com alta disponibilidade e atualizações automáticas.' ],
                    [ 'bi-headset',         'Suporte Especializado',    'Time dedicado com amplo conhecimento em legislação e processos municipais.' ],
                    [ 'bi-bar-chart-line',  'Gestão Inteligente',       'Dashboards e relatórios em tempo real para decisões baseadas em dados.' ],
                ];
                foreach ( $highlights as [$icon, $title, $desc] ) :
                ?>
                    <div class="about-highlight-card">
                        <div class="about-highlight-icon"><i class="bi <?php echo esc_attr( $icon ); ?>"></i></div>
                        <h4><?php echo esc_html( $title ); ?></h4>
                        <p><?php echo esc_html( $desc ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- MISSÃO E VISÃO -->
    <div class="about-mv">
        <div class="about-mv-inner">
            <div class="about-mv-card mission">
                <div class="about-mv-icon"><i class="bi bi-bullseye"></i></div>
                <h3><?php esc_html_e( 'Missão', 'custom-sistemas' ); ?></h3>
                <p><?php esc_html_e( 'Capacitar gestores públicos com tecnologia de ponta para uma administração mais inteligente, integrada e acessível, gerando impacto real na vida dos cidadãos.', 'custom-sistemas' ); ?></p>
            </div>
            <div class="about-mv-card vision">
                <div class="about-mv-icon"><i class="bi bi-eye"></i></div>
                <h3><?php esc_html_e( 'Visão', 'custom-sistemas' ); ?></h3>
                <p><?php esc_html_e( 'Ser reconhecida como referência nacional em software para gestão pública, promovendo transformação digital em municípios de todo o Brasil.', 'custom-sistemas' ); ?></p>
            </div>
            <div class="about-mv-card values-card">
                <div class="about-mv-icon"><i class="bi bi-stars"></i></div>
                <h3><?php esc_html_e( 'Propósito', 'custom-sistemas' ); ?></h3>
                <p><?php esc_html_e( 'Acreditamos que tecnologia bem aplicada é capaz de transformar cidades, aproximar o poder público dos cidadãos e construir um Brasil mais eficiente.', 'custom-sistemas' ); ?></p>
            </div>
        </div>
    </div>

    <!-- VALORES -->
    <div class="about-values">
        <div class="about-values-inner">
            <div class="about-values-header">
                <span class="about-section-label"><?php esc_html_e( 'Nossos Valores', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Princípios que guiam tudo que fazemos', 'custom-sistemas' ); ?></h2>
            </div>
            <div class="about-values-grid">
                <?php
                $values = [
                    [ '01', 'bi-lightbulb', 'Inovação',     'Buscamos constantemente novas soluções tecnológicas, acompanhando as tendências e as necessidades do setor público.' ],
                    [ '02', 'bi-graph-up',  'Eficiência',    'Otimizamos processos para gerar resultados reais, reduzindo custos e aumentando a capacidade dos municípios.' ],
                    [ '03', 'bi-patch-check','Compromisso',  'Garantimos atendimento e suporte de qualidade, sendo parceiros de longo prazo de cada cliente que atendemos.' ],
                    [ '04', 'bi-eye',       'Transparência', 'Trabalhamos de forma clara, ética e alinhada às exigências dos órgãos públicos e da legislação vigente.' ],
                ];
                foreach ( $values as [$num, $icon, $title, $desc] ) :
                ?>
                    <div class="about-value-item">
                        <div class="about-value-num"><?php echo esc_html( $num ); ?></div>
                        <div class="about-value-icon"><i class="bi <?php echo esc_attr( $icon ); ?>"></i></div>
                        <h4><?php echo esc_html( $title ); ?></h4>
                        <p><?php echo esc_html( $desc ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- TIMELINE -->
    <div class="about-timeline">
        <div class="about-timeline-inner">
            <div class="about-timeline-header">
                <span class="about-section-label"><?php esc_html_e( 'Nossa Trajetória', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Mais de três décadas de evolução contínua', 'custom-sistemas' ); ?></h2>
            </div>
            <div class="about-timeline-track">
                <?php
                $timeline = [
                    [ '1990', 'Fundação',               'Nascemos com o propósito de digitalizar a gestão municipal, desenvolvendo os primeiros sistemas para prefeituras.', false],
                    [ '2000', 'Expansão Regional',       'Expandimos nossa presença para centenas de municípios, consolidando nossa expertise em gestão financeira e de pessoas.', false ],
                    [ '2010', 'Transformação Digital',   'Migramos para plataformas web e mobile, levando nossas soluções para a nuvem com maior agilidade e segurança.', false ],
                    [ 'Hoje', 'Gestão Inteligente',      'Integramos inteligência artificial e BI avançado, levando a gestão pública a um novo nível de eficiência e transparência.', true ],
                ];
                foreach ( $timeline as [$year, $title, $desc, $active] ) :
                    $dot_class = ! empty( $active ) ? ' active' : '';
                ?>
                    <div class="about-timeline-item">
                        <div class="about-timeline-dot<?php echo esc_attr( $dot_class ); ?>"></div>
                        <div class="about-timeline-content">
                            <span class="about-timeline-year"><?php echo esc_html( $year ); ?></span>
                            <h4><?php echo esc_html( $title ); ?></h4>
                            <p><?php echo esc_html( $desc ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- CTA FINAL -->
    <div class="about-cta-block">
        <div class="about-cta-inner">
            <h2><?php esc_html_e( 'Pronto para transformar sua gestão municipal?', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Fale com nossos especialistas e descubra como podemos ajudar seu município.', 'custom-sistemas' ); ?></p>
            <div class="about-cta-actions">
                <a href="#solutions" class="btn-custom-primary"><?php esc_html_e( 'Conheça nossas soluções', 'custom-sistemas' ); ?></a>
                <a href="#contato" class="about-cta-link"><?php esc_html_e( 'Falar com um consultor', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>
