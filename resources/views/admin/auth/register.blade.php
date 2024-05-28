<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Recognition</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets."/>
    <meta name="keywords"
          content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Seven HTML Pro - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme - Seven HTML Free by KeenThemes"/>
    <meta property="og:url" content="https://keenthemes.com/products/seven-html-pro"/>
    <meta property="og:site_name" content="Seven HTML Free by Keenthemes"/>
    <link rel="canonical" href="https://preview.keenthemes.com/seven-html-pro"/>
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>

</head>
<body id="kt_body" class="bg-dark">
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14-dark.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="#" class="mb-12">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-2.svg') }}" class="h-60px"/>
            </a>
            <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <div class="mb-10 text-center">
                        <h1 class="text-dark mb-3">
                            Create an Account
                        </h1>

                        <div class="text-gray-400 fw-semibold fs-4">
                            Already have an account?

                            <a href="{{ route('login') }}" class="link-primary fw-bold">
                                Sign in here
                            </a>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Action-->
                    <button type="button" class="btn btn-primary fw-bold w-100 mb-10">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                             class="h-20px me-3"/>
                        Sign in with Google
                    </button>
                    <!--end::Action-->

                    <!--begin::Separator-->
                    <div class="d-flex align-items-center mb-10">
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        <span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="first_name" class="col-md-4 col-form-label text-left">First Name</label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="col-md-4 col-form-label text-left">Last Name</label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">
                            <label for="email" class="col-md-1 col-form-label text-left">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password" class="col-md-1 col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
{{--                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">--}}
{{--                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>--}}
{{--                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>--}}
{{--                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>--}}
{{--                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>--}}
{{--                    </div>--}}

{{--                    <div class="text-muted">--}}
{{--                        Use 8 or more characters with a mix of letters, numbers & symbols.--}}
{{--                    </div>--}}

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password-confirm" class="col-md-3 col-form-label text-left">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="fv-row mb-10 row">
                        <label class="form-check form-check-custom form-check-solid form-check-inline col-md-6">
                            <input class="form-check-input" type="checkbox" name="toc" value="1"/>
                            <span class="form-check-label fw-semibold text-gray-700 fs-6">I Agree <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid form-check-inline col-md-6">
                            <input class="form-check-input" type="checkbox" name="user_type" value="1"/>
                            <span class="form-check-label fw-semibold text-gray-700 fs-6">Individual</span>

                            <input class="form-check-input photographer-input" type="checkbox" name="user_type" value="2" style="margin-left: 10px;">
                            <span class="form-check-label fw-semibold text-gray-700 fs-6">Photographer</span>
                        </label>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/authentication/sign-up/general.js') }}"></script>

</body>
<!--end::Body-->
</html>
