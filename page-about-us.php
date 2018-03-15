<?php get_header('about-us'); ?>

	<main role="main">

         <!--========== PROMO BLOCK ==========-->
        <section class="s-video-v2__bg" data-vidbg-bg="poster: <?php echo get_template_directory_uri(); ?>/include/media/fallback.jpg" data-vidbg-options="loop: true, muted: true, overlay: false">
            <div class="container g-position--overlay g-text-center--xs">
                <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                    <h1 class="g-font-size-26--xs g-font-size-40--sm g-font-size-30--md g-color--white textoBold"><?php _e( 'Agencia de Carga especializada', 'tlpacifico' ); ?></h1>
                    <h2 class="g-font-size-26--xs g-font-size-40--sm g-font-size-30--md g-color--white textoBold"><?php _e( 'en operaciones logísticas', 'tlpacifico' ); ?></h2>
                </div>
            </div>
        </section>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div class="container g-margin-t-o-230--sm g-margin-t-o-120--xs">
            <div class="center-block s-mockup-v1" style="@media (max-width: 34em){margin-top: 4em;}">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/mockups/devices-01.png" alt="Mockup Image">
            </div>
        </div>
        <!-- End Mockup -->

        <!--========== PAGE CONTENT ==========-->
        <!-- Masonry -->
        <div class="g-margin-b-0--xs">
            <div class="container g-padding-y-50--xs g-padding-y-40--sm">
                <div class="row">
                    <div class="col-md-5 col-md-push-7 g-margin-t-0--xs g-margin-t-70--lg g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="g-margin-b-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php _e( 'Nosotros', 'tlpacifico' ); ?></p>
                            <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-30--xs textoBold"><?php _e( 'Somos', 'tlpacifico' ); ?><br>TL PACÍFICO</h2>
                            <p class="g-font-weight--700"><?php _e( 'Nuestro grupo aduanal inició sus operaciones hace más de 14 años, con la finalidad de brindar servicios profesionales en comercio exterior, de una forma responsable y eficiente, cumpliendo con todos los requerimientos legales establecidos por las diferentes autoridades nacionales e internacionales.', 'tlpacifico' ); ?></p>
                            <p class="g-font-weight--700"><?php _e( 'Gracias a nuestra experiencia y nuestros múltiples clientes satisfechos, seguimos avanzando hacia la excelencia mediante una filosofía de atención y calidad en el trabajo, ofreciendo un servicio personalizado a cada uno de nuestros clientes.', 'tlpacifico' ); ?></p>
                            <p class="g-font-weight--700"><?php _e( 'A través de nuestras alianzas podemos ofrecerle logística integral a nivel mundial y trámites aduanales en todas las fronteras de México con el exterior.', 'tlpacifico' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-5">
                        <!-- Masonry Grid -->
                        <div class="row g-row-col--5 js__masonry">
                            <div class="col-xs-6 col-sm-6 col-md-1 js__masonry-sizer"></div>
                            <div class="col-xs-6 g-full-width--xs g-margin-b-10--xs js__masonry-item">
                                <img class="img-responsive g-width-100-percent--xs" src="<?php echo get_template_directory_uri(); ?>/img/500x750/01.jpg" alt="Image">
                            </div>
                            <div class="col-xs-6 g-full-width--xs g-margin-t-25--md g-margin-b-10--xs js__masonry-item">
                                <img class="img-responsive g-width-100-percent--xs" src="<?php echo get_template_directory_uri(); ?>/img/450x215/01.jpg" alt="Image">
                            </div>
                            <div class="col-xs-6 g-full-width--xs g-margin-b-10--xs js__masonry-item">
                                <img class="img-responsive g-width-100-percent--xs" src="<?php echo get_template_directory_uri(); ?>/img/500x750/02.jpg" alt="Image">
                            </div>
                            <div class="col-xs-6 g-full-width--xs g-margin-b-10--xs js__masonry-item">
                                <img class="img-responsive g-width-100-percent--xs" src="<?php echo get_template_directory_uri(); ?>/img/450x295/01.jpg" alt="Image">
                            </div>
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Masonry -->

        <!--========== CORPORATIVO ==========-->
        <div class="g-container--md g-padding-y-20--xs g-padding-y-40--sm">
            <div class="row g-margin-b-20--xs">
                <h2 class="g-text-center--xs textoBold"><?php _e( 'Corporativo', 'tlpacifico' ); ?></h2>
            </div>
            <div class="s-swiper js__swiper-corp">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive quienesCorp" src="<?php echo get_template_directory_uri(); ?>/img/oficinas/Logotipo.png" alt="Logotipos de corporativo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive quienesCorp" src="<?php echo get_template_directory_uri(); ?>/img/oficinas/Logotipo-TradeLink.png" alt="Logotipos de corporativo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive quienesCorp" src="<?php echo get_template_directory_uri(); ?>/img/oficinas/Logotipo-TFService.png" alt="Logotipos de corporativo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive quienesCorp logoTL" src="<?php echo get_template_directory_uri(); ?>/img/oficinas/Logotipo-TLSureste.png" alt="Logotipos de corporativo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== FIN CORPORATIVO ==========-->

        <!-- Process -->
        <div class="g-bg-color--red g-margin-b-100--xs">
            <div class="container g-padding-y-20--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-100--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs"><?php _e( 'Descubre', 'tlpacifico' ); ?></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white textoBold"><?php _e( 'Nuestra filosofía', 'tlpacifico' ); ?></h2>
                </div>
                <ul class="list-inline row g-margin-b-100--xs">
                    <!-- Process -->
                    <li class="col-sm-offset-2 col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--red g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">01</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white"><?php _e( 'Misión', 'tlpacifico' ); ?></h3>
                                <p class="g-color--white textoBlanco"><?php _e( 'Brindar servicios y alternativas de excelente calidad que conduzcan a la satisfacción total de nuestros clientes.', 'tlpacifico' ); ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->

                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--red g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">02</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white"><?php _e( 'Visión', 'tlpacifico' ); ?></h3>
                                <p class="g-color--white-opacity textoBlanco"><?php _e( 'Sobre la base de la excelencia y calidad de nuestros servicios posicionarnos como el grupo líder en materia de comercio exterior.', 'tlpacifico' ); ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->

                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--sm">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--red g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">03</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white"><?php _e( 'Valores', 'tlpacifico' ); ?></h3>
                                <p class="g-color--white-opacity"><?php _e( 'Solidaridad - Compromiso<br>Responsabilidad - Honestidad<br>Puntualidad - Ética - Confianza<br>Respeto- Integridad', 'tlpacifico' ); ?></p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->
                </ul>

                <div class="g-text-center--xs">
                    <a href="#js__scroll-to-appointment" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-40--xs g-color--red"><?php _e( 'Contáctanos', 'tlpacifico' ); ?></a>
                </div>
            </div>
        </div>
        <!-- End Process -->


        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <h2 class="g-text-center--xs textoBold g-margin-b-50--xs"><?php _e( 'Ventajas Competitivas', 'tlpacifico' ); ?></h2>
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/PresenciaIntrnacional.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs g-font-weight--700"><?php _e( 'PRESENCIA INTERNACIONAL', 'tlpacifico' ); ?></h4>
                            <p class="g-color--white-opacity g-font-weight--700"><?php _e( 'Corporativo con experiencia en las regiones comerciales más competitivas del mundo.', 'tlpacifico' ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ServicioPersonalizado.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs g-font-weight--700"><?php _e( 'SERVICIO PERSONALIZADO', 'tlpacifico' ); ?></h4>
                            <p class="g-color--white-opacity g-font-weight--700"><?php _e( 'Especializados en brindar excelente servicio marítimo en la zona del Pacifíco, Asia y Sudamérica incluyendo despacho aduanal.', 'tlpacifico' ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/PatentePropia.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs g-font-weight--700"><?php _e( 'PATENTE PROPIA', 'tlpacifico' ); ?></h4>
                            <p class="g-color--white-opacity g-font-weight--700"><?php _e( 'Oficinas propias en Lázaro Cárdenas, Guadalajara, CDMX, Progreso y Laredo.', 'tlpacifico' ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

	</main>

<?php get_footer('about-us'); ?>