<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('inicio') }}">
                                {{-- <img class="logo-main" src="{{ asset('frontend/images_02/logo-dark.webp') }}"
                                    alt="">
                                <img class="logo-scroll" src="{{ asset('frontend/images_02/logo-dark.webp') }}"
                                    alt="">
                                <img class="logo-mobile" src="{{ asset('frontend/images_02/logo-dark.webp') }}"
                                    alt=""> --}}
                                <img class="logo-main" src="{{ asset('modo-gym/logo_2_white.png') }}" alt="" height="50">
                                <img class="logo-scroll" src="{{ asset('modo-gym/logo_2_white.png') }}" alt="" height="50">
                                <img class="logo-mobile" src="{{ asset('modo-gym/logo_2_white.png') }}" alt="" height="50">
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>

                    <div class="de-flex-col">
                        <div class="de-flex-col header-col-mid">
                            <ul id="mainmenu">
                                <li><a class="menu-item" href="{{ route('inicio') }}">Inicio</a></li>
                                <li><a class="menu-item" href="#acerca">Acerca de</a></li>
                                <li><a class="menu-item" href="#servicios">Servicios</a></li>
                                <li><a class="menu-item" href="#precios">Precios</a></li>
                                <li><a class="menu-item" href="#blog">Blog</a></li>
                                <li><a class="menu-item" href="#contacto">Contacto</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="de-flex-col">
                        <a class="btn-main fx-slide w-100" href="{{ route('login') }}"><span>Ingresar</span></a>

                        <div class="menu_side_area">
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
