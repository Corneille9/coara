@extends("layouts.app")

@section("toolbar")
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Actualités
                    <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route("welcome")}}" class="text-muted text-hover-primary">Accueil</a>
                    </li>
                    <li class="breadcrumb-item text-dark">Actualités</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Toolbar-->
@endsection

@section("content")
    <!--begin::Container-->
    <div class="container-xxl">
        <!--Begin::Row-->
        <div class="row g-5 g-xxl-8">
            <div class="col-xl-6">
            @foreach([1,2] as $news)
                <!--begin::Feeds Widget 2-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Top-->
                            <div class="d-flex align-items-center">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{asset($resolved_assets."app/assets/media/svg/brand-logos/fox-hub.svg")}}" alt="" class="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-800 text-hover-primary mb-1 fs-6 fw-boldest">Netfer</a>
                                        <span class="text-gray-400 fw-bold">Aujourd'hui à 12:45min</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Dropdown Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Menu</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Postuler  ..|.. </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Ne plus voir</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Bottom-->
                            <div class="pt-5">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px" style="background-image:url('{{$resolved_assets}}app/assets/media/stock/900x600/20.jpg');"></div>
                                <!--end::Image-->
                                <!--begin::Text-->
                                <p class="text-gray-800 fs-6 fw-normal pt-4 mb-2">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-sm btn-color-muted btn-active-light-primary fw-boldest fs-6 py-1 px-2 me-4">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->24
                                    </a>
                                    <a href="#" class="btn btn-sm btn-color-muted btn-active-light-danger fw-boldest fs-6 py-1 px-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->75
                                    </a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Bottom-->
                            <!--begin::Separator-->
                            <div class="separator pt-4 mb-3"></div>
                            <!--end::Separator-->
                            <!--begin::Editor-->
                            <form class="position-relative pb-3">
                                <textarea data-kt-autosize="true" class="form-control border-0 p-0 pe-10 resize-none min-h-25px" rows="1" placeholder="Commenter.."></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary pe-0">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                        <span class="svg-icon svg-icon-3 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z" fill="black" />
                                                <path d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </form>
                            <!--edit::Editor-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 2-->
            @endforeach
                <!--begin::Feeds widget 4, 5 load more-->
                <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                    <span class="indicator-label">Plus</span>
                    <span class="indicator-progress">Chargement...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Feeds widget 4, 5 load more-->
            </div>
            <div class="col-xl-6">
                @foreach([1,2] as $news)
                <!--begin::Feeds Widget 2-->
                    <!--begin::Col-->
                    <div class="mb-5 mb-xxl-8">
                        <!--begin::Card-->
                        <div class="card ribbon ribbon-top">
                            <div class="ribbon-label bg-light-primary text-primary bold">RED CIRCLE</div>
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-65px symbol-circle mb-7">
                                    <span class="symbol-label fs-2x fw-bold text-success bg-light-success">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="{{route("app.offers.show")}}" class="fs-3 text-gray-800 text-hover-primary fw-boldest mb-1">Développeur Full Stack</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-5 fw-bold text-gray-400 mb-6">Nous recherchons des profils / CVs de Développeurs JAVA Juniors H/F que nous transmettrons à nos clients dans le cadre de leurs...</div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                    <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3">
                                        <div class="fs-6 fw-boldest text-gray-700 text-center">Région de :</div>
                                        @foreach(["Abomey", "Abomey-Calavi", "Aplahoué", "Cotonou", "Djougou", "Kandi"] as $location)
                                            @if ($loop->iteration == 4)
                                                <span class="badge badge-changelog badge-light-success bg-hover-success text-hover-white fw-bold fs-9 px-2 ms-2">...</span>
                                                @break
                                            @endif
                                            <span
                                                class="badge badge-changelog badge-light-success bg-hover-success text-hover-white fw-bold fs-9 px-2 ms-2">{{$location}}</span>
                                        @endforeach
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Card body-->
                            <div class="card-footer">
                                <!--begin::Info-->
                                <div class="d-flex flex-stack">
                                    <span class="badge badge-light-primary fs-7 fw-boldest me-2">DEC 03, 2022</span>
                                    <a href="{{route("app.offers.show")}}" class="btn btn-light btn-sm btn-color-muted fs-7 fw-boldest px-5">Plus de détails</a>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                <!--end::Feeds Widget 2-->
                @endforeach
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection

@section("script")

@endsection
