# Custom Sistemas — Tema WordPress

Tema corporativo desenvolvido do zero para a **Custom Sistemas**, convertendo o site HTML/CSS/JS original para WordPress de forma profissional e escalável.

---

## 📁 Estrutura de Pastas

```
custom-sistemas/
│
├── assets/
│   ├── css/
│   │   ├── base.css               ← Tokens CSS (variáveis), reset, tipografia global
│   │   ├── components.css         ← Componentes reutilizáveis (botões, chips, labels)
│   │   ├── loader.css             ← Page loader animado
│   │   ├── responsive.css         ← Media queries globais
│   │   ├── sections/
│   │   │   ├── navbar.css         ← Navbar fixa + mega menu + mobile drawer
│   │   │   ├── hero.css           ← Carousel hero da home
│   │   │   ├── stats.css          ← Barra de estatísticas
│   │   │   ├── especialidades.css
│   │   │   ├── tecnologias.css
│   │   │   ├── carreiras.css
│   │   │   ├── faq.css
│   │   │   ├── newsletter.css
│   │   │   └── footer.css
│   │   └── pages/
│   │       ├── about.css          ← Estilos exclusivos da página Sobre
│   │       └── support.css        ← Estilos exclusivos da página Suporte
│   │
│   ├── js/
│   │   ├── navbar.js              ← Scroll handler + busca
│   │   ├── mega-menu.js           ← Mega menu + mobile drawer
│   │   ├── faq.js                 ← Accordion FAQ
│   │   ├── loader.js              ← Page loader
│   │   ├── about.js               ← Contador animado + timeline
│   │   └── support.js             ← Animações + typing mockup
│   │
│   └── img/                       ← Imagens do tema (fallback/estáticas)
│
├── inc/
│   ├── class-wp-bootstrap-navwalker.php  ← Walker Bootstrap 5 para wp_nav_menu()
│   ├── setup.php                          ← Suporte ao tema, menus, sidebars
│   ├── enqueue.php                        ← Registro de CSS e JS
│   ├── helpers.php                        ← Funções utilitárias
│   └── customizer.php                     ← Opções no Personalizador do WP
│
├── template-parts/
│   ├── header/
│   │   └── nav.php               ← Navbar completa com mega menu
│   ├── footer/
│   │   └── footer-widgets.php    ← Newsletter + footer com widgets
│   └── content/
│       └── content.php           ← (a criar) Template parcial de post
│
├── page-templates/
│   ├── template-home.php         ← Página inicial (Hero, Stats, Especialidades...)
│   ├── template-sobre.php        ← Página Sobre / Quem Somos
│   └── template-suporte.php      ← Página Suporte Técnico
│
├── functions.php                 ← Ponto de entrada, carrega os inc/
├── header.php                    ← <head>, loader, navbar
├── footer.php                    ← newsletter + footer + wp_footer()
├── index.php                     ← Loop padrão (blog)
├── page.php                      ← Páginas sem template
├── single.php                    ← Post individual
├── 404.php                       ← Página de erro
└── style.css                     ← Cabeçalho obrigatório do tema WP
```

---

## 🚀 Instalação

1. Compacte a pasta `custom-sistemas/` em um `.zip`
2. No painel do WordPress, vá em **Aparência → Temas → Adicionar novo → Carregar tema**
3. Selecione o `.zip` e ative o tema

---

## ⚙️ Configuração inicial

### 1. Criar as páginas e atribuir templates
Vá em **Páginas → Adicionar nova** e crie:

| Título | Slug | Template |
|--------|------|----------|
| Início | `/` ou `/home/` | Home — Página Inicial |
| Sobre | `/sobre/` | Sobre — Quem Somos |
| Suporte Técnico | `/suporte/` | Suporte Técnico |

### 2. Configurar o menu principal
Vá em **Aparência → Menus** e crie um menu chamado "Menu Principal".  
Adicione os itens: Início, Sobre, Suporte Técnico e demais páginas futuras.  
Atribua ao local **Menu Principal**.

> ⚠️ **Mega Menu de Soluções**: O item "Soluções" usa um mega menu customizado gerenciado diretamente no template `template-parts/header/nav.php` (não pelo menu do WP), pois sua estrutura multi-coluna vai além do que o navwalker suporta. Para alterar os itens do mega menu, edite esse arquivo.

### 3. Configurar redes sociais e rodapé
Vá em **Aparência → Personalizar → Redes Sociais** e insira as URLs.

### 4. Logo personalizado
Vá em **Aparência → Personalizar → Identidade do site** e faça upload do logo.  
O tema suporta `custom_logo` nativamente.

### 5. Widgets do rodapé (opcional)
Vá em **Aparência → Widgets** e adicione conteúdo às colunas:
- **Rodapé — Soluções**
- **Rodapé — Institucional**
- **Rodapé — Contato**

Se os widgets estiverem vazios, o rodapé exibe o conteúdo padrão estático.

---

## 🎨 Customização de cores

Edite as variáveis CSS em `assets/css/base.css`:

```css
:root {
    --blue:        #0A52CC;  /* Cor primária */
    --blue-mid:    #1261E0;
    --blue-light:  #3B82F6;
    --blue-pale:   #EFF6FF;
    --ink:         #07111F;  /* Texto escuro */
    --ink-mid:     #1E293B;
    --ink-light:   #475569;
    --surface:     #F8FAFF;
}
```

---

## 📦 Dependências (via CDN — sem instalação)

| Recurso | Versão |
|---------|--------|
| Bootstrap CSS + JS | 5.3.0 |
| Bootstrap Icons | latest |
| Google Fonts: Plus Jakarta Sans, DM Serif Display, Inter | — |

---

## 🔧 Como adicionar novas páginas

1. Crie um novo arquivo em `page-templates/template-minha-pagina.php`
2. Adicione o cabeçalho do template:
   ```php
   <?php
   /**
    * Template Name: Minha Página
    * Template Post Type: page
    */
   get_header();
   // seu HTML aqui
   get_footer();
   ```
3. Se precisar de CSS exclusivo, crie `assets/css/pages/minha-pagina.css`
4. Enfileire o CSS condicionalmente em `inc/enqueue.php`:
   ```php
   if ( is_page_template( 'page-templates/template-minha-pagina.php' ) ) {
       wp_enqueue_style( 'theme-page-minha', $uri . '/assets/css/pages/minha-pagina.css', [...], $v );
   }
   ```
