@extends("layouts.app")

@section("toolbar")
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Tableau de Bord
                    <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route("welcome")}}" class="text-muted text-hover-primary">Accueil</a>
                    </li>
                    <li class="breadcrumb-item text-dark">Tableau de Bord</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                <a href="{{route("app.company.dashboard.new")}}" class="btn bg-body btn-color-gray-700 btn-active-primary me-4">Ajouter</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_create_project" id="kt_toolbar_primary_button">New Project</a>
            </div>
            <!--end::Actions-->
        </div>
    </div>
    <!--end::Toolbar-->

@endsection

@section("content")

    <div class="container-xxl">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-xxl-12">
                <!--begin::Row-->
                <div class="row g-xl-12">
                    @foreach(["Ventes","Campaigns", "Marketing", "Clients"] as $dashboard)
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Chart Widget 1-->
                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body p-0 d-flex justify-content-between flex-column cursor-pointer" onclick="window.location='{{route("app.company.dashboard.view")}}'">
                                    <div class="d-flex flex-stack card-p flex-grow-1">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-45px">
                                            <div class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2x">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"/>
                                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"/>
                                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"/>
                                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column text-end">
                                            <span class="fw-boldest text-gray-800 fs-2">{{$dashboard}}</span>
                                            <span class="text-gray-400 fw-bold fs-6">Sep 16 2020</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--begin::Chart-->
                                    <div class="pt-1">
                                        <div id="kt_chart_widget_1_chart" class="card-rounded-bottom h-200px"></div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                            </div>
                            <!--end::Chart Widget 1-->
                        </div>
                        <!--end::Col-->
                    @endforeach
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>

@endsection

@section("script")

@endsection
