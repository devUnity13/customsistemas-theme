<?php
/**
 * archive-solucao.php
 * Arquivo / listagem de todas as Soluções agrupadas por categoria.
 */

defined( 'ABSPATH' ) || exit;

get_header();

$megamenu = custom_get_megamenu_data();
?>

<section class="solucao-archive">
    <div class="solucao-archive-hero">
        <div class="solucao-archive-hero-inner">
            <span class="section-label"><?php esc_html_e( 'Nosso Portfólio', 'custom-sistemas' ); ?></span>
            <h1><?php esc_html_e( 'Todas as Soluções', 'custom-sistemas' ); ?></h1>
            <p><?php esc_html_e( 'Plataformas completas para cada área da gestão pública municipal.', 'custom-sistemas' ); ?></p>
        </div>
    </div>

    <div class="solucao-archive-body">
        
        <!-- BARRA DE FILTROS -->
        <div class="solucao-filters">
            <div class="solucao-filters-inner">
                <div class="solucao-search">
                    <i class="bi bi-search"></i>
                    <input type="text" id="solucaoSearch" placeholder="<?php esc_attr_e( 'Buscar solução...', 'custom-sistemas' ); ?>" autocomplete="off" />
                </div>
                
                <div class="solucao-filter-wrapper">
                    <select id="solucaoFilterSelect" class="solucao-filter-select">
                        <option value="all"><?php esc_html_e( 'Todas as categorias', 'custom-sistemas' ); ?></option>
                        <?php 
                        foreach ( $megamenu['categorias'] as $categoria ) {
                            $posts_cat = $megamenu['solucoes'][ $categoria->term_id ] ?? [];
                            if ( empty( $posts_cat ) ) continue;
                            echo '<option value="' . esc_attr( $categoria->slug ) . '">' . esc_html( $categoria->name ) . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="solucao-archive-inner">

            <?php foreach ( $megamenu['categorias'] as $categoria ) :
                $posts_cat = $megamenu['solucoes'][ $categoria->term_id ] ?? [];
                if ( empty( $posts_cat ) ) continue;
                $cor = custom_get_categoria_cor( $categoria->term_id );
            ?>
                <div class="solucao-archive-group" data-categoria="<?php echo esc_attr( $categoria->slug ); ?>">
                    <h2 class="solucao-archive-group-title" style="border-color:<?php echo esc_attr( $cor ); ?>;color:<?php echo esc_attr( $cor ); ?>">
                        <?php echo esc_html( $categoria->name ); ?>
                    </h2>
                    <div class="solucao-archive-grid">
                        <?php foreach ( $posts_cat as $solucao ) :
                            $icone = custom_get_solucao_icone( $solucao->ID );
                            $url   = custom_get_solucao_url( $solucao->ID );
                        ?>
                            <a href="<?php echo esc_url( $url ); ?>" class="solucao-card" data-title="<?php echo esc_attr( wp_strip_all_tags( $solucao->post_title ) ); ?>">
                                <div class="solucao-card-icon" style="background:<?php echo esc_attr( $cor . '1a' ); ?>">
                                    <i class="bi <?php echo esc_attr( $icone ); ?>" style="color:<?php echo esc_attr( $cor ); ?>"></i>
                                </div>
                                <h3><?php echo esc_html( $solucao->post_title ); ?></h3>
                                <?php if ( $solucao->post_excerpt ) : ?>
                                    <p><?php echo esc_html( wp_trim_words( $solucao->post_excerpt, 15 ) ); ?></p>
                                <?php endif; ?>
                                <span class="solucao-card-cta">
                                    <?php esc_html_e( 'Saiba mais', 'custom-sistemas' ); ?>
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('solucaoSearch');
    const groups = document.querySelectorAll('.solucao-archive-group');
    
    let currentFilter = 'all';
    
    // Remove os acentos e minúsculas para padronizar comparação textual
    const normalizeStr = (str) => {
        return str.normalize('NFD').replace(/[\u0300-\u036f]/g, "").toLowerCase();
    };

    function filterSolutions() {
        const searchTerm = normalizeStr(searchInput.value.trim());

        groups.forEach(group => {
            const groupCat = group.getAttribute('data-categoria');
            const cards = group.querySelectorAll('.solucao-card');
            let visibleCardsInGroup = 0;
            
            // Checa a categoria atual
            const categoryMatch = (currentFilter === 'all' || currentFilter === groupCat);

            cards.forEach(card => {
                const title = normalizeStr(card.getAttribute('data-title') || '');
                const searchMatch = title.includes(searchTerm);
                
                if (categoryMatch && searchMatch) {
                    card.style.display = 'flex';
                    visibleCardsInGroup++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Oculta o título da categoria caso ela esvazie
            if (visibleCardsInGroup > 0) {
                group.style.display = 'block';
            } else {
                group.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterSolutions);
    
    // Filtro por Select
    const filterSelect = document.getElementById('solucaoFilterSelect');
    if (filterSelect) {
        filterSelect.addEventListener('change', () => {
            currentFilter = filterSelect.value;
            filterSolutions();
        });
    }
});
</script>

<?php get_footer(); ?>
