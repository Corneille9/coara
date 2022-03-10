<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from silicon.createx.studio/welcome.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 11:30:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Company Armada | Welcome</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords"
          content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/img-comparison-slider/dist/styles.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
    <link rel="stylesheet" media="screen" href="{{asset("assets/css/coara.css")}}">

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

    <!-- Theme mode -->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== undefined && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }
    </script>

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

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>


<!-- Body -->
<body>

<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
</noscript>

<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
    </div>
</div>


<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper">


    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg navbar-dark position-absolute navbar-sticky">
        <div class="container px-3">
            <a href="_views/index-2.html" class="navbar-brand pe-3">
                <img src="assets/img/logo.svg" width="47" alt="CoAra">
                CoAra
            </a>
            <img class="left-right-animation" src="assets/img/background-shape/blue-dot.png" alt="">
            <div class="dark-mode pe-lg-1 ms-auto me-4">
                <div class="form-check form-switch mode-switch" data-bs-toggle="mode">
                    <input type="checkbox" class="form-check-input" id="theme-mode">
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
                </div>
            </div>
            <div>
                <a href="{{route("login")}}" class="navbar-toggler btn btn-secondary btn-icon rounded" type="button" rel="noopener">
                    <i class='bx bxs-user fs-5 lh-1 me-1 p-5'></i>
                </a>
            </div>

            <a href="{{route("login")}}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex " rel="noopener">
                <i class='bx bxs-user fs-5 lh-1 me-1'></i>
                &nbsp;S'identifier
            </a>
        </div>
    </header>


    <!-- Hero -->
    <section class="position-relative">
        <div class="position-relative bg-dark zindex-4 pt-lg-3 pt-xl-5">

            <!-- Text -->
            <div class="container zindex-5 pt-5">
                <div class="row justify-content-center text-center pt-4 pb-sm-2 py-lg-5">
                    <div class="col-xl-8 col-lg-9 col-md-10 py-5">
                        <img class="img-fluid service-bg-shape-1 up-down-animation" src="assets/img/background-shape/yellow-triangle.png" alt="">
                        <img class="img-fluid team-bg-shape-2 up-down-animation" src="assets/img/background-shape/blue-half-cycle.png" alt="">
                        <img class="img-fluid up-down-animation" src="assets/img/background-shape/seo-half-cycle.png" alt="">
                        <img class="img-fluid team-bg-shape-4 up-down-animation" src="assets/img/background-shape/green-half-cycle.png" alt="">
                        <h1 class="display-4 pt-sm-2 pb-1 pb-sm-3 mb-3 text-gradient-primary">Company Armada<br> Votre Assistant de Gestion des Tâches </h1>
                        <img class="img-fluid seo-bg-shape-2 left-right-animation" src="assets/img/background-shape/seo-ball-1.png" alt="">
                        <p class="fs-lg text-light opacity-70 pb-2 pb-sm-0 mb-4 mb-sm-5">Nous vous proposons une
                            nouvelle génération de système de gestion de tâches et de projets. Planifiez, gérez et
                            suivez toutes vos tâches dans un seul logiciel flexible !</p>
                        <a href="#" class="btn btn-primary shadow-primary btn-lg">Je découvre</a>
                    </div>
                </div>
            </div>
            <img class="img-fluid team-bg-shape-3 up-down-animation" src="assets/img/background-shape/feature-bg-2.png" alt="">
            <img class="img-fluid feature-bg-2 left-right-animation" src="assets/img/background-shape/blue-half-cycle.png" alt="">
            <!-- Bottom shape -->
            <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n4 mt-sm-n1" style="color: var(--bs-gray-900);">
                <div class="position-relative start-50 translate-middle-x flex-shrink-0" style="width: 3788px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144">
                        <path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"/>
                    </svg>
                </div>
            </div>
            <div class="d-none d-lg-block" style="height: 300px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 150px;"></div>
        </div>
        <div class="position-relative zindex-5 mx-auto" style="max-width: 1250px;">
            <div class="d-none d-lg-block" style="margin-top: -300px;"></div>
            <div class="d-none d-md-block d-lg-none" style="margin-top: -150px;"></div>

            <!-- Parallax (3D Tilt) gfx -->
            <div class="tilt-3d" data-tilt data-tilt-full-page-listening data-tilt-max="12"
                 data-tilt-perspective="1200">
                <img src="assets/img/landing/saas-2/hero/layer01.png" alt="Dashboard">
                <div class="tilt-3d-inner position-absolute top-0 start-0 w-100 h-100">
                    <img src="assets/img/landing/saas-2/hero/layer02.png" alt="Cards">
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255,.05);"></div>
    </section>


    <!-- Features -->
    <section class="position-relative py-5">
        <div class="container position-relative zindex-5 pb-md-4 pt-md-2 pt-lg-3 pb-lg-5">
            <div class="row justify-content-center text-center pb-3 mb-sm-2 mb-lg-3">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <h2 class="h1 mb-lg-4">What Do You Get with Our Tool?</h2>
                    <p class="fs-lg text-muted mb-0">Make sure all your tasks are organized so you can set the
                        priorities and focus on important.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/cms.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Custom Software Development
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Nisi, dis sed cursus eget pellentesque mattis. Odio eu proin
                                aliquam a. Semper bibendum tellus non tellus, facilisi dignissim in quam massa. Aliquam,
                                feugiat ut cum tellus, sit. Quis consectetur gravida ac ac lectus cursus egestas.</p>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/rocket.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Software Integration
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Id eget blandit sapien cras massa lectus lorem placerat.
                                Quam dolor commodo fermentum bibendum dictumst. Risus pretium eget at viverra eget. Sit
                                neque adipiscing malesuada blandit justo, quam.</p>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Mobile App Development
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Nunc, justo, diam orci, dictum purus convallis risus.
                                Suscipit hendrerit at egestas id id blandit interdum est. Integer fames placerat turpis
                                pretium quis hac leo lacus. Orci, dictum nunc mus quis semper eu bibendum enim,
                                morbi.</p>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/analytics.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Business Analytics
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Gravida eget euismod tempus diam dignissim quam. Dignissim
                                magnis blandit faucibus convallis augue nisl, etiam. Feugiat ut molestie non arcu
                                senectus sed. Diam pellentesque sit mattis nec amet varius nunc a sed.</p>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/web-search.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Software Testing
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Quis rhoncus quam venenatis facilisi. Risus dis libero nisl
                                condimentum quis. Tincidunt ultricies vulputate ornare nunc rhoncus in. Ultrices dolor
                                eu natoque volutpat praesent curabitur ultricies.</p>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                    <a href="_views/services-single.html"
                       class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                        <div class="card-body pt-3">
                            <div
                                class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                                <img src="assets/img/services/timer.svg" class="d-block m-1" width="40" alt="Icon">
                            </div>
                            <h2 class="h4 d-inline-flex align-items-center">
                                Project Management
                                <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                            </h2>
                            <p class="fs-sm text-body mb-0">Massa dis morbi sagittis, tellus sit gravida. Id ut non ut
                                in faucibus eu, ac. Tempus feugiat enim id pellentesque a sagittis vitae, convallis.
                                Nunc, arcu enim orci ullamcorper aenean. Scelerisque eget a nibh bibendum commodo.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255,.05);"></div>
    </section>


    <!-- Light / Dark mode (Comparison slider) -->
    <section class="d-flex w-100 position-relative overflow-hidden">
        <div class="position-relative flex-xl-shrink-0 zindex-5 start-50 translate-middle-x" style="max-width: 1920px;">
            <div class="mx-md-n5 mx-xl-0">
                <div class="mx-n4 mx-sm-n5 mx-xl-0">
                    <div class="mx-n5 mx-xl-0">
                        <img-comparison-slider class="mx-n5 mx-xl-0">
                            <img slot="first" src="assets/img/landing/saas-2/dark-mode.jpg" alt="Dak Mode">
                            <img slot="second" src="assets/img/landing/saas-2/light-mode.jpg" alt="Light Mode">
                            <div slot="handle">
                                <svg class="text-primary shadow-primary rounded-circle" width="36" height="36"
                                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 36 36">
                                    <g>
                                        <circle fill="currentColor" cx="18" cy="18" r="18"/>
                                    </g>
                                    <path fill="#fff"
                                          d="M22.2,17.2h-8.3v-3.3L9.7,18l4.2,4.2v-3.3h8.3v3.3l4.2-4.2l-4.2-4.2V17.2z"/>
                                </svg>
                            </div>
                        </img-comparison-slider>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-50 h-100 bg-dark"></div>
        <div class="position-absolute top-0 end-0 w-50 h-100" style="background-color: #f3f6ff;"></div>
    </section>


    <!-- Testimonials -->
    <section class="container py-5 my-2 my-md-4 my-lg-5">
        <div class="row pt-2 py-xl-3">
            <div class="col-lg-3 col-md-4">
                <h2 class="h1 text-center text-md-start mx-auto mx-md-0 pt-md-2" style="max-width: 300px;">What <br
                        class="d-none d-md-inline">People Say <br class="d-none d-md-inline">About App:</h2>

                <!-- Slider controls (Prev / next buttons) -->
                <div class="d-flex justify-content-center justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
                    <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2">
                        <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2">
                        <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="swiper mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "loop": true,
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "1000": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit
                                            justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bx-star text-muted opacity-75"></i>
                                        <i class="bx bx-star text-muted opacity-75"></i>
                                    </div>
                                </div>
                                <figcaption class="d-flex align-items-center ps-4 pt-4">
                                    <img src="assets/img/avatar/16.jpg" width="48" class="rounded-circle"
                                         alt="Robert Fox">
                                    <div class="ps-3">
                                        <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                                        <span class="fs-xs text-muted">Founder of Lorem Company</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Phasellus luctus nisi id orci condimentum, at cursus nisl
                                            vestibulum. Orci varius natoque penatibus et magnis dis parturient montes
                                            commodo.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <figcaption class="d-flex align-items-center ps-4 pt-4">
                                    <img src="assets/img/avatar/08.jpg" width="48" class="rounded-circle"
                                         alt="Annette Black">
                                    <div class="ps-3">
                                        <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                                        <span class="fs-xs text-muted">CEO of Ipsum Company</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                            ipsum odio, bibendum ornare mi at, efficitur urna.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bx-star text-muted opacity-75"></i>
                                    </div>
                                </div>
                                <figcaption class="d-flex align-items-center ps-4 pt-4">
                                    <img src="assets/img/avatar/13.jpg" width="48" class="rounded-circle"
                                         alt="Jerome Bell">
                                    <div class="ps-3">
                                        <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                                        <span class="fs-xs text-muted">Founder of the Agency </span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Pellentesque finibus congue egestas egestas suspendisse blandit
                                            justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <figcaption class="d-flex align-items-center ps-4 pt-4">
                                    <img src="assets/img/avatar/09.jpg" width="48" class="rounded-circle"
                                         alt="Albert Flores">
                                    <div class="ps-3">
                                        <h6 class="fs-sm fw-semibold mb-0">Albert Flores</h6>
                                        <span class="fs-xs text-muted">CEO of Dolor Ltd.</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="bg-secondary py-5">
        <div class="container text-center py-1 py-md-4 py-lg-5">
            <h2 class="h1 mb-4">Ready to Get Started?</h2>
            <p class="lead pb-3 mb-3">Organize your tasks with a 14-day free trial</p>
            <a href="#" class="btn btn-primary shadow-primary btn-lg mb-1">Get started</a>
        </div>
    </section>
</main>


<!-- Footer -->
<footer class="footer bg-dark dark-mode pt-5 pb-4 pb-lg-5">
    <div class="container text-center pt-lg-3">
        <section class="container">
            <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-lg-5 px-xl-0">
                <div class="row align-items-center py-lg-4">
                    <div class="col-xl-5 col-md-6 offset-xl-1 mb-4 mb-md-0">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/landing/app-showcase/notification-icon.svg" width="78" alt="Bell icon">
                            <div class="ps-3 ms-sm-3">
                                <h2 class="h4 mb-0">Subscribe to our newsletter to stay informed about latest updates</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="ps-lg-5 ms-xl-2">
                            <form class="input-group input-group-lg needs-validation" novalidate>
                                <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                                <i class="bx bx-envelope fs-xl text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                                <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                                <button type="submit" class="btn btn-primary px-sm-4">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="navbar-brand justify-content-center text-dark mb-2 mb-lg-4 mt-5">
            <img src="assets/img/logo.svg" class="me-2" width="60" alt="Silicon">
            <span class="fs-4">CoAra</span>
        </div>
        <ul class="nav justify-content-center pt-3 pb-4 pb-lg-5">
            <li class="nav-item"><a href="{{route("app.news")}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Account</a></li>
        </ul>
        <div class="d-flex justify-content-center pt-4 mt-lg-3">
            <a href="#" class="btn btn-icon btn-secondary btn-facebook mx-2">
                <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-instagram mx-2">
                <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-twitter mx-2">
                <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-youtube mx-2">
                <i class="bx bxl-youtube"></i>
            </a>
        </div>
        <p class="fs-sm text-center pt-5 mt-lg-4 mb-0">
            <span class="text-light opacity-60">&copy; All rights reserved. Made by </span>
            <a class="nav-link d-inline-block p-0" href="https://createx.studio/" target="_blank" rel="noopener">Createx
                Studio</a>
        </p>
    </div>
</footer>


<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>


<!-- Vendor Scripts -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="assets/vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-element.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/img-comparison-slider/dist/index.js"></script>

<!-- Main Theme Script -->
<script src="assets/js/theme.min.js"></script>
</body>

</html>
