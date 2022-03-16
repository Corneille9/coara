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
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
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

        <div class="w-100 w-300px pt-10 mb-10 scroll h-1000px" id="options">
            <!--begin::Card-->
            <div class="mt-10"></div>
            <div class="card card-flush bg-transparent mb-0">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h6>Choisissez les champs à inclure</h6>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 fs-6">
                    <!--begin::Section-->
                    <div class="mb-7">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <div class="position-relative me-md-2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-feedback ps-10" name="search" value="" placeholder="Rechercher">
                            </div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <div class="lines-container">
                        <div class="separator separator-dashed m-7"></div>
                        <div class="mb-6">
                            <!--begin::Label-->
                            <label class="fw-bold fs-6 mb-2">
                                <span class="text-success fw-bolder">Lignes</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Sélectionner un champ..." class="form-select form-select-solid form-select-lg" id="linesSelect">
                                    <option value="">Sélectionner un champ</option>
                                    @foreach($cols as $col)
                                        <option value="{{$loop->index}}">{{$col}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>

                    <div class="columns-container">
                        <div class="separator separator-dashed m-7"></div>
                        <div class="mb-6">
                            <!--begin::Label-->
                            <label class="fs-6 mb-2">
                                <span class="text-primary fw-bolder">Colonnes</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Sélectionner un champ..." class="form-select form-select-solid form-select-lg" id="columnsSelect">
                                    <option value="">Sélectionner un champ</option>
                                    @foreach($cols as $col)
                                        <option value="{{$loop->index}}">{{$col}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>

                    <div class="values-container">
                        <div class="separator separator-dashed m-7"></div>
                        <div class="mb-6">
                            <!--begin::Label-->
                            <label class="fw-bold fs-6 mb-2">
                                <span class="text-warning fw-bolder tag">Valeurs</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Sélectionner un champ..." class="form-select form-select-solid form-select-lg" id="valuesSelect">
                                    <option value="">Sélectionner un champ</option>
                                    @foreach($cols as $col)
                                        <option value="{{$loop->index}}">{{$col}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>

                    <div class="filters-container">
                        <div class="separator separator-dashed m-7"></div>
                        <div class="mb-6">
                            <!--begin::Label-->
                            <label class="fw-bold fs-6 mb-2">
                                <span class="text-info fw-bolder">Filtres</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Sélectionner un champ..." class="form-select form-select-solid form-select-lg" id="filtersSelect">
                                    <option value="">Sélectionner un champ</option>
                                    @foreach($cols as $col)
                                        <option value="{{$loop->index}}">{{$col}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>

                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>

        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                 data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Logo bar-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <!--begin::Aside toggler-->

                        <!--end::Aside toggler-->
                    </div>
                    <!--end::Logo bar-->
                    <!--begin::Topbar-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-stretch">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3">
                                <!--begin::Drawer toggle-->
                                <div class="btn btn-icon btn-light pulse btn-active-light-primary w-50px h-50px w-md-40px h-md-40px p-2"  data-bs-toggle="modal" data-bs-target="#chartsModal">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-3x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <span class="pulse-ring border-5"></span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="d-flex align-items-center ms-1 ms-lg-3 nav-item fw-bolder fs-2 btn">
                                    <span class="svg-icon svg-icon-1x px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="black"/>
                                            <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <a class="nav-link active text-white-50" data-bs-toggle="tab" href="#dynTable">Nouveau graphe</a>
                                </li>
                                <li class="d-flex align-items-center ms-1 ms-lg-3 nav-item fw-bolder fs-2">
                                    <span class="svg-icon svg-icon-1x px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black"/>
                                            <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <a class="nav-link text-white-50" data-bs-toggle="tab" href="#dynGraph">Dashboard</a>
                                </li>
                            </ul>
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
                    <div class="container-xxl" id="table-container">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dynTable" role="tabpanel">
                                <div class="text-center mt-20" data-type="info">
                                    <div class="m-2 img-rounded">
                                        <img src="{{asset($resolved_assets.$charts[12]["path"])}}" class="card-img h-80px, w-80px">
                                    </div>
                                    <h3 class="">Drag and drop fields to display data</h3>
                                    <p class="text-muted">Or select the virtualization you want to use</p>
                                </div>

                                <div>
                                    <table class="table table-rounded table-striped border gy-7 gs-7" id="virtualizationTable">
                                        <thead class="text-white fw-bolder"></thead>
                                        <tbody></tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="dynGraph" role="tabpanel">
                                <div class="text-center mt-20" data-type="info">
                                    <div class="m-2 img-rounded">
                                        <img src="{{asset($resolved_assets.$charts[12]["path"])}}" class="card-img h-80px, w-80px">
                                    </div>
                                    <h3 class="">Drag and drop fields to display data</h3>
                                    <p class="text-muted">Or select the virtualization you want to use</p>
                                </div>
                            </div>
                        </div>
                    </div>
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

<!--begin::Menu-->
<div class="modal fade m-5" tabindex="-1" id="chartsModal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Graphiques disponible</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body scroll-y m-5">
                <div class="row">
                @foreach($charts as $chart)
                    <!--begin::Col-->
                        <div class="col-2 h-200px w-200px">
                            <!--begin::Chart Widget 1-->
                            <div class="m-0">
                                <a href="#" class="bg-hover-light-primary" data-slug="{{$chart["slug"]}}" data-type="chart" data-index="{{$loop->index}}">
                                    <div class="card card-dashed bg-transparent bg-hover-light-primary">
                                        <!--begin::Body-->
                                        <div class="card-body p-0 d-flex justify-content-between flex-column">
                                            <!--begin::Chart-->
                                            <div class="" style="position: relative;">
                                                <img src="{{asset($resolved_assets.$chart["path"])}}" class="card-img">
                                            </div>
                                            <!--end::Chart-->
                                            <div class="d-flex flex-stack card-p flex-grow-1">
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column text-end">
                                                    <span class="fw-boldest text-gray-800 fs-5">{{$chart["name"]}}</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--end::Chart Widget 1-->
                        </div>
                        <!--end::Col-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Menu-->
<!--end::Main-->
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
<script src="{{asset($resolved_assets."app/assets/js/custom/tables/constants.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/tables/DynamicTableBuilder.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/charts/chartOptions.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/js/custom/charts/chartBuilder.js")}}"></script>
<script src="{{asset($resolved_assets."app/assets/plugins/custom/draggable/draggable.bundle.js")}}"></script>

<script>
    let cols = @json($cols);

    let linesSelect = $("#linesSelect")
    let columnsSelect = $("#columnsSelect")
    let valuesSelect = $("#valuesSelect")
    let filtersSelect = $("#filtersSelect")

    let dfd = "New value"

    linesSelect.on("select2:select", function (e){
        $(".lines-container").append(`
            <li class="d-flex align-items-center py-2 ms-md-8">
                <span class="bullet me-5 bg-success"></span>` + e.params.data.text + `
                <button type="button" class="btn btn-sm btn-icon btn-color-danger mx-2" onclick="deleteSelected(this)" data-index="` + e.params.data.id + `" data-type="lines">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                        </svg>
                    </span>
                </button>
            </li>
        `)
        document.querySelector("#virtualizationTable").querySelector("tbody").insertAdjacentHTML("beforeend", `<tr class="border-bottom border-gray-200 text-white" data-index="` + 1 + `"><th>` + dfd + "lines"  + `</th></tr>`)
        columnsSelect.find("option[value='" + e.params.data.id + "']").remove()
        linesSelect.find(":selected").remove().trigger("change")
        checkContainers()
    })

    columnsSelect.on("select2:select", function (e){
        $(".columns-container").append(`
            <li class="d-flex align-items-center py-2 ms-md-8">
                <span class="bullet me-5 bg-primary"></span>` + e.params.data.text + `
                <button type="button" class="btn btn-sm btn-icon btn-color-danger mx-2" onclick="deleteSelected(this)" data-index="` + e.params.data.id + `" data-type="columns">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                        </svg>
                    </span>
                </button>
            </li>
        `)
        document.querySelector("#virtualizationTable").querySelector("thead>tr").insertAdjacentHTML("beforeend", `<th class="" data-index="` + 1 + `">` + dfd + " Col" + `</th>`)
        linesSelect.find("option[value='" + e.params.data.id + "']").remove()
        columnsSelect.find(":selected").remove().trigger("change")
        checkContainers()
    })

    valuesSelect.on("select2:select", function (e){
        $(".values-container").append(`
            <li class="d-flex align-items-center py-2 ms-md-8">
                <span class="bullet me-5 bg-warning"></span>` + e.params.data.text + `
                <button type="button" class="btn btn-sm btn-icon btn-color-danger mx-2" onclick="deleteSelected(this)" data-index="` + e.params.data.id + `" data-type="values">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                        </svg>
                    </span>
                </button>
            </li>
        `)
        valuesSelect.find(":selected").remove().trigger("change")
        checkContainers()
    })



    filtersSelect.on("select2:select", function (e){
        $(".filters-container").append(`
            <li class="d-flex align-items-center py-2 ms-md-8">
                <span class="bullet me-5 bg-info"></span>` + e.params.data.text + `
                <button type="button" class="btn btn-sm btn-icon btn-color-danger mx-2" onclick="deleteSelected(this)" data-index="` + e.params.data.id + `" data-type="filters">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                        </svg>
                    </span>
                </button>
            </li>
        `)
        filtersSelect.find(":selected").remove().trigger("change")
        checkContainers()
    })

    function deleteSelected(target) {
        switch (target.dataset.type) {
            case "lines":
                columnsSelect.append(new Option(cols[target.dataset.index], target.dataset.index, false, false)).trigger("change")
                linesSelect.append(new Option(cols[target.dataset.index], target.dataset.index, false, false)).trigger("change")
                break
            case "columns":
                linesSelect.append(new Option(cols[target.dataset.index], target.dataset.index, false, false)).trigger("change")
                columnsSelect.append(new Option(cols[target.dataset.index], target.dataset.index, false, false)).trigger("change")
                break
            case "values":
                break
            case "filters":
                break
            default:break
        }
        target.parentElement.remove()
        checkContainers()
    }

    function checkContainers() {
        if ($(".lines-container").find("li").length === 0 && $(".columns-container").find("li").length === 0 && $(".values-container").find("li").length === 0 && $(".filters-container").find("li").length === 0){
            $("#myTabContent").find("div[data-type='info']").each((i, v)=>{
                v.classList.remove("d-none")
            })
            document.querySelector("#virtualizationTable").classList.add("d-none")
        }else {
            $("#myTabContent").find("div[data-type='info']").each((i, v)=>{
                v.classList.add("d-none")
            })
            document.querySelector("#virtualizationTable").classList.remove("d-none")
        }
    }

    // checkContainers()

</script>

<script>
    let chartModal = $("#chartsModal");
    let chartModalClose = chartModal.find("div[data-bs-dismiss='modal']")
    let chartData = @json($charts);
    chartModal.find("a[data-type='chart']").each((key , value)=>{
        value.addEventListener("click", (e)=>{
            // console.log(value.dataset.index)
            $("#myTabContent").find("img").each((index, img)=>{
                img.src = "{{$resolved_assets}}" + chartData[value.dataset.index]["path"]
            })
            chartModalClose.click()
        })
    })
</script>

<script>
    document.querySelector("a[href='#dynGraph']").addEventListener("click", ()=>{
        document.querySelector("#options").classList.add("d-none")
    })
    document.querySelector("a[href='#dynTable']").addEventListener("click", ()=>{
        document.querySelector("#options").classList.remove("d-none")
    })
</script>

<script>
    let data = {
        lines: [
            {
                name: "Produits",
                data: [
                    "Banane",
                    "Pomme",
                    "Mangue",
                    "Coco",
                ]
            },
            {
                name: 'Prix',
                data: [
                    "$1255",
                    "$85656",
                    "$256",
                    "$4563",
                ]
            }
        ]
    }
    let bb = new DynamicTableBuilder(document.querySelector("#virtualizationTable"), data, LINESVALUES)
</script>


{{--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>--}}
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
<script src="{{asset($resolved_assets."app/assets/js/reveal/infragistics.reveal.js")}}"></script>

<script type="text/javascript">
    // $.ig.RevealSdkSettings.ensureFontsLoadedAsync().then(() => {
    //     let revealView = new $.ig.RevealView("#revealView");
    //     revealView.dashboard = new $.ig.RVDashboard();
    // }).then(()=>{
    //     document.querySelectorAll("#revealView").forEach(v=>{
    //         console.log(v)
    //         v.style.backgroundColor = ""
    //     })
    // });
</script>

<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/craft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 00:57:04 GMT -->
</html>
