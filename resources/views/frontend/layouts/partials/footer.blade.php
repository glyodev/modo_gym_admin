<footer id="contacto">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('modo-gym/logo_2_white.png') }}" class="w-250px" alt="">
                <div class="spacer-20"></div>
                <p>{{ $info->info_descripcion }}</p>

                <div class="social-icons mb-sm-30">
                    <a href="{{ $info->info_facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                    {{-- <a href="{{ $info->info_twitter }}"><i class="fa-brands fa-x-twitter"></i></a> --}}
                    <a href="{{ $info->info_tiktok }}"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{{ $info->info_instagram }}"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{ $info->info_youtube }}"><i class="fa-brands fa-youtube"></i></a>
                    <a
                        href="https://wa.me/591{{ $info->info_whatsapp }}?text=%E2%80%8EHola%2C%20quiero%20mas%20informacion">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>Gimnasio</h5>
                            <ul>
                                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                                <li><a href="#acerca">Acerca de</a></li>
                                <li><a href="#servicios">Servicios</a></li>
                                <li><a href="#precios">Precios</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contacto">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>Nuestros servicios</h5>
                            <ul>
                                <li><a href="02_class-single.html">Morning Flow</a></li>
                                <li><a href="02_class-single.html">Vinyasa Yoga</a></li>
                                <li><a href="02_class-single.html">Core Balance Yoga</a></li>
                                <li><a href="02_class-single.html">Gentle Stretch</a></li>
                                <li><a href="02_class-single.html">Yin Yoga</a></li>
                                <li><a href="02_class-single.html">Mindful Meditation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                <div class="widget">
                    <div class="fw-bold"><i class="icofont-clock-time me-2 id-color"></i>Abierto
                    </div>
                    {{ $info->info_atencion }}

                    <div class="spacer-10"></div>

                    <div class="fw-bold"><i class="icofont-location-pin me-2 id-color"></i>Nuestra ubicación
                    </div>
                    {{ $info->info_direccion }}

                    <div class="spacer-10"></div>
                    <div class="fw-bold"><i class="icofont-whatsapp me-2 id-color"></i>Envianos un mensaje
                    </div>
                    <a href="https://wa.me/591{{ $info->info_whatsapp }}?text=%E2%80%8EHola%2C%20quiero%20mas%20informacion"
                        class="link fw-underline">
                        <i class="fa-brands fa-whatsapp"></i> {{ $info->info_whatsapp }}
                    </a>

                    <div class="spacer-10"></div>
                    <div class="fw-bold"><i class="icofont-envelope me-2 id-color"></i>Mas información
                    </div>
                    <a href="mailto:{{ $info->info_correo }}">{{ $info->info_correo }}</a><br>
                    {{ $info->info_contacto_1 }} - {{ $info->info_contacto_2 }} - {{ $info->info_contacto_3 }}
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            Copyright 2025 - Dev by&nbsp;<a href="https://garydev.link">Glyo</a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Terminos &amp; condiciones</a></li>
                            <li class="list-inline-item"><a href="#">Politica de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
