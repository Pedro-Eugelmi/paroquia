<?php

// Adding support
add_theme_support( 'post-thumbnails' );

// Custom Logo
add_theme_support('custom-logo', array(
    'flex-height'          => false, 
    'flex-width'           => false,  
    'header-text'          => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true, 
));

add_action("wp_enqueue_scripts", "sc_theme_styles");

function sc_theme_styles() {
    $theme_version = wp_get_theme()->get('Version');
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // CSS
    wp_enqueue_style('reboot_css', $theme_uri . '/styles/bootstrap-reboot.min.css', [], '5.3.0');
    wp_enqueue_style('bootstrap_css', $theme_uri . '/styles/bootstrap.min.css', [], '5.3.0');
    wp_enqueue_style('swiper_css', $theme_uri . '/styles/swiper.min.css', [], '11.0.0');
    wp_enqueue_style('lightbox_css', $theme_uri . '/styles/lightbox.css', [], '2.11.4');
    
    // Css versionamento dinamico
    wp_enqueue_style('default_css', $theme_uri . '/styles/default.css', [], filemtime($theme_dir . '/styles/default.css'));
    wp_enqueue_style('script_css', $theme_uri . '/styles/style.css', [], filemtime($theme_dir . '/styles/style.css'));
    wp_enqueue_style('classic_css', $theme_uri . '/styles/classic.css', [], filemtime($theme_dir . '/styles/classic.css'));
    // wp_enqueue_style('gutenberg_css', $theme_uri . '/styles/gutenberg.css', [], $theme_version);

    // Bibliotecas JS
    wp_enqueue_script("jquery_js", $theme_uri . '/scripts/jquery.min.js', [], '3.7.1', true);
    wp_enqueue_script('bootstrap_js', $theme_uri . '/scripts/bootstrap.bundle.min.js', ['jquery_js'], '5.3.0', true);
    wp_enqueue_script('swiper_js', $theme_uri . '/scripts/swiper.min.js', [], '11.0.0', true);
    wp_enqueue_script('lightbox_js', $theme_uri . '/scripts/lightbox.js', ['jquery_js'], '2.11.4', true);

    // Script JS
    wp_enqueue_script('script_js', $theme_uri . '/scripts/script.min.js', ['swiper_js'], filemtime($theme_dir . '/scripts/script.min.js'), true);

    // Dados para Requsições
    $wordpress_data = [
        'url' => get_site_url(),
        'ajax_url' => admin_url('admin-ajax.php')
    ];

    wp_localize_script('script_js', 'wordpress', $wordpress_data);
}

// Desabilitar o editor
function disable_editor() {
    $pages = [7,84, 11, 237, 244, 532]; 

    global $pagenow, $post;
    if ($pagenow === 'post.php' && $post && in_array($post->ID, $pages)) {
        remove_post_type_support('page', 'editor'); 
    }
}
add_action('admin_head', 'disable_editor');

// Disable Gutenberg editor


// Desativa o Editor de Blocos (Gutenberg)
add_filter('use_block_editor_for_post', '__return_false', 10);

// Paginação
function wordpress_pagination($wp_query) {
    $big = 999999999;

    $current_page = max(1, get_query_var('paged'));

    echo paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => $current_page,
        'total'     => $wp_query->max_num_pages,
        'prev_next' => true,
        'prev_text' => '<span class="pagination-prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: #FF0004;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></span>',
        'next_text' => '<span class="pagination-next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: #FF0004;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></span>',
    ));
}

// Calculate the reading time
function sc_get_reading_time($content) {
    $words = str_word_count($content);
    return ceil($words/200)." minutos";
}

// Limpa o telefone

function sc_clean_phone($phone) {
    // Remove tudo que não for dígito (0-9)
    return preg_replace('/\D/', '', $phone);
}

function sc_wtt_link($phone, $text = null) {
    $clean_phone = sc_clean_phone($phone);
        
    $link = "https://wa.me/{$clean_phone}";

    if ($text) {
        $encoded_text = urlencode($text);
        $link = $link."?text=$encoded_text";
    }
    
    return $link;
}

// Carrega os banners
function sc_preload_banner() {

    if (is_front_page()) {
        $banner_url = get_template_directory_uri() . '/images/banner.mp4';
    }

    if ( !empty($banner_url) ) {
        echo '<link rel="preload" href="' . esc_url($banner_url) . '" as="video" type="video/mp4" fetchpriority="high">' . "\n";
    }
}


add_action( 'wp_head', 'sc_preload_banner', 1 );


function sc_theme_color_meta() {
    // Usa o Vinho da paróquia para o topo do navegador
    echo '<meta name="theme-color" content="#B22222">' . "\n";
    // Cor para o Safari (iOS)
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">' . "\n";
}

add_action('wp_head', 'sc_theme_color_meta');

// Cria aplicativo 

function sc_add_pwa_tags() {
    ?>

        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
        <meta name="theme-color" content="#6B2D8C">
        
        <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js');
            });
        }
    
        </script>
    <?php
}

add_action('wp_head', 'sc_add_pwa_tags');