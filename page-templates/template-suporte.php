<?php
/**
 * Template Name: Suporte Técnico
 * Template Post Type: page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="suporte-section" id="suporte">

    <!-- HERO -->
    <div class="suporte-hero">
        <div class="suporte-hero-orb orb-1"></div>
        <div class="suporte-hero-orb orb-2"></div>
        <div class="suporte-hero-grid"></div>
        <div class="suporte-hero-inner">
            <div class="suporte-hero-badge">
                <i class="bi bi-headset"></i>
                <span><?php esc_html_e( 'Central de Suporte Técnico', 'custom-sistemas' ); ?></span>
            </div>
            <h1 class="suporte-hero-title">
                <?php esc_html_e( 'Estamos aqui para ', 'custom-sistemas' ); ?><em><?php esc_html_e( 'te ajudar', 'custom-sistemas' ); ?></em>
            </h1>
            <p class="suporte-hero-desc">
                <?php esc_html_e( 'Nossa equipe especializada está pronta para resolver suas dúvidas e garantir que os sistemas do seu município funcionem sem interrupções.', 'custom-sistemas' ); ?>
            </p>
            <div class="suporte-hero-status">
                <span class="suporte-status-dot"></span>
                <span><?php esc_html_e( 'Atendimento disponível — Seg a Sex, 08:30h às 17:30h', 'custom-sistemas' ); ?></span>
            </div>
        </div>
    </div>

    <!-- CANAIS DE ATENDIMENTO -->
    <div class="suporte-canais">
        <div class="suporte-canais-inner">
            <div class="suporte-section-header">
                <span class="suporte-label"><?php esc_html_e( 'Fale Conosco', 'custom-sistemas' ); ?></span>
                <h2><?php esc_html_e( 'Escolha o canal de atendimento', 'custom-sistemas' ); ?></h2>
                <p><?php esc_html_e( 'Utilize o meio que for mais conveniente para você.', 'custom-sistemas' ); ?></p>
            </div>
            <div class="suporte-canais-grid">

                <a href="#ticket" class="suporte-canal-card suporte-canal-ticket">
                    <div class="suporte-canal-ribbon"><?php esc_html_e( 'Recomendado', 'custom-sistemas' ); ?></div>
                    <div class="suporte-canal-icon"><i class="bi bi-ticket-detailed"></i></div>
                    <h3><?php esc_html_e( 'Abrir Chamado', 'custom-sistemas' ); ?></h3>
                    <p><?php esc_html_e( 'Registre seu problema com detalhes. Nossa equipe responde com prioridade e acompanha cada etapa da resolução.', 'custom-sistemas' ); ?></p>
                    <div class="suporte-canal-action"><span><?php esc_html_e( 'Abrir ticket agora', 'custom-sistemas' ); ?></span><i class="bi bi-arrow-right"></i></div>
                </a>

                <div class="suporte-canal-card suporte-canal-phone">
                    <div class="suporte-canal-icon"><i class="bi bi-telephone"></i></div>
                    <h3><?php esc_html_e( 'Ligue para o Suporte', 'custom-sistemas' ); ?></h3>
                    <p><?php esc_html_e( 'Prefere falar diretamente com um técnico? Atendimento humano, sem robôs, durante o horário comercial.', 'custom-sistemas' ); ?></p>
                    <div class="suporte-phone-list">
                        <a href="tel:08004005200" class="suporte-phone-item">
                            <div class="suporte-phone-tag"><?php esc_html_e( 'Gratuito', 'custom-sistemas' ); ?></div>
                            <span class="suporte-phone-num">0800-400-5200</span>
                        </a>
                        <a href="tel:02126665200" class="suporte-phone-item">
                            <div class="suporte-phone-tag"><?php esc_html_e( 'Direto', 'custom-sistemas' ); ?></div>
                            <span class="suporte-phone-num">(21) 2666-5200</span>
                        </a>
                    </div>
                </div>

                <a href="mailto:suporte@customsistemas.com.br" class="suporte-canal-card suporte-canal-email">
                    <div class="suporte-canal-icon"><i class="bi bi-envelope-at"></i></div>
                    <h3><?php esc_html_e( 'Envie um E-mail', 'custom-sistemas' ); ?></h3>
                    <p><?php esc_html_e( 'Para dúvidas menos urgentes, nos envie um e-mail com todas as informações necessárias.', 'custom-sistemas' ); ?></p>
                    <div class="suporte-canal-action suporte-email-addr">
                        <span>suporte@customsistemas.com.br</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- RECURSOS ÚTEIS -->
    <div class="suporte-recursos">
        <div class="suporte-recursos-inner">
            <div class="suporte-recursos-grid">
                <a href="<?php echo esc_url( CUSTOM_THEME_URI . '/assets/docs/instrucoes-suporte.pdf' ); ?>" download class="suporte-recurso-card suporte-recurso-pdf">
                    <div class="suporte-recurso-icon-wrap"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                    <div class="suporte-recurso-body">
                        <span class="suporte-recurso-tag">PDF · Download</span>
                        <h4><?php esc_html_e( 'Guia de Como Obter Suporte', 'custom-sistemas' ); ?></h4>
                        <p><?php esc_html_e( 'Passo a passo completo de como abrir chamados, escalar atendimentos e usar nossos canais de suporte.', 'custom-sistemas' ); ?></p>
                    </div>
                    <div class="suporte-recurso-arrow"><i class="bi bi-download"></i></div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="suporte-recurso-card suporte-recurso-remoto">
                    <div class="suporte-recurso-icon-wrap"><i class="bi bi-window-desktop"></i></div>
                    <div class="suporte-recurso-body">
                        <span class="suporte-recurso-tag">Remoto · AnyDesk</span>
                        <h4><?php esc_html_e( 'AnyDesk', 'custom-sistemas' ); ?></h4>
                        <p><?php esc_html_e( 'Baixe o software AnyDesk e conecte-se ao nosso suporte remoto.', 'custom-sistemas' ); ?></p>
                    </div>
                    <div class="suporte-recurso-arrow"><i class="bi bi-arrow-up-right"></i></div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="suporte-recurso-card suporte-recurso-ajuda">
                    <div class="suporte-recurso-icon-wrap"><i class="bi bi-journal-bookmark-fill"></i></div>
                    <div class="suporte-recurso-body">
                        <span class="suporte-recurso-tag">Online · Central</span>
                        <h4><?php esc_html_e( 'Central de Ajuda', 'custom-sistemas' ); ?></h4>
                        <p><?php esc_html_e( 'Acesse nossa base de conhecimento com artigos, tutoriais e respostas para as dúvidas mais frequentes.', 'custom-sistemas' ); ?></p>
                    </div>
                    <div class="suporte-recurso-arrow"><i class="bi bi-arrow-up-right"></i></div>
                </a>
            </div>
        </div>
    </div>

</section>

<!-- ABERTURA DE TICKET -->
<div class="suporte-ticket suporte-ticket--light" id="ticket">
    <div class="suporte-ticket-inner">
        <div class="suporte-ticket-info">
            <span class="suporte-label"><?php esc_html_e( 'Sistema de Chamados', 'custom-sistemas' ); ?></span>
            <h2><?php esc_html_e( 'Abra seu ticket de suporte', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Ao registrar um chamado, você garante rastreabilidade completa do seu atendimento, histórico de interações e acompanhamento em tempo real do status da sua solicitação.', 'custom-sistemas' ); ?></p>
            <ul class="suporte-ticket-benefits">
                <li><i class="bi bi-check-circle-fill"></i><span><?php esc_html_e( 'Número de protocolo gerado automaticamente', 'custom-sistemas' ); ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i><span><?php esc_html_e( 'Acompanhe o status em tempo real', 'custom-sistemas' ); ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i><span><?php esc_html_e( 'Histórico completo de atendimentos', 'custom-sistemas' ); ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i><span><?php esc_html_e( 'Notificações por e-mail a cada atualização', 'custom-sistemas' ); ?></span></li>
            </ul>
            <a href="#" class="btn-custom-primary suporte-ticket-btn" target="_blank" rel="noopener">
                <i class="bi bi-box-arrow-up-right"></i>
                <?php esc_html_e( 'Acessar sistema de chamados', 'custom-sistemas' ); ?>
            </a>
        </div>
        <div class="suporte-ticket-visual">
            <div class="suporte-ticket-mockup">
                <div class="suporte-mockup-header">
                    <div class="suporte-mockup-dots"><span></span><span></span><span></span></div>
                    <span class="suporte-mockup-title"><?php esc_html_e( 'Novo Chamado', 'custom-sistemas' ); ?></span>
                </div>
                <div class="suporte-mockup-body">
                    <div class="suporte-mockup-field">
                        <label><?php esc_html_e( 'Assunto', 'custom-sistemas' ); ?></label>
                        <div class="suporte-mockup-input"><?php esc_html_e( 'Erro ao gerar folha de pagamento', 'custom-sistemas' ); ?></div>
                    </div>
                    <div class="suporte-mockup-field">
                        <label><?php esc_html_e( 'Módulo', 'custom-sistemas' ); ?></label>
                        <div class="suporte-mockup-input suporte-mockup-select">
                            <?php esc_html_e( 'Folha de Pagamento', 'custom-sistemas' ); ?> <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="suporte-mockup-field">
                        <label><?php esc_html_e( 'Prioridade', 'custom-sistemas' ); ?></label>
                        <div class="suporte-mockup-priority">
                            <span class="priority-low"><?php esc_html_e( 'Baixa', 'custom-sistemas' ); ?></span>
                            <span class="priority-med"><?php esc_html_e( 'Média', 'custom-sistemas' ); ?></span>
                            <span class="priority-high active"><?php esc_html_e( 'Alta', 'custom-sistemas' ); ?></span>
                            <span class="priority-crit"><?php esc_html_e( 'Crítica', 'custom-sistemas' ); ?></span>
                        </div>
                    </div>
                    <div class="suporte-mockup-field">
                        <label><?php esc_html_e( 'Descrição', 'custom-sistemas' ); ?></label>
                        <div class="suporte-mockup-textarea"><span class="suporte-mockup-cursor"></span></div>
                    </div>
                    <div class="suporte-mockup-submit">
                        <span><i class="bi bi-paperclip"></i> <?php esc_html_e( 'Anexar arquivo', 'custom-sistemas' ); ?></span>
                        <button><?php esc_html_e( 'Enviar chamado', 'custom-sistemas' ); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<section class="faq">
    <div class="faq-inner">
        <div class="faq-header">
            <span class="section-label" style="display:block;text-align:center;margin-bottom:10px;">FAQ</span>
            <h2><?php esc_html_e( 'Perguntas Frequentes', 'custom-sistemas' ); ?></h2>
            <p><?php esc_html_e( 'Respostas rápidas para as perguntas mais comuns.', 'custom-sistemas' ); ?></p>
        </div>
        <?php
        $faqs = [
            [ 'Qual o prazo de resposta para um chamado aberto?', 'O prazo varia conforme a prioridade: chamados críticos são atendidos em até 2 horas, alta prioridade em até 4 horas, média em até 1 dia útil e baixa em até 3 dias úteis.' ],
            [ 'Como faço para acompanhar o status do meu chamado?', 'Após abertura do chamado, você recebe um número de protocolo por e-mail. Acesse o sistema de chamados com esse protocolo para ver atualizações em tempo real.' ],
            [ 'O suporte por telefone tem algum custo?', 'O número 0800-400-5200 é totalmente gratuito para chamadas de qualquer operadora. O número (21) 2666-5200 é uma linha direta sujeita às tarifas normais de telefonia.' ],
            [ 'Qual canal de atendimento devo usar em caso de urgência?', 'Em situações urgentes, recomendamos ligar diretamente para um de nossos números e, em paralelo, abrir um chamado no sistema com prioridade "Crítica".' ],
        ];
        foreach ( $faqs as $i => $faq ) :
            $open = ( 0 === $i ) ? ' open' : '';
            $max  = ( 0 === $i ) ? ' style="max-height: 200px;"' : '';
        ?>
            <div class="faq-item<?php echo esc_attr( $open ); ?>" onclick="toggleFaq(this)">
                <button class="faq-question">
                    <?php echo esc_html( $faq[0] ); ?>
                    <span class="icon"><i class="bi bi-plus-lg"></i></span>
                </button>
                <div class="faq-answer"<?php echo $max; ?>>
                    <div class="faq-answer-inner"><?php echo esc_html( $faq[1] ); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CTA FINAL -->
<div class="suporte-cta-block">
    <div class="suporte-cta-inner">
        <div class="suporte-cta-icon"><i class="bi bi-headset"></i></div>
        <h2><?php esc_html_e( 'Ainda não encontrou o que precisava?', 'custom-sistemas' ); ?></h2>
        <p><?php esc_html_e( 'Nossa equipe está à disposição para te ajudar. Não hesite em entrar em contato.', 'custom-sistemas' ); ?></p>
        <div class="suporte-cta-actions">
            <a href="#ticket" class="btn-custom-primary">
                <i class="bi bi-ticket-detailed"></i> <?php esc_html_e( 'Abrir chamado', 'custom-sistemas' ); ?>
            </a>
            <a href="tel:08004005200" class="suporte-cta-link">
                <i class="bi bi-telephone"></i> 0800-400-5200
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
