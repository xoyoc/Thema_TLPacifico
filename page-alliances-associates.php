<?php get_header('alianzas-y-asociados'); ?>

	<main role="main">
        <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(<?php echo get_template_directory_uri(); ?>/img/AlianzasYAsociados-Slider.jpg) 50% 50% no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--1 g-margin-b-30--xs textoBold"><?php _e( 'Alianzas & <br>Asociaciones', 'tlpacifico' ); ?></h1>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Alienza -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs textoBold"><?php _e( 'Alianzas estratégicas <br> para una logística eficiente', 'tlpacifico' ); ?></h2>
            <div class="row g-margin-b-50--xs colm-flex">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--sm grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/Clearship.png" alt="Logotipo Alianza">
                </div>
                <div class="col-sm-4 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/HutchisonPorts.png" alt="Logotipo Alianza">
                </div>
                <div class="col-sm-4 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/Agunsa.png" alt="Logotipo Alianza">
                </div>                
            </div>
            <div class="row g-margin-b-50--xs colm-flex">
                <div class="col-sm-2 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/KansasCity.png" alt="Logotipo Alianza">
                </div>
                <div class="col-sm-4 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/CTS.png" alt="Logotipo Alianza">
                </div>
                <div class="col-sm-3 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/Louniko.png" alt="Logotipo Alianza">
                </div>
                <div class="col-sm-3 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/MasterShipping.png" alt="Logotipo Alianza">
                </div>                
            </div>
            <div class="row g-margin-b-50--xs colm-flex">
                <div class="col-sm-4 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/UnionCargo.png" alt="">
                </div>
                <div class="col-sm-4 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/LazaroCardenasPC.png" alt="">
                </div>
                <div class="col-sm-3 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/alianza/OverSeas.png" alt="">
                </div>
            </div>
        </div>
        <!-- Fin Alienza -->

        <!-- Navieras -->
        <div class="s-faq fondoRojo">
            <div class="container g-padding-y-100--xs">
                <h3 class="g-font-size-32--xs g-font-size-36--md g-font-weight--700 g-text-center--xs g-margin-b-80--xs g-color--white-opacity textoBold"><?php _e( 'Principales Navieras', 'tlpacifico' ); ?></h3>
                <div class="row g-margin-b-50--xs colm-flex">
                    <div class="col-sm-4" id="HapagLloyd"></div>
                    <div class="col-sm-2" id="CMACGM"></div>
                    <div class="col-sm-4" id="HamburgSud"></div>
                    <div class="col-sm-2" id="Mol"></div>
                </div>
                <div class="row colm-flex">
                    <div class="col-sm-4" id="Evergreen"></div>
                    <div class="col-sm-2" id="MSC"></div>
                    <div class="col-sm-2" id="Cosco"></div>
                    <div class="col-sm-4" id="SeaLand"></div>
                </div>
            </div>
        </div>
        <!-- Fin Navieras -->

        <!-- Asociados -->
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <h3 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs textoBold"><?php _e( 'Asociaciones', 'tlpacifico' ); ?></h3>
            <div class="row colm-flex">
                <div class="col-md-2 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Comce.png" alt="Logotipo de asociacion">
                </div>
                <div class="col-md-3 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Amanac.png" alt="Logotipo de asociacion">
                </div>
                <div class="col-md-2 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/asociados/Caarem.png" alt="Logotipo de asociacion">
                </div>
                <div class="col-md-2 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/asociados/MexicoChamber.png" alt="Logotipo de asociacion">
                </div>
                <div class="col-md-3 grises">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/asociados/ILPG.png" alt="Logotipo de asociacion">
                </div>
            </div>
        </div>
        <!-- Fin Asociados -->
        <!--========== END PAGE CONTENT ==========-->

	</main>

<?php get_footer(); ?>
