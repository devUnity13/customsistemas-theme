<?php
/**
 * Template Name: Contato
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="ctt-page">

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="ctt-hero">
    <div class="ctt-hero-bg">
        <div class="ctt-hero-blob ctt-blob-1"></div>
        <div class="ctt-hero-blob ctt-blob-2"></div>
        <div class="ctt-hero-grid-lines"></div>
    </div>
    <div class="ctt-hero-inner">
        <div class="ctt-hero-eyebrow">
            <i class="bi bi-headset"></i>
            <span><?php esc_html_e( 'Estamos prontos para te atender', 'custom-sistemas' ); ?></span>
        </div>
        <h1 class="ctt-hero-title">
            <?php esc_html_e( 'Fale com a ', 'custom-sistemas' ); ?><em><?php esc_html_e( 'Custom', 'custom-sistemas' ); ?></em>
        </h1>
        <p class="ctt-hero-subtitle">
            <?php esc_html_e( 'Seja para conhecer nossas soluções, resolver uma dúvida ou iniciar uma parceria — estamos aqui. Escolha o canal que preferir.', 'custom-sistemas' ); ?>
        </p>
        <div class="ctt-hero-badges">
            <div class="ctt-badge">
                <i class="bi bi-clock-fill"></i>
                <span><?php esc_html_e( 'Resposta em até 24h', 'custom-sistemas' ); ?></span>
            </div>
            <div class="ctt-badge">
                <i class="bi bi-shield-fill-check"></i>
                <span><?php esc_html_e( 'Atendimento especializado', 'custom-sistemas' ); ?></span>
            </div>
            <div class="ctt-badge">
                <i class="bi bi-telephone-fill"></i>
                <span><?php esc_html_e( 'Suporte técnico 24/7', 'custom-sistemas' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     CANAIS PRINCIPAIS
══════════════════════════════════════════ -->
<section class="ctt-canais">
    <div class="ctt-container">
        <div class="ctt-canais-grid">

            <!-- WhatsApp -->
            <a href="https://wa.me/552133999999" target="_blank" rel="noopener" class="ctt-canal-card ctt-canal-whatsapp">
                <div class="ctt-canal-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="ctt-canal-content">
                    <span class="ctt-canal-label"><?php esc_html_e( 'WhatsApp', 'custom-sistemas' ); ?></span>
                    <strong>(21) 3399-9999</strong>
                    <p><?php esc_html_e( 'Atendimento rápido pelo WhatsApp. Segunda a sexta, das 8h às 18h.', 'custom-sistemas' ); ?></p>
                </div>
                <div class="ctt-canal-arrow">
                    <i class="bi bi-arrow-up-right"></i>
                </div>
            </a>

            <!-- Telefone -->
            <a href="tel:08004005200" class="ctt-canal-card ctt-canal-telefone">
                <div class="ctt-canal-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="ctt-canal-content">
                    <span class="ctt-canal-label"><?php esc_html_e( 'Ligue grátis', 'custom-sistemas' ); ?></span>
                    <strong>0800-400-5200</strong>
                    <p><?php esc_html_e( 'Chamada gratuita de qualquer telefone. Segunda a sexta, das 8h às 18h.', 'custom-sistemas' ); ?></p>
                </div>
                <div class="ctt-canal-arrow">
                    <i class="bi bi-arrow-up-right"></i>
                </div>
            </a>

            <!-- E-mail -->
            <a href="mailto:contato@customsistemas.com.br" class="ctt-canal-card ctt-canal-email">
                <div class="ctt-canal-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="ctt-canal-content">
                    <span class="ctt-canal-label"><?php esc_html_e( 'E-mail', 'custom-sistemas' ); ?></span>
                    <strong>contato@customsistemas.com.br</strong>
                    <p><?php esc_html_e( 'Envie sua mensagem. Respondemos em até 1 dia útil.', 'custom-sistemas' ); ?></p>
                </div>
                <div class="ctt-canal-arrow">
                    <i class="bi bi-arrow-up-right"></i>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     DEPARTAMENTOS
══════════════════════════════════════════ -->
<section class="ctt-departamentos">
    <div class="ctt-container">

        <div class="ctt-section-head">
            <span class="ctt-label"><?php esc_html_e( 'Fale com quem pode te ajudar', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Contatos por departamento', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Direcione seu contato para o setor certo e tenha uma resposta mais rápida e precisa.', 'custom-sistemas' ); ?></p>
        </div>

        <?php
        $departamentos = [
            [
                'icon'    => 'bi-bag-check-fill',
                'cor'     => 'ctt-dept-azul',
                'titulo'  => 'Comercial & Vendas',
                'desc'    => 'Conheça nossas soluções, solicite uma demonstração ou tire dúvidas sobre preços e contratos.',
                'email'   => 'vendas@customsistemas.com.br',
                'tel'     => '(21) 3399-0001',
                'horario' => 'Seg–Sex  8h–18h',
            ],
            [
                'icon'    => 'bi-headset',
                'cor'     => 'ctt-dept-verde',
                'titulo'  => 'Suporte Técnico',
                'desc'    => 'Problemas com o sistema? Nossa equipe especializada está de plantão para resolver.',
                'email'   => 'suporte@customsistemas.com.br',
                'tel'     => '0800-400-5200',
                'horario' => '24h por dia, 7 dias',
            ],
            [
                'icon'    => 'bi-mortarboard-fill',
                'cor'     => 'ctt-dept-laranja',
                'titulo'  => 'Treinamentos',
                'desc'    => 'Agende treinamentos presenciais ou online para sua equipe municipal.',
                'email'   => 'treinamentos@customsistemas.com.br',
                'tel'     => '(21) 3399-0003',
                'horario' => 'Seg–Sex  9h–17h',
            ],
            [
                'icon'    => 'bi-people-fill',
                'cor'     => 'ctt-dept-roxo',
                'titulo'  => 'Recursos Humanos',
                'desc'    => 'Informações sobre vagas, processo seletivo e cultura da empresa.',
                'email'   => 'rh@customsistemas.com.br',
                'tel'     => '(21) 3399-0004',
                'horario' => 'Seg–Sex  9h–17h',
            ],
            [
                'icon'    => 'bi-megaphone-fill',
                'cor'     => 'ctt-dept-rosa',
                'titulo'  => 'Imprensa & Comunicação',
                'desc'    => 'Para jornalistas, parceiros de mídia e solicitações de entrevistas.',
                'email'   => 'imprensa@customsistemas.com.br',
                'tel'     => '(21) 3399-0005',
                'horario' => 'Seg–Sex  9h–17h',
            ],
            [
                'icon'    => 'bi-building-fill',
                'cor'     => 'ctt-dept-teal',
                'titulo'  => 'Parcerias & Institucional',
                'desc'    => 'Propostas de parceria, integrações técnicas e acordos de cooperação.',
                'email'   => 'parcerias@customsistemas.com.br',
                'tel'     => '(21) 3399-0006',
                'horario' => 'Seg–Sex  8h–17h',
            ],
        ];
        ?>

        <div class="ctt-dept-grid">
            <?php foreach ( $departamentos as $dept ) : ?>
            <div class="ctt-dept-card <?php echo esc_attr($dept['cor']); ?>">
                <div class="ctt-dept-icon-wrap">
                    <i class="bi <?php echo esc_attr($dept['icon']); ?>"></i>
                </div>
                <div class="ctt-dept-body">
                    <h3><?php echo esc_html($dept['titulo']); ?></h3>
                    <p><?php echo esc_html($dept['desc']); ?></p>
                </div>
                <div class="ctt-dept-contatos">
                    <a href="mailto:<?php echo esc_attr($dept['email']); ?>" class="ctt-dept-link">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo esc_html($dept['email']); ?></span>
                    </a>
                    <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9]/', '', $dept['tel']) ); ?>" class="ctt-dept-link">
                        <i class="bi bi-telephone"></i>
                        <span><?php echo esc_html($dept['tel']); ?></span>
                    </a>
                    <div class="ctt-dept-horario">
                        <i class="bi bi-clock"></i>
                        <span><?php echo esc_html($dept['horario']); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     LOCALIZAÇÃO
══════════════════════════════════════════ -->
<section class="ctt-localizacao">
    <div class="ctt-container">
        <div class="ctt-loc-layout">

            <div class="ctt-loc-info">
                <span class="ctt-label"><?php esc_html_e( 'Nossa sede', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Onde estamos', 'custom-sistemas' ); ?></h2>
                <p><?php esc_html_e( 'Visite-nos pessoalmente ou envie correspondências para nossa sede no Rio de Janeiro.', 'custom-sistemas' ); ?></p>

                <div class="ctt-loc-dados">
                    <div class="ctt-loc-item">
                        <div class="ctt-loc-item-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <strong><?php esc_html_e( 'Endereço', 'custom-sistemas' ); ?></strong>
                            <span>Av. das Américas, 3434 — Sala 901<br>Barra da Tijuca — Rio de Janeiro, RJ<br>CEP: 22640-102</span>
                        </div>
                    </div>

                    <div class="ctt-loc-item">
                        <div class="ctt-loc-item-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <strong><?php esc_html_e( 'Horário de funcionamento', 'custom-sistemas' ); ?></strong>
                            <span>
                                <?php esc_html_e( 'Segunda a Sexta:', 'custom-sistemas' ); ?> 8h – 18h<br>
                                <?php esc_html_e( 'Sábado:', 'custom-sistemas' ); ?> 9h – 13h<br>
                                <?php esc_html_e( 'Suporte técnico:', 'custom-sistemas' ); ?> 24h / 7 dias
                            </span>
                        </div>
                    </div>

                    <div class="ctt-loc-item">
                        <div class="ctt-loc-item-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <strong><?php esc_html_e( 'Telefones', 'custom-sistemas' ); ?></strong>
                            <span>
                                <?php esc_html_e( 'Geral:', 'custom-sistemas' ); ?> <a href="tel:02133999999">(21) 3399-9999</a><br>
                                <?php esc_html_e( 'Suporte:', 'custom-sistemas' ); ?> <a href="tel:08004005200">0800-400-5200</a>
                            </span>
                        </div>
                    </div>

                    <div class="ctt-loc-item">
                        <div class="ctt-loc-item-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <strong><?php esc_html_e( 'E-mail geral', 'custom-sistemas' ); ?></strong>
                            <span><a href="mailto:contato@customsistemas.com.br">contato@customsistemas.com.br</a></span>
                        </div>
                    </div>
                </div>

                <div class="ctt-redes">
                    <span><?php esc_html_e( 'Redes sociais', 'custom-sistemas' ); ?></span>
                    <div class="ctt-redes-links">
                        <a href="#" class="ctt-rede" aria-label="LinkedIn" title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="ctt-rede" aria-label="Instagram" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="ctt-rede" aria-label="YouTube" title="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="#" class="ctt-rede" aria-label="Facebook" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="ctt-mapa-wrap">
                <div class="ctt-mapa-card">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0789348975054!2d-43.36720852382813!3d-22.998840979215413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd9665e3c8db5%3A0x27b2d60440ba9d02!2sAv.%20das%20Am%C3%A9ricas%2C%203434%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1711200000000!5m2!1spt-BR!2sbr"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="<?php esc_attr_e( 'Localização Custom Sistemas', 'custom-sistemas' ); ?>">
                    </iframe>
                    <a href="https://goo.gl/maps/exemplo" target="_blank" rel="noopener" class="ctt-mapa-abrir">
                        <i class="bi bi-box-arrow-up-right"></i>
                        <?php esc_html_e( 'Abrir no Google Maps', 'custom-sistemas' ); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     REGIONAL
══════════════════════════════════════════ -->
<section class="ctt-regional">
    <div class="ctt-container">
        <div class="ctt-section-head">
            <span class="ctt-label"><?php esc_html_e( 'Presença nacional', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Escritórios regionais', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Além da sede no Rio de Janeiro, contamos com representantes regionais em todo o Brasil.', 'custom-sistemas' ); ?></p>
        </div>

        <?php
        $regionais = [
            [
                'cidade'  => 'São Paulo, SP',
                'bairro'  => 'Paulista · Faria Lima',
                'tel'     => '(11) 3399-0010',
                'email'   => 'sp@customsistemas.com.br',
                'icon'    => 'bi-buildings-fill',
            ],
            [
                'cidade'  => 'Belo Horizonte, MG',
                'bairro'  => 'Savassi',
                'tel'     => '(31) 3399-0020',
                'email'   => 'mg@customsistemas.com.br',
                'icon'    => 'bi-buildings-fill',
            ],
            [
                'cidade'  => 'Salvador, BA',
                'bairro'  => 'Pituba',
                'tel'     => '(71) 3399-0030',
                'email'   => 'ba@customsistemas.com.br',
                'icon'    => 'bi-buildings-fill',
            ],
            [
                'cidade'  => 'Curitiba, PR',
                'bairro'  => 'Batel',
                'tel'     => '(41) 3399-0040',
                'email'   => 'pr@customsistemas.com.br',
                'icon'    => 'bi-buildings-fill',
            ],
        ];
        ?>

        <div class="ctt-regional-grid">
            <?php foreach ( $regionais as $reg ) : ?>
            <div class="ctt-regional-card">
                <div class="ctt-regional-icon">
                    <i class="bi <?php echo esc_attr($reg['icon']); ?>"></i>
                </div>
                <div class="ctt-regional-body">
                    <h4><?php echo esc_html($reg['cidade']); ?></h4>
                    <span class="ctt-regional-bairro"><?php echo esc_html($reg['bairro']); ?></span>
                    <div class="ctt-regional-links">
                        <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9]/', '', $reg['tel']) ); ?>">
                            <i class="bi bi-telephone"></i> <?php echo esc_html($reg['tel']); ?>
                        </a>
                        <a href="mailto:<?php echo esc_attr($reg['email']); ?>">
                            <i class="bi bi-envelope"></i> <?php echo esc_html($reg['email']); ?>
                        </a>
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
<section class="ctt-cta-final">
    <div class="ctt-cta-blob"></div>
    <div class="ctt-container">
        <div class="ctt-cta-inner">
            <span class="ctt-cta-icon"><i class="bi bi-chat-dots-fill"></i></span>
            <h2><?php esc_html_e( 'Ainda tem dúvidas?', 'custom-sistemas' ); ?> <em><?php esc_html_e( 'Chame pelo WhatsApp.', 'custom-sistemas' ); ?></em></h2>
            <p><?php esc_html_e( 'Nossa equipe responde em minutos. É rápido, direto e sem burocracia.', 'custom-sistemas' ); ?></p>
            <div class="ctt-cta-acoes">
                <a href="https://wa.me/552133999999" target="_blank" rel="noopener" class="ctt-btn-whatsapp">
                    <i class="bi bi-whatsapp"></i>
                    <?php esc_html_e( 'Abrir WhatsApp agora', 'custom-sistemas' ); ?>
                </a>
                <a href="tel:08004005200" class="ctt-btn-ghost-light">
                    <i class="bi bi-telephone-fill"></i>
                    0800-400-5200
                </a>
            </div>
        </div>
    </div>
</section>

</div><!-- .ctt-page -->

<?php get_footer(); ?>
