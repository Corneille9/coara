<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Craft, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Craft - Bootstrap 5 HTML Admin Dashboard Theme" />
    <meta property="og:url" content="https://themes.getbootstrap.com/product/craft-bootstrap-5-admin-dashboard-theme" />
    <meta property="og:site_name" content="Keenthemes | Craft" />
    <link rel="canonical" href="https://preview.keenthemes.com/craft" />
    <title>Company Armada | Login</title>
    <link rel="shortcut icon" href="{{asset($resolved_assets."app/assets/media/logos/favicon.ico")}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if(isset($_COOKIE["mode"]) && $_COOKIE["mode"]=="light")
        <link href="{{asset($resolved_assets."app/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset($resolved_assets."app/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css"/>
    @else
        <link href="{{asset($resolved_assets."app/assets/plugins/global/plugins.dark.bundle.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset($resolved_assets."app/assets/css/style.dark.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endif
<!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
    <!--End::Google Tag Manager -->

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
            background-color: #fff;
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
            border-color: rgba(255,255,255,.4);
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
<!-- Body -->
<body class="dark-mode auth-bg">
<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
    </div>
</div>

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Multi-steps-->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-dark stepper-column" id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-400px positon-xl-relative bg-body">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-400px scroll-y">
                <!--begin::Header-->
                <div class="d-flex flex-row-fluid flex-column align-items-center align-items-lg-start p-10 p-lg-20">
                    <!--begin::Logo-->
                    <a href="{{route("welcome")}}" class="mb-10 mb-lg-20">
                        <img alt="Logo" src="{{asset($resolved_assets."app/assets/media/logos/logo-white.svg")}}" class="h-40px" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Header-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-250px" style="background-image: url({{$resolved_assets}}assets/media/illustrations/sigma-1/16-dark.png)"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form method="POST" class="my-auto pb-5" novalidate="novalidate" action="{{route("register")}}">
                        @csrf
                        <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h1 class="fw-boldest text-dark">Sélectionner le type de compte</h1>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-4">Pour plus d'informations, cliquez ici.
                                        <a href="#" class="link-primary">FAQ Page</a>
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Option-->
                                    <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                        <span class="svg-icon svg-icon-4x me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Info-->
                                        <span class="d-block fw-bold text-start">
                                            <span class="text-dark fw-boldest d-block fs-3">Compte personnel</span>
                                            <span class="text-gray-400 fw-bold fs-5">Vous êtes à la recherche d'un service, ou des offres ......</span>
                                        </span>
                                        <!--end::Info-->
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <input type="radio" class="btn-check" name="account_type" value="company" id="kt_create_account_form_account_type_corporate" />
                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-4x me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Info-->
                                        <span class="d-block fw-bold text-start">
                                            <span class="text-dark fw-boldest d-block fs-3">Compte entreprise</span>
                                            <span class="text-gray-400 fw-bold fs-5">Lorem ipsum dolor.</span>
                                        </span>
                                        <!--end::Info-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        <div class="d-flex flex-stack pt-15">
                            <div>
                                <button type="submit" class="btn btn-lg btn-primary">Continuer
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
											</svg>
									</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                <!--begin::Links-->
                <div class="d-flex flex-center fw-bold fs-6">
                    <a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                    <a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                    <a href="https://themes.getbootstrap.com/product/craft-bootstrap-5-admin-dashboard-theme" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Multi-steps-->
</div>
<!--end::Main-->

<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset($resolved_assets."app/assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/scripts.bundle.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/modals/create-account.js")}}"></script>
<!--end::Global Javascript Bundle-->

<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
</body>
</html>
