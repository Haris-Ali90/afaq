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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Order By Form</h1>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="step-form-order">
                    <div class="card mt-4 mb-4" id="category-base">
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                             data-bs-target="#kt_account_email_preferences" aria-expanded="true"
                             aria-controls="kt_account_email_preferences">
                            <div class="card-title m-0 col-md-12">
                                <h3 class="fw-bolder m-0 col-md-6">Select Base Category</h3>
                                {{--                                <h3 class="fw-bolder m-0 col-md-6" style="text-align: right">(Please Click here to collapse category)</h3>--}}
                            </div>
                        </div>
                        <div id="kt_account_email_preferences" class="collapse show">
                            <div class="card-body border-top px-9 py-9">
                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                    <input class="form-check-input me-3" type="radio" name="category"
                                           value="Air"/>
                                    <span class="form-check-label d-flex flex-column align-items-start">
                                            <span class="fw-bolder fs-5 mb-0">Air Base</span>
                                            <span class="text-muted fs-6">This category for air base shipment to delivered order to customer.</span>
                                        </span>
                                </label>
                                <div class="separator separator-dashed my-6"></div>

                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                    <input class="form-check-input me-3" type="radio" name="category"
                                           value="Sea"/>
                                    <span class="form-check-label d-flex flex-column align-items-start">
                                            <span class="fw-bolder fs-5 mb-0">Sea Base</span>
                                            <span class="text-muted fs-6">This category for sea base shipment to delivered order to customer.</span>
                                        </span>
                                </label>
                                <div class="separator separator-dashed my-6"></div>

                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                    <input class="form-check-input me-3" type="radio" name="category"
                                           value="Land"/>
                                    <span class="form-check-label d-flex flex-column align-items-start">
                                            <span class="fw-bolder fs-5 mb-0">Land Base</span>
                                            <span class="text-muted fs-6">This category for land base shipment to delivered order to customers</span>
                                        </span>
                                </label>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button class="btn btn-primary px-6" type="button" onclick="orderStepForm(2)">Continue
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="pickup-detail" style="display: none">
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                 aria-controls="kt_account_profile_details">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Pickup Details</h3>
                                </div>
                            </div>
                            <div id="kt_account_profile_details" class="collapse show">
                                <div class="card-body border-top p-9">

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="fname"
                                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                           placeholder="First name">
                                                </div>
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="lname"
                                                           class="form-control form-control-lg form-control-solid"
                                                           placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Contact Phone</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                               title="Phone number must be active"></i>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="044 3276 454 935">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Email</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="email" name="email"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="keenthemes.com">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="address"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="House No # U-895">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Country</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                               title="Country of origination"></i>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="country" aria-label="Select a Country" data-control="select2"
                                                    data-placeholder="Select a country..."
                                                    class="form-select form-select-solid form-select-lg fw-bold">
                                                <option value="">Select a Country...</option>
                                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland slands</option>
                                                <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                        <div class="col-lg-8 fv-row">
                                            <div class="d-flex align-items-center mt-3">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input" name="communication[]"
                                                           type="checkbox" value="1"/>
                                                    <span class="fw-bold ps-2 fs-6">Email</span>
                                                </label>
                                                <label class="form-check form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="communication[]"
                                                           type="checkbox" value="2"/>
                                                    <span class="fw-bold ps-2 fs-6">Phone</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="button" class="btn btn-light btn-active-light-primary me-2"
                                            onclick="orderStepForm(1)">Previous
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            id="kt_account_profile_details_submit" onclick="orderStepForm(3)">Continue
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4" id="dropoff-details" style="display: none">
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                 aria-controls="kt_account_profile_details">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">DroppOff Details</h3>
                                </div>
                            </div>
                            <div id="kt_account_profile_details" class="collapse show">
                                <div class="card-body border-top p-9">

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="d_fname"
                                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                           placeholder="First name">
                                                </div>
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="d_lname"
                                                           class="form-control form-control-lg form-control-solid"
                                                           placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Contact Phone</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                               title="Phone number must be active"></i>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="d_phone"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="044 3276 454 935">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Email</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="email" name="d_email"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="keenthemes.com">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="d_address"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="House No # U-895">
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Country</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                               title="Country of origination"></i>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="d_country" aria-label="Select a Country" data-control="select2"
                                                    data-placeholder="Select a country..."
                                                    class="form-select form-select-solid form-select-lg fw-bold">
                                                <option value="">Select a Country...</option>
                                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland slands</option>
                                                <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                        <div class="col-lg-8 fv-row">
                                            <div class="d-flex align-items-center mt-3">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input" name="d_communication[]"
                                                           type="checkbox" value="1"/>
                                                    <span class="fw-bold ps-2 fs-6">Email</span>
                                                </label>
                                                <label class="form-check form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="d_communication[]"
                                                           type="checkbox" value="2"/>
                                                    <span class="fw-bold ps-2 fs-6">Phone</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="button" class="btn btn-light btn-active-light-primary me-2"
                                            onclick="orderStepForm(2)">Previous
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            id="order_details_submit"> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection

@section('scripts')
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
    <script>
        {{--$(document).ready(function () {--}}
        {{--    // Function to generate link on keyup--}}
        {{--    $('input[name="name"]').on('keyup', function () {--}}
        {{--        var folderName = $(this).val();--}}
        {{--        var generatedSlug = generateSlug(folderName);--}}
        {{--        var generatedLink = '{{ env('APP_URL') }}/admin/folder?slug=' + generatedSlug; // Replace with your actual URL structure--}}
        {{--        $('#kt_share_earn_link_input').val(generatedLink);--}}
        {{--    });--}}
        {{--});--}}

        document.getElementById('order_details_submit').addEventListener('click', function () {
            // Your code here
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = $('#step-form-order').serialize();

            // Make an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.orders.form.store') }}', // Replace with your server endpoint
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

                    location.href = '{{ route('admin.orders.form') }}'
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

        function orderStepForm(step) {
            if (step == 1) {
                document.getElementById("pickup-detail").style.display = "none";
                document.getElementById("category-base").style.display = 'block';
            }
            if (step == 2) {
                document.getElementById("pickup-detail").style.display = "block";
                document.getElementById("dropoff-details").style.display = "none";
                document.getElementById("category-base").style.display = 'none';
            }
            if (step == 3) {
                document.getElementById("dropoff-details").style.display = "block";
                document.getElementById("pickup-detail").style.display = 'none';
            }
        }

    </script>


@endsection
