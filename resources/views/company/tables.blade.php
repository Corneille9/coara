@extends("layouts.app")

@section("toolbar")
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Vos Tableaux
                    <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route("welcome")}}" class="text-muted text-hover-primary">Accueil</a>
                    </li>
                    <li class="breadcrumb-item text-dark">Vos Tableaux</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                <a href="#" class="btn bg-body btn-color-gray-700 btn-active-primary me-4"
                   data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Créer un nouveau tableau</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_create_project" id="kt_toolbar_primary_button">New Project</a>
            </div>
            <!--end::Actions-->
        </div>
    </div>
    <!--end::Toolbar-->
@endsection

@section("content")
    <div class="container-xxl" id="table-container">

    </div>
    <div class="modal fade" id="graph-modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <div class="fs-1 fw-boldest">Créer un Nouveau Graph</div>
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
                    <div class="stepper stepper-pills" id="table-graph-stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav flex-center  mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 1
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 2
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 3
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->
                        </div>
                        <!--end::Nav-->

                        <!--begin::Form-->
                        <form class="form mx-auto" novalidate="novalidate">
                            <!--begin::Group-->
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card card-dashed">
                                                <div class="card-header">
                                                    <h3 class="card-title">Champs du graphique</h3>
                                                    <div class="card-toolbar">
                                                        <button type="button" class="btn btn-sm btn-light">
                                                            Action
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body p-5">
                                                    <div class="form-group m-2">
                                                        <label class="form-label">Lignes</label>
                                                        <input class="form-control form-control-solid" value="" data-action="lines-tagify" data-type="tag"/>
                                                    </div>

                                                    <div class="form-group m-2">
                                                        <label class="form-label">Colonnes</label>
                                                        <input class="form-control form-control-solid" value="" data-action="columns-tagify" data-type="tag"/>
                                                    </div>

                                                    <div class="form-group m-2">
                                                        <label class="form-label">Valeurs</label>
                                                        <input class="form-control form-control-solid" value="" data-action="values-tagify" data-type="tag"/>
                                                    </div>

                                                    <div class="form-group m-2">
                                                        <label class="form-label">Filtres</label>
                                                        <input class="form-control form-control-solid" value="" data-action="filters-tagify" data-type="tag"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card card-dashed">
                                                <div class="card-header">
                                                    <h3 class="card-title text-muted">Tableau</h3>
                                                    <div class="card-toolbar">
                                                        <button type="button" class="btn btn-sm btn-light">
                                                            Action
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body table-responsive p-2">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gy-5 table-bordered table-row-bordered" id="graph-dynamic-table">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <!--begin::Table row-->
                                                        <tr class="text-start fw-bolder fs-7 text-uppercase gs-0">
                                                            <th class="min-w-100px"></th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody class="text-gray-600 fw-bold"></tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <!--begin::Row-->
                                    <div class="row g-6 g-xl-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <!--begin::Col-->
                                        @foreach([1,2,3,4,5,6] as $chart)
                                            <div class="col-sm-6 col-xl-4">
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-0" data-kt-button="true">
                                                    <!--begin::Card-->
                                                    <div class="card p-0 m-0">
                                                        <!--begin::Card header-->
                                                        <div class="card-header flex-nowrap border-0 h-10px">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <!--begin::Radio button-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="usage" value="1" checked="checked" />
                                                                </span>
                                                                <span class="mx-2">Line</span>
                                                                <!--end::Radio button-->
                                                            </div>
                                                            <!--end::Card title-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body p-0">
                                                            <div data-action="chart" style="height: 200px" class="m-0 p-0"></div>
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </label>
                                            </div>
                                    @endforeach
                                    <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--begin::Step 1-->

                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">

                                </div>
                                <!--begin::Step 1-->
                            </div>
                            <!--end::Group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section("script")
    <script>
        // Stepper lement
        const element = document.querySelector("#table-graph-stepper");

        // Initialize Stepper
        const stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function (stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
    <script>
        let coaraTable = new CoaraTable("table-container")
        CoaraTable.token = "{{csrf_token()}}"
        CoaraTable.importRoute = "{{route("app.company.tables.import.data")}}"
        // coaraTable.loadData(CoaraTable.testData)
        coaraTable.init()
        let coaraTable2 = new CoaraTable("table-container")
        coaraTable2.init()
    </script>
@endsection
