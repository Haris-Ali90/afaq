@extends('admin.partial.main')

@section('styles')

@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Folder</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">Images</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--end::Toolbar-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-8">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <div
                                class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                {!! QrCode::size(200)->generate('https://www.youtube.com/watch?v=S8tiai8LBwY') !!}
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $folder->name }}</a>
                                            <span class="badge badge-light-success me-auto">In Progress</span>
                                        </div>
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">#1 Upload your
                                            images to get view and shareable to multiple user
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_new_target">Add Images</a>
                                        <!--begin::Menu-->
                                    {{--                                        <div class="me-0">--}}
                                    {{--                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
                                    {{--                                                <i class="bi bi-three-dots fs-3"></i>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <!--begin::Menu 3-->--}}
                                    {{--                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">--}}
                                    {{--                                                <!--begin::Heading-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Heading-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Create Invoice</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment--}}
                                    {{--                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Generate Bill</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">--}}
                                    {{--                                                        <span class="menu-title">Subscription</span>--}}
                                    {{--                                                        <span class="menu-arrow"></span>--}}
                                    {{--                                                    </a>--}}
                                    {{--                                                    <!--begin::Menu sub-->--}}
                                    {{--                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Plans</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Billing</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Statements</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu separator-->--}}
                                    {{--                                                        <div class="separator my-2"></div>--}}
                                    {{--                                                        <!--end::Menu separator-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <div class="menu-content px-3">--}}
                                    {{--                                                                <!--begin::Switch-->--}}
                                    {{--                                                                <label class="form-check form-switch form-check-custom form-check-solid">--}}
                                    {{--                                                                    <!--begin::Input-->--}}
                                    {{--                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />--}}
                                    {{--                                                                    <!--end::Input-->--}}
                                    {{--                                                                    <!--end::Label-->--}}
                                    {{--                                                                    <span class="form-check-label text-muted fs-6">Recuring</span>--}}
                                    {{--                                                                    <!--end::Label-->--}}
                                    {{--                                                                </label>--}}
                                    {{--                                                                <!--end::Switch-->--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                    <!--end::Menu sub-->--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3 my-1">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Settings</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <!--end::Menu 3-->--}}
                                    {{--                                        </div>--}}
                                    <!--end::Menu-->
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="fs-4 fw-bolder">{{ date("d-M-Y", strtotime($folder->due_date)) }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(-90 11 18)"
                                                                              fill="black"/>
																		<path
                                                                            d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="5">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Images</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(90 13 6)" fill="black"/>
																		<path
                                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="15000" data-kt-countup-prefix="$">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover mb-3">
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Alan Warden">
                                            <span
                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Michael Eberon">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-12.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Michelle Swanston">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-13.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Francis Mitcham">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-5.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Susan Redwood">
                                            <span
                                                class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-3.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Perry Matthew">
                                            <span class="symbol-label bg-info text-inverse-info fw-bolder">P</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Barry Walter">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-7.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::All users-->
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder"
                                                  data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                  title="View more users">+42</span>
                                        </a>
                                        <!--end::All users-->
                                    </div>
                                    <!--end::Users-->
                                </div>
                            </div>
                        </div>
                        <div class="separator"></div>
                    </div>
                </div>

                <!--begin::Modal - New Target-->
                <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content rounded">
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="black"/>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                <form id="images-form" class="form" enctype="multipart/form-data">
                                    <div class="mb-13 text-center">
                                        <h1 class="mb-3">Image Upload</h1>
                                        <div class="text-muted fw-bold fs-5">
                                            <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.
                                        </div>
                                    </div>

                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Upload File Here</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="hidden" value="{{ $folder->id }}" id="folder_id" name="folder_id">
                                        <input type="file" name="file" class="form-control form-control-solid mb-3 mb-lg-0">
                                        <!--end::Input-->
                                    </div>

                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                            Cancel
                                        </button>
                                        <button type="button" id="kt_modal_new_target_submit" class="btn btn-primary">
                                            <span class="indicator-label" id="img-sbmt-btn">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Target-->

                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack pb-7">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap align-items-center my-1">
                        <h3 class="fw-bolder me-5 my-1">Images ({{ count($images) }})</h3>
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-3 position-absolute ms-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                          height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                          fill="black"/>
													<path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black"/>
												</svg>
											</span>
                            <!--end::Svg Icon-->
                            <input type="text" id="kt_filter_search"
                                   class="form-control form-control-white form-control-sm w-150px ps-9"
                                   placeholder="Search"/>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Controls-->
                    <div class="d-flex flex-wrap my-1">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                   data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                             height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1"
                                                                      fill="#000000"/>
																<rect x="14" y="5" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
																<rect x="5" y="14" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
																<rect x="14" y="14" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
															</g>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path
                                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                fill="black"/>
															<path opacity="0.3"
                                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                  fill="black"/>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                        <!--begin::Actions-->
                        <div class="d-flex my-0">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Filter"
                                    class="form-select form-select-white form-select-sm w-150px me-5">
                                <option value="1">Recently Updated</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Quarter</option>
                                <option value="4">Last Year</option>
                            </select>
                            <!--end::Select-->
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Export"
                                    class="form-select form-select-white form-select-sm w-100px">
                                <option value="1">Excel</option>
                                <option value="1">PDF</option>
                                <option value="2">Print</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Controls-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                        <!--begin::Row-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::About card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Team-->
                                    <div class="" id="images-div">

                                        <!--begin::Wrapper-->
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
                                            <!--begin::Item-->
                                            @foreach($images as $image)
                                            <div class="col text-center mb-9">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('{{ $image->getImage($image->path) }}')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
{{--                                                    <a href=""--}}
{{--                                                       class="text-dark fw-bolder text-hover-primary fs-3">Paul--}}
{{--                                                        Miles</a>--}}
{{--                                                    <!--end::Name-->--}}
{{--                                                    <!--begin::Position-->--}}
{{--                                                    <div class="text-muted fs-6 fw-bold">Development Lead</div>--}}
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                            @endforeach

                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Team-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::About card-->
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
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">6</a>
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
                    <!--end::Tab pane-->

                </div>
                <!--end::Tab Content-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('img-sbmt-btn').addEventListener('click', function () {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($('#images-form')[0]);
            // Make an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.folder.images.store') }}', // Replace with your server endpoint
                data: formData,
                processData: false,  // Prevent jQuery from automatically transforming the data into a query string
                contentType: false,  // Prevent jQuery from automatically setting the Content-Type header
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);

                },
                success: function (response) {
                    // Handle the successful response
                    Swal.fire({
                        title: "Good job!",
                        text: "You have successfully upload your image",
                        icon: "success"
                    });
                    $('#images-div').load(window.location.href + ' #images-div');
                    $('#kt_modal_new_target').modal('hide');
                },
                error: function (error) {
                    // Handle errors
                    console.error('Error submitting form:', error);
                }
            });
        });

    </script>
@endsection
