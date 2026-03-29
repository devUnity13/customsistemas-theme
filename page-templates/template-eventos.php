<?php
/**
 * Template Name: Eventos
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="evt-page">

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="evt-hero">
    <div class="evt-hero-shapes">
        <div class="evt-shape evt-shape-1"></div>
        <div class="evt-shape evt-shape-2"></div>
        <div class="evt-shape evt-shape-3"></div>
    </div>
    <div class="evt-hero-inner">
        <div class="evt-hero-eyebrow">
            <span class="evt-dot"></span>
            <span><?php esc_html_e( 'Eventos · Custom Sistemas', 'custom-sistemas' ); ?></span>
        </div>
        <h1 class="evt-hero-title">
            <?php esc_html_e( 'Conecte-se, aprenda e', 'custom-sistemas' ); ?><br>
            <?php esc_html_e( 'evolua com a ', 'custom-sistemas' ); ?><em><?php esc_html_e( 'Custom', 'custom-sistemas' ); ?></em>
        </h1>
        <p class="evt-hero-subtitle">
            <?php esc_html_e( 'Workshops, fóruns, conferências e encontros presenciais e online. Participe dos nossos eventos e leve inovação para o seu município.', 'custom-sistemas' ); ?>
        </p>
        <div class="evt-hero-ctas">
            <a href="#proximos" class="evt-btn-primary">
                <i class="bi bi-calendar-event"></i>
                <?php esc_html_e( 'Ver próximos eventos', 'custom-sistemas' ); ?>
            </a>
            <a href="#passados" class="evt-btn-ghost">
                <i class="bi bi-play-circle"></i>
                <?php esc_html_e( 'Eventos anteriores', 'custom-sistemas' ); ?>
            </a>
        </div>
        <div class="evt-hero-stats">
            <div class="evt-hero-stat">
                <strong>50+</strong>
                <span><?php esc_html_e( 'Eventos por ano', 'custom-sistemas' ); ?></span>
            </div>
            <div class="evt-hero-stat-divider"></div>
            <div class="evt-hero-stat">
                <strong>5.000+</strong>
                <span><?php esc_html_e( 'Participantes', 'custom-sistemas' ); ?></span>
            </div>
            <div class="evt-hero-stat-divider"></div>
            <div class="evt-hero-stat">
                <strong>100%</strong>
                <span><?php esc_html_e( 'Gratuitos', 'custom-sistemas' ); ?></span>
            </div>
        </div>
    </div>
    <div class="evt-hero-visual">
        <div class="evt-calendar-preview">
            <div class="evt-cal-header">
                <span class="evt-cal-month"><?php esc_html_e( 'Março', 'custom-sistemas' ); ?> · 2025</span>
                <div class="evt-cal-nav">
                    <button><i class="bi bi-chevron-left"></i></button>
                    <button><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="evt-cal-days">
                <?php
                $dias = ['D','S','T','Q','Q','S','S'];
                foreach ($dias as $d) echo '<span class="evt-cal-day-label">' . esc_html($d) . '</span>';
                for ($i = 1; $i <= 5; $i++) echo '<span class="evt-cal-day-empty"></span>';
                for ($i = 1; $i <= 31; $i++) {
                    $highlight = in_array($i, [12, 19, 26]) ? ' evt-cal-day-event' : '';
                    $today = ($i === 7) ? ' evt-cal-day-today' : '';
                    echo '<span class="evt-cal-day' . $highlight . $today . '">' . $i . '</span>';
                }
                ?>
            </div>
            <div class="evt-cal-upcoming">
                <div class="evt-cal-upcoming-item">
                    <span class="evt-cal-upcoming-dot evt-dot-green"></span>
                    <div>
                        <strong><?php esc_html_e( '12 Mar — Fórum Gestão Pública', 'custom-sistemas' ); ?></strong>
                        <span><?php esc_html_e( 'Online · 14h–17h', 'custom-sistemas' ); ?></span>
                    </div>
                </div>
                <div class="evt-cal-upcoming-item">
                    <span class="evt-cal-upcoming-dot evt-dot-blue"></span>
                    <div>
                        <strong><?php esc_html_e( '19 Mar — Workshop Betha', 'custom-sistemas' ); ?></strong>
                        <span><?php esc_html_e( 'Rio de Janeiro · 9h–12h', 'custom-sistemas' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FILTROS + PRÓXIMOS EVENTOS
══════════════════════════════════════════ -->
<section class="evt-proximos" id="proximos">
    <div class="evt-container">

        <div class="evt-section-head">
            <div>
                <span class="evt-label"><?php esc_html_e( 'Agenda', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Próximos Eventos', 'custom-sistemas' ); ?></h2>
            </div>
            <div class="evt-filtros" id="evtFiltros">
                <button class="evt-filtro ativo" data-filtro="todos" onclick="evtFiltrar(this)"><?php esc_html_e( 'Todos', 'custom-sistemas' ); ?></button>
                <button class="evt-filtro" data-filtro="online" onclick="evtFiltrar(this)"><?php esc_html_e( 'Online', 'custom-sistemas' ); ?></button>
                <button class="evt-filtro" data-filtro="presencial" onclick="evtFiltrar(this)"><?php esc_html_e( 'Presencial', 'custom-sistemas' ); ?></button>
                <button class="evt-filtro" data-filtro="workshop" onclick="evtFiltrar(this)"><?php esc_html_e( 'Workshop', 'custom-sistemas' ); ?></button>
                <button class="evt-filtro" data-filtro="forum" onclick="evtFiltrar(this)"><?php esc_html_e( 'Fórum', 'custom-sistemas' ); ?></button>
            </div>
        </div>

        <?php
        $proximos_eventos = [
            [
                'data_dia'   => '12',
                'data_mes'   => 'MAR',
                'tipo'       => 'online',
                'tipo_label' => 'Online',
                'tag_label'  => 'Fórum',
                'tag_key'    => 'forum',
                'titulo'     => 'Fórum de Gestão Pública Digital 2025',
                'desc'       => 'Debata as tendências em tecnologia para gestão municipal com especialistas de todo o Brasil. Transparência, IA e modernização em pauta.',
                'hora'       => '14h – 17h',
                'local'      => 'Google Meet — Link enviado por e-mail',
                'vagas'      => '500',
                'vagas_livres' => '142',
                'destaque'   => true,
                'icon'       => 'bi-display',
            ],
            [
                'data_dia'   => '19',
                'data_mes'   => 'MAR',
                'tipo'       => 'presencial',
                'tipo_label' => 'Presencial',
                'tag_label'  => 'Workshop',
                'tag_key'    => 'workshop',
                'titulo'     => 'Workshop Betha: Novidades da Versão 2025',
                'desc'       => 'Conheça de perto as novas funcionalidades do sistema Betha para contabilidade, RH e orçamento. Demonstrações práticas e Q&A ao vivo.',
                'hora'       => '9h – 12h',
                'local'      => 'Sede Custom — Rio de Janeiro, RJ',
                'vagas'      => '80',
                'vagas_livres' => '23',
                'destaque'   => false,
                'icon'       => 'bi-building',
            ],
            [
                'data_dia'   => '26',
                'data_mes'   => 'MAR',
                'tipo'       => 'online',
                'tipo_label' => 'Online',
                'tag_label'  => 'Workshop',
                'tag_key'    => 'workshop',
                'titulo'     => 'Workshop: Nova Lei de Licitações 14.133 na Prática',
                'desc'       => 'Tudo o que sua equipe de compras precisa saber sobre a Nova Lei de Licitações e como o sistema Betha já está adaptado às novas regras.',
                'hora'       => '10h – 12h',
                'local'      => 'Zoom — Acesso gratuito',
                'vagas'      => '300',
                'vagas_livres' => '91',
                'destaque'   => false,
                'icon'       => 'bi-display',
            ],
            [
                'data_dia'   => '08',
                'data_mes'   => 'ABR',
                'tipo'       => 'presencial',
                'tipo_label' => 'Presencial',
                'tag_label'  => 'Fórum',
                'tag_key'    => 'forum',
                'titulo'     => 'Encontro Regional: Municípios do Rio de Janeiro',
                'desc'       => 'Encontro presencial entre gestores públicos e a equipe Custom para troca de experiências, demonstrações de produto e networking entre municípios.',
                'hora'       => '9h – 17h',
                'local'      => 'Hotel Windsor — Barra da Tijuca, RJ',
                'vagas'      => '200',
                'vagas_livres' => '67',
                'destaque'   => false,
                'icon'       => 'bi-building',
            ],
            [
                'data_dia'   => '16',
                'data_mes'   => 'ABR',
                'tipo'       => 'online',
                'tipo_label' => 'Online',
                'tag_label'  => 'Workshop',
                'tag_key'    => 'workshop',
                'titulo'     => 'Webinar: Transparência Pública e LGPD Municipal',
                'desc'       => 'Como garantir o cumprimento da Lei de Transparência e da LGPD ao mesmo tempo? Especialistas e gestores compartilham boas práticas.',
                'hora'       => '15h – 17h',
                'local'      => 'YouTube Live — Transmissão aberta',
                'vagas'      => '1000',
                'vagas_livres' => '388',
                'destaque'   => false,
                'icon'       => 'bi-camera-video',
            ],
            [
                'data_dia'   => '24',
                'data_mes'   => 'ABR',
                'tipo'       => 'presencial',
                'tipo_label' => 'Presencial',
                'tag_label'  => 'Workshop',
                'tag_key'    => 'workshop',
                'titulo'     => 'Workshop Avançado: Betha Contabilidade — PCASP 2025',
                'desc'       => 'Para contadores e analistas experientes. Aprofunde o conhecimento em PCASP, encerramentos e relatórios do Tribunal de Contas.',
                'hora'       => '9h – 13h',
                'local'      => 'Sede Custom — Rio de Janeiro, RJ',
                'vagas'      => '40',
                'vagas_livres' => '12',
                'destaque'   => false,
                'icon'       => 'bi-building',
            ],
        ];
        ?>

        <div class="evt-grid" id="evtGrid">
            <?php foreach ( $proximos_eventos as $evt ) :
                $pct_usado = round( ( ($evt['vagas'] - $evt['vagas_livres']) / $evt['vagas'] ) * 100 );
                $class_destaque = ! empty($evt['destaque']) ? ' evt-card-destaque' : '';
            ?>
            <div class="evt-card<?php echo esc_attr($class_destaque); ?>"
                 data-tipo="<?php echo esc_attr($evt['tipo']); ?>"
                 data-tag="<?php echo esc_attr($evt['tag_key']); ?>">

                <?php if ( ! empty($evt['destaque']) ) : ?>
                <div class="evt-card-badge-destaque">
                    <i class="bi bi-star-fill"></i> <?php esc_html_e( 'Destaque', 'custom-sistemas' ); ?>
                </div>
                <?php endif; ?>

                <div class="evt-card-top">
                    <div class="evt-card-date">
                        <span class="evt-date-day"><?php echo esc_html($evt['data_dia']); ?></span>
                        <span class="evt-date-month"><?php echo esc_html($evt['data_mes']); ?></span>
                    </div>
                    <div class="evt-card-tags">
                        <span class="evt-tag-tipo <?php echo $evt['tipo'] === 'online' ? 'evt-tag-online' : 'evt-tag-presencial'; ?>">
                            <i class="bi <?php echo esc_attr($evt['icon']); ?>"></i>
                            <?php echo esc_html($evt['tipo_label']); ?>
                        </span>
                        <span class="evt-tag-categoria"><?php echo esc_html($evt['tag_label']); ?></span>
                    </div>
                </div>

                <div class="evt-card-body">
                    <h3><?php echo esc_html($evt['titulo']); ?></h3>
                    <p><?php echo esc_html($evt['desc']); ?></p>
                </div>

                <div class="evt-card-meta">
                    <div class="evt-meta-item">
                        <i class="bi bi-clock"></i>
                        <span><?php echo esc_html($evt['hora']); ?></span>
                    </div>
                    <div class="evt-meta-item">
                        <i class="bi bi-geo-alt"></i>
                        <span><?php echo esc_html($evt['local']); ?></span>
                    </div>
                </div>

                <div class="evt-card-vagas">
                    <div class="evt-vagas-info">
                        <span><?php esc_html_e( 'Vagas disponíveis', 'custom-sistemas' ); ?></span>
                        <strong><?php echo esc_html($evt['vagas_livres']); ?> / <?php echo esc_html($evt['vagas']); ?></strong>
                    </div>
                    <div class="evt-vagas-bar">
                        <div class="evt-vagas-fill" style="width: <?php echo esc_attr($pct_usado); ?>%"></div>
                    </div>
                </div>

                <a href="#inscricao" class="evt-btn-inscrever" onclick="evtAbrirForm('<?php echo esc_attr($evt['titulo']); ?>')">
                    <?php esc_html_e( 'Inscrever-se gratuitamente', 'custom-sistemas' ); ?>
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     INSCRIÇÃO
══════════════════════════════════════════ -->
<section class="evt-inscricao" id="inscricao">
    <div class="evt-container">
        <div class="evt-inscricao-layout">

            <div class="evt-inscricao-info">
                <span class="evt-label"><?php esc_html_e( 'Participação gratuita', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Garanta sua vaga agora', 'custom-sistemas' ); ?></h2>
                <p><?php esc_html_e( 'Todos os nossos eventos são gratuitos para gestores públicos e equipes municipais. Preencha o formulário e confirme sua participação.', 'custom-sistemas' ); ?></p>

                <div class="evt-inscricao-perks">
                    <div class="evt-perk">
                        <div class="evt-perk-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div>
                            <strong><?php esc_html_e( 'Certificado de participação', 'custom-sistemas' ); ?></strong>
                            <span><?php esc_html_e( 'Emitido ao final de cada evento', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                    <div class="evt-perk">
                        <div class="evt-perk-icon"><i class="bi bi-camera-video-fill"></i></div>
                        <div>
                            <strong><?php esc_html_e( 'Gravação disponível', 'custom-sistemas' ); ?></strong>
                            <span><?php esc_html_e( 'Acesso por 30 dias após o evento', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                    <div class="evt-perk">
                        <div class="evt-perk-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                        <div>
                            <strong><?php esc_html_e( 'Material exclusivo', 'custom-sistemas' ); ?></strong>
                            <span><?php esc_html_e( 'Slides e PDFs enviados por e-mail', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                    <div class="evt-perk">
                        <div class="evt-perk-icon"><i class="bi bi-people-fill"></i></div>
                        <div>
                            <strong><?php esc_html_e( 'Networking qualificado', 'custom-sistemas' ); ?></strong>
                            <span><?php esc_html_e( 'Conecte-se com outros gestores públicos', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="evt-form-card">
                <div class="evt-form-head">
                    <h3 id="evtFormTitulo"><?php esc_html_e( 'Solicitar inscrição', 'custom-sistemas' ); ?></h3>
                    <p><?php esc_html_e( 'Preencha abaixo e confirmaremos sua vaga por e-mail em até 24h.', 'custom-sistemas' ); ?></p>
                </div>
                <form id="evtForm" class="evt-form">
                    <input type="hidden" id="evt-evento-nome" name="evento" value="">

                    <div class="evt-form-row">
                        <div class="evt-form-group">
                            <label for="evt-nome"><?php esc_html_e( 'Nome completo', 'custom-sistemas' ); ?></label>
                            <input type="text" id="evt-nome" name="nome" required placeholder="<?php esc_attr_e( 'Seu nome', 'custom-sistemas' ); ?>">
                        </div>
                        <div class="evt-form-group">
                            <label for="evt-cargo"><?php esc_html_e( 'Cargo', 'custom-sistemas' ); ?></label>
                            <input type="text" id="evt-cargo" name="cargo" required placeholder="<?php esc_attr_e( 'Ex: Contador', 'custom-sistemas' ); ?>">
                        </div>
                    </div>

                    <div class="evt-form-group">
                        <label for="evt-municipio"><?php esc_html_e( 'Município / Órgão', 'custom-sistemas' ); ?></label>
                        <input type="text" id="evt-municipio" name="municipio" required placeholder="<?php esc_attr_e( 'Nome do município ou órgão público', 'custom-sistemas' ); ?>">
                    </div>

                    <div class="evt-form-row">
                        <div class="evt-form-group">
                            <label for="evt-email"><?php esc_html_e( 'E-mail', 'custom-sistemas' ); ?></label>
                            <input type="email" id="evt-email" name="email" required placeholder="<?php esc_attr_e( 'seu@email.com', 'custom-sistemas' ); ?>">
                        </div>
                        <div class="evt-form-group">
                            <label for="evt-telefone"><?php esc_html_e( 'WhatsApp / Telefone', 'custom-sistemas' ); ?></label>
                            <input type="tel" id="evt-telefone" name="telefone" placeholder="<?php esc_attr_e( '(00) 00000-0000', 'custom-sistemas' ); ?>">
                        </div>
                    </div>

                    <div class="evt-form-group">
                        <label for="evt-evento-select"><?php esc_html_e( 'Evento de interesse', 'custom-sistemas' ); ?></label>
                        <select id="evt-evento-select" name="evento_select" required>
                            <option value=""><?php esc_html_e( 'Selecione o evento', 'custom-sistemas' ); ?></option>
                            <option value="forum-gestao"><?php esc_html_e( '12 Mar — Fórum de Gestão Pública Digital', 'custom-sistemas' ); ?></option>
                            <option value="workshop-betha"><?php esc_html_e( '19 Mar — Workshop Betha: Novidades 2025', 'custom-sistemas' ); ?></option>
                            <option value="workshop-licitacoes"><?php esc_html_e( '26 Mar — Workshop: Nova Lei de Licitações', 'custom-sistemas' ); ?></option>
                            <option value="encontro-rj"><?php esc_html_e( '08 Abr — Encontro Regional: Municípios RJ', 'custom-sistemas' ); ?></option>
                            <option value="webinar-lgpd"><?php esc_html_e( '16 Abr — Webinar: Transparência e LGPD', 'custom-sistemas' ); ?></option>
                            <option value="workshop-pcasp"><?php esc_html_e( '24 Abr — Workshop Avançado: PCASP 2025', 'custom-sistemas' ); ?></option>
                        </select>
                    </div>

                    <button type="submit" class="evt-btn-submit">
                        <i class="bi bi-check2-circle"></i>
                        <?php esc_html_e( 'Confirmar inscrição gratuita', 'custom-sistemas' ); ?>
                    </button>
                </form>

                <div class="evt-form-success" id="evtSuccess" style="display:none;">
                    <div class="evt-success-icon">🎉</div>
                    <h4><?php esc_html_e( 'Inscrição confirmada!', 'custom-sistemas' ); ?></h4>
                    <p><?php esc_html_e( 'Você receberá a confirmação e todos os detalhes no seu e-mail em até', 'custom-sistemas' ); ?> <strong><?php esc_html_e( '24 horas.', 'custom-sistemas' ); ?></strong></p>
                    <small><?php esc_html_e( 'Confira também a pasta de spam.', 'custom-sistemas' ); ?></small>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     EVENTOS PASSADOS
══════════════════════════════════════════ -->
<section class="evt-passados" id="passados">
    <div class="evt-container">

        <div class="evt-section-head">
            <div>
                <span class="evt-label"><?php esc_html_e( 'Histórico', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Eventos Anteriores', 'custom-sistemas' ); ?></h2>
                <p><?php esc_html_e( 'Reviva os melhores momentos e acesse as gravações disponíveis.', 'custom-sistemas' ); ?></p>
            </div>
        </div>

        <?php
        $passados_eventos = [
            [
                'data'   => 'Fev 2025',
                'titulo' => 'Fórum Municipal de Inovação Pública',
                'tipo'   => 'Online',
                'part'   => '1.200',
                'gravacao' => true,
            ],
            [
                'data'   => 'Jan 2025',
                'titulo' => 'Workshop Betha: Encerramento de Exercício 2024',
                'tipo'   => 'Online',
                'part'   => '830',
                'gravacao' => true,
            ],
            [
                'data'   => 'Nov 2024',
                'titulo' => 'Conferência Custom de Gestão Pública',
                'tipo'   => 'Presencial',
                'part'   => '450',
                'gravacao' => false,
            ],
            [
                'data'   => 'Out 2024',
                'titulo' => 'Webinar: Compliance e Controle Interno Municipal',
                'tipo'   => 'Online',
                'part'   => '620',
                'gravacao' => true,
            ],
            [
                'data'   => 'Set 2024',
                'titulo' => 'Workshop: Folha de Pagamento e eSocial',
                'tipo'   => 'Online',
                'part'   => '540',
                'gravacao' => true,
            ],
            [
                'data'   => 'Ago 2024',
                'titulo' => 'Encontro Regional: Municípios do Nordeste',
                'tipo'   => 'Presencial',
                'part'   => '280',
                'gravacao' => false,
            ],
        ];
        ?>

        <div class="evt-passados-grid">
            <?php foreach ( $passados_eventos as $p ) : ?>
            <div class="evt-passado-card">
                <div class="evt-passado-top">
                    <span class="evt-passado-data"><?php echo esc_html($p['data']); ?></span>
                    <span class="evt-passado-tipo"><?php echo esc_html($p['tipo']); ?></span>
                </div>
                <h4><?php echo esc_html($p['titulo']); ?></h4>
                <div class="evt-passado-meta">
                    <span><i class="bi bi-people"></i> <?php echo esc_html($p['part']); ?> <?php esc_html_e( 'participantes', 'custom-sistemas' ); ?></span>
                    <?php if ( $p['gravacao'] ) : ?>
                    <a href="#" class="evt-passado-assistir">
                        <i class="bi bi-play-circle-fill"></i>
                        <?php esc_html_e( 'Assistir', 'custom-sistemas' ); ?>
                    </a>
                    <?php else : ?>
                    <span class="evt-passado-sem-grav"><i class="bi bi-camera-video-off"></i> <?php esc_html_e( 'Sem gravação', 'custom-sistemas' ); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════ -->
<section class="evt-cta-final">
    <div class="evt-cta-blob"></div>
    <div class="evt-container">
        <div class="evt-cta-inner">
            <span class="evt-cta-emoji">🏙️</span>
            <h2><?php esc_html_e( 'Quer propor um evento ou', 'custom-sistemas' ); ?> <em><?php esc_html_e( 'receber a Custom no seu município?', 'custom-sistemas' ); ?></em></h2>
            <p><?php esc_html_e( 'Levamos workshops e treinamentos diretamente para sua equipe, adaptados à realidade do seu órgão. Fale conosco.', 'custom-sistemas' ); ?></p>
            <div class="evt-cta-acoes">
                <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="evt-btn-primary">
                    <?php esc_html_e( 'Falar com nossa equipe', 'custom-sistemas' ); ?>
                </a>
                <a href="tel:08004005200" class="evt-btn-ghost-light">
                    <i class="bi bi-telephone-fill"></i>
                    0800-400-5200
                </a>
            </div>
        </div>
    </div>
</section>

</div><!-- .evt-page -->

<script>
function evtFiltrar(btn) {
    document.querySelectorAll('.evt-filtro').forEach(b => b.classList.remove('ativo'));
    btn.classList.add('ativo');
    const filtro = btn.dataset.filtro;
    document.querySelectorAll('.evt-card').forEach(card => {
        if (filtro === 'todos') {
            card.style.display = '';
        } else {
            const tipo = card.dataset.tipo;
            const tag  = card.dataset.tag;
            card.style.display = (tipo === filtro || tag === filtro) ? '' : 'none';
        }
    });
}

function evtAbrirForm(nome) {
    document.getElementById('evt-evento-nome').value = nome;
    const sel = document.getElementById('evt-evento-select');
    if (sel) {
        const opt = Array.from(sel.options).find(o => o.text.toLowerCase().includes(nome.substring(0, 20).toLowerCase()));
        if (opt) sel.value = opt.value;
    }
    const sec = document.getElementById('inscricao');
    if (sec) { setTimeout(() => sec.scrollIntoView({ behavior: 'smooth' }), 100); }
}

document.getElementById('evtForm').addEventListener('submit', function(e) {
    e.preventDefault();
    this.style.display = 'none';
    document.getElementById('evtSuccess').style.display = 'flex';
});
</script>

<?php get_footer(); ?>
