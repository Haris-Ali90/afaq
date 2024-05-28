<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
@yield('styles')
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Sidebar-->
                @include('admin.layouts.sidebar')
                <!--begin::Sidebar-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    @include('admin.layouts.header')
                    <!--end::Header-->

                    <!--begin::Content-->
                    @yield('content')
                    <!--end::Content-->

                    <!--begin::Footer-->
                    @include('admin.layouts.footer')
                    <!--end::Footer-->
                </div>
            </div>
        </div>
        @include('admin.layouts.modals')
        @include('admin.layouts.script')
        @yield('scripts')
    </body>
</html>
