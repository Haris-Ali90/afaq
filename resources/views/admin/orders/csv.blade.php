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
                                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 88%;"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex-wrap justify-content-start">
                                    <div class="d-flex flex-wrap">
                                        {{--                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">--}}
                                        {{--                                            <div class="d-flex align-items-center">--}}
                                        {{--                                                <div class="fs-4 fw-bolder"></div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>--}}
                                        {{--                                        </div>--}}
                                        <div class="col-md-2 col-lg-2 col-xxl-2 pr-2">
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active"
                                                data-kt-button="true">
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1"
                                                           checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step One</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Upload Orders</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-1"></div>

                                        <div class="col-md-2 col-lg-2 col-xxl-2 pr-2">
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                data-kt-button="true">
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1"
                                                           checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step Two</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Validate Orders</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-1"></div>

                                        <div class="col-md-2 col-lg-2 col-xxl-2 pr-2">
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                data-kt-button="true">
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1"
                                                           checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step Three</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Processing Orders</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-1"></div>

                                        <div class="col-md-2 col-lg-2 col-xxl-2 pr-2">
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                data-kt-button="true">
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="usage" value="1"
                                                           checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder mb-1 d-block">Step Four</span>
                                                    <span class="fw-bold fs-7 text-gray-600">Confirmation Orders</span>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
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
                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="" id="images-div">
                                        <form id="csv-order-form" class="form" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <label for="csvFile" class="text-hover-primary fs-5 fw-bolder col-md-12 col-lg-12 col-xl-12">
                                                        <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                                                            <input type="file" id="csvFile" accept=".csv" style="display: none;">
                                                            <i class="fa fa-upload mb-4" aria-hidden="true" style="font-size: xxx-large;"></i>
                                                            Upload CSV File Here
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <a href="{{ asset('assets/sample/files/AfaqSample-Ecom.csv') }}"
                                                       download class="text-hover-primary fs-5 fw-bolder mb-2">
                                                        <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                                                            {{--                                                        <img src="{{ asset('assets/media/svg/files/upload.svg') }}" class="" alt=""/>--}}
                                                            <i class="fa fa-download mb-4" aria-hidden="true" style="font-size: xxx-large;"></i>
                                                            Download Sample File
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <form id="csv-order-data" style="overflow-y: auto">

                                    <table id="resultTable" border="1" style="width:100%; margin-top:20px;">
                                        <thead>
                                        <tr id="tableHead">
                                            <!-- Column headers will be inserted here -->
                                            <th>Category</th>
                                            <th>Vendor Name</th>
                                            <th>Vendor Name</th>
                                            <th>Vendor Name</th>
                                            <th>Vendor Name</th>
                                            <th>Description</th>
                                            <th>Tracking Id</th>
                                            <th>Customer Name</th>
                                            <th>Customer Phone</th>
                                            <th>Customer Email</th>
                                            <th>Customer Address</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                        <!-- Data will be inserted here -->
                                        </tbody>
                                    </table>
                                        <button type="button" id="process-order" class="btn btn-Primary">Process Orders</button>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--end::Tab Content-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        document.getElementById('csvFile').addEventListener('change', function () {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($('#csv-order-form')[0]);
            formData.append('csvFile', $(this)[0].files[0]);

            $.ajax({
                url: '{{ route("admin.orders.csv.store") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function (response) {
                    console.log('File uploaded successfully!');
                    // Handle success response
                    populateTable(response);
                },
                error: function (xhr, status, error) {
                    console.error('Error uploading file!');
                    // Handle error response
                }
            });
        });

        function populateTable(data) {
            // Clear existing table data
            // $('#tableHead').empty();
            $('#tableBody').empty();

            // Create table headers
            if (data.length > 0) {
                var headers = data[0];
                var headerRow = $('<tr>');
                for (var i = 0; i < headers.length; i++) {
                    headerRow.append('<th>' + 'Column' + (i + 1) + '</th>'); // Using Column1, Column2, etc. as headers
                }
                // $('#tableHead').append(headerRow);
            }

            // Populate the table with new data
            data.forEach(function (row) {
                var rowElement = $('<tr>');
                row.forEach(function (cell, index) {
                    rowElement.append('<td><input type="text" name="column' + (index + 1) + '[]" value="' + cell + '"></td>');
                });
                $('#tableBody').append(rowElement);
            });
        }

        document.getElementById('process-order').addEventListener('click', function () {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = $('#csv-order-data').serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.orders.csv.process') }}', // Replace with your server endpoint
                data: formData,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                },
                success: function (response) {
                    Swal.fire({
                        title: "Good job!",
                        text: "You have successfully processed the order",
                        icon: "success"
                    });
                },
                error: function (error) {
                    console.error('Error submitting form:', error);
                }
            });
        });

    </script>
@endsection
