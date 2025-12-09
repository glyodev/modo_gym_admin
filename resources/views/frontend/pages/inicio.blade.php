@extends('frontend.layouts.main')

@section('contenido')
    <!-- main content begin -->
    <main>
        {{-- Banner --}}
        <section class="text-light relative" data-bgimage="url({{ asset('frontend/images/background/1.webp') }}) center">
            <div class="container relative z-2">
                <div class="row g-4">
                    <div class="col-xl-6 col-lg-6">
                        <div class="spacer-double"></div>
                        <h1 class="wow fadeInUp" data-wow-delay=".0s">{{ $info->info_nombre }}</h1>
                        <p class="me-lg-5 mb-4 wow fadeInUp" data-wow-delay=".2s">{{ $info->info_descripcion }}</p>
                        <div class="d-flex align-items-center wow fadeInUp" data-wow-delay=".9s">
                            <a class="btn-main fx-slide me-4 wow fadeInUp" data-wow-delay=".4s"
                                href="#precios"><span>Unirme</span></a>
                            <a class="de-flex align-items-center text-white popup-youtube"
                                href="{{ $info->info_url_video }}">
                                <div class="btn-play sm circle wow scaleIn"><span></span></div>
                                <div class="ms-3 fw-bold">Ver video</div>
                            </a>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="d-flex align-items-center wow fadeInUp" data-wow-delay=".9s">
                            <div class="relative me-4">
                                <img src="{{ asset('frontend/images/testimonial/1.webp') }}" class="w-50px circle ms-min-10"
                                    alt="">
                                <img src="{{ asset('frontend/images/testimonial/2.webp') }}" class="w-50px circle ms-min-10"
                                    alt="">
                                <img src="{{ asset('frontend/images/testimonial/3.webp') }}" class="w-50px circle ms-min-10"
                                    alt="">
                            </div>
                            <div class="fw-600 fs-14 lh-1-5">
                                <span class="fs-16 fw-bold">{{ $info->miembros }}+
                                </span>
                                <br>
                                Miembros activos
                            </div>
                        </div>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
            <div class="gradient-edge-bottom"></div>
        </section>
        {{-- Fin banner --}}

        {{-- Acerca de --}}
        <section id="acerca">
            <div class="container">
                <div class="row g-4 align-items-center">

                    <div class="col-lg-6">
                        <div class="relative">
                            <div class="p-4 mt-3 bg-color text-light abs abs-centered rounded-1 text-center z-2 wow fadeIn"
                                data-wow-delay=".6s">
                                <h1 class="fs-72 mb-1">{{ $info->info_ano_experiencia }}</h1>
                                <div class="fs-16 lh-1-5">Años de experiencia</div>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                                    <div class="relative rounded-1 overflow-hidden">
                                        <img src="{{ asset('frontend/images/misc/p1.webp') }}" class="w-100"
                                            alt="">
                                        <div class="de-overlay-gradient-color h-50 top-50"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                                    <div class="relative rounded-1 overflow-hidden">
                                        <img src="{{ asset('frontend/images/misc/p2.webp') }}" class="w-100"
                                            alt="">
                                        <div class="de-overlay-gradient-color h-50 top-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ms-lg-4">
                            <div class="subtitle id-color mb-3 wow fadeInUp" data-wow-delay=".0s">Bienvenido/a a
                                {{ $info->info_nombre }}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Sobre nosotros</h2>

                            <p class="wow fadeIn" data-wow-delay=".4s">{{ $info->info_sobre_nosotros }}</p>

                            <a class="btn-main fx-slide mb10 mb-3 wow fadeIn" href="join.html"><span>Unirse</span></a>
                        </div>
                    </div>


                </div>

                <div class="spacer-double"></div>

                <div class="row g-4">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".0s">
                            <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $info->horas }}"
                                    data-speed="3000">0</span><span class="id-color">+</span></h3>
                            <div class="fs-15">Horas de entrenamiento</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".2s">
                            <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $info->miembros }}"
                                    data-speed="3000">0</span><span class="id-color">+</span></h3>
                            <div class="fs-15">Miembros activos</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".4s">
                            <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $info->pagos }}"
                                    data-speed="3000">0</span><span class="id-color">+</span></h3>
                            <div class="fs-15">Transformaciones</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".6s">
                            <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $info->costos }}"
                                    data-speed="3000">0</span><span class="id-color">+</span></h3>
                            <div class="fs-15">Costos</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- Fin acerca de --}}

        {{-- <section class="relative" data-bgimage="url({{ asset('frontend/images/background/2.webp') }})">
            <div class="gradient-edge-top"></div>
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-5"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="owl-single-dots owl-carousel owl-theme">

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">The trainers pushed me beyond my limits while keeping
                                    every workout fun and motivating.</h3>
                                <span class="wow fadeInUp">Anna L., Paris</span>
                            </div>

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">I’ve gained strength, lost weight, and found a
                                    community that truly inspires me.</h3>
                                <span class="wow fadeInUp">Michael H., Toronto</span>
                            </div>

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">The facilities are top-notch. Every session leaves me
                                    feeling stronger and more energized.</h3>
                                <span class="wow fadeInUp">Nadia R., Dubai</span>
                            </div>

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">Joining this gym completely changed my lifestyle. It’s
                                    the best decision I ever made.</h3>
                                <span class="wow fadeInUp">Tom S., Los Angeles</span>
                            </div>

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">From the group classes to personal training, everything
                                    is professional and motivating.</h3>
                                <span class="wow fadeInUp">Elise K., Amsterdam</span>
                            </div>

                            <div class="item">
                                <span class="d-stars id-color d-block mb-3 wow fadeInUp">
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i><i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mb-4 wow fadeInUp fs-36">Amazing atmosphere, skilled trainers, and results I
                                    never thought possible.</h3>
                                <span class="wow fadeInUp">David M., Singapore</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- Servicios --}}
        <section class="p-0" id="servicios">
            <div class="container">
                <div class="row mb-3 g-4 align-items-center justify-content-between">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".2s">
                        <div class="uptitle id-color wow fadeInUp">Nuestros servicios</div>
                        <h2 class="wow fadeInUp">Entrenamientos diseñados para ti</h2>
                        <p>...</p>
                    </div>


                    <div class="col-lg-6">
                        <div class="relative">
                            <div class="de-custom-nav d-flex flex-end" data-target="#services-carousel">
                                <div class="d-prev"></div>
                                <div class="d-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="services-carousel" class="owl-2-cols-center owl-carousel owl-theme">
                            {{-- @foreach ($ejercicios as $ejer)
                                <!-- item 1 -->
                                <div class="item">
                                    <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                        <div class="row g-0">
                                            <div class="col-5 d-flex flex-column justify-content-between p-40">
                                                <div>
                                                    <h3 class="fw-bold mb-2">{{ $ejer->ejer_nombre }}</h3>
                                                    <p class="mb-0 text-wrap">{{ $ejer->ejer_descripcion }}</p>
                                                </div>
                                                <div>
                                                    <a href="class-single.html"
                                                        class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                        Details</a>
                                                </div>
                                            </div>
                                            <div class="col-7 angled-wrapper">
                                                <img src="{{ asset($ejer->ejer_imagen) }}" alt="{{ $ejer->ejer_nombre }}"
                                                    class="object-cover" style="width:750px;height:750px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                            <!-- item 1 -->
                            <div class="item">
                                <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-5 d-flex flex-column justify-content-between p-40">
                                            <div>
                                                <h3 class="fw-bold mb-2">Fuerza y condición</h3>
                                                <p class="mb-0 text-wrap">
                                                    Desarrolla potencia, resistencia y un físico esbelto con una combinación
                                                    de técnicas de entrenamiento con barra, mancuernas y funcional.
                                                </p>
                                            </div>
                                            <div>
                                                {{-- <a href="class-single.html"
                                                    class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                    Details</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-7 angled-wrapper">
                                            <img src="{{ asset('frontend/images/classes/p1.webp') }}"
                                                alt="Strength & Conditioning" class="h-100 w-100 object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- item 2 -->
                            <div class="item">
                                <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-5 d-flex flex-column justify-content-between p-40">
                                            <div>
                                                <h3 class="fw-bold mb-2">Entrenamiento personal</h3>
                                                <p class="mb-0 text-wrap">
                                                    Orientación personalizada de entrenadores profesionales para maximizar
                                                    tus resultados de forma segura y eficiente con programas personalizados.
                                                </p>
                                            </div>
                                            <div>
                                                {{-- <a href="class-single.html"
                                                    class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                    Details</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-7 angled-wrapper">
                                            <img src="{{ asset('frontend/images/classes/p2.webp') }}"
                                                alt="Personal Training" class="h-100 w-100 object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- item 3 -->
                            <div class="item">
                                <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-5 d-flex flex-column justify-content-between p-40">
                                            <div>
                                                <h3 class="fw-bold mb-2">HIIT y entrenamiento en grupo</h3>
                                                <p class="mb-0 text-wrap">
                                                    Únete a entrenamientos grupales de alta energía como HIIT, spinning y
                                                    bootcamps para quemar calorías, desarrollar resistencia y mantenerte
                                                    motivado.
                                                </p>
                                            </div>
                                            <div>
                                                {{-- <a href="class-single.html"
                                                    class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                    Details</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-7 angled-wrapper">
                                            <img src="{{ asset('frontend/images/classes/p3.webp') }}"
                                                alt="HIIT & Group Training" class="h-100 w-100 object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- item 5 -->
                            <div class="item">
                                <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-5 d-flex flex-column justify-content-between p-40">
                                            <div>
                                                <h3 class="fw-bold mb-2">Entrenamiento en circuito</h3>
                                                <p class="mb-0 text-wrap">
                                                    Activa tu metabolismo con un intenso entrenamiento en circuito que
                                                    combina cardio y fuerza para obtener resultados corporales completos
                                                    rápidamente.
                                                </p>
                                            </div>
                                            <div>
                                                {{-- <a href="class-single.html"
                                                    class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                    Details</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-7 angled-wrapper">
                                            <img src="{{ asset('frontend/images/classes/p5.webp') }}"
                                                alt="Circuit Training" class="h-100 w-100 object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- item 6 -->
                            <div class="item">
                                <div class="relative bg-color text-light rounded-1 overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-5 d-flex flex-column justify-content-between p-40">
                                            <div>
                                                <h3 class="fw-bold mb-2">Rendimiento atlético</h3>
                                                <p class="mb-0 text-wrap">
                                                    Entrena como un atleta con ejercicios de potencia explosiva, rutinas de
                                                    equilibrio y trabajo de movilidad para aumentar la velocidad y la
                                                    agilidad.
                                                </p>
                                            </div>
                                            <div>
                                                {{-- <a href="class-single.html"
                                                    class="id-color text-uppercase fw-semibold small text-decoration-none">View
                                                    Details</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-7 angled-wrapper">
                                            <img src="{{ asset('frontend/images/classes/p6.webp') }}"
                                                alt="Athletic Performance" class="h-100 w-100 object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Fin servicios --}}

        {{-- Por que elegirnos --}}
        <section class="pb-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6 text-center wow fadeIn" data-wow-delay=".2s">
                        <div class="uptitle id-color wow fadeInUp">¿Por qué elegirnos?</div>
                        <h2 class="wow fadeInUp">Desarrolle fuerza, resistencia y confianza con nosotros</h2>
                    </div>
                </div>
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="relative">
                            <div class="rounded-1 w-90 overflow-hidden wow zoomIn">
                                <img src="{{ asset('frontend/images/misc/l4.webp') }}" class="w-100 wow scaleIn"
                                    alt="Gym Training Session">
                                <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="rounded-1 w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn"
                                data-wow-delay=".2s">
                                <img src="{{ asset('frontend/images/misc/s1.webp') }}" class="w-100 wow scaleIn"
                                    data-wow-delay=".2s" alt="Personal Coaching Session">
                                <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="relative mb-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="absolute w-60px bg-color text-light text-center fs-32 py-3 rounded-1">
                                1
                            </div>
                            <div class="ps-100">
                                <h4>Entrenadores personales certificados</h4>
                                <p>
                                    Entrena con profesionales que guían cada uno de tus movimientos, garantizando una
                                    técnica correcta, seguridad y resultados más rápidos para tus objetivos de fitness.
                                </p>
                            </div>
                        </div>

                        <div class="relative mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <div class="absolute w-60px bg-color text-light text-center fs-32 py-3 rounded-1">
                                2
                            </div>
                            <div class="ps-100">
                                <h4>Equipo moderno</h4>
                                <p>
                                    Experimente máquinas de vanguardia y herramientas de entrenamiento funcional que hacen
                                    que cada entrenamiento sea efectivo, divertido y desafiante.
                                </p>
                            </div>
                        </div>

                        <div class="relative wow fadeInUp" data-wow-delay=".6s">
                            <div class="absolute w-60px bg-color text-light text-center fs-32 py-3 rounded-1">
                                3
                            </div>
                            <div class="ps-100">
                                <h4>Entorno motivador</h4>
                                <p>
                                    Únete a una comunidad de apoyo que te inspira a ser constante, superar tus límites y
                                    celebrar cada logro en el camino.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer-single sm-hide"></div>
            </div>
        </section>
        {{-- Fin por que elegirnos --}}

        {{-- Horarios --}}
        {{-- <section aria-label="section">
            <div class="container">
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".2s">
                        <div class="uptitle id-color wow fadeInUp">Gym Schedule</div>
                        <h2 class="wow fadeInUp">Find the Best Time to Join Your Favorite Classes</h2>
                        <p>Check our weekly schedule to plan your workouts, from morning yoga to evening strength training
                            sessions.</p>
                    </div>
                </div>
                <div class="row g-2 text-center">
                    <!-- Sunday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay=".0s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Sunday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">09:00 - 10:00</div>
                            <div class="fs-20 mb-1 fw-bold">Yoga</div>
                            <div class="fs-14">John Doe</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">11:30 - 12:30</div>
                            <div class="fs-20 mb-1 fw-bold">Cardio Blast</div>
                            <div class="fs-14">Sarah Lee</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">17:00 - 18:00</div>
                            <div class="fs-20 mb-1 fw-bold">Zumba</div>
                            <div class="fs-14">Mike Johnson</div>
                        </div>
                    </div>

                    <!-- Monday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay=".2s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Monday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">08:00 - 09:00</div>
                            <div class="fs-20 mb-1 fw-bold">Pilates</div>
                            <div class="fs-14">Anna Smith</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">10:00 - 11:00</div>
                            <div class="fs-20 mb-1 fw-bold">Yoga</div>
                            <div class="fs-14">John Doe</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">18:00 - 19:00</div>
                            <div class="fs-20 mb-1 fw-bold">HIIT Training</div>
                            <div class="fs-14">Chris Evans</div>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay=".4s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Tuesday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">07:30 - 08:30</div>
                            <div class="fs-20 mb-1 fw-bold">Muay Thai</div>
                            <div class="fs-14">David Miller</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">12:00 - 13:00</div>
                            <div class="fs-20 mb-1 fw-bold">Zumba</div>
                            <div class="fs-14">Sarah Lee</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">17:30 - 18:30</div>
                            <div class="fs-20 mb-1 fw-bold">Boxing</div>
                            <div class="fs-14">Mark Davis</div>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay=".6s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Wednesday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">09:00 - 10:00</div>
                            <div class="fs-20 mb-1 fw-bold">Spin Class</div>
                            <div class="fs-14">Laura Green</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">12:30 - 13:30</div>
                            <div class="fs-20 mb-1 fw-bold">Pilates</div>
                            <div class="fs-14">Anna Smith</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">18:00 - 19:00</div>
                            <div class="fs-20 mb-1 fw-bold">CrossFit</div>
                            <div class="fs-14">Tom Harris</div>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay=".8s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Thursday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">08:00 - 09:00</div>
                            <div class="fs-20 mb-1 fw-bold">Morning Yoga</div>
                            <div class="fs-14">John Doe</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">11:00 - 12:00</div>
                            <div class="fs-20 mb-1 fw-bold">Cardio Blast</div>
                            <div class="fs-14">Sarah Lee</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">17:00 - 18:00</div>
                            <div class="fs-20 mb-1 fw-bold">Kickboxing</div>
                            <div class="fs-14">Mark Davis</div>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay="1s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Friday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">07:00 - 08:00</div>
                            <div class="fs-20 mb-1 fw-bold">Meditation</div>
                            <div class="fs-14">Emily Brown</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">10:00 - 11:00</div>
                            <div class="fs-20 mb-1 fw-bold">Muay Thai</div>
                            <div class="fs-14">David Miller</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">18:30 - 19:30</div>
                            <div class="fs-20 mb-1 fw-bold">Dance Fit</div>
                            <div class="fs-14">Laura Green</div>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="col-lg-1-7 mb-sm-30 text-light wow fadeInUp" data-wow-delay="1.22s">
                        <div class="bg-color text-light text-center py-3 mb-2 rounded-1">
                            <h4 class="mb-0">Saturday</h4>
                        </div>
                        <div class="py-2 bg-dark-2 lh-1-6">
                            <div class="fs-14 id-color">09:00 - 10:00</div>
                            <div class="fs-20 mb-1 fw-bold">Yoga</div>
                            <div class="fs-14">John Doe</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">11:30 - 12:30</div>
                            <div class="fs-20 mb-1 fw-bold">Zumba</div>
                            <div class="fs-14">Sarah Lee</div>
                        </div>
                        <div class="py-2 bg-dark-2 rounded-1 lh-1-6 mt-2">
                            <div class="fs-14 id-color">16:00 - 17:00</div>
                            <div class="fs-20 mb-1 fw-bold">Body Pump</div>
                            <div class="fs-14">Mike Johnson</div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}


        <br><br><br>
        {{-- Precios --}}
        <section class="relative pt-0" data-bgimage="url({{ asset('frontend/images/background/3.webp') }})" id="precios">
            <div class="gradient-edge-top"></div>
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-5"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".2s">
                        <div class="uptitle id-color wow fadeInUp">Planes de precios</div>
                        <h2 class="wow fadeInUp">Elige el plan perfecto que realmente se adapta a ti</h2>
                        <p>
                            Opciones de membresía flexibles para cada estilo de vida, desde sesiones individuales hasta
                            paquetes completos con instalaciones de primer nivel.
                        </p>
                    </div>
                </div>
                <div class="row g-4 owl-carousel owl-theme">
                    @foreach ($costos as $costo)
                        <!-- pricing item begin -->
                        <div class="col-md-4 wow fadeInUp w-100 item" data-wow-delay=".0s">
                            <div class="relative overflow-hidden h-100 border-white-op-3 rounded-1 bg-blur">
                                <div class="gradient-edge-bottom color op-5"></div>
                                <div class="p-40 pb-80 z-2">
                                    <div>
                                        <h2 class="fs-32 mb-0">{{ $costo->nombre }}</h2>
                                        <div class="mb-4">{{ $costo->periodo }}</div>
                                        <h3 class="fs-48 id-color mb-4">
                                            Bs. {{ $costo->monto }}<span class="fs-16"></span>
                                        </h3>
                                        <h4>Beneficios:</h4>
                                    </div>

                                    <div class="border-white-bottom-op-2 mb-4"></div>

                                    <ul class="ul-check mb-4">
                                        <li class="check">
                                            Acceso ilimitado al gimnasio y uso de equipo.
                                        </li>
                                        <li class="check">
                                            Acceso a nutrición y fisioterapia.
                                        </li>
                                        <li class="{{ $costo->tipo == 'TODO' ? 'check' : 'uncheck' }}">
                                            Acceso a todas las clases grupales de fitness.
                                        </li>
                                        <li class="{{ $costo->tipo == 'TODO' ? 'check' : 'uncheck' }}">
                                            Monitoreo mensual de la composición corporal.
                                        </li>
                                        <li class="{{ $costo->tipo == 'TODO' ? 'check' : 'uncheck' }}">
                                            Entrenamiento personalizado.
                                        </li>
                                    </ul>
                                </div>

                                <div class="abs abs-center p-40 pb-30 bottom-0 z-2 w-100 text-center">
                                    <a class="btn-main fx-slide"
                                        href="https://wa.me/591{{ $info->info_whatsapp }}?text=%E2%80%8EHola%2C%20quiero%20mas%20informacion%20sobre%0APlan%20{{ $costo->nombre }}"
                                        target="_blank">
                                        <span> <i class="fa-brands fa-whatsapp"></i> Contactar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- pricing item end -->
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Fin precios --}}

        {{-- faq --}}
        {{-- <section class="pt-0" id="preguntas">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="subtitle id-color wow fadeInUp">FAQ</div>
                        <h2 class="wow fadeInUp">
                            Answers to Your Questions About Gym & Fitness
                        </h2>
                    </div>

                    <div class="col-lg-6">
                        <div class="de-tab">
                            <ul class="d-tab-nav mb-4">
                                <li class="active-tab">Membership & Plans</li>
                                <li>Training & Facilities</li>
                                <li>Billing & Policies</li>
                            </ul>
                            <ul class="d-tab-content">
                                <!-- Membership & Plans -->
                                <li>
                                    <div class="accordion">
                                        <div class="accordion-section">
                                            <div class="accordion-section-title" data-tab="#accordion-a1">
                                                What types of memberships do you offer?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-a1">
                                                We offer monthly, quarterly, and annual memberships, as well as personal
                                                training and family packages to suit your fitness goals.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-a2">
                                                How can I join the gym?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-a2">
                                                Simply visit our front desk or sign up online. Our team will guide you
                                                through choosing the right membership plan for your needs.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-a3">
                                                Do you offer free trials?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-a3">
                                                Yes! We provide a one-day free trial so you can experience our facilities
                                                and classes before committing to a membership.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-a4">
                                                Can I freeze or pause my membership?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-a4">
                                                Memberships can be paused for travel or medical reasons. Contact our front
                                                desk for details and documentation requirements.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-a5">
                                                Do you have discounts or referral bonuses?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-a5">
                                                Yes! Members who refer friends receive special rewards, and we often run
                                                seasonal promotions for new joiners.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Training & Facilities -->
                                <li>
                                    <div class="accordion">
                                        <div class="accordion-section">
                                            <div class="accordion-section-title" data-tab="#accordion-b1">
                                                What kind of equipment do you have?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-b1">
                                                Our gym features state-of-the-art cardio machines, free weights, resistance
                                                equipment, functional training zones, and a yoga studio.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-b2">
                                                Do you offer personal training?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-b2">
                                                Yes, certified personal trainers are available for one-on-one or small group
                                                sessions to help you reach your fitness goals faster.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-b3">
                                                What classes are included with membership?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-b3">
                                                All memberships include access to yoga, HIIT, spinning, Zumba, pilates, and
                                                strength classes—scheduled daily by our instructors.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-b4">
                                                Do you have locker rooms and showers?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-b4">
                                                Yes, we provide clean locker rooms, private showers, and secure storage for
                                                all members.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-b5">
                                                Are group classes beginner-friendly?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-b5">
                                                Absolutely! All group classes are designed for all levels, and instructors
                                                provide modifications for beginners and advanced members alike.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Billing & Policies -->
                                <li>
                                    <div class="accordion">
                                        <div class="accordion-section">
                                            <div class="accordion-section-title" data-tab="#accordion-c1">
                                                What payment methods do you accept?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-c1">
                                                We accept debit/credit cards, bank transfers, and digital wallets. Payments
                                                can be made in person or through our online portal.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-c2">
                                                Can I get an invoice or receipt for my membership?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-c2">
                                                Yes, every transaction includes a digital receipt, and you can request a
                                                full invoice from our front desk or via email.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-c3">
                                                What is your cancellation policy?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-c3">
                                                Memberships can be canceled anytime with 7 days’ notice. Refunds depend on
                                                the plan type and remaining duration.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-c4">
                                                Are there any additional fees?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-c4">
                                                No hidden fees. Only optional add-ons such as personal training or nutrition
                                                consultations have extra charges.
                                            </div>

                                            <div class="accordion-section-title" data-tab="#accordion-c5">
                                                How do I update my billing information?
                                            </div>
                                            <div class="accordion-section-content" id="accordion-c5">
                                                You can update your payment details anytime at the front desk or through
                                                your member dashboard online.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- Fin faq --}}


        {{-- Banner 2 --}}
        <section class="bg-color text-light pt-50 pb-50" id="banner2">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">¿Estás listo para dar el primer paso hacia tus objetivos de fitness?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#precios"><span>Unirme</span></a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Fin banner 2 --}}

    </main>
    <!-- main content end -->
@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
            }
        })
    </script>
@endsection
