<?php get_header(); ?>

	<main role="main">

        <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(img/Cotizaciones-Slider.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-20--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--1 g-margin-b-10--xs textoBold">Cotizaciones<br>a tu medida</h1>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- Cotizaciones -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <h3 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs text-center">TL PACIFÍCO</h3>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-10--xs textoBold">Tu mejor opción en <br> logística y gestión de carga</h2>
            <p class="parrafoCoti g-padding-y-20--xs textoCenter">¿Necesitas cotizar importaciones y exportaciones?<br>Completa los siguientes datos con tus requerimientos.</p>
            <form action="" class="center-block g-width-500--sm g-width-550--md">
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <input type="text" name="nombre" class="form-control s-form-v3__input" placeholder="* Nombre">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="empresa" class="form-control s-form-v3__input" placeholder="* Empresa">
                    </div>
                </div>
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* Email">
                    </div>
                    <div class="col-md-6">
                        <input type="phone" name="telefono" class="form-control s-form-v3__input" placeholder="* Telefono">
                    </div>
                </div>
                <p>Mercancía</p>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="Origen de la mercancía">
                   </div>
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="Destino de la mercancía">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                   <div class="col-md-12">
                       <input type="text" class="form-control s-form-v3__input" placeholder="Peso Bruto KG">
                   </div> 
                </div>
                <div class="row g-margin-b-50--xs">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label for="maritima">
                                <input type="checkbox" name="maritima" value="maritima" id="maritima" class="maritima"> Marítima
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="terrestre">
                                <input type="checkbox" name="terrestre" value="terrestre" id="terrestre" class="terrestre">Marítima + Terrestre
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="aereo">
                                <input type="checkbox" name="aereo" value="aereo" id="aereo" class="aereo">
                                Aéreo
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="visualidad" id="gmaritima">
                            <p>Detalles Marítimo</p>
                            <input type="checkbox" value="20DC"> 20 DC<br>
                            <input type="checkbox" value="40DC"> 40 DC<br>
                            <input type="checkbox" value="40HQ"> 40 HQ<br>
                        </fieldset>
                        <fieldset class="visualidad" id="gterrestre">
                            <p>Detalles Terrestres</p>
                            <input type="checkbox" value="20DC"> 20 DC<br>
                            <input type="checkbox" value="40DC"> 40 DC<br>
                            <input type="checkbox" value="40HQ"> 40 HQ<br>
                            <p>Modalidad Terrestre</p>
                            <input type="checkbox" value="tren"> Tren<br>
                            <input type="checkbox" value="tren_camion"> Tren + Camión<br>
                            <input type="checkbox" value="todo_camioon"> Todo camión<br>                            
                        </fieldset>
                        <fieldset class="visualidad" id="gaereo">
                            <p>Detalles Aéreo</p>
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="Alto">
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="Ancho">
                            <input type="text" class="form-control s-form-v3__input g-width-90--xs" placeholder="Largo">
                        </fieldset>                                                
                    </div>
                </div>
                <div class="row g-margin-b-50--xs">
                    <input type="checkbox" name="acepta" id="acepta"> Acepto <a href="aviso.html">aviso de privacidad</a>
                </div>
                <div class="g-text-center--xs">
                    <button type="submit" class="text-uppercase s-btn s-btn--md botonRojo g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Enviar</button>
                </div>                
            </form>
        </div>
        <!-- Fin Cotizaciones -->

        <!--========== END PAGE CONTENT ==========-->

	</main>

<?php get_footer(); ?>
