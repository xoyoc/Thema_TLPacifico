<?php
/*
 * Template Name: Contacto
 */
 
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>
 
<?php get_header('contacto');?>

<div class="g-position--relative g-bg-color--red">
  <div class="container g-container--md g-padding-y-125--xs">
    <?php if (have_posts()) :
      while (have_posts()) : the_post();?>
        <div class="row">
          <div class="col-md-12">
            <article id="post-<?php the_ID();?>" <?php post_class();?>>
              <!-- Imprimimos primero el título de la página y el contenido -->
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
              <div class="entry-content">
                <?php the_content();?>
              </div>
   
              <form id="contact-form" name="contact-form" action="<?php echo get_permalink();?>#contact-form" method="post" class="center-block g-width-500--sm g-width-550--md">
                <?php //Comprobamos si el formulario ha sido enviado
                if (isset( $_POST['btn-submit'] )) {
                  //Creamos una variable para almacenar los errores
                  global $reg_errors;
                  $reg_errors = new WP_Error;
   
                  //Recogemos en variables los datos enviados en el formulario y los sanitizamos.
                  //Si detectamos algún error, podremos más abajo rellenar los campos del formulario con los datos enviados para no tener que empezar el formulario de cero
                  $f_name = sanitize_text_field($_POST['f_name']);
                  $f_email = sanitize_email($_POST['f_email']);
                  $f_phone = sanitize_text_field($_POST['f_phone']);
                  $f_message = sanitize_text_field($_POST['f_message']);
   
                  //El campo Nombre es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                  if ( empty( $f_name ) ) {
                    $reg_errors->add("empty-name", "El campo nombre es obligatorio");
                  }
                  //El campo Email es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                  if ( empty( $f_email ) ) {
                    $reg_errors->add("empty-email", "El campo e-mail es obligatorio");
                  }
                  //Comprobamos que el dato tenga formato de e-mail con la función de WordPress "is_email" y en caso contrario creamos un registro de error
                  if ( !is_email( $f_email ) ) {
                    $reg_errors->add( "invalid-email", "El e-mail no tiene un formato válido" );
                  }
                  //El campo Mensaje es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                  if ( empty( $f_message ) ) {
                    $reg_errors->add("empty-message", "El campo consulta es obligatorio");
                  }
   
                  //Si no hay errores enviamos el formulario
                  if (count($reg_errors->get_error_messages()) == 0) {
                    //Destinatario
                    $recipient = "info@tlpacifico.com.mx";
   
                    //Asunto del email
                    $subject = 'Formulario de contacto ' . get_bloginfo( 'name' );
   
                    //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
                    $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";
   
                    //Montamos el cuerpo de nuestro e-mail
                    $message = "Nombre: " . $f_name . "<br>";
                    $message .= "E-mail: " . $f_email . "<br>";
                    $message .= "Teléfono: " . $f_phone . "<br>";
                    $message .= "Mensaje: " . nl2br($f_message) . "<br>";
                                     
                    //Filtro para indicar que email debe ser enviado en modo HTML
                    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                                      
                    //Por último enviamos el email
                    $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);
   
                    //Si el e-mail se envía correctamente mostramos un mensaje y vaciamos las variables con los datos. En caso contrario mostramos un mensaje de error
                    if ($envio) {
                      unset($f_name);
                      unset($f_email);
                      unset($f_phone);
                      unset($f_message);?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php _e( '¡Muchas gracias por escribirnos!<br>Pronto nos pondremos en contacto contigo para resolverte todas tus dudas.<br>¡Saludos!', 'tlpacifico' ); ?>
                      </div>
                    <?php }else {?>
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php _e( 'Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros escribiendo un mail a "info@tlpacifico.com.mx"', 'tlpacifico' ); ?>
                      </div>
                    <?php }
                  }
                }?>
   
                <div class="form-group g-margin-b-30--xs">
                  <input type="text" id="f_name" name="f_name" class="form-control s-form-v7__input" value="<?php echo $f_name;?>" placeholder="* <?php _e( 'Nombre', 'tlpacifico' ); ?>" required aria-required="true">
   
                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-name")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-name");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
   
                <div class="form-group g-margin-b-30--xs">
                  <input type="email" id="f_email" name="f_email" class="form-control s-form-v7__input" value="<?php echo $f_email;?>" placeholder="* <?php _e( 'Email', 'tlpacifico' ); ?>" required aria-required="true">
   
                  <?php //Comprobamos si hay errores en la validación del campo E-mail
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-email")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-email");?></p>
                    </div>
                    <?php }
                  }
   
                  //Comprobamos si hay errores en el formato del campo E-mail
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("invalid-email")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("invalid-email");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
   
                <div class="form-group g-margin-b-30--xs">
                  <input type="tel" id="f_phone" name="f_phone" class="form-control s-form-v7__input" value="<?php echo $f_phone;?>" placeholder="* <?php _e( 'Teléfono', 'tlpacifico' ); ?>">
                </div>
   
                <div class="form-group g-margin-b-80--xs">
                  <textarea id="f_message" name="f_message" rows="5" class="form-control s-form-v7__input" placeholder="* <?php _e( 'Tu mensaje', 'tlpacifico' ); ?>" required aria-required="true"><?php echo $f_message;?></textarea>
   
                  <?php //Comprobamos si hay errores en la validación del campo Mensaje
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-message")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-message");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
   
                <button type="submit" id="btn-submit" name="btn-submit" class="text-uppercase s-btn s-btn--md botonTrans g-radius--50 g-padding-x-70--xs g-margin-b-20--xs"><?php _e( 'Enviar', 'tlpacifico' ); ?></button>
              </form>
            </article>
          </div>
        </div>
      <?php endwhile;
    endif;?>
  </div>
  <!-- Google Map -->
  <section class="s-google-map">
      <div id="js__google-container" class="s-google-container g-height-400--xs">
        
      </div>
  </section>
  <!-- End Google Map -->  
</div>
 
<?php get_footer('contacto');?>

