@extends("layouts.app")

@section("toolbar")
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Vos Clés Api
                    <small class="text-muted fs-6 fw-normal ms-1"></small>
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route("welcome")}}" class="text-muted text-hover-primary">Accueil</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Compte</li>
                    <li class="breadcrumb-item text-muted">Clés Api</li>
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
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::API Overview-->
        <div class="card mb-6 mb-xxl-8">
            <!--begin::Header-->
            <div class="card-header">
                <!--begin::Title-->
                <div class="card-title">
                    <h2 class="fw-boldest m-0">API Overview</h2>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-10">
                <!--begin::Row-->
                <div class="row mb-10">
                    <!--begin::Col-->
                    <div class="col-md-6 pb-10 pb-lg-0">
                        <h2 class="fw-boldest">How to set API</h2>
                        <p class="fs-4 fw-bold text-gray-600 py-2">Use images to enhance your post, improve its flow, add humor
                            <br />and explain complex topics</p>
                        <a href="#" class="btn btn-light fw-boldest">Get Started</a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <h2 class="fw-boldest">Developer Tools</h2>
                        <p class="fs-4 fw-bold text-gray-600 py-2">Plan your blog post by choosing a topic, creating an outline conduct
                            <br />research, and checking facts</p>
                        <a href="#" class="btn btn-light fw-boldest">Create CLI Rule</a>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Alert-->
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-109 p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="black" />
													<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="black" />
												</svg>
											</span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing and create outstanding products to serve your clients
                                <a href="#">Learn More</a></div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                <!--end::Alert-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::API overview-->
        <!--begin::API keys-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header card-header-stretch">
                <!--begin::Title-->
                <div class="card-title">
                    <h2 class="fw-boldest m-0">API Keys</h2>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Table wrapper-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4" id="kt_api_keys_table">
                        <!--begin::Thead-->
                        <thead class="border-bottom border-gray-200 fs-5 fw-bold bg-lighten">
                        <tr>
                            <th class="w-250px min-w-175px ps-9">Label</th>
                            <th class="w-275px min-w-250px px-0">API Keys</th>
                            <th class="w-125px min-w-125px"></th>
                            <th class="min-w-125px min-w-125px">Created</th>
                            <th class="min-w-125px">Status</th>
                            <th class="w-100px"></th>
                        </tr>
                        </thead>
                        <!--end::Thead-->
                        <!--begin::Tbody-->
                        <tbody class="fs-5 fw-bold text-gray-600">
                        <tr>
                            <td class="ps-9">none set</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Nov 01, 2020</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Navitare</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Sep 27, 2020</td>
                            <td>
                                <span class="badge badge-light-primary fs-7 fw-bold">Review</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Docs API Key</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Jul 09, 2020</td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">Inactive</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Identity Key</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd3568</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>May 14, 2020</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Remore Interface</td>
                            <td data-bs-target="license" class="ps-0">hhet6454788gfg555hhh4</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Dec 30, 2019</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">none set</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Inactive</td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Test App</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black" />
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                </button>
                            </td>
                            <td>Apr 03, 2019</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::API keys-->
        <!--begin::Modals-->
        <!--begin::Modal - Create Api Key-->
        <div class="modal fade" id="kt_modal_create_api_key" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_create_api_key_header">
                        <!--begin::Modal title-->
                        <h3 class="fw-boldest text-dark fs-1 mb-0">Create API Key</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Form-->
                    <form id="kt_modal_create_api_key_form" class="form" action="#">
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																</svg>
															</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">Please Note!</h4>
                                            <div class="fs-6 text-gray-700">Adding new API key may afftect to your
                                                <a href="#" class="fw-bold">Affiliate Income</a>.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">API Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">Short Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Describe your API"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">Category</label>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select name="category" data-control="select2" data-hide-search="true" data-placeholder="Select a Category..." class="form-select form-select-solid">
                                        <option value="">Select a Category...</option>
                                        <option value="1">Craft</option>
                                        <option value="2">Project Alice</option>
                                        <option value="3">Keenthemes</option>
                                        <option value="4">General</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Heading-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold">
                                            <span class="required">Specify Your API Method</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Description-->
                                        <div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Row-->
                                    <div class="fv-row">
                                        <!--begin::Radio group-->
                                        <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                            <!--begin::Radio-->
                                            <label class="btn btn-outline-secondary text-gray-400 text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" name="method" value="1" />
                                                <!--end::Input-->
                                                Open API</label>
                                            <!--end::Radio-->
                                            <!--begin::Radio-->
                                            <label class="btn btn-outline-secondary text-gray-400 text-hover-white text-active-white btn-outline btn-active-success active" data-kt-button="true">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" name="method" checked="checked" value="2" />
                                                <!--end::Input-->
                                                SQL Call</label>
                                            <!--end::Radio-->
                                            <!--begin::Radio-->
                                            <label class="btn btn-outline-secondary text-gray-400 text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" name="method" value="3" />
                                                <!--end::Input-->
                                                UI/UX</label>
                                            <!--end::Radio-->
                                            <!--begin::Radio-->
                                            <label class="btn btn-outline-secondary text-gray-400 text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" name="method" value="4" />
                                                <!--end::Input-->
                                                Docs</label>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_create_api_key_cancel" class="btn btn-light me-3">Discard</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create Api Key-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
@endsection

@section("script")

@endsection
