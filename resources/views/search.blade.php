@extends("layouts.app")

@section("toolbar")
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Rechercher</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route("welcome")}}" class="text-muted text-hover-primary">Accueil</a>
                    </li>
                    <li class="breadcrumb-item text-dark">Rechercher</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                <a href="#" class="btn bg-body btn-color-gray-700 btn-active-primary me-4" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_invite_friends">Invite a Friend</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project"
                   id="kt_toolbar_primary_button">New Project</a>
            </div>
            <!--end::Actions-->
        </div>
    </div>
    <!--end::Toolbar-->
@endsection

@section("content")
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form action="#">
            <!--begin::Card-->
            <div class="card mb-7">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Compact form-->
                    <div class="d-flex align-items-center">
                        <!--begin::Simple form-->
                        <div
                            class="rounded d-flex flex-column flex-lg-row align-items-lg-center bg-body p-5 min-h-75px">
                            <!--begin::Row-->
                            <div class="row flex-grow-1 mb-5 mb-lg-0">
                                <!--begin::Col-->
                                <div class="col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                  rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/>
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Input-->
                                    <input type="text"
                                           class="form-control form-control-sm form-control-flush fw-boldest flex-grow-1"
                                           name="search" value="" placeholder="Mots-clés"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                                    <!--begin::Desktop separartor-->
                                    <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                    <!--end::Desktop separartor-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-1">
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
                                    <!--begin::Select-->
                                    <select class="form-select form-select-sm border-0 fw-boldest flex-grow-1"
                                            data-control="select2" data-placeholder="Région" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="1" selected="selected">Région</option>
                                        <option value="2">Abomey</option>
                                        <option value="3">Cotonou</option>
                                        <option value="3">Porto-Novo</option>
                                        <option value="3">Parakou</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-4 d-flex align-items-center">
                                    <!--begin::Desktop separartor-->
                                    <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                    <!--end::Desktop separartor-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                  d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                  fill="black"/>
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-sm border-0 fw-boldest flex-grow-1"
                                            data-control="select2" data-placeholder="Métier" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="1" selected="selected">Métier</option>
                                        <option value="2">Infomatique et nouvelles Technologies</option>
                                        <option value="4">Commerce</option>
                                        <option value="5">Achat</option>
                                        <option value="6">Electro...</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Action-->
                            <div class="min-w-150px text-end">
                                <button type="submit" class="btn btn-success" id="kt_advanced_search_button_1">
                                    Rechercher
                                </button>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Simple form-->
                        <!--begin:Action-->
                        <div class="d-flex align-items-center m-lg-0">
                            <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Recherche avancée</a>
                        </div>
                        <!--end:Action-->
                    </div>
                    <!--end::Compact form-->
                    <!--begin::Advance form-->
                    <div class="collapse" id="kt_advanced_search_form">
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mt-9 mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-8 mb-8">
                            <!--begin::Col-->
                            <div class="col-xxl-7">
                                <label class="fs-6 form-label fw-boldest text-dark">Tags</label>
                                <input class="form-control form-control-solid" value="" name="target_tags" id="tagify_category"/>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xxl-5">
                                <!--begin::Row-->
                                <div class="row g-8">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="fs-6 form-label fw-boldest text-dark">Team Type</label>
                                        <!--begin::Select-->
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                            <option value=""></option>
                                            <option value="1">Not started</option>
                                            <option value="2" selected="selected">In Progress</option>
                                            <option value="3">Done</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="fs-6 form-label fw-boldest text-dark">Select Quater</label>
                                        <!--begin::Btn group-->
                                        <div class="d-flex align-items-center h-40px" role="group">
                                            <input type="radio" class="btn-check" checked="checked" name="sizes"
                                                   id="kt_size_1"/>
                                            <label
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-primary btn-circle fw-bold me-6 btn-color-gray-700"
                                                for="kt_size_1">Q1</label>
                                            <input type="radio" class="btn-check" name="sizes" id="kt_size_2"/>
                                            <label
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-primary btn-circle fw-bold me-6 btn-color-gray-700"
                                                for="kt_size_2">Q2</label>
                                            <input type="radio" class="btn-check" name="sizes" id="kt_size_3"/>
                                            <label
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-primary btn-circle fw-bold me-6 btn-color-gray-700"
                                                for="kt_size_3">Q3</label>
                                            <input type="radio" class="btn-check" name="sizes" id="kt_size_4"/>
                                            <label
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-primary btn-circle fw-bold btn-color-gray-700"
                                                for="kt_size_4">Q4</label>
                                        </div>
                                        <!--end::Btn group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-8">
                            <!--begin::Col-->
                            <div class="col-xxl-7">
                                <!--begin::Row-->
                                <div class="row g-8">
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="fs-6 form-label fw-boldest text-dark">Min. Budget</label>
                                        <!--begin::Dialer-->
                                        <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000"
                                             data-kt-dialer-max="50000" data-kt-dialer-step="1000"
                                             data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                            <!--begin::Decrease control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                    data-kt-dialer-control="decrease">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                <span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="6.0104" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control form-control-solid border-0 ps-12"
                                                   data-kt-dialer-control="input" placeholder="Amount"
                                                   name="manageBudget" readonly="readonly" value="$50"/>
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                    data-kt-dialer-control="increase">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                <span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="10.8891" y="17.8033" width="12"
                                                                                      height="2" rx="1"
                                                                                      transform="rotate(-90 10.8891 17.8033)"
                                                                                      fill="black"/>
																				<rect x="6.01041" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="fs-6 form-label fw-boldest text-dark">Max. Budget</label>
                                        <!--begin::Dialer-->
                                        <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000"
                                             data-kt-dialer-max="50000" data-kt-dialer-step="1000"
                                             data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                            <!--begin::Decrease control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                    data-kt-dialer-control="decrease">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                <span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="6.0104" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control form-control-solid border-0 ps-12"
                                                   data-kt-dialer-control="input" placeholder="Amount"
                                                   name="manageBudget" readonly="readonly" value="$100"/>
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                    data-kt-dialer-control="increase">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                <span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="5"
                                                                                      fill="black"/>
																				<rect x="10.8891" y="17.8033" width="12"
                                                                                      height="2" rx="1"
                                                                                      transform="rotate(-90 10.8891 17.8033)"
                                                                                      fill="black"/>
																				<rect x="6.01041" y="10.9247" width="12"
                                                                                      height="2" rx="1" fill="black"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="fs-6 form-label fw-boldest text-dark">Team Size</label>
                                        <input type="text" class="form-control form-control form-control-solid"
                                               name="city"/>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xxl-5">
                                <!--begin::Row-->
                                <div class="row g-8">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="fs-6 form-label fw-boldest text-dark">Category</label>
                                        <!--begin::Select-->
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                            <option value=""></option>
                                            <option value="1">Not started</option>
                                            <option value="2" selected="selected">Select</option>
                                            <option value="3">Done</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="fs-6 form-label fw-boldest text-dark">Status</label>
                                        <div class="form-check form-switch form-check-custom form-check-solid mt-1">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexSwitchChecked" checked="checked"/>
                                            <label class="form-check-label" for="flexSwitchChecked">Active</label>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Advance form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </form>
        <!--end::Form-->
        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack pb-7">
            <!--begin::Title-->
            <div class="d-flex flex-wrap align-items-center my-1">
                <h2 class="fw-bold me-5 my-1">9 résultats trouvés</h2>
            </div>
            <!--end::Title-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Tab Content-->
        <div>
            <!--begin::Row-->
            <div class="row g-6 g-xl-9">
            @forelse([1,2,3,4] as $entreprise)
                <!--begin::Col-->
                <div class="col-md-6 col-xxl-4">
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
                            <a href="{{route("app.offers.details")}}" class="fs-3 text-gray-800 text-hover-primary fw-boldest mb-1">Développeur Full Stack</a>
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
                                <a href="{{route("app.offers.details")}}" class="btn btn-light btn-sm btn-color-muted fs-7 fw-boldest px-5">Plus de détails</a>
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->

                    <div class="card ribbon ribbon-top">
                        <div class="ribbon-label bg-light-primary text-primary bold">AK CONSULTING</div>
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-7">
                                <img src="{{asset($resolved_assets."app/assets/media/avatars/150-7.jpg")}}" alt="image"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-boldest mb-1">Junior IOS Mobile Developer</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-5 fw-bold text-gray-400 mb-6">Nous recherchons des profils / CVs de Juniors iOS Mobile Developers que nous transmettrons à nos clients dans le cadre de leurs...</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-boldest text-gray-700 text-center">Région de :</div>
                                    @foreach(["Abomey", "Abomey-Calavi", "Aplahoué", "Cotonou", "Djougou", "Kandi"] as $location)
                                        @if ($loop->iteration == 4)
                                            <span
                                                class="badge badge-changelog badge-light-success bg-hover-success text-hover-white fw-bold fs-9 px-2 ms-2">...</span>
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
                                <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-boldest px-5">Plus de détails</a>
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            @empty
            @endforelse
            </div>
            <!--end::Row-->
            <!--begin::Pagination-->
            <div class="d-flex flex-stack flex-wrap pt-10">
                <div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
                <!--begin::Pages-->
                <ul class="pagination">
                    <li class="page-item previous">
                        <a href="#" class="page-link">
                            <i class="previous"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item next">
                        <a href="#" class="page-link">
                            <i class="next"></i>
                        </a>
                    </li>
                </ul>
                <!--end::Pages-->
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Container-->
@endsection

@section("script")
    <script>
        const tagify = new Tagify(document.querySelector('#tagify_category'), {
            delimiters: null,
            templates: {
                tag: function (tagData) {
                    try {
                        // _ESCAPE_START_
                        return `<tag title='${tagData.value}' contenteditable='false' spellcheck="false"
                    class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                        <x title='remove tag' class='tagify__tag__removeBtn'></x>
                        <div class="d-flex align-items-center">
                            <span class='tagify__tag-text'>${tagData.value}</span>
                        </div>
                    </tag>`
                        // _ESCAPE_END_
                    } catch (err) {
                    }
                },

                dropdownItem: function (tagData) {
                    try {
                        // _ESCAPE_START_
                        return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                            <span>${tagData.value}</span>
                        </div>`
                        // _ESCAPE_END_
                    } catch (err) {
                    }
                }
            },
            enforceWhitelist: true,
            whitelist: [
                {value: 'Stages', code: 'intern'},
                {value: 'Services', code: 'service'},
                {value: 'Offre d\'emploi', code: 'offer'},
            ],
            dropdown: {
                enabled: 1, // suggest tags after a single character input
                classname: 'extra-properties' // custom class for the suggestions dropdown
            } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
        });

        // add the first 2 tags and makes them readonly
        const tagsToAdd = tagify.settings.whitelist.slice(0, 2);
        tagify.addTags(tagsToAdd);
    </script>
@endsection
