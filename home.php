<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('layouts/head.template.php') ?>
</head>
<body style="background: none;">

  <div id="boton-boletos" class="position-fixed top-50 end-0 translate-middle-y z-3">
    <a href="#" class="btn btn-primary border-0 btn-lg" style="font-family: 'Poppins'; background-color: rgba(0, 0, 0, 0); background-image: url(<?php bloginfo('template_directory');?>/public/images/boton-vertical.png); background-size: 100% 100%; background-repeat: no-repeat; border-top-right-radius: 0; border-bottom-right-radius: 0;">
        <div class="row px-3 ">
            B<br>
            O<br>
            L<br>
            E<br>
            T<br>
            O<br>
            S<br>
        </div>
        
    </a>
  </div>

  <!-- INICIO / HEADER -->
  <div id="inicio" class="container-fluid section-wall-bg pb-5 px-0 pt-0">

    <!-- LOGO -->
    <div class="container-fluid ps-0">
      <div class="row">
        <div class="col-2">
          <img src="<?php bloginfo('template_directory');?>/public/images/logo.png" class="logo-img" alt="">
          
        </div>

        <div class="container col-8 d-none d-lg-block text-center">
          <div class="row align-items-end h-100 gx-3 menu-option">
            <div class="col">
              <a href="#tu-visita" class="link-light link-underline link-underline-opacity-0"><p class="h4">Planea tu visita</p></a>
            </div>
            <div class="col">
              <a href="#boletos" class="link-light link-underline link-underline-opacity-0"><p class="h4">Boletos</p></a>
            </div>
            <div class="col">
              <a href="#exposicion" class="link-light link-underline link-underline-opacity-0"><p class="h4">Exposición</p></a>
            </div>
            <div class="col">
              <a href="#contactanos" class="link-light link-underline link-underline-opacity-0"><p class="h4">Contacto</p></a>
            </div>
          
          </div>
        </div>

        <div class="container d-md-block d-lg-none col-10">
            <div class="row h-100">
              <div class="col-10"></div>
              <div class="col-2 h-100 position-relative">
                  <a class="btn btn-primary position-absolute start-20 top-50 translate-middle-x border-0" style="background-color: var(--color-1);" data-bs-toggle="dropdown" type="button">
                  <i class="bi bi-list" style="font-size: 40px;" ></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#tu-visita">Planea tu visita</a></li>
                  <li><a class="dropdown-item" href="#boletos">Boletos</a></li>
                  <li><a class="dropdown-item" href="#exposicion">Exposición</a></li>
                  <li><a class="dropdown-item" href="#contactanos">Contacto</a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
      
    </div>
    <!-- LOGO END -->

    <div class="container-fluid px-0 py-5">
      <img src="<?php bloginfo('template_directory');?>/public/images/red-stripe.png" class="img-fluid w-100 " alt="mao">
      
    </div>

    <div class="container-fluid pt-5">
      <div class="row gx-4 text-center">
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <div class="presentation">
                    <h2>La representación<br>oficial del<br><span>Jardín de la<br>Casa Azul</span><br>ahora en<br>La Baja</h2>
                    <p style="font-size: 12px;">Carretera Escénica esq. Campeche,<br>Colina del Sol 23010, La Paz B.C.S.</p>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <img src="<?php bloginfo('template_directory');?>/public/images/autorretratocollarespinascolibri.jpg" class="img-fluid" alt="">
                
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <div class="presentation">
                  <h2>Adquiere tus boletos</h2>
                  <a href="#" class="btn btn-primary btn-lg border-0 py-3" style="background-image: url(<?php bloginfo('template_directory');?>/public/images/boton.png); background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); background-size: 100% 100%; font-family: 'Poppins'; width: 100%;">Comprar</a>
                </div>
              </div>
            </div>
          </section>
        </div>
        </div>
    </div>
    
    <div class="social container">
      
      <p class="contacto"><a href="mailto:contacto@fridaensujardinsecreto.com">contacto@fridaensujardinsecreto.com</a></p>
      <ul>
        <li><a href="https://www.instagram.com/fridaensujardinsecreto/" target="_blank"><img src="<?php bloginfo('template_directory');?>/public/images/redes-04.png" alt=""></a></li>
       
          <li><a href="https://www.facebook.com/profile.php?id=100092258479518" target="_blank"><img src="<?php bloginfo('template_directory');?>/public/images/redes-05.png" alt=""></a></li>
        <li><a href="https://www.linkedin.com/company/frida-en-su-jard%C3%ADn-secreto/" target="_blank"><img src=" <?php bloginfo('template_directory');?>/public/images/redes-06.png" alt=""></a></li>
        <li><a href="https://www.tiktok.com/@fridaensujardinsecreto" target="_blank"><img src="<?php bloginfo('template_directory');?>/public/images/redes-07.png" alt=""></a></li>
        <li><a href="https://twitter.com/fridaensujardin" target="_blank"><img src="<?php bloginfo('template_directory');?>/public/images/redes-08.png" alt=""></a></li>
      </ul>
    </div>
    <!--
    <div class="museo-frida-kahlo-logo">
      <img src="./assets/images/museo-frida-kahlo-seeklogo.com.jpg" alt="Museo Frida Kahlo">
    </div>
    -->
  </div>
  <!-- INICIO / HEADER END-->

  <!-- SLIDER -->
  <div id="exposicion" class="container-fluid section-wall-bg px-0 ">

    <div class="container-fluid  px-0">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid px-0">
              <div class="row">

                <div class="col-12 col-lg-6">
                  <img src="<?php bloginfo('template_directory');?>/public/images/sillas.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row pt-5">
                        <h1 style="font-family: Lobster;" class="white-title pb-4">Frida en su Jardín Secreto</h1>
                      </div>
                      <div class="row">
                        <p class="slider-p too-much-text" style="font-family: poppins-regular;">Descubre la vida y obra de Frida Kahlo a
                          través de un recorrido único.
                          Réplicas de la Casa Azul y su jardín, los
                          lugares que inspiraron a la artista.
                          Seis esculturas monumentales de
                          animales que aparecen en sus obras.
                          La pirámide en honor a Diego Rivera, su
                          esposo y musa.
                          La Fuente de los sapos, un símbolo de
                          fertilidad y renacimiento
                          Su escritorio y caballete, testigos de su
                          pasión por el arte
                        </p>
                        <p class="slider-p too-much-text" style="font-family: poppins-regular;">¡Una experiencia inolvidable que te acercará
                          a la artista mexicana más icónica!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <img src="<?php bloginfo('template_directory');?>/public/images/colibri.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row pt-5">
                        <p class="slider-p" style="font-family: poppins-regular;">Réplicas de la Casa Azul y su jardín, los
                          lugares que inspiraron a la artista.
                          Seis esculturas monumentales de animales
                          que aparecen en sus obras.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <img src=" <?php bloginfo('template_directory');?>/public/images/piramide.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row pt-5">
                        <p class="slider-p" style="font-family: poppins-regular;">La pirámide en honor a Diego Rivera, su
                          esposo y musa.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <div class="container position-relative">
            <div class="col-4 rounded-circle p-3 position-absolute top-50 start-50 translate-middle btn-prev" style="background-color: rgb(96, 96, 134); width: fit-content;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </div>
          </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <div class="container position-relative">
            <div class="col-4 rounded-circle p-3 position-absolute top-50 start-40 translate-middle" style="background-color: rgb(96, 96, 134); width: fit-content;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>
  <!-- SLIDER END -->

  <!-- TU VISITA -->
  <div id="tu-visita" class="container-fluid section-padding">
    <div class="container">
        <div class="row align-items-start" style="font-family: poppins-regular">
            <div class="col-sm-12 col-md-12 col-lg-4 px-5">
                <h1 style="font-family: Lobster;" class="pink-title pb-2 txt-titulo">Tu visita</h1>

                <h5 class="py-3" style="font-family: poppins">Horarios</h5>
            
                <div class="row">
                    <p>Lunes: Cerrado</p>
                    <p>Martes a domingo: 10:00 - 18:00</p>
                    <p id="small-letter"><b style="font-family: poppins;">CERRADO</b><i style="font-family: poppins-regular;"> en Enero 1, Mayo 1, Septiembre 16 y Diciembre 31</i></p>
                </div>

                <h5 class="pt-2" style="font-family: poppins">Tarifas</h5>
                    
                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Entrada general</h6></div>
                    <p class="mb-1">$250.00 Martes a viernes</p>
                    <p class="mb-1">$270.00 Sábados y domingos</p>
                </div>

                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Entradas nacionales</h6></div>
                    <p id="small-letter" style="font-family: poppins;">(Con identificación oficial vigente)</p>
                    <p class="mb-1">$110.00 Martes a viernes</p>
                    <p class="mb-1">$130.00 Sábados y domingos</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 px-5">
                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Estudiantes y profesores</h6></div>
                    <p id="small-letter" style="font-family: poppins;">(Con identificación oficial vigente)</p>
                    <p class="mb-1">$50.00 estudiantes de preparatoria y superior</p>
                    <p class="mb-1">$25.00 estudiantes de primaria y secundaria</p>
                    <p class="mb-1">$50.00 profesores</p>
                </div>

                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Adultos mayores</h6></div>
                    <p class="mb-1">$25.00 Martes a domingo</p>
                </div>

                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Guías y operadores turísticos</h6></div>
                    <p class="mb-1">$50.00 Martes a domingo</p>
                </div>

                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Permiso para sacar fotografías sin flash</h6></div>
                    <p class="mb-1">$30.00 Sábados y domingos</p>
                </div>
            </div>
        
            <div class="col-sm-12 col-md-12 col-lg-4 px-5">
                <div class="row py-3">
                    <div class="text-white p-2 rounded" style="background-color: var(--color-1)"><h6 class="m-0" style="font-family: poppins">Acceso gratuito</h6></div>
                    <p class="mb-1">Niños menores de 6 años, acompañados</p>
                    <p class="mb-1">Personas con discapacidad</p>
                    <p class="mb-1">Personas de escasos recursos</p>
                </div>

                <h5 class="pt-2" style="font-family: poppins">Ubicación</h5>
                
                <div class="row py-3">
                    <p class="mb-1">Carretera Escénica esq. Campeche, Colina del Sol, 23010 La Paz, B.C.S.</p>
                </div>

                <div class="row py-3">
                    <img src=" <?php bloginfo('template_directory');?>/public/images/Mapa.png" class="img-fluid" alt="">
                </div>
            </div>
    </div>
    </div>
    
  </div>
  <!-- TU VISITA END-->

  <!-- BOLETOS -->
  <div id="boletos" class="container-fluid section-wall-bg">
    <div class="container section-padding">
        <div id="boletos-parte-1" class="row align-items-start">
            <div class="col-sm-12 col-md-12 px-5 pb-4">
                <h1 style="font-family: Lobster;" class="white-title txt-titulo">Boletos</h1>	
                <hr style="border-width: 2px; color: white"/>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 px-5 text-white pb-4" style="font-family: poppins;">
                <div class="row">
                    <p>Elige el horario en el que quieras visitar la exposición Frida en su Jardín Secreto, realiza la compra, descarga tu boleto y preséntate directo en la fila para el acceso:</p>
                </div>

                <h5 class="py-3">Horarios</h5>

                <div class="row">
                    <p class="mb-1">Lunes: Cerrado</p>
                    <p class="mb-1">Martes a domingo: 10:00 - 18:00</p>
                    <p class="mb-1">Jueves a domingo 10:00 a 18:00</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 px-5">
                <div class="row">
                    <img src="<?php bloginfo('template_directory');?>/public/images/Calendario.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div id="boletos-parte-2" class="row align-items-start pt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 px-5 text-white" style="font-family: poppins;">
                <div class="row">
                    <h5 class="py-3">Reglas</h5>

                    <div class="row">
                        <p>Para mantenerte seguro y obtener la mejor experiencia apóyanos a seguir estos pasos:</p>
                        <ul class="px-5">
                            <li>Evita traer bolsos y mochilas mayores a 35 x 20 cms, paraguas y bultos. El servicio de paquetería es limitado y está sujeto a disponibilidad.</li>
                            <li>Respeta tu horario de entrada, ya que no podrás ingresar en otro horario. </li>
                            <li>Procura el pago con tarjeta de crédito o débito en los servicios de la exposición.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 px-5 text-white" style="font-family: poppins;">
                <div class="row">                 
                    <p>No pueden ser ingresados al recinto:</p>
                    <ul class="px-5">
                        <li>Objetos punzocortantes o armas de fuego</li>
                        <li>Maletas</li>
                        <li>Mascotas</li>
                        <li>Bebidas</li>
                    </ul>

                    <p>Una vez dentro de la exposición:</p>
                    <ul class="px-5">
                        <li>Respeta las áreas delimitadas </li>
                        <li>No toques ninguno de los objetos expuestos</li>
                        <li>Todas las fotografías deben ser tomadas SIN flash</li>
                    </ul>

                    <p>Gracias por ayudarnos a mantener la exposición sana.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- BOLETOS END -->

  <!-- GRUPOS -->
  <div id="grupos" class="container-fluid px-0" style="background-color: var(--color-2)">
        
    <img src=" <?php bloginfo('template_directory');?>/public/images/render-sillas-grupos.jpeg" class="img-fluid" style="width: 100%;">
    <div class="container section-padding">
        <h1 style="font-family: Lobster;" class="pink-title pb-5 txt-titulo">Grupos</h1>
        
        <div class="row pb-4 pt-5">
          <div class="col-sm-12 col-xl-4 text-wrap" style="font-family: poppins">
            <h5>Escolares</h5>
          </div>
          <div class="col-sm-12 col-xl-8 px-5 border-start">
            <p style="font-family: poppins-regular">Disfrútala en los jardínes de la exposición según tu escolaridad (preescolar, primaria, secundaria, preparatoria, educación superior y especialistas).</p>
          </div>
        </div>
        
        <div class="row pb-4">
          <div class="col-sm-12 col-xl-4 text-wrap" style="font-family: poppins">
            <h5>Nuestra comunidad</h5>
          </div>
          <div class="col-sm-12 col-xl-8 px-5 border-start">
            <p style="font-family: poppins-regular">Comprometidos con nuestra comunidad, ofrecemos visitas para adultos mayores, casas hogar y personas con discapacidad intelectual, visual, auditiva y motriz.</p>
          </div>
        </div>
        
        <div class="row pb-4">
          <div class="col-sm-12 col-xl-4 text-wrap" style="font-family: poppins">
            <h5>Privados y empresariales</h5>
          </div>
          <div class="col-sm-12 col-xl-8 px-5 border-start">
            <p style="font-family: poppins-regular">Disfruta de las historias de quienes habitaron en esta casa y del mundo en el que vivió Frida, bajo la sombra de los árboles bajo los cuales ella misma se paseaba.</p>
          </div>
        </div>
    </div>
  </div>
  <!-- GRUPOS END -->

  <!-- OTROS SERVICIOS -->
  <div id="otros-servicios" class="container-fluid section-wall-bg section-padding px-0">

    <div class="container">
      <h1 style="font-family: Lobster;" class="white-title txt-titulo">Otros servicios</h1>
    </div>

    <div class="container-fluid px-0">
      <img src=" <?php bloginfo('template_directory');?>/public/images/red-stripe2560x1440.png" class="img-fluid w-100 " alt="mao">
    </div>

    <div class="container">
      <div class="row gx-4 text-center">
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><span>La Rosita<br>Restaurante<br>Pulquería</span></h2>
                          </div>
                          <div class="row">
                            <h2>Próximamente</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><span>Tienda</span></h2>
                          </div>
                          <div class="row services-poppins">
                            <p>Quédate con algo de
                            Frida: joyería,
                            souvenirs, libros de
                            arte y mucho más.<br><br>
                            Martes a viernes<br>
                            10:00 – 18:00
                            Miércoles<br>
                            11:00 – 18:00 h</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><span>DoceCuarenta<br>Cafetería</span></h2>
                          </div>
                          <div class="row services-poppins">
                            <p>Disfruta de las
                              delicias que te
                              ofrecemos. <br><br>
                              Martes a viernes<br>
                              10:00 – 18:00<br>
                              Miércoles<br>
                              11:00 – 18:00 h</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
    </div>
    
  </div>
  <!-- OTROS SERVICIOS END -->

  <!-- CONTÁCTANOS -->
  <div id="contactanos" class="container-fluid section-padding" style="background-color: var(--color-2);">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 p-5">
          <img src="<?php bloginfo('template_directory');?>/public/images/autorretratocollarespinascolibri.jpg" class="img-fluid" alt="Autorretrato">
        </div>
        <div id="contactanos" class="col-sm-12 col-md-12 col-lg-6 p-5" style="font-family: 'Poppins';">
          <div class="row">
            <h1 style="font-family: Lobster; color: var(--color-1);" class="pb-4 txt-titulo">Contáctanos</h1>
            <p class="pb-3" style="font-family: poppins-regular;">Te contamos cómo llegar desde donde estés.</p>
          </div>
          <div class="row">
            <h6 style="color:var(--color-1)">Dirección</h6><br><p style="font-family: poppins-regular;">Carretera escénica, esq. Campeche Colina del Sol, 23010 La Paz.</p>
          </div>
          <div class="row">
            <h6 style="color:var(--color-1)">Teléfono</h6><br><p style="font-family: poppins-regular;">612 128 5931</p>
          </div>
          <div class="row text-wrap pb-3">
            <h6 style="color:var(--color-1)">Correo</h6><br><p class="text-break" style="font-family: poppins-regular;">contacto@fridaensujardinsecreto.com</p>
          </div>
          <form style="font-family: poppins-regular;">
            <!-- <div class="mb-3">
              <label for="nombre" class="form-label">Tu nombre: </label>
              <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
            </div> -->
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre:</label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <!-- <div class="mb-3">
              <label for="correo" class="form-label">Tu correo: </label>
              <input type="email" class="form-control" id="correo">
            </div> -->
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo: </label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="correo" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <!-- <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje (opcional): </label>
              <input type="text" class="form-control" id="mensaje">
            </div> -->
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="mensaje" class="form-label">Mensaje: </label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="mensaje" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <div id="contactanos-terminos-condiciones"class="mb-3 form-check pb-3">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" style="font-family: poppins-regular;" for="exampleCheck1">Acepto que los datos enviados se recopilen y almacenen.</label>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill border-0" style="background-color: var(--color-1);">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTÁCTANOS END -->

  <!-- FACTURACIÓN -->
  <div id="facturacion" class="container-fluid section-padding" style="background-color: var(--color-4)">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm-12 col-md-12 px-5 pb-4">
                <h1 style="font-family: Lobster;" class="pink-title txt-titulo">Facturación</h1>	
            </div>

            <div class="col-sm-12 col-md-12 px-5 text-white" style="font-family: poppins-regular">
                <div class="row">
                    <p>En caso de requerir factura por los boletos adquiridos será necesario que envíe la siguiente información en el cuerpo del correo a facturacion@X:</p>
                    <ul class="px-5">
                        <li>Número o números de orden de compra</li>
                        <li>Fecha de compra</li>
                        <li>Método de pago</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-start">
            <div class="col-sm-12 col-md-4 px-5 pb-4 text-white" style="font-family: poppins-regular">
                <div class="row">
                    <p>Datos fiscales:</p>
                    <ul class="px-5">
                        <li>Razón social</li>
                        <li>RFC</li>
                        <li>Dirección</li>
                        <li>Régimen fiscal</li>
                    </ul>
                </div>
            </div>

            <div id="facturacion-importante" class="col-sm-12 col-md-8 p-4 rounded-5 text-white" style="background-color: var(--color-1); font-family: poppins;">
                <div class="row">                 
                    <p style="text-transform: uppercase;">Importante:</p>
                    <ul class="px-5">
                        <li>Es indispensable adjuntar la constancia de situación fiscal actualizada (no mayor a 3 meses).</li>
                        <li>La factura deberá solicitarse el mísmo día de la compra del servicio. En caso de no contar con los datos fiscales
                           en el momento, es indispensable que a más tardar al día siguiente sean enviados.</li>
                        <li>El número de orden se observa en el boleto o en el correo de confirmación de la compra del boleto.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- FACTURACIÓN END -->

  <!-- FOOTER -->
  <div id="footer" class="container-fluid pb-5 mx-0 px-0" style="background-color: var(--color-1);">
    <div class="container-fluid px-0">
      <div class="col-2 logo pb-5">
        <a href="#inicio"><img src="<?php bloginfo('template_directory');?>/public/images/logo.png" class="logo-img" alt=""></a>
      </div>

      <div class="col-10"></div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-3">
        </div>

        <div class="col-8">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="row pb-3">
                <h4><a href="#tu-visita" class="link-light link-underline link-underline-opacity-0">Planea tu visita</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#boletos" class="link-light link-underline link-underline-opacity-0">Boletos</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#boletos" class="link-light link-underline link-underline-opacity-0">Venta de boletos</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#facturacion" class="link-light link-underline link-underline-opacity-0">Facturación</a></h4>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="row pb-3">
                <h4><a href="#contactanos" class="link-light link-underline link-underline-opacity-0">Contacto</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#tu-visita" class="link-light link-underline link-underline-opacity-0">Ubicación</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#otros-servicios" class="link-light link-underline link-underline-opacity-0">Otros servicios</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#grupos" class="link-light link-underline link-underline-opacity-0">Grupos</a></h4>
              </div>
            </div>
          </div>
        </div>

    </div>

    </div>
  </div>
  <!-- FOOTER END -->

  <?php include('layouts/scripts.template.php') ?>
</body>
</html>