<!DOCTYPE html>
<html lang="en" data-theme-mode="dark" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma E-Commerce</title>
    <meta name="description"
        content="Program aplikasi e-commerce PT. Kharisma Suma Jaya Sakti (Sparepart Honda) berbasis website" />
    <meta name="keywords"
        content="Suma, Honda, Suma Honda, Kharisma, Kharisma Suma, Kharisma Suma Honda, Sparepart, Suma Sparepart, Suma Surabaya, Kharisma Suma Surabaya, E-Commerce, E Commerce, Marketplace, Market Place" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Suma e-commerce" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:site_name" content="Suma | Honda" />
    <link rel="canonical" href="{{ env('APP_URL') }}" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="{{ asset('assets/frontend/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/frontend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/frontend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled dark-mode">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('components.frontend.index.sidebarleft')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                <div class="header-mobile py-3">
                    <!--begin::Container-->
                    <div class="container d-flex flex-stack">
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="{{ env('APP_URL') }}">
                                <img alt="Logo" src="{{ asset('assets/images/logo/logo_suma_light.png') }}" class="h-35px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Aside toggle-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2x me-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header tablet and mobile-->
                <!--begin::Header-->
                <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
                    <!--begin::Container-->
                    <div class="header-container container-xxl">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                            <h1 class="d-flex flex-column text-dark fw-bolder my-1">
                                <span class="text-white fs-1">Suma e-Commerce</span>
                                <small class="text-gray-600 fs-6 fw-normal pt-2">PT. Kharisma Suma Jaya Sakti</small>
                            </h1>
                        </div>
                        <!--end::Page title=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                            @include('components.frontend.index.search')
                            <!--end::Search-->
                            <!--begin::Action-->
                            <div class="d-flex text-right py-3 py-lg-0">
                                <div class="d-flex align-items-center">
                                    <!--begin::Item-->
                                    @include('components.frontend.index.notification')
                                    @include('components.frontend.index.chat')
                                    @include('components.frontend.index.account')
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Theme mode docs-->
                                        <a class="btn btn-icon btn-custom btn-active-color-primary"
                                            href="../../demo9/dist/documentation/getting-started/dark-mode.html">
                                            <i class="fonticon-sun fs-2"></i>
                                        </a>
                                        <!--end::Theme mode docs-->
                                    </div>
                                    <!--end::Theme mode-->
                                </div>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                    <div class="header-offset"></div>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div class="container-xxl" id="kt_content_container">
                        @yield('container')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-gray-400 fw-bold me-1">Created by</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank"
                                    class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank"
                                    class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->

    <!--end::Main-->
    <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
    <!--begin::Help drawer-->
    <!--end::Engage drawers-->
    <!--begin::Engage toolbar-->
    <!--end::Engage toolbar-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                    rx="1" transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/frontend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/custom/widgets.js') }}"></script>
</body>

</html>
