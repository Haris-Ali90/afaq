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
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
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
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bolder"></div>
                                            </div>
                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                                        </div>

                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2"></span>
                                                <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="5">0</div>
                                            </div>
                                            <div class="fw-bold fs-6 text-gray-400">Images</div>
                                        </div>

                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2"></span>
                                                <div class="fs-4 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="15000" data-kt-countup-prefix="$">0
                                                </div>
                                            </div>
                                            <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
                                        </div>

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
                                        <input type="hidden" value="" id="folder_id" name="folder_id">
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
