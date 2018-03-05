<?php get_header('contacto'); ?>

<?php 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $asunto = "Correo de formulario de contacto de '$nombre'";
    $para = "sistemas@aaalac.mx";
    $encabezados = "MIME-Version 1.0"."\r\n";
    $encabezados .= "Content-type:text/html;charset=UTF-8"."\r\n";
    $encabezados = "From:<$email>\r\n";
 ?>

    <main role="main">

        <!--========== PAGE CONTENT ==========-->
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--red">
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs"><?php _e( 'Contacto', 'tlpacifico' ); ?></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">¡<?php _e( 'Escríbenos', 'tlpacifico' ); ?>!</h2>
                    <p class="g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs"><?php _e( 'En TL Pacifíco nos encantaría saber de ti.', 'tlpacifico' ); ?></p>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-font-weight--700 g-color--white-opacity">info@tlpacifico.com.mx</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php _e( 'Dirección', 'tlpacifico' ); ?></h4>
                            <p class="g-color--white-opacity g-font-weight--700">Calle Salvador Madariaga 5277,<br>Col. Jardínes Universidad<br>C.P. 45110, Zapopan, Jalisco.</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php _e( 'Llamar', 'tlpacifico' ); ?></h4>
                            <p class="g-color--white-opacity g-font-weight--700">Tels. (33) 3628 0717 <br>2304 3668</p>
                        </div>
                    </div>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md" action="" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v7__input" placeholder="* <?php _e( 'Nombre', 'tlpacifico' ); ?>" id="nombre">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v7__input" placeholder="* <?php _e( 'Email', 'tlpacifico' ); ?>" id="email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v7__input" placeholder="* <?php _e( 'Teléfono', 'tlpacifico' ); ?>" id="telefono">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v7__input" rows="5" placeholder="* <?php _e( 'Tu mensaje', 'tlpacifico' ); ?>"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md botonTrans g-radius--50 g-padding-x-70--xs g-margin-b-20--xs"><?php _e( 'Enviar', 'tlpacifico' ); ?></button>
                    </div>
                    <?php 
                        if (isset($_PORT['submit']))
                        {
                            
                        }
                     ?>
                </form>
            </div>
         
        </div>
        <!-- End Feedback Form -->
        
        
        <!-- Google Map -->
        <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

	</main>

<?php get_footer('contacto'); ?>
