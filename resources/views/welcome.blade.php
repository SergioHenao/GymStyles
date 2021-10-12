<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Gym Style</title>

    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/logo.png" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- Local CSS -->
    <link id="theme-style" rel="stylesheet" href="css/index.css" />
  </head>

  <body>
    <!-- header -->
    <!-- fixed-top permite que se fige en la parte superior en toda la pagina -->
    <header class="header fixed-top">
      <!-- div container -->
      <div class="container-fluid position-relative">
        <nav class="navbar navbar-expand-lg">
          <div class="site-logo">
            <!-- Enlace de la pag prinipal -->
            <a class="navbar-brand">
              <!-- Imagen del logo -->
              <img
                class="logo-icon m-2 rounded"
                src="/img/Gym_Style.png"
                alt="logo Gym Style"
                width="70"
              />
              <!-- Nombre del gym -->
              <span class="logo-text">Gym<span class="text-alt">Styles</span></span>
            </a>
          </div>
          <!-- Boton de responsibe para movil o tablet -->
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigation"
            aria-controls="navigation"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span> </span>
            <span> </span>
            <span> </span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">

          

            <!-- la etiqueta <ul> situa los botones en el lado derecho -->
            <ul class="navbar-nav ms-lg-auto">
              <!-- espacion del boton -->
              <li class="nav-item me-lg-4">
                <!-- Enlace a inicio de sesión -->
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                    <li class="nav-item me-lg-4">
                        <a href="{{ route('login') }}" class="nav-link">Inicio de sesion</a>
                    </li>
                    <li class="nav-item me-lg-0 mt-3 mt-lg-0">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary text-white">Registrarse</a>
                        @endif
                    </li>
                    @endauth
                </div>
                @endif
              </li>
            </ul>
          </div>
          <!-- //collapse navbar -->
        </nav>
        <!-- //nav -->
      </div>
      <!--//container-->
    </header>
    <!--//header-->

    <section class="hero-section py-3 py-md-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 p-4">
            <!-- Frase de el principio con el aotor -->
            <h1 class="site-headline font-weight-bold mb-3">
              La motivación es lo que te pone en marcha, y el hábito es lo que
              hace que sigas
            </h1>
            <div class="site-tagline mb-4">
              - Jim Ryun
              <span id="typewriter" class="text-primary font-weight-bold"></span
              >.
            </div>
          </div>
          <!-- Imagen al lado derecho de la frase -->
          <div class="col-12 col-lg-6 text-center">
            <img
              class="hero-figure mx-auto"
              src="/img/principal.png"
              alt="Imagen de una mujer haciendo ejercicio"
            />
          </div>
        </div>
        <!--//row-->
      </div>
      <!--//container-->
    </section>
    <!--//hero-section-->
    <!-- Seccion de los planes que ofrece el gym -->
    <section class="benefits-section theme-bg-light py-5">
      <div class="container-fluid">
        <!-- Titulo de la seccion -->
        <h3 class="mb-2 text-center font-weight-bold section-title">
          ELIGE TU PLAN
        </h3>
        <!-- Parrafo de la seccion -->
        <div class="mb-5 text-center section-intro">
          Fortalece tu salud y mejora tu condición física con nuestros planes.
          Todos ofrecen entrenamiento con equipos de última generación, cardio,
          peso libre, clases grupales, profesores de planta para evaluaciones y
          creación de tu plan de entrenamiento, y mucho más.
        </div>
        <!-- Tarjetas de los planes con responsive y diseño basico -->
        <div class="row">
          <!-- Plan de bienvenida -->
          <div class="item col-12 col-md-6 col-lg-3">
            <div class="item-inner rounded">
              <div class="text-center mx-auto mb-3">
                <i class="fas fa-shapes"></i>
                <!-- Imagen del plan de bienvenida -->
                <img
                  src="/img/Plan_de_bienvenida.png"
                  class="img-fluid"
                  alt="Plan_de_bienvenida"
                />
              </div>
              <!-- Titulo plan de bienvenida -->
              <h5 class="mb-3">Plan de bienvenida &#10024;</h5>
              <!-- Contenido plan de bienvenida -->
              <div>
                Afiliándote por un mes en categoría factible. ESTE PLAN SOLO SE
                PUEDE COMPRAR UNA VEZ.
              </div>
              <div class="mt-2">
                <!-- Precio plan de bienvenida -->
                <h5 class="mb-3">$39.000</h5>
              </div>
              <div class="mt-2">
                <a class="text-link" href="#">Comprar &rarr;</a>
              </div>
            </div>
            <!--//item-inner-->
          </div>
          <!--//item-->
          <!-- Plan principiante -->
          <div class="item col-12 col-md-6 col-lg-3">
            <div class="item-inner rounded">
              <div class="text-center mx-auto mb-3">
                <i class="fas fa-shapes"></i>
                <!-- Imagen del plan principiante -->
                <img
                  src="/img/Plan_principiante.png"
                  class="img-fluid"
                  alt="Plan_de_bienvenida"
                />
              </div>
              <!-- Titulo plan principiante -->
              <h5 class="mb-3">Plan <br />principiante &#128170;</h5>
              <!-- Contenido plan principiante -->
              <div>
                Afiliándote por un mes en categoría accesible. ESTE PLAN SOLO SE
                PUEDE COMPRAR UNA VEZ.
              </div>
              <div class="mt-2">
                <!-- Precio plan principiante -->
                <h5 class="mb-3">$50.000</h5>
              </div>
              <div class="mt-2">
                <a class="text-link" href="#">Comprar &rarr;</a>
              </div>
            </div>
            <!--//item-inner-->
          </div>
          <!--//item-->
          <!-- Plan VIP -->
          <div class="item col-12 col-md-6 col-lg-3">
            <div class="item-inner rounded">
              <div class="text-center mx-auto mb-3">
                <i class="fas fa-shapes"></i>
                <!-- Imagen del plan VIP -->
                <img
                  src="/img/Plan_VIP.png"
                  class="img-fluid"
                  alt="Plan_de_bienvenida"
                />
              </div>
              <!-- Titulo plan VIP -->
              <h5 class="mb-3">Plan VIP &#128081;</h5>
              <!-- Contenido plan VIP -->
              <div>
                Afiliándote por un mes en categoría de muchisimo EXFUERZO.ESTE
                PLAN SOLO SE PUEDE COMPRAR UNA VEZ.
              </div>
              <div class="mt-2">
                <!-- Precio plan VIP -->
                <h5 class="mb-3">$100.000</h5>
              </div>
              <div class="mt-2">
                <a class="text-link" href="#">Comprar &rarr;</a>
              </div>
            </div>
            <!--//item-inner-->
          </div>
          <!--//item-->
          <!-- Plan ELITE -->
          <div class="item col-12 col-md-6 col-lg-3">
            <div class="item-inner rounded">
              <div class="text-center mx-auto mb-3">
                <i class="fas fa-shapes"></i>
                <!-- Imagen del plan ELITE -->
                <img
                  src="/img/Plan_ELITE.png"
                  class="img-fluid"
                  alt="Plan_de_bienvenida"
                />
              </div>
              <!-- Titulo plan ELITE -->
              <h5 class="mb-3">Plan ELITE &#128142;</h5>
              <!-- Contenido plan ELITE -->
              <div>
                Afiliándote por un mes en esta categoría de gente al maximo
                RENDIMIENTO. ESTE PLAN SOLO SE PUEDE COMPRAR UNA VEZ.
              </div>
              <div class="mt-2">
                <!-- Precio plan ELITE -->
                <h5 class="mb-3">$150.000</h5>
              </div>
              <div class="mt-2">
                <a class="text-link" href="#">Comprar &rarr;</a>
              </div>
            </div>
            <!--//item-inner-->
          </div>
          <!--//item-->
        </div>
        <!--//row-->
      </div>
    </section>
    <!--//benefits-section-->
    <!-- Seccion de Vencer covid-19 -->
    <section class="how-section py-5">
      <div class="container-fluid">
        <!-- Titulo seccion covid-19 con emojis -->
        <h3 class="mb-2 text-center font-weight-bold section-title">
          &#9888; Vamos a vencer al COVID-19 &#9888;
        </h3>
        <!-- Parrafo del seccion -->
        <div class="mb-5 text-center section-intro">
          Vamos a vencer al COVID-19. Necesitamos tu ayuda, solo así podemos
          lograr un gimnacio más seguro para todos con estos tres simples pasos.
        </div>
        <!-- seccion 1  -->
        <div class="row">
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 1 -->
              <img
                src="/img/tapabocas.png"
                alt="imagen de chica con tapabocas"
              />
              <div class="arrow-holder d-none d-lg-inline-block"></div>
            </div>
            <!--//icon-holder-->
            <!-- Titulo seccion 1  -->
            <div class="desc p-3">
              <h5><span class="step-count me-2">1</span>Uso de tapabocas</h5>
              <!-- Contenido seccion 1  -->
              <p>
                El tapabocas es obligatorio. Todo nuestro equipo debe usar
                protección, así como también los usuarios.
              </p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
          <!-- seccion 2  -->
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 2  -->
              <img src="/img/2m.png" alt="Dos metros de distancia" />
              <div class="arrow-holder d-none d-lg-inline-block"></div>
            </div>
            <!--//icon-holder-->
            <div class="desc p-3">
              <!-- Titulo seccion 2  -->
              <h5>
                <span class="step-count me-2">2</span>Distancia entre máquinas
              </h5>
              <!-- Contenido seccion 2  -->
              <p>Recuerda mantener minimo 2 mt de distancia de los demás</p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
          <!-- seccion 3  -->
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 3  -->
              <img src="/img/desinfeccion.png" alt="" />
            </div>
            <!--//icon-holder-->
            <div class="desc p-3">
              <!-- Titulo seccion 3  -->
              <h5>
                <span class="step-count me-2">3</span>Desinfección completa
              </h5>
              <!-- Contenido seccion 3  -->
              <p>Desinfectaremos todas las sedes varias veces al día</p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
        </div>
        <!--//row-->
      </div>
      <!--//container-->
    </section>
    <!--//how-section-->
    <!-- Footer -->
    <footer
      class="cta-section text-center py-3 theme-bg-dark position-relative"
    >
      <!-- Imagenes de los costados -->
      <!-- derocho -->
      <div class="theme-bg-shapes-right"></div>
      <!-- Izquierdo -->
      <div class="theme-bg-shapes-left"></div>
      <div class="container-fluid">
        <!-- Lista de los items circulares  -->
        <ul class="social-list list-unstyled pt-1">
          <!-- Item twiter -->
          <li class="list-inline-item">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="16"
              fill="currentColor"
              class="bi bi-twitter"
              viewBox="0 0 16 16"
            >
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
              />
            </svg>
          </li>
          <!-- Item facebook -->
          <li class="list-inline-item">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              fill="currentColor"
              class="bi bi-facebook"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
              />
            </svg>
          </li>
          <!-- item instagram -->
          <li class="list-inline-item">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
              />
            </svg>
          </li>
        </ul>
        <!-- Forulario para recivir novedades -->
        <h3 class="mb-2 text-white mb-3 pt-3">
          Recibe las novedades y promociones exclusivas
        </h3>
        <form class="signup-form row gx-1 justify-content-center pt-3">
          <div class="col-12 col-md-auto text-white">
            <input
              type="email"
              id="semail"
              name="semail1"
              class="form-control semail"
              placeholder="Ingrese su correo eletronico"
            />
          </div>
        </form>
        <!-- Boton enviar -->
        <div class="pt-3 text-center">
          <a class="btn btn-light"
            >Enviar<i class="fas fa-arrow-alt-circle-right ms-2"></i
          ></a>
        </div>
      </div>
      <div class="footer-bottom text-center text-white pb-5">
        <br />
        <!-- Copyright seccion -->
        <p>
          &copy; Copyright 2021 Gym Style. Todos los derechos reservados. Aviso
          legal, privacidad y cookies -SENA-ADSI-Grupo 7
        </p>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/typewriterjs/dist/core.js"></script>
    <script src="assets/js/typewriter-custom.js"></script>
    <script src="assets/plugins/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/js/tinyslider-custom.js"></script>
  </body>
</html>
