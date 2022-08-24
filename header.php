<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Brasileiro de Ciência Aberta - Ibict</title>
    <?php wp_head(); ?>
    <!-- Carrega todos os scripts e estilos -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GLNR2BVNPZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GLNR2BVNPZ');
    </script>
</head>

<body <?php body_class(); ?>>
    <header>

        <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
            <ul id="menu-barra-temp" style="list-style:none;">
                <li
                    style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
                    <a href="http://brasil.gov.br"
                        style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo
                        Brasileiro</a>
                </li>
            </ul>
        </div>

        <section class="menu-area">
            <div class="container-fluid">
                <div class="row">

                    <nav class="navbar navbar-expand-xl navbar-light bg-light ml-2" role="navigation">


                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                            aria-expanded="false"
                            aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-ciencia-aberta.png" class=""
                                alt="">
                        </a>

                        <!--<a class="navbar-brand" href="#">Navbar</a>-->
                        <!-- Posicionar menu na tela - Slug = Nome criado, ex: main_menu -->
                        <?php 
                                    wp_nav_menu( array(
                                        'theme_location'  => 'main_menu',
                                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => 'div',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'bs-example-navbar-collapse-1',
                                        'menu_class'      => 'navbar-nav mr-auto',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>

                    </nav>

                    <nav class="navbar navbar-expand-xl navbar-light bg-light" role="navigation">

                        <!-- Posicionar menu na tela - Slug = Nome criado, ex: main_menu -->
                        <?php 
                                    wp_nav_menu( array(
                                        'theme_location'  => 'second_menu',
                                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => 'div',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'bs-example-navbar-collapse-1',
                                        'menu_class'      => 'navbar-nav mx-auto',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>

                    </nav>


                </div> <!-- Row1 -->

            </div>

        </section>
    </header>