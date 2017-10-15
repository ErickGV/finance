@extends('layouts.base')

@section('content')

<section id="fh5co-home" data-section="home" style="background-image: url(/elate/images/dolares.jpg);" data-stellar-background-ratio="0.5">
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="to-animate"> ¿Qué esperas para cambiar tus dólares? </h1>
                        <h2 class="to-animate"> 
                            Comunícate con nosotros para confirmar tu operación
                        </h2>
                    </div>
                </div><br>
                {{Form::open(['route' => ['home.store'], 'id'=>'formSuggestion'])}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="to-animate form-group" style="margin-bottom: 3px;">
                            <select name="calculator" class="form-control calculator" id="currency" style="background-color: #eeeeee; border: 1px solid rgba(0, 0, 0, 0.1);">
                                <option value="1">ENVÍA($) - RECIBE(S/)</option>
                                <option value="2">ENVÍA(S/) - RECIBE($)</option>
                            </select>
                        </div>
                        <div class="to-animate form-group" style="margin-bottom: 3px;">
                            <div class="input-group">
                                <input style="background-color: #eeeeee; padding: 10px 8px;" class="form-control calculator" id="usdAmount" type="text" name="sendAmount" placeholder="0.000" required="" maxlength="10" >
                                <span class="input-group-addon" style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;">USD</span>
                            </div> 
                        </div>
                        <div class="to-animate form-group ">
                            <div class="input-group">
                                <input style="background-color: #eeeeee; padding: 10px 8px;" class="form-control calculator" id="penAmount" type="text" name="receivedAmount" placeholder="0.000" required="" maxlength="10">
                                <span class="input-group-addon" style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;">PEN</span>
                            </div>  
                        </div>    
                        <p style="color: rgba(255, 255, 255, 0.8);" id="priceText" class="to-animate">
                        </p>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-2"> 
                       
                    </div>  
                    <div class="to-animate col-lg-8 text-center">                                    
                        {{Form::submit('Registrar operación', ['class'=>'btn btn-primary btn-lg'])}}                                  
                    </div>
                </div>
                {{Form::close()}} 
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>

<section id="fh5co-steps" data-section="steps" style="background-image: url(/elate/images/dolares.jpg);" data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-left" style="margin-bottom: 0px !important;">
                <h2 class=" left-border to-animate">¿Cómo funciona?</h2>
                <div class="row">
                    <div class="col-md-8 subtext to-animate">
                        <h3>Cambia tu dinero en tres simples pasos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 fh5co-steps to-animate">
                <i class="icon to-animate-3 icon-edit"></i>
                <h3>1. Cotiza</h3>
                <p>nuestro tipo de cambio, compáralo y asegúrate de ahorrar con nostros</p>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-steps to-animate">
                <i class="icon to-animate-3 icon-dollar"></i>
                <h3>2. Envía</h3>
                <p>el monto indicado a nuestras cuentas bancarias y confirma donde deseas recibir tu dinero.</p>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-steps to-animate">
                <i class="icon to-animate-3 icon-check"></i>
                <h3>3. Recibe</h3>
                <p>el monto cambiado en tu cuenta bancaria o tarjeta de crédito que nos indiques.</p>
            </div>
            <div class="clearfix visible-sm-block"></div>
        </div>
    </div>
</section>

<section id="fh5co-intro" data-section="channels" style="padding: 11em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-left">
                <h2 class=" left-border to-animate">Canales de atención</h2>
                <div class="row">
                    <div class="col-md-8 subtext to-animate">
                        <h3>Cotiza y comunícate con nosotros para realizar tu operación</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-bottom-padded-lg">
            <div class="fh5co-block to-animate" style="background-color: white;">
                <div class="overlay-darker"></div>
                <div class="overlay"></div>
                <div class="fh5co-text">
                    <i class="fh5co-intro-icon icon-whatsapp"></i>
                    <h2>Whatsapp</h2>
                    <p>Escríbenos directamente a nuestros números y cambia tu dinero desde ahora.</p>
                </div>
            </div>
            <div class="fh5co-block to-animate" style="background-color: white;">
                <div class="overlay-darker"></div>
                <div class="overlay"></div>
                <div class="fh5co-text">
                    <i class="fh5co-intro-icon icon-facebook"></i>
                    <h2>Facebook</h2>
                    <p>Ingresa a nuestro fanpage y entérate de nuestras noticias y eventos compartidos.</p>
                </div>
            </div>
            <div class="fh5co-block to-animate" style="background-color: white;">
                <div class="overlay-darker"></div>
                <div class="overlay"></div>
                <div class="fh5co-text">
                    <i class="fh5co-intro-icon icon-envelope"></i>
                    <h2>Email</h2>
                    <p>Nuestro buzón de atención absolverá en breve todas tus consultas y requerimientos.</p>
                </div>
            </div>
            <div id="contactBtn" class="to-animate col-md-7 col-md-offset-5">
                <a href="#" data-nav-section="contact" class="to-animate btn btn-primary btn-lg btn-color" style="background-color: #329998;"><span>Contáctanos</span></a>
            </div>
        </div>
    </div>
</section>
    


<section id="fh5co-testimonials" data-section="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate">Clientes</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        <h3>Compartimos algunos testimonios de nuestros principales clientes.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box-testimony">
                    <blockquote class="to-animate-2">
                        <p>&ldquo;Excelente atención, responden nuestras consultas con rapidez. El tiempo de atención es muy bueno!!&rdquo;</p>
                    </blockquote>
                    <div class="author to-animate">
                        <figure><img src="/elate/images/user1.png" alt="Pedro Valdivia"></figure>
                        <p>
                        Pedro Valdivia<span class="subtext">Director</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-testimony">
                    <blockquote class="to-animate-2">
                        <p>&ldquo;El servicio online me parece una muy buena idea, evita exponernos a la inseguridad de la calle. Excelente!&rdquo;</p>
                    </blockquote>
                    <div class="author to-animate">
                        <figure><img src="/elate/images/user2.png" alt="Person"></figure>
                        <p>
                        Juan Carlos Berrocal <span class="subtext">Ingeniero</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box-testimony">
                    <blockquote class="to-animate-2">
                        <p>&ldquo;Al utilizar este servicio me ahorro mucho tiempo y me deja utilizar mejor mi tiempo para mis labores. &rdquo;</p>
                    </blockquote>
                    <div class="author to-animate">
                        <figure><img src="/elate/images/user3.png" alt="Person"></figure>
                        <p>
                        Fernando Rojas<span class="subtext">Corredor de seguros</span>
                        </p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>


<section id="fh5co-services" data-section="services" style="background-image: url(/elate/images/dolares.jpg);" data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-left">
                <h2 class=" left-border to-animate">Beneficios</h2>
                <div class="row">
                    <div class="col-md-8 subtext to-animate">
                        <h3>¿No conoces nuestros beneficios aún? ¡Qué esperas!</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                <i class="icon to-animate-2 icon-monitor"></i>
                <h3>BANCA ONLINE</h3>
                <p>Podrás acceder desde cualquier dispositivo conectado a internet, solo necesitamos tu cuenta origen y destino!</p>
            </div>
            <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                <i class="icon to-animate-2 icon-exchange"></i>
                <h3>TIPO DE CAMBIO</h3>
                <p>Tenemos el mejor tipo de cambio del mercado a un solo click, compruébalo y no pierdas esta oportunidad.</p>
            </div>

            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                <i class="icon to-animate-2 icon-clock2"></i>
                <h3>AHORRE TIEMPO</h3>
                <p>¿Ir al Banco? ¿Ir a la casa de cambio? Dedica tu tiempo a lo que más te gusta hacer y deja el resto a nosotros.</p>
            </div>
            <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                <i class="icon to-animate-2 icon-lock2"></i>
                <h3>SEGURO</h3>
                <p>Siéntete en confianza y cómodo con nuestra plataforma. Estamos respaldados por el cumplimiento de las normas regidas por el estado.</p>
            </div>
            
        </div>
    </div>
</section>

<!--<section id="fh5co-about" data-section="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate">Equipo</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        <h3>Conoce al equipo de fastransfer.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-person text-center to-animate">
                    <figure><img src="/elate/images/Erick.png" alt="Image"></figure>
                    <h3>Diego Gonzales</h3>
                    <span class="fh5co-position">Ingeniero Informático</span>
                    <p>Ingeniero informático titulado en la Pontifica Universidad Católica del Perú, colegiado, con más de 9 años de
experiencia en sistemas SAP en sistemas logísticos, comerciales.</p>

                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-person text-center to-animate">
                    <figure><img src="/elate/images/Erick.png" alt="Image"></figure>
                    <h3>Carlos Gonzales</h3>
                    <span class="fh5co-position">Ingeniero Electrónico</span>
                    <p>Ingeniero electrónico titulado en la Pontifica Universidad Católica del Perú, colegiado, con años de experiencia en la gestión de servicios.</p>

                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-person text-center to-animate">
                    <figure><img src="/elate/images/Erick.png" alt="Image"></figure>
                    <h3>Erick Gonzales</h3>
                    <span class="fh5co-position">Ingeniero Informático</span>
                    <p>Bachiller informático de la Pontifica Universidad Católica del Perú. Con experiencia en proyectos de seguridad de la información y conocimiento en banca online.</p>

                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>-->

<section id="fh5co-counters" style="background-image: url(/elate/images/dolares.jpg);" data-stellar-background-ratio="0.5">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center to-animate">
                <h2>Nuestros números</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-counter to-animate">
                    <i class="fh5co-counter-icon icon-bank to-animate-2"></i>
                    <span class="fh5co-counter-number js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50">4</span>
                    <span class="fh5co-counter-label">BANCOS</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-counter to-animate">
                    <i class="fh5co-counter-icon icon-layers2 to-animate-2"></i>
                    <span class="fh5co-counter-number js-counter" data-from="0" data-to="503" data-speed="5000" data-refresh-interval="50">503</span>
                    <span class="fh5co-counter-label">TRANSFERENCIAS REALIZADAS</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fh5co-counter to-animate">
                    <i class="fh5co-counter-icon icon-users to-animate-2"></i>
                    <span class="fh5co-counter-number js-counter" data-from="0" data-to="40" data-speed="5000" data-refresh-interval="50">40</span>
                    <span class="fh5co-counter-label">CLIENTES SATISFECHOS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="fh5co-contact" data-section="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate">¿Preguntas o comentarios?</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        <h3>¿Quieres saber más de nosotros? ¿Deseas conocer nuestro tipo de cambio especial? Déjanos tus datos.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 to-animate">
                <h3>Información de contacto</h3>
                <ul class="fh5co-contact-info">
                    <li><i class="icon-phone"></i> 949 565 220 | 960 136 054 | 954 604 372</li>
                    <li><i class="icon-envelope"></i>informes@ftransfer.pe</li>
                    <li><i class="icon-globe"></i> <a href="http://www.ftransfer.pe/" target="_blank">ftransfer.pe</a></li>
                    <li><i class="icon-twitter"></i><a target="_blank" href="https://twitter.com/FastransferPeru">@FastransferPeruSAC</a></li>
                    <li><i class="icon-facebook"></i><a href="https://www.facebook.com/FastransferPeruSAC" target="_blank">@FastransferPeruSAC</a></li>
                </ul>
            </div>
            <form id="form-contact" action="message.php" method="post">
                <div class="col-md-6 to-animate">
                    <h3>Contáctanos</h3>
                    <div class="form-group ">
                        <label for="name" class="sr-only">Name</label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="Nombre" required="" maxlength="50"/>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="sr-only">Email</label>
                        <input class="form-control" id="email" type="email" name="email" placeholder="Correo" required="" maxlength="50">
                    </div>
                    <div class="form-group ">
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message-area" name="message" placeholder="Mensaje" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group ">
                        <input class="btn btn-primary btn-lg" value="Enviar" type="submit">
                    </div>
                    <div class="form-group ">
                        <div id="alert-div" class="alert">
                            <strong class="answer"></strong><span class="alert-message"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</section>
@endsection
