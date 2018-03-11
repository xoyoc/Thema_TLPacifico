<?php get_header('cotizaciones'); ?>

    <main role="main">

        <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Cotizaciones-Slider.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-20--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--1 g-margin-b-10--xs textoBold"><?php _e( 'Cotizaciones<br>a tu medida', 'tlpacifico' ); ?></h1>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- Cotizaciones -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <h3 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs text-center">TL PACIFÍCO</h3>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-10--xs textoBold"><?php _e( 'Tu mejor opción en <br> logística y gestión de carga', 'tlpacifico' ); ?></h2>
            <p class="parrafoCoti g-padding-y-20--xs textoCenter"><?php _e( '¿Necesitas cotizar importaciones y exportaciones?<br>Completa los siguientes datos con tus requerimientos.', 'tlpacifico' ); ?></p>
            <form action="" class="center-block g-width-500--sm g-width-550--md">
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <input type="text" name="nombre" class="form-control s-form-v3__input" placeholder="* <?php _e( 'Nombre', 'tlpacifico' ); ?>">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="empresa" class="form-control s-form-v3__input" placeholder="* <?php _e( 'Empresa', 'tlpacifico' ); ?>">
                    </div>
                </div>
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* <?php _e( 'Email', 'tlpacifico' ); ?>">
                    </div>
                    <div class="col-md-6">
                        <input type="phone" name="telefono" class="form-control s-form-v3__input" placeholder="* <?php _e( 'Telefono', 'tlpacifico' ); ?>">
                    </div>
                </div>
                <p><?php _e( 'Mercancía', 'tlpacifico' ); ?></p>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Origen de la mercancía', 'tlpacifico' ); ?>">
                   </div>
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Destino de la mercancía', 'tlpacifico' ); ?>">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Peso Bruto KG', 'tlpacifico' ); ?>">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label for="maritima">
                                <input type="checkbox" name="maritima" value="maritima" id="maritima" class="maritima"> <?php _e( 'Marítima', 'tlpacifico' ); ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="terrestre">
                                <input type="checkbox" name="terrestre" value="terrestre" id="terrestre" class="terrestre"><?php _e( 'Marítima + Terrestre', 'tlpacifico' ); ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="aereo">
                                <input type="checkbox" name="aereo" value="aereo" id="aereo" class="aereo">
                                <?php _e( 'Aéreo', 'tlpacifico' ); ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="visualidad" id="gmaritima">
                            <p><?php _e( 'Detalles Marítimo', 'tlpacifico' ); ?></p>
                            <input type="checkbox" value="20DC"> 20 DC<br>
                            <input type="checkbox" value="40DC"> 40 DC<br>
                            <input type="checkbox" value="40HQ"> 40 HQ<br>
                        </fieldset>
                        <fieldset class="visualidad" id="gterrestre">
                            <p><?php _e( 'Detalles Terrestres', 'tlpacifico' ); ?></p>
                            <input type="checkbox" value="20DC"> 20 DC<br>
                            <input type="checkbox" value="40DC"> 40 DC<br>
                            <input type="checkbox" value="40HQ"> 40 HQ<br>
                            <p><?php _e( 'Modalidad Terrestre', 'tlpacifico' ); ?></p>
                            <input type="checkbox" value="tren"> <?php _e( 'Tren', 'tlpacifico' ); ?><br>
                            <input type="checkbox" value="tren_camion"> <?php _e( 'Tren + Camión', 'tlpacifico' ); ?><br>
                            <input type="checkbox" value="todo_camioon"> <?php _e( 'Todo camión', 'tlpacifico' ); ?><br>                            
                        </fieldset>
                        <fieldset class="visualidad" id="gaereo">
                            <p><?php _e( 'Detalles Aéreo', 'tlpacifico' ); ?></p>
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Alto', 'tlpacifico' ); ?>">
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Ancho', 'tlpacifico' ); ?>">
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Largo', 'tlpacifico' ); ?>">
                        </fieldset>                                                
                    </div>
                </div>
                <div class="row g-margin-b-50--xs">
                    <input type="checkbox" name="acepta" id="acepta"> <?php _e( 'Acepto', 'tlpacifico' ); ?> <a href="aviso.html"><?php _e( 'aviso de privacidad', 'tlpacifico' ); ?></a>
                </div>
                <div class="g-text-center--xs">
                    <button type="submit" class="text-uppercase s-btn s-btn--md botonRojo g-radius--50 g-padding-x-70--xs g-margin-b-20--xs"><?php _e( 'Enviar', 'tlpacifico' ); ?></button>
                </div>                
            </form>
        </div>
        <!-- Fin Cotizaciones -->
        <!--========== END PAGE CONTENT ==========-->

	</main>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $("#maritima").on( "change", function() {
                if ($('#maritima').is(':checked') ) {
                    $('#gmaritima').show(); //muestro mediante id
                    $("input#terrestre").attr("disabled","true");
                    $("input#aereo").attr("disabled","true");
                } else {
                    $("input#terrestre").removeAttr('disabled');
                    $("input#aereo").removeAttr('disabled');
                    $('#gmaritima').hide(); //muestro mediante id                   
                }
            });
            $("#terrestre").on( "change", function() {
                if ($('#terrestre').is(':checked') ) {
                    $('#gterrestre').show(); //muestro mediante id
                    $("input#maritima").attr("disabled","true");
                    $("input#aereo").attr("disabled","true");
                } else {
                    $("input#maritima").removeAttr('disabled');
                    $("input#aereo").removeAttr('disabled');
                    $('#gterrestre').hide(); //muestro mediante id                   
                }
            });
            $("#aereo").on( "change", function() {
                if ($('#aereo').is(':checked') ) {
                    $('#gaereo').show(); //muestro mediante id
                    $("input#terrestre").attr("disabled","true");
                    $("input#maritima").attr("disabled","true");
                } else {
                    $("input#terrestre").removeAttr('disabled');
                    $("input#maritima").removeAttr('disabled');
                    $('#gaereo').hide(); //muestro mediante id                   
                }
            });                
         });                         
    </script>

<?php get_footer('cotizaciones'); ?>
