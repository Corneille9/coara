<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from silicon.createx.studio/register.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 11:54:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Company Armada | Register</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
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

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

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
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>


  <!-- Body -->
  <body>

    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <!-- Remove "fixed-top" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg navbar-light position-absolute navbar-sticky">
        <div class="container px-3">
          <a href="../_views/index-2.html" class="navbar-brand pe-3">
            <img src="assets/img/logo.svg" width="47" alt="CoAra">
            CoAra
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
          </div>
          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
          </div>
        </div>
      </header>


      <!-- Page content -->
      <section class="position-relative h-100 pt-5 pb-4">

        <!-- Sign up form -->
        <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
          <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
            <h2 class="text-center">Creer un Compte</h2>
            <p class="text-center pb-3 mb-3 btn-sm">Vous aviez d??j?? un compte ? <a href="{{route("login")}}">Connecter vous ici.</a></p>
            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="position-relative mb-4">
                    <label for="name" class="form-label fs-base">Nom Complet</label>
                    <input type="text" id="name" class="form-control" name="name" required>
                    <div class="invalid-feedback position-absolute start-0 top-100">Please enter your name!</div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="position-relative mb-4">
                    <label for="email" class="form-label fs-base">Email</label>
                    <input type="email" id="email" class="form-control" name="email" required>
                    <div class="invalid-feedback position-absolute start-0 top-100">S'il vous pla??t, mettez une adresse email valide !</div>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <label for="password" class="form-label fs-base">Mote de passe</label>
                  <div class="password-toggle">
                    <input type="password" id="password" name="password" class="form-control" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox">
                      <span class="password-toggle-indicator"></span>
                    </label>
                    <div class="invalid-feedback position-absolute start-0 top-100">S'il vous plait entrez un mot de passe !</div>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <label for="password-confirm" class="form-label fs-base">Confimer le mot de passe</label>
                  <div class="password-toggle">
                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox">
                      <span class="password-toggle-indicator"></span>
                    </label>
                    <div class="invalid-feedback position-absolute start-0 top-100">S'il vous plait entrez votre mot de passe !</div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input type="checkbox" id="terms" class="form-check-input">
                  <label for="terms" class="form-check-label fs-base">I agree to <a href="#">Terms &amp; Conditions</a></label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary shadow-primary w-100">S'inscrire</button>
            </form>
            <hr class="my-4">
            <h6 class="text-center mb-4">Ou inscrivez-vous avec votre r??seau social</h6>
            <div class="row row-cols-1 row-cols-sm-2">
              <div class="col mb-3">
                <a href="#" class="btn btn-icon btn-secondary btn-google btn-lg w-100">
                  <i class="bx bxl-google fs-xl me-2"></i>
                  Google
                </a>
              </div>
              <div class="col mb-3">
                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg w-100">
                  <i class="bx bxl-facebook fs-xl me-2"></i>
                  Facebook
                </a>
              </div>
            </div>
          </div>
          <div class="w-100 align-self-end">
            <p class="fs-xs text-center text-xl-start pb-2 mb-0">
              &copy; All rights reserved
            </p>
          </div>
        </div>

        <!-- Background -->
        <div class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-contain d-none d-xl-block" style="background-image: url(assets/img/account/signup-bg.svg);"></div>
      </section>
    </main>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>

<!-- Mirrored from silicon.createx.studio/register.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 11:54:04 GMT -->
</html>
