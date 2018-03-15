<?php
/*
 * Template Name: Contacto
 */
 
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>
 
<?php get_header('request-a-quote');?>

<div class="js__parallax-window" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Cotizaciones-Slider.jpg) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-20--xs">
        <div class="g-margin-b-60--xs">
            <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--1 g-margin-b-10--xs textoBold"><?php _e( 'Cotizaciones<br>a tu medida', 'tlpacifico' ); ?></h1>
        </div>
    </div>
</div>


<div class="g-position--relative">
  <div class="container g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <?php if (have_posts()) :
      while (have_posts()) : the_post();?>
        <div class="row">
          <div class="col-md-12">
            <article id="post-<?php the_ID();?>" <?php post_class();?>>
              <!-- Imprimimos primero el título de la página y el contenido -->
              
              <h3 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs text-center">TL PACIFÍCO</h3>
              <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-10--xs textoBold"><?php _e( 'Tu mejor opción en <br> logística y gestión de carga', 'tlpacifico' ); ?></h2>
              <p class="parrafoCoti g-padding-y-20--xs textoCenter"><?php _e( '¿Necesitas cotizar importaciones y exportaciones?<br>Completa los siguientes datos con tus requerimientos.', 'tlpacifico' ); ?></p>
              
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
                  $f_orgmer = sanitize_text_field($_POST['f_orgmer']);
                  $f_desmer = sanitize_text_field($_POST['f_desmer']);
                  $f_desmer = sanitize_text_field($_POST['f_desmer']);
                  $f_peso = sanitize_text_field($_POST['f_peso']);
                  $f_modalidad = sanitize_text_field($_POST['f_modalidad']);
                  $f_detmodalidad = sanitize_text_field($_POST['f_detmodalidad']);
                  $f_alto = sanitize_text_field($_POST['f_alto']);
                  $f_ancho = sanitize_text_field($_POST['f_ancho']);
                  $f_largo = sanitize_text_field($_POST['f_largo']);
                  // $f_message = sanitize_text_field($_POST['f_message']);
   
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
                  // if ( empty( $f_message ) ) {
                  //   $reg_errors->add("empty-message", "El campo consulta es obligatorio");
                  // }
   
                  //Si no hay errores enviamos el formulario
                  if (count($reg_errors->get_error_messages()) == 0) {
                    //Destinatario
                    $recipient = "pricing@tlpacifico.com.mx";
   
                    //Asunto del email
                    $subject = 'Formulario de cotizaciones ' . get_bloginfo( 'name' );
   
                    //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
                    $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";
   
                    //Montamos el cuerpo de nuestro e-mail
                    $message = "Nombre: " . $f_name . "<br>";
                    $message .= "E-mail: " . $f_email . "<br>";
                    $message .= "Teléfono: " . $f_phone . "<br>";
                    $message .= "Mercancia" . "<br>";
                    $message .= "Org Mercnacia: " . $f_orgmer . "<br>";
                    $message .= "Des Mercancia: " . $f_desmer . "<br>";
                    $message .= "Peso Bruto KG: " . $f_peso . "<br>";
                    $message .= "Modalidad: " . $f_modalidad . "<br>";
                    if($f_modalidad == "aereo"){
                      $message .= "Detalle Mod: "."Alto ->". $f_alto ." Ancho ->". $f_ancho ." Largo ->". $f_largo. "<br>";
                    }
                    else{
                      $message .= "Detalle Mod: " . $f_detmodalidad . "<br>";
                    }
                                     
                    //Filtro para indicar que email debe ser enviado en modo HTML
                    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                                      
                    //Por último enviamos el email
                    $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);
   
                    //Si el e-mail se envía correctamente mostramos un mensaje y vaciamos las variables con los datos. En caso contrario mostramos un mensaje de error
                    if ($envio) {
                      unset($f_name);
                      unset($f_email);
                      unset($f_phone);?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php _e( '¡Muchas gracias por contactarnos!<br>Ya estamos trabajando en tu cotización. En cuanto la tengamos, nos pondremos en contacto contigo.<br>¡Saludos!', 'tlpacifico' ); ?>
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
                  <input type="text" id="f_name" name="f_name" class="form-control s-form-v3__input" value="<?php echo $f_name;?>" placeholder="* <?php _e( 'Nombre', 'tlpacifico' ); ?>" required aria-required="true">
   
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
                  <input type="email" id="f_email" name="f_email" class="form-control s-form-v3__input" value="<?php echo $f_email;?>" placeholder="* <?php _e( 'Email', 'tlpacifico' ); ?>" required aria-required="true">
   
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
                  <input type="tel" id="f_phone" name="f_phone" class="form-control s-form-v3__input" value="<?php echo $f_phone;?>" placeholder="* <?php _e( 'Teléfono', 'tlpacifico' ); ?>">
                </div>
                <p><?php _e( 'Mercancía', 'tlpacifico' ); ?></p>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input name="f_orgmer" id="f_orgmer" type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Origen de la mercancía', 'tlpacifico' ); ?>" value="<?php echo $f_orgmer;?>">
                   </div>
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input name="f_desmer" id="f_desmer" type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Destino de la mercancía', 'tlpacifico' ); ?>" value="<?php echo $f_desmer;?>">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input name="f_peso" id="f_peso" type="text" class="form-control s-form-v3__input" placeholder="<?php _e( 'Peso Bruto KG', 'tlpacifico' ); ?>" value="<?php echo $f_peso;?>">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                      <fieldset id="f_modalidad" name="f_modalidad" value="<?php echo $f_modalidad;?>">
                        <div class="checkbox">
                            <label for="maritima">
                                <input name="f_modalidad" type="checkbox" value="maritima" id="maritima" class="maritima"> <?php _e( 'Marítima', 'tlpacifico' ); ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="terrestre">
                                <input name="f_modalidad" type="checkbox" value="terrestre" id="terrestre" class="terrestre"><?php _e( 'Marítima + Terrestre', 'tlpacifico' ); ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="aereo">
                                <input name="f_modalidad" type="checkbox" value="aereo" id="aereo" class="aereo">
                                <?php _e( 'Aéreo', 'tlpacifico' ); ?>
                            </label>
                        </div>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset name="f_detmodalidad" class="visualidad" id="gmaritima">
                            <p><?php _e( 'Detalles Marítimo', 'tlpacifico' ); ?></p>
                            <input name="f_detmodalidad" type="checkbox" value="20DC"> 20 DC<br>
                            <input name="f_detmodalidad" type="checkbox" value="40DC"> 40 DC<br>
                            <input name="f_detmodalidad" type="checkbox" value="40HQ"> 40 HQ<br>
                        </fieldset>
                        <fieldset name="f_detmodalidad" class="visualidad" id="gterrestre">
                            <p><?php _e( 'Detalles Terrestres', 'tlpacifico' ); ?></p>
                            <input name="f_detmodalidad" type="checkbox" value="20DC"> 20 DC<br>
                            <input name="f_detmodalidad" type="checkbox" value="40DC"> 40 DC<br>
                            <input name="f_detmodalidad" type="checkbox" value="40HQ"> 40 HQ<br>
                            <p><?php _e( 'Modalidad Terrestre', 'tlpacifico' ); ?></p>
                            <input name="f_detmodalidad" type="checkbox" value="tren"> <?php _e( 'Tren', 'tlpacifico' ); ?><br>
                            <input name="f_detmodalidad" type="checkbox" value="tren_camion"> <?php _e( 'Tren + Camión', 'tlpacifico' ); ?><br>
                            <input name="f_detmodalidad" type="checkbox" value="todo_camioon"> <?php _e( 'Todo camión', 'tlpacifico' ); ?><br>
                        </fieldset>
                        <fieldset class="visualidad" id="gaereo">
                            <p><?php _e( 'Detalles Aéreo', 'tlpacifico' ); ?></p>
                            <input name="f_alto" type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Alto', 'tlpacifico' ); ?>">
                            <input name="f_ancho" type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Ancho', 'tlpacifico' ); ?>">
                            <input name="f_largo" type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="<?php _e( 'Largo', 'tlpacifico' ); ?>">
                        </fieldset>                                                
                    </div>
                </div>
                <div class="row g-margin-b-50--xs">
                    <input type="checkbox" name="acepta" id="acepta" required aria-required="true"> <?php _e( 'Acepto', 'tlpacifico' ); ?> <a href="aviso.html"><?php _e( 'aviso de privacidad', 'tlpacifico' ); ?></a>
                </div>
                <button type="submit" id="btn-submit" name="btn-submit" class="text-uppercase s-btn s-btn--md botonRojo g-radius--50 g-padding-x-70--xs g-margin-b-20--xs"><?php _e( 'Enviar', 'tlpacifico' ); ?></button>
              </form>
            </article>
          </div>
        </div>
      <?php endwhile;
    endif;?>
  </div>
  
</div>
 
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

<?php get_footer('request-a-quote');?>
