<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>CoAra</title>
    <meta charset="utf-8"/>
    {{--    <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets."/>--}}
    {{--    <meta name="keywords" content="Craft, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard"/>--}}
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1"/>--}}
    {{--    <meta property="og:locale" content="en_US"/>--}}
    {{--    <meta property="og:type" content="article"/>--}}
    {{--    <meta property="og:title" content="Craft - Bootstrap 5 HTML Admin Dashboard Theme"/>--}}
    {{--    <meta property="og:url" content="https://themes.getbootstrap.com/product/craft-bootstrap-5-admin-dashboard-theme"/>--}}
    {{--    <meta property="og:site_name" content="Keenthemes | Craft"/>--}}
    {{--    <link rel="canonical" href="https://preview.keenthemes.com/craft"/>--}}
    <link rel="shortcut icon" href="{{asset($resolved_assets."app/assets/media/logos/favicon.ico")}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset($resolved_assets."app/assets/plugins/custom/leaflet/leaflet.bundle.css")}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset($resolved_assets."app/assets/plugins/custom/datatables/datatables.bundle.css")}}"
          rel="stylesheet" type="text/css"/>
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if(isset($_COOKIE["mode"]) && $_COOKIE["mode"]=="light")
        <link href="{{asset($resolved_assets."app/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset($resolved_assets."app/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css"/>
    @else
        <link href="{{asset($resolved_assets."app/assets/plugins/global/plugins.dark.bundle.css")}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset($resolved_assets."app/assets/css/style.dark.bundle.css")}}" rel="stylesheet"
              type="text/css"/>
@endif
<!--end::Global Stylesheets Bundle-->
    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: {{isset($_COOKIE["mode"])?$_COOKIE["mode"]=="light"?"#fff":"#131022":"#131022"}};
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #131022;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }

        .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .dark-mode .page-spinner {
            border-color: rgba(255, 255, 255, .4);
            border-right-color: transparent;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <!--Begin::Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            const f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>
    <!--End::Google Tag Manager -->

    <!-- Page loading scripts -->
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" 
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
<!--begin::Main-->

<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
    </div>
</div>

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="{{route("app.news")}}">
                    <img alt="Logo" src="{{asset($resolved_assets."app/assets/media/logos/logo-default.svg")}}"
                         class="max-h-50px logo-default"/>
                    <img alt="Logo" src="{{asset($resolved_assets."app/assets/media/logos/logo-minimize.svg")}}"
                         class="max-h-50px logo-minimize"/>
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <!--begin::Menu-->
                <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
                    id="kt_aside_menu" data-kt-menu="true">
                    <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper"
                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                         data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_menu"
                         data-kt-scroll-offset="20px" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
                        <div class="menu-item @if(Route::getCurrentRoute()->uri=="app/news") here @endif">
                            <a class="menu-link" href="{{route("app.news")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-title">Fil d'actualités</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route("app.company.dashboard")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path
                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                        fill="black"/>
													<path opacity="0.3"
                                                          d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-title">Tableau de bord</span>
                            </a>
                        </div>
                        <div
                            class="menu-item @if(Route::getCurrentRoute()->uri=="app/search") here @elseif(str_starts_with(Route::getCurrentRoute()->uri, "search/")) show menu-accordion @endif">
                            <a class="menu-link" href="{{route("app.search")}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                                                fill="black"/>
                                            <path opacity="0.3"
                                                  d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                                                  fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Rechercher</span>
                                @if(str_starts_with(Route::getCurrentRoute()->uri, "app/search/"))
                                    <span class="menu-arrow"></span>
                                @endif
                            </a>
                            @if(str_starts_with(Route::getCurrentRoute()->uri, "app/search/"))
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link active" href="">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                            <span class="menu-title">Offres</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route("app.company.tables")}}">
                                <span class="menu-icon">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                    fill="black"/>
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                      fill="black"/>
                                            </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Vos Tableaux
                                    <span
                                        class="badge badge-changelog badge-light-warning bg-hover-warning text-hover-white fw-bold fs-9 px-2 ms-2">!</span>
                                </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route("app.enterprises.list")}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black"/>
                                            <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Voir les Entreprises</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route("app.personal.settings")}}">
                                <span class="menu-icon">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
                                            </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Compte
                                    <span
                                        class="badge badge-changelog badge-light-warning bg-hover-warning text-hover-white fw-bold fs-9 px-2 ms-2">!</span>
                                </span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black"/>
                                            <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Compte</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route("app.company.settings")}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Paramètre</span>
                                    </a>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
										<span class="menu-title">Gérer les utilisateurs</span>
										<span class="menu-arrow"></span>
									</span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route("app.company.users.list")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                                <span class="menu-title">Utilisateurs</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route("app.company.roles.list")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                                <span class="menu-title">Roles</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route("app.company.permissions")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                                <span class="menu-title">Permissions</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route("app.company.security")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Paramètres de Sécurité</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route("app.company.apikeys")}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Vos Clés Api</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
                <a href="index-2.html" class="btn btn-light-primary w-100">Button</a>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                 data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Logo bar-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <!--begin::Aside Toggle-->
                        <div class="d-flex align-items-center d-lg-none">
                            <div class="btn btn-icon btn-active-color-primary ms-n2 me-1" id="kt_aside_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="black"/>
												<path opacity="0.3"
                                                      d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                      fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside Toggle-->
                        <!--begin::Logo-->
                        <a href="index-2.html" class="d-lg-none">
                            <img alt="Logo" src="{{asset($resolved_assets."app/assets/media/logos/logo-compact.svg")}}"
                                 class="mh-40px"/>
                        </a>
                        <!--end::Logo-->
                        <!--begin::Aside toggler-->
                        <div
                            class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex me-2 me-lg-5"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="aside-minimize">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr060.svg-->
                            <span class="svg-icon svg-icon-2 rotate-180">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
											<path
                                                d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                                fill="black"/>
											<path
                                                d="M6.2238 13.2561C5.54282 12.5572 5.54281 11.4429 6.22379 10.7439L10.377 6.48107C10.8779 5.96697 11.75 6.32158 11.75 7.03934V16.9607C11.75 17.6785 10.8779 18.0331 10.377 17.519L6.2238 13.2561Z"
                                                fill="black"/>
											<rect opacity="0.3" x="2" y="4" width="2" height="16" rx="1" fill="black"/>
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Aside toggler-->
                    </div>
                    <!--end::Logo bar-->
                    <!--begin::Topbar-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-stretch">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="d-flex align-items-center w-lg-400px"
                                 data-kt-search-keypress="true" data-kt-search-min-length="2"
                                 data-kt-search-enter="enter" data-kt-search-layout="menu"
                                 data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                 data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                    <div class="btn btn-icon btn-icon-gray-500 btn-active-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="black"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="black"/>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->
                                <!--begin::Form-->
                                <form data-kt-search-element="form"
                                      class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden"/>
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span
                                        class="svg-icon svg-icon-2 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                          height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                          fill="black"/>
													<path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-flush ps-10" name="search"
                                           value="" placeholder="Search..." data-kt-search-element="input"/>
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                          data-kt-search-element="spinner">
												<span
                                                    class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
											</span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="btn btn-flush btn-icon-gray-600 btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                        data-kt-search-element="clear">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                              rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                              transform="rotate(45 7.41422 6)" fill="black"/>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
											</span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                     class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Categories-->
                                        <div data-kt-search-element="categories"
                                             class="d-flex overflow-auto position-relative" data-kt-buttons="true">
                                            <!--begin::Category items-->
                                            <a class="btn btn-light-primary active rounded-pill me-1 py-2 px-4"
                                               data-kt-search-category="all">All</a>
                                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                               data-kt-search-category="targets">Targets</a>
                                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                               data-kt-search-category="projects">Projects</a>
                                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                               data-kt-search-category="users">Users</a>
                                            <!--end::Category items-->
                                            <!--begin::Preferences toggle-->
                                            <div data-kt-search-element="preferences-show"
                                                 class="btn btn-icon btn-sm btn-active-color-primary ms-auto">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                      rx="4" fill="black"/>
																<rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                      fill="black"/>
																<rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                      fill="black"/>
																<rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                      fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Preferences toggle-->
                                        </div>
                                        <!--end::Categories-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200 my-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                                <!--begin::Category title-->
                                                <h3 class="fs-4 fw-bold m-0 pb-5"
                                                    data-kt-search-element="category-title">Targets</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/volicity-9.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
                                                        <span class="badge badge-light">UI Design</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/tvit.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Company Re-branding</span>
                                                        <span class="badge badge-light">Web Development</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/misc/infography.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800 me-2">Business Analytics App</span>
                                                        <span class="badge badge-light">Administration</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/atica.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
                                                        <span class="badge badge-light">Database Design</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/rgb.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
                                                        <span class="badge badge-light">Server Setup</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/leaf.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
                                                        <span class="badge badge-light">Marketing</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="targets">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/tower.svg")}}"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Tower Group Website</span>
                                                        <span class="badge badge-light">Google Adwords</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-4 fw-bold m-0 pt-10 pb-5"
                                                    data-kt-search-element="category-title">Projects</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                                        <span class="fs-7 text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                                                  fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                                                  fill="black"/>
																			<path
                                                                                d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                                                fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                                        <span class="fs-7 text-muted">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                                  fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                                        <span class="fs-7 text-muted">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                                  fill="black"/>
																			<path
                                                                                d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                                fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                                        <span class="fs-7 text-muted">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<rect x="8" y="9" width="3" height="10"
                                                                                  rx="1.5" fill="black"/>
																			<rect opacity="0.5" x="13" y="5" width="3"
                                                                                  height="14" rx="1.5" fill="black"/>
																			<rect x="18" y="11" width="3" height="8"
                                                                                  rx="1.5" fill="black"/>
																			<rect x="3" y="13" width="3" height="6"
                                                                                  rx="1.5" fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                                        <span class="fs-7 text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                                                  fill="black"/>
																			<rect x="6" y="12" width="7" height="2"
                                                                                  rx="1" fill="black"/>
																			<rect x="6" y="7" width="12" height="2"
                                                                                  rx="1" fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                                        <span class="fs-7 text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="projects">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                                        <span class="fs-7 text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-4 fw-bold m-0 pt-10 pb-5"
                                                    data-kt-search-element="category-title">Users</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-1.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                                        <span class="badge badge-light">Marketing Manager</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-3.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
                                                        <span class="badge badge-light">Software Engineer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-4.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Sean Wild</span>
                                                        <span class="badge badge-light">Web Developer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-6.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                                        <span class="badge badge-light">Google Expert</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-8.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Ana Clark</span>
                                                        <span class="badge badge-light">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-11.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
                                                        <span class="badge badge-light">Art Director</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                   data-kt-search-category="users">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/avatars/150-12.jpg")}}"
                                                            alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
                                                        <span class="badge badge-light">System Administrator</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="recently-viewed">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-bold">
                                                <span class="text-muted fs-5 me-2">Recently Viewed:</span>
                                                <!--begin::Clear-->
                                                <div data-kt-search-element="recently-viewed-clear"
                                                     class="btn btn-link fw-6">Clear
                                                </div>
                                                <!--end::Clear-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                                        <span class="fs-7 text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                                                  fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                                                  fill="black"/>
																			<path
                                                                                d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                                                fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                                        <span class="fs-7 text-muted">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                                  fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                                        <span class="fs-7 text-muted">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                                  fill="black"/>
																			<path
                                                                                d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                                fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                                        <span class="fs-7 text-muted">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<rect x="8" y="9" width="3" height="10"
                                                                                  rx="1.5" fill="black"/>
																			<rect opacity="0.5" x="13" y="5" width="3"
                                                                                  height="14" rx="1.5" fill="black"/>
																			<rect x="18" y="11" width="3" height="8"
                                                                                  rx="1.5" fill="black"/>
																			<rect x="3" y="13" width="3" height="6"
                                                                                  rx="1.5" fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                                        <span class="fs-7 text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path opacity="0.3"
                                                                                  d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                                                  fill="black"/>
																			<rect x="6" y="12" width="7" height="2"
                                                                                  rx="1" fill="black"/>
																			<rect x="6" y="7" width="12" height="2"
                                                                                  rx="1" fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                                        <span class="fs-7 text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-4">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                                fill="black"/>
																			<path opacity="0.3"
                                                                                  d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                                  fill="black"/>
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="fw-bold">
                                                        <span
                                                            class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                                        <span class="fs-7 text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Message-->
                                            <div class="text-muted fw-bold fs-5 py-10">No result found</div>
                                            <!--end::Message-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img
                                                    src="{{asset($resolved_assets."app/assets/media/illustrations/sigma-1/1.png")}}"
                                                    alt=""
                                                    class="mw-100 mh-200px"/>
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Preferences-->
                                    <div data-kt-search-element="preferences" class="d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-bold text-dark pb-10 m-0">Search Preferences</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Projects</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Targets</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Affiliate Programs</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Referrals</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Users</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-10">
                                            <button type="reset"
                                                    class="btn btn-light btn-active-light-primary me-2 px-6"
                                                    data-kt-search-element="preferences-dismiss">Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary px-6">Save Changes</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Preferences-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Activities-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                     id="kt_activities_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"/>
													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                          fill="black"/>
													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"/>
													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Drawer toggle-->
                            </div>
                            <!--end::Activities-->
                            <!--begin::Quick links-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                     data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path
                                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                        fill="black"/>
													<path
                                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                        fill="black"/>
													<path opacity="0.3"
                                                          d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                          fill="black"/>
													<path opacity="0.3"
                                                          d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                          fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-300px" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                         style="background-image:url('app/assets/media/misc/pattern-2.jpg')">
                                        <!--begin::Title-->
                                        <h3 class="pt-10 text-white fw-boldest fs-3 px-9">Quick Links</h3>
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch nav-tabs-light fw-bold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link active pb-4" data-bs-toggle="tab"
                                                   href="#kt_topbar_quick_link_1">Projects</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link pb-4" data-bs-toggle="tab"
                                                   href="#kt_topbar_quick_link_2">Campaigns</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link pb-4" data-bs-toggle="tab"
                                                   href="#kt_topbar_quick_link_3">Targets</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_topbar_quick_link_1">
                                            <!--begin::Items-->
                                            <div class="px-9 pt-6 pb-4">
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/fox-hub.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Mivy
                                                            App</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools
                                                            application
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/leaf.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Leaf
                                                            CRM</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps
                                                            &amp; tools
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/atica.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Atica
                                                            SR</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based
                                                            snow app
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/treva.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Avionica</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with
                                                            Garmin Sync
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-5 text-center border-top">
                                                <a href="pages/projects/list.html" class="btn bg-body text-primary p-0">View
                                                    All Projects
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                      rx="1" transform="rotate(-180 18 13)"
                                                                      fill="black"/>
																<path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                                    <!--end::Svg Icon--></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_topbar_quick_link_2">
                                            <!--begin::Items-->
                                            <div class="px-9 pt-6 pb-4">
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/atica.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Atica
                                                            SR</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based
                                                            snow app
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/leaf.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Leaf
                                                            CRM</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps
                                                            &amp; tools
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/treva.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Avionica</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with
                                                            Garmin Sync
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/fox-hub.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Mivy
                                                            App</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools
                                                            application
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-5 text-center border-top">
                                                <a href="pages/profile/campaigns.html"
                                                   class="btn bg-body text-primary p-0">View All Campaigns
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                      rx="1" transform="rotate(-180 18 13)"
                                                                      fill="black"/>
																<path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                                    <!--end::Svg Icon--></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_topbar_quick_link_3">
                                            <!--begin::Items-->
                                            <div class="px-9 pt-6 pb-4">
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/fox-hub.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Mivy
                                                            App</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools
                                                            application
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/atica.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Atica
                                                            SR</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based
                                                            snow app
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/treva.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Avionica</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with
                                                            Garmin Sync
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/leaf.svg")}}"
                                                        class="w-25px me-5" alt=""/>
                                                    <div class="pe-2">
                                                        <a href="#"
                                                           class="fs-5 text-gray-800 text-hover-primary fw-boldest">Leaf
                                                            CRM</a>
                                                        <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps
                                                            &amp; tools
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-5 text-center border-top">
                                                <a href="pages/projects/targets.html"
                                                   class="btn bg-body text-primary p-0">View All Targets
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                      rx="1" transform="rotate(-180 18 13)"
                                                                      fill="black"/>
																<path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                                    <!--end::Svg Icon--></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Quick links-->
                            <!--begin::Chat-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3">
                                <!--begin::Menu wrapper-->
                                <div
                                    class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
                                    id="kt_drawer_chat_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                          fill="black"/>
													<rect x="6" y="12" width="7" height="2" rx="1" fill="black"/>
													<rect x="6" y="7" width="12" height="2" rx="1" fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                            <!--begin::Notifications-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3">
                                <!--begin::Menu wrapper-->
                                <div
                                    class="btn btn-icon btn-active-light-primary ?php echo $toolbarButtonHeightClass?&gt;"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                         style="background-image:url('app/assets/media/misc/pattern-2.jpg')">
                                        <!--begin::Title-->
                                        <h3 class="pt-10 text-white fw-boldest fs-3 px-9">Notifications
                                            <span class="fs-7 fw-500 opacity-75 ps-3">24 reports</span></h3>
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch nav-tabs-light fw-bold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link pb-4" data-bs-toggle="tab"
                                                   href="#kt_topbar_notifications_1">My Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active pb-4" data-bs-toggle="tab"
                                                   href="#kt_topbar_notifications_2">Events</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade pt-9" id="kt_topbar_notifications_1" role="tabpanel">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center px-9 mb-4">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-5">
															<span class="symbol-label">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                              fill="black"/>
																		<path
                                                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Developer
                                                        Library added</a>
                                                    <div class="text-gray-400 fw-bold fs-7">2 hours ago</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center px-9 mb-4">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-5">
															<span class="symbol-label">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M22 7H2V11H22V7Z" fill="black"/>
																		<path opacity="0.3"
                                                                              d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                              fill="black"/>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopping/Credit-card.svg</a>
                                                    <div class="text-gray-400 fw-bold fs-7">1 day ago</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center px-9 mb-4">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-5">
															<span class="symbol-label">
																<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path
                                                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                            fill="black"/>
																		<path opacity="0.3"
                                                                              d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                              fill="black"/>
																		<path opacity="0.3"
                                                                              d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                              fill="black"/>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">New
                                                        Order placed</a>
                                                    <div class="text-gray-400 fw-bold fs-7">5 days ago</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center px-9 mb-4">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-5">
															<span class="symbol-label">
																<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path
                                                                            d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                            fill="black"/>
																		<path opacity="0.3"
                                                                              d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                              fill="black"/>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">New
                                                        user library added</a>
                                                    <div class="text-gray-400 fw-bold fs-7">2 weeks ago</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center px-9 mb-8">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-5">
															<span class="symbol-label">
																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                                              fill="black"/>
																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                              fill="black"/>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Developer
                                                        Library added</a>
                                                    <div class="text-gray-400 fw-bold fs-7">1 month ago</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::View more-->
                                            <div class="py-5 text-center border-top">
                                                <a href="pages/profile/activity.html"
                                                   class="btn bg-body text-primary p-0">View All
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                      rx="1" transform="rotate(-180 18 13)"
                                                                      fill="black"/>
																<path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                                    <!--end::Svg Icon--></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                             role="tabpanel">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column px-9">
                                                <!--begin::Section-->
                                                <div class="pt-12">
                                                    <!--begin::Title-->
                                                    <h2 class="text-dark text-center fw-boldest">Get Pro Access</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="text-center text-gray-500 fs-5 fw-bold pt-1">Outlines
                                                        keep you honest. They stoping you from amazing poorly about
                                                        drive
                                                    </div>
                                                    <!--end::Text-->
                                                    <!--begin::Action-->
                                                    <div class="text-center mt-5 mb-9">
                                                        <a href="#" class="btn btn-sm btn-primary px-6"
                                                           data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Get
                                                            Pro Access</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-5">
                                                    <img
                                                        src="{{asset($resolved_assets."app/assets/media/illustrations/sigma-1/8.png")}}"
                                                        alt=""
                                                        class="mw-100 mh-175px"/>
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-lg-35px"
                                     data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."assets/img/blog/single/cover-image.jpg")}}"/>
                                </div>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo"
                                                     src="{{asset($resolved_assets."assets/img/blog/single/cover-image.jpg")}}"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">Hello, Brand
                                                    <span
                                                        class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">brad@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="pages/profile/overview.html" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">My Account</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="pages/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
														<span
                                                            class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
													</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="left-start">
                                        <a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Language
													<span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2"
                                                         src="{{asset($resolved_assets."app/assets/media/flags/united-states.svg")}}"
                                                         alt=""/></span></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1"
                                                                 src="{{asset($resolved_assets."app/assets/media/flags/united-states.svg")}}"
                                                                 alt=""/>
														</span>English</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1"
                                                                 src="{{asset($resolved_assets."app/assets/media/flags/spain.svg")}}"
                                                                 alt=""/>
														</span>Spanish</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1"
                                                                 src="{{asset($resolved_assets."app/assets/media/flags/germany.svg")}}"
                                                                 alt=""/>
														</span>German</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1"
                                                                 src="{{asset($resolved_assets."app/assets/media/flags/japan.svg")}}"
                                                                 alt=""/>
														</span>Japanese</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1"
                                                                 src="{{asset($resolved_assets."app/assets/media/flags/france.svg")}}"
                                                                 alt=""/>
														</span>French</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <form method="POST" action="{{route('logout')}}">
                                            @csrf
                                            <a class="menu-link px-5"
                                               onclick="event.preventDefault();this.closest('form').submit();">Se
                                                déconnecter</a>
                                        </form>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <div class="menu-content px-5">
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                                for="kt_user_menu_dark_mode_toggle">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                       name="mode" id="user_menu_dark_mode_toggle"
                                                       data-kt-url="" {{isset($_COOKIE["mode"])?$_COOKIE["mode"]=="dark"?"checked":"":""}}/>
                                                <span class="pulse-ring ms-n1"></span>
                                                <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User -->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">

                @yield("toolbar")

                <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                @yield("content")
                <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                 data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                 data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::Timeline items-->
                <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                                                      fill="black"/>
												<path
                                                    d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp”
                                    project:
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-11.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
                                        with customer</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">Application Design</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset($resolved_assets."app/assets/media/avatars/150-3.jpg")}}"
                                                 alt="img"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset($resolved_assets."app/assets/media/avatars/150-11.jpg")}}"
                                                 alt="img"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A
                                            </div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
                                        Delivery Preparation</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">CRM System Development</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset($resolved_assets."app/assets/media/avatars/150-5.jpg")}}"
                                                 alt="img"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B
                                            </div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                      fill="black"/>
												<path
                                                    d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::Timeline heading-->
                            <div class="pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human
                                    workshop
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-2.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                      fill="black"/>
												<path
                                                    d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming
                                    Project Files:</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-6.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3"
                                             src="{{asset($resolved_assets."app/assets/media/svg/files/pdf.svg")}}"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance KPI App
                                                Guidelines</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">1.9mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3"
                                             src="{{asset($resolved_assets."app/assets/media/svg/files/doc.svg")}}"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
                                                Results</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">18kb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3"
                                             src="{{asset($resolved_assets."app/assets/media/svg/files/css.svg")}}"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">20mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                      fill="black"/>
												<path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Task
                                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
                                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin
                                    Dashboard project:
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-11.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                      fill="black"/>
												<path
                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-3.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-100px"
                                                 src="{{asset($resolved_assets."app/assets/media/misc/5.jpg")}}"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-100px"
                                                 src="{{asset($resolved_assets."app/assets/media/misc/6.jpg")}}"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-100px"
                                                 src="{{asset($resolved_assets."app/assets/media/misc/7.jpg")}}"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path
                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                    fill="black"/>
												<path opacity="0.3"
                                                      d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                      fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New case
                                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in
                                    Multi-platform Database Design project
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                      fill="black"/>
												<path
                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                    fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="{{asset($resolved_assets."app/assets/media/avatars/150-14.jpg")}}"
                                             alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                          fill="black"/>
													<path
                                                        d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                        fill="black"/>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!</h4>
                                            <div class="fs-6 text-gray-700 pe-7">Login into Craft Admin Dashboard to
                                                make sure the data integrity is OK
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Action-->
                                        <a href="#"
                                           class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path
                                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                    fill="black"/>
												<path opacity="0.3"
                                                      d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                      fill="black"/>
												<path opacity="0.3"
                                                      d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                      fill="black"/>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New order
                                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow
                                    Planning &amp; Budget Estimation
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                </div>
                <!--end::Timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="pages/profile/activity.html" class="btn bg-body text-primary">View All Activities
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                  transform="rotate(-180 18 13)" fill="black"/>
							<path
                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                fill="black"/>
						</svg>
					</span>
                <!--end::Svg Icon--></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true"
     data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}"
     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle"
     data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">Add Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="Specify a contact email to send an invitation"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create
                                        Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite
                                        Members</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                             data-kt-element="message-text">How likely are you to recommend our company to your friends
                            and family ?
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                             data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
                            been subscribed to a repository on GitHub.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                             data-kt-element="message-text">Ok, Understood!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                             data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                             data-kt-element="message-text">You can unwatch this repository immediately by clicking
                            here:
                            <a href="https://keenthemes.com/">Keenthemes.com</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                             data-kt-element="message-text">Most purchased Business courses during this sale!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                             data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
                            goals. Food and drinks provided
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                             data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->
                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                             data-kt-element="message-text">Right before vacation season we have the next Big Deal for
                            you.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="Type a message"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Create Project-->
<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <div class="fs-1 fw-boldest">Create Project</div>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Project Type</h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Project Settings</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Budget</h3>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Build A Team</h3>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Set First Target</h3>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Step 6-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Upload Files</h3>
                            </div>
                            <!--end::Step 6-->
                            <!--begin::Step 7-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Completed</h3>
                            </div>
                            <!--end::Step 7-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->
                        <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                              id="kt_modal_create_project_form">
                            <!--begin::Type-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-7 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Project Type</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bolder">FAQ Page</a></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15" data-kt-buttons="true">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" checked="checked" name="project_type"
                                                   value="1"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
														<!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
														<span class="svg-icon svg-icon-3hx">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path
                                                                    d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                                    fill="black"/>
																<path opacity="0.3"
                                                                      d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                                      fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-boldest text-gray-900 mb-2 d-block">Personal Project</span>
															<span class="fw-bold fs-4 text-gray-400">If you need more info, please check it out</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="project_type" value="2"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
														<!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
														<span class="svg-icon svg-icon-3hx">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect x="2" y="2" width="9" height="9" rx="2"
                                                                      fill="black"/>
																<rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                                      rx="2" fill="black"/>
																<rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                                      rx="2" fill="black"/>
																<rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                                      rx="2" fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-boldest text-gray-900 mb-2 d-block">Team Project</span>
															<span class="fw-bold fs-4 text-gray-400">Create corporate account to manage users</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="type-next">
                                            <span class="indicator-label">Project Settings</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Type-->
                            <!--begin::Settings-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Project Settings</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_project_settings_logo">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                                <span class="svg-icon svg-icon-3hx svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 12.6L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L8 12.6H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V12.6H16Z"
                                                                      fill="black"/>
																<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                      fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-boldest text-gray-900 mb-1">Drop files here or
                                                        click to upload.</h3>
                                                    <span
                                                        class="fw-bold fs-4 text-gray-400">Upload up to 10 files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Customer</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select..."
                                                name="settings_customer">
                                            <option></option>
                                            <option value="1">Keenthemes</option>
                                            <option value="2">Craft</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">Project Name</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Specify project name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Enter Project Name" value="StockPro Mobile App"
                                               name="settings_name"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Project Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" rows="3"
                                                  placeholder="Enter Project Description" name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Release Date</label>
                                        <!--end::Label-->
                                        <!--begin::Wrapper-->
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
                                                                  d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                  fill="black"/>
															<path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="black"/>
															<path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="black"/>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid ps-12"
                                                   placeholder="Pick date rage" name="settings_release_date"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="required fs-6 fw-bold">Notifications</label>
                                                <div class="fs-7 fw-bold text-gray-400">Allow Notifications by Phone or
                                                    Email
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                           value="email" name="settings_notifications[]"/>
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-bold">Email</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                           value="phone" checked="checked"
                                                           name="settings_notifications[]"/>
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-bold">Phone</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--begin::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="settings-previous">Project Type
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="settings-next">
                                            <span class="indicator-label">Budget</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Settings-->
                            <!--begin::Budget-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Budget</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Setup Budget</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                               data-bs-trigger="hover" data-bs-html="true"
                                               data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Dialer-->
                                        <div class="position-relative w-lg-250px"
                                             id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
                                             data-kt-dialer-min="50" data-kt-dialer-max="50000"
                                             data-kt-dialer-step="100" data-kt-dialer-prefix="$"
                                             data-kt-dialer-decimals="2">
                                            <!--begin::Decrease control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                    data-kt-dialer-control="decrease">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                      rx="5" fill="black"/>
																<rect x="6.0104" y="10.9247" width="12" height="2"
                                                                      rx="1" fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control form-control-solid border-0 ps-12"
                                                   data-kt-dialer-control="input" placeholder="Amount"
                                                   name="budget_setup" readonly="readonly" value="$50"/>
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                    data-kt-dialer-control="increase">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                      rx="5" fill="black"/>
																<rect x="10.8891" y="17.8033" width="12" height="2"
                                                                      rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                                      fill="black"/>
																<rect x="6.01041" y="10.9247" width="12" height="2"
                                                                      rx="1" fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Budget Usage</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-9" data-kt-buttons="true"
                                             data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio"
                                                                       name="budget_usage" value="1" checked="checked"/>
															</span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
																<span
                                                                    class="fs-4 fw-boldest text-gray-800 mb-2 d-block">Precise Usage</span>
																<span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio"
                                                                       name="budget_usage" value="2"/>
															</span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
																<span
                                                                    class="fs-4 fw-boldest text-gray-800 mb-2 d-block">Extreme Usage</span>
																<span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-bold text-gray-400">If you need more info, please
                                                    check budget planning
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       name="budget_allow" checked="checked"/>
                                                <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="budget-previous">Project Settings
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="budget-next">
                                            <span class="indicator-label">Build Team</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Budget-->
                            <!--begin::Team-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Build a Team</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Invite Teammates</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Add project memnbers by name or email.."
                                               name="invite_teammates"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <div class="fs-6 fw-bold mb-2">Team Members</div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-1.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-bold text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-4.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-8.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-6.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-7.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-bold text-gray-400">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-17.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-10.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                             src="{{asset($resolved_assets."app/assets/media/avatars/150-17.jpg")}}"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Notice-->
                                    <div class="d-flex flex-stack mb-15">
                                        <!--begin::Label-->
                                        <div class="me-5 fw-bold">
                                            <label class="fs-6">Adding Users by Team Members</label>
                                            <div class="fs-7 text-gray-400">If you need more info, please check budget
                                                planning
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" checked="checked"/>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="team-previous">Budget
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="team-next">
                                            <span class="indicator-label">Set Target</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Team-->
                            <!--begin::Targets-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Set First Target</h1>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a></div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="fs-6 fw-bold mb-2">Target Title</label>
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Enter Target Title" name="Project Launch"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-8">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">Assign</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                                    name="target_assign">
                                                <option></option>
                                                <option value="1">Karina Clark</option>
                                                <option value="2" selected="selected">Robert Doe</option>
                                                <option value="3">Niel Owen</option>
                                                <option value="4">Olivia Wild</option>
                                                <option value="5">Sean Bean</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                      fill="black"/>
																<path
                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                    fill="black"/>
																<path
                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-solid ps-12"
                                                       placeholder="Pick date range" name="target_due_date"/>
                                                <!--end::Datepicker-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="fs-6 fw-bold mb-2">Target Details</label>
                                        <textarea class="form-control form-control-solid" rows="2" name="target_details"
                                                  placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="required fs-6 fw-bold mb-2">Tags</label>
                                        <input class="form-control form-control-solid" value="Important, Urgent"
                                               name="target_tags"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-bold text-gray-400">If you need more info, please
                                                    check budget planning
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       name="target_allow" checked="checked"/>
                                                <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-bold">Notifications</label>
                                                <div class="fs-7 fw-bold text-gray-400">Allow Notifications by Phone or
                                                    Email
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                           value="email" name="target_notifications[]"/>
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-bold">Email</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                           value="phone" checked="checked"
                                                           name="target_notifications[]"/>
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-bold">Phone</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="targets-previous">Build a Team
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="targets-next">
                                            <span class="indicator-label">Upload Files</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Targets-->
                            <!--begin::Files-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Upload Files</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_project_files_upload">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                                <span class="svg-icon svg-icon-3hx svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 12.6L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L8 12.6H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V12.6H16Z"
                                                                      fill="black"/>
																<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                      fill="black"/>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-boldest text-gray-900 mb-1">Drop files here or
                                                        click to upload.</h3>
                                                    <span
                                                        class="fw-bold fs-4 text-gray-400">Upload up to 10 files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Uploaded File</label>
                                        <!--End::Label-->
                                        <!--begin::Files-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/svg/files/pdf.svg")}}"
                                                            alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Avionica
                                                            Technical Requirements</a>
                                                        <div class="fw-bold text-gray-400">230kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/svg/files/doc.svg")}}"
                                                            alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">9
                                                            Degree CURD draftplan</a>
                                                        <div class="fw-bold text-gray-400">3.6mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/svg/files/css.svg")}}"
                                                            alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">User
                                                            CRUD Styles</a>
                                                        <div class="fw-bold text-gray-400">85kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/svg/files/ai.svg")}}"
                                                            alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Craft
                                                            Initial Logo</a>
                                                        <div class="fw-bold text-gray-400">40kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img
                                                            src="{{asset($resolved_assets."app/assets/media/svg/files/tif.svg")}}"
                                                            alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                           class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Tower
                                                            Hill Bilboard</a>
                                                        <div class="fw-bold text-gray-400">27mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                        </div>
                                        <!--end::Files-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-bold text-gray-400">If you need more info, please
                                                    check budget planning
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       name="target_allow" checked="checked"/>
                                                <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="files-previous">Set First Target
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="files-next">
                                            <span class="indicator-label">Complete</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Files-->
                            <!--begin::Complete-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12 text-center">
                                        <!--begin::Title-->
                                        <h1 class="fw-boldest text-dark">Project Created!</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-gray-400 fw-bold fs-4">If you need more info, please check how
                                            to create project
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center pb-20">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="complete-start">Create New Project
                                        </button>
                                        <a href="pages/projects/project.html" class="btn btn-lg btn-primary">View
                                            Project</a>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-5">
                                        <img
                                            src="{{asset($resolved_assets."app/assets/media/illustrations/sigma-1/19.png")}}"
                                            alt=""
                                            class="mw-100 mh-300px"/>
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Complete-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--begin::Container-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Project-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <div class="fs-2x fw-boldest mb-1">Invite a Friend</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-3">If you need more info, please check out
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a></div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-boldest w-100 mb-8">
                    <img alt="Logo" src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/google-icon.svg")}}"
                         class="h-20px me-3"/>Invite
                    Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-gray-400 px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3"
                          placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-1.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Emma
                                        Smith</a>
                                    <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Melody
                                        Macy</a>
                                    <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-26.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Max
                                        Smith</a>
                                    <div class="fw-bold text-gray-400">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-4.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Sean
                                        Bean</a>
                                    <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-15.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Brian
                                        Cox</a>
                                    <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Mikaela
                                        Collins</a>
                                    <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-8.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Francis
                                        Mitcham</a>
                                    <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Olivia
                                        Wild</a>
                                    <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Neil
                                        Owen</a>
                                    <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-6.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Dan
                                        Wilson</a>
                                    <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Emma
                                        Bold</a>
                                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-7.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Ana
                                        Crown</a>
                                    <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Robert
                                        Doe</a>
                                    <div class="fw-bold text-gray-400">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-17.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">John
                                        Miller</a>
                                    <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Lucy
                                        Kunic</a>
                                    <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                         src="{{asset($resolved_assets."app/assets/media/avatars/150-10.jpg")}}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Ethan
                                        Wilder</a>
                                    <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-boldest text-gray-900 text-hover-primary mb-2">Emma
                                        Bold</a>
                                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-gray-400">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                        <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                          fill="black"/>
					<path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black"/>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<script>const hostUrl = "{{asset($resolved_assets."app/assets/index.hmtl")}}";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset($resolved_assets."app/assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset($resolved_assets."app/assets/plugins/custom/leaflet/leaflet.bundle.js")}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset($resolved_assets."app/assets/js/custom/modals/create-app.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/modals/select-location.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/widgets.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/apps/chat/chat.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/modals/create-project.bundle.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/modals/upgrade-plan.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/intro.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/plugins/custom/datatables/datatables.bundle.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/olapcubejs/cube.min.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/tables/coaraTable.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/charts/chartOptions.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/charts/chartBuilder.js")}}"></script>
<script>
    $("#user_menu_dark_mode_toggle").click(function () {
        const date = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000); // +2 day from now
        const options = {expires: date};
        if (KTCookie.get("mode") === "light") {
            KTCookie.set("mode", "dark", options);
        } else {
            KTCookie.set("mode", "light", options);
        }
        location.reload(true);
    })
</script>
<!--end::Page Custom Javascript-->
@yield("script")
<!--end::Javascript-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/craft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 00:57:04 GMT -->
</html>
