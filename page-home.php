<?php get_header('home'); ?>

	<main role="main">
       <!--========== LAMINAS DE INICIO ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/img/Home-Slider1.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white textoMayusculas"><?php _e( 'Logística sin límites', 'tlpacifico' ); ?> <br>Unlimited Logistics</h1>
                        </div>
                     
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/img/Home-Slider2.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white textoMayusculas"><?php _e( 'Logística sin límites', 'tlpacifico' ); ?><br>Unlimited Logistics</h2>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- FECHAS -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- FIN DE FECHAS -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs"><?php _e( 'Conoce más', 'tlpacifico' ); ?></p>
            </a>
        </div>
        <!--========== FIN DE LAMINAS ==========-->

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php _e( 'Descubre', 'tlpacifico' ); ?></p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md textoBold tituloQuienes">
                             <?php _e( 'Quiénes', 'tlpacifico' ); ?>
                            </h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md textoBold">
                             <?php _e( 'Somos', 'tlpacifico' ); ?> 
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-16--xs textoJustificado g-font-weight--700"><?php _e( 'Somos una empresa consolidada como Agencia de Carga especializada en operaciones logísticas a nivel internacional, con la finalidad de ofrecer servicios profesionales altamente eficientes.', 'tlpacifico' ); ?> </p>
                        <p class="g-font-size-16--xs textoJustificado g-font-weight--700"><?php _e( 'Nos adaptamos a las necesidades del cliente, optimizando costos y tiempos de tránsito con un servicio personalizado de primera calidad, brindando siempre las mejores tarifas de cualquier puerto del mundo.', 'tlpacifico' ); ?></p>
                        <p class="g-font-size-16--xs textoJustificado g-font-weight--700"><?php _e( 'Tenemos la experiencia para facilitar sus exportaciones e importaciones, sin importar que sean del océano Pacifíco o del Atlántico.', 'tlpacifico' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Foto_Secundaria-Inicio.jpg" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url(<?php echo get_template_directory_uri(); ?>/img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white tituloEslogan">
                     <?php _e( 'Facilitamos su operación con rapidez, transparencia y eficiencia', 'tlpacifico' ); ?>
                    </h2>
                </div>
                <a href="servicios" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50"><?php _e( 'CONOCE NUESTROS SERVICIOS', 'tlpacifico' ); ?></a>
            </div>
        </div>
        <!-- End Parallax -->

       <!-- Navieras -->
        <div class="g-bg-color--sky-light">
            <div class="g-container--md g-padding-y-20--xs g-padding-y-50--sm sinPaddingBottom">
                <!-- Swiper Navieras -->
                <h3 class="tituloGris"><?php _e( 'Alianzas Navíeras', 'tlpacifico' ); ?></h3>
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1 imagenLogNavL" src="<?php echo get_template_directory_uri(); ?>/img/navieras/HapagLloyd.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="s-clients-v1 imagenLogNav" src="<?php echo get_template_directory_uri(); ?>/img/navieras/CMACGM.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <img class="s-clients-v1 imagenLogNavL" src="<?php echo get_template_directory_uri(); ?>/img/navieras/Evergreen.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <img class="s-clients-v1 imagenLogNav" src="<?php echo get_template_directory_uri(); ?>/img/navieras/Cosco.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <img class="s-clients-v1 imagenLogNavL" src="<?php echo get_template_directory_uri(); ?>/img/navieras/HamburgSud.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".6s">
                                <img class="s-clients-v1 imagenLogNav" src="<?php echo get_template_directory_uri(); ?>/img/navieras/Mol.png" alt="Logotipo Navieras">
                            </div>
                        </div>                        
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".7s">
                                <img class="s-clients-v1 imagenLogNav" src="<?php echo get_template_directory_uri(); ?>/img/navieras/MSC.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                        <div class="swiper-slide cajaLogNav">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".8s">
                                <img class="s-clients-v1 imagenLogNav" src="<?php echo get_template_directory_uri(); ?>/img/navieras/SeaLand.png" alt="Logotipo Navieras">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Swiper Navieras -->
                <div class="g-container--md g-padding-y-20--xs g-padding-y-50--sm">
                    <h3 class="tituloGris"><?php _e( 'Asociaciones', 'tlpacifico' ); ?></h3>
                    <div class="s-swiper js__swiper-asoc">
                        <div class="swiper-wrapper centradoIconos">
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                    <img class="s-clients-v1 imgAsoc" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Amanac.png" alt="Logotipo Asociados">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                    <img class="s-clients-v1 imgAsoc" src="<?php echo get_template_directory_uri(); ?>/img/asociados/MexicoChamber.png" alt="Logotipo Asociados" style="width: 80%;">
                                </div>
                            </div>                                                           
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                    <img class="s-clients-v1 imgAsoc" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Comce.png" alt="Logotipo Asociados">
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                    <img class="s-clients-v1 imgAsoc" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Caarem.png" alt="Logotipo Asociados">
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                    <img class="s-clients-v1 imgAsoc" src="<?php echo get_template_directory_uri(); ?>/img/asociados/ILPG.png" alt="Logotipo Asociados">
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>

            </div>
        </div>
        <!-- End Clients -->

        <!-- Noticias -->
        <div class="container g-padding-y-20--xs g-margin-b-30--xs">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 tituloGris g-letter-spacing--2 g-margin-b-25--xs"></p>
                <h2 class="g-font-size-32--xs g-font-size-36--md"><?php _e( 'Noticias', 'tlpacifico' ); ?></h2>
            </div>
            <div class="row">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- Noticias -->
                    <article>
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Noticia-Foto-Puerto.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2">Noticias</p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">Aquí va el título de la noticia.</a></h3>
                            <p>Breve descripción de la noticia.</p>
                        </div>
                    </article>
                    <!-- End Noticias -->
                </div>
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- Noticias -->
                    <article>
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Noticia-Foto-Puerto.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2">Noticias</p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">Aquí va el título de la noticia.</a></h3>
                            <p>Breve descripción de la noticia.</p>
                        </div>
                    </article>
                    <!-- End Noticias -->
                </div>
            </div>
            <a href="#" class="text-uppercase s-btn s-btn--md s-btn--red-brd g-radius--50">
                <?php _e('VER MÁS NOTICIAS','tlpacifico'); ?>
            </a>
        </div>        
        <!-- Fin Noticias -->
	</main>

<?php get_footer(); ?>
