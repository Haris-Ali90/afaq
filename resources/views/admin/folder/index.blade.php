@extends('admin.partial.main')

@section('styles')
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Folder</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->

        @if(count($folders) == 0)
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body pb-0">
                            <!--begin::Heading-->
                            <div class="card-px text-center pt-20 pb-5">
                                <!--begin::Title-->
                                <h2 class="fs-2x fw-bolder mb-0">Create Start Up Folder</h2>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <p class="text-gray-400 fs-4 fw-bold py-7">Click on the below button to start up
                                    <br/>your folder development.</p>
                                <!--end::Description-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_share_earn">Start Up</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="{{ asset('assets/media/illustrations/sketchy-1/9.png') }}" alt=""
                                     class="mw-100 h-200px h-sm-325px"/>
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                </div>
                <!--end::Container-->
            </div>
        @else
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Toolbar-->
                    <div class="d-flex flex-wrap flex-stack my-5">
                        <!--begin::Heading-->
                        <h3 class="fw-bolder my-2">Folders
                            <span class="fs-6 text-gray-400 fw-bold ms-1">+ {{ count($folders) }} </span></h3>
                        <!--end::Heading-->
                        <!--begin::Controls-->
                        <div class="d-flex my-2">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative me-4">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-3 position-absolute ms-3 mt-n1">
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
                                       class="form-control form-control-sm form-control-solid bg-body fw-bold fs-7 w-150px ps-9"
                                       placeholder="Search"/>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Controls-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9" id="folder-div">
                    @foreach($folders as $folder)
                        <!--begin::Col-->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                        <!--begin::Name-->
                                        <a href="{{ route('admin.folder.images.index', $folder) }}"
                                           class="text-gray-800 text-hover-primary d-flex flex-column">
                                            <!--begin::Image-->
                                            <div class="symbol symbol-75px mb-5">
                                                <img src="{{ asset('assets/media/svg/files/folder-document.svg') }}"
                                                     alt=""/>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bolder mb-2">{{ $folder->name }}</div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Name-->
                                        <!--begin::Description-->
                                        <div class="fs-7 fw-bold text-gray-400">7 files</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                    @endforeach

                    <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
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
                        <!--end::Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end::Container-->
            </div>
    @endif
    <!--end::Post-->
        <!--begin::Modal - Share & Earn-->
        <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-800px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
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
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y pt-0 pb-15">
                        <!--begin::Wrapper-->
                        <div class="mw-lg-600px mx-auto">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">Folder</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-bold fs-5">This folder is used for image uploading
                                    and
                                    downloading etc..
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::form-->
                            <form id="folder-form" class="w-100 position-relative mb-3"
                                  autocomplete="off">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <!--end::Title-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Folder Name</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=""
                                               data-bs-original-title="Specify your unique folder name"
                                               aria-label="Specify your unique folder name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               name="name" placeholder="" value="">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--begin::Title-->
                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                        <span class="required">Shareable Link</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                           data-bs-toggle="tooltip"
                                           title="" data-bs-original-title="Its auto generated link"
                                           aria-label="Specify your unique app name"></i>
                                    </label>
                                    <div class="d-flex">

                                        <input id="kt_share_earn_link_input" type="text"
                                               class="form-control form-control-solid me-3 flex-grow-1"
                                               name="link" readonly
                                               value="">
                                        <button id="kt_share_earn_link_copy_button"
                                                class="btn btn-light fw-bolder flex-shrink-0"
                                                type="button"
                                                data-clipboard-target="#kt_share_earn_link_input">Copy Link
                                        </button>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary d-inline-block"
                                                id="myButton">Submit
                                        </button>

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->


                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Share & Earn-->
    </div>



@endsection

@section('scripts')
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
    <script>
        $(document).ready(function () {
            // Function to generate link on keyup
            $('input[name="name"]').on('keyup', function () {
                var folderName = $(this).val();
                var generatedSlug = generateSlug(folderName);
                var generatedLink = '{{ env('APP_URL') }}/admin/folder?slug=' + generatedSlug; // Replace with your actual URL structure
                $('#kt_share_earn_link_input').val(generatedLink);
            });
        });

        document.getElementById('myButton').addEventListener('click', function () {
            // Your code here
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = $('#folder-form').serialize();

            // Make an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.folder.store') }}', // Replace with your server endpoint
                data: formData,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                },
                success: function (response) {
                    // Handle the successful responseo
                    Swal.fire({
                        title: "Good job!",
                        text: "You have successfully created folder",
                        icon: "success"
                    });
                    $('#folder-div').load(window.location.href + ' #folder-div');
                    $('#kt_modal_share_earn').modal('hide');

                },
                error: function (error) {
                    // Handle errors
                    console.error('Error submitting form:', error);
                }
            });
        });

        function generateSlug(folderName) {
            return folderName.toLowerCase().replace(/\s+/g, '-');
        }

    </script>


@endsection
