<?php
/**
 * Template Name: Carreira — Trabalhe Conosco
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="carreira-hero">
    <div class="carreira-hero-bg">
        <div class="carreira-orb carreira-orb-1"></div>
        <div class="carreira-orb carreira-orb-2"></div>
        <div class="carreira-orb carreira-orb-3"></div>
        <div class="carreira-hero-grid"></div>
    </div>

    <div class="carreira-hero-layout">

        <!-- Coluna de texto -->
        <div class="carreira-hero-inner">
            <div class="carreira-hero-badge">
                <i class="bi bi-stars"></i>
                <span><?php esc_html_e( 'Venha crescer com a gente', 'custom-sistemas' ); ?></span>
            </div>

            <h1 class="carreira-hero-title">
                <?php esc_html_e( 'Faça parte do time que ', 'custom-sistemas' ); ?>
                <span class="accent"><?php esc_html_e( 'transforma a gestão pública', 'custom-sistemas' ); ?></span>
            </h1>

            <p class="carreira-hero-desc">
                <?php esc_html_e( 'Na Custom Sistemas, acreditamos que tecnologia e pessoas formam a combinação perfeita. Aqui você encontrará um ambiente acolhedor, oportunidades reais de crescimento e o desafio de construir soluções que impactam milhares de municípios brasileiros.', 'custom-sistemas' ); ?>
            </p>

            <div class="carreira-hero-actions">
                <a href="#vagas" class="btn-custom-primary">
                    <?php esc_html_e( 'Ver vagas abertas', 'custom-sistemas' ); ?> <i class="bi bi-arrow-down"></i>
                </a>
                <a href="https://www.linkedin.com/company/custom-sistemas" target="_blank" rel="noopener" class="btn-linkedin">
                    <i class="bi bi-linkedin"></i> <?php esc_html_e( 'Nos siga no LinkedIn', 'custom-sistemas' ); ?>
                </a>
            </div>

            <div class="carreira-hero-stats">
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label"><?php esc_html_e( 'Anos de mercado', 'custom-sistemas' ); ?></span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">200+</span>
                    <span class="stat-label"><?php esc_html_e( 'Colaboradores', 'custom-sistemas' ); ?></span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label"><?php esc_html_e( 'Clientes satisfeitos', 'custom-sistemas' ); ?></span>
                </div>
            </div>
        </div>

        <!-- Mosaico de fotos -->
        <div class="carreira-hero-mosaic">
            <div class="mosaic-col mosaic-col-a">
                <div class="mosaic-img">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=480&q=80&auto=format&fit=crop"
                         alt="Equipe trabalhando em conjunto" loading="lazy">
                </div>
            </div>
            <div class="mosaic-col mosaic-col-b">
                <div class="mosaic-img">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=480&q=80&auto=format&fit=crop"
                         alt="Reunião de equipe" loading="lazy">
                </div>
                <div class="mosaic-img">
                    <img src="https://images.unsplash.com/photo-1573497491765-dccce02b29df?w=480&q=80&auto=format&fit=crop"
                         alt="Colaboradora trabalhando" loading="lazy">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     CULTURA
══════════════════════════════════════════ -->
<section class="carreira-cultura">
    <div class="carreira-container">
        <div class="carreira-cultura-layout">

            <!-- Foto com badge flutuante -->
            <div class="carreira-cultura-foto">
                <div class="cultura-foto-wrap">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=720&q=80&auto=format&fit=crop"
                         alt="Time Custom Sistemas reunido" loading="lazy">
                    <div class="cultura-foto-badge">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <strong>98%</strong>
                            <span><?php esc_html_e( 'satisfação interna', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteúdo -->
            <div class="carreira-cultura-content">
                <div class="carreira-section-header" style="text-align:left;margin-left:0;margin-bottom:2rem;">
                    <span class="carreira-label"><i class="bi bi-heart"></i> <?php esc_html_e( 'Nossa Cultura', 'custom-sistemas' ); ?></span>
                    <h2><?php esc_html_e( 'Mais que uma empresa, ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'somos uma família', 'custom-sistemas' ); ?></span></h2>
                    <p><?php esc_html_e( 'Construímos um ambiente onde cada pessoa pode ser autêntica, aprender e contribuir para algo maior que ela mesma.', 'custom-sistemas' ); ?></p>
                </div>

                <div class="carreira-valores-grid">
                    <?php
                    $valores = [
                        [ 'bi-people',       'Trabalho em Equipe', 'Acreditamos que juntos somos mais fortes. Colaboração é o nosso DNA.' ],
                        [ 'bi-lightbulb',    'Inovação Constante', 'Buscamos sempre novas formas de resolver problemas e melhorar.' ],
                        [ 'bi-shield-check', 'Transparência',      'Comunicação aberta e honesta é a base de tudo que fazemos.' ],
                        [ 'bi-award',        'Qualidade',          'Compromisso com a excelência em cada detalhe do nosso trabalho.' ],
                    ];
                    foreach ( $valores as $v ) : ?>
                        <div class="valor-card">
                            <div class="valor-icon"><i class="bi <?php echo esc_attr( $v[0] ); ?>"></i></div>
                            <div class="valor-text">
                                <h3><?php echo esc_html( $v[1] ); ?></h3>
                                <p><?php echo esc_html( $v[2] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     BENEFÍCIOS
══════════════════════════════════════════ -->
<section class="carreira-beneficios">
    <div class="carreira-container">
        <div class="carreira-section-header">
            <span class="carreira-label"><i class="bi bi-gift"></i> <?php esc_html_e( 'Benefícios', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Cuidamos bem ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'de quem cuida da gente', 'custom-sistemas' ); ?></span></h2>
            <p><?php esc_html_e( 'Convênios e vantagens pensadas para seu bem-estar e qualidade de vida.', 'custom-sistemas' ); ?></p>
        </div>

        <div class="beneficios-layout">

            <!-- Foto do escritório -->
            <div class="beneficios-foto">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80&auto=format&fit=crop"
                     alt="Nosso ambiente de trabalho" loading="lazy">
                <div class="beneficios-foto-overlay">
                    <span class="beneficios-foto-tag">
                        <i class="bi bi-geo-alt-fill"></i>
                        <?php esc_html_e( 'Nosso escritório, RJ', 'custom-sistemas' ); ?>
                    </span>
                </div>
            </div>

            <!-- Grid de benefícios -->
            <div class="beneficios-grid">
                <?php
                $beneficios = [
                    [ 'bi-heart-pulse',    'Plano de Saúde',          'Plano médico completo para você e sua família.' ],
                    [ 'bi-currency-dollar','Participação nos Lucros',  'Resultados que você ajuda a gerar, você também aproveita.' ],
                    [ 'bi-book',           'Capacitação',              'Cursos e treinamentos para seu desenvolvimento contínuo.' ],
                    [ 'bi-clock',          'Horário Flexível',         'Flexibilidade para equilibrar vida pessoal e profissional.' ],
                    [ 'bi-house',          'Home Office',              'Modelo híbrido para maior conforto e produtividade.' ],
                    [ 'bi-controller',     'Ambiente Descontraído',    'Espaço com mesa de pingue-pongue e momentos de descontração.' ],
                    [ 'bi-cup-hot',        'Café e Lanches',           'Refrigerantes, cafés e snacks gratuitos.' ],
                    [ 'bi-calendar-event', 'Eventos Internos',         'Happy hours, confraternizações e team buildings.' ],
                ];
                foreach ( $beneficios as $b ) : ?>
                    <div class="beneficio-item">
                        <div class="beneficio-icon"><i class="bi <?php echo esc_attr( $b[0] ); ?>"></i></div>
                        <h4><?php echo esc_html( $b[1] ); ?></h4>
                        <p><?php echo esc_html( $b[2] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     VAGAS
══════════════════════════════════════════ -->
<section class="carreira-vagas" id="vagas">
    <div class="carreira-container">
        <div class="carreira-section-header">
            <span class="carreira-label"><i class="bi bi-briefcase"></i> <?php esc_html_e( 'Vagas Abertas', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Encontre sua ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'próxima oportunidade', 'custom-sistemas' ); ?></span></h2>
            <p><?php esc_html_e( 'Temos posições abertas para diferentes perfis. Candidate-se e faça parte do nosso time!', 'custom-sistemas' ); ?></p>
        </div>

        <div class="vagas-list">
            <?php
            $vagas = [
                [ 'Desenvolvedor Full Stack',          'Desenvolvimento de sistemas para gestão pública', [ 'PHP', 'JavaScript', 'MySQL', 'Híbrido' ] ],
                [ 'Analista de Suporte Técnico',       'Atendimento e suporte aos clientes',              [ 'Suporte', 'Gestão Pública', 'Presencial' ] ],
                [ 'Analista de Business Intelligence', 'Análise de dados e relatórios gerenciais',        [ 'BI', 'SQL', 'Power BI', 'Híbrido' ] ],
                [ 'Analista de Qualidade (QA)',         'Testes e qualidade de software',                  [ 'QA', 'Testes', 'Híbrido' ] ],
                [ 'Designer UX/UI',                    'Design de interfaces e experiência do usuário',   [ 'UX', 'UI', 'Figma', 'Híbrido' ] ],
            ];
            foreach ( $vagas as $vaga ) : ?>
                <div class="vaga-card">
                    <div class="vaga-info">
                        <h3><?php echo esc_html( $vaga[0] ); ?></h3>
                        <p><?php echo esc_html( $vaga[1] ); ?></p>
                        <div class="vaga-tags">
                            <?php foreach ( $vaga[2] as $tag ) : ?>
                                <span class="vaga-tag"><?php echo esc_html( $tag ); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <button class="btn-vaga" onclick="openCarreiraModal('<?php echo esc_js( $vaga[0] ); ?>')">
                        <?php esc_html_e( 'Candidatar-se', 'custom-sistemas' ); ?> <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="carreira-cta-linkedin">
            <p><?php esc_html_e( 'Não encontrou a vaga ideal?', 'custom-sistemas' ); ?> <strong><?php esc_html_e( 'Não se preocupe!', 'custom-sistemas' ); ?></strong></p>
            <a href="https://www.linkedin.com/company/custom-sistemas/jobs/" target="_blank" rel="noopener" class="btn-linkedin-full">
                <i class="bi bi-linkedin"></i> <?php esc_html_e( 'Ver todas as vagas no LinkedIn', 'custom-sistemas' ); ?>
            </a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     DEPOIMENTOS
══════════════════════════════════════════ -->
<section class="carreira-depoimentos">
    <div class="carreira-container">
        <div class="carreira-section-header">
            <span class="carreira-label"><i class="bi bi-chat-quote"></i> <?php esc_html_e( 'Depoimentos', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'O que ', 'custom-sistemas' ); ?><span class="accent"><?php esc_html_e( 'nossos colaboradores', 'custom-sistemas' ); ?></span><?php esc_html_e( ' dizem', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Quem melhor fala de nós é quem vive isso todo dia.', 'custom-sistemas' ); ?></p>
        </div>

        <div class="depoimentos-grid">
            <?php
            $depoimentos = [
                [
                    'texto' => 'Trabalhar na Custom Sistemas tem sido uma experiência incrível. O ambiente é muito acolhedor e todos estão dispostos a ajudar. Sinto que estou crescendo profissionalmente a cada dia.',
                    'nome'  => 'Marcos Silva',
                    'cargo' => 'Desenvolvedor Full Stack',
                    'foto'  => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&q=80&auto=format&fit=crop&crop=face',
                ],
                [
                    'texto' => 'A empresa realmente se importa com seus colaboradores. O plano de saúde é excelente e a flexibilidade do home office melhora muito minha qualidade de vida.',
                    'nome'  => 'Juliana Oliveira',
                    'cargo' => 'Analista de Suporte',
                    'foto'  => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=120&q=80&auto=format&fit=crop&crop=face',
                ],
                [
                    'texto' => 'Aqui tenho oportunidade de aprender e me desenvolver. Já participei de vários cursos e agora estou liderando um projeto novo. É muito gratificante!',
                    'nome'  => 'Carlos Pereira',
                    'cargo' => 'Analista de BI',
                    'foto'  => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=120&q=80&auto=format&fit=crop&crop=face',
                ],
            ];
            foreach ( $depoimentos as $dep ) : ?>
                <div class="depoimento-card">
                    <div class="depoimento-quote"><i class="bi bi-quote"></i></div>
                    <p class="depoimento-text"><?php echo esc_html( $dep['texto'] ); ?></p>
                    <div class="depoimento-author">
                        <img class="depoimento-foto"
                             src="<?php echo esc_url( $dep['foto'] ); ?>"
                             alt="<?php echo esc_attr( $dep['nome'] ); ?>"
                             loading="lazy">
                        <div>
                            <strong><?php echo esc_html( $dep['nome'] ); ?></strong>
                            <span><?php echo esc_html( $dep['cargo'] ); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════ -->
<section class="carreira-cta">
    <div class="carreira-cta-bg">
        <div class="carreira-cta-orb"></div>
    </div>
    <div class="carreira-cta-img">
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=1600&q=80&auto=format&fit=crop"
             alt="Equipe comemorando" loading="lazy">
    </div>
    <div class="carreira-cta-inner">
        <div class="carreira-cta-icon"><i class="bi bi-rocket-takeoff"></i></div>
        <h2><?php esc_html_e( 'Pronto para fazer parte do nosso time?', 'custom-sistemas' ); ?></h2>
        <p><?php esc_html_e( 'Estamos ansiosos para conhecer você! Candidate-se agora e venha crescer conosco.', 'custom-sistemas' ); ?></p>
        <div class="carreira-cta-actions">
            <a href="#vagas" class="btn-custom-primary">
                <?php esc_html_e( 'Ver vagas', 'custom-sistemas' ); ?> <i class="bi bi-arrow-down"></i>
            </a>
            <a href="https://www.linkedin.com/company/custom-sistemas" target="_blank" rel="noopener" class="btn-custom-outline-white">
                <i class="bi bi-linkedin"></i> LinkedIn
            </a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     MODAL DE CANDIDATURA
══════════════════════════════════════════ -->
<div class="carreira-modal-overlay" id="carreiraModal">
    <div class="carreira-modal">
        <button class="carreira-modal-close" onclick="closeCarreiraModal()">
            <i class="bi bi-x-lg"></i>
        </button>
        <div class="carreira-modal-header">
            <h3><?php esc_html_e( 'Candidate-se', 'custom-sistemas' ); ?></h3>
            <p><?php esc_html_e( 'Preencha seus dados e anexe seu currículo', 'custom-sistemas' ); ?></p>
            <span class="vaga-selecionada" id="vagaSelecionada"></span>
        </div>
        <form class="carreira-form" id="carreiraForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome"><?php esc_html_e( 'Nome completo *', 'custom-sistemas' ); ?></label>
                <input type="text" id="nome" name="nome" required placeholder="<?php esc_attr_e( 'Seu nome completo', 'custom-sistemas' ); ?>">
            </div>
            <div class="form-group">
                <label for="email"><?php esc_html_e( 'E-mail *', 'custom-sistemas' ); ?></label>
                <input type="email" id="email" name="email" required placeholder="seu@email.com">
            </div>
            <div class="form-group">
                <label for="telefone"><?php esc_html_e( 'Telefone *', 'custom-sistemas' ); ?></label>
                <input type="tel" id="telefone" name="telefone" required placeholder="(00) 00000-0000">
            </div>
            <div class="form-group">
                <label for="vaga"><?php esc_html_e( 'Vaga pretendida *', 'custom-sistemas' ); ?></label>
                <select id="vaga" name="vaga" required>
                    <option value=""><?php esc_html_e( 'Selecione uma vaga', 'custom-sistemas' ); ?></option>
                    <option value="Desenvolvedor Full Stack">Desenvolvedor Full Stack</option>
                    <option value="Analista de Suporte Técnico">Analista de Suporte Técnico</option>
                    <option value="Analista de Business Intelligence">Analista de Business Intelligence</option>
                    <option value="Analista de Qualidade (QA)">Analista de Qualidade (QA)</option>
                    <option value="Designer UX/UI">Designer UX/UI</option>
                    <option value="Outra">Outra</option>
                </select>
            </div>
            <div class="form-group">
                <label><?php esc_html_e( 'Anexar currículo (PDF) *', 'custom-sistemas' ); ?></label>
                <div class="file-upload">
                    <input type="file" id="curriculo" name="curriculo" accept=".pdf" required>
                    <label for="curriculo" class="file-upload-label">
                        <i class="bi bi-cloud-arrow-up"></i>
                        <span><?php esc_html_e( 'Clique para selecionar ou arraste o arquivo', 'custom-sistemas' ); ?></span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="mensagem"><?php esc_html_e( 'Mensagem (opcional)', 'custom-sistemas' ); ?></label>
                <textarea id="mensagem" name="mensagem" rows="3" placeholder="<?php esc_attr_e( 'Conte-nos um pouco sobre você...', 'custom-sistemas' ); ?>"></textarea>
            </div>
            <button type="submit" class="btn-submit">
                <i class="bi bi-send"></i> <?php esc_html_e( 'Enviar candidatura', 'custom-sistemas' ); ?>
            </button>
        </form>
        <div class="carreira-modal-success" id="carreiraSuccess" style="display:none;">
            <div class="success-icon"><i class="bi bi-check-circle-fill"></i></div>
            <h3><?php esc_html_e( 'Candidatura enviada!', 'custom-sistemas' ); ?></h3>
            <p><?php esc_html_e( 'Obrigado por se interessar pela Custom Sistemas. Analisaremos seu currículo e retornaremos em breve.', 'custom-sistemas' ); ?></p>
            <button class="btn-custom-primary" onclick="closeCarreiraModal()"><?php esc_html_e( 'Fechar', 'custom-sistemas' ); ?></button>
        </div>
    </div>
</div>

<?php get_footer(); ?>