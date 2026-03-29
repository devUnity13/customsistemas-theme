<?php
/**
 * Template Name: Treinamentos
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="cap-page">

<!-- ══════════════════════════════════════════
     HERO — Humanizado e acolhedor
══════════════════════════════════════════ -->
<section class="cap-hero">
    <div class="cap-hero-shapes">
        <div class="cap-shape cap-shape-1"></div>
        <div class="cap-shape cap-shape-2"></div>
        <div class="cap-shape cap-shape-3"></div>
    </div>
    <div class="cap-hero-inner">
        <div class="cap-hero-eyebrow">
            <span class="cap-dot"></span>
            <span>Central de Capacitação · Betha Sistemas</span>
        </div>
        <h1 class="cap-hero-title">
            A dúvida que surgiu<br>
            agora tem <em>resposta aqui.</em>
        </h1>
        <p class="cap-hero-subtitle">
            Vídeos práticos, organizados por área, para ajudar o servidor público a resolver o dia a dia no sistema — sem precisar esperar o suporte. E quando precisar de mais, agende um treinamento presencial com nossa equipe.
        </p>
        <div class="cap-hero-ctas">
            <a href="#videos" class="cap-btn-primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                Assistir vídeos agora
            </a>
            <a href="#agendar" class="cap-btn-ghost">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                Agendar treinamento
            </a>
        </div>
        <div class="cap-hero-pills">
            <span>📋 Contabilidade</span>
            <span>💰 Tributos</span>
            <span>👥 RH & Folha</span>
            <span>🏛️ Orçamento</span>
            <span>🛒 Compras</span>
            <span>🏗️ Patrimônio</span>
        </div>
    </div>
    <div class="cap-hero-visual">
        <div class="cap-player-preview">
            <div class="cap-player-screen">
                <div class="cap-player-play">
                    <svg viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
                </div>
                <div class="cap-player-bar">
                    <div class="cap-player-progress"></div>
                </div>
                <div class="cap-player-info">
                    <span class="cap-player-tag">Contabilidade</span>
                    <p>Como fazer o encerramento mensal no Betha</p>
                </div>
            </div>
            <div class="cap-player-card cap-card-float-1">
                <span>✅</span> Folha de Março fechada
            </div>
            <div class="cap-player-card cap-card-float-2">
                <span>🎯</span> 847 servidores capacitados
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     TRILHAS — Como funciona
══════════════════════════════════════════ -->
<section class="cap-trilhas" id="trilhas">
    <div class="cap-container">
        <div class="cap-section-label">Como está organizado</div>
        <div class="cap-trilhas-header">
            <h2>Escolha sua <em>trilha</em> e comece</h2>
            <p>Cada área tem sua coleção de vídeos. Você escolhe o que precisa, assiste quantas vezes quiser, e ainda pode agendar um treinamento ao vivo se preferir.</p>
        </div>
        <div class="cap-trilhas-grid">
            <?php
            $trilhas = [
                [
                    'id'     => 'contabilidade',
                    'emoji'  => '📋',
                    'cor'    => 'trilha-verde',
                    'titulo' => 'Contabilidade',
                    'desc'   => 'PCASP, encerramentos, lançamentos contábeis e conciliações no Betha.',
                    'videos' => 14,
                    'temas'  => ['Encerramento mensal', 'PCASP na prática', 'Conciliações', 'Balancetes'],
                ],
                [
                    'id'     => 'tributos',
                    'emoji'  => '💰',
                    'cor'    => 'trilha-laranja',
                    'titulo' => 'Tributos',
                    'desc'   => 'IPTU, ISS, taxas, carnês, parcelamentos e execução fiscal.',
                    'videos' => 11,
                    'temas'  => ['Lançamento de IPTU', 'ISS Eletrônico', 'Parcelamento de débitos', 'Emissão de carnê'],
                ],
                [
                    'id'     => 'rh',
                    'emoji'  => '👥',
                    'cor'    => 'trilha-azul',
                    'titulo' => 'RH & Folha',
                    'desc'   => 'Cadastro de servidores, folha de pagamento, férias e rescisões.',
                    'videos' => 16,
                    'temas'  => ['Folha mensal', 'Férias e 13°', 'Cadastro de cargos', 'Holerite digital'],
                ],
                [
                    'id'     => 'orcamento',
                    'emoji'  => '🏛️',
                    'cor'    => 'trilha-roxo',
                    'titulo' => 'Orçamento',
                    'desc'   => 'PPA, LDO, LOA, empenhos, liquidações e execução orçamentária.',
                    'videos' => 9,
                    'temas'  => ['Criação de LOA', 'Empenho e liquidação', 'Suplementações', 'Relatórios LRF'],
                ],
                [
                    'id'     => 'compras',
                    'emoji'  => '🛒',
                    'cor'    => 'trilha-rosa',
                    'titulo' => 'Compras & Licitações',
                    'desc'   => 'Processos licitatórios, contratos, dispensa e inexigibilidade.',
                    'videos' => 8,
                    'temas'  => ['Pregão eletrônico', 'Dispensa de licitação', 'Gestão de contratos', 'Nova Lei 14.133'],
                ],
                [
                    'id'     => 'patrimonio',
                    'emoji'  => '🏗️',
                    'cor'    => 'trilha-teal',
                    'titulo' => 'Patrimônio',
                    'desc'   => 'Bens móveis, imóveis, depreciação, inventário e baixas.',
                    'videos' => 7,
                    'temas'  => ['Cadastro de bens', 'Depreciação automática', 'Inventário anual', 'Baixa de bens'],
                ],
            ];
            foreach ( $trilhas as $t ) : ?>
            <a href="#videos" class="cap-trilha-card <?php echo esc_attr( $t['cor'] ); ?>" data-trilha="<?php echo esc_attr( $t['id'] ); ?>" onclick="capAbrirTrilha('<?php echo esc_attr( $t['id'] ); ?>'); return false;">
                <div class="cap-trilha-top">
                    <span class="cap-trilha-emoji"><?php echo $t['emoji']; ?></span>
                    <span class="cap-trilha-count"><?php echo $t['videos']; ?> vídeos</span>
                </div>
                <h3><?php echo esc_html( $t['titulo'] ); ?></h3>
                <p><?php echo esc_html( $t['desc'] ); ?></p>
                <div class="cap-trilha-temas">
                    <?php foreach ( array_slice( $t['temas'], 0, 2 ) as $tema ) : ?>
                        <span><?php echo esc_html( $tema ); ?></span>
                    <?php endforeach; ?>
                    <?php if ( count( $t['temas'] ) > 2 ) : ?>
                        <span>+<?php echo count( $t['temas'] ) - 2; ?> mais</span>
                    <?php endif; ?>
                </div>
                <div class="cap-trilha-cta">
                    Ver vídeos
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     BIBLIOTECA DE VÍDEOS
══════════════════════════════════════════ -->
<section class="cap-videos" id="videos">
    <div class="cap-container">
        <div class="cap-videos-header">
            <div>
                <div class="cap-section-label">Biblioteca de vídeos</div>
                <h2>Encontre o que você precisa</h2>
            </div>
            <div class="cap-search-wrap">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <input type="text" id="capBusca" placeholder="Buscar por assunto..." oninput="capBuscar(this.value)">
            </div>
        </div>

        <!-- Filtros por trilha -->
        <div class="cap-filtros" id="capFiltros">
            <button class="cap-filtro ativo" data-filtro="todos" onclick="capFiltrar(this)">Todos os vídeos</button>
            <button class="cap-filtro" data-filtro="contabilidade" onclick="capFiltrar(this)">📋 Contabilidade</button>
            <button class="cap-filtro" data-filtro="tributos" onclick="capFiltrar(this)">💰 Tributos</button>
            <button class="cap-filtro" data-filtro="rh" onclick="capFiltrar(this)">👥 RH & Folha</button>
            <button class="cap-filtro" data-filtro="orcamento" onclick="capFiltrar(this)">🏛️ Orçamento</button>
            <button class="cap-filtro" data-filtro="compras" onclick="capFiltrar(this)">🛒 Compras</button>
            <button class="cap-filtro" data-filtro="patrimonio" onclick="capFiltrar(this)">🏗️ Patrimônio</button>
        </div>

        <!-- Player principal + lista -->
        <div class="cap-videos-layout">

            <!-- Player -->
            <div class="cap-player-wrap">
                <div class="cap-player-embed" id="capPlayerEmbed">
                    <div class="cap-player-placeholder" id="capPlayerPlaceholder">
                        <div class="cap-placeholder-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M10 8l6 4-6 4V8z"/></svg>
                        </div>
                        <p>Selecione um vídeo ao lado para assistir</p>
                        <span>Todos os conteúdos são da Betha Sistemas</span>
                    </div>
                    <iframe id="capIframe" src="" frameborder="0" allowfullscreen style="display:none; width:100%; height:100%; border-radius:12px;"></iframe>
                </div>
                <div class="cap-player-current" id="capPlayerCurrent" style="display:none;">
                    <div class="cap-current-badge" id="capCurrentBadge"></div>
                    <h3 id="capCurrentTitulo"></h3>
                    <p id="capCurrentDesc"></p>
                    <div class="cap-current-meta">
                        <span id="capCurrentDuracao"></span>
                        <a href="#agendar" class="cap-btn-sm">Agendar treinamento ao vivo</a>
                    </div>
                </div>
            </div>

            <!-- Lista de vídeos -->
            <div class="cap-video-lista" id="capVideoLista">
                <?php
                $videos = [
                    // CONTABILIDADE
                    ['id'=>'V001','trilha'=>'contabilidade','titulo'=>'Como fazer o encerramento mensal no Betha','desc'=>'Passo a passo completo para fechar o mês na contabilidade sem erros.','duracao'=>'18 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'j8SAq2_Jn6w'],
                    ['id'=>'V002','trilha'=>'contabilidade','titulo'=>'Lançamentos contábeis no PCASP — do básico ao avançado','desc'=>'Entenda como o sistema automatiza os lançamentos segundo o PCASP.','duracao'=>'24 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'CONTABILIDADE_02'],
                    ['id'=>'V003','trilha'=>'contabilidade','titulo'=>'Conciliação bancária no Betha Contabilidade','desc'=>'Como conferir saldos e conciliar extratos bancários sem complicação.','duracao'=>'14 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'CONTABILIDADE_03'],
                    ['id'=>'V004','trilha'=>'contabilidade','titulo'=>'Emitindo balancetes e relatórios LRF','desc'=>'Geração dos principais relatórios exigidos pelos tribunais de contas.','duracao'=>'20 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'CONTABILIDADE_04'],
                    // TRIBUTOS
                    ['id'=>'V005','trilha'=>'tributos','titulo'=>'Lançamento de IPTU: configuração e geração de carnês','desc'=>'Como configurar alíquotas, gerar o lançamento anual e emitir carnês.','duracao'=>'22 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'TRIBUTOS_01'],
                    ['id'=>'V006','trilha'=>'tributos','titulo'=>'ISS Eletrônico — nota fiscal de serviço','desc'=>'Configuração do módulo de NFS-e e integração com o portal do contribuinte.','duracao'=>'19 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'TRIBUTOS_02'],
                    ['id'=>'V007','trilha'=>'tributos','titulo'=>'Parcelamento de débitos tributários','desc'=>'Como cadastrar e controlar parcelamentos de IPTU, ISS e outras taxas.','duracao'=>'16 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'TRIBUTOS_03'],
                    ['id'=>'V008','trilha'=>'tributos','titulo'=>'Emissão de CND e situação fiscal do contribuinte','desc'=>'Consulte a situação fiscal e emita certidões diretamente pelo sistema.','duracao'=>'12 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'TRIBUTOS_04'],
                    // RH
                    ['id'=>'V009','trilha'=>'rh','titulo'=>'Fechamento da folha de pagamento mensal','desc'=>'Do lançamento de vantagens ao cálculo final da folha. Tudo no Betha.','duracao'=>'28 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'RH_01'],
                    ['id'=>'V010','trilha'=>'rh','titulo'=>'Férias e 13° salário — processamento no sistema','desc'=>'Como calcular e processar férias e gratificação natalina corretamente.','duracao'=>'21 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'RH_02'],
                    ['id'=>'V011','trilha'=>'rh','titulo'=>'Cadastro de cargos e plano de cargos','desc'=>'Configure estrutura de cargos, referências e progressões funcionais.','duracao'=>'17 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'RH_03'],
                    // ORÇAMENTO
                    ['id'=>'V012','trilha'=>'orcamento','titulo'=>'Elaborando a LOA no Betha Planejamento','desc'=>'Crie a Lei Orçamentária Anual com as dotações e fontes de recurso.','duracao'=>'25 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'ORC_01'],
                    ['id'=>'V013','trilha'=>'orcamento','titulo'=>'Empenho, liquidação e pagamento','desc'=>'O ciclo completo da despesa pública no Betha, do empenho ao pagamento.','duracao'=>'23 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'ORC_02'],
                    ['id'=>'V014','trilha'=>'orcamento','titulo'=>'Suplementações e créditos adicionais','desc'=>'Como incluir créditos adicionais ao orçamento durante o exercício.','duracao'=>'15 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'ORC_03'],
                    // COMPRAS
                    ['id'=>'V015','trilha'=>'compras','titulo'=>'Pregão eletrônico: abertura e condução','desc'=>'Como registrar e conduzir um pregão eletrônico do início ao fim no sistema.','duracao'=>'30 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'COMP_01'],
                    ['id'=>'V016','trilha'=>'compras','titulo'=>'Dispensa e inexigibilidade de licitação','desc'=>'Quando e como registrar dispensas e inexigibilidades conforme a Lei 14.133.','duracao'=>'18 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'COMP_02'],
                    // PATRIMÔNIO
                    ['id'=>'V017','trilha'=>'patrimonio','titulo'=>'Cadastro e tombamento de bens','desc'=>'Como registrar novos bens, gerar plaquetas e organizar o patrimônio.','duracao'=>'16 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'PAT_01'],
                    ['id'=>'V018','trilha'=>'patrimonio','titulo'=>'Depreciação automática no Betha Patrimônio','desc'=>'Configure e rode a depreciação dos bens conforme normas contábeis.','duracao'=>'14 min','thumb'=>'https://img.youtube.com/vi/dQw4w9WgXcQ/mqdefault.jpg','youtube_id'=>'PAT_02'],
                ];

                $trilha_labels = [
                    'contabilidade' => ['label' => 'Contabilidade', 'emoji' => '📋'],
                    'tributos'      => ['label' => 'Tributos',      'emoji' => '💰'],
                    'rh'            => ['label' => 'RH & Folha',    'emoji' => '👥'],
                    'orcamento'     => ['label' => 'Orçamento',     'emoji' => '🏛️'],
                    'compras'       => ['label' => 'Compras',       'emoji' => '🛒'],
                    'patrimonio'    => ['label' => 'Patrimônio',    'emoji' => '🏗️'],
                ];

                foreach ( $videos as $v ) :
                    $lbl = $trilha_labels[$v['trilha']];
                ?>
                <div class="cap-video-item" data-trilha="<?php echo esc_attr( $v['trilha'] ); ?>" data-titulo="<?php echo esc_attr( strtolower( $v['titulo'] ) ); ?>" onclick="capAssistir(<?php echo esc_attr( json_encode($v) ); ?>)">
                    <div class="cap-video-thumb">
                        <div class="cap-video-play-icon">
                            <svg viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span class="cap-video-duracao"><?php echo esc_html( $v['duracao'] ); ?></span>
                    </div>
                    <div class="cap-video-info">
                        <span class="cap-video-trilha-tag trilha-<?php echo esc_attr( $v['trilha'] ); ?>"><?php echo $lbl['emoji'] . ' ' . esc_html( $lbl['label'] ); ?></span>
                        <h4><?php echo esc_html( $v['titulo'] ); ?></h4>
                        <p><?php echo esc_html( $v['desc'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="cap-sem-resultados" id="capSemResultados" style="display:none;">
                    <span>🔍</span>
                    <p>Nenhum vídeo encontrado para essa busca.</p>
                    <small>Tente outras palavras ou <a href="#agendar">agende um treinamento</a> com nossa equipe.</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     AGENDAMENTO DE TREINAMENTOS PRESENCIAIS
══════════════════════════════════════════ -->
<section class="cap-agendar" id="agendar">
    <div class="cap-container">
        <div class="cap-agendar-layout">

            <!-- Info lateral -->
            <div class="cap-agendar-info">
                <div class="cap-section-label">Treinamentos presenciais</div>
                <h2>Prefere aprender <em>ao vivo?</em></h2>
                <p>Às vezes um vídeo não é suficiente. Nossa equipe oferece treinamentos presenciais e ao vivo, conduzidos por instrutores especialistas no Betha Sistemas. Preencha o formulário e nossa equipe entra em contato para confirmar data, formato e instruções.</p>


                <div class="cap-agendar-perks">
                    <div class="cap-perk">
                        <span>🎓</span>
                        <p>Certificado de conclusão ao final</p>
                    </div>
                    <div class="cap-perk">
                        <span>📚</span>
                        <p>Material didático incluso</p>
                    </div>
                    <div class="cap-perk">
                        <span>🎥</span>
                        <p>Gravação por 30 dias (online)</p>
                    </div>
                    <div class="cap-perk">
                        <span>🏙️</span>
                        <p>In-company para grupos de 10+</p>
                    </div>
                </div>
            </div>

            <!-- Formulário de agendamento -->
            <div class="cap-form-card">
                <div class="cap-form-head">
                    <h3>Solicitar agendamento</h3>
                    <p>Nossa equipe retorna em até 1 dia útil para confirmar data e detalhes.</p>
                </div>
                <form id="capForm" class="cap-form">
                    <div class="cap-form-row">
                        <div class="cap-form-group">
                            <label for="cap-nome">Nome completo</label>
                            <input type="text" id="cap-nome" name="nome" required placeholder="Seu nome">
                        </div>
                        <div class="cap-form-group">
                            <label for="cap-cargo">Cargo</label>
                            <input type="text" id="cap-cargo" name="cargo" required placeholder="Ex: Contador">
                        </div>
                    </div>
                    <div class="cap-form-group">
                        <label for="cap-municipio">Município / Órgão</label>
                        <input type="text" id="cap-municipio" name="municipio" required placeholder="Nome do município ou órgão público">
                    </div>
                    <div class="cap-form-row">
                        <div class="cap-form-group">
                            <label for="cap-email">E-mail</label>
                            <input type="email" id="cap-email" name="email" required placeholder="seu@email.com">
                        </div>
                        <div class="cap-form-group">
                            <label for="cap-telefone">WhatsApp / Telefone</label>
                            <input type="tel" id="cap-telefone" name="telefone" required placeholder="(00) 00000-0000">
                        </div>
                    </div>
                    <div class="cap-form-group">
                        <label for="cap-area">Área de interesse</label>
                        <select id="cap-area" name="area" required>
                            <option value="">Selecione a área</option>
                            <option value="contabilidade">📋 Contabilidade</option>
                            <option value="tributos">💰 Tributos</option>
                            <option value="rh">👥 RH & Folha de Pagamento</option>
                            <option value="orcamento">🏛️ Execução Orçamentária</option>
                            <option value="compras">🛒 Compras & Licitações</option>
                            <option value="patrimonio">🏗️ Patrimônio</option>
                            <option value="varios">🎯 Vários módulos (in-company)</option>
                        </select>
                    </div>
                    <div class="cap-form-group">
                        <label for="cap-formato">Formato preferido</label>
                        <select id="cap-formato" name="formato">
                            <option value="">Selecione</option>
                            <option value="online">Online ao vivo (Zoom / Meet)</option>
                            <option value="presencial">Presencial — Sede RJ</option>
                            <option value="incompany">In-company (no meu município)</option>
                        </select>
                    </div>
                    <div class="cap-form-group">
                        <label for="cap-obs">Alguma observação?</label>
                        <textarea id="cap-obs" name="obs" rows="3" placeholder="Número de participantes, data preferida, dúvidas específicas..."></textarea>
                    </div>
                    <button type="submit" class="cap-btn-submit">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Solicitar agendamento
                    </button>
                </form>
                <div class="cap-form-success" id="capSuccess" style="display:none;">
                    <div class="cap-success-icon">✅</div>
                    <h4>Pedido recebido!</h4>
                    <p>Nossa equipe vai entrar em contato em até <strong>1 dia útil</strong> para confirmar data, formato e enviar as instruções de acesso.</p>
                    <small>Enquanto isso, continue explorando os vídeos da biblioteca.</small>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════ -->
<section class="cap-cta-final">
    <div class="cap-cta-blob"></div>
    <div class="cap-container">
        <div class="cap-cta-final-inner">
            <span class="cap-cta-emoji">🏙️</span>
            <h2>Quer um treinamento exclusivo para <em>toda a sua equipe?</em></h2>
            <p>Levamos o treinamento até o seu município, presencialmente, com conteúdo adaptado à realidade do seu órgão.</p>
            <div class="cap-cta-acoes">
                <a href="#agendar" class="cap-btn-primary">Solicitar treinamento in-company</a>
                <a href="tel:08004005200" class="cap-btn-ghost-light">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.07 11.9 19.79 19.79 0 011 3.4 2 2 0 012.96 1.21h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9a16 16 0 006.29 6.29l1.35-1.35a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    0800-400-5200
                </a>
            </div>
        </div>
    </div>
</section>

</div><!-- .cap-page -->

<?php get_footer(); ?>