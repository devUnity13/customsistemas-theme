<?php
/**
 * single-solucao-protocolo.php
 *
 * Layout dedicado para o post CPT "solucao" com slug "protocolo".
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
                <span>Atendimento ao Cidadão</span>
            </div>

            <div class="ct-hero__badge">
                <i class="bi bi-patch-check-fill"></i>
                100% em nuvem · Paperless · Autoatendimento
            </div>

            <h1>
                Mais agilidade com o <span class="ct-hero__highlight">Protocolo Digital</span>
            </h1>

            <p class="ct-hero__desc">
                Permite que o cidadão cadastre e acompanhe suas solicitações 100% pela internet. Também possibilita que o servidor público responsável atenda a solicitação e conclua todo o processo de forma on-line.
            </p>

            <div class="ct-hero__stats">
                <div class="ct-hero__stat">
                    <strong>Zero</strong>
                    <span>filas de atendimento</span>
                </div>
                <div class="ct-hero__stat-divider"></div>
                <div class="ct-hero__stat">
                    <strong>100%</strong>
                    <span>menos uso de papel</span>
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
                <img class="ct-hero__mockup-img" src="<?php echo custom_img('modelo.png'); ?>" alt="Mockup Protocolo">
                <div class="ct-mockup-badge ct-mockup-badge--br">
                    <i class="bi bi-check-circle-fill"></i>
                    Tramitado
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
            <div class="ct-trust__item"><strong>On-line</strong><span>Anexo de documentos digitais</span></div>
            <div class="ct-trust__item"><strong>Alertas</strong><span>Notificações por SMS e E-mail</span></div>
            <div class="ct-trust__item"><strong>Integrado</strong><span>Geração de taxas via Tributos</span></div>
        </div>
    </div>
</section>

<section class="ct-about">
    <div class="ct-about__inner">
        <div class="ct-about__text">
            <div class="section-label">Sobre o Protocolo</div>
            <h2>Fim da burocracia e das filas intermináveis</h2>
            <p>
                Ofereça um balcão virtual (autoatendimento) onde qualquer contribuinte pode abrir processos, 
                adicionar requerimentos anexos e monitorar em tempo real qual o parecer de cada setor envolto na tramitação.
            </p>
            <ul class="ct-about__checks">
                <li><i class="bi bi-check-circle-fill"></i> Facilidade para pagamentos com guias automáticas</li>
                <li><i class="bi bi-check-circle-fill"></i> Notificações pró-ativas da movimentação</li>
                <li><i class="bi bi-check-circle-fill"></i> Fim das caixas físicas circulando de mesa em mesa</li>
            </ul>
        </div>
        <div class="ct-about__cards">
            <div class="ct-about__card ct-about__card--blue"><i class="bi bi-diagram-3"></i><h4>Workflow Dinâmico</h4><p>Roteiramento claro para qual departamento cada assunto deve tramitar.</p></div>
            <div class="ct-about__card ct-about__card--green"><i class="bi bi-mailbox"></i><h4>Caixa de Entrada Única</h4><p>O servidor loga e examina exatamente o que está retido no seu departamento.</p></div>
            <div class="ct-about__card ct-about__card--orange"><i class="bi bi-clock-history"></i><h4>SLA e Prazos</h4><p>Mensure rapidamente o tempo de demora na resolução de pendências.</p></div>
            <div class="ct-about__card ct-about__card--blue"><i class="bi bi-cash-coin"></i><h4>Integração Tributária</h4><p>Gere e compense taxas nativamente junto à arrecadação municipal.</p></div>
        </div>
    </div>
</section>

<section id="modulos" class="ct-modulos">
    <div class="ct-modulos__inner">
        <div class="ct-modulos__header">
            <div class="section-label">Recursos do Protocolo</div>
            <h2>Uma plataforma de atendimento munida de todas as facilidades</h2>
        </div>
        <div class="ct-modulos__grid">
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-file-earmark-plus" style="color:#fff;"></i></div>
                <h3>Abertura de Processos On-line</h3>
                <p>Permita amplo e irrestrito encaminhamento das demandas administrativas do pagador diretamente do smartphone evitando sua locomoção.</p>
                <ul>
                    <li>Validação automática e geração inteligente do protocolo</li>
                    <li>Sinalização dos documentos e avais obrigatórios</li>
                    <li>Atrelamento direto ao CPF validado nativo do munícipe</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-paperclip" style="color:#fff;"></i></div>
                <h3>Gerenciamento de Anexos e Peças</h3>
                <p>Arquitetura poderosa da Bettha pronta pra englobar desde arquivos estáticos de poucos megabytes à plantas grandiosas em DXF atreladas a arquitetura.</p>
                <ul>
                    <li>Arquivamento digital rigorosamente sem perdas</li>
                    <li>Substituição, aprovação e reprovação unitária por tela</li>
                    <li>Rastreabilidade de validade de arquivos confidenciais postados</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-signpost-split" style="color:#fff;"></i></div>
                <h3>Roteiramento Dinâmico (Workflows)</h3>
                <p>Construa os trilhos fixos intersetoriais por onde aquela classe de processo navegará na burocracia sem depender de lembrete humano no caminho todo.</p>
                <ul>
                    <li>Trajetórias atreladas e customizáveis prontas visuais</li>
                    <li>Disparo para múltiplas secretarias concomitantemente acionado</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-envelope-paper" style="color:#fff;"></i></div>
                <h3>Notificações Disparáveis ativas</h3>
                <p>Evite os contatos e longas esperas rotineiras nas ligações pra sua Ouvidoria implantando uma robótica comunicação direta avisando cidadãos.</p>
                <ul>
                    <li>Mensagens e notificações de texto formatado prontas por Email/SMS</li>
                    <li>Log do que foi consultado garantido nativamente</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-shield-check" style="color:#fff;"></i></div>
                <h3>Assinaturas Digitais Padrão</h3>
                <p>Processos homologados eletronicamente e devoluções certificadas amparadas na rigorosa base jurídica da Infraestrutura Nacional atual.</p>
                <ul>
                    <li>Validade e proteção plena governamental baseada nas chaves</li>
                    <li>Exibição impecável da comprovação chancelada num token finalizado</li>
                </ul>
            </div>
            <div class="ct-modulo-card">
                <div class="ct-modulo-card__icon" style="--mc: 210, 2%, 45%"><i class="bi bi-cash-stack" style="color:#fff;"></i></div>
                <h3>Taxas de Expedição Inclusas</h3>
                <p>Se o processo incorre obrigatoriamente a uma receita da gestão municipal, seja ativada, compensada e auditada na raiz conectada da fazenda municipal.</p>
                <ul>
                    <li>Geradores unificados dos códigos de PIX emitidos por ali mesmo</li>
                    <li>Bloqueios para impedindo avanços caso atrase e pare devendo boletos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ct-integracoes">
    <div class="ct-integracoes__inner">
        <div class="ct-integracoes__text">
            <div class="section-label section-label--light">Integração Total</div>
            <h2>Guia única de processo sem precisar sair de casa</h2>
            <p>Os fluxos do Protocolo não rodam no vácuo. Eles comunicam de forma nativa com as demais engrenagens da prefeitura para emitir e compensar guias tributárias anexas ao pedido, consultando as bases para não estagnar despachos e acelerando o atendimento aos chamados.</p>
            <ul class="ct-about__checks ct-about__checks--light">
                <li><i class="bi bi-check-circle-fill"></i> Vínculo real com emissão de Tributos</li>
                <li><i class="bi bi-check-circle-fill"></i> Acesso aos despachos da Contabilidade/Procuradoria</li>
                <li><i class="bi bi-check-circle-fill"></i> Organização centralizada para a Ouvidoria e Atendimento</li>
            </ul>
        </div>
        <div class="ct-integracoes__map">
            <div class="ct-integ-hub">
                <i class="bi bi-send-check"></i>
                <span>Protocolo</span>
            </div>
            <div class="ct-integ-node ct-integ-node--t">
                <i class="bi bi-cash-coin"></i>
                <span>Tributos</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tr">
                <i class="bi bi-file-earmark-person"></i>
                <span>RH (Certidões)</span>
            </div>
            <div class="ct-integ-node ct-integ-node--r">
                <i class="bi bi-person-lines-fill"></i>
                <span>Cidadão Web</span>
            </div>
            <div class="ct-integ-node ct-integ-node--br">
                <i class="bi bi-hospital"></i>
                <span>Saúde / Vigilância</span>
            </div>
            <div class="ct-integ-node ct-integ-node--b">
                <i class="bi bi-megaphone"></i>
                <span>Ouvidoria</span>
            </div>
            <div class="ct-integ-node ct-integ-node--bl">
                <i class="bi bi-building"></i>
                <span>Obras/Plantas</span>
            </div>
            <div class="ct-integ-node ct-integ-node--l">
                <i class="bi bi-briefcase-fill"></i>
                <span>Procuradoria Administrativa</span>
            </div>
            <div class="ct-integ-node ct-integ-node--tl">
                <i class="bi bi-receipt"></i>
                <span>Nota Fiscal Eletrônica</span>
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
                    "Ao virar a chave para o Protocolo Digital em Nuvem da Betha, erradicamos as extensas filas de atendimento na porta da prefeitura. Os processos, que demoravam meses perdidos presencialmente, viraram notificações no celular do requerente despachadas em horas."
                </blockquote>
                <div class="ct-case__author">
                    <div class="ct-case__avatar"><i class="bi bi-person"></i></div>
                    <div>
                        <strong>Secretário de Administração</strong>
                        <span>Prefeitura Cliente Betha</span>
                    </div>
                </div>
            </div>
            <div class="ct-case__results">
                <h4>Impacto Gerado</h4>
                <div class="ct-case__result-item">
                    <i class="bi bi-arrow-down-circle-fill"></i>
                    <span>Término de 100% dos fluxos físicos de uso e armazenamento de papel e pastas.</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-lightning-fill"></i>
                    <span>Diminuição do tempo de resposta (SLA) de emissões de alvarás de 3 meses para 7 dias.</span>
                </div>
                <div class="ct-case__result-item">
                    <i class="bi bi-emoji-smile-fill"></i>
                    <span>Aumento severo na aprovação direta do cidadão que passou a acompanhar o avanço online.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-faq">
    <div class="ct-faq__inner">
        <div class="ct-faq__header">
            <div class="section-label">Dúvidas Frequentes</div>
            <h2>Tudo o que você precisa saber sobre o Protocolo</h2>
        </div>

        <div class="ct-faq__list">
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Os documentos anexados virtualmente via aplicativo possuem validade jurídica legal?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Enviados em nuvem com conformidade robusta e auditoria rastreável pelo sistema oficial validado, as informações prestadas são resguardadas nos trilhos rigorosos legais do município sem precisar assinar páginas físicas empilhadas e acumuladas em gaveteiros de risco.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    O contribuinte consegue solicitar alvarás e licenças pelo mesmo lugar?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Qualquer modalidade parametrizada poderá ser habilitada. Processos rotineiros ou pedidos complexos demandando anexos grandes — as abas variam conforme as condicionais requeridas pelo seu governo para disparar o motor virtual tributário interligado ativando taxas necessárias ou despachos aos analistas e auditores.</p>
                </div>
            </div>
            <div class="ct-faq__item">
                <button class="ct-faq__question" onclick="ctToggleFaq(this)">
                    Como o usuário que criou a solicitação é avisado sobre as análises?
                    <i class="bi bi-plus-lg"></i>
                </button>
                <div class="ct-faq__answer">
                    <p>Proativamente disparamos SMS validado e links por e-mail, de maneira automatizada conforme os eventos (deferido, indeferido, sob revisão, taxa gerada) saltam dentro dos setores organizados (workflows) nas instâncias configuradas sem gastar nem sobrecarregar as ligações da central do atendimento municipal.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ct-cta">
    <div class="ct-cta__inner">
        <div class="ct-cta__icon"><i class="bi bi-send-check"></i></div>
        <h2>Elimine as barreiras do balcão de atendimento</h2>
        <p>Inicie agora mesmo a jornada de transformação digital eliminando as resmas de papel da gestão do município.</p>
        <div class="ct-cta__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn-custom-primary btn-lg">Agendar demonstração</a>
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
