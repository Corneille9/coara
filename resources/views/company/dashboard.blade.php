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
                <a href="#" class="btn bg-body btn-color-gray-700 btn-active-primary me-4"
                   data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite a Friend</a>
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
        <!--begin::Chart widget 3-->
        <div class="card mb-5 mb-xxl-8">
            <!--begin::Body-->
            <div class="card-body pb-0 px-0">
                <!--begin::Header-->
                <div class="d-flex flex-stack px-9">
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                        <h2 class="text-dark mb-1 fs-2 fw-boldest">Deals</h2>
                        <span class="text-gray-400 fw-bold fs-6">27 New Deals</span>
                    </div>
                    <!--end::Info-->
                    <!--begin::Tabs-->
                    <ul class="nav nav-pills nav-line-pills nav-group nav-group-outline">
                        <li class="nav-item me-2">
                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-bold active" data-bs-toggle="tab" href="#kt_charts_widget_3_tab_pane_1" id="kt_charts_widget_3_tab_1">Agents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-400 py-2 px-5 fs-6 fw-bold" data-bs-toggle="tab" href="#kt_charts_widget_3_tab_pane_2" id="kt_charts_widget_3_tab_2">Clients</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Header-->
                <!--begin::Tab content-->
                <div class="tab-content pt-8">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade active show" id="kt_charts_widget_3_tab_pane_1">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_3_chart_1" style="height: 350px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_charts_widget_3_tab_pane_2">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_3_chart_2" style="height: 350px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Chart widget 3-->
        <!--begin::List Widget 5-->
        <div class="card card-bordered">
            <div class="card-body">
                <div id="apexchat" style="height: 350px;"></div>
            </div>
        </div>
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
        coaraTable.loadData(CoaraTable.testData)
        coaraTable.init()
        // let coaraTable2 = new CoaraTable("table-container")
        // coaraTable2.init()

    </script>

    <script>
        document.querySelectorAll("div[data-action='chart']").forEach(value => {
            let mychart = new ChartBuilder(value)
            mychart.options.chart.type = mychart.chartTypes.BARCHART
            mychart.options.series =  [
                {
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58]
                },
                {
                    name: 'Revenue',
                    data: [76, 85, 101, 98, 87, 105]
                }
            ]
            mychart.options.dataLabels.enabled = false
            mychart.options.legend.show = false
            mychart.options.chart.toolbar.show = false
            mychart.options.xaxis.categories = ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
            mychart.init()
        })
    </script>
@endsection
