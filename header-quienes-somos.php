<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta name="keywords" content="Agencia de Carga" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Xoyoc.NET">

		<?php wp_head(); ?>
        
         <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->

        <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles  -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Hoja de Estilos  -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styletl.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== ENCABEZADO ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <p class="textoBlanco textoDer idioma">
                    <a class="cambioIdioma opActiva" href="/inicio">Español</a>/<a class="cambioIdioma" href="/en/home">Inglés</a>
                </p>
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="<?php echo home_url(); ?>" class="s-header__logo-link">
                                    <img class="img-responsive s-header__logo-img s-header__logo-img-default" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logotipo de Tl Pacific">
                                    <img class="img-responsive s-header__logo-img s-header__logo-img-shrink" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="Logotipo de Tl Pacific">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <p class="textoBlanco"><?php _e( 'MENÚ', 'tlpacifico' ); ?></p>
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->
                        <!-- nav -->
                        <nav class="nav" role="navigation">
                         <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/inicio"><?php _e('Inicio', 'tlpacifico' ); ?> </a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="/quienes-somos"><?php _e('Quiénes Somos', 'tlpacifico' ); ?></a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/servicios"><?php _e('Servicios', 'tlpacifico' ); ?></a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/alianzas-y-asociados"><?php _e('Alianzas y Asociados', 'tlpacifico' ); ?></a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/cotizaciones"><?php _e('Cotizaciones', 'tlpacifico' ); ?></a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/oficinas"><?php _e('Oficinas', 'tlpacifico' ); ?></a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/contacto"><?php _e('Contacto', 'tlpacifico' ); ?></a></li>
                         </ul>
                        </nav>
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="/inicio">Español</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="/en/home">Ingles</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.linkedin.com/company/18471341">
                            <img class="iconosInicio" src="<?php echo get_template_directory_uri(); ?>/img/iconos/Linkedin.svg" alt="Icono de Linkedin">
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== FIN DE ENCABEZADO ==========-->


