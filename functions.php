<?php
require_once get_template_directory(  ) . '/inc/class-wp-bootstrap-navwalker.php';
// Incluindo Estilos CSS e Scripts Js
function load_script() {
    wp_enqueue_script('bootstrap4-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3
    /dist/js/bootstrap.min.js', array('jquery'), '4.5.3', true); // Ativa o rodapé com js
    // No bootstrap4 array(jquery) nativo do WP // bootstrap5 - Vazio pq não usa Jquery
    wp_enqueue_style('bootstrap4-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3
    /dist/css/bootstrap.min.css', array(), '4.5.3', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css',
     array(), '1.0', 'all'); //template: Um nome qualquer 
//wp_enqueue_style: enfileira folhas de estilos / array(): Pode carregar dependências
// 1.0: Versão / all: Todos os tipos de mídia
}
// hook - gancho: wp_enqueue_scripts / load_script: Nome da função criada anteriormente
add_action('wp_enqueue_scripts', 'load_script');


/*
// Pesquisa no menu
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args) {
if( $args->theme_location == 'second_menu' )
        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="ml-2" /></form></li>';
        return $items;
}
*/
// função de configuracao
function configuracao(){
    // Registrando Menus
    register_nav_menus( 
        array(
            'main_menu' => 'Main Menu',
            'second_menu' => 'Second Menu'
        )
    );
}
add_action('after_setup_theme', 'configuracao', 0); // 0 é a prioridade de execucao da funcao
