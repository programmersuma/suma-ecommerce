<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
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
        <link href="{{ asset('assets/backend/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{ asset('assets/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />


        <link href="{{ asset('assets/backend/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backend/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="dark-mode header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				@include('components.backend.index.sidebarleft')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                    @include('components.backend.index.header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row gy-5 g-xl-8">
									 <h1>Content</h1>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
                    @include('components.backend.index.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>
            var hostUrl = "{{ asset('assets/') }}";
        </script>

        <script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
        <script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/backend/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('assets/backend/js/custom/widgets.js') }}"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
