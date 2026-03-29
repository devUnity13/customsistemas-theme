<?php
/**
 * Template Name: Home — Página Inicial
 * Template Post Type: page
 *
 * Template da página inicial com Hero Carousel, Stats, Especialidades,
 * Tecnologias, Carreiras e FAQ.
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ══════════════════ HERO ══════════════════ -->
<section class="hero">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-indicators hero-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="hero-wrapper">
                    <div class="hero-slide">
                        <div>
                            <div class="hero-eyebrow"><?php esc_html_e( 'Gestão Pública Inteligente', 'custom-sistemas' ); ?></div>
                            <h1><?php esc_html_e( 'Tecnologia inteligente para a ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'Gestão Pública', 'custom-sistemas' ); ?></span></h1>
                            <p><?php esc_html_e( 'Sistemas completos para contabilidade, folha de pagamento, contratos, licitações e transparência pública.', 'custom-sistemas' ); ?></p>
                            <div class="hero-actions">
                                <a href="#" class="btn-custom-primary"><?php esc_html_e( 'Conhecer Soluções', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i></a>
                                <a href="#" class="btn-custom-outline"><?php esc_html_e( 'Falar com vendas', 'custom-sistemas' ); ?></a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <img src="<?php echo custom_img( 'betha.jpg' ); ?>" alt="<?php esc_attr_e( 'Sistema Custom', 'custom-sistemas' ); ?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="hero-wrapper">
                    <div class="hero-slide">
                        <div>
                            <div class="hero-eyebrow"><?php esc_html_e( 'Inovação em Atendimento', 'custom-sistemas' ); ?></div>
                            <h1><?php esc_html_e( 'Fale com a ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'BETH!', 'custom-sistemas' ); ?></span></h1>
                            <p><?php esc_html_e( 'A solução para tornar os atendimentos dos municípios mais ágeis e eficientes, garantindo total segurança e conformidade com a LGPD.', 'custom-sistemas' ); ?></p>
                            <div class="hero-actions">
                                <a href="#" class="btn-custom-primary"><?php esc_html_e( 'Ver Módulos', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i></a>
                                <a href="#" class="btn-custom-outline"><?php esc_html_e( 'Saiba mais', 'custom-sistemas' ); ?></a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <img src="<?php echo custom_img( 'bethe.jpg' ); ?>" alt="BETH">
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="carousel-item">
                <div class="hero-wrapper">
                    <div class="hero-slide">
                        <div>
                            <div class="hero-eyebrow"><?php esc_html_e( 'Transformação Digital', 'custom-sistemas' ); ?></div>
                            <h1><?php esc_html_e( 'Municípios digitalizados avançam em ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'ranking nacional', 'custom-sistemas' ); ?></span></h1>
                            <p><?php esc_html_e( 'Ganhos em transparência e governança no PNTP mostram como a transformação digital e o uso de tecnologias fortalecem práticas públicas.', 'custom-sistemas' ); ?></p>
                            <div class="hero-actions">
                                <a href="#" class="btn-custom-primary"><?php esc_html_e( 'Ver Resultados', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i></a>
                                <a href="#" class="btn-custom-outline"><?php esc_html_e( 'Casos de sucesso', 'custom-sistemas' ); ?></a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <img src="<?php echo custom_img( 'digitalizados.jpg' ); ?>" alt="<?php esc_attr_e( 'Transformação Digital', 'custom-sistemas' ); ?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero-wrapper">
            <div class="hero-controls">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- ══════════════════ STATS ══════════════════ -->
<div class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-number">500<span>+</span></div>
            <div class="stat-label"><?php esc_html_e( 'Municípios atendidos', 'custom-sistemas' ); ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-number">20<span>+</span></div>
            <div class="stat-label"><?php esc_html_e( 'Anos de experiência', 'custom-sistemas' ); ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-number">50<span>M+</span></div>
            <div class="stat-label"><?php esc_html_e( 'Cidadãos impactados', 'custom-sistemas' ); ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-number">98<span>%</span></div>
            <div class="stat-label"><?php esc_html_e( 'Satisfação dos clientes', 'custom-sistemas' ); ?></div>
        </div>
    </div>
</div>

<!-- ══════════════════ ESPECIALIDADES ══════════════════ -->
<section class="especialidades">
    <div class="especialidades-inner">
        <div class="especialidades-text">
            <span class="section-label"><?php esc_html_e( 'Nossa especialidade', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Especialista em software para gestão pública', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Somos líderes em desenvolvimento de soluções de tecnologia para gestão pública. Entendemos que cada cidade é um órgão vivo. Por isso, nosso papel não é apenas olhar ou pensar, é resolver e oferecer os melhores caminhos, sempre.', 'custom-sistemas' ); ?></p>
            <ul class="feature-list">
                <li><span class="check"><i class="bi bi-check-lg"></i></span><?php esc_html_e( 'Conformidade com legislação municipal, estadual e federal', 'custom-sistemas' ); ?></li>
                <li><span class="check"><i class="bi bi-check-lg"></i></span><?php esc_html_e( 'Integração nativa entre todos os módulos do sistema', 'custom-sistemas' ); ?></li>
                <li><span class="check"><i class="bi bi-check-lg"></i></span><?php esc_html_e( 'Suporte especializado em gestão pública 24/7', 'custom-sistemas' ); ?></li>
                <li><span class="check"><i class="bi bi-check-lg"></i></span><?php esc_html_e( 'Atualizações automáticas com mudanças na legislação', 'custom-sistemas' ); ?></li>
            </ul>
            <a href="#" class="btn-custom-primary">
                <?php esc_html_e( 'Conheça as Soluções', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="especialidades-image">
            <img src="<?php echo custom_img( 'especialidades-pc.png' ); ?>" alt="<?php esc_attr_e( 'Especialidade Custom', 'custom-sistemas' ); ?>">
        </div>
    </div>
</section>

<!-- ══════════════════ TECNOLOGIAS ══════════════════ -->
<section class="tecnologias">
    <div class="tecnologias-inner">
        <div class="tecnologias-text">
            <span class="section-label"><?php esc_html_e( 'Nossas tecnologias', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Tudo que a sua cidade pode se tornar', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Tudo o que fazemos dentro da Custom tem uma finalidade: atender as necessidades de pessoas e cidades que precisam se movimentar e evoluir.', 'custom-sistemas' ); ?></p>
            <a href="#" class="btn-custom-primary">
                <?php esc_html_e( 'Ver tecnologias', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="tech-grid">
            <?php
            $techs = [
                [ 'bi-cpu',               'Machine Learning' ],
                [ 'bi-wifi',              'IoT' ],
                [ 'bi-person-bounding-box', 'Rec. Facial' ],
                [ 'bi-database',          'Big Data' ],
                [ 'bi-mic',               'Rec. de Voz' ],
                [ 'bi-robot',             'IA' ],
                [ 'bi-heart-pulse',       'Telemedicina' ],
                [ 'bi-cloud',             'Cloud' ],
                [ 'bi-lock-fill',         'Cibersegurança' ],
            ];
            foreach ( $techs as [$icon, $label] ) :
            ?>
                <div class="tech-card">
                    <i class="bi <?php echo esc_attr( $icon ); ?>"></i>
                    <span><?php echo esc_html( $label ); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════════ CARREIRAS ══════════════════ -->
<section class="carreiras">
    <div class="carreiras-inner">
        <div class="carreiras-text">
            <span class="section-label"><?php esc_html_e( 'Carreiras', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Pessoas que constroem o futuro das cidades', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Aqui na Custom, tecnologia é meio — não fim. Desenvolvemos soluções que impactam diretamente milhões de pessoas, com propósito, responsabilidade e orgulho do que entregamos.', 'custom-sistemas' ); ?></p>
            <ul class="benefit-list">
                <li><i class="bi bi-check-circle-fill"></i> <?php esc_html_e( 'Impacto social real e mensurável', 'custom-sistemas' ); ?></li>
                <li><i class="bi bi-check-circle-fill"></i> <?php esc_html_e( 'Crescimento profissional contínuo', 'custom-sistemas' ); ?></li>
                <li><i class="bi bi-check-circle-fill"></i> <?php esc_html_e( 'Ambiente colaborativo e inclusivo', 'custom-sistemas' ); ?></li>
                <li><i class="bi bi-check-circle-fill"></i> <?php esc_html_e( 'Remuneração competitiva e benefícios', 'custom-sistemas' ); ?></li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/carreira/' ) ); ?>" class="btn-custom-primary">
                <?php esc_html_e( 'Ver vagas abertas', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="carreiras-image">
            <img src="<?php echo custom_img( 'carreira.jpeg' ); ?>" alt="<?php esc_attr_e( 'Time Custom', 'custom-sistemas' ); ?>">
            <div class="carreiras-badge">
                <i class="bi bi-people-fill"></i>
                <div>
                    <strong>+200</strong>
                    <span><?php esc_html_e( 'colaboradores', 'custom-sistemas' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════ FAQ ══════════════════ -->
<section class="faq">
    <div class="faq-inner">
        <div class="faq-header">
            <span class="section-label" style="display:block;text-align:center;margin-bottom:10px;">FAQ</span>
            <h2><?php esc_html_e( 'Perguntas Frequentes', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Tire suas dúvidas sobre nossas soluções e serviços.', 'custom-sistemas' ); ?></p>
        </div>

        <?php
        $faqs = [
            [
                'q' => 'Como a Custom atende a gestão pública?',
                'a' => 'Desenvolvemos soluções completas focadas em legislação, transparência e eficiência administrativa. Cada módulo é projetado especificamente para os desafios da gestão municipal, com atualizações contínuas para acompanhar mudanças na legislação.',
            ],
            [
                'q' => 'Como as soluções da Custom contribuem para a transparência pública?',
                'a' => 'Nossas plataformas garantem acesso claro às informações públicas e conformidade com a legislação vigente. O Portal da Transparência da Custom já atende centenas de municípios, facilitando o cumprimento da Lei de Acesso à Informação.',
            ],
            [
                'q' => 'De que forma a Custom apoia a modernização da gestão municipal?',
                'a' => 'Automatizamos processos, integramos sistemas e reduzimos burocracias para uma gestão mais eficiente. Nossa abordagem inclui treinamento completo da equipe, migração de dados e suporte dedicado durante toda a implementação.',
            ],
            [
                'q' => 'Qual é o prazo típico para implementação dos sistemas?',
                'a' => 'O prazo varia conforme os módulos contratados e a complexidade do município. Em média, a implementação completa leva de 60 a 120 dias, com um processo estruturado de migração e treinamento para garantir uma transição sem impactos operacionais.',
            ],
        ];
        foreach ( $faqs as $i => $faq ) :
            $open = ( 0 === $i ) ? ' open' : '';
            $max  = ( 0 === $i ) ? ' style="max-height: 200px;"' : '';
        ?>
            <div class="faq-item<?php echo esc_attr( $open ); ?>" onclick="toggleFaq(this)">
                <button class="faq-question">
                    <?php echo esc_html( $faq['q'] ); ?>
                    <span class="icon"><i class="bi bi-plus-lg"></i></span>
                </button>
                <div class="faq-answer"<?php echo $max; ?>>
                    <div class="faq-answer-inner"><?php echo esc_html( $faq['a'] ); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
