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

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-8">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <div class="flex-grow-1">
                                <div class="justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"></a>
                                            <span class="badge badge-light-success me-auto">In Progress</span>
                                        </div>
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">#1 Upload your
                                            images to get view and shareable to multiple user
                                        </div>
                                        <div class="h-8px bg-light rounded mb-3">
                                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 88%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-wrap justify-content-start">
                                    <div class="d-flex flex-wrap">
{{--                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="fs-4 fw-bolder"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-4 col-lg-4 col-xxl-4 pr-2">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step One</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xxl-4 pr-2">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step One</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xxl-4 pr-2">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step One</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                                                </span>
                                            </label>
                                        </div>
{{--                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2"></span>--}}
{{--                                                <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="5">0</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="fw-bold fs-6 text-gray-400">Images</div>--}}
{{--                                        </div>--}}

{{--                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2"></span>--}}
{{--                                                <div class="fs-4 fw-bolder" data-kt-countup="true"--}}
{{--                                                     data-kt-countup-value="15000" data-kt-countup-prefix="$">0--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>--}}
{{--                                        </div>--}}

                                    </div>
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

                        </div>
                    </div>
                </div>
                <!--end::Modal - New Target-->



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
                                        <div class="row">
                                            <!--begin::Item-->
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <!--begin::Card-->
                                                <a href="#" class="text-hover-primary fs-5 fw-bolder mb-2" data-bs-toggle="modal"
                                                   data-bs-target="#kt_modal_share_earn">
                                                    <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                                                        <img src="{{ asset('assets/media/svg/files/upload.svg') }}" class="" alt=""/>
                                                        Create New Folder
                                                    </div>
                                                </a>
                                                <!--end::Card-->
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <!--begin::Card-->
                                                <a href="#" class="text-hover-primary fs-5 fw-bolder mb-2" data-bs-toggle="modal"
                                                   data-bs-target="#kt_modal_share_earn">
                                                    <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                                                        <img src="{{ asset('assets/media/svg/files/upload.svg') }}" class="" alt=""/>
                                                        Create New Folder
                                                    </div>
                                                </a>
                                                <!--end::Card-->
                                            </div>

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
