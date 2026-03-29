<form role="search"
      method="get"
      class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <input type="search"
           class="search-field"
           placeholder="Pesquisar..."
           value="<?php echo get_search_query(); ?>"
           name="s" />

    <button type="submit" class="search-submit" aria-label="Buscar">
        <i class="bi bi-search"></i>
    </button>

</form>
